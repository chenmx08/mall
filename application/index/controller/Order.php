<?php
namespace app\index\controller;
use think\Controller;
use think\Db;

class Order extends Controller
{
    public function getCar()
    {
        $request=request();
        $param=$request->param();
        // var_dump($param);
        // $id=$param['goods_id'];
        // 如果有新加入购物车则添加购物车后，在查看购物车
// 暂时自定义 session值的用户名 
        session('user_id',1);
$user_id=session('user_id');
        // var_dump($param);
        if(isset($param['goods_id'])){
            $goods_id=$param['goods_id'];
            $old=Db::table('car')->where('goods_id',$goods_id)->where('user_id',$user_id)->find();
            if($old){
                // $this->redirect('/order/car');
                $this->redirect("/order/car/id/$goods_id");
            }else{
                $num=1;
                $status=0;
                $res=Db::table('car')->insert(['goods_id'=>$goods_id,'num'=>$num,'user_id'=>$user_id,'status'=>$status]);
                if(!$res){

                    $this->error('添加购物车失败','/order/car');
                }
            }
        }
        $sql="select g.id,g.name, g.pic, g.color ,g.size , g.price,c.id as car_id,c.num,(c.num*g.price)as total from goods_info as g , car as c where g.id=c.goods_id and c.user_id=$user_id";
        $data=Db::query($sql);
        // var_dump($data);die;
        
        $car=Db::table('car')->where('user_id',$user_id)->select();
        $buy_num=0;
        $all_num=0;
        $all_total=0;
        foreach($car as $v){
            if($v['status']==1){
                $buy_num+=$v['num'];
            }
            $all_num+=$v['num'];
            $price=Db::table('goods_info')->where('id',$v['goods_id'])->field('price')->find();
            // $all_total+=$v['num']*$price['price'];
        }
        return $this->fetch('index/car',['data'=>$data,'buy_num'=>$buy_num,'all_num'=>$all_num,'all_total'=>$all_total]);   
    }

    public function getDelcar(){
        $request=request();
        $car_id=$request->param('id');
        $res=Db::table('car')->where('id',$car_id)->delete();
        if($res){
            $this->redirect('/order/car');
        }else{
            $this->error('删除数据出错，请重新尝试');
        }
    }

    //增减购物车商品数量
    public function getSubtract(){
        $request=request();
        $num=$request->param('num');
        $car_id=$request->param('car_id');
        // echo 3;
        if($num>1){
            $num--;
            Db::table('car')->where('id',$car_id)->update(['num'=>$num]);
        }
        echo $num;
    }
    public function getAdd(){
        $request=request();
        $num=$request->param('num');
        $car_id=$request->param('car_id');
        // echo 3;
        if($num<5){
            $num++;
            Db::table('car')->where('id',$car_id)->update(['num'=>$num]);
        }
        echo $num;
    }
    // 修改购物车商品的选择状态
    public function getStatus(){
        $request=request();
        // $user_id=session('user_id');
        $user_id=1;
        $mark=$request->param('mark');
      
        $car=Db::table('car')->where('user_id',$user_id)->select();
        
        if($mark == '1'){
            foreach($car as $v){
                Db::table('car')->where('id',$v['id'])->update(['status'=>1]);
            }
            echo $mark;
        }else{
            foreach($car as $v){
                Db::table('car')->where('id',$v['id'])->update(['status'=>0]);
            }
            echo $mark;
        }
    }

// ======================== 订单结算页 

// 提交订单 
    public function getIndex(){
        session('user_id',1);
        $user_id=session('user_id');
        // 如果没有选择商品返回
        $res=Db::table('car')->where('status',1)->where('user_id',$user_id)->select();
        if(!$res){
            // $this->error('请选择商品','/order/car');
        }else{
            // 添加订单 orders goods_order 删除 car表数据
            $sql="select (g.price*c.num) as total ,c.num,g.id as goods_id from car as c , goods_info as g where c.goods_id = g.id and  user_id = $user_id and  c.status =1";
            $data=Db::query($sql);
            $total=0;
            foreach($data as $v){
                $total+=$v['total'];
            }
            // var_dump($total);
            $order_id=(microtime(true)*10000);

            Db::startTrans();
            try{
                $orderId=Db::table('orders')->InsertGetId(['order_num'=>$order_id,'user_id'=>$user_id,    'total'=>$total]);
                foreach($data as $v){
                    Db::table('goods_order')->insert(['order_id'=>$orderId,'goods_id'=>$v['goods_id'],'num'=>$v['num']]);
                }
                Db::table('car')->where('status',1)->where('user_id',$user_id)->delete();
                Db::commit();
            }catch(Exception $e){
                Db::rollback();
                $this->error('提交订单失败','/order/car');die;
            }
        }
            $sql="select o.id as oid, g.price ,g.pic,g.name,g.color,g.size ,go.num ,(go.num*g.price) as total from orders as o ,goods_order as go ,goods_info as g where o.user_id=$user_id and o.id = go.order_id and goods_id = g.id and o.status = 0";
            $data=Db::query($sql);
            // var_dump($data);
            $all=0;
            $oid=0;
            foreach($data as $v){
                $all+=$v['total'];
                $oid=$v['oid'];
            }
            
            $address=Db::table('address')->where('user_id',$user_id)->select();
            if(count($address)>3){
                $address=array_slice($address,0,3);
            }
            return $this->fetch('index/order',['data'=>$data,'all'=>$all,'address'=>$address,'oid'=>$oid]);
        
    }
//    城市层级关系
    public function getAddress(){
        $request=request();
        $upid=$request->param('upid');
        $data=Db::table('district')->where('upid',$upid)->field('id,name')->select();
        echo json_encode($data);
    }

    // 添加地址信息
    public function postAddress(){
        $request=request();
        $user_id=session('user_id');
        $param=$request->param();
        var_dump($param);
        $name=$param['name'];
        $phone=$param['phone'];
        $arr=explode(',',$param['location']);
        var_dump($arr);
        $adds=null;
        foreach ($arr as $v) {
            $adds.=$v;
        }
        $adds.=$param['details'];
        var_dump($adds);
        $res=Db::table('address')->insertGetId(['name'=>$name,'phone'=>$phone,'address'=>$adds,'user_id'=>$user_id]);
        if($res){
            return $this->redirect('/order/index');
        }else{
            $this->error('添加失败','/order/index');
        }
    }
    // 删除地址信息
    public function getDelAdds(){
        $request=request();
        $id=$request->param('id');
        $res=Db::table('address')->where('id',$id)->delete();
        if($res){
            echo 1;
        }else{
            echo 0;
        }
    }

    // 付款
    public function postPay(){
        $request=request();
        $param=$request->param();
        var_dump($param);
        if(!$param['address_id']){
            $this->error('请选择地址','/order/index');
        }else{
            $res=Db::table('orders')->where('id',$param['orders_id'])->update(['address_id'=>$param['address_id'],'status'=>1]);
            if($res){
                $this->success('支付成功','/order/index');
            }else{
                $this->error('支付失败','/order/index');
            }
        }
    }
    
}
