<?php
namespace app\admin\controller;
use think\Controller;
use think\Db;
class Order extends Allow
{
    public function getIndex(){
        return $this->fetch('order/order');
    }
}