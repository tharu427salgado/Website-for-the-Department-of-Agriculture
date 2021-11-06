<!doctype html>
<html lang="en">
<head>
  <title>Web Master</title>
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
                  
                     <li><a href="login.php" class="nav-link">Logout</a></li>
                </ul>
              </nav>

            </div>

            <div class="toggle-button d-inline-block d-lg-none"><a href="#" class="site-menu-toggle py-5 js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

          </div>
        </div>

      </header>
     
      <div class="site-section-cover overlay outer-page bg-light" style="background-image: url('17.jpg');background-repeat: no-repeat;background-size: cover;" data-aos="fade">

       
        <div class="container">
            <div class="w3-display-left w3-padding-large">
               
               
              </div>
            </header>
          <div class="row align-items-center justify-content-center text-center">
            <div class="col-lg-10">

              <div class="box-shadow-content">
                <div class="block-heading-1">
                 
                  <h1 class="mb-4" data-aos="fade-up" data-aos-delay="100">welcome to your Web master profile </h1>
                 
                </div>


				


              </div>
            </div>
          </div>
        </div>

      </div>

     

    
    

      <section class="site-section">
          
        <div class="container">
          <div class="row">
            <div class="col-md-8 blog-content">
			<form action="staffreg.php" method="post">
                 <h1 class="mb-4" data-aos="fade-up" data-aos-delay="100">create accounts for staff</h1><BR>
                <h3>FIRST NAME</h3>
                 <input type="text" class="form-control" name="fname" required="required"><br>
			  
			  <h3>LAST NAME</h3>
                 <input type="text" class="form-control" name="lname" required="required"><br>
                 
                  <h3 >EMPLOYEE ID NUMBER</h3>
                 <input type="text" class="form-control" name="id" required="required"><br>
                       
                        <h3>EMPLOYEE ADDRESS</h3>
                 <input type="text" class="form-control" name="address" required="required"><br>
                        <h3>CONTACT NUMBER</h3>
                 <input type="text" class="form-control" name="phone" required="required"><br>

                        <h3>POSITION</h3>
                 <input type="text" class="form-control" name="position" required="required"><br>
				   
				          <h3>EMPLOYEE BRANCH</h3>
                 <input type="text" class="form-control" name="branch" required="required"><br>

                        <h3>PASSWORD</h3>
                 <input type="password" class="form-control" name="password"><br>
                        <h3>CONFIRM PASSWORD</h3>
                 <input type="password" class="form-control" name="cpassword"><br>

                 


                      <input name="register" type="submit" value="SUBMIT THE DETAILS" class="btn btn-primary btn-md text-white">
			</form>
                    </div>
					
               

            </div>
    
            

                
              
                
    
            </div>
          </div>
        </div>
      </section>


      

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