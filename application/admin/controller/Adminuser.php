<?php
namespace app\admin\controller;
use think\Controller;
use think\Db;
class Adminuser extends Allow
{
   public function getIndex(){
       $data=Db::table('admin_user')->select();
    //    var_dump($data);
       foreach ($data as $key => $value) {
            $info=Db::query("select r.name  from user_role as ur ,role as r where ur.uid = {$value['id']} and ur.rid = r.id");
            // var_dump($info);
            $data[$key]['right']='';
            foreach ($info as $val){
                $data[$key]['right'].=$val['name']." , ";
            }
            $data[$key]['right']=rtrim($data[$key]['right'],' , ');
        }
       return $this->fetch('adminuser/index',['data'=>$data]);
   }
// 添加管理员
   public function getAdd(){
        $role=Db::table('role')->select();
        return $this->fetch('/adminuser/add',['role'=>$role]);
   }
   public function postInsert(){
        $request=request();
        $param=$request->param();
        if(!isset($param['role'])){
            $this->error('请选择管理员权限','/adminuser/add');
        }
        $name=$request->param('name');
        $password=$request->param('password');
        $status=$request->param('status');
        $newId= Db::table('admin_user')->insertGetId(['name'=>"$name",'password'=>"$password",'status'=>"$status"]);
        if($newId){
            
            try{
                foreach($param['role'] as $val ){
                   $bool= Db::table('user_role')->insert(['uid'=>$newId,'rid'=>$val]);
                   if(!$bool){
                       throw  new Exception("插入user_role表数据失败");
                   }
                }
            }catch(Exception $e){
                $this->error($e);
            }
            $this->success('添加成功','/adminuser/index');
        }else{
            $this->error('添加失败');
        }

   }
// 删除管理员 user 和 user_role表数据清除
   public function getDel(){
       $request=request();
       $id=$request->param('id');
       try{
           $bool_u=Db::table('admin_user')->where('id',$id)->delete();
           $bool_ur=Db::table('user_role')->where('uid',$id)->delete();
           if( !($bool_u || $bool_ur)){
            throw new Exception('删除失败');
           }
       }catch(Exception $e){
            $this->error($e);
       }
       $this->success('删除成功','/adminuser/index');
   }
// 修改数据
   public function getEdit(){
       $request=request();
       $id=$request->param('id');
    //    var_dump($id);
    $info=Db::table('admin_user')->where('id',$id)->find();
        $role=Db::table('role')->select();
        return $this->fetch('adminuser/edit',['info'=>$info,'role'=>$role]);
   }
   public function postUpdate(){
        $request=request();
        $param=$request->param();
        // var_dump($param);
        if(!isset($param['role'])){
            $this->error('请选择管理员权限','/adminuser/index');
        }
        $id=$request->param('id');
        // $role=$request->param('role');
        // var_dump($role);die; //注意不能使用这种方法获取 数组子数据
        $role=$param['role'];
        $name=$request->param('name');
        $password=$request->param('password');
        $status=$request->param('status');
        
        Db::table('admin_user')->where('id',$id)->update(['name'=>"$name",'password'=>"$password",'status'=>"$status"]);
        // 需要先删除原来的 user_role表数据 再插入新数据
            Db::table('user_role')->where('uid',$id)->delete();
            foreach($role as $key => $value){
                Db::table('user_role')->insert(['uid'=>$id,'rid'=>$value]);
            }
        $this->success('修改成功','/adminuser/index');
   }

//    Ajax的用户状态修改
   public function postStatus(){
    //    $info =Db::table()
        $request=request();
        $id=$request->param('id');
        $status=Db::table('admin_user')->where('id',$id)->find();
        if($status['status'] == '1'){
            $result=Db::table('admin_user')->where('id',$id)->update(['status'=>'0']);
        }else{
            $result=Db::table('admin_user')->where('id',$id)->update(['status'=>'1']);
        }
        return $result;
   }
}