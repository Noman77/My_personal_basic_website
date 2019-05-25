<?php
	$fonts     ='verdana';
	$bgcolor   ="#444";
	$fontcolor ="#fff";
?>
<!DOCTYPE html>
<html>
<head>
	<title>My Basic Website </title>
	<link rel="stylesheet" href="newstyle.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" type="text/javascript">
	</script>

</head>
<body>
		<div class="headersection templete clear">
		<h2>TO-LET</h2>
			<div class="logo">
			 <img src="images/logo.jpg" alt="Logo"/>
				<p> Our website Description </p>
			</div>
			<div class="social">
				<a target="_blank" href="https://www.facebook.com"><img src="images/facebook.jpg" alt="Facebook"/></a>
				<a target="_blank" href="https://www.instagram.com"><img src="images/instagram.jpg" alt="Instagram"/></a>
				<a target="_blank" href="https://twitter.com"><img src="images/twitter.jpg" alt="Tiwtter"/></a>
				<a target="_blank" href="https://www.linkedin.com"><img src="images/linkdine.jpg" alt="Linkdine"/></a>
				</div>
		</div>
			
		<div class="navsection templete clear">
			 <ul>
			  <li><a href="newindex.html">Home</a></li>
			  <li><a href="abouthome.html">About Home</a></li>
			  <li><a id="active" href="contact.php">Contact</a></li>
			  <li><a href="about.html">About Us</a></li>
			  <li><a href="#">Members</a></li>
			 
			 </ul>
		</div>
		
		
		<div class="contentsection templete clear">
		<div class="Maincontent clear">
			<div class="about">
				<h2>Contact Us</h2>
<?php 
	spl_autoload_register(function($class){

	include "classes/".$class.".php";

	});
 ?>

<section class="about">
	<?php 

	$user = new Student();
	if (isset($_POST['create'])) {
		$name = $_POST['name'];
		$dep = $_POST['dep'];
		$age = $_POST['age'];
		$user->setName($name);
		$user->setDep($dep);
		$user->setAge($age);

	if($user->insert()){
			echo "Data INSERT Sucessfully.......";
		}
	}
	if (isset($_POST['update'])) {
		$id = $_POST['id'];
		$name = $_POST['name'];
		$dep = $_POST['dep'];
		$age = $_POST['age'];
		$user->setName($name);
		$user->setDep($dep);
		$user->setAge($age);


	if($user->update($id)){
			echo "Data Update Sucessfully.......";
		}
	}

?>


<?php
	if (isset($_GET['action']) && $_GET['action'] == 'update') {
		$id = (int)$_GET['id'];
		$result = $user->readById($id);
?>


	<form action="" method="post" >
		<table>
			<input type="hidden" name="id" value="<?php echo $result['id'];?>" />
			<tr>
				<td>Username: </td>
				<td>
				<input type="text" name="name" value="<?php echo $result['name'];?>" required="1"/>
				</td>
			</tr>
			<tr>
				<td>Department: </td>
				<td>
					<input type="text" name="dep" value="<?php echo $result['dep'];?>" required="1"/>.
				</td>
			</tr>
			<tr>
			<td>Age : </td>
				<td>
				<input type="age" name="age" placeholder="Your age....." required="1"/>
				</td>
			</tr>		
			<tr>
				<td></td>
				<td>
				<input type="submit" name="update" value="Submit"/>
				</td>
			</tr>
		</table>		
	</form>
	<?php } else { ?>

	<form action="" method="post" >
	<table>
		<tr>
			<td>Username: </td>
			<td>
			<input type="text" name="name" placeholder="Your name...." required="1"/>
			</td>
		</tr>
		<tr>
			<td>Department: </td>
			<td>
				<input type="text" name="dep"placeholder="Your dept....:" required="1"/>.
			</td>
		</tr>
		<tr>
			<td>Age: </td>
			<td>
			<input type="text" name="age" placeholder="Your age....." required="1"/>
			
			</td>
		</tr>		
		<tr>
			<td></td>
			<td>
			<input type="submit" name="create" value="Submit"/>
			</td>
		</tr>
	</table>		
	</form>
	<?php } ?>

</section>
				
			</div>
		<div class="googlemap">
		  <div id="map"></div>
		</div>
			</div>
			<div class="sidebar clear"> 
				<div class="samesidebar clear">
				<h2> Latest Update </h2>
					<ul>
					 <li><a href="item.html">Post Title one will go threre.</a></li>
					 <li><a href="#">Post Title two will go threre.</a></li>
					 <li><a href="#">Post Title three will go threre.</a></li>
					 <li><a href="#">Post Title four will go threre.</a></li>
					 <li><a href="#">Post Title five will go threre.</a></li>
					 <li><a href="#">Post Title six will go threre.</a></li>
				 
				 </ul>
				</div>
				<div class="samesidebar clear">
				<h2>Popular articls </h2>
						<ul>
							 <li><a href="#">Post Title one will go threre.</a></li>
							 <li><a href="#">Post Title two will go threre.</a></li>
							 <li><a href="#">Post Title three will go threre.</a></li>
							 <li><a href="#">Post Title four will go threre.</a></li>
							 <li><a href="#">Post Title five will go threre.</a></li>
							 <li><a href="#">Post Title six will go threre.</a></li>
						 
						 </ul>
				<h2>Last Month </h2>
						<ul>
							 <li><a href="#">Post Title one will go threre.</a></li>
							 <li><a href="#">Post Title two will go threre.</a></li>
							 <li><a href="#">Post Title three will go threre.</a></li>
							 <li><a href="#">Post Title four will go threre.</a></li>
							 <li><a href="#">Post Title five will go threre.</a></li>
							 <li><a href="#">Post Title six will go threre.</a></li>
						 
						 </ul>
				</div>			
			</div>
		</div>
		
		<div class="footer templete clear">
			<div class="footermenu clear">
			<ul>
			 <li><a href="#">Home</a></li>
			 <li><a href="#">About</a></li>
			 <li><a href="#">Contact</a></li>
			 <li><a href="#">Members</a></li>
			 
			 </ul>
			</div>
		    <p>&copy; copyright my project.</p>
		</div>
		
	<script src="http://maps.google.com/maps/api/js"></script>
  <script src=js/gmaps.js"></script>
  
 <script type="text/javascript">
    var map;
    $(document).ready(function(){
      var map = new GMaps({
        el: '#map',
        lat: -12.043333,
        lng: -77.028333
      });

      GMaps.geolocate({
        success: function(position){
          map.setCenter(position.coords.latitude, position.coords.longitude);
        },
        error: function(error){
          alert('Geolocation failed: '+error.message);
        },
        not_supported: function(){
          alert("Your browser does not support geolocation");
        },
        always: function(){
          alert("Done!");
        }
      });
    });
  </script>
		
</body>
</html>