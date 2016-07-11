
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="pragma" content="no-cache">
<meta http-equiv="cache-control" content="no-cache,no-store, must-revalidate">
<meta http-equiv="expires" content="0">
<title>订单提交中心_优购网上鞋城</title>

<link href="/css/home/uc.base.css" type="text/css" rel="stylesheet" />
<link href="/css/home/base_2.css" type="text/css" rel="stylesheet" />
<link href="/css/home/shopcar_v4.0.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="/js/home/jquery-1.4.2.min_1.js"></script>
<script type="text/javascript" src="/js/home/jquery.validate.js"></script>
<script type="text/javascript" src="/js/home/md5.js"></script>
<script type="text/javascript" src="/js/home/ygdialog.js"></script>
<script type="text/javascript">
	var basePath = "";
	var shoppingProcess=true;
</script>
<script type="text/javascript" src="/js/home/yg.common.js"></script>
<script type="text/javascript" src="/js/home/payonline.js"></script>
<script type="text/javascript" src="/js/home/yg.shopcart.js"></script>
</head>
<body>
<!--
  <script type="text/javascript">
    window.onload=function(){
      ygOrder.base.openLoginPop();
     }
  </script>
-->
	<!--header start-->
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

	<!--header end-->
	
	<div class="cen cart_header">
	    <h1 class="logo"><a href="http://www.yougou.com" title="优生活，购时尚"><img src="/images/home/logo-yg.png" alt="优购时尚商城"/></a></h1>
	    <div class="fr cart_step mt20">
	        <ul>
	            <li class="current">我的购物车<em></em><i></i></li>
	            <li>提交订单中心<em></em><i></i></li>
	            <li>成功提交订单<em></em><i></i></li>
	        </ul>
	    </div>
	</div>
	
	
	<span class="none">
		<input type="hidden" id="addProductMaxNum" value="1"/>
		<input type="hidden" id="limitCartAddProductMaxNum" value="100"/>
		<input type="hidden" id="orderNum" value="0"/>
		<input type="hidden" id="isLock" value="false"/>
		<input type="hidden" id="limitOrderNum" value="40"/>
		<input type="hidden" id="limitOrderCommBuyMaxNum" value="40"/>
		<input type="hidden" id="isKrwFreeDuty" value="false"/>
	</span>
	

<!-- 若所有购物车均为空提示一下内容   -->
	<!-- 普通购物车 -->
		<div id="shoppingCartContainerCNY">
<div class="cen cart_gray_box mt20">
    <table class="cart_list_tb">
        <colgroup>
            <col width="60" />
            <col width="370" />
            <col width="110" />
            <col width="110" />
            <col width="110" />
            <col width="110" />
            <col width="120" />
        </colgroup>
        <thead>
        <tr>
            <th>
					<label name="CNYcheckAllLabel" class="ygChkbox">
	                    <input class="none" type="checkbox" id="CNYcheckStartAll" name="CNYcheckAll"
	                           checked="checked">
	                    <i class="skin fl mt5 ml20 checked"></i>
	                    	全选
	                </label>
            </th>
            <th>
                <span class="pr25">商品名称</span>
            </th>
            <th>颜色尺码</th>
            <th>单价</th>
            <th>数量</th>
            <th>小计(元)</th>
            <th>操作</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td id="tr_td" colspan="7">
                <input type="hidden" value="1" id="productRecordNum">
                <input type="hidden" value="0" id="productGiftRecordNum" value="0">
                <input type="hidden" value="1" id="orderCommNum">

                <!-- 优购时尚商城开始-->





                                    <div id="shopping_cart0"
                                         class="shopping_cart_tr ">
                                        <div class="shpcrt_blank10 clearfix"></div>
                                        <dl class="clearfix">
                                            <input type="hidden" value="2016-07-08 14:33:33"
                                                   id="addTime">
                                            <dd class="fl rel col_chkbox">
                                                <label class="ygChkbox">
                                                    <input type="checkbox" value="302adeed3cb6ad20fe1caf3031d62e18__m" name="CNYcheck"
                                                           pid="79998028522c49549e56d070eb8af71b" psize="M"
                                                           prono="100451273002"
                                                           class="none"
                                                           checked="checked"/>
                                                    <i class="skin fl checked"></i>
                                                </label>
                                            </dd>
                                            <dt class="col_1 fl rel">
                                                <a target="_blank" href="http://www.yougou.com/c-nike/sku-727783-100451273.shtml">
                                                    <img onerror="this.src='/images/home/160x160.jpg'"
                                                         src="http://i2.ygimg.cn/pics/nike/2016/100451273/100451273_01_t.jpg?2"
                                                         width="60" height="60" class="thumImg">
                                                    
                                                </a>
                                            </dt>
                                            <dd class="col_2 fl rel">
                                                <a target="_blank" href="http://www.yougou.com/c-nike/sku-727783-100451273.shtml"
                                                   title="NIKE耐克2016年新款男子CLUB FT SHRT-TPCL STRM短裤727783-657" class="shopLink">
                                                    <div>NIKE耐克2016年新款男子CLUB FT SHRT-TPCL STRM短裤727783-657</div>
                                                </a>

                                            </dd>
                                            <dd class="col_3 fl">
                                                <div class="pl20">
                                                    <p class="cgray tleft">颜色：<em
                                                            class="f_gray">红\粉红\玫瑰红</em></p>

                                                    <p class="cgray tleft">尺码：<em
                                                            class="f_gray">M</em></p>
                                                </div>
                                            </dd>
                                                <dd class="col_4 fl rel ">
                                                    189

                                                            <div class="mt3"><span class="actvtip2">限时抢<i></i></span>
                                                            </div>
                                                </dd>
                                                <dd class="col_5 fl rel">
														<a class="goodsSub fl" proindex="1"
                                                       		href="javascript:void(0);">-</a>
                                                    		<input id="selectNum_1" proindex="1"
                                                           		class="goodsTxt fl" type="text" value="1"
                                                           		name="goodsCount" />
                                                        <a class="goodsPlus fl" proindex="1"
                                                       		href="javascript:void(0);">+</a>
                                                    
                                                    <input type="hidden" id="productId_1"
                                                           value="302adeed3cb6ad20fe1caf3031d62e18__m" />
                                                    <input type="hidden" id="productNo_1"
                                                           value="100451273002" />
                                                    <input type="hidden" id="minCanBuyNum_1"
                                                           value="1" />
                                                    <input type="hidden" id="maxCanBuyNum_1"
                                                           value="2147483647" />
                                                    
                                                    <input type="hidden" name="oldNum_100451273002"
                                                           id="oldNum_1" value="1" />
                                                </dd>
                                                <dd class="col_6 fl"><strong
                                                        class="corg">189</strong></dd>
                                                <dd class="col_7 fl">
                                                    <a class="JsFavorite" pid="79998028522c49549e56d070eb8af71b"
                                                       psize="M" prono="100451273002"
                                                       spid="302adeed3cb6ad20fe1caf3031d62e18__m" href="javascript:void(0)">移入收藏夹</a>
                                                    <br />
                                                    <a href="javascript:void(0)" prono="100451273002"
                                                       class="JsRemoveGood JsDel" pid="302adeed3cb6ad20fe1caf3031d62e18__m">删除</a>
                                                </dd>
                                        </dl>


                                        <div class="shpcrt_blank10 clearfix"></div>
                                    </div>
            </td>
        </tr>
        </tbody>
    </table>
    <ul class="shpcrt_operations">
        <li>
	            <label name="CNYcheckAllLabel" class="ygChkbox">
	                <input class="none" type="checkbox" id="CNYcheckEndAll" name="CNYcheckAll"
	                       checked="checked">
	                <i class="skin fl mt5 ml20 checked"></i>
	               	 全选
	            </label>
        </li>
        <li>
            <a class="JsFavorite" pid="all" href="javascript:;">移入收藏夹</a>
        </li>
        <li>
            <a class="JsRemoveGood" pid="all" href="javascript:;">删除</a>
        </li>
    </ul>


    <div class="shpcrt_opt clearfix">
        <div class="opt_bd fr">
            <table class="ygtjzx_ttl_lrtbl cart_reduce_price">
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="cen cart_gray_box_ft">
    <a href="/" class="cart_goon_link mt5 ml20 fl">继续购物</a>
        <div class="fl ml15 mt15">
            <a href="javascript:;" class="cblue ml20 clearShopcart"
               tradeCurrency="CNY">清空购物车</a>
        </div>
    <div class="fr">
        <strong>总计（不含运费
            ）</strong>：<strong class="cgray f16">&yen;</strong><strong
            class="corg f20">189</strong>
        <a href="/continueOrder.jhtml?tradeCurrency=CNY"
           class="cart_b_paybtn ml10 ">去结算</a>
    </div>
</div>

<!--//最低成单金额start-->
<!--//最低成单金额end-->

<!--//最大成单金额start-->
<!--//最大成单金额end-->
		</div>
	
		<div id="shoppingCartContainerKRW"></div>
	
		<div id="shoppingCartContainerKRW_ZF"></div>
	
		<div id="shoppingCartContainerHKD"></div>
<script type="text/javascript">
	checkProductNum();
 	function checkProductNum(){
 		var addProductNum=$('#addProductNum').val();
		var limitCartAddProductMaxNum=$('#limitCartAddProductMaxNum').val();
		if(addProductNum!='' && parseInt(addProductNum)>parseInt(limitCartAddProductMaxNum) && 0 != parseInt(limitCartAddProductMaxNum)){
			//alert("购物车最多存放"+limitCartAddProductMaxNum+"件商品，请编辑购物车!");
			//return false;
			ygDialog({ 
				title:'提示',
				content:'<br/><br/><h2 class="Red"><center>购物车最多存放'+limitCartAddProductMaxNum+'件商品，请编辑购物车!</center></h2>',
				width:300,
				height:120,
				lock:true
			});
		}
 	}
 </script>		
	<div class="clearfix cen mt15">
	    <div class="fr cgray cart_btinfo">
	        <p class="cart_bz">
	            购物保障：<i class="icon_zp"></i>100%正品<i class="icon_thh"></i>10天退换货<i class="icon_bcj"></i>10天补差价
	        </p>
	        <p>优惠券/礼品卡在下一步使用</p>
	        <p><a href="/shoppingcart/shoppingcart_advise.jhtml" target="_blank" class="cgray">帮助我们改进购物流程</a></p>
	    </div>
	</div>
	
	<!--凑单提醒start-->
	<div class="cen uc_main mt30">
        <h3 class="f16 c6 f_yahei"></h3>
        <div class="cart_recpro">
            <div class="uc_slide uc_cnlike rel zdtx">
                <div class="slide_hd"><h2></h2></div>
                <div class="slide_bd">
                    <a class="slide_lf abs" href="javascript:void(0);"></a>
                    <a class="slide_rt abs" href="javascript:void(0);"></a>
                    <p class="slide_page abs"></p>
                    <div class="slide_bd_c rel">
                        <ul class="uc_hpro_lst abs clearfix">
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<!--凑单提醒end-->
	<!--加价购推荐 start-->
	<div class="cen uc_main mt30">
        <h3 class="f16 c6 f_yahei"></h3>
        <div class="cart_recpro">
            <div class="uc_slide uc_cnlike rel jjg">
                <div class="slide_hd"><h2></h2></div>
                <div class="slide_bd">
                    <a class="slide_lf abs" href="javascript:void(0);"></a>
                    <a class="slide_rt abs" href="javascript:void(0);"></a>
                    <p class="slide_page abs"></p>
                    <div class="slide_bd_c rel">
                        <ul class="uc_hpro_lst abs clearfix">
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<!--//加价购推荐end>
	<!--//再买就满足活动 start--> 

    <div class="cen uc_main mt30">
	    <h3 class="f16 c6 f_yahei"></h3>
	        <div class="cart_recpro">
	            <div class="uc_slide uc_cnlike rel zmjmz0">
					<input type="hidden" class="loa" value="0" />
	                <div class="slide_hd"><h2></h2></div>
	                <div class="slide_bd">
	                    <a class="slide_lf abs" href="javascript:void(0);"></a>
	                    <a class="slide_rt abs" href="javascript:void(0);"></a>
	                    <p class="slide_page abs"></p>
	                    <div class="slide_bd_c rel">
	                        <ul class="uc_hpro_lst abs clearfix">
	                        </ul>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
    
     <div class="cen uc_main mt30">
	    <h3 class="f16 c6 f_yahei"></h3>
	        <div class="cart_recpro">
	            <div class="uc_slide uc_cnlike rel zmjmz1">
					<input type="hidden" class="loa" value="0" />
	                <div class="slide_hd"><h2></h2></div>
	                <div class="slide_bd">
	                    <a class="slide_lf abs" href="javascript:void(0);"></a>
	                    <a class="slide_rt abs" href="javascript:void(0);"></a>
	                    <p class="slide_page abs"></p>
	                    <div class="slide_bd_c rel">
	                        <ul class="uc_hpro_lst abs clearfix">
	                        </ul>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
    
     <div class="cen uc_main mt30">
	    <h3 class="f16 c6 f_yahei"></h3>
	        <div class="cart_recpro">
	            <div class="uc_slide uc_cnlike rel zmjmz2">
					<input type="hidden" class="loa" value="0" />
	                <div class="slide_hd"><h2></h2></div>
	                <div class="slide_bd">
	                    <a class="slide_lf abs" href="javascript:void(0);"></a>
	                    <a class="slide_rt abs" href="javascript:void(0);"></a>
	                    <p class="slide_page abs"></p>
	                    <div class="slide_bd_c rel">
	                        <ul class="uc_hpro_lst abs clearfix">
	                        </ul>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
    
     <div class="cen uc_main mt30">
	    <h3 class="f16 c6 f_yahei"></h3>
	        <div class="cart_recpro">
	            <div class="uc_slide uc_cnlike rel zmjmz3">
					<input type="hidden" class="loa" value="0" />
	                <div class="slide_hd"><h2></h2></div>
	                <div class="slide_bd">
	                    <a class="slide_lf abs" href="javascript:void(0);"></a>
	                    <a class="slide_rt abs" href="javascript:void(0);"></a>
	                    <p class="slide_page abs"></p>
	                    <div class="slide_bd_c rel">
	                        <ul class="uc_hpro_lst abs clearfix">
	                        </ul>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
    
     <div class="cen uc_main mt30">
	    <h3 class="f16 c6 f_yahei"></h3>
	        <div class="cart_recpro">
	            <div class="uc_slide uc_cnlike rel zmjmz4">
					<input type="hidden" class="loa" value="0" />
	                <div class="slide_hd"><h2></h2></div>
	                <div class="slide_bd">
	                    <a class="slide_lf abs" href="javascript:void(0);"></a>
	                    <a class="slide_rt abs" href="javascript:void(0);"></a>
	                    <p class="slide_page abs"></p>
	                    <div class="slide_bd_c rel">
	                        <ul class="uc_hpro_lst abs clearfix">
	                        </ul>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	<!--//再买就满足活动end>	
	
	<!--//根据购物车商品推荐 start-->
		<div id="similar_recommend" class="cen uc_main mt30" style="diplay:none">
	  		<h3 class="f16 c6 f_yahei">购买了您购物车中商品的顾客还买了</h3>
  			<div class="cart_recpro">
				<div class="uc_slide uc_cnlike rel gwcgm">
	        		<div class="slide_hd"><h2></h2></div>
		            <div class="slide_bd">
		                <a class="slide_lf abs" href="javascript:void(0);"></a>
		                <a class="slide_rt abs" href="javascript:void(0);"></a>
		                <p class="slide_page abs"></p>
		                <div style=" width:950px; overflow:hidden;margin:auto;">
			            	<div class="slide_bd_c rel" style="height:600px;width:950px;">
			                	<ul class="uc_hpro_lst abs clearfix ul1 "  style="height:600px;"  >			                	
																			
			                    </ul>
							</div>		
		                </div>			                
	                </div>
                </div>
            </div>
	   </div>
	
	<!--//根据购物车商品推荐end>

	<!--//您最近收藏的商品start-->
         <div class="cen uc_main mt30">
             <h3 class="f16 c6 f_yahei"></h3>
                 <div class="cart_recpro">
                     <div class="uc_slide uc_cnlike rel zjsc">
                         <div class="slide_hd"><h2></h2></div>
                         <div class="slide_bd">
                             <a class="slide_lf abs" href="javascript:void(0);"></a>
                             <a class="slide_rt abs" href="javascript:void(0);"></a>
                             <p class="slide_page abs"></p>
                             <div class="slide_bd_c rel">
                                 <ul class="uc_hpro_lst abs clearfix">
                                 </ul>
                         </div>
                     </div>
                 </div>
             </div>
        </div>

	<!--//您最近收藏的商品end--> 	
	
	<!--最近浏览过的商品startt-->
	<div class="cen uc_main mt30">
             <h3 class="f16 c6 f_yahei"></h3>
                 <div class="cart_recpro">
                     <div class="uc_slide uc_cnlike rel recently_browse">
                         <div class="slide_hd"><h2></h2></div>
                         <div class="slide_bd">
                             <a class="slide_lf abs" href="javascript:void(0);"></a>
                             <a class="slide_rt abs" href="javascript:void(0);"></a>
                             <p class="slide_page abs"></p>
                             <div class="slide_bd_c rel">
                                 <ul class="uc_hpro_lst abs clearfix">
                                 </ul>
                         </div>
                     </div>
                 </div>
             </div>
        </div>
	<!--//最近浏览过的商品end-->
	
	<!--底部start-->
	<div class="cgray cen footer">
	    	<span class="pr10">
	        	Copyright &copy; 2011-2014 Yougou Technology Co., Ltd. 
	        </span>
	        <span class="pr10">
	        	<a href="http://www.miibeian.gov.cn" target="_blank">粤ICP备09070608号-4</a>
	        </span>
	        <span class="pr10">
	        	增值电信业务经营许可证：<a href="http://www.miibeian.gov.cn" target="_blank">粤 B2-20090203</a>
	        </span>
	</div>
	<!--//底部end-->
<!--//问卷调查-->	


<script type="text/javascript" src="/js/home/yg.ucenter.js"></script>

<script type="text/javascript">
	$(function(){
	    getActiveRecommendList();
	    getSimilarRecommendList();
	    //16-03-29 轮播页
		var $ul = $('.ul1');
		var $li = $ul.find('li');
		$ul.css('width',$li.outerWidth()*$li.length);
		
		uc.proLfSlide(".zjcs");
		uc.proLfSlide(".zjll");
		uc.proLfSlide(".cdsp");
		uc.proLfSlide(".cjhd",9,9);
		uc.proLfSlide(".mjhd",9,9);		
		uc.proLfSlide(".gwcgm",5,5);
		
	});
</script>
	
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
<!-- Vizury数据(跟踪代码) -->
<script type="text/javascript" src="/js/home/mv.js"></script>
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
<!-- Google Code for &#21152;&#20837;&#36141;&#29289;&#36710; Remarketing List -->

<!-- Google Code Parameters -->
<script type="text/javascript">
var google_tag_params = {
    ecomm_prodid: '100451273',
    brand:'',
    firstCategoryName:'',
    subCategoryName:'',
    thirdCategoryName:'',
    ecomm_pagetype:'cart',
    webType:'yg',
    ecomm_totalvalue: 0
};
</script>
<!-- Google Code for Main List -->
<!-- Remarketing tags may not be associated with personally identifiable information or placed on pages related to sensitive categories. For instructions on adding this tag and more information on the above requirements, read the setup guide: google.com/ads/remarketingsetup -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 1016027598;
var google_conversion_label = "189vCLqHowQQzrO95AM";
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
</script>
<script type="text/javascript" src="/js/home/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/1016027598/?value=0&amp;label=189vCLqHowQQzrO95AM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>


<script type="text/javascript">
<!-- 
var bd_cpro_rtid="n1f4nf";
//-->
</script>
<script type="text/javascript" src="/js/home/rt.js"></script>
<noscript>
<div style="display:none;">
<img height="0" width="0" style="border-style:none;" src="/images/home/rt.jpg" />
</div>
</noscript>
<!-- 好耶埋码 -->
<script type="text/javascript">
  var idgJsHost = (("https:" == document.location.protocol) ? "https" : "http");
  var idgDomain = idgJsHost == "http" ? "1" : "2";
  document.write(unescape("%3Cscript src='" + idgJsHost + "://" + idgDomain + ".allyes.com.cn/idigger_yg.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
 var s={};
 //用户ID
 	s.shopcart="100451273";
</script>
<script type="text/javascript">
try {
  var idgTracker = _alysP.init("mso","T-000436-01", "");
  idgTracker._setTrackPath(idgJsHost + '://idigger.allyes.com/main/adftrack');
  idgTracker._setECM(s);
  idgTracker._trackPoint();
} catch(err) {}
</script><script type="text/javascript">
var _mvq = _mvq || [];
_mvq.push(['$setAccount', 'm-344-0']);
_mvq.push(['$setGeneral', 'cartview', /*用户名*/'', /*用户id*/ '']);
_mvq.push(['$logConversion']);
_mvq.push(['$addItem', '',/*商品id*/ '100451273','','','']);
_mvq.push(['$logData']);
</script>

<!-- 百度DSP start-->

<script type="text/javascript">
var dsp_config = {
commodities: [
	{no:'100451273002',price:'299.00',number:'1'}
],
bd_list_type: 'ecom_cart'
}
</script>
<script type="text/javascript">
    $(document).ready(function () {
        if (typeof dsp_config !== 'undefined') {
            if (dsp_config['bd_list_type'] == 'ecom_reg') {
                $("body").append($("<iframe style=\"display:none;width: 1px; border: 0px none; position: absolute; left: -100px; top: -100px; height: 1px;\" src=\"" + "/inc/code_iframe.shtml?url=registerEmailSucceed" + "\"></iframe>\""));
            } else if (dsp_config['bd_list_type'] == 'ecom_cart') {
                $("body").append($("<iframe style=\"display:none;width: 1px; border: 0px none; position: absolute; left: -100px; top: -100px; height: 1px;\" src=\"" + "/inc/code_iframe.shtml?url=order" + "\"></iframe>\""));
            } else if (dsp_config['bd_list_type'] == 'ecom_order') {
                $("body").append($("<iframe style=\"display:none;width: 1px; border: 0px none; position: absolute; left: -100px; top: -100px; height: 1px;\" src=\"" + "/inc/code_iframe.shtml?url=continueOrder" + "\"></iframe>\""));
            } else if (dsp_config['bd_list_type'] == 'ecom_pay_submit') {
                $("body").append($("<iframe style=\"display:none;width: 1px; border: 0px none; position: absolute; left: -100px; top: -100px; height: 1px;\" src=\"" + "/inc/code_iframe.shtml?url=payOnline" + "\"></iframe>\""));
            } else if (dsp_config['bd_list_type'] == 'ecom_pay_offline') {
                $("body").append($("<iframe style=\"display:none;width: 1px; border: 0px none; position: absolute; left: -100px; top: -100px; height: 1px;\" src=\"" + "/inc/code_iframe.shtml?url=createOrder" + "\"></iframe>\""));
            } else if (dsp_config['bd_list_type'] == 'ecom_search') {
                $("body").append($("<iframe style=\"display:none;width: 1px; border: 0px none; position: absolute; left: -100px; top: -100px; height: 1px;\" src=\"" + "/inc/code_iframe.shtml?url=search_list" + "\"></iframe>\""));
            } else if(dsp_config['bd_list_type'] == 'ecom_view'){
                $("body").append($("<iframe style=\"display:none;width: 1px; border: 0px none; position: absolute; left: -100px; top: -100px; height: 1px;\" src=\"" + "/inc/code_iframe.shtml?url=prod-csku"+ "\"></iframe>\""));
            } else {
                $("body").append($("<iframe style=\"display:none;width: 1px; border: 0px none; position: absolute; left: -100px; top: -100px; height: 1px;\" src=\"" + "/inc/code_iframe.shtml" + "\"></iframe>\""));
            }
        }
    });
</script> 
<!-- 百度DSP end-->

</body>
</html>
