<?php
namespace app\index\controller;
//导入Controller
use think\Controller;
class Views extends Controller
{
   
    //模板继承
    public function getIndex2(){

    	return $this->fetch("Vie/index2");
        
    }

   
    
}
