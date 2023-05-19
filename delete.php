<?php
include_once 'config.php';

$id = $_GET['id'];

$result =  mysqli_query($connection, "DELETE FROM customer WHERE id='$id'");

header("Location:list.php");
?>