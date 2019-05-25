<?php include 'header.php';?>



<?php

	if(isset($_POST['username'])){
		
		$res = $_POST['username'];
		echo $res."</br>";
		
	}
?>

<?php

	if(isset($_POST['gender'])){
		
		$gen = $_POST['gender'];
		echo "Your Gender :".$gen."</br>";
		
		
		
	}
?>
<?php
	if(isset($_POST['coder'])){
		
		
		$code = $_POST['coder'];
	echo "Your Selected Language is : ";
	foreach($code as $lang=>$value){
		
		echo $value.", ";
	}
	
	}

?>


<form action="" method="POST" name="myform">
	<table>
		<tr>
			<td>Username: </td>
			<td>
			<input type="text" name="username" required="1"/>
			</td>
		</tr>
		<tr>
			<td>Gender: </td>
			<td>
			<input type="radio" name="gender" value="Male"/>Male
			<input type="radio" name="gender" value/>Female
			<input type="radio" name="gender" value/>Others
			</td>
		</tr>
		<tr><td>Language : </td>
			<td>
			<input type="checkbox" name="coder[]" value="PHP"/>PHP
			<input type="checkbox" name="coder[]" value="JAVA"/>JAVA
			<input type="checkbox" name="coder[]" value="JAVASCRIPT"/>JAVASCRIPT
			</td>
		</tr>
		<tr>
			<td></td>
			<td>
			<input type="submit" name="submit" value="Submit"/>
			<input type="submit" value="Clear"/>
			</td>
		</tr>
	</table>
		
</form>





<?php include 'footer.php';?>