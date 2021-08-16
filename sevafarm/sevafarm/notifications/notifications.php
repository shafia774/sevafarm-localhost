<?php
require '../localisation.php';
include '../connection.php';
$sql='SELECT * from cart ORDER BY ordertime ';
$stocks = $mysqli->query($sql);
foreach($stocks as $stock ){

}

$status = [
	1 => 'Not Confirmed',
	2 => 'Confirmed'
];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Notifications</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../../css/notification.css">
</head>
<body>
	<a href="../../sevafarm/sevafarm.php"><div><h1 id="sevafarm"><?php __('SEVAFARM') ?></h1></div></a>
    <div class="pic1">
            <a>
           <a href="../../sevafarm/sevafarm.php"><img src="../../pictures/sevalogo.png" height="80px" width="120px"></a>

            </a>
         </div>
	<h2><?php __('Notifications')?></h2>
	<div id="Notification">
	</div>
	<div>
	<table>
		<thead>
			<th><?php __('ID'); ?></th>
			<th><?php __('Product'); ?></th>
			<th><?php __('Quantity'); ?></th>
			<th><?php __('Customer ID'); ?></th>
			<th><?php __('Status'); ?></th>
			<th><?php __('Order Time'); ?></th>
			<th><?php __('Track'); ?></th>
			<th><?php __('Delete'); ?></th>
		</thead>
		<?php
		foreach($stocks as $stock ):
			?>
		<tr>
			<td><?php __($stock['ID']); ?></td>
			<td><?php __($stock['product']); ?></td>
			<td><?php __($stock['quantity']); ?></td>
			<td><?php __($stock['customerid']); ?></td>
			<td><?php __($status[$stock['status']]); ?></td>
			<td><?php __($stock['ordertime']); ?></td>
				<td>
           <form method="post" action="sent.php">
							<input type="hidden" name="id" value="<?= $stock['ID'];  ?>">
							<input type="submit" value="Sent" class="track" >
					</form>
				</td>
				<td>
           <form method="post" action="delete.php">
							<input type="hidden" name="id" value="<?= $stock['ID'];  ?>">
							<input type="hidden" name="product" value="<?= $stock['product'];  ?>">
							<input type="hidden" name="quantity" value="<?= $stock['quantity'];  ?>">
							<input type="submit" value="delete" class="track" >
					</form>
				</td>

		</tr>
		<?php endforeach; ?>

	</table>

	</div>
</body>
</html>
