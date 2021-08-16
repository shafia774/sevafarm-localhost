<?php
require '../localisation.php';
include '../connection.php';
$sql='SELECT * from cart where status = 2 ORDER BY ordertime ';
$stocks = $mysqli->query($sql);
foreach($stocks as $stock ){

}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Delivery</title>
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
	<h2><?php __('Delivery'); ?></h2>
	<div id="Notification">
	<form>

  	</form>
	</div>
	<div>
	<form>
	<table>
		<thead>
			<th><?php __('ID'); ?></th>
			<th><?php __('Product'); ?></th>
			<th><?php __('Quantity'); ?></th>
			<th><?php __('Customer ID'); ?></th>
			<th><?php __('Details'); ?></th>
		</thead>
		<?php
		foreach($stocks as $stock ):
			?>
		<tr>
			<td><?php __($stock['ID']); ?></td>
			<td><?php __($stock['product']); ?></td>
			<td><?php __($stock['quantity']); ?></td>
			<td><?php __($stock['customerid']); ?></td>




		</tr>
		<?php endforeach; ?>

	</table>
	</form>
	</div>
</body>
</html>
