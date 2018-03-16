<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

// return [
//     '__pattern__' => [
//         'name' => '\w+',
//     ],
//     '[hello]'     => [
//         ':id'   => ['index/hello', ['method' => 'get'], ['id' => '\d+']],
//         ':name' => ['index/hello', ['method' => 'post']],
//     ],

// ];
use think\Route;
// 后台模块 
    // 登录页面
Route::controller('/adminlogin','admin/Adminlogin');
//      首页 路由
Route::controller('/admin','admin/Admin');
//      商品分类路由
Route::controller('/types','admin/Types');
// 商品路由
Route::controller('/goods','admin/Goods');
//  后台管理员路由
Route::controller('/adminuser','admin/Adminuser');   //管理员 人员
Route::controller('/role','admin/Role');             //管理员 角色
Route::controller('/node','admin/Node');             //权限节点
// 公告模块控制器
Route::controller('/announce','admin/announce');
// 轮播图
Route::controller('/carousel','admin/carousel');
// 后台订单管理
Route::controller('/adminOrder','admin/order');


// 前台路由
//  前台首页 商品列表 详情
Route::controller('/index','index/index');
// 前台下订单 
Route::controller('/order','index/order');
// 个人订单页
Route::controller('/myinfo','index/myinfo');


//前台登录
Route::controller("/indexlogin","index/Login");

//前台注册
Route::controller("/indexregister","index/Register");

Route::get('/','index/index/getIndex');

