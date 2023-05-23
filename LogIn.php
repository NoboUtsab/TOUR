we<html>
<head>
    <title>LogIN</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="css/bootstrap.min.css" type="text/javascript"></script>

    <link href="https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <script src="https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
    <style>
        body{
            background: url("Background/LogIn.jpg")no-repeat;
            background-size: cover;
        }
        a{
            color: #b6d4fe;
        }
    </style>

</head>
<h3>   </h3>


<body>
<div class="container-fluid">
    <div class="row">

    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2 col-lg-2 col-sm-12 " style="min-height: 500px"></div>
            <div class="col-md-8 col-lg-8 col-sm-12 " style="min-height: 500px">
                <div class="card bg-transparent">
                    <div class="registration-container" style="width: 50%;margin: 0 auto">
                        <form action="" method="post">

                            <div class="form-group">
                                <label><b>Email Address</b></label>
                                <input class="form-control" name="email" id="email" type="email" placeholder=" Enter your Email address" required>
                            </div>

                            <div class="form-group">
                                <label><b>Password</b></label>
                                <input class="form-control" name="password" id="password" type="password" placeholder=" Enter your password" required>
                            </div>

                            <div class="form-group">
                                <input type="Submit"name="login" class="btn btn-primary">
                            </div>

                            <h3 style="color: darkblue">Need an account?</h3>
                            <a href="Sign IN.php">SignIN</a>

                            <?php
                            echo'<pre>';
                            include 'connection.php';
                                if(isset($_POST['login']))
                                    
                            {
                                $email = $_POST['email'];
                                $password = $_POST['password'];

                                $email=stripcslashes($email);
                                $password=stripcslashes($password);

                                $email=mysqli_real_escape_string($connection,$email);
                                $password=mysqli_real_escape_string($connection,$password);

                                // $password=admin($password);

                                $sql="select * from signup where email='$email' and password='$password'";
                                $result=mysqli_query($connection,$sql);
                                if(mysqli_num_rows($result)==1)
                                {
                                    header('location:place.php');
                                }
                                else if($email=="noboutsab@gmail.com" && $password=="admin")
                                {
                                    header('location:Admin.php');
                                }
                                else
                                {
                                    echo 'LogIN Failed';
                                }

                            }

                            ?>


                        </form>

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
</body>
</html>

