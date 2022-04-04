

<script type="text/javascript">
  $(document).ready(function() {
     $("#gadres")
      .css("color", "#555555")
      .focus(function(){
          $(this).css("color", "black"); $(this).css("background-color", "#ffffff");$(this).select();
      })
      .blur(function(){
          $(this).css("color", "#555555"); $(this).css("background-color", "#fafafa");
      });
  $("#gadres").keyup(function(event){
      if(event.keyCode == 13){
          codeAddress();
      }
  });
   });
</script>

<script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript">
  var map;
  	var geocoder;
  	var marker;
  	function initialize() {
      var latlng = new google.maps.LatLng(1.10, 1.10);
      var myOptions = {
        zoom: 5,
        center: latlng,
        mapTypeId: google.maps.MapTypeId.HYBRID 
      };
      map = new google.maps.Map(document.getElementById("latlongmap"),
          myOptions);
    geocoder = new google.maps.Geocoder();
    marker = new google.maps.Marker({
        position: latlng, 
        map: map
    });
    
  map.streetViewControl=false;
  	google.maps.event.addListener(map, 'click', function(event) {
      marker.setPosition(event.latLng);
      var yeri = event.latLng;
      document.getElementById('lat').value=yeri.lat().toFixed(6);
  	document.getElementById('lng').value=yeri.lng().toFixed(6);
    });
  google.maps.event.addListener(map, 'mousemove', function(event) {
  var yeri = event.latLng;
  document.getElementById("mlat").value = yeri.lat().toFixed(6);
  document.getElementById("mlong").value = yeri.lng().toFixed(6);
  });
  codeAddress();
  }
  
  function codeAddress() {
      var address = document.getElementById("gadres").value;
      geocoder.geocode( { 'address': address}, function(results, status) {
        if (status == google.maps.GeocoderStatus.OK) {
          map.setCenter(results[0].geometry.location);
  		document.getElementById('lat').value=results[0].geometry.location.lat().toFixed(6);
  		document.getElementById('lng').value=results[0].geometry.location.lng().toFixed(6);
  var latlong = "(" + results[0].geometry.location.lat().toFixed(6) + " , " +
  	+ results[0].geometry.location.lng().toFixed(6) + ")";
  
   var infowindow = new google.maps.InfoWindow({
          content: latlong
      });
  
          marker.setPosition(results[0].geometry.location);
          map.setZoom(16);
  
  google.maps.event.addListener(marker, 'click', function() {
        infowindow.open(map,marker);
      });
  
        } else {
          alert("Lat and long cannot be found.");
        }
      });
    }
</script>

</head>

<body onload="initialize()">
  <div class="container_12" id="header">
    <div class="clear"></div>
    <div class="grid_4">
      <div class="box">
        <input id="gadres" type="textbox" size="24" value="Hampton, VA" />
        <input type="button" value="Find" title="Find Lat & Long" onclick="codeAddress();" />
      </div>
      <strong>Search by the name of the location you'd like the latitude and longitude</strong> (i.e. Eiffel Tower, or Great Wall of China) <strong>or Click on map to get latitude and longitude coordinates.</strong>
      <div class="box">
        <table>
          <tr>
            <td><strong>Latitude:</strong></td>
            <td>
              <input type="text" name="lat" id="lat" value="latvalue" />
            </td>
          </tr>
          <tr>
            <td><strong>Longitude:</strong></td>
            <td>
              <input type="text" name="lng" id="lng" value="lngvalue" />
            </td>
          </tr>
        </table>
      </div>
      <div class="box">
        <h3>Mouse Over the map below for your latitude and longitude.</h3>
        <table>
          <tr>
            <td><strong>Lat:</strong></td>
            <td>
              <input type="text" name="mlat" id="mlat" value="0" />
            </td>
          </tr>
          <tr>
            <td><strong>Long:</strong></td>
            <td>
              <input type="text" name="mlong" id="mlong" value="0" />
            </td>
          </tr>
        </table>
      </div>
      <br />
      <div style="clear:both;"></div>
      <br />
    </div>
    <div class="grid_8">
      <div id="latlongmap" style="width:100%; height:480px;">
      </div>
    </div>
  </div>
  <script type="text/javascript">
    function process()
    {
    var xxhi = parseInt(document.getElementById("lng").value)+5;
    var xxlo = parseInt(document.getElementById("lng").value)-5;
    var yyhi = parseInt(document.getElementById("lat").value)+5;
    var yylo = parseInt(document.getElementById("lat").value)-5;
    var url="http://mynasadata.larc.nasa.gov/las/UI.vm#panelHeaderHidden=false;differences=false;autoContour=false;globalMin=0.018759;globalMax=99.6;xCATID=2B0BBF6A0A4C3C7A7D051B183657F99F;xDSID=cloud_coverage;varid=cldarea_total_daynight_mon-id-9bce6de9df;imageSize=auto;over=xy;compute=Nonetoken;tlo=15-Jan-2013;thi=15-Jan-2013;catid=2B0BBF6A0A4C3C7A7D051B183657F99F;dsid=cloud_coverage;varid=cldarea_total_daynight_mon-id-9bce6de9df;avarcount=0;xlo=" + xxlo + ";xhi=" + xxhi + ";ylo=" + yylo + ";yhi=" + yyhi + ";operation_id=Plot_2D_XY_zoom;view=xy";
    location.href=url;
    return false;
    }
  </script>