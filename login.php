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
        <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
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
        </script>

        <style>
            body{
                background-color: white;
            }
        </style>
    </head>
    <body>
        <?php include("panel.php"); ?>
        <div class="card headerCards">
            <div class="card-header"><h4>Login</div>
            <div class="card-body">
                <form id="form" method="post" action="doLogin.php" class="form-horizontal">
                    <div class="form-group">
                        <label for="idUsername">Username:</label>       
                        <input type="text" name="username" id="idUsername" class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label for="idPassword">Password:</label>
                        <input type="text" name="password" id="idPassword" class="form-control"/>
                    </div>
                    <br>
                    <input class="btn btn-block btn-primary" type="submit" value="Login"/>
                    <input class="btn btn-block btn-secondary" type="button" id="btnRegister" value="Register"/>
                </form>
            </div>




        </div>
    </body>
</html>
