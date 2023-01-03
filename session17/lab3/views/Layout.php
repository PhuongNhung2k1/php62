<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Layout</title>
</head>
<body>
	<div class="wrapper">
		<header><h1>header</h1></header>
		<nav>
			<ul>
				<li><a href="index.php?controller=PhongBan&action=getPhongBan">MVC Phòng ban</a></li>
				<li><a href="index.php?controller=ChucDanh&action=getChucDanh">MVC Chức danh</a></li>
			</ul>
		</nav>
		<div class="content">
			<aside><h1>left</h1></aside>
			<content>
				<?php 
					//do du lieu cua view trong MVC vao day
					echo $view;
				 ?>
			</content>
		</div>
		<footer><h1>footer</h1></footer>
	</div>
	<style type="text/css">
		.wrapper{width: 1100px; margin: auto;}
		body,h1{padding: 0px; margin: 0px;}
		header,footer{height: 100px; background: yellow;}
		.content{display: flex;}
		aside{width: 300px; height: 400px; background: green;}
		content{width: 800px; height: 400px;}
	</style>
</body>
</html>