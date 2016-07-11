//焦点图
//theme:number/title/thumb
$.fn.VSfocus = function (opts) {
    var ofuntion={
        clear:function(o){
            o.removeClass('vsfocus vsfocusnumber vsfocustitle vsfocusthumb').find('.vsfocus_preNext').remove();
            o.find('.vsfocus_btn').remove();
            o.find('ul').css({'left':0,'width':'auto'});
        },
        reload:function(o){
            var opt = o.data('opt');
            o.VSfocus('clear').VSfocus(opt);
        }
    }
    if(typeof(opts)=='string'){
        return this.each(function(){
            ofuntion[opts]($(this));
        });

    }else{
        var opt = $.extend({
            speed: 5000,
            direction: 'top',
            eventType: 'click',
            theme: 'number',
            isPre: false,
            isOpacity: false,
            isTotal: false,
            isAutoPlay: true,
            showBtn: 'always',
            isClone:false,
            isLoop:true
        }, opts || {});
        return this.each(function () {
            var o = $(this);
            o.data('opt',opt);
            var sWidth = o.width(),sHeight=o.height(); //获取焦点图的宽度（显示面积）
            var len = $("ul li", o).length; //获取焦点图个数
            //alert(len)
            if (len < 2) { return; }
            var lis = $("img", o);
            var index = 0;
            var picTimer;
            if(opt.isClone){o.data('dom',o.html())}
            o.addClass('vsfocus').find('li').css({'width':sWidth,'height':sHeight});
            //添加数字按钮和按钮后的半透明条，还有上一页、下一页两个按钮
            var btn = '';
            if (opt.theme != 'none') {
                o.addClass('vsfocus'+opt.theme)
                btn = "<ol class='vsfocus_btn'>";
                for (var i = 0; i < len; i++) {
                    switch (opt.theme) {
                        case 'title':
                            btn += '<li>' + lis.eq(i).attr('alt') + '</li>';
                            break;
                        case 'thumb':
                            btn += '<li><img src="' + lis.eq(i).attr('src') + '"/></li>';
                            break;
                        case 'number':
                            btn += '<li>' + (i + 1) + '</li>';
                            break;
                    }
                }
                btn += "</ol>";
            }
            if (opt.isPre) {
                btn += '<div class="vsfocus_preNext vsfocus_pre" index="0">‹</div><div class="vsfocus_preNext vsfocus_next" index="0">›</div>';
            }
            if (opt.isTotal) {
                btn += '<div class="total">/' + len + '</div>';
            }
            o.append(btn);
            if(!opt.isLoop){
                $(".vsfocus_pre", o).addClass('vsfocus_disabled');
            }
            if (opt.showBtn == 'hover') {
                var btns = $('.slide-img').siblings().hide();
                o.hover(function () {
                    btns.show('fast');
                }, function () { btns.hide('fast'); })
            }
            //为小按钮添加鼠标滑入事件，以显示相应的内容
            $(".vsfocus_btn li", o).mouseenter(function () {
                index = $(".vsfocus_btn li", o).index(this);
                showPics(index);
            }).eq(0).trigger("mouseenter");

            //上一页、下一页按钮透明度处理
            if (opt.opacity) {
                $(".vsfocus_preNext", o).css("opacity", opt.opacity).hover(function () {
                    $(this).stop(true, false).animate({ "opacity": "0.5" }, 300);
                }, function () {
                    $(this).stop(true, false).animate({ "opacity": "0.2" }, 300);
                });
            }
            //上一页按钮
            $(".vsfocus_pre", o).click(function () {
                if($(this).hasClass('vsfocus_disabled')){return}
                $(".vsfocus_next", o).removeClass('vsfocus_disabled');
                index -= 1;
                if (index == -1) {
                    if(opt.isLoop){
                        index = len - 1;
                    }else{return;}
                }
                showPics(index);
                if(index==0&&!opt.isLoop){
                    $(this).addClass('vsfocus_disabled');
                }
                $(".vsfocus_preNext", o).attr('index',index);
            });

            //下一页按钮
            $(".vsfocus_next", o).click(function () {
                if($(this).hasClass('vsfocus_disabled')){return}
                $(".vsfocus_pre", o).removeClass('vsfocus_disabled');
                index += 1;
                if (index == len) {
                    if(opt.isLoop){
                        index = 0;
                    }else{
                        $(this).addClass('vsfocus_disabled')
                        return;
                    }
                }
                showPics(index);
                if(index==len-1&&!opt.isLoop){
                    $(this).addClass('vsfocus_disabled');
                }
                $(".vsfocus_preNext", o).attr('index',index);
            });

            //本例为左右滚动，即所有li元素都是在同一排向左浮动，所以这里需要计算出外围ul元素的宽度
            $("ul", o).css("width", sWidth * (len));

            //鼠标滑上焦点图时停止自动播放，滑出时开始自动播放
            if (opt.isAutoPlay) {
                o.hover(function () {
                    clearInterval(picTimer);
                }, function () {
                    picTimer = setInterval(function () {
                        showPics(index);
                        index++;
                        if (index == len) { index = 0; }
                    }, opt.speed);
                }).trigger("mouseleave");
            }
            //显示图片函数，根据接收的index值显示相应的内容
            function showPics(index) { //普通切换
                var nowLeft = -index * sWidth; //根据index值计算ul元素的left值
                $("ul", o).stop(true, false).animate({ "left": nowLeft }, 300); //通过animate()调整ul元素滚动到计算出的position
                $(".vsfocus_btn li", o).stop(true, false).removeClass('vsfocus_btn_on').eq(index).addClass('vsfocus_btn_on')
            }

        })
    }
}
//焦点图
$('.focusimg_box').VSfocus();
//品牌墙
$('.brand_wall').VSfocus({isPre:true,theme:'none',isAutoPlay:false,isLoop:true});


	//隐藏没有子分类的父级
	var channelNav=$('.chn_cat');

	if($('.pop',channelNav).length==0){
		channelNav.remove();
	}else{
		$('.pop',channelNav).each(function(){
			var $this = $(this);
			if($this.find('a').size()<=0){
				$this.parent().remove();
			}
		});	
		//频道页左侧分类
		$('li',channelNav).hover(function(){
			var $this = $(this),pop=$this.find('.pop');
			$this.addClass('on');
			pop.show();
		},function(){
			$(this).removeClass('on').find('.pop').hide();
		});
	}
	//图片懒加载
	$('#focusImg img:first,ul.prolist img,ul.imglst img').lazyload();
	//tab轮播
	var tabtime = 3;
	var tabSwitchOption = {
		currCls: 'on',
		circular:true,
		trigger:'li'
	};
	//热销排行
	$(".ind_md4 .tab").ygSwitch(".ind_md4 .imglst",tabSwitchOption).autoplay(tabtime);		
	 //tab
	 $('.chn_md').each(function(){
		var $this = $(this);
		$this.find('.tabhd ul').ygSwitch($this.find('.bd'),tabSwitchOption).autoplay(tabtime);
	 });
	//图片列表显示文字浮层
	$('.imglst li').hover(function(){
		$(this).addClass('hover').find('.proinfolayer').stop(true,true).fadeTo('fast',0.8);
	},function(){
		$(this).removeClass('hover').find('.proinfolayer').stop(true,true).fadeOut('fast');
	});
	//新品发布 logo
	$('.brand_wall a').hover(function(){
		$(this).find('.logolayer').show();
	},function(){
		$(this).find('.logolayer').hide();
	});	
	if($('#ygGuid')[0]){
		//优购导购品牌
		$("#ygGuid .item_bom").ygSwitch('#brand-list>a',{
			nextBtn:'#brand-right',
			prevBtn:'#brand-left',
			steps:48,
			lazyload:true
		});
	}
	//频道页导航样式
	$('.heel:odd').addClass('odd');

//飘窗

 ;(function(){
 /**
 * IE下 window.onresize 有bug 可以使用debounce封装监听函数
 */

/**
 *
 * @param {Function} callback 回调函数
 * @param {Integer} delay   延迟时间，单位为毫秒(ms)，默认150
 * @param {Object} context  上下文，即this关键字指向的对象，默认为null
 * @return {Function}
 */
    function debounce(callback, delay, context){
        if (typeof(callback) !== "function") {
            return;
        }
        delay = delay || 150;
        context = context || null;
        var timeout;
        var runIt = function(){
            callback.apply(context);
        };
        return (function(){
            window.clearTimeout(timeout);
            timeout = window.setTimeout(runIt, delay);
        });
    }

//控制右侧浮动飘层
    var ele=$(".floatlayout"),w_flt;
	//设置位置（浏览器大于页面+浮窗宽度，则显示紧贴视窗右侧，否则紧贴1190页面右侧）
    function setElepos(){
        var _windowW=$(window).width();
        if(_windowW>1190+w_flt){
            var left=(_windowW-1190)/2+1190;
            ele.css("left",left+'px');
        }else{
            ele.css({"left":'auto',"right":0});
        }
    }
	
    if(ele.length>0){
        w_flt=ele.width()*2;
        var w_screen=window.screen.width;
        if(w_screen<1190+w_flt){
            ele.css({"left":'auto',"right":0});
        }else{
            ele.css("right",'auto');
            window.onresize= debounce(setElepos, 300);
            setElepos();
        }

        var isIE6 = $.browser.msie && $.browser.version == "6.0"
        if(isIE6){

            ele.css('position','absolute');
            var _windowH = $(window).height(),_docH = $(document).height();

            $(window).scroll(function(){
                var scrollTop = $(document).scrollTop();
                var top;
                if(scrollTop<_docH-_windowH-10){
                    top = scrollTop+_windowH-300;
                    ele.css('top',top);
                }

            });
        }
	}
 
 
 })();
 
//resetlayout
function resetLayout(){
	if($('body').attr('id')==='ppqjd')
	{
		return;
	}
	if($(window).width()<1190){
		$('body').removeClass('selfadaptat');
	}else{
		$('body').addClass('selfadaptat');
	}		
}
$(function(){
	//自适应
	resetLayout();
	$(window).resize(resetLayout);
});


//积分换券
$('.integral_exchange ').click(function(){
    if(confirm('是否确认兑换？')){
        var activeId = $(this).attr("redeemId");
        $.ajax({
            type: "POST",
            data:{"activeId" : activeId},
            dataType : "json",
            url : "/my/redeemCoupon.jhtml",
            success: function(data){
                var state = parseInt(data.state);
                if(state == 1){
                    ygDialog({
                        title:'提示',
                        width:250,
                        height:100,
                        content:'<div style="padding:20px 60px;line-height:25px;font-size:14px;">兑换成功<br/>立即<a class="cblue" href="http://www.yougou.com/my/coupon.jhtml?couponState=1" target="_blank">查看</a>我的优惠券</div>'
                    });
                }else if(state == 3){
                    ygDialog({url:"/my/checkMobile.jhtml?activeId="+activeId+"&type=1&r="+Math.random(),title:"手机绑定",width:460,height:300,closable:true,loaded:YGM.Base.SafeCheck});
                }else if(state == 2){
                    alert(data.result);
                }else if(state == 0){
                    ygDialog({url:"/my/checkMobile.jhtml?activeId="+activeId+"&type=2&r="+Math.random(),title:"手机安全验证",width:460,height:300,closable:true,loaded:YGM.Base.SafeCheck});
                }else if(state == 9){
                    YouGou.Biz.loginPop({title : '您尚未登录',lock: true,closable:true,refreshTopWin:true});
                }
            }
        });
    }
    return false;
});