<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "agriculture";
$conn = new mysqli($servername, $username, $password, $dbname);
$fname="";
$lname="";
$number="";
$nic="";
$address="";
$location="";
$pss="";
if(isset($_POST['register'])){
	if($_POST['password']==$_POST['cpassword']){
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$number=$_POST['phone'];
	$nic=$_POST['id'];
	$homeno=$_POST['homeno'];
	$village=$_POST['village'];
	$address=$_POST['address'];
	$location=$_POST['location'];
	$pss=$_POST['password'];
	
	$sql = "INSERT INTO farmer(fid, fname, lname,homeno,village,faddress,phone,location,password) VALUES ('$nic','$fname', '$lname','$homeno','$village','$address','$number','$location','$pss')";
	mysqli_query($conn ,$sql);
	$sql2 = "INSERT INTO users(id, password, roll) VALUES ('$nic','$pss','farmer')";
	mysqli_query($conn ,$sql2);
	header("Location:login.php?message=Successfully Registered");
	}
	else{
		header("Location:login.php?message=Password Confirmation Wrong");
	}
}

?>
