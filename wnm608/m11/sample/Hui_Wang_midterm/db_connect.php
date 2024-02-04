<?php

$db_host = "localhost";

$db_name = "miowebte_wnm608m";

$db_pass = "PHP!Test4#Class";

$db_base = "miowebte_wnm608mjc";

$conn = new mysqli(
$db_host,
$db_name,
$db_pass,
$db_base
);

if($conn->connect_errno) die($conn->connect_errno);

header('Content-Type:text/html; charset=UTF-8');
$conn->set_charset('utf8');









