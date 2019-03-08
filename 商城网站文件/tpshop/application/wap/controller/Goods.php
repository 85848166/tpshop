<?php
/**
 * Created by PhpStorm.
 * User: MACHENIKE
 * Date: 2019/1/25
 * Time: 18:16
 */

namespace app\wap\controller;


use think\Controller;


class Goods extends Controller
{
    //获取商品的详情
    public function goodsDetail()
    {
        $goodsId = Request::param("id");
        return  $this->fetch();
    }
}