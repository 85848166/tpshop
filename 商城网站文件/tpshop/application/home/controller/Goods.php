<?php
/**
 * Created by PhpStorm.
 * User: MACHENIKE
 * Date: 2019/1/27
 * Time: 20:37
 */

namespace app\home\controller;


use think\Controller;
use think\Db;
use think\facade\Request;
use think\facade\Session;

class Goods extends Controller
{
    public function goodsInfo()
    {
        //获取分类数据
        $list = \getCategory();

        //获取导航的数据
        $navigation = \getNavigation();

        //获取商品id
        $goodsId = Request::param('goodsId');
        $goodsInfo = Db::name('goods')->field("id,goods_name,price,introduction,picture,category_id,img_id_array,stock")->where("id",$goodsId)->find();

        //获取分类id
        $categoryId = $goodsInfo['category_id'];
        $categoryName = Db::name("category")->field("category_name")->where("id",$categoryId)->find();
        $goodsInfo['category_name'] = $categoryName['category_name'];

        //获取商品的主图
        $picId = $goodsInfo['picture'];
        $picture = Db::name('picture')->field('pic_address')->where('id',$picId)->find();
        $goodsInfo['pic_addr'] = '/uploads/'.$picture['pic_address'];

        //获取商品图片的缩略图
        $imgArray = explode(',',$goodsInfo['img_id_array']);
        //array_shift($imgArray);
        $picAddr = Db::name('picture')->field('pic_address')->whereIn('id',$imgArray)->select();
        foreach ($picAddr as &$address){
            $address['pic_address'] = '/uploads/'.$address['pic_address'];
        }
        $this->assign('picAddr',$picAddr);
        $this->assign('goodsInfo',$goodsInfo);
        $this->assign("navigation", $navigation);
        $this->assign("list", $list);
        return $this->fetch();
    }
}