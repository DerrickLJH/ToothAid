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
        <!-- The core Firebase JS SDK is always required and must be listed first -->
        <script src="https://www.gstatic.com/firebasejs/6.0.4/firebase-app.js"></script>
        <script src="https://www.gstatic.com/firebasejs/6.0.4/firebase-auth.js"></script>
        <script src="https://www.gstatic.com/firebasejs/6.0.4/firebase-database.js"></script>
        <script>
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
            database = firebase.database();

            var ref = database.ref('data/appointment');
            ref.on('value', gotData, errData);

            function gotData(data) {
                var appointments = data.val();
                var keys = Object.keys(appointments);
                console.log(keys);
                for (var i = 0; i < keys.length; i++) {
                    var k = keys[i];
                    var name = appointments[k].name;
                    var email = appointments[k].email;
                    var mobile = appointments[k].mobile;
                    var datetime = appointments[k].datetime;
                    var service = appointments[k].service;
                    var prefclinic = appointments[k].clinic;
                    //console.log(name, email,mobile,datetime, service, prefclinic);

                }
            }

            function errData(err) {
                console.log('Error!');
                console.log(err);
            }
        </script>
        <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
        <script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/fontawesome-all.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/moment.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <?php include("panel.php") ?>
        <div class="card headerCards">
            <div class="card-body">               
                <h4>Manage Appointments</h4>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="cardLoc card" style="width:400px">
                        <img class="loc card-img-top" id="clinicImg" src="img/yewtee.jpg" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title" id="clinicName">Yew Tee Square Dental Clinic</h4>
                            <a href="directions.php" class="btn btn-primary">Directions <i class="fas fa-directions"></i></a>
                        </div>
                    </div>
                </div>
            </div>
    </body>
</html>
