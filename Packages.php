<html>
<head>
    <title>Agency Admin Page </title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="css/bootstrap.min.css" type="text/javascript"></script>


    <link href="https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <script src="https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>


</head>
<style>
    body{
        background:url("Admin.jpg") no-repeat;
        background-size: cover;
        color: #ffc107;

    }

    td{
        color: indigo;
    }

    button {
        background-color: #04AA6D;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 100%;
        opacity: 0.9;
    }

    button:hover {
        opacity:1;
    }

    /* Float cancel and delete buttons and add an equal width */
    .cancelbtn, .deletebtn {
        float: left;
        width: 50%;
    }

    /* Add a color to the cancel button */
    .cancelbtn {
        background-color: #ccc;
        color: black;
    }

    /* Add a color to the delete button */
    .deletebtn {
        background-color: #f44336;
    }

    /* Add padding and center-align text to the container */
    .container {
        padding: 16px;
        text-align: center;
    }

    /* The Modal (background) */
    .modal {
        display: none; /* Hidden by default */
        position: fixed; /* Stay in place */
        z-index: 1; /* Sit on top */
        left: 0;
        top: 0;
        width: 100%; /* Full width */
        height: 100%; /* Full height */
        overflow: auto; /* Enable scroll if needed */
        background-color: #474e5d;
        padding-top: 50px;
    }

    /* Modal Content/Box */
    .modal-content {
        background-color: #fefefe;
        margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
        border: 1px solid #888;
        width: 50%; /* Could be more or less, depending on screen size */
    }

    /* Style the horizontal ruler */
    hr {
        border: 1px solid #f1f1f1;
        margin-bottom: 25px;
    }

    /* The Modal Close Button (x) */
    /*.close {*/
    /*    position: absolute;*/
    /*    right: 35px;*/
    /*    top: 15px;*/
    /*    font-size: 40px;*/
    /*    font-weight: bold;*/
    /*    color: #f1f1f1;*/
    /*}*/

    .close:hover,
    .close:focus {
        color: #f44336;
        cursor: pointer;
    }

    /* Clear floats */
    .clearfix::after {
        content: "";
        clear: both;
        display: table;
    }

    /* Change styles for cancel button and delete button on extra small screens */
    @media screen and (max-width: 300px) {
        .cancelbtn, .deletebtn {
            width: 100%;
        }
    }


</style>
</head>

<body>

<center>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2 col-lg-2 col-sm-12 bg-transparent" style="min-height: 500px">
            </div>

            <div class="col-md-8 col-lg-8 col-sm-12 bg-transparent" style="min-height: 500px">



                <div class="card-body bg-transparent">




                    <?php
                    echo '<pre>';
                    include 'connection.php';







                    $select_query="SELECT * FROM newpackages";
                    $result=mysqli_query($connection,$select_query);
                    $serial=1;
                    ?>
                    <table class="table table-bordered table-striped table-hover">
                        <tr>
                            <td>Serial No:</td>
                            <td>District:</td>
                            <td>place:</td>
                            <td>Days:</td>
                            <td>Taka</td>
                            <td>mobile</td>


                        </tr>
                        <?php


                        while($row=mysqli_fetch_array($result))

                        {
                            ?>

                            <tr>
                                <td><?php echo $serial++ ?></td>
                                <td><?php echo $row['myCountry'] ?></td>


                                <td><?php echo $row['place'] ?></td>



                                <td><?php echo $row ['Days'] ?></td>


                                <td><?php echo $row ['Taka'] ?></td>

                                <td><?php echo $row ['mobile'] ?></td>
















                            </tr>






                            <?php
                        }
                        ?>
                    </table>
                    <?php


                    ?>




                </div>
            </div>

        </div>


    </div>
    </div>
    </div>
</center>








</body>

</html>

