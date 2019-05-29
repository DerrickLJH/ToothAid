<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>ToothAid</title>
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

            var ref = database.ref('data/services');
            ref.on('value', gotData, errData);

            function gotData(data) {
                var services = data.val();
                var keys = Object.keys(services);
                console.log(keys);
                var message = "";
                for (var i = 0; i < keys.length; i++) {
                    var k = keys[i];
                    var name = services[k].name;
                    var desc = services[k].desc;
                    console.log(name, desc);
                    message += "<h2 class='bg-info text-light font-weight-bold'>" + name + "</h2><div class='text-light align-content-center' id='content'>" +
                            desc + "</div>";
                }
                $("#accordion").html(message);
                $("#accordion").accordion();
            }

            function errData(err) {
                console.log('Error!');
                console.log(err);
            }
        </script>
        <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
        <script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>
        <script src="js/jquery-ui.min.js" type="text/javascript"></script>
        <link href="css/jquery-ui.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/fontawesome-all.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/bootstrap.min.js"></script>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        <style>
            #content {
                background-color: #1B1B1B;
            }
        </style>
    </head>
    <body>
        <?php include("panel.php"); ?>
        <div class="card headerCards">
            <div class="card-body">
                <h4>Provided Services</h4>
            </div>
            <img src="img/teethhd.jpg" alt="Service Pic" style="width: 100%;"/>
        </div>
        <div id="accordion" style="margin-top: 20px; margin-bottom: 20px;">
        </div>
    </body>
</html>
