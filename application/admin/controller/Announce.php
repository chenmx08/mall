<?php
namespace app\admin\controller;
use think\Controller;
use think\Db;
class Announce extends Allow
{
    public function getIndex(){
        /* 
        分页显示 Ajax 跳转
1、 获取数据总条数 total
2、规定每页显示数据条数  page
3、计算最大页数，也就是总的页数，向上区中 ceil
4、处理每页的显示数据 和 页数下标挂钩  遍历数据，for将每页数据储存到一个 新数组arr中
5、再将这个新数组，传递到模板页面中，在模板页面遍历这个数组读取数据
        */
        /* 
        Ajax 传递页码参数 n
        当前页显示数据 查询数据库 
    3/isajax 判断如果是Ajax请求 就切换页码
    4、如果点击的是右侧列表 显示第一页数据
    5/ 关键返回数据 是一个 HTML页面，接受之后显示在announce.html页面的table中 table.html(data)
        */
        $data=Db::table('announce')->select();
        $total=count($data);
        $rev=4;
        $pages=ceil($total/$rev);

        $num=array(); //记录页数
        for($i=1;$i<=$pages;$i++){
            $num[]=$i;
        }
        // 根据传递的参数显示第几页 默认显示第一页
// 老师的写法可以正常运行=============
        $request=request();
        $page=$request->get('page');
        if(empty($page)){
            $page=1;
            $mark=false;
        }else{
            $mark=true;
        }
        $offset=($page-1)*$rev;
        $sql="select * from announce limit {$offset} , {$rev}";
        if($mark){
            $announce=Db::query($sql);
            return $this->fetch('announce/table',['data'=>$announce]);
        }else{
            $announce=Db::query($sql);
            return $this->fetch('announce/index',['data'=>$announce,'num'=>$num]);
        }

    // 自己的 写法 返回值 出现一些问题 =================暂缓  上一页 下一页效果
            // $request=request();

        // if($request->isAjax()){
        //     $param=$request->param();
        //     var_dump($param);
        //     var_dump($param['page']);die;
        //     $page=$param['page'];
        //     $offset=($page-1)*$rev;
        //     $sql="select * from announce limit {$start} , {$rev}";
        //     $res=Db::query($sql);
        //     return $this->fetch('announce/table',['data'=>$res]);
        // }else{
        //     $page=1;
        //     $start=($page-1)*$rev;
        //     $sql="select * from announce limit {$start},{$rev}";
        //     $res=Db::query($sql);
        //     return $this->fetch('announce/index',['data'=>$res,'num'=>$num]);
        // }

        
    }

    public function getAdd(){
        return $this->fetch('announce/add');
    }
    public function postInsert(){
        $request=request();
        $param=$request->param();
        var_dump($param);
        $name=$param['name'];
        $describe=$param['describe'];
        $file=$request->file('pic');
        // var_dump($file);
        var_dump(ROOT_PATH);
        var_dump(DS);
        if($file){
            $path='/upload/announce';
            $info=$file->move(ROOT_PATH.'public'.$path);
            echo $info->getExtension();
            echo '<hr>';
            echo $info->getSaveName();
            $save_name=$info->getSaveName();
            $save_name=str_replace('\\','/',$save_name);
            echo '<hr>';
            echo $info->getFilename();
            $filename=$info->getFilename();
            $opic=$path.'/'.$save_name;
            $img=\think\Image::open($file);
            var_dump($img);
            // 使用IMAGE类 储存一个缩略图在pic中显示
            
            $img->thumb(100,100)->save('./upload/announce/thumb/'.$filename);
            $pic='/upload/announce/thumb/'.$filename;

            $bool=Db::table('announce')->insert(['name'=>$name,'describe'=>$describe,'pic'=>$pic,'opic'=>$opic]);
            if($bool){
                return $this->success('新建成功','/announce/add');
            }else{
                return $this->error('失败','/announce/add');
            }
        }else{
            $this->error('上传文件失败，请重新上传');
        }
    }
/* 
全选 反选 的批量删除
    
*/
    public function getDel(){
        // $request=request();
        // $param=$request->param();

        $ids=isset($_GET['ids'])?$_GET['ids']:'' ;
        if($ids == ''){
            echo '请至少选择一条数据';die;
            // 返回给Ajax的数据使用echo
        }else{
            foreach ($ids as $key => $value) {
                $bool=Db::table('announce')->where('id',$value)->delete();
            }
            echo 1;
        }
    }

    
}