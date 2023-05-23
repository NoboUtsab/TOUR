<html>
<head>
    <title>Welcome page </title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="css/bootstrap.min.css" type="text/javascript"></script>


    <link href="https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <script src="https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>

    <style>
        body{
        background:url("Background/welcome.jpg") no-repeat;
            background-size: cover;
        }
        h3{
            text-align: left;
            color: red;

        }

    </style>
</head>
<body>

<center>
    <div class="col-md-2 col-lg-2 col-sm-12 " style="min-height: 500px"></div>
    <div class="col-md-8 col-lg-8 col-sm-12 " style="min-height: 500px">
        <MARQUEE ONMOUSEOVER="this.start()" ONMOUSEOUT="this.stop()" BEHAVIOR="alternate">
            <h3>WELCOME TO TAKE A BREAK</h3>
        </MARQUEE>
        <div class="card bg-transparent" >
            <div class="registration-container" style="width: 50%;margin: 0 auto">
                <form action="" method="post">

                    <div class="form-group">
                        <label><b>LogIn As </b></label>
                        <select name="loginas" id="loginas" class="form-control" required>

                            <option>Tourist</option>
                            <option>Travel Agency</option>

                        </select>

                    </div>

                    <input type="Submit"name="choose" class="btn btn-primary">
            </div>
            <?php
            if(isset($_POST['choose']))
            {
                $loginas=$_POST['loginas'];
                if($loginas=="Tourist")
                {
                    header('location:LogIn.php');
                }
            }
       if(isset($_POST['choose']))
            {
                $loginas=$_POST['loginas'];
                if($loginas=="Travel Agency")
                {
                    header('location:Agencylogin.php');
                }
            }
            ?>


            </form>
        </div>
    </div>

</center>
</body>
</html>