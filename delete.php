<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "agriculture";
$conn = new mysqli($servername, $username, $password, $dbname);
if (isset($_GET['del'])) {
	$hid = $_GET['del'];
	$id=$_GET['fid'];
	mysqli_query($conn, "DELETE FROM harvest WHERE hid=$hid");
	header("location: farmer.php?fid=$id&message=Deleted Harvest Successfully");
}
?>