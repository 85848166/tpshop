<?php
/**
 * Created by PhpStorm.
 * User: MACHENIKE
 * Date: 2019/3/3
 * Time: 22:20
 */

namespace app\home\controller;


use payment\alipay\AliPay;
use payment\wechatpay\WeChat;
use think\Controller;
use think\Db;
use think\facade\Session;
use think\facade\Request;

class Pay extends Controller
{
    public function index()
    {
        $mid = Session::get('mid');
        if ($mid){
            //查询购物车获取用户的商品数据
            $cartData = Db::name('cart')->where('member_id',$mid)->select();
            $goods = [];
            $total = 0;
            $totalCount = 0;
            foreach ($cartData as $cart){
                //获取商品的id
                $goods_id = $cart["goods_id"];
                //获取商品信息
                $goodsData = Db::name('goods')->field('id,introduction,price')->where('id',$goods_id)->find();
                //获取总金额
                $sum = $cart['goods_number']*$goodsData['price'];
                $arr['goods_id'] = $goods_id; //商品id
                $arr['cart_id'] = $cart['id'];
                $arr['name'] = $goodsData['introduction'];//商品名称
                $arr['goods_price'] = $goodsData['price'];//价格
                $arr['sum'] = $sum; //单商品总价格
                $arr['count'] = $cart['goods_number']; //商品数量
                $total += $sum; //所有商品总价
                $totalCount += $arr['count']; //总数量
                $goods[] = $arr;
            }
            //获取用户的地址信息
            $memberAddress = Db::name("member_address")->where("uid",$mid)->where("is_default",1)->find();
            //构建订单数据
            $data = [
                'member_id' => $mid,
                'addtime' => time(),
                'pay_status' => '否',
                'total_price' => $total,
                'shr_name' => $memberAddress['consignee'],//姓名
                'shr_tel' => $memberAddress['mobile'],   //电话
                'shr_province' => $memberAddress['province'],  //省id
                'shr_city' => $memberAddress['city'],  //市id
                'shr_area' => $memberAddress['district'],  //区域id
                'shr_address' => $memberAddress['address'],  //详细地址
                'post_status' => 0, //发货状态0未发 1已发 2已收
                'out_trade_no' => date('YmdHsi').mt_rand(10000000,99999999),
            ];
            //
            $orderId = Db::name('order')->insertGetId($data);
            foreach ($goods as $g){
                $data = [
                    'order_id' => $orderId,
                    'goods_id' => $g['goods_id'],
                    'goods_number' => $g['count'],
                    'price' => $g['goods_price'],
                ];
                $orderGoodsId = Db::name("order_goods")->insertGetId($data);
                if (!$orderGoodsId) {
                    $this->error("订单添加失败");
                }
            }

        }else{
            header("location: http://localhost/tpshop/public/index.php/home/login");
            exit;
        }
        $this->assign('orderGoodsId',$orderGoodsId);
        $this->assign('time',date("Y-m-d H:s:i",time()));
        $this->assign(["total" => $total, 'consignee' => $memberAddress["consignee"]]);
        return $this->fetch();
    }
    //微信支付
    public function weChatPay()
    {
        $orderId = Request::param('orderId');
        $weChat = new WeChat();
        $path = $weChat->weChatPay($orderId);
        return json(['code' => 1, 'path' => $path]);
    }

    //回调消息
    public function notify()
    {

    }

    //支付宝支付
    public function aliPay()
    {
        $orderId = Request::param('orderId');
        $pay = new AliPay();
        $pay->aliPay($orderId);
    }
}