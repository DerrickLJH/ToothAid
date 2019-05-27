<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Tooth Aid</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>    
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
        <link href="css/fontawesome-all.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>  
        <script src="js/jquery.validate.min.js" type="text/javascript"></script>
        <script src="js/additional-methods.min.js" type="text/javascript"></script>    
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        <!-- The core Firebase JS SDK is always required and must be listed first -->
        <script src="https://www.gstatic.com/firebasejs/6.0.4/firebase-app.js"></script>

        <!-- TODO: Add SDKs for Firebase products that you want to use
             https://firebase.google.com/docs/web/setup#config-web-app -->

        <script>
            // Your web app's Firebase configuration
            var firebaseConfig = {
                apiKey: "AIzaSyB6e0LFKNwLXDeMiZPbl6bdpf8ab5BMNMQ",
                authDomain: "toothaid-1558875904634.firebaseapp.com",
                databaseURL: "https://toothaid-1558875904634.firebaseio.com",
                projectId: "toothaid-1558875904634",
                storageBucket: "toothaid-1558875904634.appspot.com",
                messagingSenderId: "289974946400",
                appId: "1:289974946400:web:65ecb9d90373f3f3"
            };
            // Initialize Firebase
            firebase.initializeApp(firebaseConfig);
            
            var rootRef = firebase.database().ref().child('clinics');
            document.getElementById("clinicImg").src = snapshot.child('img').val();
        </script>
    </head>
    <body>
        <?php include("panel.php"); ?>

        <div class="card headerCards">
            <div class="card-body">
                <a href="viewAllClinics.php" class="btn btn-info" style="float: right;">View All Clinics</a>
                <h4>Locate a Clinic</h4>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="cardLoc card" style="width:400px">
                    <img class="loc card-img-top" id="clinicImg" src="" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title" id="clinicName">Hello World</h4>
                        <a href="directions.php" class="btn btn-primary">Directions <i class="fas fa-directions"></i></a>
                    </div>
                </div>
                <div class="cardLoc card" style="width:400px">
                    <img class="loc card-img-top" src="img/woodlands.jpg" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">Woodlands Clinic</h4>
                        <a href="#" class="btn btn-primary">Directions <i class="fas fa-directions"></i></a>
                    </div>
                </div>
                <div class="cardLoc card" style="width:400px">
                    <img class="loc card-img-top" src="img/bukit batok.jpg" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">Bukit Batok Clinic</h4>
                        <a href="#" class="btn btn-primary">Directions <i class="fas fa-directions"></i></a>
                    </div>
                </div>
                <div class="cardLoc card" style="width:400px">
                    <img class="loc card-img-top" src="img/amk.jpg" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">Ang Mo Kio Clinic</h4>
                        <a href="#" class="btn btn-primary">Directions <i class="fas fa-directions"></i></a>
                    </div>
                </div>

            </div>
        </div>
    </body>
</html>
