<?php
require '../localisation.php';
include '../connection.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$product = $_POST["product"];
	$category = $_POST["category"];
	$quantity = $_POST["quantity"];
  $farmerid = $_POST["farmerid"];
$sql = "INSERT INTO `data`(`farmerid`, `name`, `details`, `dues`)
VALUES ('$product','$category','$quantity','$farmerid')";
    // The request is using the POST method
if ($mysqli->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $mysqli->error;
}

$mysqli->close();
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Create Database</title>
	<link rel="stylesheet" type="text/css" href="../../css/database.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<a><div><h1 id="sevafarm"><?php __('SEVAFARM') ?></h1></div></a>

	<h2><?php __('Database')?></h2>

	<div>
		<form method="post">
			<input type="" name="product" placeholder="<?php __('farmer id')?>">
			<input type="" name="category" placeholder="<?php __('Name')?>">
			<input type="" name="quantity" placeholder="<?php __('Details')?>">
			<input type="" name="farmerid" placeholder="<?php __('dues')?>">
			<input type="submit" name="">

	</form>
	</div>
</body>
</html>
