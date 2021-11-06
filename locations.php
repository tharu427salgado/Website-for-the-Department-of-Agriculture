
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
  <body>
  
 
  
  
    <h2>Loations of farmers</h2>
    <div id="map-canvas" style="width: 1000px; height:700px;float:left;"><div id="popup" style="width:400px;height:auto;background-color:rgba(0,0,0,0.6);font-family:Arial Rounded MT;"></div></div>
	<div id="change" style="display:none;float:right;height:700px; width:320px;margin: 0% 2% -10% 0%; background-color:rgba(50,80,255,0.5); border-radius:0.5%;">
	<img id="photo" class="img" src="" style="margin:0% 0%; height:auto;max-height:200px; width:320px;">
	<h2 align="center">Harvest Details</h2>
	<div style="margin-left:25px">
	
	<form method="post" action="evaluate.php">
	<h3 id="name"></h3>
	<h4 id="htype"></h4>
	<h4 id="hname"></h4>
	<h4 id="weight"></h4>
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
?>

colors.push("<?php echo $row1["flag"]; ?>");
<?php   $im= $row1["photo"];
		$st= $row1["status"];	
		$ht= $row1["htype"];
		$hn= $row1["hname"];
		$we= $row1["weight"];
		$id= $row1["hid"];}?>
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
  status:'<?php echo $st; ?>',
  htype:'<?php echo $ht; ?>',
  hname:'<?php echo $hn; ?>',
  weight:'<?php echo $we; ?>'

}));

<?php  
$x=$x+1;
} ?>


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
	document.getElementById('name').innerText= "Name:"+ar["name"];
	document.getElementById('htype').innerText= "Harvest type:"+ar["htype"];
	document.getElementById('hname').innerText= "Harvest name:"+ar["hname"];
	document.getElementById('weight').innerText= "Harvest weight:"+ar["weight"];
	document.getElementById('photo').src = ar["photo"];
	var i1=document.getElementById("flag");
	var i2=document.getElementById("status");
	var i3=document.getElementById("evaluate");
	if(ar["status"]=="Not Evaluated"){
		i1.style.display = "block";
		i2.style.display = "block";
		i3.style.display = "block";
	}
	else{
		i1.style.display = "none";
		i2.style.display = "none";
		i3.style.display = "none";
	}
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
			'<h4>' + feature.get('name') + '</h4>' 
			+'<h6>' + feature.get('address') + '</h6>'+
			'<h6>' + feature.get('phone') + '</h6>'+
			'<h6>' + feature.get('status') + '</h6>'
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
