<?
$filename = "data.json";
$file = file_get_contents($filename);
$data = json_decode($file);

$empty_array = (object)array (
"product_name" => "",
"product_desc" => "",
"product_specs" => "",
"quantity" => "",
"price" => "",
);

if (isset($_GET['action'])) {
 	if($_GET['action']=='create') {
 		$empty_array->product_name = $_POST['product_name'];
 		$empty_array->product_description = $_POST['product_description'];
 		$empty_array->product_specs = $_POST['product_specs'];
 		$empty_array->quantity = $_POST['quantity'];
 		$empty_array->price = $_POST['price'];

 		$new_id = count($data->users);
 		$data->users[] = $empty_array;

 		$jsondata = json_encode($data);
 		file_put_contents($filename, $jsondata);

 		header("location:crud.php");
 	} else if($_GET['action']=='update') {

 		$data->users[$_GET['id']]->product_name = $_POST['product_name'];
 		$data->users[$_GET['id']]->product_description = $_POST['product_description'];
 		$data->users[$_GET['id']]->product_specs = $_POST['product_specs'];
 		$data->users[$_GET['id']]->quantity = $_POST['quantity'];
 		$data->users[$_GET['id']]->price = $_POST['price'];

 		$jsondata = json_encode($data);
 		file_put_contents($filename, $jsondata);

 		header("location:crud.php");

 	} else if($_GET['action']=='delete') {
 		array_splice($data->products, $_GET['id'],1);

 		$jsondata = json_encode($data);
 		file_put_contents($filename, $jsondata);

 		header("location:crud.php");
 	}

 	}



function printuser($user){
$action = $_GET['id']=='new' ? "create" : "update";

if($_GET['id']!='new') {
		echo'[<a href="?action=delete&id={$_GET["id"]}">delete</a>]';
}
?>
<form class="user" action="crud.php?action=<?= $action?>&id=<?=$_GET['id']?>" method="post">
	<label>product-name</label>
	<input type="text" name="product-name" value="<?= $user->product_name?>">
	<label>product-description</label>
	<input type="text" name="product-description" value="<?= $user->product_description?>">
	<label>product-specs</label>
	<input type="text" name="product-specs" value="<?= $user->product_specs?>">
	<label>quantity</label>
	<input type="text" name="quantity" value="<?= $user->quantity?>">
	<label>price</label>
	<input type="text" name="price" value="<?= $user->price?>">
	<input type="submit" name="Submit">
</form>
<?
}
?>


<html>
<head>
<title>product page</title>
</head>
<body>
<?
if(isset($_GET['id'])) {
$user = $_GET['id']== 'new' ? $empty_array : $data->users[$_GET['id']];

printuser($user);
echo "<a href='crud.php'>back</a>";
} else {
echo "<a href='?id=new'>Add new user</a><br>";
foreach($data->users as $id=>$value) {
echo "<div class='user'>
		<span>$value->name</span>
		<a href='?id=$id'>&gt;</a>
	  </div>";
}

}
?>
</body>
</html>





