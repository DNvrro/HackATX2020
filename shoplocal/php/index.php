<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Shop Local</title>
    <link rel="stylesheet" href="../css/master.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://www.gstatic.com/firebasejs/7.24.0/firebase-app.js"></script>
  </head>
  <body>

    <?php require_once '../layouts/nav.php'; ?>

    <div class="signup-image">
        <img src="../images/shoplocallogo.png" alt="shop local logo">
    </div>

    <div class="search-container">
       <form action="./action_page.php">
         <div class="search-field">
           <input type="text" placeholder="Find..." name="find">
           <input type="text" placeholder="Near..." name="near">
           <button type="submit"><i class="fa fa-search"></i></button>
         </div>
       </form>
    </div>

    <!-- The core Firebase JS SDK is always required and must be listed first -->
    <script src="/__/firebase/7.24.0/firebase-app.js"></script>

    <!-- TODO: Add SDKs for Firebase products that you want to use
    https://firebase.google.com/docs/web/setup#available-libraries -->
    <script src="/__/firebase/7.24.0/firebase-analytics.js"></script>

    <!-- Initialize Firebase -->
    <script src="/__/firebase/init.js"></script>
  </body>
</html>
