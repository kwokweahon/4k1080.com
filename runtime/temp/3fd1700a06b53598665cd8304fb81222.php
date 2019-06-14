<?php if (!defined('THINK_PATH')) exit(); /*a:11:{s:39:"template/stui_tpl/html/index/index.html";i:1550492606;s:61:"/www/wwwroot/4k1080.com/template/stui_tpl/html/seo/index.html";i:1531566026;s:65:"/www/wwwroot/4k1080.com/template/stui_tpl/html/block/include.html";i:1550760283;s:62:"/www/wwwroot/4k1080.com/template/stui_tpl/html/block/head.html";i:1550586224;s:63:"/www/wwwroot/4k1080.com/template/stui_tpl/html/index/slide.html";i:1560158118;s:62:"/www/wwwroot/4k1080.com/template/stui_tpl/html/index/list.html";i:1560161390;s:65:"/www/wwwroot/4k1080.com/template/stui_tpl/html/block/vod_box.html";i:1550318929;s:70:"/www/wwwroot/4k1080.com/template/stui_tpl/html/block/vod_box_rank.html";i:1560423880;s:62:"/www/wwwroot/4k1080.com/template/stui_tpl/html/index/rank.html";i:1550492621;s:62:"/www/wwwroot/4k1080.com/template/stui_tpl/html/index/link.html";i:1550322412;s:62:"/www/wwwroot/4k1080.com/template/stui_tpl/html/block/foot.html";i:1560490596;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <title><?php echo $maccms['site_name']; ?></title>
<meta name="keywords" content="<?php echo $maccms['site_keywords']; ?>" />
<meta name="description" content="<?php echo $maccms['site_description']; ?>" />   
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<link rel="shortcut icon" href="/statics/img/favicon.ico" type="image/x-icon" />	
<link rel="stylesheet" href="/statics/font/iconfont.css" type="text/css" />
<link rel="stylesheet" href="/statics/css/stui_block.css" type="text/css" />
<link rel="stylesheet" href="/statics/css/stui_block_color.css" type="text/css" />
<link rel="stylesheet" href="/statics/css/stui_default.css" type="text/css" />
<script type="text/javascript" src="/statics/js/jquery.min.js"></script>
<script type="text/javascript" src="/statics/js/stui_default.js"></script>
<script type="text/javascript" src="/statics/js/stui_block.js "></script>
<script type="text/javascript" src="/statics/js/home.js"></script>
<script>var maccms={"path":"","mid":"<?php echo $maccms['mid']; ?>","url":"<?php echo $maccms['site_url']; ?>","wapurl":"<?php echo $maccms['site_wapurl']; ?>","mob_status":"<?php echo $maccms['mob_status']; ?>"};</script>
<!--[if lt IE 9]>
<script src="https://cdn.staticfile.org/html5shiv/r29/html5.min.js"></script>
<script src="https://cdn.staticfile.org/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
	

</head>
<body>
	<header class="stui-header__top clearfix" id="header-top">
	<div class="container">	
		<div class="row">
			<div class="stui-header_bd clearfix">					
			    <div class="stui-header__logo">
					<a class="logo" href="<?php echo $maccms['path']; ?>"></a>										  
				</div>
				<div class="stui-header__side">					
					<ul class="stui-header__user">
						<?php if($maccms['user_status'] == 1): ?>
						<li>
							<a class="mac_user" href="javascript:;"><i class="icon iconfont icon-account"></i></a>
						</li>
						<?php else: ?>
						<li>
							<a href="javascript:;"><i class="icon iconfont icon-clock"></i></a>
							<div class="dropdown history">					
								<h5 class="margin-0 text-muted">
									<a class="historyclean text-muted pull-right" href="">清空</a>
									播放记录
								</h5>
								<ul class="clearfix" id="stui_history">
								</ul>
							</div>
						</li>
						<?php endif; ?>
					</ul>
					<script type="text/javascript" src="<?php echo $maccms['path']; ?>statics/js/jquery.autocomplete.js"></script>
					<div class="stui-header__search"> 
				        <form id="search" name="search" method="get" action="<?php echo mac_url('vod/search'); ?>" onSubmit="return qrsearch();">
	    					<input type="text" name="wd" class="mac_wd form-control" value="<?php echo $param['wd']; ?>" placeholder="请输入关键词..." autocomplete="off"/>
							<button class="submit" id="searchbutton" type="submit"><i class="icon iconfont icon-search"></i></button>							
						</form>
				  	</div>
				</div>									
				<ul class="stui-header__menu type-slide">
					<li <?php if($maccms['aid'] == 1): ?>class="active"<?php endif; ?>><a href="<?php echo $maccms['path']; ?>">首页</a></li>
					<?php $__TAG__ = '{"num":"10","order":"asc","by":"sort","ids":"parent","id":"vo","key":"key"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
	                <li <?php if(($vo['type_id'] == $GLOBALS['type_id'] || $vo['type_id'] == $GLOBALS['type_pid'])): ?>class="active"<?php endif; ?>><a href="<?php echo mac_url_type($vo); ?>"><?php echo $vo['type_name']; ?></a></li>
	                <?php endforeach; endif; else: echo "" ;endif; ?>
	                <li <?php if($maccms['aid'] == 30): ?>class="active"<?php endif; ?>><a href="<?php echo mac_url_topic_index(); ?>">专题</a></li>
				</ul>				
			  </div>		 							    
		</div>
	</div>
</header>
<script type="text/javascript">
	$(".stui-header__user li,.stui-header__menu li").click(function(){
		$(this).find(".dropdown").toggle();
	});
</script>

    <div class="container">
        <div class="row">
			<!-- D072 by v.shoutu.cn -->
<div class="stui-pannel stui-pannel-bg clearfix">
	<div class="stui-pannel-box clearfix">
		<div class="stui-pannel-bd">
			<div class="carousel carousel_center col-pd flickity-page">
				<?php $__TAG__ = '{"num":"10","type":"all","order":"desc","by":"time","level":"5","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
		    	<div class="col-md-2 col-xs-1 list">
					<a href="<?php echo mac_url_vod_detail($vo); ?>" class="stui-vodlist__thumb active" title="<?php echo $vo['vod_name']; ?>" style="background: url(<?php echo mac_url_img($vo['vod_pic_slide']); ?>) no-repeat; background-position:50% 50%; background-size: cover; padding-top: 45%;">
						<span class="pic-text text-center"><?php echo $vo['vod_name']; ?></span>
					</a>
				</div>
				<?php endforeach; endif; else: echo "" ;endif; ?>
			</div>
		</div>
	</div>
</div><!-- 幻灯片 -->
        	<!-- D014 by v.shoutu.cn -->
<?php $__TAG__ = '{"ids":"parent","order":"asc","by":"sort","id":"vo1","key":"key1","flag":"vod"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key1 = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo1): $mod = ($key1 % 2 );++$key1;?>						
<div class="stui-pannel stui-pannel-bg clearfix">	
	<div class="stui-pannel-box clearfix">	
		<div class="stui-pannel_bd clearfix">								
			<div class="col-lg-wide-75 col-xs-1 padding-0">	
				<div class="stui-pannel_hd">
					<div class="stui-pannel__head active bottom-line clearfix">
						<a class="more text-muted pull-right" href="<?php echo mac_url_type($vo1,[],'show'); ?>">更多 <i class="icon iconfont icon-more"></i></a>
						<h3 class="title">
							<img src="<?php echo $maccms['path']; ?>statics/icon/icon_<?php echo $vo1['type_id']; ?>.png"/>
							<a href="<?php echo mac_url_type($vo1,[],'show'); ?>">最新<?php echo $vo1['type_name']; ?></a>
						</h3>						
						<ul class="nav nav-text pull-right hidden-sm hidden-xs">
							<?php $__TAG__ = '{"parent":"'.$vo1['type_id'].'","order":"asc","by":"sort","id":"vo2","key":"key2"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key2 = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo2): $mod = ($key2 % 2 );++$key2;?>
		                    <li><a href="<?php echo mac_url_type($vo2,[],'show'); ?>" class="text-muted"><?php echo $vo2['type_name']; ?></a> <span class="split-line"></span></li>
		                    <?php endforeach; endif; else: echo "" ;endif; ?>
						</ul>
					</div>																		
				</div>
				<ul class="stui-vodlist clearfix">											
					<?php $__TAG__ = '{"num":"12","type":"'.$vo1['type_id'].'","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
					<li class="col-md-6 col-sm-4 col-xs-3">
						<div class="stui-vodlist__box">
	<a class="stui-vodlist__thumb lazyload" href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>" data-original="<?php echo mac_url_img($vo['vod_pic']); ?>">						
		<span class="play hidden-xs"></span>		
		<span class="pic-text text-right"><?php if($vo['vod_remarks'] != ''): ?><?php echo $vo['vod_remarks']; elseif($vo['vod_serial'] > 0): ?>第<?php echo $vo['vod_serial']; ?>集<?php else: ?>已完结<?php endif; ?></span>
	</a>									
	<div class="stui-vodlist__detail">
		<h4 class="title text-overflow"><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a></h4>
		<p class="text text-overflow text-muted hidden-xs"><?php echo mac_default($vo['vod_actor'],'内详'); ?></p>
	</div>												
</div>														
					</li>
					<?php endforeach; endif; else: echo "" ;endif; ?> 
				</ul>
				<ul class="stui-vodlist__text col-pd clearfix hidden-xs">
					<?php $__TAG__ = '{"num":"24","type":"'.$vo1['type_id'].'","order":"desc","by":"time","start":"13","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
					<li class="col-md-4 col-sm-3 col-xs-1 padding-0">
						<a class="top-line-dot text-overflow" href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>">
							<span class="text-muted pull-right"><?php if($vo['vod_remarks'] != ''): ?><?php echo $vo['vod_remarks']; elseif($vo['vod_serial'] > 0): ?>第<?php echo $vo['vod_serial']; ?>集<?php else: ?>已完结<?php endif; ?></span>
							<?php echo mac_substring($vo['vod_name'],12); ?>
						</a>									
					</li>
					<?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
			</div>
			<div class="col-lg-wide-25 hidden-md hidden-sm hidden-xs">
				<div class="stui-pannel_hd">
					<div class="stui-pannel__head active bottom-line clearfix">
						<h3 class="title">
							<img src="<?php echo $maccms['path']; ?>statics/icon/icon_12.png"/>
							<a href="<?php echo mac_url_type($vo1,[],'show'); ?>"><?php echo $vo1['type_name']; ?>周榜单</a>
						</h3>						
					</div>																		
				</div>
				<ul class="stui-vodlist__text active col-pd clearfix">
					<?php $__TAG__ = '{"num":"20","type":"'.$vo1['type_id'].'","order":"desc","by":"hits_week","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
						<li class="bottom-line-dot">
	<a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>">
		<span class="text-muted pull-right hidden-md">
			<?php if($vo['vod_remarks'] != ''): ?><?php echo mac_substring($vo['vod_remarks'],12); elseif($vo['vod_serial'] > 0): ?>第<?php echo $vo['vod_serial']; ?>集<?php else: ?>已完结<?php endif; ?>
		</span>
		<span class="badge<?php if($key == 1): ?> badge-first<?php endif; if($key == 2): ?> badge-second<?php endif; if($key == 3): ?> badge-third<?php endif; ?>"><?php echo $key; ?></span><?php echo mac_substring($vo['vod_name'],8); ?></a>
</li>	
					<?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>									
			</div>
		</div>
	</div>	
</div>
<?php endforeach; endif; else: echo "" ;endif; ?><!-- 分类列表 -->
        	<!-- D035 by v.shoutu.cn -->
<div class="stui-pannel stui-pannel-bg clearfix">
	<div class="stui-pannel-box clearfix">
		<?php $__TAG__ = '{"ids":"1,2,3,4","order":"asc","by":"sort","id":"vo1","key":"key1"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key1 = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo1): $mod = ($key1 % 2 );++$key1;?>	
		<div class="col-lg-4 col-md-3 col-sm-2 col-xs-1<?php if($key > 3): ?> hidden-md<?php endif; ?>">
			<div class="stui-pannel_hd">
				<div class="stui-pannel__head active bottom-line clearfix">
					<h3 class="title">
						<img src="<?php echo $maccms['path']; ?>statics/icon/icon_12.png"/>
						<?php echo $vo1['type_name']; ?>总榜单
					</h3>													
				</div>																		
			</div>
			<div class="stui-pannel_bd clearfix">
				<ul class="stui-vodlist__text active col-pd clearfix">
					<?php $__TAG__ = '{"num":"10","type":"'.$vo1['type_id'].'","order":"desc","by":"hits","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
					<li class="bottom-line-dot">
	<a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>">
		<span class="text-muted pull-right hidden-md">
			<?php if($vo['vod_remarks'] != ''): ?><?php echo mac_substring($vo['vod_remarks'],12); elseif($vo['vod_serial'] > 0): ?>第<?php echo $vo['vod_serial']; ?>集<?php else: ?>已完结<?php endif; ?>
		</span>
		<span class="badge<?php if($key == 1): ?> badge-first<?php endif; if($key == 2): ?> badge-second<?php endif; if($key == 3): ?> badge-third<?php endif; ?>"><?php echo $key; ?></span><?php echo mac_substring($vo['vod_name'],8); ?></a>
</li>	
					<?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>								
			</div>
		</div>
		<?php endforeach; endif; else: echo "" ;endif; ?>
	</div>
</div><!-- 分类榜单 -->       	
            <div class="stui-pannel stui-pannel-bg hidden-sm hidden-xs clearfix">
	<div class="stui-pannel-box">
		<div class="stui-pannel_hd">
			<div class="stui-pannel__head active bottom-line clearfix">                                                                                                                                                                                                                                                       
				<h3 class="title">
					<img src="<?php echo $maccms['path']; ?>statics/icon/icon_26.png"/>
					友情链接
				</h3>								
			</div>																		
		</div>
		<div class="stui-pannel_bd clearfix">
			<div class="col-xs-1">
				<ul class="stui-link__text clearfix">
					<?php $__TAG__ = '{"num":"","type":"font","id":"vo","key":"key"}';$__LIST__ = model("Link")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
					<li><a class="text-muted" href="<?php echo $vo['link_url']; ?>" title="<?php echo $vo['link_name']; ?>" target="_blank"><?php echo $vo['link_name']; ?></a></li>								
					<?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>								
			</div>																		
		</div>
	</div>
</div><!-- 友情链接 -->
        </div>
    </div>
	<div class="container">
	<div class="row">
		<div class="stui-foot clearfix">
			<div class="col-pd text-center hidden-xs">Copyright <span class="fontArial"> </span> 2009-2020 <?php echo $maccms['site_url']; ?> Inc. All Rights Reserved. <a href="<?php echo $maccms['path']; ?>" target="_blank">4k电影院</a><!--<br>网站合作联系：<?php echo $maccms['site_qq']; ?> 联系邮箱：<a href="mailto:{maccms:email}"><?php echo $maccms['site_email']; ?></a></div>-->	
			<div class="col-pd text-center hidden-xs"><a href="http://vkaola.cn">4k电影</a>用户体验最佳的影视网站</div>
			<p class="share bdsharebuttonbox text-center margin-0 hidden-sm hidden-xs"></p>
			<p class="text-center hidden-xs">
				<a href="<?php echo $maccms['path']; ?>">
					<img src="<?php echo $maccms['path']; ?>statics/img/copy.png" width="150" height="48"/>
				</a>
			</p>			
			<p class="text-muted text-center visible-xs">Copyright © 2008-2018</p>
		</div>
	</div>
</div>
<ul class="stui-extra clearfix">
	<li>
		<a class="backtop" href="javascript:scroll(0,0)" style="display: none;"><i class="icon iconfont icon-less"></i></a>
	</li>
	<li class="hidden-xs">
		<a class="copylink" href="javascript:;"><i class="icon iconfont icon-share"></i></a>
	</li>
	<li class="visible-xs">
		<a class="open-share" href="javascript:;"><i class="icon iconfont icon-share"></i></a>
	</li>
	<li class="hidden-xs">
		<span><i class="icon iconfont icon-qrcode"></i></span>
		<div class="sideslip">
			<div class="col-pd">
				<p id="qrcode"></p>
				<p class="text-center font-12">扫码用手机访问</p>
			</div>			
		</div>
	</li>
	<li>
		<a href="<?php echo mac_url('gbook/index'); ?>"><i class="icon iconfont icon-comments"></i></a>
	</li>
</ul>

<div class="hide"><?php echo $maccms['site_tj']; ?></div>
</body>
</html>
