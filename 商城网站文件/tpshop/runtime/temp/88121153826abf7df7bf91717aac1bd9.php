<?php /*a:1:{s:79:"E:\phpStudy\PHPTutorial\WWW\tpshop\application\home\view\register\register.html";i:1550474735;}*/ ?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="zh-CN" class="ie8"> <![endif]-->
<html lang="zh-CN">
<head>
    <meta name="renderer" content="webkit" />
    <meta http-equiv="X-UA-COMPATIBLE" content="IE=edge,chrome=1"/>
    <meta charset="utf-8" />
    <title>六星开源商城-六星教育</title>
    <meta name="keywords" content="六星教育" />
    <meta name="description" content="六星教育"/>
    <meta name="csrf-param" content="_csrf">
    <meta name="csrf-token" content="NlV4QlRwU2RuJhkpBgIVJVIeATgSIgtVdDkpcTlAPCJvLTQlLEQ9HA==">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,Chrome=1" />
    <link rel="shortcut  icon" type="image/x-icon" href="/tpshop/public__JS__/favicon.ico" media="screen"/>
    <link type="text/css" rel="stylesheet" href="/tpshop/public/static/css/ns_common.css"/>
    <link rel="stylesheet" href="/tpshop/public/static/css/layer.css" id="layuicss-skinlayercss">
    <link type="text/css" rel="stylesheet" href="/tpshop/public/static/css/register.css"/>
    <link type="text/css" rel="stylesheet" href="/tpshop/public/static/css/ns_color_style.css"/>
    <style>
        span{font-size:14px;}
        .qrpassword{border-color:red;}
        .protocol-con p{
            color:#666666;
            font-family:"Microsoft Yahei", "Lucida Grande", Verdana, Lucida, Helvetica, Arial, sans-serif;
            font-size:12px;
            font-style:normal;
            font-weight:normal;
            text-indent:24px;
            text-align:center;
            background-color:#ffffff;"
        }
        .m-b-6{
            margin-bottom:6px;
        }
    </style>
    <script type="text/javascript">
        var shop_main='http://tp.23673.com';//外置JS调用
    </script>
    <!--整站改色 _end-->
    <script type="text/javascript" src="/tpshop/public/static/js/jquery.js"></script>
    <script type="text/javascript" src="/tpshop/public/static/js/login.js"></script>
    <script type="text/javascript" src="/tpshop/public/static/js/layer.js"></script>
    <script type="text/javascript" src="/tpshop/public/static/js/jquery.method.js"></script>
    <script type="text/javascript" src="/tpshop/public/static/js/common.js"></script>
    <!-- <script type="text/javascript" src="/tpshop/public/static/js/messages_zh.js"></script> -->
    <script type="text/javascript" src="/tpshop/public/static/js/register.js"></script>
    <!-- <script type="text/javascript" src="/tpshop/public/static/js/verification_code.js"></script> -->

    <!-- 引用资源 -->

</head>
<body>

<script>
    $(document).ready(function(){
        $("#mobileregistermodel-username").change(function(){
            if($(this).val().length >= 3 && $(this).val().length <=16 && $(this).val()!=''){
                var user_name = $(this).val();
                $(this).css("border","1px solid #ccc");
                $("#usernameyz").css("color","black").text("");
                $("#isset_username").attr("value","1");
                $.ajax({
                    type: "get",
                    url: "<?php echo url('/home/memberIsHas'); ?>",
                    data: { "username" : user_name },
                    success: function(data){
                        if(data.code){
                            $("#mobileregistermodel-username").css("border","1px solid red");
                            $("#usernameyz").css("color","red").text("用户名已存在");
                            $("#isset_username").attr("value","2");
                        }
                    }
                });
            }
        });
        $("#btn_submit").click(function(){
            var username = $("#mobileregistermodel-username").val();
            var password = $("#password").val();
            var repass = $("#repass").val();
            var isset_username = $("#isset_username").attr("value");
            var re =  /^(?!\d+$)[\da-zA-Z]*$/i;
            if(!(username.length >= 3 && username.length <=16)){
                $("#mobileregistermodel-username").trigger("focus");
                $('#mobileregistermodel-username').css("border","1px solid red");
                $("#usernameyz").css("color","red").text("用户名长度必须在3到16位之间");
                return false;
            }else{
                $('#mobileregistermodel-username').css("border","1px solid #ccc");
                $("#usernameyz").css("color","red").text("");
            }
            var is_username_true = verifyUsername(username);

            if(is_username_true > 0){
                return false;
            }else{
                $("#mobileregistermodel-username").trigger("focus");
                $('#mobileregistermodel-username').css("border","1px solid #ccc");
                $("#usernameyz").css("color","red").text("");
            }
            if(isset_username == "2"){
                $("#mobileregistermodel-username").trigger("focus");
                $('#mobileregistermodel-username').css("border","1px solid red");
                $("#usernameyz").css("color","red").text("用户名已存在");
                return false;
            }else{
                $("#mobileregistermodel-username").trigger("focus");
                $('#mobileregistermodel-username').css("border","1px solid #ccc");
                $("#usernameyz").css("color","red").text("");
            }
            var is_password_true = verifyPassword(password);
            if(is_password_true > 0){
                return false;
            }
            if(!(repass == password)){
                $("#repass").trigger("focus");
                $('#repass').css("border","1px solid red");
                $("#qrrepass").css("color","red").text("两次密码输入不相同");
                return false;
            }else{
                $('#repass').css("border","1px solid #ccc");
                $("#qrrepass").css("color","red").text("");
            }
            if(!$("#remember1").prop("checked")){
                $("#yzremember").css("color","red").text("您还没有同意注册协议");
                return false;
            }else{
                $("#yzremember").css("color","red").text("");
            }

            $("#EmailRegisterModel").submit();
        });
    });

</script>
<div class="header w990">
    <div class="logo-info">
        <a href="http://tp.23673.com" class="logo"><img alt="logo" src="/tpshop/public/static/picture/1497923663.jpg" /></a>
    </div>
</div>
<div class="reg-content">
    <div class="w990">
        <div class="reg-form">
            <div class="reg-con">
                <script>
                    //验证用户名
                    function verifyUsername(username){
                        var is_true =0;
                        if(/.*[\u4e00-\u9fa5]+.*$/.test(username) ){
                            is_true = 1;
                            $("#mobileregistermodel-username").trigger("focus");
                            $('#mobileregistermodel-username').css("border","1px solid red");
                            $("#usernameyz").css("color","red").text("用户名中不能包含汉字");
                            return is_true;
                        }
                        if(/\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*/.test(username) ){
                            is_true = 1;
                            $("#mobileregistermodel-username").trigger("focus");
                            $('#mobileregistermodel-username').css("border","1px solid red");
                            $("#usernameyz").css("color","red").text("用户名不能是邮箱");
                            return is_true;
                        }
                        if(/^1(3|4|5|7|8)\d{9}$/.test(username) ){
                            is_true = 1;
                            $("#mobileregistermodel-username").trigger("focus");
                            $('#mobileregistermodel-username').css("border","1px solid red");
                            $("#usernameyz").css("color","red").text("用户名不能是手机号");
                            return is_true;
                        }
                        var username_verify = "q,e,k";
                        var usernme_verify_array = new Array();
                        if($.trim(username_verify) != "" && username_verify != undefined){
                            usernme_verify_array  = username_verify.split(",");
                        }
                        usernme_verify_array.push(",");
                        $.each(usernme_verify_array,function(k,v){
                            if($.trim(v) != ""){
                                if(username.indexOf(v) >= 0){
                                    is_true = 1;
                                    $("#mobileregistermodel-username").trigger("focus");
                                    $('#mobileregistermodel-username').css("border","1px solid red");
                                    $("#usernameyz").css("color","red").text("用户名中不能包含'"+v+"'这样的字符");
                                    return false;
                                }
                            }
                        });
                        return is_true;
                    }
                    //验证密码
                    function verifyPassword(password){
                        var is_true = 0;
                        var min_length_str = "6";
                        if($.trim(min_length_str) != "" ){
                            var min_length = parseInt(min_length_str);
                        }else{
                            var min_length = 5;
                        }
                        if($.trim(password) == ""){
                            is_true = 1;
                            $("#password").trigger("focus");
                            $("#password").css("border","1px solid red");
                            $("#yzpassword").css("color","red").text("密码不能为空");
                            return is_true;
                        }else{
                            $("#password").css("border","1px solid #ccc");
                            $("#yzpassword").css("color","red").text("");
                        }
                        if(min_length  > 0){

                            if(password.length < min_length){
                                is_true = 1;
                                $("#password").trigger("focus");
                                $("#password").css("border","1px solid red");
                                $("#yzpassword").css("color","red").text("密码最小长度为"+min_length);
                                return is_true;
                            }else{
                                $("#password").css("border","1px solid #ccc");
                                $("#yzpassword").css("color","red").text("");
                            }

                        }else{

                        }

                        //验证汉字
                        if(/.*[\u4e00-\u9fa5]+.*$/.test(password) ){
                            is_true = 1;
                            $("#password").trigger("focus");
                            $("#password").css("border","1px solid red");
                            $("#yzpassword").css("color","red").text("密码中不能包含汉字!");
                            return is_true;
                        }else{
                            $("#password").css("border","1px solid #ccc");
                            $("#yzpassword").css("color","red").text("");
                        }
                        var regex_str = "number";
                        if($.trim(regex_str) != "" && regex_str != undefined){
                            //验证是否包含数字
                            if(regex_str.indexOf("number") >= 0){
                                var number_test =  /[0-9]/;
                                if(!number_test.test(password)){
                                    is_true = 1;
                                    $("#password").trigger("focus");
                                    $("#password").css("border","1px solid red");
                                    $("#yzpassword").css("color","red").text("密码中必须包含数字!");
                                    $('#mobileregistermodel-username').css("border","1px solid #ccc");
                                    $("#usernameyz").css("color","red").text("");
                                    return is_true;
                                }else{
                                    $("#password").css("border","1px solid #ccc");
                                    $("#yzpassword").css("color","red").text("");
                                }
                            }
                            //验证是否包含小写字母
                            if(regex_str.indexOf("letter") >= 0){
                                var letter_test =  /[a-z]/;
                                if(!letter_test.test(password)){
                                    is_true = 1;
                                    $("#password").trigger("focus");
                                    $("#password").css("border","1px solid red");
                                    $("#yzpassword").css("color","red").text("密码中必须包含小写字母!");
                                    $('#mobileregistermodel-username').css("border","1px solid #ccc");
                                    $("#usernameyz").css("color","red").text("");
                                    return is_true;
                                }else{
                                    $("#password").css("border","1px solid #ccc");
                                    $("#yzpassword").css("color","red").text("");
                                }
                            }
                            //验证是否包含大写字母
                            if(regex_str.indexOf("upper_case") >= 0){
                                var upper_case_test =  /[A-Z]/;
                                if(!upper_case_test.test(password)){
                                    is_true = 1;
                                    $("#password").trigger("focus");
                                    $("#password").css("border","1px solid red");
                                    $("#yzpassword").css("color","red").text("密码中必须包含大写字母!");
                                    $('#mobileregistermodel-username').css("border","1px solid #ccc");
                                    $("#usernameyz").css("color","red").text("");
                                    return is_true;
                                }else{
                                    $("#password").css("border","1px solid #ccc");
                                    $("#yzpassword").css("color","red").text("");
                                }
                            }
                            //验证是否包含特殊字符
                            if(regex_str.indexOf("symbol") >= 0){
                                var symbol_test =  /[^A-Za-z0-9]/;
                                if(!symbol_test.test(password)){
                                    is_true = 1;
                                    $("#password").trigger("focus");
                                    $("#password").css("border","1px solid red");
                                    $("#yzpassword").css("color","red").text("密码中必须包含符号!");
                                    $('#mobileregistermodel-username').css("border","1px solid #ccc");
                                    $("#usernameyz").css("color","red").text("");
                                    return is_true;
                                }else{
                                    $("#password").css("border","1px solid #ccc");
                                    $("#yzpassword").css("color","red").text("");
                                }
                            }
                        }
                        return is_true;
                    }

                </script>
                <div class="reg-type">
                    <p class="login-info">
                        我已经注册，现在就<a href="<?php echo url('/home/login'); ?>" title="去登录" class="color">&nbsp;登录</a>
                    </p>
                    <ul class="clearfix">
                        <li class="active" ><a href="javascript:void(0);">普通注册</a></li>
                        <li ><a href="http://www.tpshop.com/home/register/mail">邮箱注册</a></li>
                    </ul>
                </div>
                <div class="reg-wrap">
                    <div class="reg-wrap-con" style="background: url(/tpshop/public__JS__/register_bg_image.png) no-repeat right 70px;">
                        <form id="EmailRegisterModel" class="form-horizontal" name="EmailRegisterModel" action="" method="post">
                            <input type="hidden" name="_csrf" value="Q2dXM2NPVXYbFDZYMT0TNycsLkklHQ1HAQsGAA5/OjAaHxtUG3s7Dg==">
                            <!-- 用户名 -->
                            <div class="form-group form-group-spe">
                                <label for="mobileregistermodel-mobile" class="input-left">
                                    <span class="spark">*</span>
                                    <span>用户名：</span>
                                </label>
                                <div class="form-control-box">
                                    <input type="text" id="mobileregistermodel-username" class="form-control" name="username" placeholder="请输入用户名，必须在3到16个字符范围内" />
                                    <span id="usernameyz"></span>
                                    <input type="hidden" value="不存在" id="isset_username"/>
                                </div>
                                <div class="invalid"></div>
                            </div>

                            <!-- 密码 -->
                            <div class="form-group form-group-spe">
                                <label for="emailregistermodel-password" class="input-left">
                                    <span class="spark">*</span>
                                    <span>密码：</span>
                                </label>
                                <div class="form-control-box">
                                    <input type="password" id="password" class="form-control" name="password" autocomplete="off" placeholder="请输入密码">
                                    <!--  <i class="fa fa-eye-slash pwd-toggle" data-id="password"></i>	-->
                                    <span id="yzpassword"></span>
                                </div>
                                <div class="invalid"></div>
                            </div>

                            <!-- 密码 -->
                            <div class="form-group form-group-spe">
                                <label for="emailregistermodel-password" class="input-left">
                                    <span class="spark">*</span>
                                    <span>确认密码：</span>
                                </label>
                                <div class="form-control-box">
                                    <input type="password" id="repass" class="form-control" name="qrpassword" autocomplete="off" placeholder="请输入确认密码">
                                    <!--  <i class="fa fa-eye-slash pwd-toggle" data-id="password"></i>	-->
                                    <span id="qrrepass"></span>
                                </div>
                                <div class="invalid"></div>
                            </div>
                            <div class="form-group m-10">
                                <label class="input-left">&nbsp;</label>
                                <div class="form-control-box">
                                    <label for="remember1">
                                        <input type="checkbox"  name="remember" id="remember1" class="checkbox  m-b-6"/>
                                        <span>我已阅读并同意<a href="http://tp.23673.com/helpcenter/index?id=17&class_id=6" class="user_protocol" target="_blank">《用户注册协议》</a></span>
                                        &nbsp;&nbsp;&nbsp;&nbsp;
                                        <span id="yzremember"></span>
                                    </label>
                                </div>
                            </div>

                            <div class="reg-btn">
                                <div class="form-group form-group-spe">
                                    <label for="" class="input-left"></label>
                                    <div class="form-control-box">
                                        <input type="button" class="btn-img btn-entry bg-color" id="btn_submit" name="btn_submit" value="同意协议并注册">
                                    </div>
                                    <div class="invalid"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- 用户协议 -->
<div id="user_protocol" style="display: none;">
    <div class="protocol">
        <div class="protocol-con">
            <p><strong>六星开源商城用户注册协议</strong></p>
            <p>本协议是您与六星开源商城（简称"本站"，网址：demo.六星开源商城.com.cn）所有者之间就六星开源商城网站服务等相关事宜所订立的契约，请您仔细阅读本注册协议，您点击"同意并继续"按钮后，本协议即构成对双方有约束力的法律文件。</p>
            <p><strong>第1条 本站服务条款的确认和接纳</strong></p>
            <p>1.1本站的各项电子服务的所有权和运作权归六星开源商城所有。用户同意所有注册协议条款并完成注册程序，才能成为本站的正式用户。用户确认：本协议条款是处理双方权利义务的契约，始终有效，法律另有强制性规定或双方另有特别约定的，依其规定。</p>
            <p>1.2用户点击同意本协议的，即视为用户确认自己具有享受本站服务、下单购物等相应的权利能力和行为能力，能够独立承担法律责任。</p>
            <p>1.3如果您在18周岁以下，您只能在父母或监护人的监护参与下才能使用本站。</p>
            <p>1.4六星开源商城保留在中华人民共和国大陆地区法施行之法律允许的范围内独自决定拒绝服务、关闭用户账户、清除或编辑内容或取消订单的权利。</p>
            <p><strong>第2条 本站服务</strong></p>
            <p>2.1六星开源商城通过互联网依法为用户提供互联网信息等服务，用户在完全同意本协议及本站规定的情况下，方有权使用本站的相关服务。</p>
            <p>2.2用户必须自行准备如下设备和承担如下开支：（1）上网设备，包括并不限于电脑或者其他上网终端、调制解调器及其他必备的上网装置；（2）上网开支，包括并不限于网络接入费、上网设备租用费、手机流量费等。</p>
            <p><strong>第3条 用户信息</strong></p>
            <p>3.1用户应自行诚信向本站提供注册资料，用户同意其提供的注册资料真实、准确、完整、合法有效，用户注册资料如有变动的，应及时更新其注册资料。如果用户提供的注册资料不合法、不真实、不准确、不详尽的，用户需承担因此引起的相应责任及后果，并且六星开源商城保留终止用户使用六星开源商城各项服务的权利。</p>
            <p>3.2用户在本站进行浏览、下单购物等活动时，涉及用户真实姓名/名称、通信地址、联系电话、电子邮箱等隐私信息的，本站将予以严格保密，除非得到用户的授权或法律另有规定，本站不会向外界披露用户隐私信息。</p>
            <p>3.3用户注册成功后，将产生用户名和密码等账户信息，您可以根据本站规定改变您的密码。用户应谨慎合理的保存、使用其用户名和密码。用户若发现任何非法使用用户账号或存在安全漏洞的情况，请立即通知本站并向公安机关报案。</p>
            <p>3.4用户同意，六星开源商城拥有通过邮件、短信电话等形式，向在本站注册、购物用户、收货人发送订单信息、促销活动等告知信息的权利。</p>
            <p>3.5用户不得将在本站注册获得的账户借给他人使用，否则用户应承担由此产生的全部责任，并与实际使用人承担连带责任。</p>
            <p>3.6用户同意，六星开源商城有权使用用户的注册信息、用户名、密码等信息，登录进入用户的注册账户，进行证据保全，包括但不限于公证、见证等。</p>
            <p><strong>第4条 用户依法言行义务</strong></p>
            <p>本协议依据国家相关法律法规规章制定，用户同意严格遵守以下义务：</p>
            <p>（1）不得传输或发表：煽动抗拒、破坏宪法和法律、行政法规实施的言论，煽动颠覆国家政权，推翻社会主义制度的言论，煽动分裂国家、破坏国家统一的的言论，煽动民族仇恨、民族歧视、破坏民族团结的言论；</p>
            <p>（2）从中国大陆向境外传输资料信息时必须符合中国有关法规；</p>
            <p>（3）不得利用本站从事洗钱、窃取商业秘密、窃取个人信息等违法犯罪活动；</p>
            <p>（4）不得干扰本站的正常运转，不得侵入本站及国家计算机信息系统；</p>
            <p>（5）不得传输或发表任何违法犯罪的、骚扰性的、中伤他人的、辱骂性的、恐吓性的、伤害性的、庸俗的，淫秽的、不文明的等信息资料；</p>
            <p>（6）不得传输或发表损害国家社会公共利益和涉及国家安全的信息资料或言论；</p>
            <p>（7）不得教唆他人从事本条所禁止的行为；</p>
            <p>（8）不得利用在本站注册的账户进行牟利性经营活动；</p>
            <p>（9）不得发布任何侵犯他人著作权、商标权等知识产权或合法权利的内容；</p>
            <p>用户应不时关注并遵守本站不时公布或修改的各类合法规则规定。</p>
            <p>本站保有删除站内各类不符合法律政策或不真实的信息内容而无须通知用户的权利。</p>
            <p>若用户未遵守以上规定的，本站有权作出独立判断并采取暂停或关闭用户帐号等措施。用户须对自己在网上的言论和行为承担法律责任。</p>
            <p><strong>第5条 商品信息</strong></p>
            <p>本站上的商品价格、数量、是否有货等商品信息随时都有可能发生变动，本站不作特别通知。由于网站上商品信息的数量极其庞大，虽然本站会尽最大努力保证您所浏览商品信息的准确性，但由于众所周知的互联网技术因素等客观原因存在，本站网页显示的信息可能会有一定的滞后性或差错，对此情形您知悉并理解；六星开源商城欢迎纠错，并会视情况给予纠错者一定的奖励。</p>
            <p>为表述便利，商品和服务简称为"商品"或"货物"。</p>
            <p><strong>第6条 订单</strong></p>
            <p>6.1在您下订单时，请您仔细确认所购商品的名称、价格、数量、型号、规格、尺寸、联系地址、电话、收货人等信息。收货人与用户本人不一致的，收货人的行为和意思表示视为用户的行为和意思表示，用户应对收货人的行为及意思表示的法律后果承担连带责任。</p>
            <p>6.2除法律另有强制性规定外，双方约定如下：本站上销售方展示的商品和价格等信息仅仅是交易信息的发布，您下单时须填写您希望购买的商品数量、价款及支付方式、收货人、联系方式、收货地址等内容；系统生成的订单信息是计算机信息系统根据您填写的内容自动生成的数据，仅是您向销售方发出的交易诉求；销售方收到您的订单信息后，只有在销售方将您在订单中订购的商品从仓库实际直接向您发出时（ 以商品出库为标志），方视为您与销售方之间就实际直接向您发出的商品建立了交易关系；如果您在一份订单里订购了多种商品并且销售方只给您发出了部分商品时，您与销售方之间仅就实际直接向您发出的商品建立了交易关系；只有在销售方实际直接向您发出了订单中订购的其他商品时，您和销售方之间就订单中该其他已实际直接向您发出的商品才成立交易关系。您可以随时登录您在本站注册的账户，查询您的订单状态。</p>
            <p>6.3由于市场变化及各种以合理商业努力难以控制的因素的影响，本站无法保证您提交的订单信息中希望购买的商品都会有货；如您拟购买的商品，发生缺货，您有权取消订单。</p>
            <p><strong>第7条 配送</strong></p>
            <p>7.1销售方将会把商品（货物）送到您所指定的收货地址，所有在本站上列出的送货时间为参考时间，参考时间的计算是根据库存状况、正常的处理过程和送货时间、送货地点的基础上估计得出的。</p>
            <p>7.2因如下情况造成订单延迟或无法配送等，销售方不承担延迟配送的责任：</p>
            <p>（1）用户提供的信息错误、地址不详细等原因导致的；</p>
            <p>（2）货物送达后无人签收，导致无法配送或延迟配送的；</p>
            <p>（3）情势变更因素导致的；</p>
            <p>（4）不可抗力因素导致的，例如：自然灾害、交通戒严、突发战争等。</p>
            <p><strong>第8条 所有权及知识产权条款</strong></p>
            <p>8.1用户一旦接受本协议，即表明该用户主动将其在任何时间段在本站发表的任何形式的信息内容（包括但不限于客户评价、客户咨询、各类话题文章等信息内容）的财产性权利等任何可转让的权利，如著作权财产权（包括并不限于：复制权、发行权、出租权、展览权、表演权、放映权、广播权、信息网络传播权、摄制权、改编权、翻译权、汇编权以及应当由著作权人享有的其他可转让权利），全部独家且不可撤销地转让给六星开源商城所有，用户同意六星开源商城有权就任何主体侵权而单独提起诉讼。</p>
            <p>8.2本协议已经构成《中华人民共和国著作权法》第二十五条（条文序号依照2011年版著作权法确定）及相关法律规定的著作财产权等权利转让书面协议，其效力及于用户在六星开源商城网站上发布的任何受著作权法保护的作品内容，无论该等内容形成于本协议订立前还是本协议订立后。</p>
            <p>8.3用户同意并已充分了解本协议的条款，承诺不将已发表于本站的信息，以任何形式发布或授权其它主体以任何方式使用（包括但不限于在各类网站、媒体上使用）。</p>
            <p>8.4六星开源商城是本站的制作者,拥有此网站内容及资源的著作权等合法权利,受国家法律保护,有权不时地对本协议及本站的内容进行修改，并在本站张贴，无须另行通知用户。在法律允许的最大限度范围内，六星开源商城对本协议及本站内容拥有解释权。</p>
            <p>8.5除法律另有强制性规定外，未经六星开源商城明确的特别书面许可,任何单位或个人不得以任何方式非法地全部或部分复制、转载、引用、链接、抓取或以其他方式使用本站的信息内容，否则，六星开源商城有权追究其法律责任。</p>
            <p>8.6本站所刊登的资料信息（诸如文字、图表、标识、按钮图标、图像、声音文件片段、数字下载、数据编辑和软件），均是六星开源商城或其内容提供者的财产，受中国和国际版权法的保护。本站上所有内容的汇编是六星开源商城的排他财产，受中国和国际版权法的保护。本站上所有软件都是六星开源商城或其关联公司或其软件供应商的财产，受中国和国际版权法的保护。</p>
            <p><strong>第9条 责任限制及不承诺担保</strong></p><p>除非另有明确的书面说明,本站及其所包含的或以其它方式通过本站提供给您的全部信息、内容、材料、产品（包括软件）和服务，均是在"按现状"和"按现有"的基础上提供的。</p>
            <p>除非另有明确的书面说明,六星开源商城不对本站的运营及其包含在本网站上的信息、内容、材料、产品（包括软件）或服务作任何形式的、明示或默示的声明或担保（根据中华人民共和国法律另有规定的以外）。</p>
            <p>六星开源商城不担保本站所包含的或以其它方式通过本站提供给您的全部信息、内容、材料、产品（包括软件）和服务、其服务器或从本站发出的电子信件、信息没有病毒或其他有害成分。</p>
            <p>如因不可抗力或其它本站无法控制的原因使本站销售系统崩溃或无法正常使用导致网上交易无法完成或丢失有关的信息、记录等，六星开源商城会合理地尽力协助处理善后事宜。</p>
            <p><strong>第10条 协议更新及用户关注义务</strong></p>
            <p>根据国家法律法规变化及网站运营需要，六星开源商城有权对本协议条款不时地进行修改，修改后的协议一旦被张贴在本站上即生效，并代替原来的协议。用户可随时登录查阅最新协议；用户有义务不时关注并阅读最新版的协议及网站公告。如用户不同意更新后的协议，可以且应立即停止接受六星开源商城网站依据本协议提供的服务；如用户继续使用本网站提供的服务的，即视为同意更新后的协议。六星开源商城建议您在使用本站之前阅读本协议及本站的公告。 如果本协议中任何一条被视为废止、无效或因任何理由不可执行，该条应视为可分的且并不影响任何其余条款的有效性和可执行性。</p>
            <p><strong>第11条 法律管辖和适用</strong></p>
            <p>本协议的订立、执行和解释及争议的解决均应适用在中华人民共和国大陆地区适用之有效法律（但不包括其冲突法规则）。 如发生本协议与适用之法律相抵触时，则这些条款将完全按法律规定重新解释，而其它有效条款继续有效。 如缔约方就本协议内容或其执行发生任何争议，双方应尽力友好协商解决；协商不成时，任何一方均可向有管辖权的中华人民共和国大陆地区法院提起诉讼。</p>
            <p><strong>第12条 其他</strong></p>
            <p>12.1六星开源商城网站所有者是指在政府部门依法许可或备案的六星开源商城网站经营主体。</p>
            <p>12.2六星开源商城尊重用户和消费者的合法权利，本协议及本网站上发布的各类规则、声明等其他内容，均是为了更好的、更加便利的为用户和消费者提供服务。本站欢迎用户和社会各界提出意见和建议，六星开源商城将虚心接受并适时修改本协议及本站上的各类规则。</p>
            <p>12.3本协议内容中以黑体、加粗、下划线、斜体等方式显著标识的条款，请用户着重阅读。</p>
            <p>12.4您点击本协议下方的"同意并继续"按钮即视为您完全接受本协议，在点击之前请您再次确认已知悉并完全理解本协议的全部内容。</p>
        </div>
    </div>
</div>
<!-- 底部 -->
<!-- 底部 _start-->
<div class="site-footer">
    <div class="footer-related">
        <div class="footer-info">
            <div class="info-text">
                <!-- 底部导航 -->
                <div class="txt">
                    <p>Copyright © 2015-2025 六星开源商城&nbsp;版权所有 保留一切权利
                        <br><a href="http://www.sixstaredu.com" target="_blank" style="text-decoration: none;color:#333333;">湖南六星教育网络科技有限公司&nbsp;&nbsp;提供技术支持</a>
                        <span>0731-8557-3019</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- 底部 _end-->
</body>
<!-- <script type="text/javascript">
	$().ready(function() {
		$(".user_protocol").click(function() {
			if ($.modal($(this))) {
				$.modal($(this)).show();
			} else {
				var modal = $.modal({
					title: "用户注册协议",
					trigger: $(this),
					content: $("#user_protocol").html()
				});
				modal.addButton({
					text: "同意协议并继续",
					click: function() {
						$("input[type='checkbox']").prop("checked", true);
						$("#btn_submit").removeAttr("disabled");
						this.hide();
					}
				});
			}
		});
	});
</script> -->
</body>