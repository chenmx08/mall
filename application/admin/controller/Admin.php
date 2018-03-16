<?php
namespace app\admin\controller;

use think\Controller;
use think\Db;
use think\Session;
class Admin extends Allow
{ 
    // 加载模板 首页页面

    public function getIndex(){
        return  $this->fetch('admin/index');
    }


}
