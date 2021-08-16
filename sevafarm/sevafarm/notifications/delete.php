<?php
include '../connection.php';
$product=$_POST['product'];
$id=$_POST['id'];
$quantity=$_POST['quantity'];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  	$status = 2;
    $sql2 = "SELECT * FROM alstocks WHERE product='$product' ";
    $result = mysqli_query($mysqli, $sql2);

    if (mysqli_num_rows($result) > 0) {
          $sql3 = "UPDATE alstocks
          SET quantity = quantity + $quantity
          WHERE product='$product'";

              if ($mysqli->query($sql3) === TRUE) {
                echo "<br>record updated successfully";
              }
              else {
                echo "Error: " . $sql3 . "<br>" . $mysqli->error;
              }
    }
    $sql1 = "DELETE FROM cart
            WHERE ID =$id ";
      if ($mysqli->query($sql1) === TRUE) {
        echo "<br> Record Deleted Successfully";
        }
      else {
        echo "Error: " . $sql1 . "<br>" . $mysqli->error;
        }




$mysqli->close();
header('Location:/sevafarm/sevafarm/notifications/notifications.php');
}
?>
