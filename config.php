<?php

$hostname="localhost";
$username="root";
$password="";
$dbName="order_db";
$connection =mysqli_connect($hostname,$username,$password,$dbName);

if($connection){
    echo"connected";
} else {
    echo"not connected";
}

?>