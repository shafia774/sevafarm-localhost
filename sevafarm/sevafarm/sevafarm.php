<?php
require 'localisation.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>SEVAFARM</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../css/Sevafarm.css">
</head>
<body>
    <div class="first">
        <a href="../sevafarm/sevafarm.php"><div><h1 id="sevafarm"><?php __('SEVAFARM') ?></h1></div></a>
				<b><img src="../pictures/sevalogo.png"height="80px" width="150px" align="left">
   				 <h2 style="margin-left:15em">SEVAFARM KVK MANJAPRA</h2>
					 <img src="../pictures/kvk.png"height="100px" width="150px"  align="right" >
				</b>
				<div class="front">
				<div class="pic2">
					 <img src="../pictures/newfarm.jpg" height="400px" width="1200px">
				</div>
	 </div>

				<table class="center" >
		 		     <tr>
		 				    <td>
		 					     <a href="../sevafarm/notifications/delivery.php"><img src="../pictures/hoti.jpg" border-radius= "25px" height="200px" width="200px" alt="There definetly seems to be a problem here"><h3><?php __('Delivery')?></h3></a>
		 				    </td>
		 						<td>
		 					     <a href="../sevafarm/notifications/notifications.php"><img src="../pictures/notifications.jpg" height="200px" width="200px" alt="There definetly seems to be a problem here"><h3><?php __('Notifications')?></h3></a>
		 				    </td>
		 		        <td>
		 		    	     <a href="../sevafarm/item entry/item entry.php"><img src="../pictures/item entry.jpg" height="200px" width="200px" alt="There definetly seems to be a problem here"><h3><?php __('Entry')?></h3></a>
		 		        </td>
		 						<td>
		 			  	     <a href="../sevafarm/database/database.php"><img src="../pictures/database.jpg" height="200px" width="200px" alt="There definetly seems to be a problem here"><h3><?php __('Database')?></h3></a>
		 			      </td>
		 		    </tr>
		 		    <tr>

		 		      	<td>
		 		           <a href="../sevafarm/stocks/stocks.php"><img src="../pictures/stocks.jpg" height="200px" width="200px" alt="There definetly seems to be a problem here"><h3><?php __('Stocks')?></h3></a>
		 		        </td>
		 		        <td>
		 			         <a href="../sevafarm/accounts/accounts.php"><img src="../pictures/accounts.jpg" height="200px" width="200px" alt="There definetly seems to be a problem here"><h3><?php __('Account')?></h3></a>
		 			      </td>
		 		    </tr>
		     </table>
		     <div class="seasonal">
		         <a href="../sevafarm/seasonal/seasonal.php"><h1><?php __('SEASONAL PRODUCTS')?></h1></a>
		     </div>
		     </div>
		     <div class="storage">
		          <a href="storage/storage.php"><button type="button" class="login"><?php __('Storage conditions')?></button>
		          <a href="storage/storage.php"><iframe src="storage/storage.php" height="500" width="100%">Storage conditions</iframe></a>
		     <div>
		     <a href="logout.php"><button type="button" class="login">Log out</button></a>

		 </body>
		 </html>
