<?php
include '../connection.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$product = $_POST["product"];
	$category = $_POST["category"];
	$quantity = $_POST["quantity"];
  $farmerid = $_POST["farmerid"];
$sql = "INSERT INTO stocks (product, category, quantity, farmerid)
VALUES ('$product','$category','$quantity','$farmerid')";
    //The request is using the POST method
if ($mysqli->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $mysqli->error;
}


$sql2 = "SELECT * FROM alstocks WHERE product='$product' ";
$result = mysqli_query($mysqli, $sql2);

if (mysqli_num_rows($result) > 0) {
  $sql3 = "UPDATE alstocks
  SET quantity = quantity + $quantity
  WHERE product='$product'";

  if ($mysqli->query($sql3) === TRUE) {
    echo "<br>record updated successfully";
  }
  else {
    echo "Error: " . $sql3 . "<br>" . $mysqli->error;
  }


}
else {

  $sql3 = "INSERT INTO alstocks (product, category, quantity)
  VALUES ('$product','$category','$quantity')";



     if ($mysqli->query($sql3) === TRUE) {
       echo "Nerecord created successfully";
     }
     else {
       echo "Error: " . $sql3 . "<br>" . $mysqli->error;
     }
   }
}
$mysqli->close();

?>
<!DOCTYPE html>
<html>
<head>
	<title>Create Stocks</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../../css/Stocks.css">
</head>
<body>
	<a href="../../sevafarm/sevafarm.php"><div><h1 id="sevafarm">SEVAFARM</h1></div></a>



	<div>
    <h3>Add Here<h3>
    	<form method="post">
        <input type="" name="product" placeholder="product">
    		<input type="" name="category" placeholder="category">
    		<input type="" name="quantity" placeholder="quantity">
        <input type="" name="farmerid" placeholder="farmer id">
    		<input type="submit" name="">

    </form>
  </div>
</body>
</html>
