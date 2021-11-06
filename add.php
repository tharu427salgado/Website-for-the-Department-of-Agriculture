<?php



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "agriculture";
$conn = new mysqli($servername, $username, $password, $dbname);
$fid="";
$htype="";
$hname="";
$photo="";
$weight="";
if(isset($_POST['add'])){
	$htype=$_POST['htype'];
	$hname=$_POST['hname'];
	$weight=$_POST['weight'];
	$fid=$_POST['fid'];
	$photo= "harvest/".rand(100,1000).$_FILES['photo']['name'];
	$tmp_name=$_FILES['photo']['tmp_name'];
	move_uploaded_file($tmp_name, $photo);
	$date=date("Y-m-d");
	$sql = "INSERT INTO harvest(fid, htype, hname,photo,weight,date) VALUES ('$fid','$htype', '$hname', '$photo','$weight','$date')";
	mysqli_query($conn ,$sql);
	header("Location:farmer.php?fid=$fid&message=Added Harvest Successfully");
}

?>
