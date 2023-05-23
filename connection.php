<?php
$serverName ='localhost';
$userName ='root';
$password='';
$database='tour';

$connection=new mysqli($serverName,$userName,$password, $database);

if($connection->connect_error)
{
    die("Error is".$connection->connect_error);
}
?>