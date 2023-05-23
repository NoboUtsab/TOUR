<?php
//require_once "search.php.php";
//if (isset($_GET['term'])) {
//
//    $query = "SELECT * FROM cities WHERE city_name LIKE '{$_GET['term']}%' LIMIT 25";
//    $result = mysqli_query($conn, $query);
//
//    if (mysqli_num_rows($result) > 0) {
//        while ($user = mysqli_fetch_array($result)) {
//            $res[] = $user['city_name'];
//        }
//    } else {
//        $res = array();
//    }
//    //return json res
//    echo json_encode($res);
//}
//?>


<?php


require_once('./include/search.php');

$postDetails = array();

$search_key = $_GET['term'];

//get rows query
$query = "SELECT * FROM cities where city_name like '%$search_key%'";
$result = mysqli_query($con, $query);

//number of rows
$rowCount = mysqli_num_rows($result);

if ($rowCount > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $ajax-db-search[] = ucfirst($row['post_title']);
    }
}
echo json_encode($ajax-db-search);

?>