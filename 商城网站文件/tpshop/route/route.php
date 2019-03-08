<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

//用户后台模块
Route::group('admin', function () {
    Route::any('/login', 'admin/Login/login');//后台登陆
    Route::get('/verify', 'admin/Login/verify');//验证码
    Route::get('/logout','admin/Login/logOut'); //退出
    Route::get('/index', 'admin/Index/index');//后台首页

});

//用户登录模块
Route::group('home', function (){
    Route::any('/register', 'home/Register/register');//注册用户
    Route::any('/login', 'home/Login/login');//用户登录
    Route::get('/isLogin', 'home/Login/isLogin');//检测是否登录
    Route::post('/logOut', 'home/Login/logOut');//退出登录
    Route::get('/memberIsHas', 'home/Register/memberIsHas');//检测用户是否存在
//电商首页
    Route::get('index','home/Index/index');
    Route::post('getLoginInfo','home/Index/getLoginInfo');
});
//商品模块
Route::group('goods', function () {
    Route::any('/goodsList', 'admin/Goods/goodsList');//商品列表
    Route::any('/addGoods', 'admin/Goods/addGoods');//发布商品
    Route::get('/logout','admin/Login/logOut'); //退出
    Route::get('/index', 'admin/Index/index');//后台首页
    Route::any('/dialogSelectCategory', 'admin/Goods/dialogSelectCategory');//
    Route::any('/getChildCategory', 'admin/Goods/getChildCategory');//获取子类
    Route::any('/upload', 'admin/Goods/upload');//图片上传
    Route::any('goodsInfo','home/Goods/goodsInfo');//商品详情
});

//加入购物车
Route::group('cart',function (){
   Route::post('/addCart', 'home/Cart/addCart');
   Route::get('/getNum', 'home/Cart/getNum');
   Route::any('/cartList', 'home/Cart/cartList');
   Route::post('/changeNum', 'home/Cart/changeNum');
   Route::get('/emptyCart', 'home/Cart/emptyCart');
   Route::get('/cartChecked', 'home/Cart/cartChecked');
   Route::post('/delCart', 'home/cart/delCart');
});

//结算模块
Route::group('order',function (){
    Route::any('/orderList', 'home/Order/orderList');
    Route::post('/getProvince', 'home/Order/getProvince');
    Route::post('/getCity', 'home/Order/getCity');
    Route::post('/getDistrict', 'home/Order/getDistrict');
    Route::post('/operationAddress', 'home/Order/operationAddress');
    Route::post('/membersAddressDelete', 'home/Order/membersAddressDelete');
    Route::post('/updateAddressDefault', 'home/order/updateAddressDefault');
});

//支付模块pay
Route::group('pay',function (){
    Route::any('/index', 'home/Pay/index');
    Route::post('/weChatPay', 'home/Pay/weChatPay');
    Route::any('/aliPay', 'home/Pay/aliPay');
    Route::any('/notify', 'home/Pay/notify');
});