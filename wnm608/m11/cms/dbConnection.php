<?php

$db_host = "localhost";
$db_name = "miowebte_wnm608m";
$db_pass = "PHP!Test4#Class";
$db_base = "miowebte_wnm608mjc";

$link = mysqli_connect($db_host, $db_name, $db_pass, $db_base);


// Check connection

if($link === false){

    die("ERROR: Could not connect. " . mysqli_connect_error());

}
?>