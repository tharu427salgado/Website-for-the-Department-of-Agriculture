<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "agriculture";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {

  		die("Connection failed: " . $conn->connect_error);
	}
	$farmers = $conn->query("SELECT * FROM `farmer`");
  $success=mysqli_num_rows($conn->query("SELECT * FROM `harvest` WHERE status='success'"));
  $waste=mysqli_num_rows($conn->query("SELECT * FROM `harvest` WHERE status='waste'"));
  

	$veg = $conn->query("SELECT * FROM `harvest` WHERE htype='vegetable'");
	$fru = $conn->query("SELECT * FROM `harvest` WHERE htype='fruit'");
	$sea = $conn->query("SELECT * FROM `harvest` WHERE htype='sea food'");
	$ani = $conn->query("SELECT * FROM `harvest` WHERE htype='animal food'");


	$gal=mysqli_num_rows($conn->query("SELECT * FROM `farmer` WHERE faddress='galle'"));
	$mon=mysqli_num_rows($conn->query("SELECT * FROM `farmer` WHERE faddress='monaragala'"));
	$mat=mysqli_num_rows($conn->query("SELECT * FROM `farmer` WHERE faddress='mathara'"));
	$bad=mysqli_num_rows($conn->query("SELECT * FROM `farmer` WHERE faddress='badulla'"));
	$ham=mysqli_num_rows($conn->query("SELECT * FROM `farmer` WHERE faddress='hambanthota'"));
	$col=mysqli_num_rows($conn->query("SELECT * FROM `farmer` WHERE faddress='colombo'"));
	$gam=mysqli_num_rows($conn->query("SELECT * FROM `farmer` WHERE faddress='gampaha'"));
	$kal=mysqli_num_rows($conn->query("SELECT * FROM `farmer` WHERE faddress='kaluthara'"));
	$rat=mysqli_num_rows($conn->query("SELECT * FROM `farmer` WHERE faddress='rathnapura'"));
	$anu=mysqli_num_rows($conn->query("SELECT * FROM `farmer` WHERE faddress='anuradhapura'"));
	$tri=mysqli_num_rows($conn->query("SELECT * FROM `farmer` WHERE faddress='trincomalee'"));
	$kil=mysqli_num_rows($conn->query("SELECT * FROM `farmer` WHERE faddress='kilinochchi'"));
	$mul=mysqli_num_rows($conn->query("SELECT * FROM `farmer` WHERE faddress='mulathivu'"));
	$vav=mysqli_num_rows($conn->query("SELECT * FROM `farmer` WHERE faddress='vavuniya'"));
	$man=mysqli_num_rows($conn->query("SELECT * FROM `farmer` WHERE faddress='mannar'"));
	$pol=mysqli_num_rows($conn->query("SELECT * FROM `farmer` WHERE faddress='polonnaruwa'"));
	$math=mysqli_num_rows($conn->query("SELECT * FROM `farmer` WHERE faddress='mathale'"));
	$kan=mysqli_num_rows($conn->query("SELECT * FROM `farmer` WHERE faddress='kandy'"));
	$nuw=mysqli_num_rows($conn->query("SELECT * FROM `farmer` WHERE faddress='nuwaraeliya'"));
	$put=mysqli_num_rows($conn->query("SELECT * FROM `farmer` WHERE faddress='puththalam'"));
	$kur=mysqli_num_rows($conn->query("SELECT * FROM `farmer` WHERE faddress='kurunegala'"));
	$bat=mysqli_num_rows($conn->query("SELECT * FROM `farmer` WHERE faddress='batticalo'"));
	$keg=mysqli_num_rows($conn->query("SELECT * FROM `farmer` WHERE faddress='kegalle'"));
	$jaf=mysqli_num_rows($conn->query("SELECT * FROM `farmer` WHERE faddress='jaffna'"));
	$amp=mysqli_num_rows($conn->query("SELECT * FROM `farmer` WHERE faddress='ampara'"));

$ve=mysqli_num_rows($veg);
$fr=mysqli_num_rows($fru);
$se=mysqli_num_rows($sea);
$an=mysqli_num_rows($ani);


?>
<!doctype html>
<html lang="en">
<head>
  <title>Graphs</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,700|Oswald:400,700" rel="stylesheet">

  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/bar.css">
  <link rel="stylesheet" href="css/jquery.fancybox.min.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
  <link rel="stylesheet" href="css/aos.css">

  <!-- MAIN CSS -->
  <link rel="stylesheet" href="css/style.css">


	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />

    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>



    <script type="text/javascript">
window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
	theme: "dark1", // "light2", "dark1", "dark2"
	animationEnabled: false, // change to true		
	title:{
		text: ""
	},
	data: [
	{
		// Change type to "bar", "area", "spline", "pie",etc.
		type: "column",
		dataPoints: [
			{ label: "Galle",      y: <?php echo $gal; ?>   },
			{ label: "", y: 0 },
			{ label: "Monaragala", y: <?php echo $mon; ?>   },
			{ label: "", y: 0  },
			{ label: "Mathara", y: <?php echo $mat; ?>   },
			{ label: "", y: 0  },
			{ label: "Badulla",    y: <?php echo $bad; ?>   },
			{ label: "", y: 0 },
			{ label: "Hambanthota",y: <?php echo $ham; ?>   },
			{ label: "", y: 0 },
			{ label: "Colombo",    y: <?php echo $col; ?>   },
			{ label: "", y: 0 },
			{ label: "Gampaha",     y: <?php echo $gam; ?>  },
			{ label: "", y: 0 },
			{ label: "Kaluthara",   y: <?php echo $kal; ?>  },
			{ label: "", y: 0 },
			{ label: "Rathnapura",  y: <?php echo $rat; ?>  },
			{ label: "", y: 0 },
			{ label: "Anuradhapura",y: <?php echo $anu; ?>  },
			{ label: "", y: 0 },
			{ label: "Trincomalee",y: <?php echo $tri; ?>   },
			{ label: "", y: 0 },
			{ label: "Kilinochchi",y: <?php echo $kil; ?>   },
			{ label: "", y: 0  },
			{ label: "Mulathivu",  y: <?php echo $mul; ?>   },
			{ label: "", y: 0  },
			{ label: "Vavuniya",   y: <?php echo $vav; ?>   },
			{ label: "", y: 0 },
			{ label: "Mannar",     y: <?php echo $man; ?>   },
			{ label: "", y: 0 },
			{ label: "Polonnaruwa",y: <?php echo $pol; ?>   },
			{ label: "", y: 0 },
			{ label: "Mathale",    y: <?php echo $math; ?>   },
			{ label: "", y: 0 },
			{ label: "Kandy",      y: <?php echo $kan; ?>   },
			{ label: "", y: 0 },
			{ label: "Nuwaraeliya",y: <?php echo $nuw; ?>   },
			{ label: "", y: 0 },
			{ label: "Puththalam", y: <?php echo $put; ?>   },
			{ label: "", y: 0 },
			{ label: "Kurunegala", y: <?php echo $kur; ?>   },
			{ label: "", y: 0 },
			{ label: "Batticalo",  y: <?php echo $bat; ?>   },
			{ label: "", y: 0 },
			{ label: "Kegalle",    y: <?php echo $keg; ?>   },
			{ label: "", y: 0 },
			{ label: "Jaffna",     y: <?php echo $jaf; ?>   },
			{ label: "", y: 0 },
			{ label: "Ampara",     y: <?php echo $amp; ?>   },
		]
	}
	]
});
chart.render();

}
</script>

</head>
<body style="background-image: url('14.jpg'); data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

  <div id="overlayer"></div>
  <div class="loader">
    <div class="spinner-border text-primary" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>
  
  <div class="site-wrap"  id="home-section">

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
				  <li><a href="#services-section" class="nav-link">Graphs</a></li>
                  <li><a href="login.php" class="nav-link">Login</a></li>
                </ul>
              </nav>

            </div>

            <div class="toggle-button d-inline-block d-lg-none"><a href="#" class="site-menu-toggle py-5 js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>

          </div>
        </div>

      </header>

      <div class="">

      <div class="site-section"  id="services-section">
        <div class="container">
          <div class="row mb-5 justify-content-center">
            <div class="col-md-7 text-center">
              <div class="block-heading-1" data-aos="fade-up" data-aos-delay="">
                <h2>Graphs</h2>
              </div>
            </div>
          </div>
		  
		  
<div class="site-section">
        <div class="block__73694 mb-2">
          <div class="container">
            <div class="row d-flex no-gutters align-items-stretch">

<h2>Locations most farmers reside</h2>

            </div>
          </div>      
        </div>
    </div>

<div id="chartContainer" style="height: 370px; max-width: 3000px;width: 1500px; margin: 0px auto;"></div>
			<script src="js/canvasjs.min.js"> </script>				  
		  
		  
		  
         
      <div class="site-section" ">
        <div class="block__73694 mb-2">
          <div class="container">
            <div class="row d-flex no-gutters align-items-stretch">
            <h2>harvest types</h2>
            <canvas id="pie" width="800" height="500"></canvas>
            <script>
              var drawPieChart = function(data, colors) {
  var canvas = document.getElementById('pie');
  var ctx = canvas.getContext('2d');
  var x = canvas.width / 2;
      y = canvas.height / 2;
  var color,
      startAngle,
      endAngle,
      total = getTotal(data);
  
  for(var i=0; i<data.length; i++) {
    color = colors[i];
    startAngle = calculateStart(data, i, total);
    endAngle = calculateEnd(data, i, total);
    
    ctx.beginPath();
    ctx.fillStyle = color;
    ctx.moveTo(x, y);
    ctx.arc(x, y, y-100, startAngle, endAngle);
    ctx.fill();
    ctx.rect(canvas.width - 200, y - i * 30, 12, 12);
    ctx.fill();
    ctx.font = "13px sans-serif";
    ctx.fillText(data[i].label + " - " + data[i].value + " (" + calculatePercent(data[i].value, total) + "%)", canvas.width - 200 + 20, y - i * 30 + 10);
  }
};

var calculatePercent = function(value, total) {
  
  return (value / total * 100).toFixed(2);
};

var getTotal = function(data) {
  var sum = 0;
  for(var i=0; i<data.length; i++) {
    sum += data[i].value;
  }
      
  return sum;
};

var calculateStart = function(data, index, total) {
  if(index === 0) {
    return 0;
  }
  
  return calculateEnd(data, index-1, total);
};

var calculateEndAngle = function(data, index, total) {
  var angle = data[index].value / total * 360;
  var inc = ( index === 0 ) ? 0 : calculateEndAngle(data, index-1, total);
  
  return ( angle + inc );
};

var calculateEnd = function(data, index, total) {
  
  return degreeToRadians(calculateEndAngle(data, index, total));
};

var degreeToRadians = function(angle) {
  return angle * Math.PI / 180
}



var data = [
  { label: 'vegetables', value: <?php echo $ve; ?> },
  { label: 'fruits', value: <?php echo $fr; ?> },
  { label: 'sea food', value: <?php echo $se; ?> },
  { label: 'animal food', value: <?php echo $an; ?> }
];
var colors = [ '#66ff33', '#ffff00', '#ff0000', '#33adff' ];

drawPieChart(data, colors);

            </script>
            </div>
          </div>      
        </div>


        
      </div>

  




<div class="site-section">
        <div class="block__73694 mb-2">
          <div class="container">
            <div class="row d-flex no-gutters align-items-stretch">
<h2>successful transactions & wasted products</h2>
            <canvas id="pie1" width="800" height="500"></canvas>
            <script>
              var drawPieChart = function(data, colors) {
  var canvas = document.getElementById('pie1');
  var ctx = canvas.getContext('2d');
  var x = canvas.width / 2;
      y = canvas.height / 2;
  var color,
      startAngle,
      endAngle,
      total = getTotal(data);
  
  for(var i=0; i<data.length; i++) {
    color = colors[i];
    startAngle = calculateStart(data, i, total);
    endAngle = calculateEnd(data, i, total);
    
    ctx.beginPath();
    ctx.fillStyle = color;
    ctx.moveTo(x, y);
    ctx.arc(x, y, y-100, startAngle, endAngle);
    ctx.fill();
    ctx.rect(canvas.width - 200, y - i * 30, 12, 12);
    ctx.fill();
    ctx.font = "13px sans-serif";
    ctx.fillText(data[i].label + " - " + data[i].value + " (" + calculatePercent(data[i].value, total) + "%)", canvas.width - 200 + 20, y - i * 30 + 10);
  }
};

var calculatePercent = function(value, total) {
  
  return (value / total * 100).toFixed(2);
};

var getTotal = function(data) {
  var sum = 0;
  for(var i=0; i<data.length; i++) {
    sum += data[i].value;
  }
      
  return sum;
};

var calculateStart = function(data, index, total) {
  if(index === 0) {
    return 0;
  }
  
  return calculateEnd(data, index-1, total);
};

var calculateEndAngle = function(data, index, total) {
  var angle = data[index].value / total * 360;
  var inc = ( index === 0 ) ? 0 : calculateEndAngle(data, index-1, total);
  
  return ( angle + inc );
};

var calculateEnd = function(data, index, total) {
  
  return degreeToRadians(calculateEndAngle(data, index, total));
};

var degreeToRadians = function(angle) {
  return angle * Math.PI / 180
}



var data1 = [
  { label: 'Success', value: <?php echo $success; ?> },
  { label: 'Waste', value: <?php echo $waste; ?> },
];
var colors1 = [ '#66ff33', '#ffff00',  ];

drawPieChart(data1, colors1);

            </script>
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
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>


</body>
</html>