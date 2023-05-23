<html>
<head>
    <title>Sign IN</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="css/bootstrap.min.css" type="text/javascript"></script>


    <link href="https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <script src="https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
    <style>
        body{
            background: url("Background/Sign IN.jpg")no-repeat;
            background-size: cover;
        }
    </style>
</head>

<body>
<div class="container-fluid">


    <div class="container-fluid">
        <div class="row">
              <div class="col-md-2 col-lg-2 col-sm-12 " style="min-height: 500px"></div>
            <div class="col-md-8 col-lg-8 col-sm-12 " style="min-height: 500px">
                <div class="card bg-transparent">

                    <div class="registration-container" style="width: 50%;margin: 0 auto">
                        <form action="" method="post">


                            <div class="form-group">
                                <label><b>Name</b></label>
                                <input class="form-control" name="name" id="name" placeholder=" Enter the name " required>
                            </div>

                            <div class="form-group">
                                <label><b>Mobile Number</b></label>
                                <input class="form-control" name="mobileno" id="mobileno" placeholder=" Enter the mobile number" required>
                            </div>

                            <div class="form-group">
                                <label><b>Email Address</b></label>
                                <input class="form-control" name="email" id="email" type="email" placeholder=" Enter the Email address" required>
                            </div>

                            <div class="form-group">
                                <label><b>Gender</b></label>
                                <select name="gender" id="gender" class="form-control" required>

                                    <option>Male</option>
                                    <option>Female</option>
                                </select>

                            </div>

                            <div class="form-group">
                                <label><b>Date of Birth</b></label>
                                <input class="form-control" name="dateofbirth" id="dateofbirth" placeholder=" Enter the Date of birth" required>
                            </div>
                            <div class="form-group">
                                <label><b>Password</b></label>
                                <input type="password" placeholder="Password" name="password"  " required>
                            </div>

                            <div class="form-group">
                                <input type="Submit"name="SubmitButton" class="btn btn-dark ">

                            </div>


<?php
echo '<pre>';
if(isset($_POST['SubmitButton']))
{
    $name = $_POST['name'];
    $mobileno = $_POST['mobileno'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $dateofbirth = $_POST['dateofbirth'];
    $password =md5($_POST['password']);

    include 'connection.php';
    $insert_query=("INSERT INTO signup(name,mobileno,email,gender,dateofbirth,password) values('$name','$mobileno','$email','$gender','$dateofbirth','$password')");

    $result=mysqli_query($connection,$insert_query);

    if($result)
    {

        header('location:login.php');

    }
    else
    {
        echo'Failed!!Data has not been inserted';
    }
    }
?>



                        </form>

                </div>
            </div>


</div>
            <div class="col-md-2 col-lg-2 col-sm-12 " style="min-height: 500px"></div>
    </div>
</div>

    <script>
        $(function () {
            $("#dateofbirth").datepicker();
        });
    </script>

</body>

</html>
