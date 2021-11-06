<?php



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "agriculture";
$conn = new mysqli($servername, $username, $password, $dbname);
$id="";
$reply="";
if(isset($_POST['replym'])){
	$id=$_POST['id'];
	$eid=$_POST['eid'];
	$reply=$_POST['reply'];
	$sql = "UPDATE `message` SET reply='$reply' where id='$id'";
	mysqli_query($conn ,$sql);
	header("Location:message.php?eid=$eid");
}

?>
