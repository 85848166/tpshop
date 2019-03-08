<?php /*a:1:{s:76:"E:\phpStudy\PHPTutorial\WWW\tpshop\application\home\view\cart\cart_list.html";i:1551601381;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta name="renderer" content="webkit"/>
    <meta http-equiv="X-UA-COMPATIBLE" content="IE=edge,chrome=1"/>
    <meta charset="UTF-8">
    <meta name="renderer" content="webkit">
    <title>六星开源商城&nbsp;-&nbsp;六星教育</title>
    <meta name="keywords" content="六星教育"/>
    <meta name="description" content="六星教育"/>
    <link rel="shortcut  icon" type="image/x-icon" href="/tpshop/public__JS__/favicon.ico" media="screen"/>
    <!--可共用-->
    <link type="text/css" rel="stylesheet" href="/tpshop/public/static/css/ns_common.css">
    <link type="text/css" rel="stylesheet" href="/tpshop/public/static/css/ns_color_style.css">
    <link type="text/css" rel="stylesheet" href="/tpshop/public/static/css/iconfont.css">
    <link type="text/css" rel="stylesheet" href="/tpshop/public/static/css/ns_bottom.css">
    <link rel="stylesheet" href="/tpshop/public/static/css/layer.css" id="layuicss-skinlayercss">
    <script type="text/javascript" src="/tpshop/public/static/js/jquery.js"></script>
    <script type="text/javascript">
        var shop_main = 'http://www.ttshop.com';//外置JS调用
        var app_main = 'http://www.ttshop.com/wap';//外置JS调用
        var upload = "";//外置JS调用
        var ADMINMAIN = 'http://www.ttshop.com/admin';
        var TEMP_IMG = "/tpshop/public__JS__";
        var temp = "/template/";//外置JS调用
        $(function () {
            //一级菜单选中
            $('#nav li>a').removeClass('current');
            var path_info = 'goods/cart';
            if (path_info == '') {
                $("#nav li>a[href^='http://www.ttshop.com/index/index']").addClass('current');
            } else {
                $("#nav li>a[href^='http://www.ttshop.com/goods/cart']").addClass('current');
            }
        })

        window.onload = function () {
            $.footer();
        }
    </script>
    <script type="text/javascript" src="/tpshop/public/static/js/ns_cart.js"></script>
    <script type="text/javascript" src="/tpshop/public/static/js/common.js"></script>
    <script type="text/javascript" src="/tpshop/public/static/js/ns_components.js"></script>
    <script type="text/javascript" src="/tpshop/public/static/js/jquery.fly.min.js"></script>
    <script type="text/javascript" src="/tpshop/public/static/js/layer.js"></script>
    <script type="text/javascript" src="/tpshop/public/static/js/jquery.method.js"></script>
    <script type="text/javascript" src="/tpshop/public/static/js/nav.js"></script>
    <script type="text/javascript" src="/tpshop/public/static/js/jquery.cookie.js"></script>
    <script src="/tpshop/public/static/js/ajax_file_upload.js" type="text/javascript"></script>
    <script src="/tpshop/public/static/js/file_upload.js" type="text/javascript"></script>
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
        var PLATFORM_NAME = "";
        var ADMINIMG = "/public/admin/images";//后台图片请求路径
        var ADMINMAIN = "http://www.ttshop.com/admin";//后台请求路径
        var UPLOAD = "";//上传文件根目录
        var PAGESIZE = "";//分页显示页数
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
        var UPLOADCMS = 'UPLOAD_CMS';//存放文章图片
    </script>
    <script src="/tpshop/public/static/js/load_task.js" type="text/javascript"></script>
    <!--继承base可重写-->
    <!-- 右侧购物车 -->
    <link rel="stylesheet" type="text/css" href="/tpshop/public/static/css/flow.css">
    <script type="text/javascript" src="/tpshop/public/static/js/shopping_flow.js"></script>
</head>
<body>
<!-- 头部广告 -->
<!-- 公共的顶部（部分界面不用，例如，商家入驻） -->
<!--
创建时间：2017年2月7日 12:08:45
功能描述： 顶部，
-->
<div class="header-top">
    <div class="header-box">
        <font id="login-info" class="login-info"></font>
        <ul>
            <li><a class="menu-hd home" href="http://www.ttshop.com" target="_top"><i></i>商城首页</a></li>
            <li class="menu-item">
                <div class="menu">
                    <a class="menu-hd myinfo" href="http://www.ttshop.com/member/index" target="_blank"><i></i> 个人中心
                        <b></b></a>
                    <div id="menu-2" class="menu-bd">
                        <span class="menu-bd-mask"></span>
                        <div class="menu-bd-panel">
                            <a href="http://www.ttshop.com/member/orderlist" target="_blank">已买到的宝贝</a>
                            <a href="http://www.ttshop.com/member/addresslist" target="_blank">我的地址管理</a>
                            <a href="http://www.ttshop.com/member/goodscollectionlist" target="_blank">我收藏的宝贝</a>
                        </div>
                    </div>
                </div>
            </li>
            <li class="menu-item cartbox"><a class="menu-hd cart" href="http://www.ttshop.com/goods/cart" target="_top"><i></i>&nbsp;购物车</a>
            </li>
            <li><a class="menu-hd" target="_blank" href="http://www.ttshop.com/admin">卖家中心</a></li>
            <li class="menu-item">
                <div class="menu">
                    <a class="menu-hd we-chat"
                       href="javascript:;" target="_top"> <i></i>
                        关注商城 <b></b>
                    </a>
                    <div id="menu-5" class="menu-bd we-chat-qrcode">
                        <span class="menu-bd-mask"></span>
                        <a target="_top"><img src="/tpshop/public/static/picture/1500630330.jpg" alt="官方微信"></a>
                        <p class="font-14">关注官方微信</p>
                    </div>
                </div>
            </li>
            <li class="menu-item"><a href="http://www.ttshop.com/wap/" class="menu-hd wap-nav"> <i></i>手机端</a></li>
            <li class="menu-item"><a href="http://www.ttshop.com/helpcenter/index" class="menu-hd site-nav"
                                     target="_blank">帮助中心</a></li>
        </ul>
    </div>
</div>
<!-- 获取登陆信息和退出登陆 -->
<script type="text/javascript">
    $.ajax({
        type: "post",
        url: "<?php echo url('/home/getlogininfo'); ?>",
        success: function (data) {
            var login_info_html = '';
            if (data != null && data != "") {
// 			if(data["user_info"]["nick_name"]!= null && data["user_info"]["nick_name"] != ""){
                login_info_html = '<a class="sn-login color" href="<?php echo url('/home/logOut'); ?>" target="_top">' + data["user_info"]["nick_name"] + '</a>' +
                    '<em>欢迎您回来！</em>' +
                    '<a class="sn-register" href="javascript:logout();" target="_top">退出</a>';
                $('div.login-info').html('<font id="login-info" class="login-info NS-USER-ALREADY-LOGIN"><em>' +
                    '<a href="#" target="_blank" class="color NS-USER-NAME"></a></em>' +
                    '<a href="javascript:logout();" data-method="post" class="logout bg-color">退出</a></font>');
// 			}
            } else {
                login_info_html = '<em>欢迎来到六星开源商城</em>' +
                    '<a class="login color" href="<?php echo url('/home/login'); ?>" target="_top">请登录</a>' +
                    '<a class="register" href="<?php echo url('/home/register'); ?>" target="_top">免费注册</a>';
                $('div.login-info').html('<font id="login-info" class="login-info">' +
                    '<a class="login color" href="http://tp.23673.com/login/index" target="_top">登录</a>' +
                    '<a class="register bg-color" href="<?php echo url('/home/register'); ?>" target="_top">免费注册</a></font>');
            }
            $('#login-info').html(login_info_html);
        }
    });

    //退出登录
    function logout() {
        $.ajax({
            url: "<?php echo url('/home/logOut'); ?>",
            type: "post",
            success: function (res) {
                if (res['code'] > 0) {
                    //window.location.href="<?php echo url('/home/login'); ?>";
                    $.msg("退出成功！");
                    window.location.reload();//刷新页面
                } else {
                    if (res["message"] != null) {
                        $.msg(res["message"]);
                    }
                }
            }
        })
    }
</script>
<!-- 头部，菜单栏、搜索、导航栏 -->
<!--
创建人：Pack老师
创建时间：2017年2月7日 12:09:42
功能描述：顶部logo、搜索
-->
<!-- 搜索相关 -->
<script type="text/javascript">

    //显示搜索历史
    function SearRecord() {
        var arrSear = new Array();
        var strSear = $.cookie("searchRecord");
        var sear_html = '<span>最近搜索</span>';
        if (typeof(strSear) != 'undefined' && strSear != 'null') {
            var arrSear = JSON.parse(strSear);
            sear_html += '<a href="javascript:clearSearRecord();" class="clear-history"> <i></i>清空</a><br/>';
            for (var i = 0; i < arrSear.length; i++) {
                sear_html += '<a href="http://www.ttshop.com/goods/goodslist?keyword=' + arrSear[i] + '" style="display:inline-block;">' + arrSear[i] + '</a>';
            }
        }
        $('#search_titles').html(sear_html);
    }

    //清除搜索历史
    function clearSearRecord() {
        clear = JSON.stringify(new Array());
        $.cookie("searchRecord", clear);
        SearRecord();
    }

    $(function () {
        SearRecord();
    });
</script>
<div class="as-shelter"></div>
<div class="follow-box">
    <div class="follow-box-con">
        <a href="http://www.ttshop.com" class="logo"><img src="/tpshop/public/static/picture/1497923663.jpg"/></a>
        <div class="search NS-SEARCH-BOX-TOP">
            <form class="search-form NS-SEARCH-BOX-FORM" method="get" onsubmit="return false">
                <div class="search-info">
                    <div class="search-type-box">
                        <ul class="search-type" style="height: 36px; overflow: hidden;">
                            <li class="search-li-top curr" num="0">宝贝</li>
                        </ul>
                    </div>
                    <div class="search-box">
                        <div class="search-box-con">
                            <input type="text"
                                   class="search-box-input NS-SEARCH-BOX-KEYWORD" name="keyword" tabindex="9"
                                   autocomplete="off" data-searchwords="1231231231" placeholder="1231231231" value="">
                        </div>
                    </div>
                    <input type="hidden" id="searchtypeTop" name="type" value="0" class="searchtype">
                    <input type="button" id="btn_search_box_submit_top" value="搜索"
                           class="button NS-SEARCH-BOX-SUBMIT-TOP">
                </div>
            </form>
        </div>
        <div class="login-info"></div>
    </div>
</div>
<div class="header">
    <div class="w1210">
        <div class="logo-info">
            <a href="http://www.ttshop.com" class="logo"> <img src="/tpshop/public/static/picture/1497923663.jpg"/></a>
        </div>
        <div class="search NS-SEARCH-BOX">
            <form class="search-form NS-SEARCH-BOX-FORM" method="get" onsubmit="return false">
                <div class="search-info">
                    <div class="search-type-box">
                        <ul class="search-type">
                            <li class="search-li curr" num="0">宝贝</li>
                        </ul>
                    </div>
                    <div class="search-box">
                        <div class="search-box-con">
                            <input type="text" class="keyword search-box-input NS-SEARCH-BOX-KEYWORD" name="keyword"
                                   tabindex="9" autocomplete="off" data-searchwords="1231231231"
                                   placeholder="1231231231" value=""/>
                        </div>
                    </div>
                    <input type="button" id="btn_search_box_submit" value="搜索"
                           class="button btn_search_box_submit NS-SEARCH-BOX-SUBMIT">
                </div>
                <!-- -热门搜索热搜词显示 -->
                <div class="search-results hide NS-SEARCH-BOX-HELPER" style="display: none;">
                    <ul class="history-results">
                        <li class="title" id="search_titles" style="word-wrap:break-word "></li>
                    </ul>
                    <ul class="rec-results">
                        <li class="title"><span>正在热搜中</span> <i class="close"></i></li>
                        <li><a href="http://www.ttshop.com/goods/goodslist?keyword=衣服，鞋子" title="衣服，鞋子">衣服，鞋子</a></li>
                    </ul>
                </div>
            </form>
            <ul class="hot-query">
                <!-- 默认搜索词 -->
                <li class="first"><a href="javascript:void(0);"></a></li>
            </ul>
        </div>
        <!-- 搜索框右侧小广告 _start -->
        <div class="header-right">
            <a href="<?php echo url('/cart/orderList'); ?>" class="my-cart"><span class="ico"></span>购物车结算<span
                    class="right_border"></span></a>
            <a href="http://www.ttshop.com/member" class="my-mall"><span class="ico"></span>我的商城<span
                    class="right_border"></span></a>
        </div>
        <!-- 搜索框右侧小广告 _end -->
    </div>
</div>
<!-- logo栏小广告  -->
<!-- logo栏小广告
	Page老师
	2017年2月10日10:28:30
 -->
<!-- 搜索右侧小广告 -->
<script type="text/javascript">
    //logo右侧小广告
    var ap_id = 1052;
    var data = platformAdvLoad(ap_id);
    if (data != '') {
        $('.logo-info').append('<a href="' + data[0]['adv_url'] + '" class="logo-right"> <img src=' + data[0]['adv_image'] + '"/"> </a>');
    }
</script>
<!-- 搜索框提示 -->
<script type="text/javascript">
    $(document).ready(function () {
        // 搜索框提示显示
        $('.NS-SEARCH-BOX .NS-SEARCH-BOX-KEYWORD').focus(function () {
            $(".NS-SEARCH-BOX .NS-SEARCH-BOX-HELPER").show();
        });
        // 搜索框提示隐藏
        $(".NS-SEARCH-BOX-HELPER .close").on('click', function () {
            $(".NS-SEARCH-BOX .NS-SEARCH-BOX-HELPER").hide();
        });
        // 清除记录
        $(".NS-SEARCH-BOX-HELPER .clear").click(function () {
            var url = '/search/clear-record.html';
            $.post(
                url,
                {},
                function (result) {
                    if (result.code == 0) {
                        $(".history-results .active").empty();
                    } else {
                    }
                },
                'json');
        });
    });

    function search_box_remove(key) {
        var url = '/search/delete-record.html';
        $.post(url, {
            data: key
        }, function (result) {
            if (result.code == 0) {
                $("#" + key).css("display", "none");
            } else {

            }
        }, 'json');
    }

    $(document).on("click", function (e) {
        var target = $(e.target);
        if (target.closest(".NS-SEARCH-BOX").length == 0) {
            $('.NS-SEARCH-BOX-HELPER').hide();
        }
    })
</script>
<!-- 搜索框 -->
<script type="text/javascript">
    //固定搜索
    $(document).ready(function () {
        $(".NS-SEARCH-BOX .NS-SEARCH-BOX-SUBMIT").click(function () {
            var keyword_obj = $(this).parents(".NS-SEARCH-BOX").find(".NS-SEARCH-BOX-KEYWORD");
            var keywords = keyword_obj.val();
            if ($.trim(keywords).length == 0
                || $.trim(keywords) == "请输入关键词") {
                keywords = keyword_obj.attr("data-searchwords");
            }

            $(keyword_obj).val(keywords);
            if (keywords == null) {
                keywords = "";
            }

            if ($.cookie("searchRecord") != undefined) {
                var arr = eval($.cookie("searchRecord"));
            } else {
                var arr = new Array();
            }
            if (arr.length > 0) {
                if ($.inArray(keywords, arr) < 0) {
                    arr.push(keywords);
                }
            } else {
                arr.push(keywords);
            }
            $.cookie("searchRecord", JSON.stringify(arr));

            if ($(".search-li.curr").attr('num') == 0) {
                window.location.href = 'http://www.ttshop.com/goods/goodslist?keyword=' + keywords;
            } else {
                window.location.href = 'http://www.ttshop.com/shop/shopstreet?shopname=' + keywords;
            }
        });
    });
    //浮动搜索
    $(document).ready(function () {
        $(".NS-SEARCH-BOX-TOP .NS-SEARCH-BOX-SUBMIT-TOP").click(function () {
            var keyword_obj = $(this).parents(".NS-SEARCH-BOX-TOP").find(".NS-SEARCH-BOX-KEYWORD");
            var keywords = $(keyword_obj).val();
            if ($.trim(keywords).length == 0
                || $.trim(keywords) == "请输入关键词") {
                keywords = $(keyword_obj).attr("data-searchwords");
            }

            if ($.cookie("searchRecord") != undefined) {
                var arr = eval($.cookie("searchRecord"));
            } else {
                var arr = new Array();
            }
            if (arr.length > 0) {
                if ($.inArray(keywords, arr) < 0) {
                    arr.push(keywords);
                }
            } else {
                arr.push(keywords);
            }
            $.cookie("searchRecord", JSON.stringify(arr));

            $(keyword_obj).val(keywords);
            if ($(".search-li-top.curr").attr('num') == 0) {
                window.location.href = 'http://www.ttshop.com/goods/goodslist?keyword=' + keywords;
            } else {
                window.location.href = 'http://www.ttshop.com/shop/shopstreet?shopname=' + keywords;
            }
        });
    });
</script>
<!--头部商品分类 start-->
<!--
创建人：Page老师
创建时间：2017年2月7日 12:22:28
功能描述：导航栏、菜单栏 、商品分类（与首页的样式不同，没有轮播图）
-->
<div class="category-box category-box-border">
    <div class="w1210">
        <div class="home-category fl">
            <a href="http://www.ttshop.com/goods/category" class="menu-event" title="查看全部商品分类"><i></i>全部商品分类</a>
            <div class="expand-menu category-layer" style="display: none;">
                <!-- 公共的菜单栏-->
                <div class="category-layer">
                    <span class="category-layer-bg"></span>

                    <div class="list">
                        <dl class="cat">
                            <dt class="cat-name">
                                <a href="http://www.ttshop.com/goods/goodslist?category_id=311" target="_blank"
                                   title=""></a>
                            </dt>
                            <i class="right-arrow"></i>
                        </dl>
                        <div class="categorys" style="display: none;">
                            <div class="item-left fl">
                                <div class="subitems">

                                    <dl class="fore1">
                                        <dt style="width: 5em;">
                                            <a href="http://www.ttshop.com/goods/goodslist?category_id=313"
                                               target="_blank" title="">
                                                <em></em>
                                                <i></i>
                                            </a>
                                        </dt>

                                    </dl>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- 公共的菜单栏-->
        <div class="all-category fl" id="nav">
            <ul>

                <li class="fl">
                    <a class="nav" target="_blank" href="http://www.ttshop.com/index/index" title=""></a>
                </li>

            </ul>
            <div class="wrap-line">
                <span style="left: 15px;"></span>
            </div>
        </div>
    </div>
</div>

<!--头部商品分类 end-->
<!-- 右侧固定购物车 -->

<script type="text/javascript" src="/tpshop/public/static/js/shopping_cart.js"></script>
<script src="/tpshop/public/static/js/ns_collections.js" type="text/javascript"></script>
<!-- common.js 刷新了购物车数据 -->
<script>
    //当浏览器窗口大小改变时，设置显示内容的高度
    window.onresize = function () {
        $(".sidebar-cartbox").find('.cart-panel-content').height($(window).height() - 90);
        $(".sidebar-cartbox").find('.bonus-panel-content').height($(window).height() - 40);
    }
    $(function () {
        $(".quick-links").css("top", ($(window).height()) / 2);
        $.ajax({
            type: "post",
            url: "http://www.ttshop.com/components/getlogininfo",
            success: function (data) {
                if (data != null && data != "") {
                    var img = data["user_info"]["user_headimg"];
                    var name = data["user_info"]["nick_name"];
                    $("#not_logged").css("display", "none");
                    $("#right_login_info").css("display", "block");
                    $("#right_login_info_name").text(name);
                    if (img == '' || img == null) {
                        $("#login_member_logo").attr('src', "/tpshop/public__JS__/temp_default_user_portrait_0.png");
                    } else {
                        img = '/' + img;
                        $("#login_member_logo").attr('src', img);
                    }
                } else {
                    $("#not_logged").css("display", "block");
                    $("#right_login_info").css("display", "none");
                }
            }
        })
        $('.ajax-login').click(function () {
            $('#mask-layer-login').show();
            $('#layui-layer').show();
        })
        $('.layui-layer-close.layui-layer-close1').click(function () {
            $('#mask-layer-login').hide();
            $('#layui-layer').hide();
        })
        refreshShopCart();
    });
</script>
<input type="hidden" id="hidden_uid" value="293"/>
<div class="right-sidebar-con">
    <div class="right-sidebar-main">
        <div class="right-sidebar-panel">
            <div id="quick-links" class="quick-links">
                <ul>
                    <li class="quick-area quick-login sidebar-user-trigger">
                        <a href="javascript:void(0);" class="quick-links-a" title="个人中心"><i class="user"></i></a>
                        <div class="sidebar-user quick-sidebar">
                            <i class="arrow-right"></i>
                            <div class="sidebar-user-info">
                                <!-- 没有登录的情况 _start -->
                                <div class="NS-USER-NOT-LOGIN">
                                    <a href="http://www.ttshop.com/member/index">
                                        <div class="user-pic">
                                            <div class="user-pic-mask"></div>
                                            <img id="login_member_logo" src="/tpshop/public__JS__/temp_default_user_portrait_0.png"/>
                                        </div>
                                    </a>
                                    <br>
                                    <p id="not_logged">你好！请<a href="javascript:void(0);"
                                                              class="quick-login-a color ajax-login">登录</a> | <a
                                            href="http://www.ttshop.com/login/registerbox" class="color">注册</a></p>
                                    <p id="right_login_info">你好！<span id="right_login_info_name"></span></p>
                                </div>
                                <!-- 没有登录的情况 _end -->
                                <!-- 有登录的情况 _start -->
                                <div class="js-user-already-login" style="display: none;">
                                    <div class="user-have-login">
                                        <div class="user-pic">
                                            <div class="user-pic-mask"></div>
                                            <img src="" class="NS-USER-PIC">
                                        </div>
                                        <div class="user-info">
                                            <p>
                                                用&nbsp;&nbsp;&nbsp;户： <span class="NS-USER-NAME"></span>
                                            </p>
                                        </div>
                                    </div>
                                    <p class="m-t-10">
										<span class="prev-login"> 上次登录时间：
											<span class="NS-USER-LAST-LOGIN"></span>
										</span>
                                        <a href="http://www.ttshop.com/member/index" class="btn account-btn"
                                           target="_blank">个人中心</a>
                                        <a href="http://www.ttshop.com/member/orderlist" class="btn order-btn"
                                           target="_blank">订单中心</a>
                                    </p>
                                </div>
                                <!-- 有登录的情况 _end -->
                            </div>
                        </div>
                    </li>
                    <li class="sidebar-tabs" data-ns-flag="shopping_cart">
                        <!-- 购物车 -->
                        <div class="cart-list quick-links-a sidebar-cartbox-trigger" title="购物车">
                            <i class="cart"></i>
                            <span class="cart_num js-cart-count">0</span>
                        </div>
                    </li>
                    <li id="collectGoods" class="sidebar-tabs" data-ns-flag="collections_goods" title="商品收藏">
                        <a href="javascript:;" class="mpbtn_collect quick-links-a">
                            <i class="collection"></i>
                        </a>
                    </li>
                    <li id="collectShops" class="sidebar-tabs" data-ns-flag="collections_shops" title="店铺收藏">
                        <a href="javascript:;" class="mpbtn_collect quick-links-a">
                            <i class="shopcollection"></i>
                        </a>
                    </li>
                    <li class="quick-area">
                        <a class="quick-links-a" href="http://wpa.qq.com/msgrd?v=3&uin=10202706&site=qq&menu=yes"
                           title="联系客服" target="_blank">
                            <i class="customer-service"></i>
                        </a>
                    </li>
                    <li class="quick-area">
                        <a class="quick-links-a" href="javascript:void(0);" title="商城二维码"><i class="qr-code"></i></a>
                        <div class="sidebar-code quick-sidebar" style="display: none;">
                            <i class="arrow-right"></i>
                            <img src="/upload/common/1500630330.jpg">
                        </div>
                    </li>
                    <li class="returnTop" style="display: none;background: #0689e1;">
                        <a href="javascript:void(0);" class="return_top quick-links-a">
                            <i class="top"></i>
                        </a>
                        <div class="popup" style="left: -121px; visibility: hidden;">
                            返回顶部 <i class="arrow-right"></i>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- 内容 -->
<div class="block_jm js-cart-info">
    <div class="cart-step">
        <ul>
            <li class="cart1"><i></i>购物车</li>
            <li class="cart2"><i></i>确认订单</li>
            <li class="cart3"><i></i>付款</li>
            <li class="cart4"><i></i>支付成功</li>
        </ul>
    </div>
    <div class="flowBox_jm">
        <div class="title_jm">
            <table cellpadding="0" cellspacing="0" width="100%" border="0">
                <tbody>
                <tr>
                    <td width="8%" align="center"><input type="checkbox" autocomplete="off" id="chkAll" name="chkAll"
                                                         checked="true"
                                                         onclick="return chkAll_onclick()"
                                                         style="height:28px;vertical-align:middle;">全选
                    </td>
                    <td width="37%" align="center">产品</td>
                    <td width="15%" align="center">数量</td>
                    <td width="15%" align="center">本店价</td>
                    <td width="15%" align="center">小计</td>
                    <td width="10%" align="center">操作</td>
                </tr>
                </tbody>
            </table>
        </div>
        <form id="formCart" name="formCart" method="post" action="">
            <table align="center" cellpadding="0" cellspacing="0" style="height:auto;width:100%;">
                <tbody>
                <tr height="35">
                    <td style="text-indent:19px; background:#FAFAFA;font-weight:bold;color:#E31939">
                        六星开源商城
                    </td>
                </tr>
                </tbody>
            </table>
            <?php foreach($goodsData as $g): ?>
            <table align="center" cellpadding="0" cellspacing="0" style="height:auto;width:100%;">
                <tbody>
                <tr>
                    <td style="width:100%;border-bottom:1px dashed #eee;">
                        <table cellpadding="5" cellspacing="1" border="0" width="100%">
                            <tbody>
                            <tr>
                                <td align="center" width="5%">
                                    <input type="checkbox" checked="true" autocomplete="off" name="sel_cartgoods[]"
                                           value="<?php echo htmlentities($g['cart_id']); ?>" id="sel_cartgoods_<?php echo htmlentities($g['cart_id']); ?>"
                                           onclick="select_cart_goods(<?php echo htmlentities($g['cart_id']); ?>)" data-shop-id="0">
                                </td>
                                <td align="center" width="40%">
                                    <div class="thumb_name">
                                        <dl>
                                            <dt>
                                                <a href="http://localhost/tpshop/public/index.php/goods/goodsinfo.html?goodsId=<?php echo htmlentities($g['goods_id']); ?>"
                                                   target="_blank">
                                                    <img src="/tpshop/public<?php echo htmlentities($g['pic_addr']); ?>" border="0" title="<?php echo htmlentities($g['name']); ?>">
                                                </a>
                                            </dt>
                                            <dd>
                                                <a href="http://localhost/tpshop/public/index.php/goods/goodsinfo.html?goodsId=<?php echo htmlentities($g['goods_id']); ?>"
                                                   target="_blank" class="f6"><?php echo htmlentities($g['name']); ?></a>
                                                <br>
                                                <font class="attrname"></font>
                                            </dd>
                                        </dl>
                                    </div>
                                </td>
                                <td align="center" width="15%">
                                    <div class="jm_cartnum">
                                        <span class="jmminu" onclick="minus_num(<?php echo htmlentities($g['cart_id']); ?>);">-</span>
                                        <input type="text" id="goods_number_<?php echo htmlentities($g['cart_id']); ?>" value="<?php echo htmlentities($g['count']); ?>"
                                               data-default-num="1" class="jminputBg"
                                               onkeydown="if(event.keyCode == 13) event.returnValue = false"
                                               onblur="change_price(<?php echo htmlentities($g['cart_id']); ?>,0,<?php echo htmlentities($g['goods_id']); ?>,this,1000)"
                                               data-goods-id="<?php echo htmlentities($g['goods_id']); ?>"
                                        >
                                        <span class="jmadd" onclick="javascript:add_num(<?php echo htmlentities($g['cart_id']); ?>)"
                                              data-goods-id="<?php echo htmlentities($g['goods_id']); ?>">+</span>
                                    </div>

                                </td>
                                <td align="center" width="15%">
                                    <font class="cart_jmprice" id="goods_price_6">
                                        <?php echo htmlentities($g['goods_price']); ?> </font>
                                </td>
                                <td align="center" width="15%">
                                    <font class="cart_jmprice" id="subtotal_<?php echo htmlentities($g['cart_id']); ?>"
                                          data-total="<?php echo htmlentities($g['sum']); ?>"
                                          data-integral="0"
                                          data-price="<?php echo htmlentities($g['goods_price']); ?>"><?php echo htmlentities($g['sum']); ?>
                                    </font>
                                </td>
                                <td align="center" width="10%">
                                    <a href="javascript:deleteShoppingCartById(<?php echo htmlentities($g['cart_id']); ?>,true)" class="f6">删除</a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                </tbody>
            </table>
            <?php endforeach; ?>
            <!-- <div>
             &lt;!&ndash;<table align="center" cellpadding="0" cellspacing="0" style="height:auto;width:100%;">&ndash;&gt;
             &lt;!&ndash;<tbody>&ndash;&gt;
             &lt;!&ndash;<tr>&ndash;&gt;
             &lt;!&ndash;<td style="width:100%;border-bottom:1px dashed #eee;">&ndash;&gt;
             &lt;!&ndash;<table cellpadding="5" cellspacing="1" border="0" width="100%">&ndash;&gt;
             &lt;!&ndash;<tbody>&ndash;&gt;
             &lt;!&ndash;<tr>&ndash;&gt;
             &lt;!&ndash;<td align="center" width="5%">&ndash;&gt;
             &lt;!&ndash;<input type="checkbox" checked="checked" autocomplete="off" name="sel_cartgoods[]" value="7" id="sel_cartgoods_7" onclick="select_cart_goods()" data-shop-id="0">&ndash;&gt;
             &lt;!&ndash;</td>&ndash;&gt;
             &lt;!&ndash;<td align="center" width="40%">&ndash;&gt;
             &lt;!&ndash;<div class="thumb_name">&ndash;&gt;
             &lt;!&ndash;<dl>&ndash;&gt;
             &lt;!&ndash;<dt>&ndash;&gt;
             &lt;!&ndash;<a href="http://www.ttshop.com/goods/goodsinfo?goodsid=383" target="_blank">&ndash;&gt;
             &lt;!&ndash;<img src="/upload/goods/1500601152703.jpg" border="0" title="单鞋细高跟防水台鱼嘴女凉鞋2017春夏季新款复古刺绣高跟鞋40-42"></a>&ndash;&gt;
             &lt;!&ndash;</dt>&ndash;&gt;
             &lt;!&ndash;<dd>&ndash;&gt;
             &lt;!&ndash;<a href="http://www.ttshop.com/goods/goodsinfo?goodsid=383" target="_blank" class="f6">单鞋细高跟防水台鱼嘴女凉鞋2017春夏季新款复古刺绣高跟鞋40-42</a>&ndash;&gt;
             &lt;!&ndash;<br>&ndash;&gt;
             &lt;!&ndash;<font class="attrname"></font>&ndash;&gt;
             &lt;!&ndash;</dd>&ndash;&gt;
             &lt;!&ndash;</dl>&ndash;&gt;
             &lt;!&ndash;</div>&ndash;&gt;
             &lt;!&ndash;</td>&ndash;&gt;
             &lt;!&ndash;<td align="center" width="15%">&ndash;&gt;
             &lt;!&ndash;<div class="jm_cartnum">&ndash;&gt;
             &lt;!&ndash;<span class="jmminu" onclick="minus_num(7,0,1000);">-</span>&ndash;&gt;
             &lt;!&ndash;<input type="text" id="goods_number_7" value="1" data-default-num="1" class="jminputBg" onkeydown="if(event.keyCode == 13) event.returnValue = false" onblur="change_price(7,0,383,this,1000)" data-goods-id="383">&ndash;&gt;
             &lt;!&ndash;<span class="jmadd" onclick="javascript:add_num(7,0,383,this,1000)" data-goods-id="383">+</span>&ndash;&gt;
             &lt;!&ndash;</div>&ndash;&gt;
             &lt;!&ndash;</td>&ndash;&gt;
             &lt;!&ndash;<td align="center" width="15%">&ndash;&gt;
             &lt;!&ndash;<font class="cart_jmprice" id="goods_price_7">&ndash;&gt;
             &lt;!&ndash;￥345											</font>&ndash;&gt;
             &lt;!&ndash;</td>&ndash;&gt;
             &lt;!&ndash;<td align="center" width="15%"><font class="cart_jmprice" id="subtotal_7" data-total="345" data-integral="0"  data-price="345">￥345</font></td>&ndash;&gt;
             &lt;!&ndash;<td align="center" width="10%">&ndash;&gt;
             &lt;!&ndash;<a href="javascript:deleteShoppingCartById(7,true)" class="f6">删除</a>&ndash;&gt;
             &lt;!&ndash;</td>&ndash;&gt;
             &lt;!&ndash;</tr>&ndash;&gt;
             &lt;!&ndash;</tbody>&ndash;&gt;
             &lt;!&ndash;</table>&ndash;&gt;
             &lt;!&ndash;</td>&ndash;&gt;
             &lt;!&ndash;</tr>&ndash;&gt;
             &lt;!&ndash;</tbody>&ndash;&gt;
             &lt;!&ndash;</table>&ndash;&gt;</div>-->
            <input type="hidden" name="shop_id" id="shop_id">
            <input type="hidden" name="cart_id" id="cart_id">
        </form>
        <table width="100%" align="center" border="0" cellpadding="5" cellspacing="6"
               style="border-top:1px solid #eee;">
            <tbody>
            <tr>
                <td width="150">
                    <a href="<?php echo url('/home/index'); ?>" class="continue_buy">继续购物</a>
                </td>
                <td align="right" width="80">
                    <a href="javascript:;" class="jmclear js-clear-cart">清空购物车</a>
                </td>
                <td align="right" id="cart_money_info" data-total="<?php echo htmlentities($total); ?>"> 应付总额： <span>￥0.00</span></td>
                <td align="right" width="150">
                    <a href="javascript:selcart_submit();" class="jmcheckout js-settlement">去结算</a>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
    <div class="blank15"></div>
</div>

<!-- 底部 -->

<!--
	创建时间：2017年2月7日 12:11:41
	功能描述： 底部，联系我们、电话
-->
<div class="footer">
    <div class="dsc-service">
        <div class="w w1200 relative">
            <ul class="service-list">
                <li>
                    <div class="service-tit service-zheng">
                        <img src="/tpshop/public/static/picture/icon-zheng.png">
                    </div>
                    <div class="service-txt">正品保障</div>
                </li>
                <li>
                    <div class="service-tit service-qi">
                        <img src="/tpshop/public/static/picture/icon-qi.png"></i>
                    </div>
                    <div class="service-txt">七天包退</div>
                </li>
                <li>
                    <div class="service-tit service-hao">
                        <img src="/tpshop/public/static/picture/icon-grin.png">
                    </div>
                    <div class="service-txt">好评如潮</div>
                </li>
                <li>
                    <div class="service-tit service-shan">
                        <img src="/tpshop/public/static/picture/icon-light.png"></i>
                    </div>
                    <div class="service-txt">闪电发货</div>
                </li>
                <li class="last">
                    <div class="service-tit service-quan">
                        <img src="/tpshop/public/static/picture/icon-tronphy.png">
                    </div>
                    <div class="service-txt">权威荣誉</div>
                </li>
            </ul>
        </div>
    </div>
    <div class="dsc-help">
        <div class="w w1200">
            <div class="help-list">
                <div class="help-item">
                    <h3>新手上路</h3>
                    <ul>
                        <li><a href="http://www.ttshop.com/helpcenter/index?id=18"
                               title="售后流程" target="_blank">有问题请找我</a></li>
                        <li><a href="http://www.ttshop.com/helpcenter/index?id=8"
                               title="售后流程" target="_blank">配送支付智能查询</a></li>
                    </ul>
                </div>
                <div class="help-item">
                    <h3>配送与支付</h3>
                    <ul>
                        <li><a href="http://www.ttshop.com/helpcenter/index?id=7"
                               title="售后流程" target="_blank">货到付款区域</a></li>
                        <li><a href="http://www.ttshop.com/helpcenter/index?id=2"
                               title="售后流程" target="_blank">支付方式说明</a></li>
                    </ul>
                </div>
                <div class="help-item">
                    <h3>会员中心</h3>
                    <ul>
                        <li><a href="http://www.ttshop.com/helpcenter/index?id=3"
                               title="售后流程" target="_blank">售后流程</a></li>
                        <li><a href="http://www.ttshop.com/helpcenter/index?id=5"
                               title="售后流程" target="_blank">资金管理</a></li>
                        <li><a href="http://www.ttshop.com/helpcenter/index?id=6"
                               title="售后流程" target="_blank">我的收藏</a></li>
                        <li><a href="http://www.ttshop.com/helpcenter/index?id=14"
                               title="售后流程" target="_blank">我的订单</a></li>
                    </ul>
                </div>
                <div class="help-item">
                    <h3>服务保证</h3>
                    <ul>
                        <li><a href="http://www.ttshop.com/helpcenter/index?id=9"
                               title="售后流程" target="_blank">退换货原则</a></li>
                        <li><a href="http://www.ttshop.com/helpcenter/index?id=10"
                               title="售后流程" target="_blank">售后服务保证</a></li>
                        <li><a href="http://www.ttshop.com/helpcenter/index?id=11"
                               title="售后流程" target="_blank">产品质量保证</a></li>
                    </ul>
                </div>
                <div class="help-item">
                    <h3>联系我们</h3>
                    <ul>
                        <li><a href="http://www.ttshop.com/helpcenter/index?id=12"
                               title="售后流程" target="_blank">网站故障报告</a></li>
                        <li><a href="http://www.ttshop.com/helpcenter/index?id=15"
                               title="售后流程" target="_blank">选机咨询</a></li>
                        <li><a href="http://www.ttshop.com/helpcenter/index?id=16"
                               title="售后流程" target="_blank">投诉与建议</a></li>
                    </ul>
                </div>
            </div>
            <div class="help-cover">
                <div class="help-ctn">
                    <div class="help-ctn-mt">
                        <span>服务热线</span> <strong>0731-85573019</strong>
                    </div>
                    <div class="help-ctn-mb">

                        <a id="IM" im_type="dsc" onclick="openWin(this)"
                           href="http://wpa.qq.com/msgrd?v=3&uin=10202706&site=qq&menu=yes"
                           target="_blank" class="btn-ctn"><img
                                src="/tpshop/public/static/picture/icon-csu.png"
                                style="vertical-align: middle;">&nbsp;&nbsp;咨询客服</a>
                    </div>
                </div>
                <div class="help-scan">
                    <div class="code">
                        <img src="/tpshop/public/static/picture/1500630330.jpg">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--
	创建时间：2017年2月7日 12:13:09
	功能描述： 底部、公司信息
-->
<div class="dsc-copyright">
    <div class="w w1200">
        <p class="copyright_info">
            <a href="#">Copyright © 2015-2025 六星开源商城&nbsp;版权所有 保留一切权利</a>
        </p>
        <b> <a href="javascript:;" target="_blank" class="copyright-logo">六星</a>&nbsp;&nbsp;
            <a href="http://www.sixstaredu.com" target="_blank"
               class="copyright-logo">湖南六星教育网络科技有限公司&nbsp;&nbsp;</a> <span>提供技术支持&nbsp;0731-8557-3019</span>
        </b>
    </div>
</div>
<script type="text/javascript" src="/tpshop/public/static/js/user.js"></script>
<script type="text/javascript" src="/tpshop/public/static/js/order_pickpoint.js"></script>
<script src="/tpshop/public/static/js/cart.js"></script>
<script>
    (function () {
        var bp = document.createElement('script');
        var curProtocol = window.location.protocol.split(':')[0];
        if (curProtocol === 'https') {
            bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';
        }
        else {
            bp.src = 'http://push.zhanzhang.baidu.com/push.js';
        }
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(bp, s);
    })();
    $.ajax({
        url: "http://localhost/tpshop/public/index.php/home/isLogin",
        type: "get",
        dataType: "json",
        success: function (data) {
            if (data.code > 0) {
                $.ajax({
                    url: "http://localhost/tpshop/public/index.php/cart/getNum",
                    type: "get",
                    dataType: "json",
                    success: function (data) {
                        $(".js-cart-count").html(data);
                    }
                });
            }
        }
    });
</script>
</body>
</html>