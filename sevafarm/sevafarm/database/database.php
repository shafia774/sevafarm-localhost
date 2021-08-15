<?php
require '../localisation.php';
include '../connection.php';
$sql='select * from data';
$datas = $mysqli->query($sql);
foreach($datas as $data ){

}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Database</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../../css/stocks.css">
</head>
<body>
		<a href="../../sevafarm/sevafarm.php"><div><h1 id="sevafarm"><?php __('SEVAFARM') ?></h1></div></a>
    <div class="pic1">
            <a>
           <a href="../../sevafarm/sevafarm.php"><img src="../../pictures/sevalogo.png" height="80px" width="120px"></a>

            </a>
         </div>
	<h2><?php __('Database'); ?></h2>
	<div id="Stocks">
	<form action="">
  <label>
    <?php __('Date')?>
    <input type="date" name="Date">
  </label>
  	</form>
	</div>
	<div>
		<form action="">
			<table>
		<thead>
			<th><?php __('ID'); ?></th>
            <th><?php __('farmer id'); ?></th>
			<th><?php __('Name'); ?></th>
			<th><?php __('Details'); ?></th>
			<th><?php __('Dues'); ?></th>
		</thead>
		<?php
		foreach($datas as $data ):
			?>
		<tr>
      <td><?= $data['ID']; ?></td>
			<td><?= $data['farmerid']; ?></td>
			<td><?= $data['name']; ?></td>
			<td><?= $data['details']; ?></td>
			<td><?= $data['dues']; ?></td>
		</tr>
		<?php endforeach; ?>

	</table>
		</form>
	</div>
  <div class="storage">
       <a href="cdatabase.php"><button type="button" class="login"><?php __('ADD'); ?></button>
       <a href="cdatabase.php"><iframe src="cdatabase.php" width="100%">Create</iframe></a>
  <div>
</body>
</html>
