<?php
namespace app\index\controller;
//导入Controller
use think\Controller;

use think\Db;

use think\Session;
 
class Login extends Controller
{
   
    //加载前台登录页面
    
    public function getLogin(){
    	
    	// echo 'eee';exit;
    	return $this->fetch("Login/login");
        
    }


    //
     public function postDologin(){

     	$request=request();
     	// var_dump($request);exit;
     	$email=$request->param('email');
    	$password=$request->param('password');
    	// var_dump($name);
    	// var_dump($email);exit;
     	

     	$info=Db::table("users")->where("email='{$email}' and password='{$password}'and status=2")->select();
     	if($info){
     		//设置用户登录信息写入到session
                Session::set('uid',$info[0]['id']);
                Session::set('username',$info[0]['username']);

    			$this->redirect("/index/index");
     	}else{

     		$this->error("用户名或者密码有误","/indexlogin/login");
     	}
     }

     public function getLogout(){
     	//销毁session
    	Session::delete('uid');
    	Session::delete('username');
    	$this->redirect("/indexlogin/login");
     }

     //密码找回模板加载
     
     public function getForget(){

        return $this->fetch("Login/forget");
     }

     //找回密码
     public function postDoforget(){
        //创建对象请求
        $request=request();
        $email=$request->param('email');
        // var_dump($email);
        //获取用户注册的信息
        $info=Db::table('users')->where("email",$email)->find();
        // var_dump($info);
        $s=sendmail($email,'o2o21密码重置',"<a href='http://mall.com/indexlogin/reset?id={$info["id"]}&token={$info['token']}'>重置密码</a>");

        if($s){
            $this->success("重置密码邮件已经发送,请登录邮箱重置密码","https://mail.qq.com/");
        }
     }


     //重置密码
     public function getReset(){

        // echo $_GET['id'].":".$_GET['token'];
        $id=$_GET['id'];
        $token=$_GET['token'];

        //获取数据库的信息
        $info=Db::table("users")->where('id',"{$id}")->find();
        // var_dump($info);exit;
        if($token==$info['token']){
            //加载重置密码模板
            return $this->fetch("Login/reset",['id'=>$info['id']]);
        }
     }


     //执行密码找回
     public function postDoreset(){
            //判断两次密码是否一致
            if($_POST['password']==$_POST['repwd']){
                //密码修改
                $request=request();
                $id=$request->param('id');
                // echo $id;exit;
                // 封装修改的数据
            
                $data['password']=$request->param('password');
                $data['token']=rand(1,10000);

                if(Db::table("users")->where("id","{$id}")->update($data)){
                 $this->success("重置密码成功","/indexlogin/login");
                }else{

                $this->error("密码重置失败");
                }
            }else{
                $this->error("两次密码不一致");
            }
     }

   
    
}
