<?php



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "agriculture";
$conn = new mysqli($servername, $username, $password, $dbname);
$hid="";
$fid="";
$photo="";
$weight="";
if(isset($_POST['update'])){
	$weight=$_POST['weight'];
	$hid=$_POST['hid'];
	$fid=$_POST['fid'];
	$photo= "harvest/".rand(100,1000).$_FILES['photo']['name'];
	$tmp_name=$_FILES['photo']['tmp_name'];
	move_uploaded_file($tmp_name, $photo);
	$date=date("Y-m-d");
	$sql = "UPDATE `harvest` SET photo='$photo',weight='$weight',date='$date' where hid='$hid'";
	mysqli_query($conn ,$sql);
	header("Location:farmer.php?fid=$fid&message=Updated Harvest Successfully");
}

?>
