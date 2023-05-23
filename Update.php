<?php
$Id=$_REQUEST['Id'];

include 'connection.php';
$delete_query="delete from signup WHERE Id='$Id'";
if(mysqli_query($connection,$delete_query))
{
    echo 'Data has been deleted';
}
else
{
    echo'failed';
}
header('location:Admin.php');