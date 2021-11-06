<?php



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "agriculture";
$conn = new mysqli($servername, $username, $password, $dbname);
$fid="";
$id="";
$reply="";
if(isset($_POST['replyf'])){
	$id=$_POST['id'];
	$reply=$_POST['reply'];
	$fid=$_POST['fid'];
	$sql = "UPDATE `message` SET reply='$reply' where id='$id'";
	mysqli_query($conn ,$sql);
	header("Location:farmermessage.php?fid=$fid");
}

?>
