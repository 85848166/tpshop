<?php /*a:10:{s:79:"E:\phpStudy\PHPTutorial\WWW\tpshop\application\admin\view\goods\goods_list.html";i:1547797482;s:72:"E:\phpStudy\PHPTutorial\WWW\tpshop\application\admin\view\base\body.html";i:1548251229;s:72:"E:\phpStudy\PHPTutorial\WWW\tpshop\application\admin\view\base\head.html";i:1551497289;s:94:"E:\phpStudy\PHPTutorial\WWW\tpshop\application\admin\view\goods\goods\goodslist_alone_css.html";i:1547796736;s:71:"E:\phpStudy\PHPTutorial\WWW\tpshop\application\admin\view\base\nav.html";i:1547991213;s:89:"E:\phpStudy\PHPTutorial\WWW\tpshop\application\admin\view\goods\goods\goodslist_main.html";i:1551497806;s:76:"E:\phpStudy\PHPTutorial\WWW\tpshop\application\admin\view\base\password.html";i:1547558890;s:74:"E:\phpStudy\PHPTutorial\WWW\tpshop\application\admin\view\base\footer.html";i:1547558969;s:74:"E:\phpStudy\PHPTutorial\WWW\tpshop\application\admin\view\base\dialog.html";i:1547816125;s:92:"E:\phpStudy\PHPTutorial\WWW\tpshop\application\admin\view\goods\goods\goodslist_alonejs.html";i:1548417422;}*/ ?>
<!DOCTYPE html>
<html>
<head>
	<!--包含头部文件-->
	<meta name="renderer" content="webkit" />
	<meta http-equiv="X-UA-COMPATIBLE" content="IE=edge,chrome=1"/>
	<meta charset="UTF-8">
			<title>官方直营店 - 商品管理</title>
			<link rel="shortcut icon" type="image/x-icon" href="/tpshop/public__JS__/admin_icon.ico" media="screen"/>
		<link rel="stylesheet" type="text/css" href="/tpshop/public/static/css/bootstrap.css" />
		<link rel="stylesheet" type="text/css" href="/tpshop/public/static/css/bootstrap-responsive.css" />
		<link rel="stylesheet" type="text/css" href="/tpshop/public/static/css/common.css" />
		<link rel="stylesheet" type="text/css" href="/tpshop/public/static/css/font-awesome.min.css" />
		<link rel="stylesheet" type="text/css" href="/tpshop/public/static/css/seller_center.css" />
		<link rel="stylesheet" type="text/css" href="/tpshop/public/static/css/simple.switch.three.css" />
		<style>
		.wrapper{width:1268px;}
		.help-block{color:red;}
		.ncsc-admin-info{cursor: pointer;}
		.ncsc-path a{text-decoration:none;}
		.is-upgrade{width: 7px;height: 7px;background: red;border-radius: 50%;position: absolute;z-index: 5;bottom: 9px;display: none;}
		.modal-header:hover{cursor: move;}
		</style>
		<script src="/tpshop/public/static/js/jquery-1.8.1.min.js"></script>
		<script src="/tpshop/public/static/js/bootstrap.js"></script>
		<script src="/tpshop/public/static/js/bootstrapswitch.js"></script>
		<script src="/tpshop/public/static/js/simple.switch.js"></script>
		<script src="/tpshop/public/static/js/jquery.unobtrusive-ajax.min.js"></script>
		<script src="/tpshop/public/static/js/common.js"></script>
		<script src="/tpshop/public/static/js/seller.js"></script>
		<script src="/tpshop/public/static/js/load_task.js"></script>
		<script src="/tpshop/public/static/js/load_bottom.js" type="text/javascript"></script>
		<script src="/tpshop/public/static/js/jquery-ui.min.js"></script>
		<script src="/tpshop/public/static/js/ns_tool.js"></script>
		<script>
	/**
	 * 六星开源商城系统 - 团队十年电商经验汇集巨献!
	 * ========================================================= Copy right
	 * 2015-2025 湖南六星教育网络科技有限公司, 保留所有权利。
	 * ---------------------------------------------- 官方网址:
	 * http://www.sixstaredu.com 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和使用。
	 * 任何企业和个人不允许对程序代码以任何形式任何目的再发布。
	 * =========================================================
	 * 
	 * @author : 小学生Pack老师
	 * @date : 2016年12月16日 16:17:13
	 * @version : v1.0.0.0 商品发布中的第二步，编辑商品信息
	 */
	var PLATFORM_NAME = "官方直营店";
	var ADMINIMG = "/tpshop/public__JS__";//后台图片请求路径
	var ADMINMAIN = "http://localhost/tpshop/public/index.php";//后台请求路径
	var UPLOAD = "";//上传文件根目录
	var PAGESIZE = "20";//分页显示页数
	var ROOT = "";//跟目录

	//上传文件路径
	var UPLOADGOODS = 'upload/goods/';//存放商品图片
	var UPLOADGOODSSKU = 'upload/goods_sku/';//存放商品SKU
	var UPLOADGOODSBRAND = 'upload/goods_brand/';//存放商品品牌图
	var UPLOADGOODSGROUP = 'upload/goods_group/';////存放商品分组图片
	var UPLOADGOODSCATEGORY = 'upload/goods_category/';////存放商品分类图片
	var UPLOADCOMMON = 'upload/common/';//存放公共图片、网站logo、独立图片、没有任何关联的图片
	var UPLOADAVATOR = 'upload/avator/';//存放用户头像
	var UPLOADPAY = 'upload/pay/';//存放支付生成的二维码图片
	var UPLOADADV = 'upload/advertising/';//存放广告位图片
	var UPLOADEXPRESS = 'upload/express/';//存放物流图片
</script>
	<!--包含单独的js和css-->
	
<link rel="stylesheet" type="text/css" href="/tpshop/public/static/css/product.css">
		<script type="text/javascript" src="/tpshop/public/static/js/wdatepicker.js"></script>
		<style type="text/css">
		.tr-title {
			height: 30px;
			background: #E3E3E3;
			border:1px solid rgba(234, 233, 233, 0.51);
		}
		.a-pro-view-img {
			float: left;
		}

		.thumbnail-img {
			width: 60px;
			margin-right: 10px;
		}

		.cell i {
			display: block;
		}
		.remodal-bg.with-red-theme.remodal-is-opening,.remodal-bg.with-red-theme.remodal-is-opened {
			filter: none;
		}
			
		.remodal-overlay.with-red-theme {
			background-color: #f44336;
		}

		.remodal.with-red-theme {
			background: #fff;
		}

		input[type="radio"], input[type="checkbox"] {
			margin: -1px 5px 0;
			margin-left:0px;
		}
		.edit-group{
			border-bottom: 1px solid #ebebeb;
			margin-bottom:10px;
		}
		.edit-group label{	
			font-weight:normal;
		}
		.edit-group-title{
			height:15px;
			line-height:15px;
			width:140px;
			margin-top:3px;
			margin-bottom:3px;
		}
		.edit-group-button{
			border-color: #3283fa;
			border: 1px solid #bbb;
			height: 26px;
			line-height: 24px;
			padding: 0 5px;
		}
		.group-button-bg{
			background: #3283fa;
			color: #fff;
		}
		.div-pro-view-name {
			width: 100%;
			min-height: 60px;
		}
		i.hot,i.recommend,i.new{font-size:12px;margin-right:5px;font-style:normal;color:#fff;background-color:#E84C3D;border-radius:2px;padding:1px 2px;}

		.icon-qrcode:before {
		    content: "\f029";
		}
		[class^="icon-"]:before, [class*=" icon-"]:before {
		    text-decoration: inherit;
		    display: inline-block;
		    speak: none;
		}
		[class^="icon-"], [class*=" icon-"] {
		    font-family: FontAwesome;
		    font-weight: normal;
		    font-style: normal;
		    text-decoration: inherit;
		    -webkit-font-smoothing: antialiased;
		}
		.goodsCategory{
			width: 216px;
			height: 300px;
			border:1px solid #CCCCCC;
			position: absolute;
			z-index: 100;
			background: #fff;
			left: 352px;
			display: none;
			overflow-y: auto;
		}
		.goodsCategory::-webkit-scrollbar{
			width: 8px;
		} 
		.goodsCategory::-webkit-scrollbar-track{
		    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3);
		    border-radius: 10px;
		    background-color: #f5f5f5;
		}
		.goodsCategory::-webkit-scrollbar-thumb{
		    /*width: 10px;*/
		    height: 20px;
		    border-radius: 10px;
		    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3);
		    background-color: #ddd;
		}
		.goodsCategory ul{
			height: 280px;
			margin-top: -2px;
			margin-left: 0;
		}
		.goodsCategory ul li{
			text-align: left;
			padding:0 15px;
			line-height: 30px;
		}
		.goodsCategory ul li i{
			float: right;
			line-height: 30px;
		}
		.goodsCategory ul li:hover{
			cursor: pointer;
		}
		.goodsCategory ul li:hover,.goodsCategory ul li.selected{
			background: #00C0FF;
			color: #fff;
		}
		.two{
			left: 570px;
			border-left:0;
		}
		.three{
			left: 787px;
			width: 198px;
			border-left:0;
		}
		.selectGoodsCategory{
			width: 216px;
			height: 45px;
			border:1px solid #CCCCCC;
			position: absolute;
			z-index: 100;
			left: 352px;
			margin-top: 300px;
			border-collapse: collapse;
			background: #fff;
			display: none;
		}
		.selectGoodsCategory a{
			display: block;
			height: 30px;
			width: 100px;
			text-align: center;
			color: #fff;
			line-height: 30px;
			margin:8px;
			background: #00C0FF;
			text-decoration:none;
		}
		.RIGHT{
			min-height: 800px;
		}
		input[type=number] {    
			-moz-appearance:textfield;
		}
		input[type=number]::-webkit-inner-spin-button,
		input[type=number]::-webkit-outer-spin-button {    
			-webkit-appearance: none;    
			margin: 0;
		}
		.table th, .table td {
			 vertical-align: middle; 
		}
		.recommendBox{
			width: 360px;
			display: inline-block;
			float: right;
		}
		.introduction_box{
			width: 360px;
			display: inline-block;
			float: right;
		}
		</style>


</head>
<body>
	<!--导航-->
	<!--
<header class="ncsc-head-layout">
    <div class="wrapper">
        <div class="ncsc-admin">
            <div class="ncsc-admin-headimg">
                <img src="../../static/picture/default_user_portrait.gif" />
            </div>
            <span class="user-name ncsc-admin-info" data-toggle="dropdown"></span>
            <a class="ncsc-admin-a ncsc-admin-info" data-toggle="dropdown"><i class="ncsc-admin-i ncsc-admin-down"></i></a>
            <a class="ncsc-admin-a h40"><i class="ncsc-admin-line"></i></a>
            <a class="ncsc-admin-a" href="http://tp.23673.com" target="_blank"><i class="ncsc-admin-i ncsc-admin-home"></i></a>
            <a class="ncsc-admin-a" href="http://tp.23673.com/admin/login/logout" title="安全退出管理中心"><i class="ncsc-admin-i ncsc-admin-off"></i></a>
            <div class="user-operation dropdown-menu">
                <a href="javascript:;" title="修改密码" onclick="editpassword()"><i class="fa fa-wrench"></i>修改密码</a>
                <a href="javascript:;" title="更新缓存" onclick="delcache()"><i class="fa fa-send"></i>更新缓存</a>
            </div>
        </div>
        <div class="center-logo">
            <a href="http://tp.23673.com/admin"><img src="/tpshop/public/static/picture/shop_logo.png" /></a>
        </div>
        <div class="index-search-container" style="position: relative;">
            <div class="index-sitemap" onclick="nav_open()">
                <a href="javascript:void(0);">导航管理<i class="icon-angle-down"></i></a>
                <div class="sitemap-menu" style="display: none; z-index: 1000;">
                    <div class="title-bar" onclick="nav_close()">
                        <h2>
                            <i class="icon-sitemap"></i>管理导航<em></em>
                        </h2>
                        <span id="closeSitemap" class="close">X</span>
                    </div>
                    <div id="quicklink_list" class="content">
                        <dl>
                            <dt>首页</dt>
                            <dd>
                                <a href="http://tp.23673.com/admin/index/index"> 欢迎页</a>
                            </dd>
                        </dl>
                        <dl>
                            <dt>商品</dt>
                            <dd><a href="http://tp.23673.com/admin/goods/goodslist"> 商品列表</a></dd>
                            <dd><a href="http://tp.23673.com/admin/goods/addgoods"> 商品发布</a></dd>
                            <dd><a href="http://tp.23673.com/admin/goods/goodsgrouplist"> 商品标签</a></dd>
                            <dd><a href="http://tp.23673.com/admin/saleservice/consultlist"> 咨询管理</a></dd>
                            <dd><a href="http://tp.23673.com/admin/goods/goodscomment"> 商品评价</a></dd>
                            <dd><a href="http://tp.23673.com/admin/system/albumlist"> 相册管理</a></dd>
                            <dd><a href="http://tp.23673.com/admin/goods/recyclelist"> 商品回收站</a></dd>
                            <dd><a href="http://tp.23673.com/admin/goods/supplierlist"> 供货商</a></dd>
                        </dl>
                        <dl>
                            <dt>订单</dt>
                            <dd><a href="http://tp.23673.com/admin/order/orderlist"> 订单列表</a></dd>
                            <dd><a href="http://tp.23673.com/admin/express/expresscompany"> 物流公司</a></dd>
                            <dd><a href="http://tp.23673.com/admin/order/returnsetting"> 商家地址</a></dd>
                            <dd><a href="http://tp.23673.com/admin/shop/pickuppointlist"> 自提点管理</a></dd>
                        </dl>
                        <dl>
                            <dt>营销</dt>
                            <dd><a href="http://tp.23673.com/admin/promotion/coupontypelist"> 优惠券</a></dd>
                            <dd><a href="http://tp.23673.com/admin/promotion/mansonglist"> 满减送</a></dd>
                            <dd><a href="http://tp.23673.com/admin/promotion/getdiscountlist"> 限时折扣</a></dd>
                            <dd><a href="http://tp.23673.com/admin/promotion/fullshipping"> 满额包邮</a></dd>
                        </dl>
                        <dl>
                            <dt>店铺</dt>
                            <dd><a href="http://tp.23673.com/admin/shop/shopconfig"> 店铺设置</a></dd>
                            <dd><a href="http://tp.23673.com/admin/System/goodsRecommendClass"> 促销版块</a></dd>
                            <dd><a href="http://tp.23673.com/admin/config/shopadlist"> 广告管理</a></dd>
                            <dd><a href="http://tp.23673.com/admin/Config/shopNavigationList"> 导航管理</a</dd>
                            <dd><a href="http://tp.23673.com/admin/Shop/offlineStore"> 线下店铺</a></dd>
                            <dd><a href="http://tp.23673.com/admin/config/updatenotice"> 首页公告</a></dd>
                        </dl>
                        <dl>
                            <dt>用户</dt>
                            <dd><a href="http://tp.23673.com/admin/auth/userlist"> 用户列表</a></dd>
                            <dd><a href="http://tp.23673.com/admin/auth/authgrouplist"> 用户组列表</a></dd>
                            <dd><a href="http://tp.23673.com/admin/auth/userdetail"> 个人资料</a></dd>
                        </dl>
                        <dl>
                            <dt>资产</dt>
                            <dd><a href="http://tp.23673.com/admin/account/shopaccount"> 店铺收入</a></dd>
                            <dd><a href="http://tp.23673.com/admin/account/shopsalesaccount"> 销售概况</a></dd>
                            <dd><a href="http://tp.23673.com/admin/account/shopgoodssaleslist"> 商品分析</a></dd>
                            <dd><a href="http://tp.23673.com/admin/account/shopreport"> 运营报告</a></dd>
                            <dd><a href="http://tp.23673.com/admin/account/shopgoodssalesrank"> 销售排行</a></dd>
                        </dl>
                        <dl>
                            <dt>系统</dt>
                            <dd><a href="http://tp.23673.com/admin/system/modulelist"> 模块列表</a></dd>
                        </dl>
                    </div>
                </div>
            </div>
            <div class="search-bar">
                <input type="hidden" name="act" value="search" />
                <input type="text" id="search_goods" name="keyword" placeholder="商品搜索" class="search-input-text" />
                <input type="submit" class="search-input-btn pngFix" onclick="search()" value="" />
            </div>
        </div>
        <nav class="ncsc-nav">
            <dl class="current_nav" onmouseover="add_nav_class(this)" onmouseout="remove_nav_class(this)">
                <dt><a href="<?php echo url('/admin/index'); ?>">首页</a></dt>
                <dd class="arrow"></dd>
            </dl>
            <dl onmouseover="add_nav_class(this)" onmouseout="remove_nav_class(this)">
                <dt><a href="<?php echo url('/goods/goodsList'); ?>">商品</a></dt>
            </dl>
            <dl onmouseover="add_nav_class(this)" onmouseout="remove_nav_class(this)">
                <dt><a href="http://tp.23673.com/admin/order/orderlist">订单</a></dt>
            </dl>
            <dl onmouseover="add_nav_class(this)" onmouseout="remove_nav_class(this)">
                <dt><a href="http://tp.23673.com/admin/promotion/coupontypelist">营销</a></dt>
            </dl>
            <dl onmouseover="add_nav_class(this)" onmouseout="remove_nav_class(this)">
                <dt><a href="http://tp.23673.com/admin/shop/shopconfig">店铺</a></dt>
            </dl>
            <dl onmouseover="add_nav_class(this)" onmouseout="remove_nav_class(this)">
                <dt><a href="http://tp.23673.com/admin/auth/userlist">用户</a></dt>
            </dl>
            <dl onmouseover="add_nav_class(this)" onmouseout="remove_nav_class(this)">
                <dt><a href="http://tp.23673.com/admin/account/shopsalesaccount">资产</a></dt>
            </dl>
            <dl onmouseover="add_nav_class(this)" onmouseout="remove_nav_class(this)">
                <dt><a href="http://tp.23673.com/admin/system/modulelist">系统</a></dt>
            </dl>
        </nav>
    </div>
</header>-->

	<!--主要内容-->
	
<!--导航-->
<header class="ncsc-head-layout">
    <div class="wrapper">
        <div class="ncsc-admin">
            <div class="ncsc-admin-headimg">
                <img src="/tpshop/public/static/picture/default_user_portrait.gif"/>
            </div>
            <span class="user-name ncsc-admin-info" data-toggle="dropdown"><?php echo htmlentities($username); ?></span>
            <a class="ncsc-admin-a ncsc-admin-info" data-toggle="dropdown"><i class="ncsc-admin-i ncsc-admin-down"></i></a>
            <a class="ncsc-admin-a h40"><i class="ncsc-admin-line"></i></a>
            <a class="ncsc-admin-a" href="http://tp.23673.com" target="_blank"><i
                    class="ncsc-admin-i ncsc-admin-home"></i></a>
            <a class="ncsc-admin-a" href="<?php echo url('/admin/logout'); ?>" title="安全退出管理中心"><i
                    class="ncsc-admin-i ncsc-admin-off"></i></a>
            <div class="user-operation dropdown-menu">
                <a href="javascript:;" title="修改密码" onclick="editpassword()"><i class="fa fa-wrench"></i>修改密码</a>
                <a href="javascript:;" title="更新缓存" onclick="delcache()"><i class="fa fa-send"></i>更新缓存</a>
            </div>
        </div>
        <div class="center-logo">
            <a href="http://tp.23673.com/admin"><img src="/tpshop/public/static/picture/shop_logo.png"/></a>
        </div>
        <div class="index-search-container" style="position: relative;">
            <div class="index-sitemap" onclick="nav_open()">
                <a href="javascript:void(0);">导航管理<i class="icon-angle-down"></i></a>
                <div class="sitemap-menu" style="display: none; z-index: 1000;">
                    <div class="title-bar" onclick="nav_close()">
                        <h2>
                            <i class="icon-sitemap"></i>管理导航<em></em>
                        </h2>
                        <span id="closeSitemap" class="close">X</span>
                    </div>
                    <div id="quicklink_list" class="content">
                        <dl>
                            <dt>首页</dt>
                            <dd>
                                <a href="http://tp.23673.com/admin/index/index"> 欢迎页</a>
                            </dd>
                        </dl>
                        <dl>
                            <dt>商品</dt>
                            <dd><a href="http://tp.23673.com/admin/goods/goodslist"> 商品列表</a></dd>
                            <dd><a href="http://tp.23673.com/admin/goods/addgoods"> 商品发布</a></dd>
                            <dd><a href="http://tp.23673.com/admin/goods/goodsgrouplist"> 商品标签</a></dd>
                            <dd><a href="http://tp.23673.com/admin/saleservice/consultlist"> 咨询管理</a></dd>
                            <dd><a href="http://tp.23673.com/admin/goods/goodscomment"> 商品评价</a></dd>
                            <dd><a href="http://tp.23673.com/admin/system/albumlist"> 相册管理</a></dd>
                            <dd><a href="http://tp.23673.com/admin/goods/recyclelist"> 商品回收站</a></dd>
                            <dd><a href="http://tp.23673.com/admin/goods/supplierlist"> 供货商</a></dd>
                        </dl>
                        <dl>
                            <dt>订单</dt>
                            <dd><a href="http://tp.23673.com/admin/order/orderlist"> 订单列表</a></dd>
                            <dd><a href="http://tp.23673.com/admin/express/expresscompany"> 物流公司</a></dd>
                            <dd><a href="http://tp.23673.com/admin/order/returnsetting"> 商家地址</a></dd>
                            <dd><a href="http://tp.23673.com/admin/shop/pickuppointlist"> 自提点管理</a></dd>
                        </dl>
                        <dl>
                            <dt>营销</dt>
                            <dd><a href="http://tp.23673.com/admin/promotion/coupontypelist"> 优惠券</a></dd>
                            <dd><a href="http://tp.23673.com/admin/promotion/mansonglist"> 满减送</a></dd>
                            <dd><a href="http://tp.23673.com/admin/promotion/getdiscountlist"> 限时折扣</a></dd>
                            <dd><a href="http://tp.23673.com/admin/promotion/fullshipping"> 满额包邮</a></dd>
                        </dl>
                        <dl>
                            <dt>店铺</dt>
                            <dd><a href="http://tp.23673.com/admin/shop/shopconfig"> 店铺设置</a></dd>
                            <dd><a href="http://tp.23673.com/admin/System/goodsRecommendClass"> 促销版块</a></dd>
                            <dd><a href="http://tp.23673.com/admin/config/shopadlist"> 广告管理</a></dd>
                            <dd><a href="http://tp.23673.com/admin/Config/shopNavigationList"> 导航管理</a</dd>
                            <dd><a href="http://tp.23673.com/admin/Shop/offlineStore"> 线下店铺</a></dd>
                            <dd><a href="http://tp.23673.com/admin/config/updatenotice"> 首页公告</a></dd>
                        </dl>
                        <dl>
                            <dt>用户</dt>
                            <dd><a href="http://tp.23673.com/admin/auth/userlist"> 用户列表</a></dd>
                            <dd><a href="http://tp.23673.com/admin/auth/authgrouplist"> 用户组列表</a></dd>
                            <dd><a href="http://tp.23673.com/admin/auth/userdetail"> 个人资料</a></dd>
                        </dl>
                        <dl>
                            <dt>资产</dt>
                            <dd><a href="http://tp.23673.com/admin/account/shopaccount"> 店铺收入</a></dd>
                            <dd><a href="http://tp.23673.com/admin/account/shopsalesaccount"> 销售概况</a></dd>
                            <dd><a href="http://tp.23673.com/admin/account/shopgoodssaleslist"> 商品分析</a></dd>
                            <dd><a href="http://tp.23673.com/admin/account/shopreport"> 运营报告</a></dd>
                            <dd><a href="http://tp.23673.com/admin/account/shopgoodssalesrank"> 销售排行</a></dd>
                        </dl>
                        <dl>
                            <dt>系统</dt>
                            <dd><a href="http://tp.23673.com/admin/system/modulelist"> 模块列表</a></dd>
                        </dl>
                    </div>
                </div>
            </div>
            <div class="search-bar">
                <input type="hidden" name="act" value="search"/>
                <input type="text" id="search_goods" name="keyword" placeholder="商品搜索" class="search-input-text"/>
                <input type="submit" class="search-input-btn pngFix" onclick="search()" value=""/>
            </div>
        </div>
        <nav class="ncsc-nav">
            <dl onmouseover="add_nav_class(this)" onmouseout="remove_nav_class(this)">
                <dt><a href="<?php echo url('/admin/index'); ?>">首页</a></dt>
            </dl>
            <dl class="current_nav" onmouseover="add_nav_class(this)" onmouseout="remove_nav_class(this)">
                <dt><a href="<?php echo url('/goods/goodsList'); ?>">商品</a></dt>
                <dd class="arrow"></dd>
            </dl>
            <dl onmouseover="add_nav_class(this)" onmouseout="remove_nav_class(this)">
                <dt><a href="http://tp.23673.com/admin/order/orderlist">订单</a></dt>
            </dl>
            <dl onmouseover="add_nav_class(this)" onmouseout="remove_nav_class(this)">
                <dt><a href="http://tp.23673.com/admin/promotion/coupontypelist">营销</a></dt>
            </dl>
            <dl onmouseover="add_nav_class(this)" onmouseout="remove_nav_class(this)">
                <dt><a href="http://tp.23673.com/admin/shop/shopconfig">店铺</a></dt>
            </dl>
            <dl onmouseover="add_nav_class(this)" onmouseout="remove_nav_class(this)">
                <dt><a href="http://tp.23673.com/admin/auth/userlist">用户</a></dt>
            </dl>
            <dl onmouseover="add_nav_class(this)" onmouseout="remove_nav_class(this)">
                <dt><a href="http://tp.23673.com/admin/account/shopsalesaccount">资产</a></dt>
            </dl>
            <dl onmouseover="add_nav_class(this)" onmouseout="remove_nav_class(this)">
                <dt><a href="http://tp.23673.com/admin/system/modulelist">系统</a></dt>
            </dl>
        </nav>
    </div>
</header>

<div class="MAIN" style="min-height: 94vh;">
    <div class="LEFT">
        <div id="accordion2" class="accordion leftmenu">
            <div class="accordion-group">
                <div class="sidebarX">
                    <img src="/tpshop/public/static/picture/admin_left_logo.png"/>
                    <h2>商品</h2>
                </div>
                <div class="accordion-body collapse in" id="collapseOne">
                    <ul class="nav nav-pills nav-stacked" id="left_menu-small">
                        <li class="active"><h1></h1><a href="<?php echo url('/goods/goodsList'); ?>">商品列表</a></li>
                        <li><a href="<?php echo url('/goods/addGoods'); ?>">商品发布</a></li>
                        <li><a href="http://tp.23673.com/admin/goods/goodsgrouplist">商品标签</a></li>
                        <li><a href="http://tp.23673.com/admin/saleservice/consultlist">咨询管理</a></li>
                        <li><a href="http://tp.23673.com/admin/goods/goodscomment">商品评价</a></li>
                        <li><a href="http://tp.23673.com/admin/system/albumlist">相册管理</a></li>
                        <li><a href="http://tp.23673.com/admin/goods/recyclelist">商品回收站</a></li>
                        <li><a href="http://tp.23673.com/admin/goods/supplierlist">供货商</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- 右边主要内容的加载 -->
    <div class="RIGHT">
        <div class="ncsc-path">
            <a href="http://tp.23673.com/admin"><i class="icon-desktop"></i>官方直营店</a>
            <i class="icon-angle-right"></i>
            <a href="<?php echo url('goods/goodsList'); ?>">商品</a>
            <i class="icon-angle-right"></i>
            <!-- 需要加跳转链接用这个：<?php echo url('goods/goodsList'); ?> -->
            <a href="javascript:;">商品列表</a>
        </div>
        <!--顶部边框开始  -->
        <div class="tabmenu">
            <ul class="tab pngFix">
                <li class="active"><a href="<?php echo url('/goods/goodsList'); ?>">商品列表</a></li>
            </ul>
            <div class="right_side_operation">
                <ul>

                    <li><a class="nscs-table-handle_green" href="<?php echo url('/goods/addGoods'); ?>"><i
                            class="fa fa-plus-circle"></i>&nbsp;发布商品</a></li>

                </ul>
            </div>
        </div>
        <hr class="tabmenu_hr" style="border:1px solid #00C0FF;margin:0 0px 10px 20px;"/>
        <div class="main">
            <div class="js-mask-category"
                 style="display:none;background: rgba(0,0,0,0);position:fixed;width:100%;height:100%;top:0;left:0;right:0;bottom:0;z-index:90;"></div>
            <table class="mytable">
                <tr>
                    <th style="line-height:33px;">
                        商品分类：
                        <input type="text" placeholder="请选择商品分类" id="goodsCategoryOne" is_show="false">
                        <div class="goodsCategory one">
                            <ul>
                                <li class="js-category-one" category_id="311">女装/男装/内衣 <i
                                        class="fa fa-angle-right fa-lg"></i></li>
                                <li class="js-category-one" category_id="312">鞋靴/箱包/配件</li>
                                <li class="js-category-one" category_id="315">手机数码</li>
                                <li class="js-category-one" category_id="317">家用电器<i
                                        class="fa fa-angle-right fa-lg"></i></li>
                            </ul>
                        </div>
                        <div class="goodsCategory two" style="border-left:0;">
                            <ul id="goodsCategoryTwo">
                            </ul>
                        </div>
                        <div class="goodsCategory three">
                            <ul id="goodsCategoryThree">
                            </ul>
                        </div>
                        <div class="selectGoodsCategory">
                            <a href="javascript:;" id="confirmSelect" style="float:right;">确认选择</a>
                        </div>
                        <input type="hidden" id="category_id_1">
                        <input type="hidden" id="category_id_2">
                        <input type="hidden" id="category_id_3">
                        商品名称：<input id="goods_name" class="input-medium" type="text" value="" placeholder="要搜索的商品名称">
                        上下架
                        <select id="state">
                            <option value="">全部</option>
                            <option value="1">上架</option>
                            <option value="0">下架</option>
                        </select>
                        <input type="button" onclick="searchData()" value="搜索"/>
                    </th>
                </tr>
            </table>
            <div id="myTabContent" class="tab-content">
                <div class="tab-pane active">
                    <table class="table table-striped table-main" border="0">
                        <colgroup>
                            <col width="3%">
                            <col width="43%">
                            <col width="12%">
                            <col width="6%">
                            <col width="6%">
                            <col width="7%">
                            <col width="7%">
                            <col width="15%">
                        </colgroup>
                        <tbody>
                        <tr class="table-title" style="background: white;z-index: 10;border: 1px solid #E3E3E3;">
                            <th></th>
                            <th>商品名称</th>
                            <th>价格（元）</th>
                            <th>总库存</th>
                            <th>销量</th>
                            <th>上下架</th>
                            <th>排序</th>
                            <th style="text-align:center;">操作</th>
                        </tr>
                        <tr class="trcss">
                            <td colspan="5">
                                <label style="display: inline-block;vertical-align: middle;">
                                    <input onclick="CheckAll(this)" type="checkbox" id="chek_all">
                                    <span style="display: inline-block; margin-left: 0px; margin-right: 10px;font-weight: 400;">全选</span>
                                </label>
                                <a class="btn btn-small fun-a" href="javascript:batchDelete()">批量删除</a>
                                <a class="btn btn-small fun-a upstore" href="javascript:void(0)"
                                   onclick="goodsIdCount('online')">上架</a>
                                <a class="btn btn-small fun-a downstore" href="javascript:void(0)"
                                   onclick="goodsIdCount('offline')">下架</a>
                                <!-- <a class="btn btn-small fun-a recommend" href="javascript:void(0)" onclick="ShowRecommend()" data-html="true" id="setRecommend" title="推荐"
                                data-container="body" data-placement="bottom"  data-trigger="manual"
                                data-content="<div class='edit-group' id='recommendType'>
                                     <label class='checkbox-inline'><input type='checkbox' value='1'>热销 </label>
                                    <label class='checkbox-inline'><input type='checkbox' value='2'>推荐 </label>
                                    <label class='checkbox-inline'><input type='checkbox' value='3'>新品 </label>
                                    </div>
                                    <button class='edit-group-button group-button-bg' onclick='setRecommend();'>保存</button>
                                    <button class='edit-group-button' onclick='hideSetRecommend()'>取消</button>
                                    "
                                >推荐</a> -->
                                <a onclick="goodsGroupIdCount();" data-html="true" class="btn btn-small fun-a category"
                                   href="javascript:void(0)" id="editGroup"
                                   title="<h6 class='edit-group-title'>修改商品标签</h6>"
                                   data-container="body" data-placement="bottom" data-trigger="manual"
                                   data-content="
						   <div class='edit-group' id='goodsChecked' style='max-width:auto;'>
								<p>
								<label class='checkbox-inline' style='display:inline-block;' >
									<input type='checkbox' value='107'>
									<b> 女装</b>&nbsp;&nbsp;&nbsp;
								</label>
								<label style='display:inline-block;'>
									<input type='checkbox' value='108'>连衣裙
								</label>
								</p>

								<p>
								<label class='checkbox-inline' style='display:inline-block;' >
									<input type='checkbox' value='109'>
									<b>男装</b>&nbsp;&nbsp;&nbsp;
								</label>
								</p>

								<p>
								<label class='checkbox-inline' style='display:inline-block;' >
									<input type='checkbox' value='110'>
									<b>平板</b>&nbsp;&nbsp;&nbsp;
								</label>
								</p>

								<p>
								<label class='checkbox-inline' style='display:inline-block;' >
									<input type='checkbox' value='111'>
									<b>分组添加测试</b>&nbsp;&nbsp;&nbsp;
								</label>
								</p>

								<p>
								<label class='checkbox-inline' style='display:inline-block;' >
									<input type='checkbox' value='112'>
									<b>手机</b>&nbsp;&nbsp;&nbsp;
								</label>
								</p>

								<p>
								<label class='checkbox-inline' style='display:inline-block;' >
									<input type='checkbox' value='113'>
									<b>电器</b>&nbsp;&nbsp;&nbsp;
								</label>
								</p>
							</div>
							<button class='edit-group-button group-button-bg' onclick='goodsGroupUpdate();'>保存</button>
							<button class='edit-group-button' onclick='hideEditGroup()'>取消</button>
							">
                                    商品标签</a>
                                <a href="javascript:;" class="btn btn-small fun-a category" title="更新二维码"
                                   onclick="batchUpdateGoodsQrcode();">更新二维码</a>
                                <input type='hidden' value='' id='goods_type_ids'/>
                            </td>
                        </tr>
                        </tbody>
                        <tbody id="productTbody" style="border: 0px;"></tbody>
                    </table>
                </div>
            </div>
        </div>
        <script src="/tpshop/public/static/js/page.js"></script>
        <div class="page" id="turn-ul" style="display: none;">
            <div class="pagination pagination-right">
                <ul>
                    <li class="total-data">共0有条数据</li>
                    <li class="according-number">每页显示<input type="text" class="input-medium" id="showNumber" value="20"
                                                            data-default="20"/>条
                    </li>
                    <li><a id="beginPage" class="page-disable" style="border: 1px solid #dddddd;">首页</a></li>
                    <li><a id="prevPage" class="page-disable">上一页</a></li>
                    <li id="pageNumber"></li>
                    <li><a id="nextPage">下一页</a></li>
                    <li><a id="lastPage">末页</a></li>
                    <li class="page-count">共0页</li>
                </ul>
            </div>
        </div>
        <input type="hidden" id="page_count"/>
        <input type="hidden" id="page_size"/>
        <script>
            $(function () {
                try {
                    $("#turn-ul").show();//显示分页
                    LoadingInfo(1);//通过此方法调用分页类
                } catch (e) {
                    $("#turn-ul").hide();
                }

                //首页
                $("#beginPage").click(function () {
                    if (jumpNumber != 1) {
                        jumpNumber = 1;
                        LoadingInfo(1);
                        changeClass("begin");
                    }
                    return false;
                });

                //上一页
                $("#prevPage").click(function () {
                    var obj = $(".currentPage");
                    var index = parseInt(obj.text()) - 1;
                    if (index > 0) {
                        obj.removeClass("currentPage");
                        obj.prev().addClass("currentPage");
                        jumpNumber = index;
                        LoadingInfo(index);
                        //判断是否是第一页
                        if (index == 1) {
                            changeClass("prev");
                        } else {
                            changeClass();
                        }
                    }
                    return false;
                });

                //下一页
                $("#nextPage").click(function () {
                    var obj = $(".currentPage");
                    //当前页加一（下一页）
                    var index = parseInt(obj.text()) + 1;
                    if (index <= $("#page_count").val()) {
                        jumpNumber = index;
                        LoadingInfo(index);
                        obj.removeClass("currentPage");
                        obj.next().addClass("currentPage");
                        //判断是否是最后一页
                        if (index == $("#page_count").val()) {
                            changeClass("next");
                        } else {
                            changeClass();
                        }
                    }
                    return false;
                });

                //末页
                $("#lastPage").click(function () {
                    jumpNumber = $("#page_count").val();
                    if (jumpNumber > 1) {
                        LoadingInfo(jumpNumber);
                        $("#pageNumber a:eq(" + (parseInt($("#page_count").val()) - 1) + ")").text($("#page_count").val());
                        changeClass("next");
                    }
                    return false;
                });

                //每页显示页数
                $("#showNumber").blur(function () {
                    if (isNaN($(this).val())) {
                        $("#showNumber").val(20);
                        jumpNumber = 1;
                        LoadingInfo(jumpNumber);
                        return;
                    }
                    //页数没有变化的话，就不要再执行查询
                    if (parseInt($(this).val()) != $(this).attr("data-default")) {
// 			jumpNumber = 1;//设置每页显示的页数，并且设置到第一页
                        $(this).attr("data-default", $(this).val());
                        LoadingInfo(jumpNumber);
                    }
                    return false;
                }).keyup(function (event) {
                    if (event.keyCode == 13) {
                        if (isNaN($(this).val())) {
                            $("#showNumber").val(20);
                            jumpNumber = 1;
                            LoadingInfo(jumpNumber);
                        }
                        //页数没有变化的话，就不要再执行查询
                        if (parseInt($(this).val()) != $(this).attr("data-default")) {
// 				jumpNumber = 1;//设置每页显示的页数，并且设置到第一页
                            $(this).attr("data-default", $(this).val());
                            //总数据数量
                            var total_count = parseInt($(".total-data").attr("data-total-count"));
                            //计算用户输入的页数是否超过当前页数
                            var curr_count = Math.ceil(total_count / parseInt($(this).val()));
                            if (curr_count != 0 && curr_count < jumpNumber) {
                                jumpNumber = curr_count;//输入的页数超过了，没有那么多
                            }
                            LoadingInfo(jumpNumber);
                        }
                    }
                    return false;
                });
            });

            //跳转页面
            function JumpForPage(obj) {
                jumpNumber = $(obj).text();
                LoadingInfo($(obj).text());
                $(".currentPage").removeClass("currentPage");
                $(obj).addClass("currentPage");
                if (jumpNumber == 1) {
                    changeClass("prev");
                } else if (jumpNumber < parseInt($("#page_count").val())) {
                    changeClass();
                } else if (jumpNumber == parseInt($("#page_count").val())) {
                    changeClass("next");
                }
            }

        </script>
        <!-- 公共的操作提示弹出框 common-success：成功，common-warning：警告，common-error：错误，-->
        <div class="common-tip-message js-common-tip">
            <div class="inner"></div>
        </div>
    </div>
</div>

	<!--修改密码弹出框-->
	<!--修改密码弹出框 -->
<div id="edit-password" class="modal hide" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		<h3 id="myModalLabel">修改密码</h3>
	</div>
	<div class="modal-body">
		<form class="form-horizontal">
			<div class="control-group">
				<label class="control-label" for="inputPassword"><span class="color-red">*</span>原密码</label>
				<div class="controls">
					<input type="password" id="pwd0" placeholder="请输入原密码" />
					<span class="help-block"></span>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="inputPassword"><span class="color-red">*</span>新密码</label>
				<div class="controls">
					<input type="password" id="pwd1" placeholder="请输入新密码" />
					<span class="help-block"></span>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="inputPassword"><span class="color-red">*</span>再次输入密码</label>
				<div class="controls">
					<input type="password" id="pwd2" placeholder="请输入确认密码" />
					<span class="help-block"></span>
				</div>
			</div>
			<div style="text-align: center; height: 20px;" id="show"></div>
		</form>
	</div>
	<div class="modal-footer">
		<button class="btn btn-info" onclick="submitPassword()"  style="display:inline-block;">保存</button>
		<button class="btn" data-dismiss="modal" aria-hidden="true">关闭</button>
	</div>
</div>

<!--修改密码弹框结束  -->

	<!--导入底部文件-->
		<div class="footer">
			<div id="faq" style="background: #eee; padding-top: 10px;">
				<div class="faq-wrapper"></div>
			</div>
			<div id="footer" class="wrapper">
				<p>
				</p>
				<p style="color:#333333; display: none;" id="bottom_copyright">Copyright © 2015-2025 六星开源商城&nbsp;版权所有 保留一切权利<br><a
					 href="http://www.sixstaredu.com" target="_blank" style="text-decoration: none;color:#333333;">湖南六星教育网络科技有限公司&nbsp;</a>
					<span>提供技术支持&nbsp;0731-8557-3019</span>
				</p>
			</div>
		</div>

	<!--导入dialog插件-->
	<link rel="stylesheet" type="text/css" href="/tpshop/public/static/css/jquery-ui-private.css">
<script>
var platform_shopname= '六星开源商城';
</script>
<script type="text/javascript" src="/tpshop/public/static/js/jquery-ui-private.js" charset="utf-8"></script>
<script type="text/javascript" src="/tpshop/public/static/js/jquery.timers.js"></script>
<div id="dialog"></div>
<script type="text/javascript">
function showMessage(type, message,url,time){
	if(url == undefined){
		url = '';
	}
	if(time == undefined){
		time = 2;
	}
	//成功之后的跳转
	if(type == 'success'){
		$( "#dialog" ).dialog({
			buttons: {
				"确定,#51A351": function() {
					$(this).dialog('close');
				}
			},
			contentText:message,
			time:time,
			timeHref: url,
		});
	}
	//失败之后的跳转
	if(type == 'error'){
		$( "#dialog" ).dialog({
			buttons: {
				"确定,#e57373": function() {
					$(this).dialog('close');
				}
			},
			time:time,
			contentText:message,
			timeHref: url,
		});
	}
}

function showConfirm(content){
	$( "#dialog" ).dialog({
		buttons: {
			"确定": function() {
				$(this).dialog('close');
				return 1;
			},
			"取消,#e57373": function() {
				$(this).dialog('close');
				return 0;
			}
		},
		contentText:content,
	});
}
</script>
<script src="/tpshop/public/static/js/ns_common_base.js"></script>
<script>
$(function(){
	
	$('.index-sitemap > a').bind("click", function() {
		$(".sitemap-menu-arrow").slideDown("slow");
		$(".sitemap-menu").slideDown("slow");
	});
	$('.add-quickmenu > a').bind("click", function() {
		$(".sitemap-menu-arrow").slideDown("slow");
		$(".sitemap-menu").slideDown("slow");
	});
	$('#closeSitemap').bind("click", function() {
		$(".sitemap-menu-arrow").slideUp("fast");
		$(".sitemap-menu").slideUp("fast");
	});
});
function add_nav_class(doc) {
	$(doc).addClass("hover");
}

function remove_nav_class(doc) {
	$(doc).removeClass("hover");
}

$(function () {
    /*$(".arrow_nav").click(function () {
        $(this).addClass('current_nav').siblings().removeClass('current_nav');
        $(this).append("<dd class=\"arrow\"></dd>").siblings().remove('.arrow');
    })*/
});
// 显示导航管理
function nav_open() {
	var one = new Array();
	var two = new Array();
	var three = new Array();
	$(".ncsc-head-layout .sitemap-menu dl").each(function(c, e) {
		if (c < 5) {
			one.push($(e).height());
		} else if (c > 4 && c < 10) {
			two.push($(e).height());
		} else if (c > 9 && c < 15) {
			three.push($(e).height());
		}
	})
	$(".ncsc-head-layout .sitemap-menu dl").each(function(c, e) {
		if (c < 5) {
			var one_max_height = Math.max.apply(Math, one);
			$(e).height(one_max_height);
		} else if (c > 4 && c < 10) {
			var two_max_height = Math.max.apply(Math, two);
			$(e).height(two_max_height);
		} else if (c > 9 && c < 15) {
			var three_max_height = Math.max.apply(Math, three);
			$(e).height(three_max_height);
		}
	})
	$(".sitemap-menu-arrow").show();
	$(".sitemap-menu").show();
}
// 隐藏导航管理
function nav_close() {
	$(".sitemap-menu-arrow").hide();
	$(".sitemap-menu").hide();
}
// 系统注销菜单的控制
var closetimer = 0;
function exitSystemOver() {
	cancelColseMenu();
	$("#exit_System").css("display", "block");
};

function exitSystemOut() {
	closetimer = window.setTimeout(mclose, 600);
};

function cancelColseMenu() {
	window.clearTimeout(closetimer);
	closetimer = null;
};

function mclose() {
	$("#exit_System").css("display", "none");
}
</script>


	<!--底部单独js-->
	
<script type="text/javascript">
	//查询
	function searchData(){
		LoadingInfo(1);
	}
	
	/**
	 * 隐藏商品分组
	 */
	function hideEditGroup(){
		$("#editGroup").popover("hide");
	}
	
	function hideSetRecommend(){
		$("#setRecommend").popover("hide");
	}
	
	//查询用户列表
	function LoadingInfo(page_index) {
		var start_date = $("#startDate").val();
		var end_date = $("#endDate").val();
		var state = $("#state").val();
		var goods_name =$("#goods_name").val();
		var category_id_1 = $("#category_id_1").val();
		var category_id_2 = $("#category_id_2").val();
		var category_id_3 = $("#category_id_3").val();
		$.ajax({
			type : "post",
			url : "<?php echo url('/goods/goodsList'); ?>",
			data : {
				"page_index" : page_index,
				"page_size" : $("#showNumber").val(),
				"start_date":start_date,
				"end_date":end_date,
				"state":state,
				"goods_name":goods_name,
				"category_id_1" : category_id_1,
				"category_id_2" : category_id_2,
				"category_id_3" : category_id_3
			},
			success : function(data) {
				//alert(JSON.stringify(data));
				var html = '';
				if (data["data"].length > 0) {
					for (var i = 0; i < data["data"].length; i++) {
						html +=
                            '<tr class="tr-title" style=" width: 1502px;"><td class="td-'+ data["data"][i]["id"]+'">' +
                            '<label>' +
                            '<input value="' + data["data"][i]["id"] + '" tj="" name="sub" data-state="'+data["data"][i]["state"]+'" type="checkbox">' +
                            '</label></td>';
						html +=
                            '<td colspan="7" style="width: 97%;">' +
                            '<div style="display: inline-block; width: 100%;" class="pro-code">' +
                            '<span>商家编码'+'：' + data["data"][i]["code"] + '</span>';
						/* if(data["data"][i]["state"] == 1){
							html += '<span class="pro-code" style="color: #f35252; float: right;"> <i class="fa fa-long-arrow-up" style="margin-right: 4px;"></i>已上架';
						}else{
							html += '<span class="pro-code" style="color: #27A9E3; float: right;"> <i class="fa fa-long-arrow-up" style="margin-right: 4px;"></i>已下架';
						} */
						html +=
                            '<span class="pro-code" style="margin-left:10px;">创建时间：'+data["data"][i]["create_time"];
						
						html +=
                            '<span  class="div-flag-style" style="display: inline-block;margin:0 20px 0 40px;position:relative"> ' +
                            '<i class="icon-qrcode"style="background: none; color: #555; font-size: 20px; margin-right: 0;"></i>';
						html +=
                            '<div class="QRcode" style="display: none; position: absolute;width:110px;top:28px;left:15px"id="qrcode">' + '<p>' +
                            '<img src="/tpshop/public/'+ data["data"][i]["QRcode"]+'" style="width:110px;">' +
                            '</p>' + '</div>' + '</span>';
						html +=
                            '</span></div></td></tr>';
						html += '<tr>' +
                            '<td colspan="2" style="background: white;">' +
                            '<div>' +
                            '<a class="a-pro-view-img" href="+ADMINMAIN+/admin/goods/goodsinfo?goodsid='+data["data"][i]["id"]+'" target="_blank">' +
                            '<img class="thumbnail-img"src="/tpshop/public'+data["data"][i]["pic_addr"]+'">';
						html +=
                            '<div class="div-pro-view-name"><span style="color: #13A5D5;" class="thumbnail-name title='+ data["data"][i]["goods_name"]+'">' +
                            '<a target="_blank" style="word-break:break-all;" href="http://tp.23673.com/goods/goodsinfo?goodsid='+data["data"][i]["id"]+'">'
							+ data["data"][i]["goods_name"]
							+ '</a></span><br/>';
						//html += '<div class="div-flag-style"><span class="" title=""><i class="icon-tablet"style="background: none; color: #555; font-size: 20px; margin-right: 0;"></i></span><span onmouseover="mouseover(this)" onmouseout="mouseout(this)"style="display: inline-block;"> <i class="icon-qrcode"style="background: none; color: #555; font-size: 20px; margin-right: 0;"></i></span>';
						//html += '<div class="QRcode" style="display: none; position: absolute;"id="qrcode"><p><img src=""></p></div></div>';
						// html += '<div class="introduction_box">'+data["data"][i]["introduction"]+'</div><br>';
						// html += '<span class="recommendBox">';
						// html += data["data"][i]["is_hot"] == 1 ? '<i class="hot">热</i>' : '';
						// html += data["data"][i]["is_recommend"] == 1 ? '<i class="recommend">荐</i>' : '';
						// html += data["data"][i]["is_new"] == 1 ? '<i class="new">新</i>' : '';
						// html += '</span></div>';
					//	html += '<div style="margin-top:10px;">';
					//	html += data["data"][i]["is_hot"] == 1 ? '<i class="hot">热</i>' : '';
					//	html += data["data"][i]["is_recommend"] == 1 ? '<i class="recommend">荐</i>' : '';
					//	html += data["data"][i]["is_new"] == 1 ? '<i class="new">新</i>' : '';
					//	html += '<span  class="div-flag-style" style="display: inline-block;"> <i class="icon-qrcode"style="background: none; color: #555; font-size: 20px; margin-right: 0;"></i></span>';
					//	html += '<div class="QRcode" style="display: none; position: absolute;"id="qrcode"><p><img src="/static/picture/4c8cd98331444ab991bcbef3735b7e2d.gif'+ data["data"][i]["QRcode"]+'" style="width:110px;"></p></div>';
					//    html += '</div>';
					    html += '</div></td>';
						html += '<td style="background: white;">' +
                            '<div class="priceaddactive">' +
                            '<span class="price-lable">原&nbsp;&nbsp;&nbsp;价：</span>' +
                            '<span class="price-numble" style="color: #666;"id="moreChangePrice'+ data["data"][i]["id"]+'"  >'
							+ data["data"][i]["price"]
							+ '</span></div>';
						html += '<div>' +
                            '<span class="price-lable" >销售价：</span>' +
                            '<span class="price-numble"id="moreChangePrice'+ data["data"][i]["id"]+'" style="color:red;">'
							+ data["data"][i]["promotion_price"]
							+ '</span>';
						html += '</td>';
						html +=
                            '<td style="background: white;">' +
                            '<div class="cell">' +
                            '<span class="pro-stock" style="color: #666;"id="moreChangeStock'+ data["data"][i]["id"] + '">'
							+ data["data"][i]["stock"]
							+ '</span></div></td>';
						html +=
                            '<td style="background: white;">' +
                            '<div class="cell">' +
                            '<span class="pro-stock" style="color: #666;"id="moreChangeStock'+ data["data"][i]["id"]+'">'
							+ data["data"][i]["real_sales"]
							+ '</span></div></td>';
						if(data["data"][i]["state"] == 1){
							html +=
                                '<td style="background: white;">' +
                                '<a href="javascript:void(0)" onclick="modifyGoodsOnline('+data["data"][i]["id"]+',\'offline\')">已上架</a></td>';
						}else{
							html += '<td style="background: white;"><a href="javascript:void(0)" onclick="modifyGoodsOnline('+data["data"][i]["id"]+',\'online\')" style="color:#999;">已下架</a></td>';
						}
						html +=
                            '<td style="background: white;"><div class="cell"><input class="input-mini" goods_id="'
							+ data["data"][i]["id"]
							+ '" style="width:30px;text-align:center;" value="'
							+ data["data"][i]["sort"]
							+ '" onchange="changeSort(this)"' 
							+ 'type="number"></div></td>';
						html +=
                            '<td style="background: white;"><div ><div class="bs-docs-example tooltip-demo"style="text-align: center;">';
						html +=
                            '<a href="javascript:;" data-placement="bottom" data-original-title="编辑">' +
                            '<span class="edit" style="display: inline-block; width: 19%;" onclick="updateGoodsDetail('
							+ data["data"][i]["id"]
							+ ')"><i class="icon-edit" style="width: initial;"></i>编辑</span></a>';
						html +=
                            '<a href="javascript:;" data-placement="bottom" data-original-title="复制">' +
                            '<span class="edit" style="display: inline-block; width: 19%;" onclick="copyGoodsDetail(' + data["data"][i]["id"] + ')">' +
                            '<i class="icon-edit" style="width: initial;"></i>复制</span></a>';
						// html += '<a href="javascript:;" data-placement="bottom" ><span class="edit" style="display: inline-block; " onclick="updateGoodsQrcode('
						// 		+ data["data"][i]["goods_id"]
						// 		+ ')"><i class="icon-edit" style="width: initial;"></i>更新二维码</span></a>';
						html +=
                            '<a href="javascript:void(0)" data-placement="bottom"onclick="deleteGoods(' + data["data"][i]["id"] + ')" data-original-title="删除">' +
                            '<span class="del" style="display: inline-block; width: 19%;"><i class="icon-trash" style="width: initial;"></i>删除</span></a></div></div></td></tr>';
					}
				} else {
					html += '<tr align="center"><th colspan="8" style="text-align: center;font-weight: normal;color: #999;">暂无符合条件的数据记录</th></tr>';
				}
				$("#productTbody").html(html);
				initPageData(data["page_count"],data['data'].length,data['total_count']);
				$("#pageNumber").html(pagenumShow(jumpNumber,$("#page_count").val(),5));
				code();
			}
		});
	}
	//二维码.
 	function code(){
		$(".div-flag-style").mouseover(function(){
			$(this).children('.QRcode').show();
		});
		$(".div-flag-style").mouseout(function(){
			$(this).children('.QRcode').hide();
		});
	} 
	
	
	//把值传过去即可
	function updateGoodsDetail(goods_id) {
		window.location = "<?php echo url('goods/addGoods'); ?>?step=2&goodsId="+ goods_id;
	}

	//全选
	function CheckAll(event){
		var checked = event.checked;
		$("#productTbody input[type = 'checkbox']").prop("checked",checked);
	}

	//商品上架id合计
	function goodsIdCount(line){
		var goods_ids= "";
		$("#productTbody input[type='checkbox']:checked").each(function() {
			if (!isNaN($(this).val())) {
				var state = $(this).data("state");
//				if(line == "online"){
//					if(state == 1){
//						$( "#dialog" ).dialog({
//							buttons: {
//								"确定": function() {
//									$(this).dialog('close');
//								}
//							},
//							contentText:"记录中包含已上架记录",
//							title:"消息提醒",
//						});
//						return false;
//					}
//				}else{
//					if(state == 0){
//						$( "#dialog" ).dialog({
//							buttons: {
//								"确定": function() {
//									$(this).dialog('close');
//								}
//							},
//							contentText:"记录中包含已下架记录",
//							title:"消息提醒",
//						});
//					return false;
//					}
//				}
				goods_ids = $(this).val() + "," + goods_ids;
			}
		});
		goods_ids = goods_ids.substring(0, goods_ids.length - 1);
		if(goods_ids == ""){
			$( "#dialog" ).dialog({
				buttons: {
					"确定": function() {
						$(this).dialog('close');
					}
				},
				contentText:"请选择需要操作的记录",
				title:"消息提醒",
			});
			return false;
		}
		modifyGoodsOnline(goods_ids,line);
	}
	
	//商品上下架
	function modifyGoodsOnline(goods_ids,line){
		if(line == "online"){
			var url = "modifygoodsonline";
			var lingStr = "上架";
		}else{
			var url = "modifygoodsoffline";
			var lingStr = "下架";
		}
		$.ajax({
			type : "post",
			url : "http://tp.23673.com/admin/Goods/"+url,
			data : {
				"goods_ids" : goods_ids
			},
			success : function(data) {
				if(data["code"] > 0 ){
					LoadingInfo(getCurrentIndex(goods_ids,'#productTbody','tr[class="tr-title"]'));
					$("#dialog" ).dialog({
						buttons: {
							"确定": function() {
								$(this).dialog('close');
							}
						},
						contentText:"商品"+lingStr+"成功",
						title:"消息提醒",
						time:3
					});
				}
			}
		})
	}
	

	function batchDelete() {
		var goods_ids= new Array();
		$("#productTbody input[type='checkbox']:checked").each(function() {
			if (!isNaN($(this).val())) {
				goods_ids.push($(this).val());
			}
		});
		if(goods_ids.length ==0){
			$( "#dialog" ).dialog({
				buttons: {
					"确定,#e57373": function() {
						$(this).dialog('close');
					}
				},
				contentText:"请选择需要操作的记录",
				title:"消息提醒",
			});
			return false;
		}
		deleteGoods(goods_ids);
	}
	function deleteGoods(goods_ids){
		$( "#dialog" ).dialog({
			buttons: {
				"确定": function() {
					$.ajax({
						type : "post",
						url : "http://tp.23673.com/admin/goods/deletegoods",
						data : {
							"goods_ids" : goods_ids.toString()
						},
						dataType : "json",
						success : function(data) {
							if(data["code"] > 0 ){
								LoadingInfo(getCurrentIndex(goods_ids,'#productTbody','tr[class="tr-title"]'));
								
								$("#dialog").dialog({
									buttons: {
										"确定": function() {
											$(this).dialog('close');
										}
									},
									modal: true,
									contentText:data["message"],
									title:"消息提醒",
									time:1
								});
								$("#chek_all").prop("checked", false);
							}
						}
					});
					$(this).dialog('close');
				},
				"取消,#e57373": function() {
					$(this).dialog('close');
				},
			},
			contentText:"确定要删除吗？",
		});
	}
	
	//商品修改分组id合计
	function goodsGroupIdCount(){
		var goods_ids= "";
		$("#productTbody input[type='checkbox']:checked").each(function() {
			if (!isNaN($(this).val())) {
				goods_ids = $(this).val() + "," + goods_ids;
			}
		});
		goods_ids = goods_ids.substring(0, goods_ids.length - 1);
		if(goods_ids == ""){
			$( "#dialog" ).dialog({
				buttons: {
					"确定": function() {
						$(this).dialog('close');
					}
				},
				contentText:"请选择需要操作的记录",
				title:"消息提醒",
			});
			return false;
		}
		$("#goods_type_ids").val(goods_ids);
		$("#editGroup").popover("show");
		$(".popover").css("max-width",'1000px');
	}
	
	//商品修改分组
	function goodsGroupUpdate(){
		var goods_type = "";
		var goods_ids = $("#goods_type_ids").val();
		$("#goodsChecked input[type='checkbox']:checked").each(function(){
			if (!isNaN($(this).val())) {
				goods_type = $(this).val() + "," + goods_type;
			}
		})
		if(goods_type == ""){
			$( "#dialog" ).dialog({
				buttons: {
					"确定": function() {
						$(this).dialog('close');
					}
				},
				contentText:"请选择需要操作的记录",
				title:"消息提醒",
			});
			return false;
		}
		goods_type = goods_type.substring(0, goods_type.length - 1);
		$.ajax({
			type : "post",
			url : "http://tp.23673.com/admin/goods/modifygoodsgroup",
			data : {
				"goods_id" : goods_ids,
				"goods_type" : goods_type
			},
			success : function(data) {
				if(data["code"] > 0 ){
					$("#editGroup").popover("hide");
					LoadingInfo(getCurrentIndex(goods_ids,'#productTbody','tr[class="tr-title"]'));
					$( "#dialog" ).dialog({
						buttons: {
							"确定": function() {
								$(this).dialog('close');
							}
						},
						contentText:data["message"],
						title:"消息提醒",
					});
				}
			}
		})
	}
	
	//显示 推荐选项
	function ShowRecommend(){
		var goods_ids= "";
		$("#productTbody input[type='checkbox']:checked").each(function() {
			if (!isNaN($(this).val())) {
				goods_ids = $(this).val() + "," + goods_ids;
			}
		});
		goods_ids = goods_ids.substring(0, goods_ids.length - 1);
		if(goods_ids == ""){
			$( "#dialog" ).dialog({
				buttons: {
					"确定": function() {
						$(this).dialog('close');
					}
				},
				contentText:"请选择需要操作的记录",
				title:"消息提醒",
			});
			return false;
		}
		$("#goods_type_ids").val(goods_ids);
		$("#setRecommend").popover("show");
	}

	//修改为  推荐 商品
	function setRecommend(){
		var recommend_type = '';
		var goods_ids = $("#goods_type_ids").val();
		$("#recommendType input[type='checkbox']").each(function(){
			if ($(this).attr("checked") == 'checked') {
				var recommend_type_new = 1;
			}else{
				var recommend_type_new = 0;
			}
			recommend_type = recommend_type_new + "," + recommend_type;
		})
		if(recommend_type == ""){
			$( "#dialog" ).dialog({
				buttons: {
					"确定": function() {
						$(this).dialog('close');
					}
				},
				contentText:"请选择需要操作的记录",
				title:"消息提醒",
			});
			return false;
		}
		recommend_type = recommend_type.substring(0, recommend_type.length - 1);
		$.ajax({
			type : "post",
			url : "http://tp.23673.com/admin/goods/modifygoodsrecommend",
			data : {
				"goods_id" : goods_ids,
				"recommend_type" : recommend_type
			},
			success : function(data) {
				if(data["code"] > 0 ){
					$("#setRecommend").popover("hide");
					LoadingInfo(getCurrentIndex(goods_ids,'#productTbody','tr[class="tr-title"]'));
					$( "#dialog" ).dialog({
						buttons: {
							"确定": function() {
								$(this).dialog('close');
							}
						},
						contentText:data["message"],
						title:"消息提醒",
					});
				} 
			}
		})
	}
	$("#goodsCategoryOne").click(function(){
		var isShow = $("#goodsCategoryOne").attr('is_show');
		if(isShow == "false"){
			$(".one").show();
			$(".selectGoodsCategory").css("width",'216px');
			$(".selectGoodsCategory").show();
			$("#goodsCategoryOne").attr('is_show','true');
			$(".js-mask-category").show();
		}else{
			$(".one").hide();
			$(".two").hide();
			$(".three").hide();
			$(".selectGoodsCategory").css("width",'216px');
			$(".selectGoodsCategory").hide();
			$("#goodsCategoryOne").attr('is_show','false');
		}
	})
	
	$(".js-mask-category").click(function(){
		$(".one").hide();
		$(".selectGoodsCategory").hide();
		$(".two").hide();
		$(".three").hide();
		$("#goodsCategoryOne").attr('is_show', 'false');
		$(this).hide();
	})
	$(".js-category-one").click(function(){
		parentId = $(this).attr("category_id");
		category_name = $(this).text();
		$(".one ul li").not($(this)).removeClass("selected");
		$(this).addClass("selected");
		$("#goodsCategoryOne").val($.trim(category_name)+">");
		$("#category_id_1").val(parentId);
		$("#category_id_2").val('');
		$("#category_id_3").val('');
		$.ajax({
			type : 'post',
			url : "http://tp.23673.com/admin/goods/getcategorybyparentajax",
			data : {"parentId":parentId},
			success : function(data){
				
				if(data.length>0){
					html = '';
					for (var i = 0; i < data.length; i++) {
						html += '<li class="js-category-two" category_id="'+data[i]['category_id']+'">'+data[i]['category_name'];
						if(data[i]['is_parent'] == 1){
							html += '<i class="fa fa-angle-right fa-lg"></i>';
						}
						html += '</li>';
					}
					$("#goodsCategoryTwo").html(html);
					$(".two").show();
					$(".selectGoodsCategory").css("width",'433px');
				}else{
					$(".one").hide();
					$(".two").hide();
					$(".js-mask-category").hide();
					$(".selectGoodsCategory").hide();
					$("#goodsCategoryOne").attr('is_show', 'false');
				}
				$(".three").hide();
			}
		});
		return false;
	});
	$(".js-category-two").live("click",function(event){
		var parentId = $(this).attr("category_id");
		var category_name = $(this).text();
		$(".two ul li").not($(this)).removeClass("selected");
		$(this).addClass("selected");
		var goodsCategoryOne = $("#goodsCategoryOne").val();
		$("#goodsCategoryOne").val(goodsCategoryOne+''+category_name+'>');
		$("#category_id_2").val(parentId);
		$("#category_id_3").val('');
		$.ajax({
			type : 'post',
			url : "http://tp.23673.com/admin/goods/getcategorybyparentajax",
			data : {"parentId":parentId},
			success : function(data){
				if(data.length>0){
					html = ''
					for (var i = 0; i < data.length; i++) {
						html += '<li onclick="goodsCategoryThree(this);" category_id="'+data[i]['category_id']+'">'+data[i]['category_name']+'<i class="fa fa-angle-right fa-lg"></i></li>';
					}
					$("#goodsCategoryThree").html(html);
					$(".three").show();
					$(".selectGoodsCategory").css("width",'632px');
				}else{
					$(".one").hide();
					$(".two").hide();
					$(".three").hide();
					$(".selectGoodsCategory").hide();
					$(".js-mask-category").hide();
					$("#goodsCategoryOne").attr('is_show', 'false');
				}
			}
		})
		event.stopPropagation();
	});
	function goodsCategoryThree(obj){
		var parentId = $(obj).attr("category_id");
		var category_name = $(obj).text();
		$(".three ul li").not($(obj)).removeClass("selected");
		$(obj).addClass("selected");
		var goodsCategoryOne = $("#goodsCategoryOne").val();
		$("#goodsCategoryOne").val(goodsCategoryOne+''+category_name);
		$("#category_id_3").val(parentId);
		$(".one").hide();
		$(".two").hide();
		$(".three").hide();
		$(".selectGoodsCategory").hide();
		$(".js-mask-category").hide();
		$(".selectGoodsCategory").css("width",'216px');
		$("#goodsCategoryOne").attr('is_show','false');
	}
	$("#confirmSelect").click(function(){
		$(".one").hide();
		$(".two").hide();
		$(".three").hide();
		$(".selectGoodsCategory").hide();
		$(".selectGoodsCategory").css("width",'216px');
	})
	
	function copyGoodsDetail(goods_id){
		$( "#dialog" ).dialog({
			buttons: {
				"确定": function() {
					$.ajax({
						type : "post",
						url : "http://tp.23673.com/admin/goods/copygoods",
						data : {"goods_id":goods_id},
						dataType : "json",
						success : function(data) {
							if(data["code"] > 0 ){
								LoadingInfo(getCurrentIndex(goods_id,'#productTbody','tr[class="tr-title"]'));
								
								$("#dialog").dialog({
									buttons: {
										"确定": function() {
											$(this).dialog('close');
										}
									},
									modal: true,
									contentText:data["message"],
									title:"消息提醒",
									time:1
								});
								$("#chek_all").prop("checked", false);
							}
						}
					});
					$(this).dialog('close');
				},
				"取消,#e57373": function() {
					$(this).dialog('close');
				},
			},
			contentText:"确定要复制一条新的商品信息吗？",
		});
	}
	
	function changeSort(event){
		var sort = parseInt($(event).val());
		$(event).val(sort);
		var goods_id = $(event).attr("goods_id");
		$.ajax({
			type : "post",
			url : "http://tp.23673.com/admin/goods/updateGoodsSortAjax",
			data : {
				"sort" : sort,
				"goods_id" : goods_id
			},
			success : function(data){
				if(data.code>0){
					showTip(data.message,"success");
				}else{
					showTip(data.message,"error");
				}
			}
		})
	}
	
	/**
	更新二维码
	*/
	function batchUpdateGoodsQrcode(){
		var goods_ids= new Array();
		$("#productTbody input[type='checkbox']:checked").each(function() {
			if (!isNaN($(this).val())) {
				goods_ids.push($(this).val());
			}
		});
		if(goods_ids.length == 0){
			showMessage("error", "请至少选择一件商品");
			return false;
		}
		$.ajax({
			type : "post",
			url : "http://localhost/tpshop/public/index.php/admin/goods/updateGoodsQrCode",
			data : {
				"goods_id" : goods_ids,
			},
			success : function(data){
				if (data["code"] > 0) {
					showMessage('success', '二维码更新成功');
					LoadingInfo(1);
				}else{
					showMessage('error', data['message']);
				}	
			}
		})
	}
</script>

	
</body>
</html>