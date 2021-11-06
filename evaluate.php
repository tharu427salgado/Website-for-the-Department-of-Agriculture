<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "agriculture";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$eid="";
$id="";
$flag="";
$status="";
if(isset($_POST['evaluate'])){
		$eid=$_POST['eid'];
		$id=$_POST['id'];
		$flag=$_POST['flag'];
		$status=$_POST['status'];
		$sql1 = "UPDATE harvest SET flag='$flag',status='$status' WHERE hid='$id'";
		if($flag!='' && $status!=''){
			mysqli_query($conn ,$sql1);
		}
		header("Location:map.php?eid=$eid");


}

?>