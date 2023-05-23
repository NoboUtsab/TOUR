<?php
//$conn = new mysqli('localhost','root','','tour');
//if ($conn->connect_error) {
//    die('Error : ('. $conn->connect_errno .') '. $conn->connect_error);
//}
//?>
<!---->
<!--  -->
<?php
////db details
//$db_host = 'localhost';
//$db_user = 'root';
//$db_pass = '';
//$db_name = 'li_demo';
//
////connect and select db
//$con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
//?>
<?php
$serverName ='localhost';
$userName ='root';
$password='';
$database='tour';

$con=mysqli_connect($serverName,$userName,$password, $database);


?>
