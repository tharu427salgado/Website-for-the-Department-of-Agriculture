<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "agriculture";
$conn = new mysqli($servername, $username, $password, $dbname);
$eid=$_GET['eid'];
$result = mysqli_query($conn, "select * from staff where eid='$eid'");

?>
<!doctype html>
<html lang="en">
<head>
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <title>Staff</title>
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
     
      <div class="site-section-cover overlay outer-page bg-light" style="background-image: url('16.jpg')" data-aos="fade">

       
        <div class="container">
            <div class="w3-display-left w3-padding-large">
               
               
              </div>
            </header>
          <div class="row align-items-center justify-content-center text-center">
            <div class="col-lg-10">

              <div class="box-shadow-content">
			  
                <div class="block-heading-1">
                 
                  
				  <?php while ($row1 = mysqli_fetch_array($result)) { ?>
				  <div style="float:right;width:27%;margin:-25% -20%;background-color:rgba(0,0,0,0.6);z-index: -1;">
                 <h3 style="margin-left:20px;text-align: left">👤<?php echo " ".$row1['efname']." ".$row1['elname']; ?></h3>
				 <h3 style="margin-left:20px;text-align: left">🏠<?php echo " ".$row1['eaddress']; ?></h3>
				 <h3 style="margin-left:20px;text-align: left">☎️<?php echo " ".$row1['pnum']; ?></h3>
				 </div>
				  <?php } ?>
				  <h1 class="mb-4" data-aos="fade-up" data-aos-delay="100">welcome to your profile </h1>
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
                 <h1 class="mb-4" data-aos="fade-up" data-aos-delay="100">click on the links to direct you to your destinations</h1>
              
                

                 <div class="sidebar-box">
               
                      <div class="half">
              <img src="images/the_two_apples_203943.jpg" style="width:100%" alt="Northern Lights" class="w3-margin-bottom">
            </div>
            
                <h3 class="text-black">Visit the farmers profiles to buy goods</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
                
              </div>
            
                
                 <div class="sidebar-box">
                      <div class="half">
              <img src="images/carolyn-christine--MNyLB8bJpI-unsplash.jpg" style="width:100%" alt="Northern Lights" class="w3-margin-bottom">
            </div>
               
                <h3 class="text-black">You can analyse the quality of harvest by setting flags</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
                
              </div>
            
           


              <div class="pt-5">
                
              
                    
                <!-- END comment-list -->
  
                <div class="comment-form-wrap pt-5">
                      <div class="site-section" id="contact-section">
                  <h1>contact us</h1>
                  <form action="#" class="">
                   <br>
                    
  

                 
                         <h3 class="mb-5">Keells T.P No:<br>  94-11-2236317</h3>
                  
                         
                   <h3 class="mb-5">Keells Food Products PLC.<br>
					No. 16, Minuwangoda Road,<br>
					Ekala, Ja-ela,<br>
					Sri Lanka.</h3>
					<h3 class="mb-5">E-mail : <br>	saliya.kfp@keells.com</h3>
					<br><br><br>
					
					<h3 class="mb-5">Department Of Agriculture T.P No:<br> 081- 2388331 / 32/ 34</h3>
                 
                  <h3 class="mb-5">Department of Agriculture, <br>P.O.Box. 01, Peradeniya</h3>
				   <h3 class="mb-5">E-mail : <br>DOA@gmail.com</h3>
                  </form>
                      </div >
                </div>
              </div>

            </div>
    
            <div class="col-md-4 sidebar">
              
              <div class="sidebar-box">
                <div class="categories">
                  <h3>CEO'S Message of Keells</h3>
                  <p>A warm welcome to the website of Keells Food Products PLC. This is designed to provide a 
				  comprehensive and in-depth review of our Company, reflecting the pride we, as Keells 
				  PLC employees have in our continuing growth and current success. It conveys our sense of duty to 
				  deliver a superior processed meat product portfolio to bring people together to ‘Celebrate Life..!</p>
                  
                </div>
              </div>
              <div class="sidebar-box">
                
                <h3 class="text-black">Vision of Keells</h3>
				

                <p>Our passion is to deliver pleasure and nutrition throughout peoples lives, through exciting and superior products, whenever and wherever they choose to eat and drink.</p>
                
              </div>
			   <div class="sidebar-box">
                
                <h3 class="text-black">Vision of DOA</h3>
				

                <p>Achieve excellence in agriculture for national prosperity</p>
                
              </div>
			  <div class="sidebar-box">
                
                <h3 class="text-black">Mission of DOA</h3>
				

                <p>Achieve an equitable and sustainable agriculture development through development
and dissemination of improved agriculture technology   </p>
                
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