<?php
namespace app\admin\controller;
use think\Controller;
use think\Db;
class Goods extends Allow
{
    public function getIndex(){
     
        $data=Db::table('goods_info')->select();
        return $this->fetch('goods/index',['data'=>$data]);
        // $total=count($data);
        // $rev=4;
        // $pages=ceil($total/$rev);

        // $num=array(); //记录页数
        // for($i=1;$i<=$pages;$i++){
        //     $num[]=$i;
        // }
        // 根据传递的参数显示第几页 默认显示第一页
// 老师的写法可以正常运行=============
        // $request=request();
        // $page=$request->get('page');
        // if(empty($page)){
        //     $page=1;
        // }
        // $offset=($page-1)*$rev;
        // $sql="select * from goods limit {$offset} , {$rev}";
        // if($request->isAjax()){
        //     $goods=Db::query($sql);
        //     return $this->fetch('goods/table',['data'=>$goods]);
        // }else{
        //     $goods=Db::query($sql);
        //     return $this->fetch('goods/index',['data'=>$goods,'num'=>$num]);
        // }

    // 自己的 写法 返回值 出现一些问题 =================暂缓  上一页 下一页效果
            // $request=request();

        // if($request->isAjax()){
        //     $param=$request->param();
        //     var_dump($param);
        //     var_dump($param['page']);die;
        //     $page=$param['page'];
        //     $offset=($page-1)*$rev;
        //     $sql="select * from goods limit {$start} , {$rev}";
        //     $res=Db::query($sql);
        //     return $this->fetch('goods/table',['data'=>$res]);
        // }else{
        //     $page=1;
        //     $start=($page-1)*$rev;
        //     $sql="select * from goods limit {$start},{$rev}";
        //     $res=Db::query($sql);
        //     return $this->fetch('goods/index',['data'=>$res,'num'=>$num]);
        // }
    }
    public function getAdd(){
        $list=Db::table('cates')->where('pid','>','0')->select();
        return $this->fetch('goods/add',['lists'=>$list]);
    }
    public function postInsert(){
        $request=request();
        $param=$request->param();
        // var_dump($param);
        // $name=$param['name'];
        // $des=$param['des'];
        // $price=$param['price'];
        $file=$request->file('pic');
        $goods_info=$request->except('action');
        // var_dump(ROOT_PATH);
        // var_dump(DS);
        if($file){
            $path='/upload/goods';
            $info=$file->move(ROOT_PATH.'public'.$path);
            // echo $info->getExtension();
            // echo '<hr>';
            // echo $info->getSaveName();
            $save_name=$info->getSaveName();
            // var_dump($save_name);
            $save_name=str_replace('\\','/',$save_name);
            // echo '<hr>';
            // echo $info->getFilename();
            // $filename=$info->getFilename();
            $goods_info['pic']=$path.'/'.$save_name;
            // var_dump($goods_info);die;
            $bool=Db::table('goods_info')->insert($goods_info);
            if($bool){
                return $this->success('新建成功','/goods/index');
            }else{
                return $this->error('失败','/goods/add');
            }
        }else{
            $this->error('上传文件失败，请重新上传');
        }
    }
// 修改
    public function getEdit(){
        $lists=Db::table('cates')->where('pid','>','0')->select();
        $request=request();
        $id=$request->param('id');
        $data=Db::table('goods_info')->where('id',$id)->find();
        return $this->fetch('goods/edit',['lists'=>$lists,'data'=>$data]);
    }

    public function postUpdate(){
        $request=request();
        $param=$request->param();
        $id=$param['id'];
        $goods_info=$request->except(['action','id']);
        // var_dump($goods_info);
        $file=$request->file('pic');
        if($file){
            $path='/upload/goods';
            $info=$file->move(ROOT_PATH.'public'.$path);
            if($info){
                // 如果删除图片 先删除原来的 图片
                $pic=Db::table('goods_info')->where('id',$id)->field('pic')->find();
                $old_path='.'.$pic['pic'];
                unlink($old_path);
                // 再重新上传图片
                $save_name=$info->getSaveName();
                $save_name=str_replace('\\','/',$save_name);
                $new_path=$path.'/'.$save_name;
                var_dump($new_path);
                $goods_info['pic']=$new_path;
            }else{
                $this->error('文件上传失败');
            }
        }
        //修改数据库字段
        $res=Db::table('goods_info')->where('id',$id)->update($goods_info);
        if($res){
            $this->success('修改成功','/goods/index');
        }else{
            $this->error('修改失败');
        }
    }

// 删除
    public function getDel(){
        $request=request();
        $id=$request->param('id');
        $pic=Db::table('goods_info')->where('id',$id)->field('pic')->find();
        $res=Db::table('goods_info')->where('id',$id)->delete();
        if($res){
            $path='.'.$pic['pic'];
            unlink($path);
            $this->success('删除成功');
        }else{
            $this->error('删除失败');
        }
    }

    
}