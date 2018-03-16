<?php
namespace app\index\controller;

//导入Controller
use think\Controller;
//导入Db
use think\Db;
class Dbm extends Controller
{
	public function getIndex()
	{
		// 基本信息操作 Db=>model类 query
		// 查询操作
		// $list=Db::query("select * from stu");
		// var_dump($list);

		// 删除
		// Db::query("delete from stu where id=2");
		// var_dump($list);
		

		//连贯操作
		// 查询
		$list=Db::table("stu")->select();

		// //查询单条数据
		$info=Db::table("stu")->where('id',1)->find();
		//获取单条数据的某段值
		$info1=Db::table("stu")->where("id",8)->value("name");
		// 获取一列
		
		$info2=Db::table("stu")->column("name");

		//更新操作
		$info3=Db::table('stu')->where('id', 2)->update(['name' => 'jons']);
		//删除指定id的一条数据
		$info4=Db::table("stu")->where("id",2)->delete();

		// 单条数据添加
		// $info5=Db::table("stu")->insert(['name'=>"admin"]);

		//获取id插入数据
		// $info6=Db::name("stu")->insertGetId(['name'=>"admin"]);

		//设置字段查询
		$data=Db::table("stu")->field("name")->select();

		//模糊查询
		$data1=Db::table("stu")->where("name","like","%ad%")->select();

		//排序正序
		$data2=Db::table("stu")->order("id asc")->limit(5)->select();

		// 倒序排列
		$data3=Db::table("stu")->order("id desc")->limit(10)->select();


		//两表关联
		$data4=Db::query("select c.id as cid,c.name as cname,b.id as bid,b.name as bname from class as c,brand as b where c.id=b.class_id ");

		$data11=Db::table("class")->alias("c")->join("brand b","c.id=b.class_id")->select();

		$data12=Db::table("class")->alias("c")->field("c.id as cid,b.id as bid,b.name as bname")->join("brand b","c.id=b.class_id")->select();


		
		//统计数据表中数据总条数
		$count=Db::table("stu")->count();
		// echo "<pre>";
  //   	print_r($count);
  		
  		//分页样式显示
  		$data7=Db::table("stu")->paginate(3);

		var_dump($data11);
		var_dump($data12);
		// echo "<pre>";
		// print_r($data7);



	}
}

?>