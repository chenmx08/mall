<?php
namespace app\admin\controller;

use think\Controller;
use think\Db;
use think\Session;
class Adminlogin extends Controller
{ 
    // 加载模板 登录页面
    public function getLogin(){
        return  $this->fetch('admin/login');
    }

    // 提交登录
    public function postDologin(){
        // 验证码效果登录
        $request=request();
        $param=$request->except('action');
        // var_dump($param);die;
        $yzm=$request->param('yzm');
        // if(captcha_check($yzm)){
            if(true){
            $info=Db::table('admin_user')->where("name='{$param['username']}' and password='{$param['password']}' ")->select();
            if($info){
                // 验证通过 写入session信息  给登录用户 初始化权限
                Session::set('islogin',$param['username']);
                $list=Db::query("select distinct n.name,n.mname,n.aname from user_role as ur,role_node as rn,node as n where ur.rid=rn.rid and rn.nid =n.id and ur.uid={$info[0]['id']}");
                // 访问后台的权限需要通过验证之后再添加
                $nodelist['admin'][]='getindex';
                foreach ($list as $key => $value) {
                    $nodelist[$value['mname']][]=$value['aname'];
                    // 补充 插入 和修改的权限
                    if($value['aname']=='getadd'){
                        $nodelist[$value['mname']][]="postinsert";
                    }
                    if($value['aname']=='getedit'){
                        $nodelist[$value['mname']][]="postupdate";
                    }
                }
                Session::set('nodelist',$nodelist);
                // var_dump(Session::get('nodelist'));die;
                $this->success('验证通过','/admin/index');
            }else{
                $this->error('用户名或密码错误','/admin/login');
            }
        }else{
            $this->error('验证码错误，请重新输入');
        }
        return $this->fetch('/admin/index');
    }

    public function getLogout(){
        Session::delete('islogin');
        $this->error('注销成功','/adminlogin/login');

    }
}
