<?php
include '../connection.php';
$sql='select * from alstocks';
$stocks = $mysqli->query($sql);
foreach($stocks as $stock ){

}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Stocks</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../../css/stocks.css">
</head>
<body>
	<a href="../../sevafarm/sevafarm.php"><div><h1 id="sevafarm">SEVAFARM</h1></div></a>
    <div class="pic1">
            <a>
           <a href="../../sevafarm/sevafarm.php"><img src="../../pictures/sevalogo.png" height="80px" width="120px"></a>

            </a>
         </div>
	<h2>Stocks</h2>
	<div id="Stocks">
	<form action="">
  <label>
    Date
    <input type="date" name="Date">
  </label>
  	</form>
	</div>
	<div class="storage">
			 <a href="estocks.php"><button type="button" class="login">Edit price</button>
			 <a href="estocks.php"><iframe src="estocks.php" height="100" width="100%">Create</iframe></a>
	<div>
	<div class="storage">

	<div>
	<div>
		<form action="">
			<table>
		<thead>
			<th>Si.No</th>
			<th>Product</th>
			<th>Category</th>
			<th>Quantity</th>
			<th>Price</price>

		</thead>
		<?php
		foreach($stocks as $stock ):
			?>
		<tr>
			<td><?= $stock['ID']; ?></td>
			<td><?= $stock['product']; ?></td>
			<td><?= $stock['category']; ?></td>
			<td><?= $stock['quantity']; ?></td>
			<td><?= $stock['price']; ?></td>

		</tr>
		<?php endforeach; ?>

	</table>
		</form>
	</div>

</body>
</html>
