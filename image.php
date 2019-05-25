<!DOCTYPE html>
<html>
	<head>
	<title>PHP CODDING</title>
	
	<style>
	.phpcodding{width:900px;margin:0px auto;background:#DDD;}
	.headeroption ,.footeroption{background:#444; color:#FFFF; text-align:center;}
	.headeroption h2,.footeroption h2{margin:0px; height: 50px; padding-top: 10px;}
	.maincontent{min-height:450px; padding:20px;}
	
	</style>
	</head>
<body>
<div class="phpcodding">

	<section class="headeroption">
		<h2>PHP fundamental training</h2>
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
	<?php
	
		if(isset($_FILES['image'])){
			$filename = $_FILES['image']['name'];
			$filetmp = $_FILES['image']['tmp_name'];
			move_uploaded_file($filetmp,"images/".$filename);
			echo "Sucessfully Uploaded.!!!!";
			
		}
	
	?>
	
	<form action="" method="POST" enctype="multipart/form-data">
		<input type="file" name="image"/>
		<input type="submit" value="Submit"/>
	</form>
	
	
	
	</section>
	<section class="footeroption">
		<h2>www.liveproject.com</h2>
	
	</section>
</div>
</body>
</html>