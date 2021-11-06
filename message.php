<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname= "agriculture";
$conn = new mysqli($servername, $username, $password, $dbname);
$inbox = mysqli_query($conn, "select * from message where mfrom='farmer'  ORDER BY date DESC");
$sent = mysqli_query($conn, "select * from message where mfrom='staff'  ORDER BY date DESC");
$eid=$_GET['eid'];
?>
<!doctype html>
<html lang="en">
<head>
<style>
      .tableFixHead {
        overflow-y: auto;
        height: 450px;
        
      }
      .tableFixHead thead th {
        position: sticky;
        top: 0;
      }
</style>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <title>Staff Message</title>
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
<body class="w3-theme-|1" style="background-image: url('12.jpg');background-repeat: no-repeat;background-size: cover;">

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
            <a href="" class="text-black"><span class="text-primary">STAFF MESSAGING</a>
            </div>
            
            <div class="col-12">
              <nav class="site-navigation text-right ml-auto " role="navigation">

                <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
				<li><a href="staff.php?eid=<?php echo $eid?>" class="nav-link">Profile</a></li>
				 <li><a href="map.php?eid=<?php echo $eid?>" class="nav-link">Map</a></li>
                  <li><a href="message.php?eid=<?php echo $eid?>" class="nav-link">Message</a></li>
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
    

    
    
    <!-- Middle Column -->
    <div class="w3-col m7" style="float:left;width:50%;margin:-1% 0;background-color:rgba(0,0,0,0.6);margin-left:5px;">
    
      
      
      <div class="">
	  
	  
        
       
        
		

<h2 align="center">INBOX</h2>
<div class="tableFixHead">
<table class="table table-hover table-dark" style="font-size: 15px;margin-left:10px;margin-right:10px;width:97%">
		<thead>
			<tr>
				<th>Farmer ID</th>
				<th>Date</th>
				<th>Message</th>
			</tr>
		</thead>
		<tbody>
		<?php while ($row = mysqli_fetch_array($inbox)) { 
		$fid=$row['fid'];
		$results1 = mysqli_query($conn, "select fname,lname from farmer where fid='$fid'");
		 while ($row1 = mysqli_fetch_array($results1)) { 
			$name=$row1['fname']." ".$row1['lname'];
		 }
		?>
			<tr>
				<td><?php echo $name; ?></td>
				<td><?php echo $row['date']; ?></td>
				<td><button class="btn btn-primary" onclick="document.getElementById('inboxview').style.display='block';document.getElementById('inboxmessage').innerText='<?php echo $row['msg']; ?>';document.getElementById('reply').value='<?php echo $row['reply']; ?>';document.getElementById('id').value='<?php echo $row['id']; ?>'">View</button></td>
			</tr>
			
		<?php } ?>
		</tbody>
</table>
</div>       
      </div>
      
      
      
      
    <!-- End Middle Column -->
    </div>
	
	
	
	
	 <div class="w3-col m7" style="float:right;width:48%;margin:-1% 0;background-color:rgba(0,0,0,0.6);margin-left:5px;">
    
      
      
      <div class="">
	  
	  
        
       
        
		

<h2 align="center">SENTBOX</h2>
<div class="tableFixHead">
<button class="btn btn-success" style="float:right;margin-bottom:10px;margin-right:10px" onclick="document.getElementById('add').style.display='block'">Send a message</button>
<table class="table table-hover table-dark" style="font-size: 15px;margin-left:10px;margin-right:10px;width:97%">
		<thead>
			<tr>
				<th>Farmer ID</th>
				<th>Date</th>
				<th>Message</th>
			</tr>
		</thead>
		<tbody>
		<?php while ($row = mysqli_fetch_array($sent)) { 
		$fid=$row['fid'];
		$results2 = mysqli_query($conn, "select fname,lname from farmer where fid='$fid'");
		 while ($row1 = mysqli_fetch_array($results2)) { 
			$name=$row1['fname']." ".$row1['lname'];
		 }
		?>
			<tr>
				<td><?php echo $name; ?></td>
				<td><?php echo $row['date']; ?></td>
				<td><button class="btn btn-primary" onclick="document.getElementById('sentview').style.display='block';document.getElementById('sentmessage').innerText='<?php echo $row['msg']; ?>';document.getElementById('feedback').innerText='<?php echo $row['reply']; ?>';">View</button></td>
			</tr>
			
		<?php } ?>
		</tbody>
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


<div id="add" class="w3-modal w3-animate-opacity">
<div class="w3-modal-content" style="padding:32px">
<div class="w3-container w3-white">
  <i onclick="document.getElementById('add').style.display='none'" class="fa fa-remove w3-transparent w3-button w3-xlarge w3-right"></i>
  <form action="staffsend.php" method="post" enctype="multipart/form-data">
  <h2 class="w3-wide">Send Message</h2><br>
  <b><p>Farmer ID:</p></b>
  <select class="w3-input w3-border" name="fid" class="form-control">
  <option value="none" selected disabled hidden> 
  Select A Farmer
  </option>
<?php  
$results3 = mysqli_query($conn, "select fid,fname,lname from farmer");
		 while ($row1 = mysqli_fetch_array($results3)) { 
			$name=$row1['fname']." ".$row1['lname'];
			$fid1=$row1['fid'];
		 
?>		
		   <option class="w3-input w3-border" value="<?php echo $fid1; ?>"><?php echo $name; ?></option>
<?php  } ?>		 
	 </select><br>
	 <input name="eid" class="w3-input w3-border" type="hidden" value="<?php echo $eid; ?>">
  <input name="message" class="w3-input w3-border" type="text" placeholder="Reply Here"><br>
  <button type="submit" class="w3-button w3-block w3-padding-large w3-red w3-margin-bottom" name="send">Send</button>
  </form>
</div>
</div>
</div> 



 <div id="inboxview" class="w3-modal w3-animate-opacity">
<div class="w3-modal-content" style="padding:32px">
<div class="w3-container w3-white">
  <i onclick="document.getElementById('inboxview').style.display='none'" class="fa fa-remove w3-transparent w3-button w3-xlarge w3-right"></i>
  <form action="staffreply.php" method="post">
  <b><p>MESSAGE:</p></b>
  <p id="inboxmessage"></p><br>
  <b><p>Reply:</p></b>
  <input name="id" id="id" class="w3-input w3-border" type="hidden">
  <input name="eid" class="w3-input w3-border" type="hidden" value="<?php echo $eid; ?>">
  <p><input id="reply" name="reply" class="w3-input w3-border" type="text" placeholder="Reply Here"></p>
  <button type="submit" class="w3-button w3-block w3-padding-large w3-red w3-margin-bottom" name="replym">Send Reply</button>
  </form>
</div>
</div>
</div>


 <div id="sentview" class="w3-modal w3-animate-opacity">
<div class="w3-modal-content" style="padding:32px">
<div class="w3-container w3-white">
  <i onclick="document.getElementById('sentview').style.display='none'" class="fa fa-remove w3-transparent w3-button w3-xlarge w3-right"></i>
  <b><p>MESSAGE:</p></b>
  <p id="sentmessage"></p><br>
  <b><p>FEEDBACK:</p></b>
  <p id="feedback"></p>
</div>
</div>
</div>


  </body>
  </html>
