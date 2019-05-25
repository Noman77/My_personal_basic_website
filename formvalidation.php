<?php 
	$fonts="verdana";
	$errname=$erremail=$errgender="";
	$name = $email = $website = $gender = $comment ="";
		
		if($_SERVER["REQUEST_METHOD"]=="POST")
		{
			
			if(empty($_POST["name"])){
					$errname="<span style='color:red'>Name field is required.</span>";
				}
			else
				{
					$name       = validate($_POST["name"]);
				}
			if(empty($_POST["email"]))
				{
					$erremail="<span style='color:red'>E-mail field is required.</span>";
				}
			else
				{
					$email      = validate($_POST["email"]);
				}
			$website    = validate($_POST["website"]);
			
			if(empty($_POST["gender"]))
				{
					$errgender="<span style='color:red'>Gender field is required.</span>";
				}
			else
			{
			$gender    = validate($_POST["gender"]);
			}
			$comment    = validate($_POST["comment"]);
			
			echo "Name: ".$name."<br/>";
			echo "E-mail: ".$email."<br/>";
			echo "Website: ".$website."<br/>";
			echo "Comment: ".$comment."<br/>";
			echo "Gender: ".$gender;
				
			
		}
		function validate($data){
			$data = trim($data);
			$data = htmlspecialchars($data);
			$data =stripslashes($data);
			return $data;
		}
		   



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
	
	</style>
	</head>
<body>
<div class="phpcodding">

	<section class="headeroption">
		<h2>PHP fundamental training</h2>
	</section>
	<section class="maincontent">
	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>"method="post">
		<table>
		<p style="color:red"> * Field Required</p>
			<tr>
				<td>Name</td>	
				<td><input type="text" name="name"/>*<?php echo $errname; ?></td>
			</tr>
			<tr>
				<td>E-mail</td>
				<td><input type="email" name="email"/>*<?php echo $erremail; ?></td>
			</tr>	
			<tr>
				<td>Website</td>
				<td><input type="website" name="website"/></td>
			</tr>
			<tr>
				<td>Comment</td>
				<td><textarea type="text" name="comment" rows="5" cols="40"></textarea></td>
			</tr>
			<tr>
				<td>Gender</td>
					<td>
					<input type="radio" name="gender" value="male"/> Male
					<input type="radio" name="gender" value="female"/> Female
					*<?php echo $errgender; ?></td>
				</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit"value="Submit" /></td>
			</tr>
		

		</table>
	</form>
	</section>
	<section class="footeroption">
		<h2>www.liveproject.com</h2>
	
	</section>



</div>
</body>


</html>