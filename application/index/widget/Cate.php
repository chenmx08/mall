<?php 
namespace app\index\widget;
use think\Controller;
use think\Db;

class Cate extends Controller{
    public function cates($pid){
        $data=Db::table('cates')->where('pid',$pid)->select();
        $data1=array();
        foreach($data as $k =>$v){
            $v['shop']=$this->cates($v['id']);
            $data1[]=$v;
        }
        return $data1;
    }

    public function header(){
        $cate=$this->cates(0);
        
        return $this->fetch('indexpublic/header',['cate'=>$cate]);
    }
    
    public function indexHeader(){
        $cate=$this->cates(0);
        return $this->fetch('indexpublic/index_header',['cate'=>$cate]);
    }

    public function footer(){
        return $this->fetch('indexpublic/footer');
    }
}
