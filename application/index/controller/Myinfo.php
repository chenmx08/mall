<?php
namespace app\index\controller;
use think\Controller;
use think\Db;

class Myinfo extends Controller
{
    public function getIndex()
    {
        session('user_id',1);
        $user_id=session('user_id');
        $sql="select * from orders as o , ";
        return $this->fetch('index/myinfo');
    }

   
}
