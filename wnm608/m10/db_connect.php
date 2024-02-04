<?php

$db_host = "localhost";

$db_name = "ChangLi";

$db_pass = "Chevyli199508150";

$db_base = "ChangLi";

$conn = new mysqli(
$db_host,
$db_name,
$db_pass,
$db_base
);

if($conn->connect_errno) die($conn->connect_errno);

header('Content-Type:text/html; charset=UTF-8');
$conn->set_charset('utf8');









