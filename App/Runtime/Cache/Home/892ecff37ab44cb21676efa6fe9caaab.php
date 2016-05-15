<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
<title>肇庆三榕电子商务研究院</title>
<link href="/institute/Public/images/favicon.ico" rel="shortcut icon">
<!-- Bootstrap 3.3.5 -->
<link rel="stylesheet" href="/institute/Bootstrap/css/bootstrap.min.css">
<!-- Font Awesome -->
<link rel="stylesheet" href="/institute/Plugins/fa/css/font-awesome.min.css">
<!-- Style Css -->
<link rel="stylesheet" type="text/css" href="/institute/Public/css/style.css">
		<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=8ebr16l4b17C8HgB82UvWtqdlGvLopDz"></script>
	</head>
	<body>
	<div class="header">
			<div class="logo">
				<a href="index.html" title="肇庆三榕电子商务研究院">
					<img src="/institute/Public/images/logo.jpg" alt="肇庆三榕电子商务研究院" width="367" height="51">
				</a>
			</div>
			<div class="search">
				<form class="form-inline" action="http://www.baidu.com/baidu" target="_blank">
					<input name="tn" type="hidden" value="baidu">
					<div class="input-group">
						<input type="text" name="word" class="form-control pull-right" placeholder="搜索">
						<div class="input-group-btn">
							<button type="submit" class="btn btn-danger"><i class="fa fa-search"></i></button>
						</div>
					</div>
				</form>
			</div>
		</div>
		<div class="banner">
			<img src="/institute/Public/images/banner.jpg" width="1000" height="250" draggable="false">
		</div>
		<div class="nav">
			<ul>
				<li id="index"><a href="<?php echo U('Index/index');?>" title="首页">首页</a></li>
				<li id="project"><a href="<?php echo U('Project/index');?>" title="研究课题">研究课题</a></li>
				<li id="team"><a href="<?php echo U('Team/index');?>" title="研究团队">研究团队</a></li>
				<li id="news"><a href="<?php echo U('News/index');?>" title="新闻资讯">新闻资讯</a></li>
				<li id="school"><a href="<?php echo U('School/index');?>" title="合作院校">合作院校</a></li>
				<li id="contact"><a href="<?php echo U('Contact/index');?>" title="联系我们">联系我们</a></li>
			</ul>
		</div>
	<div class="main">
		<div class="contact">
			<div class="text">
				<h3>联系我们</h3>
				<ul>
					<li>肇庆三榕电子商务研究院</li>
					<li>官网：www.zqcxgu.com</li>
					<li>邮编：516000</li>
					<li>热线：0758-2107833</li>
					<li>邮箱: zqhcltd@163.com</li>  
				</ul>
			</div>
			<!--百度地图容器-->
			<div class="map" id="map"></div>
		</div>
	</div>
	<div class="footer">
	<div class="link">
		<a href="" title="关于我们" target="_blank">创星谷 | </a>
		<a href="" title="关于我们" target="_blank">关于我们 | </a>
		<a href="" title="联系我们" target="_blank">联系我们 | </a>
		<a href="" title="友情链接" target="_blank">友情链接</a>
	</div>
	<div class="copyright">版权所有?&nbsp;2016&nbsp;三榕电子商务研究院</div>
</div>
<!-- jQuery 1.1.12 -->
<script src="/institute/Public/js/jquery.js"></script>
<!-- layer 2.2 -->
<script src="/institute/Plugins/layer/layer.js"></script>
<!-- Bootstrap 3.3.5 -->
<script src="/institute/Bootstrap/js/bootstrap.min.js"></script>
	<script src="/institute/Public/js/baiduapi.js"></script>
	<script>
		$('#contact').addClass('current');
	</script>
	</body>
</html>