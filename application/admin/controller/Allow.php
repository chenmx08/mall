<?php

namespace app\admin\controller;
use think\Controller;
use think\Session;
class Allow extends controller{
    public function _initialize(){
        // 检测登录的session信息
        if(!Session::get('islogin')){
            $this->error('请先登录','/adminlogin/login');
        }
        // 获取当前登录用户的 权限
        $request=request();
        // 控制器 之前 检测使用的这个方法 是否在当前用户的权限下
        $controller=strtolower($request->controller());
        $action=$request->action();
        $nodelist=Session::get('nodelist');
        if(empty($nodelist[$controller]) || !in_array($action,$nodelist[$controller]) ){
            // $this->error('当前账户没有权限访问，请联系管理员');
        }
        
    }
}