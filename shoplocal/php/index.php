<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Shop Local</title>
    <link rel="stylesheet" href="../css/master.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>

    <!-- <?php require_once '../layouts/nav.php'; ?> -->

    <div class="signup-image">
        <img src="../images/logo4.png" alt="shop local logo">
    </div>

    <div class="search-container">
       <form>
         <div class="search-field">
           <input type="text" placeholder="Find..." name="find">
           <input type="text" placeholder="Near..." name="near">
           <button type="submit"><i class="fa fa-search"></i></button>
         </div>
       </form>
    </div>
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
        disableDoubleClickZoom: false,
        streetViewControl: true
      });
    }
    </script>

    <!-- The core Firebase JS SDK is always required and must be listed first -->
    <script src="https://www.gstatic.com/firebasejs/7.24.0/firebase-app.js"></script>

    <!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
     <script src="https://www.gstatic.com/firebasejs/7.24.0/firebase-analytics.js"></script>

     <script>
        // Your web app's Firebase configuration
        // For Firebase JS SDK v7.20.0 and later, measurementId is optional
        var firebaseConfig = {
          apiKey: "AIzaSyClkGyBgCWivGSoFt4iPkiU9ArZJJRKJAI",
          authDomain: "shoplocal-bc619.firebaseapp.com",
          databaseURL: "https://shoplocal-bc619.firebaseio.com",
          projectId: "shoplocal-bc619",
          storageBucket: "shoplocal-bc619.appspot.com",
          messagingSenderId: "481482497274",
          appId: "1:481482497274:web:83718e707b38bde726bd43",
          measurementId: "G-49M9JRCQYV"
        };
        // Initialize Firebase
        firebase.initializeApp(firebaseConfig);
        firebase.analytics();
      </script>
  </body>
</html>
