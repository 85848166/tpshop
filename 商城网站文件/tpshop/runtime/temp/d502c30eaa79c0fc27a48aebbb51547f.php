<?php /*a:9:{s:78:"E:\phpStudy\PHPTutorial\WWW\tpshop\application\admin\view\goods\add_goods.html";i:1547797482;s:72:"E:\phpStudy\PHPTutorial\WWW\tpshop\application\admin\view\base\body.html";i:1548251229;s:72:"E:\phpStudy\PHPTutorial\WWW\tpshop\application\admin\view\base\head.html";i:1551497289;s:93:"E:\phpStudy\PHPTutorial\WWW\tpshop\application\admin\view\goods\goods\addgoods_alone_css.html";i:1547796737;s:71:"E:\phpStudy\PHPTutorial\WWW\tpshop\application\admin\view\base\nav.html";i:1547991213;s:88:"E:\phpStudy\PHPTutorial\WWW\tpshop\application\admin\view\goods\goods\addgoods_main.html";i:1548602867;s:76:"E:\phpStudy\PHPTutorial\WWW\tpshop\application\admin\view\base\password.html";i:1547558890;s:74:"E:\phpStudy\PHPTutorial\WWW\tpshop\application\admin\view\base\footer.html";i:1547558969;s:74:"E:\phpStudy\PHPTutorial\WWW\tpshop\application\admin\view\base\dialog.html";i:1547816125;}*/ ?>
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
	
		<!-- 编辑商品时，用到的JS、CSS资源 -->
		<!-- 编辑商品，公共CSS、JS文件引用 -->
		<link rel="stylesheet" type="text/css" href="/tpshop/public/static/css/product.css">
		<!-- 选择商品图，弹出框的样式 -->
		<link rel="stylesheet" type="text/css" href="/tpshop/public/static/css/defau.css">
		<link href="/tpshop/public/static/css/jquery.ui.css" type="text/css" rel="stylesheet">
		<link href="/tpshop/public/static/css/goods_create.css" type="text/css" rel="stylesheet">
		<link href="/tpshop/public/static/css/base.css" type="text/css" rel="stylesheet">
		<link href='/tpshop/public/static/css/jquery.gridly.css' rel='stylesheet' type='text/css'>
		<link href='/tpshop/public/static/css/sample.css' rel='stylesheet' type='text/css'>
		<link href='/tpshop/public/static/css/select_category_next.css' rel='stylesheet' type='text/css'>
		<link href="/tpshop/public/static/css/editgoods.css" rel="stylesheet" type="text/css">
		<script type="text/javascript" charset="utf-8" src="/tpshop/public/static/js/ueditor.config.js"></script>
		<script type="text/javascript" charset="utf-8" src="/tpshop/public/static/js/ueditor.all.js"></script>
		<!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
		<!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
		<script type="text/javascript" charset="utf-8" src="/tpshop/public/static/js/zh-cn.js"></script>
		<script src="/tpshop/public/static/js/ajax_file_upload.js" type="text/javascript"></script>
		<script src="/tpshop/public/static/js/image_common.js" type="text/javascript"></script>
		<script src="/tpshop/public/static/js/kindeditor-min.js" type="text/javascript"></script>
		<!--  用  验证商品输入信息-->
		<script src="/tpshop/public/static/js/jscommon.js" type="text/javascript"></script>
		<!-- 用 ，加载数据-->
		<script src="/tpshop/public/static/js/art_dialog.source.js"></script>
		<script src="/tpshop/public/static/js/iframe_tools.source.js"></script>
		<!-- 我的图片 -->
		<script src="/tpshop/public/static/js/material_managedialog.js"></script>
		<script src="/tpshop/public/static/js/ajax_file_upload.js" type="text/javascript"></script>
		<script src="/tpshop/public/static/js/file_upload.js" type="text/javascript"></script>
		<script src='/tpshop/public/static/js/init_address.js'></script>
		<script src="/tpshop/public/static/js/release_good_second.js"></script>
		<script type="text/javascript" src="/tpshop/public/static/js/goods_sku_create.js"></script>
		<script type="text/javascript" src="/tpshop/public/static/js/jquery.totop.min.js"></script>
		<style>
			.category-text{
	display:inline-block;
	background-color:#FFF;
	min-width:150px;
	height:30px;
	line-height:30px;
	border:1px solid #dcdcdc;
	float:left;
}
.category-button{
	display:inline-block;
	background-color:#FFF;
	height:32px;
	line-height:32px;
	float:left;
	border:1px solid #dcdcdc;
	border-left:none;
	padding-left:10px;
	padding-right:10px;
	background-color:#eee;
	font-size:13px;
}
.select-button{
	padding-left:9px;
	padding-right:9px;
	padding-top:2px;
	padding-bottom:2px;
	font-size:12px;
	border:1px solid #dcdcdc;
	background-color:#eeeeee;
}
.extend-name-category{
	margin-bottom:10px;
}
.extend-name-category .do-style{
	display:inline-block;
	/* margin-left:5px; */
	color:#27a9e3;
	cursor:pointer;
}

/* 商品标签 */
.gruop-button{
	padding-left: 9px;
    padding-right: 9px;
    padding-top: 4px;
    padding-bottom: 4px;
    font-size: 12px;
    border: 1px solid #dcdcdc;
    background-color: #eeeeee;
	float:left;
}
.add-on{
	margin:0;
    vertical-align: middle;	
}
.goods-gruop-div{
	display:none;
	float:left;
	margin-left:10px;
}
.check-button{
	height:30px;
	padding-left: 9px;
    padding-right: 9px;
    padding-top: 2px;
    padding-bottom: 2px;
	font-size:12px;
	background-color:#eeeeee;
	border:1px solid #cccccc;
}
.goods-gruop-select{
	width:130px;
}
.span-error{
	height:30px;
	line-height:30px;
	color:red;
	display:none;
}
</style>
		<script>
			var timeoutID = null;//延迟双击编辑规格值
var img_id_arr = "";//图片标识ID
var speciFicationsFlag = 0;// 0：商品图的选择，1:商品详情的图片
var shopImageFlag = -1;//所点击的商品图片标识
var goodsFigure = null;//商品图对象
// 实例化编辑器，建议使用工厂方法getEditor创建和引用编辑器实例，如果在某个闭包下引用该编辑器，直接调用UE.getEditor('editor')就能拿到相关的实例
var ue = UE.getEditor('editor');
</script>

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
				<img src="/tpshop/public/static/picture/default_user_portrait.gif" />
			</div>
			<span class="user-name ncsc-admin-info" data-toggle="dropdown"><?php echo htmlentities($username); ?></span>
			<a class="ncsc-admin-a ncsc-admin-info" data-toggle="dropdown"><i class="ncsc-admin-i ncsc-admin-down"></i></a>
			<a class="ncsc-admin-a h40"><i class="ncsc-admin-line"></i></a>
			<a class="ncsc-admin-a" href="http://tp.23673.com" target="_blank"><i class="ncsc-admin-i ncsc-admin-home"></i></a>
			<a class="ncsc-admin-a" href="<?php echo url('/admin/logout'); ?>" title="安全退出管理中心"><i class="ncsc-admin-i ncsc-admin-off"></i></a>
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
			<!-- 左边菜单的加载 -->
			<div class="LEFT">
				<div id="accordion2" class="accordion leftmenu">
					<div class="accordion-group">
						<div class="sidebarX">
							<img src="/tpshop/public/static/picture/admin_left_logo.png" />
							<h2>商品</h2>
						</div>
						<div class="accordion-body collapse in" id="collapseOne">
							<ul class="nav nav-pills nav-stacked" id="left_menu-small">
								<li><a href="<?php echo url('/goods/goodsList'); ?>">商品列表</a></li>
								<li class="active">
									<h1></h1><a href="<?php echo url('/goods/addGoods'); ?>">商品发布</a>
								</li>
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
					<a href="<?php echo url('/goods/goodsList'); ?>">商品</a>
					<i class="icon-angle-right"></i>
					<!-- 需要加跳转链接用这个：<?php echo url('goods/addGoods'); ?> -->
					<a href="javascript:;">商品发布</a>
				</div>
				<!--顶部边框开始  -->
				<div class="tabmenu">
					<ul class="tab pngFix">
						<li class="active"><a href="<?php echo url('/goods/addGoods'); ?>">商品发布</a></li>
					</ul>
					<div class="right_side_operation">
						<ul>

							<li><a class="nscs-table-handle_green" href="javascript:;" style="display: none;">右侧按钮测试</a></li>

						</ul>
					</div>
				</div>
				<hr class="tabmenu_hr" style="border:1px solid #00C0FF;margin:0 0px 10px 20px;" />
				<div class="main">

					<div class="ncsc-form-goods">
						<h3 class="js-goods-info">商品信息</h3>
						<dl>
							<dt><i class="required">*</i>商品分类：</dt>
							<dd id="tbcNameCategory" data-flag="category" data-goods-id="0" cid="" data-attr-id="" cname="">
								<span class="category-text"></span>
								<button class="category-button">选择</button>
								<span><label for="g_name" class="error"><i class="icon-exclamation-sign"></i>商品分类不能为空</label></span>
								<span class="help-inline">请选择商品分类</span>
							</dd>
						</dl>
						<dl>
							<dt>扩展分类：</dt>
							<dd id="extend_name_category_box">
								<div class="extend-name-category-box">
								</div>
								<div class="clear">
									<button class="select-button" onclick="addExtentCategoryBox();"><i class="fa fa-plus-square"></i>&nbsp;添加</button>
								</div>

							</dd>
						</dl>
						<dl>
							<dt><i class="required">*</i>商品名称：</dt>
							<dd>
								<input class="productname" type="text" id="txtProductTitle" placeholder="请输入商品名称，不能超过60个字" />
								<span class="help-inline">请填写商品名称</span>
							</dd>
						</dl>
						<dl>
							<dt>商品促销语：</dt>
							<dd>
								<input class="productname" type="text" id="txtIntroduction" placeholder="请输入促销语，不能超过60个字符" />
								<span class="help-inline">商品促销语输入不正确</span>
							</dd>
						</dl>
						<dl>
							<dt>关键词：</dt>
							<dd>
								<input class="productname" type="text" id="txtKeyWords" placeholder="商品关键词用于SEO搜索" />
								<span class="help-inline">请输入商品促销语，不能超过40个字符</span>
							</dd>
						</dl>
						<dl>
							<dt>供货商：</dt>
							<dd>
								<select id="supplierSelect">
									<option value="0">请选择供货商</option>
								</select>
								<span class="help-inline">请选择商品类型</span>
							</dd>
						</dl>
						<dl>
							<dt>市场价：</dt>
							<dd>
								<input class="goods_price" type="number" id="txtProductMarketPrice" min="0" placeholder="0" /><em class="add-on">元</em>
								<span class="help-inline">商品市场不能为空且需是数字</span>
							</dd>
						</dl>
						<dl>
							<dt><i class="required">*</i>销售价：</dt>
							<dd>
								<input class="goods_price" type="number" id="txtProductSalePrice" min="0" placeholder="0" /><em class="add-on">元</em>
								<span class="help-inline">商品现价不能为空且需是数字</span>
							</dd>
						</dl>
						<dl>
							<dt>成本价：</dt>
							<dd>
								<input class="goods_price" type="number" id="txtProductCostPrice" min="0" placeholder="0" /><em class="add-on">元</em>
								<span class="help-inline">商品成本不能为空且需是数字</span>
							</dd>
						</dl>
						<dl>
							<dt>基础销量：</dt>
							<dd>
								<input type="number" class="span1" id="BasicSales" placeholder="0" />
								<span class="help-inline">基础销量需是数字</span>
							</dd>
						</dl>
						<dl>
							<dt>基础点击数：</dt>
							<dd>
								<input type="number" class="span1" id="BasicPraise" placeholder="0" />
								<span class="help-inline">基础点击数需是数字</span>
							</dd>
						</dl>
						<dl>
							<dt>基础分享数：</dt>
							<dd>
								<input type="number" class="span1" id="BasicShare" placeholder="0" />
								<span class="help-inline">基础分享数需是数字</span>
							</dd>
						</dl>
						<dl>
							<dt>商家编码：</dt>
							<dd>
								<input type="text" id="txtProductCodeA" placeholder="请输入商家编码" />
								<span class="help-inline">请输入商家编码，不能超过40个字符</span>
							</dd>
						</dl>
						<dl>
							<dt><i class="required">*</i>总库存：</dt>
							<dd>
								<input type="number" class="goods-stock" id="txtProductCount" min="0" value="0" />
								<span class="help-inline">请输入总库存数量，必须是大于0的整数</span>
							</dd>
						</dl>
						<dl>
							<dt><i class="required">*</i>库存预警：</dt>
							<dd>
								<input type="number" class="goods-stock" id="txtMinStockLaram" min="0" value="0" />
								<span class="help-inline">请输入库存预警数，必须是大于0的整数</span>
								<p class="hint">设置最低库存预警值。当库存低于预警值时商家中心商品列表页库存列红字提醒。<br>0为不预警。</p>
							</dd>
						</dl>

						<h3 class="js-goods-type">商品类型</h3>
						<dl>
							<dt>商品类型：</dt>
							<dd>
								<select id="goodsType">
									<option value="0">请选择商品类型</option>
									<option value="28">衣服</option>
									<option value="30">手机</option>
									<option value="32">鞋子</option>
								</select>
								<span class="help-inline">请选择商品类型</span>
							</dd>
						</dl>
						<dl>
							<dt><span class="color-red"></span></dt>
							<dd>
								<table class="goods-sku js-goods-sku"></table>
							</dd>
						</dl>
						<dl class="control-group js-spec-table" name="skuTable" style="display: none;">
							<dt><span class="color-red"></span>商品库存：</dt>
							<dd>
								<div class="controls">
									<div class="js-goods-stock control-group" style="font-size: 14px; margin-top: 10px;">
										<div id="stock-region" class="sku-group">
											<table class="table-sku-stock">
												<thead></thead>
												<tbody></tbody>
												<tfoot></tfoot>
											</table>
										</div>
									</div>
								</div>
							</dd>
						</dl>
						<dl class="control-group js-goods-attribute-block" style="display:none;">
							<dt><span class="color-red"></span>商品属性：</dt>
							<dd>
								<div class="controls">
									<table class="goods-sku-attribute js-goods-sku-attribute" style="margin:0;"></table>
								</div>
							</dd>
						</dl>

						<h3 class="js-goods-img">商品图片</h3>
						<dl>
							<dt><i class="required">*</i>商品图片：</dt>
							<dd>
								<div id="goods_picture_box" class="controls" style="background-color:#FFF;border: 1px solid #E9E9E9;">
									<div class="ncsc-goods-default-pic">
										<div class="goodspic-uplaod" style="padding: 15px;">
											<div class='img-box' style="min-height:160px;">
												<div class="upload-thumb" id="default_uploadimg">
													<img src="/tpshop/public/static/picture/default_goods_image_240.gif">
												</div>
											</div>
											<div class="clear"></div>
											<span class="img-error">最少需要一张图片作为商品主图</span>
											<p class="hint">上传商品图片，<font color="red">第一张图片将作为商品主图</font>,支持同时上传多张图片,多张图片之间可随意调整位置；支持jpg、gif、png格式上传或从图片空间中选择，建议使用尺寸800x800像素以上、大小不超过1M的正方形图片，上传后的图片将会自动保存在图片空间的默认分类中。</p>
											<div class="handle">
												<div class="ncsc-upload-btn">
													<a href="javascript:void(0);">
														<span>
															<input style="cursor:pointer;font-size:0;" type="file" id="fileupload" hidefocus="true" class="input-file"
															 name="file_upload" multiple="multiple" />
														</span>
														<p>图片上传</p>
													</a>
												</div>
												<a class="ncsc-btn mt5" id="img_box" nctype="show_image" href="javascript:void(0);">从图片空间选择</a>
											</div>
										</div>
									</div>
								</div>
								<span class="help-inline">最少需要一张图片作为商品主图</span>
							</dd>
						</dl>
						<dl>
							<dt><i class="required"></i>规格图片：</dt>
							<dd>
								<div class="sku-picture-div">
									<!-- <span class="sku-picture-span sku-picture-active">颜色</span>
				<span class="sku-picture-span">尺码</span>
				<span class="sku-picture-span">款式</span> -->
								</div>
								<div class="clear"></div>
								<div class="sku-picture-box">
									<!-- <div>
					<h4 class="sku-picture-h3">蓝色</h4>
					<div class="controls" style="background-color:#FFF;border: 1px solid #E9E9E9;">
						<div class="ncsc-goods-default-pic">
							<div class="goodspic-uplaod" style="padding: 15px;">
								<div class='sku-img-box' style="min-height:160px;">
									<div class="upload-thumb" id="sku_default_uploadimg">
										<img src="/tpshop/public/static/picture/default_goods_image_240.gif">
									</div>
								</div>
								<div class="clear"></div>
								<span class="img-error">最少需要一张图片作为商品主图</span>
								<p class="hint">上传商品图片，<font color="red">第一张图片将作为商品主图</font>,支持同时上传多张图片,多张图片之间可随意调整位置；支持jpg、gif、png格式上传或从图片空间中选择，建议使用尺寸800x800像素以上、大小不超过1M的正方形图片，上传后的图片将会自动保存在图片空间的默认分类中。</p>
								<div class="handle">
									<div class="ncsc-upload-btn">
										<a href="javascript:void(0);">
											<span>
												<input style="cursor:pointer;font-size:0;" file_type="sku" spec_id="1" spec_value_id="2"type="file"  hidefocus="true" class="input-file" name="file_upload"multiple="multiple" />
											</span>
											<p>图片上传</p>
										</a>
									</div>
									<a class="ncsc-btn mt5"  id="img_box"nctype="show_image" href="javascript:void(0);">从图片空间选择</a>
								</div>
							</div>
						</div>
					</div>
				</div>  -->
								</div>

							</dd>
						</dl>
<style>
.upload-thumb{
	display:block !important;
	float:left;
	width:147px !important;
	height:147px !important;
	position:relative;
}
.upload-thumb img{
	width:100%;
	height:100%;
}
.img-box, .sku-img-box{
	overflow:hidden;
}
.off-box, .sku-off-box{
	position:absolute;
	width:18px;
	height:18px;
	right:0;
	top:0;
	line-height: 18px;
	background-color:#FFF;
	cursor:pointer;
}

.black-bg{
	position:absolute;
	right:0;
	top:0;
	left:0;
	bottom:0;
	background-color:rgba(0,0,0,0.3);
}
.img-error{
	color:red;s
	height:25px;
	line-height:25px;
	display:none;
}
</style>
<script src="/tpshop/public/static/js/drag-arrange.js" type="text/javascript" charset="utf-8"></script>
<script src="/tpshop/public/static/js/ajax_file_upload.js" type="text/javascript"></script>
<script type="text/javascript" src="/tpshop/public/static/js/jquery.ui.widget.js" charset="utf-8"></script>
<script type="text/javascript" src="/tpshop/public/static/js/jquery.fileupload.js" charset="utf-8"></script>

<input type="hidden" id="album_id" value="30" />
<script type="text/javascript">
var dataAlbum
$(function() {
	//给图片更换位置事件
	$('.draggable-element').arrangeable();

	var album_id = $("#album_id").val();
	dataAlbum = {
		"album_id": album_id,
		"type": "1,2,3,4",
		'file_path': UPLOADGOODS
	};
	// ajax 上传图片
	var upload_num = 0; // 上传图片成功数量
	$('#fileupload').fileupload({
		url: "<?php echo url('/goods/upload'); ?>",
		dataType: 'json',
		formData: dataAlbum,
		add: function(e, data) {
			$("#goods_picture_box .img-error").hide();
			$("#goods_picture_box #default_uploadimg").remove();
			//显示上传图片框
			var html = "";
			$.each(data.files, function(index, file) {
				html += '<div class="upload-thumb draggable-element"  nstype="' + file.name + '">';
				html += '<img nstype="goods_image" src="/tpshop/public/static/picture/uoload_ing.gif">';
				html += '<input type="hidden"  class="upload_img_id" nstype="goods_image" value="">';
				html += '<div class="black-bg hide">';
				html += '<div class="off-box">&times;</div>';
				html += '</div>';
				html += '</div>';
			});
			$(html).appendTo('#goods_picture_box .img-box');
			//模块可拖动事件
			$('#goods_picture_box .draggable-element').arrangeable();
			data.submit();
		},
		done: function(e, data) {
			var param = data.result;
			$this = $('#goods_picture_box div[nstype="' + param.origin_file_name + '"]');
			if (param.state > 0) {
				$this.removeAttr("nstype");
				$this.children("img").attr("src", "/tpshop/public/" + param.file_name);
				$this.children("input[type='hidden']").val(param.file_id);
			} else {
				$this.remove();
				$("#goods_picture_box .img-error").text("请检查您上传的文件是否有误").show();
			}
		}
	})



	//图片幕布出现
	$(".draggable-element").live('mouseenter', function() {
		$(this).children(".black-bg").show();
	});
	//图片幕布消失
	$(".draggable-element").live('mouseleave', function() {
		$(this).children(".black-bg").hide();
	});

	//sku图片幕布出现
	$(".sku-draggable-element").live('mouseenter', function() {
		$(this).children(".black-bg").show();
	});
	//sku图片幕布消失
	$(".sku-draggable-element").live('mouseleave', function() {
		$(this).children(".black-bg").hide();
	});

	//删除页面图片元素
	$(".off-box").live('click', function() {
		if ($(".img-box .upload-thumb").length == 1) {
			var html = "";
			html += '<div class="upload-thumb" id="default_uploadimg">';
			html += '<img nstype="goods_image" src="/tpshop/public/static/picture/default_goods_image_240.gif">';
			html += '<input type="hidden" name="image_path" id="image_path" nstype="goods_image" value="">';
			html += '</div>';
			$(html).appendTo('.img-box');
		}
		$(this).parent().parent().remove();
	});
	$(".sku-off-box").live('click', function() {
		if ($(this).parent().parent().parent().find(".sku-img-box .upload-thumb").length == 1) {
			var html = "";
			html += '<div class="upload-thumb" id="default_uploadimg">';
			html += '<img nstype="goods_image" src="/tpshop/public/static/picture/default_goods_image_240.gif">';
			html += '<input type="hidden" name="image_path" id="image_path" nstype="goods_image" value="">';
			html += '</div>';
			$(html).appendTo('.sku-img-box');
		}
		$(this).parent().parent().remove();
	});

});

function img_upload() {

}
//sku图片上传
function file_upload(obj) {
	var spec_id = $(obj).attr("spec_id");
	var spec_value_id = $(obj).attr("spec_value_id");
	$('.sku-draggable-element' + spec_id + '-' + spec_value_id).arrangeable();
	//sku图片上传
	$(obj).fileupload({
		url: 'http://tp.23673.com/admin/upload/photoalbumupload',
		dataType: 'json',
		formData: dataAlbum,
		add: function(e, data) {

			var box_obj = $(this).parent().parent().parent().parent().parent().parent().parent().parent();
			var spec_id = box_obj.attr("spec_id");
			var spec_value_id = box_obj.attr("spec_value_id");
			box_obj.find(".img-error").hide();
			box_obj.find("#sku_default_uploadimg").remove();
			//显示上传图片框
			var html = "";
			$.each(data.files, function(index, file) {
				html += '<div class="upload-thumb sku-draggable-element' + spec_id + '-' + spec_value_id +
					' sku-draggable-element"  nstype="' + file.name + '">';
				html += '<img nstype="goods_image" src="/tpshop/public/static/picture/uoload_ing.gif">';
				html +=
					'<input type="hidden"  class="sku_upload_img_id" nstype="goods_image" spec_id="" spec_value_id="" value="">';
				html += '<div class="black-bg hide">';
				html += '<div class="sku-off-box">&times;</div>';
				html += '</div>';
				html += '</div>';
			});

			box_obj.find('.sku-img-box').append(html);
			//模块可拖动事件
			$('.sku-draggable-element' + spec_id + '-' + spec_value_id).arrangeable();
			data.submit();
		},
		done: function(e, data) {
			var box_obj = $(this).parent().parent().parent().parent().parent().parent().parent().parent();
			var spec_id = box_obj.attr("spec_id");
			var spec_value_id = box_obj.attr("spec_value_id");
			var param = data.result;
			$this = box_obj.find('div[nstype="' + param.origin_file_name + '"]');
			if (param.state > 0) {
				$this.removeAttr("nstype");
				$this.children("img").attr("src", "/" + param.file_name);
				$this.children("input[type='hidden']").val(param.file_id);
				$this.children("input[type='hidden']").attr("spec_id", spec_id);
				$this.children("input[type='hidden']").attr("spec_value_id", spec_value_id);
				//将上传的规格图片记录
				for (var i = 0; i < $sku_goods_picture.length; i++) {
					if ($sku_goods_picture[i].spec_id == spec_id && $sku_goods_picture[i].spec_value_id == spec_value_id) {
						$sku_goods_picture[i]["sku_picture_query"].push({
							"pic_id": param.file_id,
							"pic_cover_mid": param.file_name
						});
					}
				}
			} else {
				$this.remove();
				box_obj.find(".img-error").text("请检查您上传的文件是否有误").show();
			}
		}
	})
}
						</script>

						<h3 class="js-goods_detail">商品详情</h3>
						<dl>
							<dt>商品品牌：</dt>
							<dd>
								<select id="brandSelect">
									<option value="0">请选择商品品牌</option>
									<option value="10">乐视</option>
								</select>
								<span class="help-inline">请选择商品品牌</span>
							</dd>
						</dl>
						<dl>
							<dt><i class="required">*</i>商品描述：</dt>
							<dd>
								<div class="controls" id="discripContainer">
									<textarea id="tareaProductDiscrip" name="discripArea" style="height: 500px; width: 800px; display: none;"></textarea>
									<script id="editor" type="text/plain" style="width: 800px; height: 500px;"></script>
									<span class="help-inline">请填写商品描述</span>
								</div>
							</dd>
						</dl>

						<h3 class="js-goods-express-info">商品物流信息</h3>
						<dl>
							<dt>所在地：</dt>
							<dd>
								<select id="provinceSelect" onchange="getProvince(this,'#citySelect',-1)">
									<option value="0">请选择省</option>
								</select>
								<select id="citySelect">
									<option value="0">请选择市</option>
								</select>
							</dd>
						</dl>
						<dl>
							<dt><i class="required">*</i>运费：</dt>
							<dd>
								<div class="controls">
									<label class="radio inline normal"><input type="radio" name="fare" value="0" checked="checked" />免邮</label>
									<label class="radio inline normal"><input type="radio" name="fare" value="1" /> 买家承担运费</label>
									<span class="help-inline">请选择运费类型</span>
								</div>
							</dd>
						</dl>
						<dl id="valuation-method" style="display: none">
							<dt><i class="required">*</i>计价方式：</dt>
							<dd>
								<label class="radio inline normal"><input type="radio" name="shipping_fee_type" value="3" checked="checked" />计件</label>
								<label class="radio inline normal"><input type="radio" name="shipping_fee_type" value="2" />体积</label>
								<label class="radio inline normal"><input type="radio" name="shipping_fee_type" value="1" />重量</label>
							</dd>
						</dl>
						<dl id="commodity-weight" style="display: none">
							<dt><i class="required">*</i>商品重量：</dt>
							<dd>
								<input type="number" class="goods-stock" id="goods_weight" min="0" value="0" />公斤
								<span class="help-inline">商品重量必须大于0</span>
							</dd>
						</dl>
						<dl id="commodity-volume" style="display: none">
							<dt><i class="required">*</i>商品体积：</dt>
							<dd>
								<input type="number" class="goods-stock" id="goods_volume" min="0" value="0" />立方米
								<span class="help-inline">商品体积必须大于0</span>
							</dd>
						</dl>
						<dl>
							<dt><i class="required">*</i>库存显示：</dt>
							<dd>
								<div class="controls">
									<label class="radio inline normal"><input type="radio" name="stock" checked="checked" value="1" /> 是</label>
									<label class="radio inline normal"><input type="radio" name="stock" value="0" /> 否</label>
									<span class="help-inline">请选择库存是否显示</span>
								</div>
							</dd>
						</dl>

						<h3 class="js-goods-point">积分购买设置</h3>
						<dl>
							<dt><i class="required">*</i>积分设置：</dt>
							<dd>
								<div class="controls">
									<label class="radio inline normal"><input type="radio" name="integralSelect" value="0" checked="checked" />
										非积分兑换</label>
									<label class="radio inline normal"><input type="radio" name="integralSelect" value="1" />积分兑换</label>
								</div>
							</dd>
						</dl>
						<dl id="integral-exchange" style="display: none">
							<dt>积分兑换：</dt>
							<dd>
								<div class="controls">
									<input id="integration_available_use" class="input-mini" placeholder="0" min="0" type="number" onchange="integrationChange(this);" />&nbsp;积分
									<span class="help-inline">请设置积分</span>
								</div>
							</dd>
						</dl>
						<dl>
							<dt>购买可赠送：</dt>
							<dd>
								<div class="controls">
									<input id="integration_available_give" class="input-mini" placeholder="0" min="0" type="number" onchange="integrationChange(this);" />&nbsp;积分
								</div>
							</dd>
						</dl>

						<h3 class="js-goods-other">其他信息</h3>
						<div class="js-mask-category" style="position: fixed; width: 100%; height: 100%; top: 0px; left: 0px; right: 0px; bottom: 0px; z-index: 90; display: none; background: rgba(0, 0, 0, 0);"></div>
						<dl>
							<dt>商品标签：</dt>
							<dd>
								<div class="group-text-check-box">
									<div class="controls product-category-position">
										<div class="productcategory-selected" id="productcategory-selected"></div>
										<button class="gruop-button" onclick="showGoodsGroup();"><i class="fa fa-plus-square"></i>&nbsp;添加商品标签</button>
										<div class="goods-gruop-div">
											<select class="goods-gruop-select">
												<option value="107"> 女装</option>
												<option value="108">连衣裙</option>
												<option value="109">男装</option>
												<option value="110">平板</option>
												<option value="111">分组添加测试</option>
												<option value="112">手机</option>
												<option value="113">电器</option>
											</select>
											<button class="check-button" onclick="checkGoodsGroup();">确认</button>
										</div>
										<span class="span-error">暂无可选的商品标签</span>
									</div>
								</div>
							</dd>
						</dl>
						<dl>
							<dt>每人限购：</dt>
							<dd>
								<div class="controls">
									<input type="number" class="input-mini" min="0" placeholder="0" id="PurchaseSum" />
									<span class="help-inline">件</span>
								</div>
							</dd>
						</dl>
						<dl>
							<dt><i class="required">*</i>是否上架：</dt>
							<dd>
								<div class="controls">
									<label class="radio inline normal"><input type="radio" name="shelves" value="1" checked="checked" /> 立刻上架</label>
									<label class="radio inline normal"><input type="radio" name="shelves" value="0" /> 放入仓库</label>
								</div>
							</dd>
						</dl>
					</div>
					<div class="btn-submit">
						<button class="btn btn-info" id="btnSave" type="button" onClick="SubmitProductInfo(0,'http://localhost/tpshop/public/index.php','http://localhost/tpshop/public/index.php')">保存</button>
						<button class="btn btn-info" id="btnSave2" type="button" onClick="SubmitProductInfo(1,'http://localhost/tpshop/public/index.php','http://localhost/tpshop/public/index.php')">保存并预览</button>
					</div>
					<!-- 编辑商品公共代码 -->
					<!-- <nav class="sidebar-right" style="display:none;"> -->
					<!-- 	<ul> -->
					<!-- 		<li> -->
					<!-- 			<img src="/tpshop/public/static/picture/return_top.png" title="飞回顶部" /> -->
					<!-- 		</li> -->
					<!-- 	</ul> -->
					<!-- </nav> -->

					<div id="fixedNavBar">
						<h3>页面导航</h3>
						<ul>
							<li data-floor="js-goods-info"><a href="javascript:;">商品信息</a></li>
							<li data-floor="js-goods-type"><a href="javascript:;">商品类型</a></li>
							<li data-floor="js-goods-img"><a href="javascript:;">商品图片</a></li>
							<li data-floor="js-goods_detail"><a href="javascript:;">商品详情</a></li>
							<li data-floor="js-goods-express-info"><a href="javascript:;">商品物流信息</a></li>
							<li data-floor="js-goods-point"><a href="javascript:;">积分购买设置</a></li>
							<li data-floor="js-goods-other"><a href="javascript:;">其他信息</a></li>
						</ul>
					</div>
					<script type='text/javascript' src='/tpshop/public/static/js/sample.js'></script>
					<input type="hidden" id="goodsId" value="0" />
					<input type="hidden" id="shop_type" value="2" />
					<input type="hidden" id="hidQRcode" value="1" />
					<input type="hidden" id="hidden_qrcode" value="" />
					<input type="hidden" id="hidden_sort" value="0" />
					<script type="text/javascript">
						// 	$(".sidebar-right").toTop();
						//返回顶部效果
						// 	$(".sidebar-right").hover(function(){
						// 		$(this).find("img").attr("src","/public/admin/images/goods/return_top_hover.png");
						// 	},function(){
						// 		$(this).find("img").attr("src","/public/admin/images/goods/return_top.png");
						// 	});
						if (parseInt($("#goodsId").val()) > 0) {
							initProvince("#provinceSelect", function() {
								//编辑商品时，加载数据
								$("#provinceSelect").find("option[value='" + province_id + "']").attr("selected", true);
								getProvince("#provinceSelect", '#citySelect', city_id);
							});

						} else {
							initProvince("#provinceSelect");
						}

						function PopUpCallBack(id, src) {

							var idArr, srcArr;
							if (id.indexOf(",")) {
								idArr = id.split(',');
								srcArr = src.split(',');
							} else {
								idArr = new Array(id);
								srcArr = new Array(src);
							}
							//alert(JSON.stringify(srcArr));
							switch (speciFicationsFlag) {
								case 0:
									//商品主图
									if (srcArr.length >= 1) {
										$("#default_uploadimg").remove();
										html = "";
										for (var i = 0; i < srcArr.length; i++) {
											html += '<div class="upload-thumb draggable-element"  >';
											html += '<img  src="/tpshop/public/static/picture/4c8cd98331444ab991bcbef3735b7e2d.gif' + srcArr[i] + '">';
											html += '<input type="hidden"  class="upload_img_id"  value="' + idArr[i] + '">';
											html += '<div class="black-bg hide">';
											html += '<div class="off-box">&times;</div>';
											html += '</div>';
											html += '</div>';
										}
										$(html).appendTo('.img-box');
									}
									//模块可拖动事件
									$('.draggable-element').arrangeable();
									/* $(goodsFigure).children("a").show(); */
									break;
								case 1:
									//商品详情
									for (var i = 0; i < srcArr.length; i++) {
										var description = "<img src='/tpshop/public/static/picture/4c8cd98331444ab991bcbef3735b7e2d.gif" + srcArr[i] + "' />";
										ue.setContent(description, true);
									}
									break;
							}
						}

						function setGoodsFigure(goodsFigure) {
							this.goodsFigure = goodsFigure;
						}

						//设置商品详情的图片
						function setUeditorImg() {
							speciFicationsFlag = 1;
							OpenPricureDialog("PopPicure", ADMINMAIN, 5);
						}

						/**
						 *图片上传
						 */
						function imgUpload(event) {
							var fileid = $(event).attr("id");
							var str = $(event).next().attr("id");
							var curr = $(event).parent();
							var parent = curr.prev().prev();
							var data = {
								'file_path': UPLOADGOODSSKU,
								'goods_path': $("#goodsId").val()
							};
							uploadFile(fileid, data, function(res) {
								if (res.code > 0) {
									var imgpath = "#img" + str;
									var imgval = "#" + str;
									$(imgpath).attr("src", "/" + res.data);
									$(imgval).val(res.data);
									// 				if(isResourcesExist("/"+res.data)){
									curr.popover("hide");
									// 				}
									var spec = {
										flag: parent.hasClass("selected"),
										spec_id: parent.attr("data-spec-id"),
										spec_name: parent.attr("data-spec-name"),
										spec_value_id: parent.attr("data-spec-value-id"),
										spec_value_data: $("#" + str).val()
									};
									editSpecValueData(spec); //修改图片对应的修改SKU数据
									showTip(res.message, "success");
								} else {
									showTip(res.message, "warning");
								}
							});
						}

						/*
						 * 判断资源文件是否存在
						 * 2017年6月15日 19:03:12 Pack老师
						 */
						function isResourcesExist(resources_url) {
							var exist = false;
							if (resources_url != "") {
								$.ajax(resources_url, {
									type: 'get',
									timeout: 100,
									async: false,
									success: function() {
										exist = true;
									},
									error: function() {
										exist = false;
									}
								});
							}
							return exist;
						}
						/**
						 *扩展分类个数
						 */
						var extent_sort = 0;
						$(function() {
							if (parseInt("") > 0) {
								extent_sort = parseInt("");
							}
						})
					</script>

				</div>
				<script src="/tpshop/public/static/js/page.js"></script>
				<div class="page" id="turn-ul" style="display: none;">
					<div class="pagination pagination-right">
						<ul>
							<li class="total-data">共0有条数据</li>
							<li class="according-number">每页显示<input type="text" class="input-medium" id="showNumber" value="20" data-default="20" />条</li>
							<li><a id="beginPage" class="page-disable" style="border: 1px solid #dddddd;">首页</a></li>
							<li><a id="prevPage" class="page-disable">上一页</a></li>
							<li id="pageNumber"></li>
							<li><a id="nextPage">下一页</a></li>
							<li><a id="lastPage">末页</a></li>
							<li class="page-count">共0页</li>
						</ul>
					</div>
				</div>
				<input type="hidden" id="page_count" />
				<input type="hidden" id="page_size" />
				<script>
					$(function() {
	try{
		$("#turn-ul").show();//显示分页
		LoadingInfo(1);//通过此方法调用分页类
	}catch(e){
		$("#turn-ul").hide();
	}

	//首页
	$("#beginPage").click(function() {
		if(jumpNumber!=1){
			jumpNumber = 1;
			LoadingInfo(1);
			changeClass("begin");
		}
		return false;
	});

	//上一页
	$("#prevPage").click(function() {
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
	$("#nextPage").click(function() {
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
	$("#lastPage").click(function() {
		jumpNumber = $("#page_count").val();
		if(jumpNumber>1){
			LoadingInfo(jumpNumber);
			$("#pageNumber a:eq("+ (parseInt($("#page_count").val()) - 1) + ")").text($("#page_count").val());
			changeClass("next");
		}
		return false;
	});

	//每页显示页数
	$("#showNumber").blur(function(){
		if(isNaN($(this).val())){
			$("#showNumber").val(20);
			jumpNumber = 1;
			LoadingInfo(jumpNumber);
			return;
		}
		//页数没有变化的话，就不要再执行查询
		if(parseInt($(this).val()) != $(this).attr("data-default")){
// 			jumpNumber = 1;//设置每页显示的页数，并且设置到第一页
			$(this).attr("data-default",$(this).val());
			LoadingInfo(jumpNumber);
		}
		return false;
	}).keyup(function(event){
		if(event.keyCode == 13){
			if(isNaN($(this).val())){
				$("#showNumber").val(20);
				jumpNumber = 1;
				LoadingInfo(jumpNumber);
			}
			//页数没有变化的话，就不要再执行查询
			if(parseInt($(this).val()) != $(this).attr("data-default")){
// 				jumpNumber = 1;//设置每页显示的页数，并且设置到第一页
				$(this).attr("data-default",$(this).val());
				//总数据数量
				var total_count = parseInt($(".total-data").attr("data-total-count"));
				//计算用户输入的页数是否超过当前页数
				var curr_count = Math.ceil(total_count/parseInt($(this).val()));
				if( curr_count !=0 && curr_count < jumpNumber){
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
	
	
</body>
</html>