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
	<a ><div><h1 id="sevafarm"><?php __('SEVAFARM') ?></h1></div></a>

	<h2><?php __('Products'); ?></h2>



	<div>

			<table>
		<thead>
			<th>Si.No</th>
			<th><?php __('Product'); ?></th>
			<th><?php __('Category'); ?></th>
			<th><?php __('Quantity'); ?></th>
			<th><?php __('farmer id'); ?></th>
		</thead>
		<?php
		foreach($stocks as $stock ):
			?>
		<tr>
			<td><?=   $stock['id']; ?></td>
			<td><?php __($stock['product']); ?></td>
			<td><?php __($stock['category']); ?></td>
			<td><?= $stock['quantity'];?></td>
			<td><?= $stock['farmerid'];?></td>
		</tr>
		<?php endforeach; ?>

	       </table>

	</div>

</body>
</html>
