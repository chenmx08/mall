<?php
namespace app\admin\controller;
use think\Controller;
use think\Db;
class Carousel extends Allow
{
   public function getIndex(){
        $data=Db::table('carousel')->where('status','1')->select();
        return $this->fetch('carousel/index',['data'=>$data]);
   }
//    加载全部图片
   public function getAll(){
       $all=Db::table('carousel')->select();
       return $this->fetch('carousel/all',['data'=>$all]);
   }
// 添加轮播图片
   public function getAdd(){
        return $this->fetch('carousel/add');
   }
   public function postInsert(){
        $request=request();
        $param=$request->param();
        // var_dump($param);die;
        $name=$request->param('name');
        $status=$request->param('status');
        $file=$request->file('pic');
        if($file){
            $img=\think\Image::open($file);
            $filename=(microtime(true)*10000).rand(1,10000).'.jpg';
            // var_dump($filename);die;
            $img->thumb(1226,460)->save('./upload/carousel/'.$filename);
            // var_dump($img);die;
            $url='/upload/carousel/'.$filename;
// 插入数据
            if(Db::table('carousel')->insert(['name'=>$name,'url'=>$url,'status'=>$status])){
                return $this->success('成功','/carousel/index');
            }else{
                return $this->error('失败','/carousel/add');
            }
        }else{
            return $this->error('上传失败');
        }
       
   }
// 删除
    public function getDel(){
        $request=request();
        $id=$request->param('id');
        $carousel=Db::table('carousel')->where('id',$id)->find();
        $url=$carousel['url'];
        if(Db::table('carousel')->where('id',$id)->delete()){
            unlink('.'.$url);
            return $this->success('删除成功','/carousel/index');
        }else{
            return $this->error('失败','/carousel/index');
        }
    }
// 修改数据
  
//    Ajax的用户状态修改
   public function postStatus(){
    //    $info =Db::table()
        $request=request();
        $id=$request->param('id');
        $status=Db::table('carousel')->where('id',$id)->find();
        if($status['status'] == '1'){
            $result=Db::table('carousel')->where('id',$id)->update(['status'=>'0']);
        }else{
            $result=Db::table('carousel')->where('id',$id)->update(['status'=>'1']);
        }
        return $result;
   }
}