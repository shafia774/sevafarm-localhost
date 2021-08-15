<?php
require '../localisation.php';
include '../connection.php';
$sql='select * from storage';
$stores = $mysqli->query($sql);
foreach($stores as $store )

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" type="text/css" href="../../css/sidegrid.css">
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>


    <div class="section hpanel leftpan">

  <div class="background-img">
    <div class="home">
         <a href="../sevafarm.php"><img src="../../pictures/sevalogo.png"height="80px" width="120px"></a>
    </div>
    <div class="content-area">

      <h2><?php __('cold storage'); ?></h2>
      <table >
         <thead>
            <th><h4><?php __('Temp'); ?></h4></th>
            <th><h4><?php __('humidity'); ?></h4></th>
         </thead>
    <?php foreach($stores as $store ):  ?>
         <tr>
            <td><?= $store['temp2']; ?></td>
            <td><?= $store['humidity2']; ?></td>
         </tr>
    <?php endforeach; ?>
      </table>


      <div class="btn-area">
        <a href="control.php"><?php __('CONTROL'); ?></a> </div>
    </div>
  </div>
</div>
<div class="section hpanel rightpan">
  <div class="background-img">
    <div class="content-area">
      <h2><?php __('open storage'); ?></h2>
      <table >
        <thead>
           <th><h4><?php __('Temp'); ?></h4></th>
            <th><h4><?php __('humidity'); ?></h4></th>
        </thead>
    <?php foreach($stores as $store ):  ?>
           <tr>
              <td><?= $store['temp1']; ?></td>
              <td><?= $store['humidity1']; ?></td>
           </tr>
    <?php endforeach; ?>
      </table>


      <div class="btn-area">
        <a href="control.php"><?php __('CONTROL'); ?></a> </div>
    </div>
  </div>
</div>

  </body>
</html>
