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



function makeUpload($file,$folder) {
	$filename = microtime(true) . "_" .
		$_FILES[$file]['name'];

	if(@move_uploaded_file(
		$_FILES[$file]['tmp_name'],
		$folder . $filename
	)) return ["result"=>$filename];
	else return [
		"error"=>"File Upload Failed",
		"_FILES"=>$_FILES,
		"filename"=>$filename
	];
}


// $c = connection, $ps = prepared statement, $st = statement type, $p = parameters
function makeQuery($c,$ps,$st,$p) {
	if($st!="" && $statement = @$c->prepare($ps)){
		if(
			@$statement->bind_param($st, ...$p) &&
			@$statement->execute()
		) {
			$r = substr($ps,0,6)=="SELECT" ?
				fetchAll($statement->get_result()) :
				[];
			return [
				"params"=>$p,
				"qry"=>$ps,
				"result"=>$r
			];
		}
	} else {
		$r = $c->query($ps);
		if(!$c->errno) return [
			"qry"=>$ps,
			"result"=>fetchAll($r)
		];
	}
	return [
		"qry"=>$ps,
		"error"=>$c->error
	];
}


function makeStatement($c,$t,$p) {
	switch($t) {
		case "users_all":
			return makeQuery($c,"SELECT * FROM `track_users`","",$p);
		case "animals_all":
			return makeQuery($c,"SELECT * FROM `track_animals`","",$p);
		case "locations_all":
			return makeQuery($c,"SELECT * FROM `track_locations`","",$p);

		/*
		SELECT * FROM table WHERE id=? AND category=? AND lat=?
		isd
		[15,'fruit',-120.475675]
		*/

		case "animals_from_user":
			return makeQuery($c,"SELECT * FROM `track_animals` WHERE uid = ?","i",$p);
		case "locations_from_animal":
			return makeQuery($c,"SELECT * FROM `track_locations` WHERE aid = ?","i",$p);


		case "user_by_id":
			return makeQuery($c,"SELECT * FROM `track_users` WHERE id = ?","i",$p);
		case "animal_by_id":
			return makeQuery($c,"SELECT * FROM `track_animals` WHERE id = ?","i",$p);
		case "location_by_id":
			return makeQuery($c,"SELECT * FROM `track_locations` WHERE id = ?","i",$p);


		case "check_login":
			return makeQuery($c,"SELECT `id` FROM `track_users` WHERE username = ? AND password = md5(?)","ss",$p);

		case "recent_locations":
			return makeQuery($c,"SELECT
				a.*, l.*
				FROM `track_animals` AS a
				LEFT JOIN (
					SELECT aid, lat, lng, icon
					FROM `track_locations`
					ORDER BY `date_create` DESC
				) AS l
				ON l.aid = a.id
				WHERE a.uid = ?
				GROUP BY l.aid
				","i",$p);


		case "search_animals":
			$search = "%$p[0]%";
			return makeQuery($c,"SELECT
				*
				FROM `track_animals`
				WHERE (
					`name` LIKE ? OR
					`type` LIKE ? OR
					`color` LIKE ? OR
					`description` LIKE ?
				) AND `uid` = ?
				","ssssi",[$search,$search,$search,$search,$p[1]]);

		case "filter_animals":
			return makeQuery($c,"SELECT
				*
				FROM `track_animals`
				WHERE `$p[2]` = ?
				AND `uid` = ?
				","si",[$p[0],$p[1]]);




		// INSERT STATEMENTS

		case "insert_user":
			$r = makeQuery($c,"SELECT id FROM `track_users` WHERE username=? OR email=?", "ss", [$p[0],$p[1]]);
			if(count($r['result'])) return ["error"=>"Username or Email exists"];
			

			$r = makeQuery($c,"INSERT INTO
				`track_users`
				(`username`,`email`,`password`,`img`,`date_create`)
				VALUES
				(?,?,md5(?),'https://via.placeholder.com/400/?text=USER',NOW())",
				"sss",$p);
			return ["result"=>"Success"];

		case "insert_animal":
			$r = makeQuery($c,"INSERT INTO
				`track_animals`
				(`uid`,`name`,`type`,`color`,`description`,`img`,`date_create`)
				VALUES
				(?,?,?,?,?,'https://via.placeholder.com/400/?text=ANIMAL',NOW())",
				"issss",$p);
			return ["result"=>"Success"];

		case "insert_location":
			$r = makeQuery($c,"INSERT INTO
				`track_locations`
				(`aid`,`lat`,`lng`,`description`,`icon`,`date_create`)
				VALUES
				(?,?,?,?,'img/Location.png',NOW())",
				"idds",$p);
			return ["result"=>"Success"];



		// UPDATE STATEMENTS

		case "update_user":
			$r = makeQuery($c,"UPDATE
				`track_users`
				SET
					name=?,
					email=?,
					phone=?,
					address=?
				WHERE id=?",
				"ssssi",$p);
			return ["result"=>"Success",$r];
		case "update_users_password":
			$r = makeQuery($c,"UPDATE
				`track_users`
				SET password=md5(?)
				WHERE id=?",
				"si",$p);
			return ["result"=>"Success"];

		case "update_animal":
			$r = makeQuery($c,"UPDATE
				`track_animals`
				SET
					`name`=?,
					`type`=?,
					`color`=?,
					`description`=?
				WHERE `id`=?",
				"ssssi",$p);
			return ["result"=>"Success"];
			
		case "edit_animal_image":
			$r = makeQuery($c,"UPDATE
				`track_animals`
				SET `img`=?
				WHERE `id`=?",
				"si",$p);
			return ["result"=>"Success"];

		case "edit_user_image":
			$r = makeQuery($c,"UPDATE
				`track_users`
				SET `img`=?
				WHERE `id`=?",
				"si",$p);
			return ["result"=>"Success"];


		// DELETE STATEMENTS

		case "delete_user":
			$r = makeQuery($c,"DELETE FROM `track_users` WHERE id=?","i",$p);
			return ["result"=>"Success"];
		case "delete_animal":
			$r = makeQuery($c,"DELETE FROM `track_animals` WHERE id=?","i",$p);
			return ["result"=>"Success"];
		case "delete_location":
			$r = makeQuery($c,"DELETE FROM `track_locations` WHERE id=?","i",$p);
			return ["result"=>"Success"];



		default:
			return ["error"=>"No Matched Type"];
	}
}




if(!empty($_FILES)) {
	$r = makeUpload("image","../../uploads/");
	die(json_encode($r));
}



// POST AND GET DUMP
$data = json_decode(file_get_contents("php://input"));


echo json_encode(
	makeStatement(
		makeConn(),
		@$data->type,
		@$data->params
	),
	JSON_NUMERIC_CHECK
);