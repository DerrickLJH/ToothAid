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
                    <img class="loc card-img-top" src="img/yewtee.jpg" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">Yew Tee Square Clinic</h4>
                        <a href="directions.php" class="btn btn-primary">Directions <i class="fas fa-directions"></i></a>
                    </div>
                </div>
                <div class="cardLoc card grad" style="width:400px">
                    <img class="loc card-img-top" src="img/woodlands.jpg" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">Woodlands Clinic</h4>
                        <a href="#" class="btn btn-primary">Directions <i class="fas fa-directions"></i></a>
                    </div>
                </div>
                <div class="cardLoc card grad" style="width:400px">
                    <img class="loc card-img-top" src="img/bukit batok.jpg" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">Bukit Batok Clinic</h4>
                        <a href="#" class="btn btn-primary">Directions <i class="fas fa-directions"></i></a>
                    </div>
                </div>
                <div class="cardLoc card grad" style="width:400px">
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
