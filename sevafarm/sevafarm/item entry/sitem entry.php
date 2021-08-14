<?php
require '../localisation.php';
include '../connection.php';
$sql='select * from stocks';
$stocks = $mysqli->query($sql);
foreach($stocks as $stock ){

}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Show Item Entry</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../../css/Stocks.css">
</head>
<body>
	<a href="../../sevafarm/sevafarm.php"><div><h1 id="sevafarm">SEVAFARM</h1></div></a>

	<h2>Items</h2>

  	</form>
	</div>
	<div>

			<table>
		<thead>
			<th>Si.No</th>
			<th>Product</th>
			<th>Category</th>
			<th><?php __('Quantity'); ?></th>
			<th>farmerid</th>
		</thead>
		<?php
		foreach($stocks as $stock ):
			?>
		<tr>
			<td><?=   $stock['id']; ?></td>
			<td><?php __($stock['product']); ?></td>
			<td><?php __($stock['category']); ?></td>
			<td><?php __($stock['quantity']); ?></td>
			<td><?php __($stock['farmerid']); ?></td>
		</tr>
		<?php endforeach; ?>

	</table>

	</div>

</body>
</html>
