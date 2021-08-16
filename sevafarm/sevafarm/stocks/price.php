<?php
include '../connection.php';
$sql='SELECT product,category,price from alstocks ORDER BY category';
$stocks = $mysqli->query($sql);
foreach($stocks as $stock ){

}
?>
<!DOCTYPE html>
<html>
<head>
	<title>editStocks</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../../css/Stocks.css">
</head>
<body>
	<a href="../../sevafarm/sevafarm.php"><div><h1 id="sevafarm">SEVAFARM</h1></div></a>




    <thead>

			<th>Product</th>
			<th>Category</th>
			<th>Price</price>

		</thead>
    <?php
    foreach($stocks as $stock ):
      ?>
    <tr>
    <td><?= $stock['product']; ?></td>
    <td><?= $stock['category']; ?></td>
    <td><?= $stock['price']; ?></td>
		<input type="" name="price" placeholder="quantity" value="<?= $data['price']?>">

		<input type="submit" name="">
  </tr>


</body>
</html>
