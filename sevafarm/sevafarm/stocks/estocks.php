<?php
include '../connection.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$product = $_POST["product"];
	$category = $_POST["category"];
	$price = $_POST["price"];



$sql2 = "SELECT * FROM alstocks WHERE product='$product' ";
$result = mysqli_query($mysqli, $sql2);

if (mysqli_num_rows($result) > 0) {
  $sql3 = "UPDATE alstocks
  SET price =$price
  WHERE product='$product'";

  if ($mysqli->query($sql3) === TRUE) {
    echo "<br>record updated successfully";
  }
  else {
    echo "Error: " . $sql3 . "<br>" . $mysqli->error;
  }


}
else {
	echo "product is not available";
}

}
$mysqli->close();

?>
<!DOCTYPE html>
<html>
<head>
	<title>Item Entry</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../../css/stocks.css">
</head>
<body>



	</div>
	<div>
    <h3>Add Here<h3>
    	<form method="post">
        <input type="" name="product" placeholder="product">
        <select id="category" name="category">

                  <option value="fruits">fruits</option>
                  <option value="vegetables">vegetables</option>
                  <option value="cereals">cereals</option>
                  <option value="pulses">pulses</option>
              </select>
    		<input type="" name="price" placeholder="price">

    		<input type="submit" name="">

    </form>
  </div>
</body>
</html>
