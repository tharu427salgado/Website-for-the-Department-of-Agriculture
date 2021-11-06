
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
?>
<!doctype html>
<html lang="en">
  <head>
  <style>
 ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
}

li {
  float: left;
}

li a {
  display: block;
  padding: 8px;
  background-color: #dddddd;
}
   h6{color: blue;}
  </style>
  <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    
    <style>
      .map {
        height: 400px;
        width: 100%;
      }
    </style>
	<script src="https://cdn.polyfill.io/v2/polyfill.min.js?features=requestAnimationFrame,Element.prototype.classList,URL"></script>
    <link href="https://cdn.rawgit.com/openlayers/openlayers.github.io/master/en/v5.3.0/css/ol.css" rel="stylesheet" />
<script src="https://cdn.rawgit.com/openlayers/openlayers.github.io/master/en/v5.3.0/build/ol.js"></script>
 <script src="https://code.jquery.com/jquery-2.2.3.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <title>Loations of farmers</title>
  </head>
  <body style="background-image: url('images/bryn-parish-GAcWFDotZGo-unsplash.jpg')">
  
<div style="width: 100%; height:100px;float:left;background-color:rgba(0,0,0,0.6);">
<h2 style="color:#ff751a;margin:2.5% 5%;font-family:Arial Rounded MT;">Locations of farmers</h2>

<a style="font-size:20px;float:right;color:white;margin:-4.7% 29.7%;font-family:Arial Rounded MT;text-decoration: none;" href="home.php">Home</a>
<a style="font-size:20px;float:right;color:white;margin:-4.7% 23.5%;font-family:Arial Rounded MT;text-decoration: none;" href="maps.php">Map</a>
<a style="font-size:20px;float:right;color:white;margin:-4.7% 13.5%;font-family:Arial Rounded MT;text-decoration: none;" href="graphs.php">Graphs</a>
<a style="font-size:20px;float:right;color:white;margin:-4.7% 5%;font-family:Arial Rounded MT;text-decoration: none;" href="login.php">Login</a>


</div>  
  
    
    <div id="map-canvas" style="width: 75%; height:700px;float:left;"><div id="popup" style="width:400px;height:auto;background-color:rgba(0,0,0,0.6);font-family:Arial Rounded MT;"></div></div>
	<div id="change" style="display:none;float:right;height:700px; width:25%; background-color:rgba(0,0,0,0.8); border-radius:0.5%;">
	<img id="photo" class="img" src="" style=" height:auto;max-height:200px; width:100%;">
	<h2 style="color:white;" align="center">Harvest Details</h2>
	<div style="margin-left:25px">
	
	<form method="post" action="evaluate.php">
	<h3 style="color:white;" id="name"></h3>
	<h4 style="color:white;" id="htype"></h4>
	<h4 style="color:white;" id="hname"></h4>
	<h4 style="color:white;" id="weight"></h4>
	<input id="id"  type="hidden" name="id" placeholder="Flag">
	<br>
	<select style="width: 200px;margin:0% 5%;display:none;" class="form-control" name="flag" id="flag">
	  <option disabled selected value> -- select a flag -- </option>
	  <option value="red">Red</option>
	  <option value="green">Green</option>
	  <option value="yellow">Yellow</option>
	  <option value="blue">Blue</option>
	  <option value="purple">Purple</option>
	</select>
	<br>
	<select style="width: 200px;margin:0% 5%;display:none;" class="form-control" name="status" id="status">
	  <option disabled selected value> -- select an evaluation -- </option>
	  <option value="success">Success</option>
	  <option value="waste">Waste</option>
	</select>
	<br>
	<input id="evaluate" style="width: 100px;margin:0% 5%;display:none;" class="form-control" name="evaluate" type="submit" value="Evaluate">
	</form>
	</div>
	</div>
    <script>
    var baseMapLayer = new ol.layer.Tile({
  source: new ol.source.OSM()
  
});
var map = new ol.Map({
  target: 'map-canvas',
  layers: [baseMapLayer],
  view: new ol.View()
});
var markers = [];
var colors = [];

<?php 
$x=0;
while($row = $farmers->fetch_assoc()) {
$col=$conn->query("SELECT hid,flag,photo,status,htype,hname,weight FROM harvest WHERE fid='".$row["fid"]."' ORDER BY date DESC LIMIT 1");
	while($row1 = $col->fetch_assoc()) {
if($row1["hname"]!=""){			
?>

colors.push("<?php echo $row1["flag"]; ?>");
<?php   $im= $row1["photo"];
		$st= $row1["status"];	
		$ht= $row1["htype"];
		$hn= $row1["hname"];
		$we= $row1["weight"];
		$id= $row1["hid"];
		if($row1["flag"]=='red'){
			$le='⭐';
		}elseif($row1["flag"]=='green'){
			$le='⭐ ⭐ ⭐ ⭐ ⭐';
		}
		elseif($row1["flag"]=='yellow'){
			$le='⭐ ⭐ ⭐ ⭐';
		}
		elseif($row1["flag"]=='purple'){
			$le='⭐ ⭐ ⭐';
		}
		elseif($row1["flag"]=='blue'){
			$le='⭐ ⭐';
		}else{
			$le='';
		}
		?>
markers.push(new ol.Feature({
  geometry: new ol.geom.Point(
    ol.proj.fromLonLat([<?php echo $row["location"]; ?>])
  ),
  name: '<?php echo $row["fname"]." ".$row["lname"]; ?>',
  address: '<?php echo $row["homeno"]." ".$row["village"]." ".$row["faddress"]; ?>',
  phone: '<?php echo $row["phone"]; ?>',
  n:'<?php echo $x; ?>',
  id:'<?php echo $id; ?>',
  photo:'<?php echo $im; ?>',
  status:'<?php if($st=='success'){ echo '🔑 '.$st;}elseif($st=='waste'){ echo '🗑 ️'.$st;}else{ echo $st; } ?>',
  htype:'<?php echo $ht; ?>',
  hname:'<?php echo $hn; ?>',
  weight:'<?php echo $we; ?>',
  level:'<?php echo $le; ?>'

}));

<?php  
$x=$x+1;
}}} ?>


var iconStyles = [];

colors.forEach(function(color) {
  iconStyles.push(new ol.style.Style({
    image:  new ol.style.Icon({
        src:'final.png',
        anchor: [0.5, 1],
        scale: 0.1,
        color:color
      }),
  }))
});


var labelStyle = new ol.style.Style({
    text: new ol.style.Text({
        font: '12px Calibri,sans-serif',
        overflow: true,
        fill: new ol.style.Fill({
            color: '#000'
        }),
        stroke: new ol.style.Stroke({
            color: '#fff',
            width: 3
        }),
        textBaseline: 'bottom',
        offsetY: -8
    })
});

var vectorSource = new ol.source.Vector({
  features: markers
});
var markerVectorLayer = new ol.layer.Vector({
  source: vectorSource,
  style: function(feature) {
     var n=feature.get('n');
      var name = feature.get('name');
      var iconStyle = iconStyles[parseInt(n)];
      labelStyle.getText().setText(name);
      return [iconStyle, labelStyle];
  }
});

map.addLayer(markerVectorLayer);
map.getView().fit(vectorSource.getExtent(), map.getSize());


var element = document.getElementById('popup');

      var popup = new ol.Overlay({
        element: element,
        positioning: 'bottom-center',
        stopEvent: false,
        offset: [0, -50]
      });
      map.addOverlay(popup);
	  
	  

function show(ar) {
	document.getElementById('id').value= ar["id"];
	document.getElementById('name').innerText= "Name: "+ar["name"];
	document.getElementById('htype').innerText= "Harvest type: "+ar["htype"];
	document.getElementById('hname').innerText= "Harvest name: "+ar["hname"];
	document.getElementById('weight').innerText= "Harvest weight(Kg): "+ar["weight"];
	document.getElementById('photo').src = ar["photo"];
	
    var x = document.getElementById("change");
    x.style.display = "block";
}	
function hide() {
  var x = document.getElementById("change");
    x.style.display = "none";
}	  

	  
      // display popup on click
      map.on('click', function(evt) {
		  
		  
		  
        var feature = map.forEachFeatureAtPixel(evt.pixel,
            function(feature) {
              return feature;
            });
			
        if (feature) {
          var coordinates = feature.getGeometry().getCoordinates();
          popup.setPosition(coordinates);
          $(element).popover({
            'placement': 'top',
            'html': true,
            'content':'<img class="img" src="'+feature.get('photo')+'" style="  border-radius:30px;margin:auto; height:auto;max-height:150px; width:240px;"><br>'+
			'<h4>👤 ' + feature.get('name') + '</h4>' 
			+'<h6>🏠 ' + feature.get('address') + '</h6>'+
			'<h6>☎️ ' + feature.get('phone') + '</h6>'+
			'<h6>' + feature.get('status') + '</h6>'+'<h6>' + feature.get('level') + '</h6>'
          });
		  show({name:feature.get('name'),address:feature.get('address'),id:feature.get('id'),photo:feature.get('photo'),status:feature.get('status'),htype:feature.get('htype'),hname:feature.get('hname'),weight:feature.get('weight')});
          $(element).popover('show');
		  
		  
		  
		  
		  
		  
        } else {
		  hide();
          $(element).popover('destroy');
        }
		
      });

      // change mouse cursor when over marker
      map.on('pointermove', function(e) {
        if (e.dragging) {
          $(element).popover('destroy');
          return;
        }
        var pixel = map.getEventPixel(e.originalEvent);
        var hit = map.hasFeatureAtPixel(pixel);
        map.getTarget().style.cursor = hit ? 'pointer' : '';
      });

 
</script>
		


<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>

  </body>
</html>
