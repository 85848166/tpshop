<?php

namespace app\home\controller;

use think\Controller;
use think\Db;
use think\facade\Request;
use think\facade\Session;

class Index extends Controller
{
    //显示前台首页
    public function index()
    {
        //获取分类数据
        $list = \getCategory();

        //获取导航的数据
        $navigation = \getNavigation();

        //获取文章数据
        $article = Db::name("article")->field("title,url")->select();

        //获取热卖商品
        $hotGoods = Db::name("goods")->where("is_hot", 1)->field("id,goods_name,price,introduction,picture")->select();
        foreach ($hotGoods as &$value){
            $picId = $value['picture'];
            $picture = Db::name('picture')->field('pic_address')->where('id',$picId)->select();
            $value['pic_addr'] = '/uploads/'.$picture[0]['pic_address'];
        }
        $this->assign("hotGoods", $hotGoods);
        $this->assign("article", $article);
        $this->assign("navigation", $navigation);
        $this->assign("list", $list);
        return $this->fetch();
    }
    //轮播图广告位
    public function platForAdvertisingList()
    {
       //获取广告位ap_id
        $apId = Request::param('ap_id');
        //获取广告数据
        $advList = Db::name('adv')->where('ap_id',$apId)->select();
        return json($advList);
    }
    //获取用户的登录信息
    public function getLoginInfo()
    {
        //从session中获取用户id
        if (Session::get('mid')){
            //构建返回的数据
            $data = [
                "user_info" => ["nick_name" => Session::get('mname')]
            ];
            return json($data);
        }else{
            return false;
        }

    }
}