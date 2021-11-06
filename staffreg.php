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
$branch="";
$pss="";
$position="";
if(isset($_POST['register'])){
	if($_POST['password']==$_POST['cpassword']){
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$number=$_POST['phone'];
	$nic=$_POST['id'];
	$address=$_POST['address'];
	$position=$_POST['position'];
	$branch=$_POST['branch'];
	$pss=$_POST['password'];
	
	$sql = "INSERT INTO staff(eid, efname, elname,eaddress,pnum,position,branch,password) VALUES ('$nic','$fname', '$lname', '$address','$number','$position','$branch','$pss')";
	mysqli_query($conn ,$sql);
	$sql2 = "INSERT INTO users(id, password, roll) VALUES ('$nic','$pss','staff')";
	mysqli_query($conn ,$sql2);
	header("Location:master.php?message=Successfully Registered");
	}
	else{
		header("Location:master.php?message=Password Confirmation Wrong");
	}
}

?>
