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
	$eid=$_POST['eid'];
	$message=$_POST['message'];
	$sql = "INSERT INTO message(fid, mfrom, msg) VALUES ('$fid','staff', '$message')";
	mysqli_query($conn ,$sql);
	header("Location:message.php?eid=$eid");
}

?>
