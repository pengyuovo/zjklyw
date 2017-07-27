<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="renderer" content="webkit"><!--默认用360极速模式渲染-->
	<title><?php echo ($vo["title"]); ?></title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" href="/Public/home/common/font-awesome-4.3.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="/Public/home/common/bootstrap_3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="/Public/home/common/css/buttons.css">
	<!--<link rel="stylesheet" href="common/css3-animate-css/css/animate.min.css">-->
	<link rel="stylesheet" href="/Public/home/common/css/common.css">
	<link rel="stylesheet" href="/Public/home/css/article.css">
	<script src="/Public/home/common/js/jquery-1.9.1.min.js"></script>

</head>
<body class="index">
   <?php
$config=D("Basic")->select(); $navs=D("Menu")->getBarMenus(); ?>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title><?php echo ($config["title"]); ?></title>
	<meta name="description" content="<?php echo ($config["description"]); ?>"/>
	<meta name="keywords" content="<?php echo ($config["keywords"]); ?>"/>
	<link rel="stylesheet" href="/Public/home/common/font-awesome-4.3.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="/Public/home/common/bootstrap_3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="/Public/home/common/css/buttons.css">
	<!--<link rel="stylesheet" href="common/css3-animate-css/css/animate.min.css">-->
	<link rel="stylesheet" href="/Public/home/common/css/common.css">
	<link rel="stylesheet" href="/Public/home/css/zjkly_main.css">
	<script src="/Public/home/common/js/jquery-1.9.1.min.js"></script>
<style>
    nav ul .active{
        background-color: #0090ff;
        color: #fff !important;
    } 
    </style>
</head> 
<body class="index">

<header>
	<nav>
		<a href="/"><img src="<?php echo (IMG_URL); ?>/logo.png" class="logo left"/></a>
		<ul class="nav_l left">
			<li><a href="/" >首页</a></li>
			<?php if(is_array($navs)): foreach($navs as $key=>$vo): ?><li><a href="/index.php?c=cat&id=<?php echo ($vo["menu_id"]); ?>"><?php echo ($vo["name"]); ?></a></li><?php endforeach; endif; ?>
			<li><a href="/index.php?c=hotel" <?php if($result['catId'] == 1): ?>class="active"<?php endif; ?>>客栈</a></li>
			<li><a href="/index.php?c=alljd" <?php if($result['catId'] == 1): ?>class="active"<?php endif; ?>>景点全览</a></li>
		</ul>

		<ul class="nav_r right">
			<?php
 if (homeLoginUsername()){ ?>
			<a href=""><?php echo homeLoginUsername()?></a>><a href="<?php echo U('member/loginout');?>">退出</a>
			<?php
 }else{ ?>
			<a href="http://www.zjkly.com.cn/Public/home/signin.html">登录</a>
			<a href="http://www.zjkly.com.cn/Public/home/reg.html">注册</a></li>
			<li><a href="login.html"><i class="fa fa-qq"></i></a></li>
			<li><a href="login.html"><i class="fa fa-weixin"></i></a></li>
			<?php
 } ?>
			
		</ul>
	</nav>
</header>


	
	<div class="main_box">
	  <?php if(is_array($result['arr'])): foreach($result['arr'] as $key=>$vo): ?><section class="goods">
			<div class="left goods_imgs">
				<a href="article.html"> 
					<img class="b_radius" src="<?php echo ($vo["thumb"]); ?>" > 
				</a>
			</div>
        <div class="right goods_price">
			
				<h1><?php echo ($vo["title"]); ?></h1>
				
				<p class="ellipsis"><?php echo ($vo["description"]); ?></p>		
				<div style="overflow:hidden;">
                    <div class="price">价格:<span>￥<b id="single_price"><?php echo ($vo["price"]); ?></b></span>起/人</div>
				<div class="cantuan">参团人数:<span><?php echo ($vo["ctrs"]); ?></span>人</div>
				</div>
				<div class="goods_tab">
					<ul class="tabs">  
						<li class="tab_active"><a href="#tab1"><i class="fa fa-circle tab_act"></i> 项目包含</a></li>
						<li><a href="#tab2"><i class="fa fa-circle tab_act"></i> 项目不含</a></li>
					</ul>
					<div class="tab_container">  
						<div id="tab1" class="tab_content" style="display: block; ">
							<ol><li><?php echo ($vo["bhxm"]); ?></li><ol>
						</div>
						<div id="tab2" class="tab_content" style="display: none; ">
							<?php echo ($vo["bbhxm"]); ?>
						</div>
					</div>
				</div>
                <div class="add_num">
                    参团人数：<input type="text" class="form-control" id="p_num" value="1"/>
                    <a href="<?php echo U('order/confirm');?>" class="button button-glow button-rounded button-caution right">￥<span id="total"><?php echo ($vo["price"]); ?></span><cite></cite>立即报名</a>
                </div>
		</section><?php endforeach; endif; ?>
		<section>
			<div class="article_ad" style="display: none;">广告</div>
			
			<!--左侧列表-->
				<?php $vo=$result['content']; ?>	
			<div class="common_list left">
				<div class="article">
		       
					<h1><?php echo ($vo["title"]); ?></h1>
					
					<div class="article_icons">
						<span><i class="fa fa-eye m_leftright5"></i>浏览量&nbsp;<i>/</i>&nbsp;2123</span>
						<span><i class="fa fa-comment m_leftright5"></i>留言&nbsp;<i>/</i>&nbsp;2123</span>
						<span><i class="fa fa-thumbs-up m_leftright5"></i>赞&nbsp;<i>/</i>&nbsp;2123</span>
						<span>2016-05-21 00:20</span>
					</div>
					
					<div class="zysx">
						<span><i class="fa fa-clock-o m_leftright5"></i>出发时间&nbsp;<i>/</i>&nbsp;2016-05-11</span>
						<span><i class="fa fa-moon-o m_leftright5"></i>出行天数&nbsp;<i>/</i>&nbsp;2天</span>
						<span><i class="fa fa-user m_leftright5"></i>人物&nbsp;<i>/</i>&nbsp;小两口</span>
						<span><i class="fa fa-cny m_leftright5"></i>人均费用&nbsp;<i>/</i>&nbsp;600元</span>
					</div>
					<script>
						$(".article_content").html(<?php echo ($vo["content"]); ?>);
					</script>
					<div class="article_content">
						<?php echo ($vo["content"]); ?>
					</div>
					
				</div>
			</div>
			
			<!--/左侧列表-->
			<!--右侧评论-->
			<div class="ping_list right">
				<div class="ping_title"><h3>最新目的地点评</h3></div>
				<div class="ping_item">
					<img class="ping_tx" src="/Public/home/img/tx.jpg"/>
					<div class="right ping_text">
						<h4 class="ellipsis">林语隐客<span>点评了</span><cite>好莱坞标志</cite></h4>
						<div class="star"></div>
						<p>到此一游必拍点，因时间关系，远远的拍了几张，如果不是影迷，无需刻意拍摄<a href="#">全文</a></p>
					</div>
				</div>
				<div class="ping_item">
					<img class="ping_tx" src="/Public/home/img/tx.jpg"/>
					<div class="right ping_text">
						<h4 class="ellipsis">林语隐客<span>点评了</span><cite>好莱坞标志</cite></h4>
						<div class="star"></div>
						<p>到此一游必拍点，因时间关系，远远的拍了几张，如果不是影迷，无需刻意拍摄<a href="#">全文</a></p>
					</div>
				</div>
				<div class="ping_item">
					<img class="ping_tx" src="/Public/home/img/tx.jpg"/>
					<div class="right ping_text">
						<h4 class="ellipsis">林语隐客<span>点评了</span><cite>好莱坞标志</cite></h4>
						<div class="star"></div>
						<p>到此一游必拍点，因时间关系，远远的拍了几张，如果不是影迷，无需刻意拍摄<a href="#">全文</a></p>
					</div>
				</div>
				<div class="ping_item">
					<img class="ping_tx" src="/Public/home/img/tx.jpg"/>
					<div class="right ping_text">
						<h4 class="ellipsis">林语隐客<span>点评了</span><cite>好莱坞标志</cite></h4>
						<div class="star"></div>
						<p>到此一游必拍点，因时间关系，远远的拍了几张，如果不是影迷，无需刻意拍摄<a href="#">全文</a></p>
					</div>
				</div>
				
				<div class="article_tag"><a href="#" class="bc_b">热门标签</a><a href="#">天路</a><a href="#">冬奥滑雪</a><a href="#">草原音乐节</a><a href="#">篝火晚会</a><a href="#">鸡鸣驿</a><a href="#">骆驼</a><a href="#">滑翔伞</a></div>
			</div>
			<!--/右侧评论-->
		</section>
		
		<!--评论-->
		<section>
			<div id="pinglun_box">
			<!-- UY BEGIN -->
			<div id="uyan_frame"></div>
			<script type="text/javascript" src="http://v2.uyan.cc/code/uyan.js?uid=2131776"></script>
			<!-- UY END -->
			</div>
		</section>
	</div>
	<footer>
		<div class="foot">
			<p>使用说明|意见反馈|免责条款|社区代理</p>
			<p>ICP备案编号：京ICP备14051536号-1 版权所有：张家口旅游网　建议您使用1366*768分辨率，ie8以上浏览器浏览本站</p>
		</foot>
	</footer>

	
	<script src="/Public/home/common/js/headroom.min.js"></script>
	<script src="/Public/home/js/zjkly_main.js"></script>
	<script>
	$(document).ready(function() {
        //price tab
		$("ul.tabs li").mouseover(function() {
	        $(this).addClass("tab_active").siblings().removeClass("tab_active");
	        $(".tab_content").hide();
	        var activeTab = $(this).find("a").attr("href");
	        $(activeTab).show();
	        return false;  
	    }); 
        //total price
        var single_price = $('#single_price').html();
        var total_end = $('#total').html();
        $('#p_num').bind("input propertychange",function(){
            var p_num = $(this).val();
            var total = single_price * p_num;
            total_end = total;
            $('#total').html(total_end);
        });
    });
	</script>
</body>
</html>