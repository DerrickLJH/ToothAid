
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

        <style></style>
    </head>
    <body>
        <?php include("panel.php"); ?>
        <div class="card cardSchedule headerCards">
            <div class="card-header"><h4>Schedule an Appointment</div>
            <div class="card-body">
                <div class="alert alert-danger" role="alert" id="alertBox">                
                </div>
                <form id="form" method="post" action="#" class="form-horizontal">
                    <div class="form-group">
                        <label for="idName">Name<span style="color:red">*</span>:</label>         
                        <input type="text" name="name" id="idName" class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label for="idAddress">Address:</label>
                        <input type="text" name="address" id="idAddress" class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label for="idPostal">Postal Code:</label>
                        <input type="text" name="postalcode"
                               placeholder="enter a 6-digit code" id="idPostal" class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label for="selCountry">Country<span style="color:red">*</span>:</label>
                        <select id="selCountry" name="country" class="form-control">
                            <option value="" selected>Please select...</option>
                            <option value="AA">AA</option>
                            <option value="BB">BB</option>
                            <option value="CC">CC</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Gender<span style="color:red">*</span>:</label>
                        <div class="form-check-inline">
                            <label class="form-check-label" for="radio1">
                                <input type="radio" class="form-check-input" id="radio1" name="gender" value="m">Male
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label" for="radio2">
                                <input type="radio" class="form-check-input" id="radio2" name="gender" value="f">Female
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Preferences<span style="color:red">*</span>:</label>
                        <div class="form-check-inline">
                            <label class="form-check-label" for="check1">
                                <input type="checkbox" id="check1" name="color[]" value="r" class="chkboxlist form-check-input">Red
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label" for="check2">
                                <input type="checkbox" id="check2" name="color[]" value="g" class="chkboxlist form-check-input">Green
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label" for="check3">
                                <input type="checkbox" id="check3" name="color[]" value="b" class="chkboxlist form-check-input">Blue
                            </label>
                        </div>            
                    </div>
                    <div class="form-group">
                        <label for="idName">Phone<span style="color:red">*</span>:</label>
                        <input type="text" name="phone" id="idPhone" class="form-control"/>
                    </div>

                    <div class="form-group">
                        <label for="idEmail">Email<span style="color:red">*</span>:</label>
                        <input type="text" name="email" id="idEmail" class="form-control"/>
                    </div>

                    <div class="form-group">
                        <label for="idPwd">Password<span style="color:red">*</span>:</label>             
                        <input type="password" name="pwd" id="idPwd" class="form-control" placeholder="6-8 characters"/>
                    </div>
                    <div class="form-group">
                        <label for="idVerifyPwd">Verify Password<span style="color:red">*</span>:</label>
                        <input type="password" name="verifypwd" id="idVerifyPwd" class="form-control"/>
                    </div>

                    <input class="btn btn-block btn-primary" type="submit" value="Submit"/>
                    <input class="btn btn-block btn-default" type="reset" id="btnReset" value="Reset"/>
                </form>
            </div>




        </div>
    </body>
</html>
