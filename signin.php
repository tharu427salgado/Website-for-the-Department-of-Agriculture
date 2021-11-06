<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "agriculture";
$conn = new mysqli($servername, $username, $password, $dbname);
if(isset($_POST['login'])){
	$id=$_POST['id'];
	$sql = "select * from users where id='$id'";
	$re=mysqli_query($conn ,$sql);
	while($row1 = $re->fetch_assoc()) {
		$pa=$row1["password"];
		$roll=$row1["roll"];
	}
	if($_POST['password']==$pa){
		if($roll=="farmer"){
			header("Location:farmer.php?fid=$id");
		}
		elseif($roll=="staff"){
			header("Location:staff.php?eid=$id");
		}
		elseif($roll=="master"){
			header("Location:master.php?id=$id");
		}
	}
	else{
		header("Location:login.php?message=Password is wrong");
	}
}

?>
