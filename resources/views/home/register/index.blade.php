<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="pragma" content="no-cache">
<meta http-equiv="cache-control" content="no-cache,no-store, must-revalidate">
<meta http-equiv="expires" content="0">
<title>优购时尚商城_用户注册</title>
<meta name="description" content="优购时尚商城"/>
<meta name="keywords"  content="优购时尚商城"/>
<script>
	//禁止iframe嵌入
	if(window.top !== window.self){ window.top.location = window.location;}
	var basePath = "";
	var shoppingProcess=true;
</script>
	<link href="/css/home/base-2_1.css" type="text/css" rel="stylesheet" />
	<link href="/css/home/validator_1.css" type="text/css" rel="stylesheet" />
	<link href="/css/home/new_log_reg.v2.0_1.css" type="text/css" rel="stylesheet" />
	<script type="text/javascript" src="/js/home/jquery-1.4.2.min.js"></script>
	<script type="text/javascript" src="/js/home/yg.common.js"></script>
	<script type="text/javascript" src="/js/home/yg.reg.js"></script>
</head>
<body>
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
			<div class="register"><a  rel="nofollow" href="javascript:register();">注册</a></div>
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
			新用户注册
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

<form action="/registerValidate.jhtml" method="post">
    <input id="redirectURL_1" type="hidden" name="redirectURL" value="">
    <div class="cen-new rel">
    	
    <a href="http://www.yougou.com" target="_blank" class="cen-new" style="background: url('/images/home/130cea57d6384505a16a156085d55a20.jpg') no-repeat top center;position: absolute;top: 0;left: 0;z-index: 0"></a>
 
        <div class="nreg_box clearfix" style="left: 50%;margin-left: 115px;position: absolute;top: 0;width: 378px;z-index: 1;">
            <div id="emailDiv" class="nreg_left fr" style="height: 530px;margin-top: 12px">
                <ul class="tab_sig_reg clearfix">
                    <li class="tab_sig"><a href="javascript:login();">登录</a></li>
                    <li class="tab_reg tab_cur"><a href="#">注册</a></li>
                </ul>
                <div class="nreg_form">
                    <dl class="nreg_item mobile_regitem clearfix rel" id="mobile_nreg_item">
                        
                        <dd>
                            <div class="nreg_input_bg rel">
                                <label class="lab1 nreg_mob_ema"><span class="fl">账号</span><i class="tab_nreg"></i></label>
                                <div class="tab_user_name">
                                    <a id="mobileLink" class="reg_Tab reg_TabCurr" href="javascript:;" regtype="mobile" ><span>账号</span><i class="tab_nreg"></i></a>
                                 </div>
                                <input type="text" name="uname" id="reg_mobile_" class="nreg_input"  valid = "Mobile" placeholder="请输入您的账号"/>
                            </div>
                        </dd>
                        <dt>
                        <div id="reg_mobile_tip" class="errortips"></div>
                        </dt>
                    </dl>
                    <dl class="nreg_item email_regitem clearfix rel" id="email_nreg_item" style="display:none;">
                        <dd>
                            <div class="nreg_input_bg">
                                <label class="lab1 nreg_mob_ema"><span class="fl">邮箱</span><i class="tab_nreg"></i></label>
                                <div class="tab_user_name">
                                    <a id="mobileLink" class="reg_Tab " href="javascript:;" regtype="mobile" ><span>手机号</span><i class="tab_nreg"></i></a>
                                    <a id="emailLink" class="reg_Tab reg_TabCurr" href="javascript:;" regtype="email"><span>邮箱</span></a>
                                </div>
                                <input type="text" name="email" id="reg_email_" class="nreg_input" valid = "Email" placeholder="不建议填写gmail、hotmail、qq邮箱"/>
                            </div>
                        </dd>
                        <dt>
                        <div id="reg_email_tip" class="errortips"></div>
                        </dt>
                    </dl>
                     <dl id="dlCode" class="nreg_item email_regitem mobile_regitem clearfix rel">
                        <dd>
                            <div class="nreg_input_bg fl" style="width:200px">
                                <label class="lab1" for="reg_checkcode">验证码</label>
                                <input type="text" name="reg_checkcode" id="code2_" class="nreg_sinput" maxlength="4" valid="IdentifyCode" style="width: 128px"/>
                            </div>
                            <div class="fr" style="margin-right: 17px;">
                                <img id="imageValidate2" class="changeImg"/>
                            </div>
                        </dd>
                        <dt>
                        <div id="code2_tip" class="errortips"></div>
                        </dt>
                    </dl>
                    <dl id="dlMobileCode" class="nreg_item mobile_regitem clearfix rel">
                        <dt>

                        <div id="sendMsgTips" data-msg="sendmsgtips"></div>
                        </dt>
                    </dl>
                    <dl class="nreg_item clearfix rel">
                        <div style="position:absolute;top:38px;right: 17px;">
                            <div id="pwdStrength" class="pwdStrength none">
                                <em>低</em><em>中</em><em>高</em>
                            </div>
                        </div>
                        <dd>
                            <div class="nreg_input_bg">
                                <label class="lab1" for="reg_password_">密码</label>
                                <input type="password" name="password1" id="reg_password_" class="nreg_input" maxlength="25" valid="Password" placeholder="字母、数字、符号均可，6-25个字符以内"/>
                            </div>
                        </dd>
                        <dt>
                        <div id="reg_password_tip1" class="errortips"></div>
                        </dt>
                    </dl>
                    <dl class="nreg_item clearfix rel">
                        <dd>
                            <div class="nreg_input_bg">
                                <label class="lab1" for="reg_password2">确认密码</label>
                                <input type="password" id="reg_password2" class="nreg_input" maxlength="25" valid="RePassword"/>
<input type="hidden" name="8D6o0M3Z2m" value="3f4b2g" id="reg_nonce_id"/>
                            </div>
                        </dd>
                        <dt>
                        <div id="reg_password_tip2" class="errortips"></div>
                        </dt>
                    </dl>
                    <p style="text-align: center">
                        <span> <input type="checkbox" id="rules" name="rules" style="margin-top:0" id="rules" checked="checked"  /> </span>
                        <label style="padding-left:3px" for="rules">我已阅读并同意<a href="http://www.yougou.com/help/registrationagreement.html" class="Red undline" target="_blank">《优购会员注册协议》</a></label>
                        <span id="ruleTips"></span>
                    </p>
                    <p class="blank5"></p>

                    <p style="text-align: center">
                        <a href="javascript:void();" class="nreg_submit"><input type="submit" title="立即注册" value="确认并注册" id="reg_buton"></a>
                    </p>
                </div>
            </div>
            <input type="hidden" name="8q2y8B9W7D" value="1W2q7b" id="reg_nonce_id"/>

        </div>
    </div>
</form>
<!--底部start-->

  

<div class="footer Gray">
	<p class="tright">Copyright &copy; 2011-2014 Yougou Technology Co., Ltd. <a href="http://www.miibeian.gov.cn" target="_blank">粤ICP备09070608号-4</a> 增值电信业务经营许可证：<a href="http://www.miibeian.gov.cn" target="_blank" style="padding-left:0" >粤 B2-20090203</a></p>
</div>

<!--底部end--> 
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
<!--<script src="js/mv.js" type="text/javascript"></script>-->
  
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
<!-- baidu marketing -->
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?bc66790de6f87c591da5936f04e03efb";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>

<!--iDigger Tracking Codes-->
<script type="text/javascript">
	  var idgJsHost = (("https:" == document.location.protocol) ? "https" : "http");
	  var idgDomain = idgJsHost == "http" ? "1" : "2";
	  document.write(unescape("%3Cscript src='" + idgJsHost + "://" + idgDomain + ".allyes.com.cn/idigger_yg.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
	 var s={};
 	//用户ID
 	s.userid="";
</script>
<script type="text/javascript">
	try {
		  var idgTracker = _alysP.init("mso","T-000436-01", "");
		  idgTracker._setTrackPath(idgJsHost + '://idigger.allyes.com/main/adftrack');
		  idgTracker._setECM(s);
	  	  idgTracker._trackPoint();
	} catch(err) {}
</script>
<!--iDigger Tracking Codes-->
</body>
</html>