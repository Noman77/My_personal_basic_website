<?php
	$fonts     ='verdana';
	$bgcolor   ="#444";
	$fontcolor ="#fff";
?>
<!DOCTYPE html>
<html>
	<head>
	<title>PHP CODDING</title>
	
	<style>
	.phpcodding{width:900px;margin:0px auto;background:#DDD;}
	.headeroption ,.footeroption{background:#444; color:#FFFF; text-align:center;}
	.headeroption h2,.footeroption h2{margin:0px; height: 50px; padding-top: 10px;}
	.maincontent{min-height:450px; padding:20px;}
	.mainleft{float:left; border-right: 1px dotted #444; margin-right:10px;}
	.mainright{float:right; width:450px;}
	
	</style>
	</head>
<body>
<div class="phpcodding">

	<section class="headeroption">
		<h2>PHP Fundamental Training</h2>
	</section>
<section class="maincontent">
	<hr><span style='color:green'>Abdullah Al Noman</span>
	 
	<span style="float:right">
		<?php
		date_default_timezone_set('Asia/Dhaka');
		echo "Time is :".date("h:i:sa");
		?>
	</span>
	</hr>
	<hr></hr>


