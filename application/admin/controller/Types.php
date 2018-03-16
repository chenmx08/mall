<?php
namespace app\admin\controller;
use think\Controller;
use think\Db;
class Types extends Allow
{
    // 数据的分级显示 给不同级别的分类前 加上 ---| 标识
    public function cates(){
        $data=Db::query('select *,concat(path,",",id) as paths from cates order by paths ');
        foreach ($data as $key => $value) {
            $arr=explode(',',$value['path']);
            $len=count($arr)-1;
            $data[$key]['name']=str_repeat('---|',$len).$value['name'];
        }
        return $data;
    }
    public function getIndex(){
        $data=$this->cates();
        return $this->fetch('types/types',['lists'=>$data]);
    }

    public function getAdd(){
        $data=Db::table('cates')->select();
        return $this->fetch('types/add',['lists'=>$data]);
    }
// 执行添加商品种类
    public function postInsert(){
        $request=request();
        $data=$request->only(['name','pid']);
        if($data['pid']==0){
            $path= '0';
        }else{
            $pa=Db::table('cates')->where('id',$data['pid'])->find();
            $path=$pa['path'].','.$pa['id'];
        }
        // if(Db::table('cates')->insert(['name'=>$data['name'],'pid'=>$data['pid'],'path'=>$path])){
        //     $this->redirect('/types/add');
        // }else{
        //     $this->error('添加失败','/types/add','1');
        // }
        try{
            Db::table('cates')->insert(['name'=>$data['name'],'pid'=>$data['pid'],'path'=>$path]);
        }catch(PDOException $e){
            $this->error('添加失败','/types/add');
        }
        $this->redirect('/types/add');
        
    }
// 删除 商品种类 （要求没有子类）
    public function getDel(){
        $request=request();
        $id=$request->param('id');
        var_dump($id);
        $result=Db::table('cates')->where('pid',$id)->select();
        if($result){
            $this->error('当前分类下存在子类，请先删除子类','/types/index');
        }else{
            if(Db::table('cates')->where('id',$id)->delete()){
                $this->success('删除成功','/types/index','1');
            }else{
                $this->error('删除失败','/types/index',1);
            }
        }
    }
// 修改商品种类名称
    public function getEdit(){
        $request=request();
        $id=$request->param('id');
        // var_dump($id);
        $lists=Db::table('cates')->select();
        // var_dump($lists);
        $data=Db::table('cates')->where('id',$id)->find();
        // var_dump($data);
        return $this->fetch('types/edit',['lists'=>$lists,'data'=>$data]);
    }
    public function postDoedit(){
        $request=request();
        $id=$request->param('id');
        $param=$request->only(['name','pid']);
        // var_dump($param);
        $result=Db::table('cates')->where('id',$id)->update($param);
        if($result){
            $this->success('修改成功','/types/index',1);
        }else{
            $this->error('修改失败','/types/edit',1);
        }

    }
}