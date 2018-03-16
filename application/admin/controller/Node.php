<?php
namespace app\admin\controller;
use think\Controller;
use think\Db;
class Node extends Allow
{
    public function getIndex(){
        // return $this->fetch('node/index');

        $node=Db::table('node')->select();
        $total=count($node);
        $rev=4;
        $pages=ceil($total/$rev);
        // 因为页码数是一个数值 ，模板页面需要遍历显示，所以把它转换为一个数组
        $num=array();
        for($i=1;$i<=$pages;$i++){
            $num[]=$i;
        }

        $request=request();
        $param=$request->param();
        // var_dump($param);
        if(isset($param['page'])){
            $page=$request->param('page');
            $mark=true;
        }else{
            $page=1;
            $mark=false;
        }
        // return $this->fetch('node/index');
        $offset=($page-1)*$rev;
        $sql="select * from node limit $offset , $rev ";
        
        if($mark){
            $node=Db::query($sql);  //关键点 Ajax翻页的返回值的table表的HTML
            return $this->fetch('node/table',['node'=>$node]);

        }else{
            $node=Db::query($sql);
            return $this->fetch('node/index',['node'=>$node,'num'=>$num]);
        }
        
    }
// 添加节点
    public function getAdd(){
        return $this->fetch('node/add');
    }

    public function postInsert(){
        $request=request();
        $param=$request->param();
        // var_dump($param);
        $name=$param['name'];
        $mname=$param['mname'];
        $aname=$param['aname'];
        $status=$param['status'];
        Db::startTrans();
        try{
            foreach ($aname as $key => $value) {
                $aname='get'.$value;
                Db::table('node')->insert(['name'=>$name,'mname'=>$mname,'aname'=>$aname,'status'=>$status]);
            }
            Db::commit();
        }catch(Exception $e){
            Db::rollback();
            $this->error('插入失败','/node/add');
        }
        $this->success('插入成功','/node/add');
        
    }
// 修改节点  节点功能不提供修改选项，只能删除重新添加
    // public function getEdit(){
    //     $request=request();
    //     $id=$request->param('id');
    //     var_dump($id);
    //     $node=Db::table('node')->where('id',$id)->find();
    //     return $this->fetch('node/edit',['node'=>$node]);
    // }

    // public function postUpdate(){
    //     $request=request();
    //     $param=$request->param();
    //     var_dump($param);
    // }

// 删除 ajax
    public function getDel(){
        $request=request();
        $id=$request->param('id');
        // var_dump($id);die;
        $bool=Db::table('node')->where('id',$id)->delete();
        if($bool){
            return true;
        }else{
            return  false;
        }
    }
}