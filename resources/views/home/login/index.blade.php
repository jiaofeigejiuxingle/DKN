<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="pragma" content="no-cache">
<meta http-equiv="cache-control" content="no-cache,no-store, must-revalidate">
<meta http-equiv="expires" content="0">
<title>优购网_用户登录</title>
<meta name="description" content="优购网"/>
<meta name="keywords"  content="优购网"/>
<script>
	//禁止iframe嵌入
	if(window.top !== window.self){ window.top.location = window.location;}
</script>
	<link href="/css/home/base-2.css" type="text/css" rel="stylesheet" />
	<link href="/css/home/validator.css" type="text/css" rel="stylesheet" />
	<link href="/css/home/new_log_reg.v2.0.css" type="text/css" rel="stylesheet" />
	<script type="text/javascript" src="/js/home/jquery-1.4.2.min.js"></script>
	<script type="text/javascript" src="/js/home/yg.common.js"></script>
	<script type="text/javascript" src="/js/home/yg.login.js"></script>
</head>
<body>

<input id="redirectURL_1" type="hidden" name="redirectURL" value="http://www.yougou.com/?utm_source=AD_tTQXJocmq">

<!-- top nav bar created time: 2014-11-28 18:34:02-->
<div id="top_nav">
	<div class="view_area clearfix">
		<div class="yg link_box"><a href="http://www.yougou.com/#ref=all&po=logo_yougou">时尚商城</a></div>
		
		<div class="phone link_box">
			<a href="http://www.yougou.com/topics/mobile.html" class="phone_text"><i class="mobile_ico"></i>手机优购<i class="tip"></i></a>
			<div class="phone_con">
                    <p class="clearfix">
                        <span class="fl qr_code">
                        </span>
                        <span class="fl ml10">
                            <a class="btn_app_store btn" href="http://itunes.apple.com/cn/app/zhang-shang-you-gou/id504493912?mt=8" target="_blank">App Store</a>
                            <a class="btn_android_store btn" href="http://mobile.yougou.com/appVersion/package.sc?channelCode=YgYougouwebA59" target="_blank">Android</a>
                        </span>
                    </p>
                    <p class="qr_code_tip">下载安装 <strong>优购客户端</strong></p>
                </div>
		</div>
		<div class="outlets link_box" style="border-right:none"></div>
		<div class="fr">
		<div class="about_user">
			<div class="login"><a  rel="nofollow" href="javascript:login();">登录</a></div>
			<div class="register"><a  rel="nofollow" href="{{url('/Home/register')}}">注册</a></div>
		</div><!--about_user end -->
		<div class="my_yg link_box">
			<a href="http://www.yougou.com/my/ucindex.jhtml" class="a1">我的优购</a>
			<ul class="info_con">
				<li><a href="http://www.yougou.com/my/favorites.jhtml">我的收藏</a></li>
				<li id="commentcount"></li>
				<li id="top_msg"></li>
			</ul>
		</div>
		<div class="my_order link_box"><a href="http://www.yougou.com/my/order.jhtml" rel="nofollow">我的订单</a></div>
		<div class="notice link_box">
			<span class="notice_text">公告</span>
			<ul class="notice_con">
                    <li><a target="_blank" href="http://www.yougou.com/topics/1416561897997.html#ref=index&po=notice_notice1">运动新风尚 新品5折起</a></li>
                    <li><a target="_blank" href="http://www.yougou.com/topics/1415597386968.html#ref=index&po=notice_notice2">摩登男装 秋冬大促 1折起</a></li>
                    <li><a target="_blank" href="http://www.yougou.com/topics/1415587130097.html#ref=index&po=notice_notice3">潮靴秀美腿 价比11.11</a></li>
                    <li><a target="_blank" href="http://www.yougou.com/topics/1415605960629.html#ref=index&po=notice_notice4">女装初冬热促 爆款2折起</a></li>
                    <li><a target="_blank" href='/article/201411/87dc5ccf633611e4b7eea30f61b97b3f.shtml#ref=index&po=notice_notice5'>库房发货时间调整说明</a></li>
			</ul>
		</div>
		<div class="more link_box">
			<a href="javascript:;" class='more_text'>更多</a>
			<ul class="more_con">
				<li><a onclick="YouGou.Biz.WebToolkit.addFavorite();" href="javascript:;">收藏优购</a></li>
				<li><a href="http://www.yougou.com/help/help.html">帮助</a></li>
			</ul>
		</div>
		</div>
	</div><!--view_area end -->
</div><!--top_nav end -->

<div class="uc_hd">
	<div class="cen clearfix rel">
		<h2 class="cen_logo"><a href="http://www.yougou.com"><img src="/images/home/signin-register-logo.png" alt=""/></a></h2>
		<p class="cen_font fl">
			用户登录
		</p>
	</div>
</div>

<!--更换雅虎邮箱提示 start-->
<div class="uc_email_tip" id="uc_email_tip" style="display:none;">
	<i class="warn"></i><strong>由于雅虎邮箱即将停止服务</strong>，为了保障您以后能够通过邮箱找回密码、接收订单提醒等，建议尽快把账号完成绑定其他邮箱。<a class="Blue" href="javascript:void(0);" id="email_bind_modify">[立即绑定]</a><i class="close"></i>
</div>
<!--更换雅虎邮箱提示 end-->
<script type="text/javascript">
function login() {
    location.href = "http://www.yougou.com/signin.jhtml" + location.search;
    return false;
}
function register() {
    location.href = "http://www.yougou.com/register.jhtml" + location.search;
    return false;
}
</script>

<div class="cen-new rel">
	
    <a href="http://www.yougou.com" target="_blank" class="cen-new" style="background: url('/images/home/130cea57d6384505a16a156085d55a20.jpg') no-repeat top center;position: absolute;top: 0;left: 0;z-index: 0"></a>
 
    <div class="nreg_box mt15 clearfix" style="left: 50%;margin-left: 115px;position: absolute;top: 0;width: 378px;z-index: 1;">
        <div class="nreg_left fr">
            <ul class="tab_sig_reg clearfix">
                <li class="tab_sig tab_cur"><a href="#">登录</a></li>
                <li class="tab_reg"><a href="">注册</a></li>
            </ul>
            <div class="nreg_form">
               <font color="red">{{ session("info") }}</font>
                <form sid="loginform" name="login" method="post" action="/Home/logTodo">
                    <input type="hidden" name="_token" value="{{ $data['_token'] or csrf_token() }}" />
                    <dl class="nreg_item clearfix">
                        <dd>
                            <div class="nreg_input_bg">
                                <i class="reg_user_name"></i>
                                <input type="text" name="uname" placeholder="请输入您的账号" id="email_" class="nreg_input" maxlength="50" value=""/>
                            </div>
                        </dd>
                        <dt><div id="login_email_tip" class="errortips"></div></dt>
                    </dl>
                    <dl class="nreg_item clearfix">
                        <dd>
                            <div class="nreg_input_bg">
                                <i class="reg_password"></i>
                                <input type="password" name="password" placeholder="请输入您的密码" id="password_" class="nreg_input"  maxlength="50" />
                            </div>
                        </dd>
                        <dt><div id="login_password_tip" class="errortips"></div></dt>
                    </dl>
                    <input type="hidden" name="8p1r8V6W3N" value="1Q0d2F" id="loginNonceId"/>
                     <dl class="nreg_item clearfix">
                     <dd>
                        <div class="nreg_input_bg fl" style="width:202px">
				 <label class="lab1 ver_code" for="code">验证码</label>
				  <input type="text" name="code" value="{{ $data['code'] or '' }}" class="nreg_sinput" maxlength="5" style="width: 130px" name="code" />
                        </div>
			 <div class="fl" style=" padding:0">
				  <img src="{{ url('/captcha')."/". rand() }}" id="code" onclick="this.src = this.src.replace(/\d+$/, '') + Math.random();" style="width:110px"/>
			 </div>
                    </dd>
			 <dt><div id="code2_tip"></div></dt>
                    </dl>
                    <p style="display: block;text-align: right;margin-right: 17px;">
                        <a href="http://www.yougou.com/forgotpassword.jhtml" style="line-height: 26px; text-decoration:underline">忘记密码？</a>
                    </p>
                    <p style="text-align: center">
                        <input type="submit" class="nlog_submit" value="点击登录" title="登录"/>
                    </p>
                    <p class="f_black" style="color: #999;margin-top: 10px;text-align: center;">使用合作网站账号登录优购：</p>
                    <p class="cop_link">
                        <a class="we_chat f_blue" href="/member/toThirdPartLogin.jhtml?type=quick-weixin&amp;redirectURL=http://www.yougou.com/?utm_source=AD_tTQXJocmq">&nbsp;</a> |
                        <a href="/api/alipay/sendToFastLogin.sc?redirectURL=http://www.yougou.com/?utm_source=AD_tTQXJocmq" class="nreg_zpay f_blue">&nbsp;</a> |
                        <a href="/api/qq/toLogin.sc?redirectURL=http://www.yougou.com/?utm_source=AD_tTQXJocmq" class="nreg_qq f_blue">&nbsp;</a> |
                        <a href="/api/sina/toLogin.sc?redirectURL=http://www.yougou.com/?utm_source=AD_tTQXJocmq" class="nreg_sina f_blue">&nbsp;</a> |
                        <a href="/api/renren/toRenren.sc?redirectURL=http://www.yougou.com/?utm_source=AD_tTQXJocmq" class="nreg_people f_blue">&nbsp;</a>
                    </p>
                    <input type="hidden" name="8h9Z9t9y1F" value="7Y9R4u" id="loginNonceId"/>
                </form>
                <script src="{{ asset('/js/home/login_index.js') }}"></script>
            </div>
        </div>
    </div>
</div>
<div class="blank20" ></div>



<div class="footer Gray">
	<p class="tright">Copyright &copy; 2011-2014 Yougou Technology Co., Ltd.  <a href="http://www.miibeian.gov.cn" target="_blank">粤ICP备09070608号-4</a> 增值电信业务经营许可证：<a href="http://www.miibeian.gov.cn" target="_blank" style="padding-left:0" >粤 B2-20090203</a></p>
</div>

<script type="text/javascript">
 	//google
 	var _gaq = _gaq || [];
 	_gaq.push(['_setAccount', 'UA-23566531-1']);
 	_gaq.push(['_setDomainName', '.yougou.com']);
 	_gaq.push(['_addOrganic', 'baidu', 'word']);
 	_gaq.push(['_addOrganic', 'soso', 'w']);
 	_gaq.push(['_addOrganic', '3721', 'name']);
 	_gaq.push(['_addOrganic', 'yodao', 'q']);
 	_gaq.push(['_addOrganic', 'vnet', 'kw']);
 	_gaq.push(['_addOrganic', 'sogou', 'query']);
 	_gaq.push(['_addOrganic', '360', 'q']);
 	_gaq.push(['_addOrganic', 'so', 'q']);
 	_gaq.push(['_trackPageview']);
 	_gaq.push(['_trackPageLoadTime']);

	(function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://analytic' : 'http://analytic') + '.yougou.com/ga.js?3.1.8';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	})();
</script>

<!-- Google Code for &#27880;&#20876; Conversion Page -->
<script type="text/javascript">
	/* <![CDATA[ */
	var google_conversion_id = 1016027598;
	var google_conversion_language = "ar";
	var google_conversion_format = "3";
	var google_conversion_color = "ffffff";
	var google_conversion_label = "EFaYCJrxqgIQzrO95AM";
	var google_conversion_value = 0;
	/* ]]> */
</script>

<script type="text/javascript" src="/js/home/conversion.js"></script>

<noscript>
	<div style="display:inline;">
		<img height="1" width="1" style="border-style:none;" alt="" src="http://www.googleadservices.com/pagead/conversion/1016027598/?label=EFaYCJrxqgIQzrO95AM&amp;guid=ON&amp;script=0"/>
	</div>
</noscript>

</body>
</html>