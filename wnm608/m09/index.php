<?php

// include, include_once, require, require_once
include_once "lib/php/print_o.php";

// instantiate variables
$filename = "data/data.json";
$file = file_get_contents($filename);
// echo $file;
$data = json_decode($file);
// echo $data;
// echo "<pre>",print_r($data),"</pre><hr>";
// echo $data->users[2]->name;
// print_r($data);
// print_o($data);

// HINT #1: json_encode()
// HONT #2: file_put_contents()




// make functions
// global vs local
function printUser($user){
	?>
	<div class="user">
		<h2 class="user-name">
			<?= $user->name ?>
		</h2>
		<div>
			<strong>Age</strong>
			<?= $user->age ?>
		</div>
		<div>
			<strong>Job</strong>
			<?= $user->type ?>
		</div>
		
	</div>
	<?php
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Friends</title>
<style>
.user {
	/*font-weight:bold;*/
	margin-left:1em;
	margin-top:0.2em;
	padding:0.2em 0.5em;
	border:1px solid #ccc;
}
</style>
</head>
<body>

	<?php 
	//include "../m08/partials/header.html";
	?>

	<ol>
	<?php
	for($i=0; $i<count($data->notes); $i++){
		echo "<li> {$data->notes[$i]}</li>";
	}
	?>
	</ol>

	<?php
	if(isset($_GET['id'])) {
		// Show one user's information
		printUser($data->users[$_GET['id']]);
		echo "<a href='index.php'>Back</a>";
	} else {
		// Show the user list
		foreach($data->users as $id=>$value) {
			echo "
			<div class='user'>
				<span>$value->name</span>
				<a href='?id=$id'>&gt;</a>
			</div>
			";
		}
	}
	?>
</body>
</html>