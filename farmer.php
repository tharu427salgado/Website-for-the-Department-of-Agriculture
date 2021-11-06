<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "agriculture";
$conn = new mysqli($servername, $username, $password, $dbname);
$fid=$_GET['fid'];
$result = mysqli_query($conn, "select * from farmer where fid='$fid'");

?>
<!doctype html>
<html lang="en">
<head>
<style>
      .tableFixHead {
        overflow-y: auto;
        height: 500px;
        
      }
      .tableFixHead thead th {
        position: sticky;
        top: 0;
      }
</style>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <title>Farmer</title>
  
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,700|Oswald:400,700" rel="stylesheet">

  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/jquery.fancybox.min.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
  <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-|1.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- MAIN CSS -->
  <link rel="stylesheet" href="css/style.css">
   

</head>


<body class="w3-theme-|1" style="background-image: url('1.jpg');background-repeat: no-repeat;background-size: cover;">

<script src="js/sweetalert2.all.min.js"></script>

<?php if(!empty($_GET['message'])) {
	$m1=$_GET['message'];
?>
<script>
     Swal.fire({
     position: 'middle',
     icon: 'success',
     title: '<?php echo $m1; ?>',
     showConfirmButton: false,
     timer: 1500
     });
</script>

<?php } ?>

  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>


    

    <header class="site-navbar js-sticky-header site-navbar-target" role="banner" style="background-color:rgba(0,0,0,0.6);height:100px">

      <div class="container">
        <div class="row align-items-center position-relative">


          <div class="site-logo">
            <a href="" class="text-black"><span class="text-primary">Farmer</a>
            </div>
            
            <div class="col-12">
              <nav class="site-navigation text-right ml-auto " role="navigation">

                <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
				<li><a href="farmer.php?fid=<?php echo $fid;?>" class="nav-link">Profile</a></li>
				<li><a href="farmermessage.php?fid=<?php echo $fid; ?>" class="nav-link">Message</a></li>
                  <li><a href="login.php" class="nav-link">Logout</a></li>
                </ul>
              </nav>

            </div>

            <div class="toggle-button d-inline-block d-lg-none"><a href="#" class="site-menu-toggle py-5 js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

          </div>
        </div>

      </header>

      
 <div id="navDemo" class="w3-bar-block w3-theme-|1 w3-hide w3-hide-large w3-hide-medium w3-large">
  <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 1</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 2</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 3</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large">My Profile</a>
</div>
        <div class="w3-container w3-content" style="max-width:1400px;margin-top:30px;">    
  <!-- The Grid -->
  <div class="w3-row">
    <!-- Left Column -->
    <div class="w3-col m3" style="width:30%;margin:-1% 0;float:left;background-color:rgba(0,0,0,0.6);">
      <!-- Profile -->
      <div class="">
        <div class="w3-container">
         <h4 class="w3-center">My Profile</h4>
         
		
		 <?php while ($row1 = mysqli_fetch_array($result)) { ?>
         <p style="font-size: 15px;">🆔<?php echo "  ".$row1['fid']; ?></p>
         <p style="font-size: 15px;">👤<?php echo "  ".$row1['fname']." ".$row1['lname']; ?></p>
         <p style="font-size: 15px;">🏠<?php echo "  ".$row1['homeno'].$row1['village'].$row1['faddress']; ?></p>
		 <p style="font-size: 15px;">☎️<?php echo "  ".$row1['phone']; ?></p>
		 <?php } ?>
        </div>
      </div>
      <br>
      
     
      
    
    
   
    </div>

    
    
    <!-- Middle Column -->
    <div class="w3-col m7" style="float:right;width:68%;margin:-1% 0;background-color:rgba(0,0,0,0.6);margin-left:5px;">
    
      
      
      <div class="">
        
        
        
		
<?php

				
if(!empty($_GET['fid'])) {
	$fid=$_GET['fid'];
}

       $results1 = mysqli_query($conn, "select * from harvest where fid='$fid' ORDER BY date DESC");
?>
<div class="tableFixHead">
<h2 align="center">Harvests</h2>
<button class="btn btn-success" style="float:right;margin-bottom:10px;margin-right:10px" onclick="document.getElementById('add').style.display='block'">Add Harvest</button>

<table class="table table-hover table-dark" style="font-size: 15px;margin-left:10px;margin-right:10px;width:98%">
		<thead>
			<tr>
				<th>Harvest ID</th>
				<th>Harvest Type</th>
				<th>Harvest Name</th>
				<th>Weight(Kg)</th>
				<th>Photo</th>
				<th>Flag</th>
				<th>Status</th>
				<th></th>
				<th></th>
			</tr>
		</thead>
		<tbody>
		<?php while ($row = mysqli_fetch_array($results1)) { ?>
			<tr>
				<td><?php echo $row['hid']; ?></td>
				<td><?php echo $row['htype']; ?></td>
				<td><?php echo $row['hname']; ?></td>
				<td><?php echo $row['weight']; ?></td>
				<td><button class="btn btn-primary" onclick="document.getElementById('imageview').style.display='block';document.getElementById('image').src='<?php echo $row['photo']; ?>'">View</button></td>
				<td><?php echo $row['flag']; ?></td>
				<td><?php echo $row['status']; ?></td>
				<td><button class="btn btn-primary" onclick="document.getElementById('update').style.display='block';document.getElementById('hid').value='<?php echo $row['hid']; ?>'">Update</button></td>
				<td><a class="btn btn-danger" href="delete.php?del=<?php echo $row['hid']; ?>&fid=<?php echo $fid; ?>">Delete</a></td>
			</tr>
			</tbody>
		<?php } ?>
</table>
</div>        
      </div>
      
      
      
      
    <!-- End Middle Column -->
    </div>
    


    
  <!-- End Grid -->
  </div>
  
<!-- End Page Container -->
</div>
<br>

<div id="update" class="w3-modal w3-animate-opacity">
<div class="w3-modal-content" style="padding:32px">
<div class="w3-container w3-white">
  <i onclick="document.getElementById('update').style.display='none'" class="fa fa-remove w3-transparent w3-button w3-xlarge w3-right"></i>
  <form method="post" action="update.php" enctype="multipart/form-data">
  <h2 class="w3-wide">Update Harvest Details</h2>
  <input name="fid" class="w3-input w3-border" value="<?php echo $fid; ?>" type="hidden">
  <input name="hid" id="hid" class="w3-input w3-border" type="hidden">
  <p>Image</p>
  <p><input name="photo" class="w3-input w3-border" type="file" placeholder="Select A Image Your Harvest" required="required"></p>
  <p>Weight(Kg)</p>
  <p><input name="weight" class="w3-input w3-border" type="text" placeholder="Enter Harvest Weight" required="required"></p>
  <button type="submit" class="w3-button w3-block w3-padding-large w3-red w3-margin-bottom" name="update">Update</button>
  </form>
</div>
</div>
</div>

<div id="add" class="w3-modal w3-animate-opacity">
<div class="w3-modal-content" style="padding:32px">
<div class="w3-container w3-white">
  <i onclick="document.getElementById('add').style.display='none'" class="fa fa-remove w3-transparent w3-button w3-xlarge w3-right"></i>
  <form action="add.php" method="post" enctype="multipart/form-data">
  <h2 class="w3-wide">Add Harvest Details</h2>
  <input name="fid" class="w3-input w3-border" value="<?php echo $fid; ?>" type="hidden">
  <p>Harvest Type</p>
  <p><input name="htype" class="w3-input w3-border" type="text" placeholder="Enter Harvest Type" required="required"></p>
  <p>Harvest Name</p>
  <p><input name="hname" class="w3-input w3-border" type="text" placeholder="Enter Harvest Name" required="required"></p>
  <p>Image</p>
  <p><input name="photo" id="photo" type="file" placeholder="Select A Image Your Harvest" required="required"></p>
  <p>Weight(Kg)</p>
  <p><input name="weight" class="w3-input w3-border" type="text" placeholder="Enter Harvest Weight" required="required"></p>
  <button type="submit" class="w3-button w3-block w3-padding-large w3-red w3-margin-bottom" name="add">Add</button>
  </form>
</div>
</div>
</div>


<div id="imageview" class="w3-modal w3-animate-opacity">
<div class="w3-modal-content" style="padding:32px">
<div class="w3-container w3-white">
  <i onclick="document.getElementById('imageview').style.display='none'" class="fa fa-remove w3-transparent w3-button w3-xlarge w3-right"></i>
  <img id="image" style="width:50%;height:auto;margin-left:25%;margin-right:25%">
</div>
</div>
</div>


  </body>
  </html>
 
     
     
   
