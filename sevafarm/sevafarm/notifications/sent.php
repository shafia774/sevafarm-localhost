<?php
include '../connection.php';

$id=$_POST['id'];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  	$status = 2;
$sql1 = "UPDATE cart
SET status = $status
WHERE ID =$id ";
if ($mysqli->query($sql1) === TRUE) {
  echo "<br> Record Updated Successfully";
} else {
  echo "Error: " . $sql1 . "<br>" . $mysqli->error;
}
$sql2 = "UPDATE alstocks
SET quantity = quantity - $quantity
WHERE product='$product'";
if ($mysqli->query($sql2) === TRUE) {
  echo "<br> Record Updated Successfully";
} else {
  echo "Error: " . $sql1 . "<br>" . $mysqli->error;
}



$mysqli->close();
header('Location:/sevafarm/sevafarm/notifications/notifications.php');
}
?>
