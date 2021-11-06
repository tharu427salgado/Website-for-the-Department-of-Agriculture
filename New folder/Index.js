// When the user clicks the marker, an info window opens.
// The maximum width of the info window is set to 400 pixels.


var map;
var infoObj = [];
var centerCoordinates = { lat: 6.9375110160000535, lng: 79.9018639803386 };

var icons = {
  Store: {
      icon: 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png'
  },
  Farm: {
      icon: ''
  },
}

var markersOnMap = [
  {
      Title: 'Jathisan Senarathne-Jaffna',
      Description: '<b>kurunagebduh </b> udygtr6872.',
      LatLng: [{
          lat: 9.67672593350459,
          lng: 80.01847012643351
         
      }],
      type: 'Store'
  },
  {
      Title: 'Priyalal Senaka-Kurunegala',
      Description: '<b>Review taken from google maps</b>:They are improving always.',
      LatLng: [{
          lat: 7.508530935153423, 
          lng: 80.35056976337519
          
      }],
      type: 'Store'
  },
  {
      Title: 'Jayawardhane Perera-Kotiyagala',
      Description: '<b>kurunagebduh </b> udygtr6872.',
      LatLng: [{
          lat: 7.793009979821842, 
          lng: 81.4832959775531
        
         
      }],
      type: 'Store'
  },
  {
      Title: 'Priyanjan Senanayeke-Welimada',
      Description: '<b>kurunagebduh </b> udygtr6872.',
      LatLng: [{
          lat: 6.896619857966947, 
          lng: 80.90656947398769
          
         
      }],
      type: 'Store'
  },
  {
      Title: 'Dhayasiri Jayasekara-Kandy',
      Description: '<b>kurunagebduh </b> udygtr6872.',
      LatLng: [{
          lat: 7.307484441986561, 
          lng: 80.63093043225261
          
         
      }],
      type: 'Store'
  },
  {
      Title: 'Punyasoma Mepala-Homagama',
      Description: '<b>kurunagebduh </b> udygtr6872.',
      LatLng: [{
          lat: 6.847136882822599, 
          lng: 80.00295616920872
          
         
      }],
      type: 'Store'
  },
  {
      Title: 'Bandara Sirisoma-Wellawaya',
      Description: '<b>kurunagebduh </b> udygtr6872.',
      LatLng: [{
          lat: 6.740559820813403, 
          lng: 81.10128870638908
    
          
         
      }],
      type: 'Store'
  },
  {
      Title: 'Ranindu Lanka-Monaragala',
      Description: '<b>kurunagebduh </b> udygtr6872.',
      LatLng: [{
          lat: 6.902907678104573, 
          lng: 81.3324728783873
     
    
          
         
      }],
      type: 'Store'
  },
  {
      Title: 'Mangula Gunasekara-Colombo',
      Description: '<b>kurunagebduh </b> udygtr6872.',
      LatLng: [{
          lat: 6.923537635641874, 
          lng: 79.91834347243433
          
     
    
          
         
      }],
      type: 'Store'
  },
  {
      Title: 'Mahima Samarajeewa-Dambulla',
      Description: '<b>kurunagebduh </b> udygtr6872.',
      LatLng: [{
          lat: 7.906352668831231, 
          lng: 80.7592827262526 
          
          
          
     
    
          
         
      }],
      type: 'Store'
  },
  {
      Title: 'Tharindu Umayanga-Mathara',
      Description: '<b>kurunagebduh </b> udygtr6872.',
      LatLng: [{
          lat: 5.963259556706999, 
          lng: 80.53358100224257
          
          
     
    
          
         
      }],
      type: 'Store'
  },
  {
      Title: 'Kavindu Maduwantha-Galle',
      Description: '<b>kurunagebduh </b> udygtr6872.',
      LatLng: [{
          lat: 6.063230626046723, 
          lng:80.18727695176916
          
          
     
    
          
         
      }],
      type: 'Store'
  },
  {
      Title: 'Dev Surendra-Weligama',
      Description: '<b>kurunagebduh </b> udygtr6872.',
      LatLng: [{
          lat: 6.003266148711793, 
          lng: 80.43964397541137 
          
          
          
     
    
          
         
      }],
      type: 'Store'
  },
  {
      Title: 'Jagath Priyanjana-Ampara',
      Description: '<b>kurunagebduh </b> udygtr6872.',
      LatLng: [{
          lat: 7.306616548126661, 
          lng: 81.66595797670763 
          
          
          
     
    
          
         
      }],
      type: 'Store'
  },
  {
      Title: 'Heshan Weerasinghe-Polonnaruwa',
      Description: '<b>kurunagebduh </b> udygtr6872.',
      LatLng: [{
          lat: 7.936152051530599, 
          lng: 81.00476633425527
          
          
          
          
     
    
          
         
      }],
      type: 'Store'
  },
















 
]

window.oldLoad = function () {
  initMap();
};

function addMarkerInfo() {
    for (var i = 0; i < markersOnMap.length; i++) {
        var contentString = '<h2>' + markersOnMap[i].Title + '</h2>' +
                            '<div id="bodyContent">' +
                            '<p>' + markersOnMap[i].Description + '</p>' +
                            "</div>";
        const marker = new google.maps.Marker({
            position : markersOnMap[i].LatLng[0],
            animation: google.maps.Animation.DROP,
            title: markersOnMap[i].Title,
            icon: icons[markersOnMap[i].type].icon,
            map: map
        })
        const infowindow = new google.maps.InfoWindow({
            content: contentString,
            maxWidth: 400,
        });
        marker.addListener("click", () => {
            closeOtherInfo();
            infowindow.open(map, marker);
            infoObj[0] = infowindow;
        });
    }
}

function closeOtherInfo() {
    if( infoObj.length > 0) {
        infoObj[0].set("marker", null);
        infoObj[0].close();
        infoObj[0].length = 0;
    }
}

function initMap() {
    map = new google.maps.Map(document.getElementById("map"), {
        zoom: 11,
        center: centerCoordinates,
    });
    addMarkerInfo();
}
