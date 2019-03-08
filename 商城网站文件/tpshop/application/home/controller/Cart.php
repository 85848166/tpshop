<?php
/**
 * Created by PhpStorm.
 * User: MACHENIKE
 * Date: 2019/2/20
 * Time: 16:56
 */

namespace app\home\controller;


use think\Controller;
use think\Db;
use think\facade\Request;
use think\facade\Session;

class Cart extends Controller
{
    //购物车列表
    public function cartList()
    {
        //判断用户是否已经登录
        $mid = Session::get("mid");
        if ($mid){
            $list = \getCategory();
            //获取导航的数据
            $navigation = \getNavigation();
            $cartData = Db::name('cart')->where('member_id',$mid)->select();
            $goods = [];
            $total = 0;
            foreach ($cartData as $cart){
                //获取商品的id
                $goods_id = $cart["goods_id"];
                //获取商品信息
                $goodsData = Db::name('goods')->field('introduction,price,picture')->where('id',$goods_id)->find();
                //根据图片的id
                $picId = $goodsData['picture'];
                $picData = Db::name('picture')->field('pic_address')->where('id',$picId)->find();
                //图片的地址
                $pic_addr = "/uploads/".$picData['pic_address'];
                //获取总金额
                $sum = $cart['goods_number']*$goodsData['price'];
                $arr['goods_id'] = $goods_id; //商品id
                $arr['cart_id'] = $cart['id'];
                $arr['name'] = $goodsData['introduction'];//商品名称
                $arr['goods_price'] = $goodsData['price'];//价格
                $arr['pic_addr'] = $pic_addr; //商品图片地址
                $arr['sum'] = $sum; //总价格
                $arr['count'] = $cart['goods_number']; //商品数量
                $total += $sum;
                $goods[] = $arr;
            }
        }else{
            //header("localhost:http://localhost/tpshop/public/index.php/home/login");
            return redirect(url('/home/login'));
            exit;
        }

        //模板赋值
        $this->assign('total',$total);
        $this->assign('goodsData',$goods);
        $this->assign("list",$list);
        $this->assign("navigation",$navigation);
        return $this->fetch();
    }
    //加入购物车
    public function addCart()
    {
        //获取商品数据
        $cart_detail = Request::param('cart_detail');
        //获取用户id
        $mid = Session::get('mid');
        //获取商品的id
        $goods_id = $cart_detail['goods_id'];
        //获取商品的数量
        $count = $cart_detail["count"];
        //先判断购物车商品是否已经存在
        $goodsData = Db::name('cart')->where(['goods_id'=>$goods_id,'member_id'=>$mid])->find();
        if ($goodsData){
            //在原先的基础上进行累加
            $rows = Db::name('cart')->where('goods_id',$goods_id)->setInc('goods_number',$count);
            if (!$rows){
                return -1;
            }
        }else{
            //构建添加的数据
            $data = [
                "goods_id" => $goods_id,
                "member_id" => $mid,
                "goods_number" => $count
            ];
            //商品添加至购物车表
            $rows = Db::name('cart')->where('member_id',$mid)->insert($data);
            if (!$rows){
                return -1;
            }
        }
    }
    //获取当前用户的商品数量
    public function getNum()
    {
        //获取用户id
        $mid = Session::get('mid');
        $cartData = Db::name('cart')->where('member_id',$mid)->select();
        $num = 0;
        foreach ($cartData as $v){
            $num += $v['goods_number'];
        }
        return $num;
    }

    //添加或减少商品数量
    public function changeNum(){
        //点击数量获取该商品的id
        $cart_id = Request::param('cart_id');
        //获取该商品数量
        $num = Request::param('num');
        //修改商品购买数量
        $row = Db::name("cart")->where("id",$cart_id)->data(["goods_number" => $num])->update();
        if ($row){
            return json(['code' => 1]);
        }else{
            return json(['code' => 0]);
        }
    }

    //删除购物车的商品
    public function delCart()
    {
        $cart_id = Request::param('cart_id');
        $row = Db::name('cart')->where('id',$cart_id)->delete();
        if ($row){
            return json(['code' => 1]);
        }else{
            return json(['code' => 0]);
        }
    }

    //清空购物车
    public function emptyCart()
    {
        $mid = Session::get('mid');//获取用户id
        $row = Db::name('cart')->where('member_id',$mid)->delete();//清空用户对应购物车
        if ($row){
            return json(['code' => 1]);
        }else{
            return json(['code' => 0]);
        }
    }

    //购物车是否选中状态
    public function cartChecked()
    {
        $cart_id = Request::param('cart_id');
        $checked = Request::param('is_checked');
        $row = Db::name('cart')->where('id',$cart_id)->data('is_checked',$checked)->update();
        if ($row){
            return json(['checked' => 1]);
        }else{
            return json(['checked' => 0]);
        }
    }
}