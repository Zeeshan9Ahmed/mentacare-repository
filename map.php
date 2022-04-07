<?php
$id='';
  if(isset($_GET['id'])){
    $id=$_GET['id'];
  }
?>
<br>
  <form method="post" action="further-registration.php?id=<?php echo $id;?>">
  <input type="text" id="html" name="add" onchange="initMap(this.value)">
  <input type="submit" name="submit" />
</form>
<br>
<?php
session_start();

function getGeoCode($address)
{
        // geocoding api url
        $url = "https://maps.google.com/maps/api/geocode/json?address=$address&key=AIzaSyDo3mYCVxXIZWS2VNkvx2aL9t2SSzB8Na8";
        // send api request
        $geocode = file_get_contents($url);
        $json = json_decode($geocode);
        $data['lat'] = $json->results[0]->geometry->location->lat;
        $data['lng'] = $json->results[0]->geometry->location->lng;

        $_SESSION["lat"] = $data['lat'];
        $_SESSION["lng"] = $data['lng'];
      
        return $data;
}
$address = isset($_GET['add']) ? $_GET['add'] : 'karachi';


$address = str_replace(' ', '+', $address);
$result = getGeoCode($address);

// produces output
// Latitude: 40.6781784, Longitude: -73.9441579
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Geocoding service</title>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
  </head>
  <body>
    
  <div id="map"></div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
   <script>
var geocoder;
      var map;
    

var address = "Orlando World Center Marriott";
      
      function initMap(val) {
          address = val;
       
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 8,
          center: {lat:28.3605, lng: 81.5101}
        });
        geocoder = new google.maps.Geocoder();
        codeAddress(geocoder, map);
      }
      initMap();
     
      function codeAddress(geocoder, map) {
        
        geocoder.geocode({'address': address}, function(results, status) {
          if (status === 'OK') {
            map.setCenter(results[0].geometry.location);
            var marker = new google.maps.Marker({
              map: map,
              position: results[0].geometry.location
            });
          } else {
            console.log('Geocode was not successful for the following reason: ' + status);
          }
        });
      }
  
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDo3mYCVxXIZWS2VNkvx2aL9t2SSzB8Na8&callback=initMap">
    </script>
  </body>
</html>