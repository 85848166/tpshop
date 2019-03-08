<?php
/**
 * Created by PhpStorm.
 * User: MACHENIKE
 * Date: 2019/1/11
 * Time: 22:45
 */

namespace app\admin\controller;


use app\admin\logic\GoodsLogin;
use app\admin\model\Picture;
use Endroid\QrCode\QrCode;
use think\Controller;
use think\Db;
use think\facade\Request;
use think\facade\Session;

class Goods extends Controller
{
    //显示商品列表
    public function goodsList()
    {
        if (Request::isAjax()){
            $logic = new GoodsLogin();
            return $logic->getGoodsList(Request::param());
        }
        $this->assign('username',Session::get('user')['user_name']);
        return $this->fetch();
    }

    //发布商品(添加商品)
    public function addGoods()
    {
        if (Request::isAjax()){
            $goodsLogic = new GoodsLogin();
            $result = $goodsLogic->addGoods(Request::param('product'));
            return json($result);
        }
        $this->assign('username',Session::get('user')['user_name']);
        return $this->fetch();
    }

    public function addGoods2()
    {
        //获取id
        $cid = Request::param('cid');
        $category = Db::name('category')->where('id',$cid)->select();
        $this->assign('category',$category);
        return $this->fetch('add_goods');
    }

    public function dialogSelectCategory()
    {
        //实例化商品逻辑类
        $goods = new GoodsLogin();
        $categoryOne = $goods->getGoodsCategotyList(0);
        if (Request::isAjax()){
            $categoryOne=$goods->getGoodsCategotyList(Request::param('id'));
            return json(['data'=>$categoryOne,'id'=>Request::param('id')]);
        }
        $this->assign('categoryOne',$categoryOne);
        return $this->fetch();
    }

    //获取子类
    public function getChildCategory()
    {
        $categoryId = Request::param('categoryID');
        $category = Db::name('category')->where('pid',$categoryId)->select();
        return json($category);
    }

    //将分类数据数据写入cookie中
    public function selectCateGetData()
    {
        $goods_category_id = request()->post("goods_category_id", ''); // 商品类目用
        $goods_category_name = request()->post("goods_category_name", ''); // 商品类目名称显示用
        $goods_attr_id = request()->post("goods_attr_id", ''); // 关联商品类型ID
        $quick = request()->post("goods_category_quick", ''); // JSON格式
        setcookie("goods_category_id", $goods_category_id, time() + 3600 * 24);
        setcookie("goods_category_name", $goods_category_name, time() + 3600 * 24);
        setcookie("goods_attr_id", $goods_attr_id, time() + 3600 * 24);
        setcookie("goods_category_quick", $quick, time() + 3600 * 24);
    }

    //更新二维码
    public function updateGoodsQrCode()
    {
        $goods_id = Request::param('goods_id');
        foreach ($goods_id as $id) {
            //设置商品详情的地址
            $url = "http://localhost/tpshop/public/index.php/wap/goods/goodsDetail/id/$id";
            $qrCode = new QrCode($url);
            //定义二维码储存地址
            $qrCodeAddress = 'qrcode/'. md5(time()+mt_rand(time(),time()+1000)).'.png';
            $qrCode->writeFile($qrCodeAddress);
            //把二维码地址写入数据库
            $row = Db::name('goods')->where('id', $id)->update(['QRcode' => $qrCodeAddress]);
            if (!$row){
                return json(['code' =>0,'message'=>'二维码更新失败']);
            }
        }
        return json(['code' =>1,'message'=>'二维码更新成功']);

    }

    //商品图片上传
    public function upload()
    {
        $file = request()->file('file_upload');
        $picture = new Picture();
        $result = $picture->pictureUpload($file);
        return json($result);

    }
}