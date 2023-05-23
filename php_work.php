<html>
<head>
    <meta charset="utf-8">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <body>
<?php
echo "Hello world";
$data = 100;
echo'<br> The value of data is ='.$data;
$firstnumber =120;
$secondnumber =100;
$result=$firstnumber+$secondnumber;
echo '<br>The value of result is =' .$result;
echo '<pre>';
$array=array('Karim','Rahim',100 ,120);
print_r($array);
var_dump($array);
for($index=0;$index<count($array);$index++)
    {
        echo $array[$index].'<br>';
    }
foreach ($array as $value)
{
    echo $value .'<br>';
}
?>

</body>
</head>
</html>