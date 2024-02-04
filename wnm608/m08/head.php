<!DOCTYPE html>
<html lang="en">
<head>
<title>Index page</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" href="carousel.css">

	<meta charset="UTF-8">

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="common.css">
	<link rel="stylesheet" href="grid.css">
	<link rel="stylesheet" href="product.css">
<script>
$(function(){
	$(".toggle input").on("change",function(){
		$(".total-toggles").html($(".toggle input:checked").length)
	})
})
</script>
