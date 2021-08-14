<?php
include '../connection.php';
$sql='SELECT * from cart ORDER BY ordertime ';
$stocks = $mysqli->query($sql);
foreach($stocks as $stock ){

}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Notifications</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../../css/notification.css">
</head>
<body>
	<a href="../../sevafarm/sevafarm.php"><div><h1 id="sevafarm">SEVAFARM</h1></div></a>
    <div class="pic1">
            <a>
           <a href="../../sevafarm/sevafarm.php"><img src="../../pictures/sevalogo.png" height="80px" width="120px"></a>

            </a>
         </div>
	<h2>Notification</h2>
	<div id="Notification">
	</div>
	<div>
	<table>
		<thead>
			<th>ID</th>
			<th>Product</th>
			<th>Quantity</th>
			<th>Customer ID</th>
			<th>Status</th>
			<th>Ordered Time</th>
			<th>Track</th>
		</thead>
		<?php
		foreach($stocks as $stock ):
			?>
		<tr>
			<td><?= $stock['ID']; ?></td>
			<td><?= $stock['product']; ?></td>
			<td><?= $stock['quantity']; ?></td>
			<td><?= $stock['customerid']; ?></td>
			<td><?= $stock['status']; ?></td>
			<td><?= $stock['ordertime']; ?></td>
				<td>
           <form method="post" action="sent.php">
							<input type="hidden" name="id" value="<?= $stock['ID'];  ?>">
							<input type="submit" value="Sent" class="track" >
					</form>
				</td>

		</tr>
		<?php endforeach; ?>

	</table>

	</div>
</body>
</html>
