<!DOCTYPE html>
<html>
  <head>
    <style type="text/css">
      #map {
        height: 100%;
      }
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
  </head>
  <body>
    <div id="map"></div>
    <script defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyClkGyBgCWivGSoFt4iPkiU9ArZJJRKJAI
        &libraries=visualization&callback=initMap">
    </script>

    <script>
      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 0, lng: 0},
          zoom: 3,
          styles: [{
            featureType: 'poi',
            stylers: [{ visibility: 'off' }]  // Turn off points of interest.
          }, {
            featureType: 'transit.station',
            stylers: [{ visibility: 'off' }]  // Turn off bus stations, train stations, etc.
          }],
          disableDoubleClickZoom: true,
          streetViewControl: false
        });
      } 
    </script>

  </body>
</html>
