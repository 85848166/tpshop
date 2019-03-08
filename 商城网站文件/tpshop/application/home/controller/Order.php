<?php
/**
 * Created by PhpStorm.
 * User: MACHENIKE
 * Date: 2019/3/2
 * Time: 11:38
 */

namespace app\home\controller;


use think\Controller;
use think\Db;
use think\facade\Session;
use think\Request;

class Order extends Controller
{
    //显示订单列表
    public function orderList()
    {
        //显示地址
        $mid = Session::get('mid');
        if ($mid){
            //获取用户的地址
            $address = Db::name('member_address')->where('uid',$mid)->select();
            //获取省市区
            foreach ($address as &$addr){
                $province = Db::name('region')->field('region_name')->where('id',$addr['province'])->find();
                $city = Db::name('region')->field('region_name')->where('id',$addr['city'])->find();
                $district = Db::name('region')->field('region_name')->where('id',$addr['district'])->find();
                $detailAddr =  $province['region_name']."省"." ". $city['region_name']."市"." ".$district['region_name']." ".$addr["address"];
                $addr['address'] = $detailAddr;
            }
            //获取商品的列表
            //查询购物车 获取用户的商品数据
            $cartData = Db::name('cart')->where('member_id',$mid)->select();
            $goods = [];
            $total = 0;
            $totalCount = 0;
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
                $totalCount += $arr['count'];
                $goods[] = $arr;
            }
        }else{
            header("location: http://localhost/tpshop/public/index.php/home/login");
            exit;
        }
        $this->assign('total',$total);
        $this->assign('totalCount',$totalCount);
        $this->assign("goodsData",$goods);
        $this->assign('site',$address);
        return $this->fetch();
    }

    //获取省数据
    public function getProvince()
    {
        $province = Db::name('region')->field('id,region_name')->where('parent_id',1)->select();
        return json($province);
    }

    //获取城市数据
    public function getCity(Request $request)
    {
        //获取省id
        $provinceId = $request->param('provinceId');
        $city =  Db::name("region")->field("id,region_name")->where("parent_id",  $provinceId)->select();
        return json($city);
    }

    //获取市区数据
    public function getDistrict(Request $request)
    {
        $cityId = $request->param('city_id');
        $district = Db::name('region')->field('id,region_name')->where('parent_id',$cityId)->select();
        return json($district);
    }

    //保存用户收货地址
    public function operationAddress(Request $request)
    {
        //构建添加地址数据
        $data = [
            "uid"       => Session::get("mid"),
            "consignee" => $request->param("consignee"),
            "mobile"    => $request->param("mobile"),
            "province"  => $request->param("province"),
            "city"      => $request->param("city"),
            "district"  => $request->param("district"),
            "address"   => $request->param("address"),
        ];
        //添加地址
        $row = Db::name('member_address')->insert($data);
        if ($row){
            return json(["message"=>"保存成功"]);
        }
    }

    //修改默认地址
    public function updateAddressDefault(Request $request)
    {
        $mid = Session::get('mid');
        $addressId = $request->param('id');
        $addressInfo = Db::name('member_address')->field('id,is_default')->where('uid',$mid)->select();
        foreach ($addressInfo as $def) {
            if ($def['is_default'] == 1) {
                Db::name('member_address')->where('id', $def['id'])->data(['is_default' => 0])->update();
            }
        }
        $reg = Db::name('member_address')->where('id',$addressId)->data(['is_default' => 1])->update();
        if ($reg){
            return json(['code' => 1,'message' => '操作成功']);
        }else{
            return json(['code' => 0,'message'=>"操作失败"]);
        }
    }

    //删除收货地址
    public function membersAddressDelete(Request $request)
    {
        $addressId = $request->param('id');
        $row = Db::name('member_address')->where('id',$addressId)->delete();
        if ($row){
            return json(['code'=> 1,'message' => '删除成功']);
        }else{
           return json(['code' => 0,'message' => '操作失败']);
        }
    }
}