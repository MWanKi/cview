<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>C.VIEW</title>
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/notosanskr.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link rel="stylesheet" href="css/jquery.bxslider.css">
	<link rel="stylesheet" href="css/common.css">
	<script src="js/jquery.2.1.4.js"></script>
	<script src="js/jquery.bxslider.min.js"></script>
	<script src="js/common.js"></script>
</head>
<body>
	<div id="pjax-container" class="wrap-content">

		<!-- header -->
		<div class="wrap-header">
			<a href="#" data-skip-pjax class="btn-menu">
				<span class="bar1"></span>
				<span class="bar2"></span>
				<span class="bar3"></span>
			</a>
			<h2><?= $page_name ?></h2>
		</div>
		<!-- header -->
		
		<?php include('sidebar.php'); ?>

		<!-- shortcut -->
		<div class="box-shortcut">
			<ul>
				<li class="li-on li-home"><a href="index.php">홈</a></li>
				<li class="li-calendar"><a href="calendar.php">캘린더</a></li>
				<li class="li-ai"><a href="#">AI함</a></li>
				<li class="li-more"><a href="#">더보기</a></li>
			</ul>
		</div>
		<!-- shortcut -->
	
		<?php include('ai.php'); ?>

		<!-- content -->
		<div class="box-content">