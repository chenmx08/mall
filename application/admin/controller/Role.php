<?php
namespace app\admin\controller;
use think\Controller;
use think\Db;
class Role extends Allow
{
    // 显示角色列表页
   public function getIndex(){
       $role=Db::table('role')->select();
       foreach ($role as $key => $value) {
            $res=Db::query("select n.name from role_node as rn , node as n where rn.rid ={$value['id']} and rn.nid = n.id");
            $role[$key]['right']='';
            foreach ($res as $k => $v) {
                $role[$key]['right'].=$v['name'].',';
            }
            $role[$key]['right']=rtrim($role[$key]['right'],',');
            // var_dump($role);
        }
        
       return $this->fetch('role/index',['role'=>$role]);
   }
// 添加角色
   public function getAdd(){
       $node=Db::table('node')->select();
       return $this->fetch('role/add',['node'=>$node]);
   }
   public function postInsert(){
       $request=request();
       
       $param=$request->param();
       var_dump($param);
       if(!isset($param['node'])){
            $this->error('请选择对应权限','/role/add');
        }
    //    在role表插入 name
        $name=$param['name'];
        $rid=Db::table('role')->insertGetId(['name'=>$name]);
    // 在 role_node 插入对应的操作权限
        $node=$param['node'];
        $mark=0;
        foreach($node as $k=>$v){
            $bool=Db::table('role_node')->insert(['rid'=>$rid,'nid'=>$v]);
            if($bool){
                $mark++;
            }
        }
        if($mark == count($node)){
            $this->success('修改成功','/role/index');
        }else{
            $this->error('修改失败','/role/index');
        }
   }
// 修改
    public function getEdit(){
        $request=request();
        $id=$request->param('id');
        // var_dump($id);
        $role=Db::table('role')->where('id',$id)->find();
        $nids=Db::table('role_node')->where('rid',$id)->select();
        $node=Db::table('node')->select();
        // var_dump($role);
        // var_dump($nids);
        return $this->fetch('role/edit',['role'=>$role,'nids'=>$nids,'node'=>$node]);
    }

    public function postUpdate(){
        $request=request();
        $param=$request->param();
        var_dump($param);
        $id=$param['id'];
        $name=$param['name'];
        $nodes=$param['node'];
        // var_dump($nodes);die;
        Db::startTrans();
        try{
            Db::table('role')->where('id',$id)->update(['name'=>$name]);
            Db::table('role_node')->where('rid',$id)->delete();
            foreach($nodes as $k => $v){
                Db::table('role_node')->insert(['rid'=>$id,'nid'=>$v]);
            }
            Db::commit();
        }catch(\Exception $e){
            Db::rollback();
            
            return $this->error('','/role/index');
        }
        return $this->success('修改成功','/role/index');
    }

// 删除
    public function getDel(){
        $request=request();
        $param=$request->param();
        $id=$param['id'];
        Db::startTrans();
        try{
            Db::table('role')->where('id',$id)->delete();
            Db::table('role_node')->where('rid',$id)->delete();
            Db::commit();
        }catch(\Exception $e){
            Db::rollback();
            $this->error('删除失败','/role/index');
        }
        $this->success('删除成功','/role/index');
            
   


    }
}




