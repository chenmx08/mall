<?php
namespace app\index\controller;
use think\Controller;
use think\Db;

class Index extends Controller
{
    public function getIndex()
    {
        $carousel=Db::table('carousel')->where('status',1)->select();
        return $this->fetch('index/index',['carousel'=>$carousel]);
    }

    public function getGoodsInfo(){
        $request=request();
        $id=$request->param('id');
        $data=Db::table('goods_info')->where('cate_id',$id)->select();
        // var_dump($data);die;
        return $this->fetch('index/goodsList',['data'=>$data]);
    }

    public function getItem(){
        $request=request();
        $id=$request->param('id');
        // var_dump($id);
        $data=Db::table('goods_info')->where('id',$id)->find();
        return $this->fetch('index/goodsItem',['data'=>$data]);
    }
}
