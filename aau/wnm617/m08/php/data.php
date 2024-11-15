<?php


function makeConn() {
	$host = "localhost";
	$user = "ChangLi";
	$pass = "Chevyli199508150";
	$dbname = "ChangLi";

	$c = new mysqli($host,$user,$pass,$dbname);
	if($c->connect_errno) die($c->connect_error);
	$c->set_charset('utf8');
	return $c;
}


function fetchAll($r) {
	$a = [];
	while($row = $r->fetch_assoc())
		$a[] = $row;
	return $a;
}


// $c = connection, $ps = prepared statement
function makeQuery($c,$ps) {
	$r = $c->query($ps);
	if(!$c->errno) return [
		"qry"=>$ps,
		"result"=>fetchAll($r)
	];
	else return [
		"qry"=>$ps,
		"error"=>$c->error
	];
}


function makeStatement($c,$t) {
	switch($t) {
		case "users_all":
			return makeQuery($c,"SELECT * FROM `track_users`");
		case "animals_all":
			return makeQuery($c,"SELECT * FROM `track_animals`");
		case "locations_all":
			return makeQuery($c,"SELECT * FROM `track_locations`");
	}
}


echo json_encode(
	makeStatement(
		makeConn(),
		(isset($_GET['type']) ? $_GET['type'] : "animals_all")
	),
	JSON_NUMERIC_CHECK
);