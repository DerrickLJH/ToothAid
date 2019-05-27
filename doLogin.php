<?php
session_start();
include("dbFunctions.php");
$error_msg = "";
$msg = "";

if (isset($_POST['username'])) {
    //retrieve form data
    $username = $_POST['username'];
    $password = $_POST['password'];

    //match the username and password entered with database record
    $query = "SELECT * FROM users WHERE username='" . $username . "' AND password = sha1('" . $password . "')";

    $result = mysqli_query($link, $query) or die(mysqli_error($link));

    //if record is found, store id and username into session
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_array($result);
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['username'] = $row['username'];
        $_SESSION['role'] = $row['role'];
        $_SESSION['full_name'] = $row['first_name'] . " " .
                $row['last_name'];
        header("location:index.php");
        $msg .= "<p>You have logged in successfully <a href='index.php'>Continue</a></p>";
    } else {
        $msg .= "<p>Sorry, you must enter a valid username 
                and password to log in. <a href='login.php'>Try again</a></p>";
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Story Teller - Login</title>
        <link href="stylesheets/style.css" rel="stylesheet" type="text/css"/>
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
        <script>
            $(document).ready(function () {
                alert(<?php $msg ?>)
                return false;
            });
        </script>
    </head>
    <body>
        <?php
        include("panel.php");
        ?>
    </body>
</html>