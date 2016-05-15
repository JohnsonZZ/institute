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
			<div class="institute-info">
				<div class="info">
					<div class="info-image">
						<img src="/institute/Public/images/photo2.png" width="556px" height="314px" />
					</div>
					<div class="content">
						<div class="title">
							<strong>三榕电子商务研究院：</strong>
						</div>
						<p>
							三榕电子商务研究院是作为产学研一体化的研究机构，致力于共同攻关开发解决电子商务行业中的共性关键技术和基础性技术难题，为全市电子商务产业发展提供课题研究、规划设计、决策咨询、社会培训和信息交流服务。
						</p>
						<a href="IDL-about.html" class="more" title="更多">更多</a>
					</div>
				</div>
			</div>
			<div class="project">
				<div class="header">
					<h3>最新课题</h3>
					<a href="IDL-news.html" class="more" title="更多">更多</a>
				</div>
				<div class="content">
					<ul>
						<li>
							<a href="IDL-news-27.html" class="pic" title="四轴飞行器">
								<img src="/institute/Public/images/28.jpg" width="306" height="200" />
							</a>
							<p>四轴飞行器除了能做到和直升飞机一样垂直起降外，因其由四个螺旋桨控制，所以还能实现6个自由度的不同姿态飞行。相比较而言，四轴飞行器更加灵活，可以实现在复杂环境下稳定飞行</p>
						</li>
						<li>
							<a href="IDL-news-27.html" class="pic" title="机器人">
								<img src="/institute/Public/images/2.jpg" width="306" height="200">
							</a>
							<p>机器人（Robot）是自动执行工作的机器装置。它既可以接受人类指挥，又可以运行预先编排的程序，也可以根据以人工智能技术制定的原则纲领行动。</p>
							<div class="date">2015/12/16</div>
						</li>
						<li>
							<a href="IDL-news-27.html" class="pic" title="手机APP">
								<img src="/institute/Public/images/3.jpg" width="306" height="200">
							</a>
							<p>2009年开始各大手机厂商都在纷纷推出自己的手机应用商店，来为手机用户提供更多的软件资源。更是鼓励了手机软件的开发人员制作出更加优秀的软件产品来满足手机用户的需求。</p>
							<div class="date">2015/12/16</div>
						</li>
						<li>
							<a href="IDL-news-27.html" class="pic" title="电子商务">
								<img src="/institute/Public/images/4.jpg" width="306" height="200">
							</a>
							<p>以电子交易方式进行交易活动和相关服务的活动，是传统商业活动各环节的电子化、网络化、信息化。</p>
							<div class="date">2015/12/16</div>
						</li>
					</ul>
				</div>
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
		<script>
			$('#index').addClass('current');
		</script>
	</body>
</html>