<?php
namespace app\index\controller;
//导入Controller
use think\Controller;

use think\Db;

use think\Session;
 
class Register extends Controller
{
   
    //加载前台登录页面
    
    public function getRegister(){
    	
    	// echo 'eee';exit;
    	return $this->fetch("Register/register");
        
    }

    public function postDoregister(){
        //创建对象
        $request=request();

        //封装需要插入的数据
        $data['username']="普通用户";
        $data['email']=$request->param("email");
        $data['password']=$request->param("password");
        $data['status']=0;//0 代表未激活 
        $data['token']=rand(1,10000);

        $id=Db::name("users")->insertGetId($data);
        if($id){

           
            //激活用户
            $a=sendmail($data['email'],"激活用户","<a href='http://www.o2o21tp5.com/indexregister/jihuo?id={$id}&token={$data["token"]}'>激活用户</a>");
            if($a){
                $this->success("激活用户的邮件已经发送","https://mail.qq.com/");
            }
        }
    }


    //激活用户
    public function getJihuo(){
        //把数据表的status 由0 变为 2
        //获取id 和token 
        $id=$_GET['id'];
        $token=$_GET['token'];
        //获取当前数据库的token
        $info=Db::table("users")->where("id","{$id}")->find();
        if($token==$info['token']){
            //封装需要修改的数据
            $arr['status']=2;
            $arr['token']=rand(1,10000);
            //执行修改
            if(Db::table("users")->where("id","{$id}")->update($arr)){
            // 注册成功
                $this->success("注册成功,请登录","/indexlogin/login");
                // echo "用户已经激活,请去登录";
            }
        }
        // echo $id;

    }
    //测试邮件发送
    // public function getSend(){
    //     // sendmail();
    //     $s=sendmail("497286376@qq.com","测试","<a href=''>激活</a>");
    //          if($s){
    //      $this->redirect("邮件发送成功","https://mail.qq.com/");
    //  }
    // }
   
    
}
