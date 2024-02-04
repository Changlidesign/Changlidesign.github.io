<?php

// The host name, probably "localhost"
$db_host = "testdbclass.db.3955817.hostedresource.com";
// The user name for the database
$db_name = "testdbclass";
// The password for that username
$db_pass = "Ajax!Test4Class";
// The name of your custom database
$db_base = "testdbclass";


// start a connection to the database
$conn = new mysqli(
	$db_host,
	$db_name,
	$db_pass,
	$db_base
	);

if($conn->connect_errno) die($conn->connect_error);

header('Content-Type: text/html; charset=UTF-8');
$conn->set_charset("utf8");
