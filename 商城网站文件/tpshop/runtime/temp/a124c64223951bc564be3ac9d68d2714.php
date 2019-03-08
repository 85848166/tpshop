<?php /*a:1:{s:73:"E:\phpStudy\PHPTutorial\WWW\tpshop\application\home\view\login\login.html";i:1552039235;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta name="renderer" content="webkit" />
    <meta http-equiv="X-UA-COMPATIBLE" content="IE=edge,chrome=1"/>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="renderer" content="六星开源商城" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="keywords" content="六星教育" />
    <meta name="description" content="六星教育"/>
    <meta name="author" content="六星开源商城" />
    <title>六星开源商城-六星教育</title>
    <link rel="shortcut icon" type="image/x-icon" href="/tpshop/public__JS__/favicon.ico" media="screen"/>
    <link href="/tpshop/public/static/css/member_login.css" rel="stylesheet" type="text/css"/>
    <link type="text/css" rel="stylesheet" href="/tpshop/public/static/css/ns_default.css" />
    <script src="/tpshop/public/static/js/jquery-1.8.1.min.js"></script>
    <script src="/tpshop/public/static/js/bootstrap.js"></script>
    <link type="text/css" rel="stylesheet" href="/tpshop/public/static/css/login.css"/>
    <script type="text/javascript">
        var shop_main='http://www.ttshop.com';//外置JS调用
    </script>
    <style>
        .user_head_bg {
            border-bottom: 0;
        }
    </style>
</head>
<body>
<div class="header_min" id="header"></div>
<div class="user_head_bg">
    <div class="user_head">
        <div class="logobox" style="padding-top:20px;"><a href="http://www.ttshop.com"><img src="/tpshop/public/static/picture/1497923663.jpg" border="0" style="width:200px;"></a></div>
        <div class="reg">
			<span style="float:right;">
				<span>没有账号？</span>
				<a href="<?php echo url('/home/register'); ?>" style="color:white; text-decoration: none;line-height: 40px;">
					<span style="display:inline-block;color:#0689e1;line-height:43px;">立即注册</span>
				</a>
			</span>
        </div>
        <div class="clear"></div>
    </div>
</div>
<div class="ban_box">
    <div class="banner" >
        <ul class="full-screen-slides" id="fullScreenSlides">
            <li><img src="/tpshop/public/static/picture/20190215163134.png" alt="" style="width: 100%;height: 100%;"></li>
        </ul>
    </div>
    <div class="maind">
        <div class="login js-login">
            <!--用户名密码登录 -->
            <div class="mob j_mob_show" style="background:#fff;">
                <!-- 				 -->
                <!-- 				<div class="righttab J_hoverbut J_mob" title="微信扫码登录"></div> -->
                <!-- 				 -->
                <div class="tit">
                    <span class="switch_txt active">六星开源商城用户登录</span>
                    <div id="forAccountLogin" class="switch_account link_blue" data-index="0"><a href="javascript:;">切换为账号登录</a></div>
                </div>
                <div class="type_box active">
                    <div class="err J_errbox" id="hint" style="display:none;"></div>
                    <div class="inputbox J_focus">
                        <div class="imgbg"></div>
                        <input type="text" class="input_login" name="txtName" id="txtName" placeholder="手机号/会员名/邮箱" />
                    </div>
                    <div class="inputbox J_focus">
                        <div class="imgbg pwd"></div>
                        <input type="password" class="input_login pwd J_loginword" name="txtPWD" id="txtPWD" placeholder="请输入密码" />
                    </div>
                    <div class="txtbox link_gray6">
                        <!-- <div class="td1"><label><input  class="J_expire" name="expire" checked="checked" type="checkbox" value="1">7天内自动登录</label></div> -->
                        <div class="td2" style="float: right;text-align: left;"><a href="http://www.ttshop.com/login/findpasswd">忘记密码?</a></div>
                    </div>
                    <div class="btnbox"><input class="btn_login J_hoverbut" type="button" id="btnLogin" onclick="btnlogin();" value="登录"></div>

                    <div class="qqbox">
                        <div class="qtit">
                            <span class="qtit_left" style="">使用合作账号登录</span>
                            <div class="clear"></div>
                        </div>
                        <div class="appsparent" style="display: inline-block; float: right;margin-top: -55px;margin-right: 18px;">
                            <div class="apps">
                                <a class="ali qq" href="http://www.ttshop.com/wap/login/oauthlogin?type=QQLOGIN" title="腾讯QQ账号登录"></a><a class="ali taobao" href="http://www.ttshop.com/wap/login/oauthlogin?type=WCHAT"  title="微信授权登录"></a>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
            <!--二维码的登录 -->
            <div class="qr_code J_qr_code_show">
                <div class="righttab J_hoverbut J_qr_code" title="账号密码登录"></div>
                <div class="tit">微信扫码，安全登录</div>
                <div id="J_weixinQrCode" class="code"><img width="140" height="140" src="/admin/images/icon-code.png"></div>
                <div class="txt" style="margin-left:60px;">打开 手机微信 扫一扫登录</div>
            </div>
        </div>
    </div>
</div>
<input type="hidden" id="J_loginType" value="0" />
<input type="hidden" id="verify_userlogin" value="0" />
<input type="button" id="origin_btnCheck" style="display:none;"/>
<input type="button" id="btnCheck" style="display:none;"/>
<input type="hidden" id="J_sendVerifyType" value="0"/>
<div id="popup-captcha">
    <div class="gt_input">
        <input class="geetest_challenge" type="hidden" name="geetest_challenge"/>
        <input class="geetest_validate" type="hidden" name="geetest_validate"/>
        <input class="geetest_seccode" type="hidden" name="geetest_seccode"/>
    </div>
</div>
<div class="footer_min" id="footer">
    <div class="links link_gray6">
        <a target="_blank" href="http://www.ttshop.com/index/index">网站首页</a>|
        <a target="_blank" href="http://www.ttshop.com/helpcenter/index?id=2">常见问题</a>|
        <a target="_blank" href="http://www.ttshop.com/helpcenter/index?id=1">购物流程</a>|
        <a target="_blank" href="http://www.ttshop.com/helpcenter/index?id=9">退款说明</a>|
        <a target="_blank" href="http://www.5law.cn/">法律申明</a>|
        <a target="_blank" href="http://www.ttshop.com/helpcenter/index?id=10">退款流程</a>|
        <a target="_blank" href="http://www.ttshop.com/helpcenter/index?id=12">商家入驻</a>|
        <a target="_blank" href="http://www.ttshop.com/helpcenter/index?id=11">退款政策</a>
    </div>
    <div class="txt">
        <p>
            <span>Copyright © 2015-2025 六星开源商城&nbsp;版权所有 保留一切权利</span>
            <br/>
            <a href="http://www.sixstaredu.com" target="_blank">湖南六星教育网络科技有限公司&nbsp;提供技术支持</a>
            <span>0731-8557-3019</span>
        </p>
    </div>
</div>
<!--[if lt IE 9]>
<script type="text/javascript" src="/Application/Home/View/default/js/PIE.js"></script>
<![endif]-->
<div class="disappear_tooltip pie_about" style="left: 634.5px; top: 286.5px;">
    <div class="icon"></div>
    <div class="content"></div>
</div>
<script type="text/javascript" src="/tpshop/public/static/js/ns_components.js"></script>
<script type="text/javascript" src="/tpshop/public/static/js/ns_index.js"></script>
<script type="text/javascript">
    var global = {
        h:$(window).height(),
        st: $(window).scrollTop(),
        backTop:function(){
            global.st > (global.h*0.5) ? $("#backtop").show() : $("#backtop").hide();
        }
    }
    $('#backtop').on('click',function(){
        $("html,body").animate({"scrollTop":0},500);
    });

    global.backTop();

    $(window).scroll(function(){
        global.h = $(window).height();
        global.st = $(window).scrollTop();
        global.backTop();
    });

    $(window).resize(function(){
        global.h = $(window).height();
        global.st = $(window).scrollTop();
        global.backTop();
    })

    $(function() {
        $.pie = function(name, v){
            // 如果没有加载 PIE 则直接终止
            if (! PIE) return false;
            // 是否 jQuery 对象或者选择器名称
            var obj = typeof name == 'object' ? name : $(name);
            // 指定运行插件的 IE 浏览器版本
            var version = 9;
            // 未指定则默认使用 ie10 以下全兼容模式
            if (typeof v != 'number' && v < 9) {
                version = v;
            }
            // 可对指定的多个 jQuery 对象进行样式兼容
            if ($.browser.msie && obj.size() > 0) {
                if ($.browser.version*1 <= version*1) {
                    obj.each(function(){
                        PIE.attach(this);
                    });
                }
            }
        }
        if ($.browser.msie) {
            $.pie('.pie_about');
        };
        var url = window.location.host;
        if (url.indexOf('autoscript') != -1) {
            $("#hm_img").remove();
        }
        // 显示隐藏 请输入密码、请输入帐号
        innitEvent();
        var Sys = {};
        var ua = navigator.userAgent.toLowerCase();
        var s;
        (s = ua.match(/(msie |trident\/)([\d.]+)/)) ? Sys.ie = s[1] : (s = ua.match(/firefox\/([\d.]+)/)) ? Sys.firefox = s[1] : (s = ua.match(/chrome\/([\d.]+)/)) ? Sys.chrome = s[1] : (s = ua.match(/opera.([\d.]+)/)) ? Sys.opera = s[1] : (s = ua.match(/version\/([\d.]+).*safari/)) ? Sys.safari = s[1] : 0;
        if (Sys.chrome) {
            //$("#chromealert").hide();
            $("#chromealert").css("display", "none");
        } else {
            //$("#chromealert").show();
            $("#chromealert").css("display", "block");
        }
        if (Sys.ie) {
            $("#explorer").text("Internet Explorer");
        } else if (Sys.firefox) {
            $("#explorer").text("Firefox");
        } else if (Sys.opera) {
            $("#explorer").text("Opera");
        } else if (Sys.safari) {
            $("#explorer").text("Safari");
        } else {
            $("#explorer").text("其他");
        }
    });

    // 显示隐藏 请输入密码、请输入帐号 
    function innitEvent() {
        $("#btnLogin").removeAttr("disabled");
        var $hidpwd = $("#hidpwd");
        var $pwd = $("#txtPWD");
        var $txtName = $("#txtName");
        var $hidpwd = $("#hidpwd");
        $txtName.focusin(function() {
            $("#namedel").css("display", "block");
            $("#pwddel").css("display", "none");
        })
        $hidpwd.focusin(function() {
            $("#namedel").css("display", "none");
            $("#pwddel").css("display", "block");
        })
        $pwd.focusin(function() {
            $("#pwddel").css("display", "block");
            $("#namedel").css("display", "none");
        })
        $("#namedel").click(function() {
            $(this).siblings("input").val("");
        });
        $("#pwddel").click(function() {
            $(this).siblings("input").val("");
        });
        $("#hidpwd").focus(function() {
            $("#hidpwd").css("display", "none");
            $("#txtPWD").css("display", "block");
            $("#txtPWD").focus();
        })
    };

    // enter 键登录
    document.onkeypress = function() {
        var iKeyCode = -1;
        if (arguments[0]) {
            iKeyCode = arguments[0].which;
        } else {
            iKeyCode = event.keyCode;
        }
        if (iKeyCode == 13) {
            $("#btnLogin").click();// 登录
        }
    }

    // 登陆 登录时 登录按钮"变暗"
    function btnlogin() {
        ClearCookie(); //登录时清除之前的cookie
        if($("#txtName").val() == "请输入账号" || $("#txtName").val() == "") {
            $("#hint").css("display", "block");
            $("#hint").text("请输入账号");
            $("#txtName").focus();
            return false;
        }else if ($("#txtPWD").val() == "") {
            $("#hint").css("display", "block");
            $("#hint").text("请输入密码");
            $("#hidpwd").focus();
            return false;
        }
        if("0" == 1){
            if($("#vertification").val() == undefined || $("#vertification").val()==""){
                $("#hint").css("display", "block");
                $("#hint").text("请输入验证码");
                $("#vertification").focus();
                return false;
            }
        }
        var userName = $('#txtName').val();
        var password = $('#txtPWD').val();
        var verification = $('#vertification').val();
        // 后台验证
        $.post("<?php echo url('/home/login'); ?>", {
            "username" : userName,
            "password" : password,
            "verification" : verification
        }, function(data) {
            if (data['code'] == 1) {
                window.location.href = data['url'];
            }else if(data['code'] == 2){
                window.location.href ="<?php echo url('/home/index'); ?>";
            }else {
                $("#hint").css("display", "block");
                $("#hint").text(data['message']); //  用户名密码提示
                $("#verify_img").attr("src",'/captcha.html');
            }
        });
    };

    function ClearCookie() {
        var expires = new Date();
        expires.setTime(expires.getTime() - 1000);
        document.cookie = "appCode='';path=/;expires=" + expires.toGMTString() + "";
        document.cookie = "roleID='';path=/;expires=" + expires.toGMTString() + "";
        document.cookie = "parentMenuID='';path=/;expires=" + expires.toGMTString() + "";
        document.cookie = "currentMenuName='';path=/;expires=" + expires.toGMTString() + "";
    }

    //生成快捷方式
    function shortcut() {
        $.ajax({
            url : "/login/shortcut",
            type : "post",
            success : function(data) {
            }
        });
    }

    //加入收藏
    function AddFavorite(sURL, sTitle) {
        try {
            window.external.addFavorite(sURL, sTitle);
        } catch (e) {
            try {
                window.sidebar.addPanel(sTitle, sURL, "");
            } catch (e) {
                alert("加入收藏失败，请使用Ctrl+D进行添加");
            }
        }
    }

    //生成快捷方式
    function toDesktop(sUrl, sName) {
        try {
            var WshShell = new ActiveXObject("WScript.Shell");
            var oUrlLink = WshShell.CreateShortcut(WshShell.SpecialFolders("Desktop") + "\\" + sName + ".url");
            oUrlLink.TargetPath = sUrl;
            oUrlLink.Save();
        } catch (e) {
            alert("当前IE安全级别不允许操作！");
        }
    }

    //给所有J_hoverbut的元素增加hover样式
    $(".J_hoverbut").hover(function(){
            $(this).addClass("hover");
        },function(){
            $(this).removeClass("hover");
        }
    );

    //会员登录手机登录和二维码的路切换
    $(".J_mob,.J_qr_code").click( function () {
        $(".j_mob_show").toggle();
        $(".J_qr_code_show").toggle();
    });
    $('.J_mob,#J_weixinQrCode').click(function(){
        get_weixin_qrcode();
    });
    var qrcode_time,
        waiting_weixin_scan = function(){
            $.getJSON(qscms.root + '?m=Home&c=Members&a=waiting_weixin_login',function(result){
                if(result.status == 1){
                    window.location.href = result.data;
                }
            });
        },

        get_weixin_qrcode = function(){
            clearInterval(qrcode_time);
            $.getJSON(qscms.root + '?m=Home&c=Qrcode&a=get_weixin_qrcode',{type:'login'},function(result){
                if(result.status == 1){
                    $('#J_weixinQrCode').empty().append(result.data);
                    qrcode_time=setInterval(waiting_weixin_scan,5000);
                }else{
                    $('#J_weixinQrCode').empty().html(result.msg);
                }
            });
        };

    //个人注册方式选项卡切换
    $(".regtab .tabli").click( function () {
        $(this).addClass("select").siblings(".tabli").removeClass("select");
        var index = $(".regtab .tabli").index(this);
        $('.tabshow').eq(index).show().siblings(".tabshow").hide();
        $('.tabshow').eq(index).find('input').eq(0).focus().addClass('input_focus');
    });

    //给符合条件的的文本框增加获取焦点的边框和背景变化	
    $(".J_focus input[type='text'][dir!='no_focus'],.J_focus textarea[dir!='no_focus'],.J_focus input[type='password']").focus(function(){
        $(this).addClass("input_focus");
    });

    $(".J_focus input[type='text'][dir!='no_focus'],.J_focus textarea[dir!='no_focus'],.J_focus input[type='password']").blur(function(){
        $(this).removeClass("input_focus");
    });

    //轮播图广告位
    var ap_id=1103;
    var data=platformAdvLoad(ap_id);
    var str="";
    var flag = false;
    if(data[0]['adv_image'] == ''){
        $(".js-login").attr("style","background:url(/tpshop/public__JS__/blue_login_banner.png) no-repeat 0 30px;");
    }else{
        $(".js-login").css("background","transparent");
        for(var i=0;i<data.length;i++){
            if(data[i]['adv_image']!==''){
                if(i==0){
                    str+='<li style="display: list-item;background: url(/'+data[i]['adv_image']+') no-repeat center;background-color:'+data[i]['background']+';background-size: auto">';
                    if(data[i]['adv_url']!==''){
                        str+='<a href="'+data[i]['adv_url']+'" target="_blank" title="">&nbsp;</a>';
                    }
                    str+='</li>';
                }else{
                    str+='<li style="display: none;background: url(/'+data[i]['adv_image']+') no-repeat center;background-color:'+data[i]['background']+';background-size: auto">';
                    if(data[i]['adv_url']!==''){
                        str+='<a href="'+data[i]['adv_url']+'" target="_blank" title="">&nbsp;</a>';
                    }
                    str+='</li>';
                }
                flag = true;
            }
        }
        $('#fullScreenSlides').html(str);
    }
</script>
</body>
</html>