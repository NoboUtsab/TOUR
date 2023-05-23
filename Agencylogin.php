<html>
<head>
    <title>LogIN</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="css/bootstrap.min.css" type="text/javascript"></script>

    <link href="https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <script src="https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
    <style>
        body{
            background: url("Background/Agencylogin.jpg")no-repeat;
            background-size: cover;
        }
        a{
            color: #b6d4fe;
        }
        label{
            color: #cff4fc;
        }
    </style>

</head>



<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2 col-lg-2 col-sm-12 " style="min-height: 500px"></div>
            <div class="col-md-8 col-lg-8 col-sm-12 " style="min-height: 500px">
                <div class="card bg-transparent">
                    <div class="registration-container" style="width: 50%;margin: 0 auto">
                        <form action="" method="post">

                            <div class="form-group">
                                <label><b>Agency Name</b></label>
                                <input class="form-control" name="name" id="name" type="name" placeholder= "Enter the Agency Name"required>
                            </div>
                            <div class="form-group">
                            <label><b>Email address</b></label>
                            <input class="form-control" name="email" id="email" type="email" placeholder= " Enter your Email address"required>
                    </div>

                    <div class="form-group">
                                <label><b>Password</b></label>
                                <input class="form-control" name="Password" id="Password" type="Password" placeholder=" Enter your password" required>
                            </div>

                            <div class="form-group">
                                <input type="Submit"name="login" class="btn btn-primary">
                            </div>

                            <h3 style="color: darkblue">Need an account?</h3>
                            <a href="Agencysign.php">SignIN</a>

                            <?php
                            echo'<pre>';
                            include 'connection.php';
                            if(isset($_POST['login']))
                            {
                                $name = $_POST['name'];
                                $email = $_POST['email'];
                                $Password = $_POST['Password'];

                                $name=stripcslashes($name);
                                $email=stripcslashes($email);
                                $Password=stripcslashes($Password);

                                $name=mysqli_real_escape_string($connection,$name);
                                $email=mysqli_real_escape_string($connection,$email);
                                $password=mysqli_real_escape_string($connection,$Password);

                                // $password=admin($password);

                                $sql="select * from agencysign where name='$name' and email='$email' and Password='$Password'";
                                $result=mysqli_query($connection,$sql);
                                if(mysqli_num_rows($result)==1)
                                {
                                    header('location:agencyinfo.php');
                                }
                                else if( $name=="admin" && $email=="noboutsab@gmail.com" && $Password=="admin")
                                {
                                    header('location:Agencyadmin.php');
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


