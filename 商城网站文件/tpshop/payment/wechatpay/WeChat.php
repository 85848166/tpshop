<?php
/**
 * Created by PhpStorm.
 * User: MACHENIKE
 * Date: 2019/3/6
 * Time: 14:48
 */
namespace payment\wechatpay;

use think\Db;

class WeChat
{
    public function __construct()
    {
        require __DIR__."/lib/WxPay.Api.php";
        require __DIR__."/example/WxPay.NativePay.php";
        require __DIR__."/lib/WxPay.Config.Interface.php";
        require __DIR__."/lib/WxPay.Exception.php";
        require __DIR__."/lib/WxPay.Data.php";
        require __DIR__."/example/WxPay.Config.php";
        require __DIR__."/example/phpqrcode/phpqrcode.php";

    }

    public function weChatPay($orderId)
    {
        $order = Db::name('order')->where('id',$orderId)->find();
        $notify = new \NativePay();
        $input = new \WxPayUnifiedOrder();
        $input->SetBody("六星商城-笔记本电脑");//商品简单描述
      //$input->SetAttach("test");
        $input->SetOut_trade_no($order['out_trade_no']);//商户订单号
        $input->SetTotal_fee($order["total_price"]*100);//订单总金额，单位为分
      //$input->SetTime_start(date("YmdHis"));//交易起始时间
      //$input->SetTime_expire(date("YmdHis", time() + 600));//交易结束时间
      //$input->SetGoods_tag("test");//订单优惠标记，使用代金券或立减优惠功能时需要的参数
        $input->SetNotify_url("http://localhost/tpshop/public/index.php/pay/notify.php");//通知回调地址
        $input->SetTrade_type("NATIVE");//交易类型
        $input->SetProduct_id($order["id"]);//商品ID

        $result = $notify->GetPayUrl($input);
      //  $url = $result["code_url"];
        $fileName = md5(time()).'png';
        $path = './wechatcode/'.$fileName;
        \QrCode::png('http://www.baidu.com',$path);
        return $path;
    }
}