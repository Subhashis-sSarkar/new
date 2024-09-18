<?php
$con = mysql_connect('localhost','root');
if($con){
    echo "connection successfull";
}

$a = 20;
$b = 30;

$c = $a + $b;

echo "$c";


?>