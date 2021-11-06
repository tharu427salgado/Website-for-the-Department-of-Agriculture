<?php



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "agriculture";
$conn = new mysqli($servername, $username, $password, $dbname);
$fid="";
$message="";
if(isset($_POST['send'])){
	$fid=$_POST['fid'];
	$message=$_POST['message'];
	$sql = "INSERT INTO message(fid, mfrom, msg) VALUES ('$fid','farmer', '$message')";
	mysqli_query($conn ,$sql);
	header("Location:farmermessage.php?fid=$fid");
}

?>
