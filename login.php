<!doctype html>
<html lang="en">
<head>
  <title>Login</title>
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

  <!-- MAIN CSS -->
  <link rel="stylesheet" href="css/style.css">

  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open Sans">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
h1,h2,h3,h4,h5,h6 {font-family: "Oswald"}
body {font-family: "Open Sans"}
h8 {text-align: center;}
</style>
</head>
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
<script src="js/sweetalert2.all.min.js"></script>

<?php if(!empty($_GET['message'])) {
	$m1=$_GET['message'];
	if($m1=='Successfully Registered'){
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

	<?php }else{ ?>   
	<script>
     Swal.fire({
     position: 'middle',
     icon: 'error',
     title: '<?php echo $m1; ?>',
     showConfirmButton: false,
     timer: 1500
     });
     </script>
<?php }} ?>      
  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>


    


    <header class="site-navbar js-sticky-header site-navbar-target" role="banner">
       

      <div class="container">
        <div class="row align-items-center position-relative">


          <div class="site-logo">
            <a href="" class="text-black"><span class="text-primary">Department of Agriculture & Keels</a>
            </div>
            
            <div class="col-12">
              <nav class="site-navigation text-right ml-auto " role="navigation">

                <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
                  <li><a href="home.php" class="nav-link">Home</a></li>
                  <li><a href="maps.php" class="nav-link">Map</a></li>
                  <li><a href="graphs.php" class="nav-link">Graph</a></li>
                  <li><a href="login.php" class="nav-link">Login</a></li>
                </ul>
              </nav>

            </div>

            <div class="toggle-button d-inline-block d-lg-none"><a href="#" class="site-menu-toggle py-5 js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

          </div>
        </div>

      </header>
     
      <div class="site-section-cover overlay outer-page bg-light" style="background-image: url('farming1.jpg');background-position: center;background-repeat: no-repeat;background-size: cover;" data-aos="fade">

       
        <div class="container">
            <div class="w3-display-left w3-padding-large">
               
                <h6><button class="w3-button w3-white w3-padding-large w3-large w3-opacity w3-hover-opacity-off" onclick="document.getElementById('LOGIN').style.display='block'">LOG IN</button></h6>
                <h6><button class="w3-button w3-white w3-padding-large w3-large w3-opacity w3-hover-opacity-off" onclick="document.getElementById('SIGNUP').style.display='block'">REGISTER</button></h6>
              </div>
            </header>
          <div class="row align-items-center justify-content-center text-center">
            <div class="col-lg-10">

              <div class="box-shadow-content">
                <div class="block-heading-1">
                 
                  <h1 class="mb-4" data-aos="fade-up" data-aos-delay="100">log in or signup </h1>
                  <span class="d-block mb-3 text-white" data-aos="fade-up">new here?create your free ACCOUNT today <span class="mx-2 text-primary"><br> &bullet; </span> already a membere? Login</span>
                </div>


				

              </div>
            </div>
          </div>
        </div>

      </div>

     

    <div id="LOGIN" class="w3-modal w3-animate-opacity">
<div class="w3-modal-content" style="padding:32px">
<div class="w3-container w3-white">
  <i onclick="document.getElementById('LOGIN').style.display='none'" class="fa fa-remove w3-transparent w3-button w3-xlarge w3-right"></i>
  <form method="post" action="signin.php">
  <h2 class="w3-wide">LOGIN</h2>
  <p>NATIONAL ID NUMBER</p>
  <p><input name="id" class="w3-input w3-border" type="text" placeholder="Enter YOUR NIC NUMBER"></p>
  <p>PASSWORD</p>
  <p><input name="password" class="w3-input w3-border" type="password" placeholder="Enter PASSWORD"></p>
  <button type="submit" class="w3-button w3-block w3-padding-large w3-red w3-margin-bottom" name="login">LOGIN</button>
  </form>
</div>
</div>
</div>



<div id="SIGNUP" class="w3-modal w3-animate-opacity">
<div class="w3-modal-content" style="padding:32px">
<div class="w3-container w3-white">
  <i onclick="document.getElementById('SIGNUP').style.display='none'" class="fa fa-remove w3-transparent w3-button w3-xlarge w3-right"></i>
  <form method="post" action="register.php">
  <h2 class="w3-wide">CREATE YOUR ACCOUNT BY FILLING YOUR DETAILS</h2><BR>
  <p>FIRST NAME</p>
  <p><input name="fname" class="w3-input w3-border" type="text" placeholder="ENTER YOUR FIRST NAME" required="required"></p>
  <p>LAST NAME</p>
  <p><input name="lname" class="w3-input w3-border" type="text" placeholder="ENTER YOUR LAST NAME" required="required""></p>
  <p>NATIONAL ID NUMBER</p>
  <p><input name="id" class="w3-input w3-border" type="text" placeholder="YOUR NIC NUMBER WILL BE USED AS YOUR USER ID TO LOGIN TO YOUR ACCOUNT" required="required"></p>
  <hr>
  <p><b>ADDRESS</b></p>
  <p>HOME NO</p>
  <p><input name="homeno" class="w3-input w3-border" type="text" placeholder="ENTER YOUR HOME NO" required="required""></p>
  <p>VILLAGE</p>
  <p><input name="village" class="w3-input w3-border" type="text" placeholder="ENTER YOUR VILLAGE" required="required"></p>
  <p>DISTRICT</p>
  <p><input name="address" class="w3-input w3-border" type="text" placeholder="ENTER YOUR DISTRICT" required="required"></p>
  <hr>
  <p>CONTACT NUMBER</p>
  <p><input name="phone" class="w3-input w3-border" type="text" placeholder="ENTER YOUR CONTACT NUMBER" required="required"></p>
  <p>LOCATION</p>
  <p><input name="location" class="w3-input w3-border" type="text" placeholder="ENTER YOUR LOCATION COORDINATES 'LONGS,LATS'" required="required"></p>
  <p><a href="https://www.google.lk/maps">Here you can find LONGS & LATS</a></p><br>
  <p>PASSWORD</p>
  <p><input name="password" class="w3-input w3-border" type="password" placeholder="PLEASE USE A COMBINATION OF LETTERS,NUMBERS AND SYMBOLS FOR YOUR PASSWORD"></p>
  <p>CONFIRM PASSORD</p>
  <p><input name="cpassword" class="w3-input w3-border" type="password" placeholder="RE-TYPE YOUR PASSWORD"></p>
  <button type="submit" name="register" class="w3-button w3-block w3-padding-large w3-red w3-margin-bottom" >REGISTER</button>
  </form>
</div>
</div>
</div>

     
              </div>
   
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/aos.js"></script>

    <script src="js/main.js"></script>

  </body>
  </html>