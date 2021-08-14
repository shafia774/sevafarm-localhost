<?php
include '../sevafarm/connection.php';
$sql="SELECT product,quantity,price from alstocks WHERE category = 'pulses' GROUP BY  product";
$result=$mysqli->query($sql);
$response= array();
if($result->num_rows > 0){
  while($row = $result->fetch_assoc()){
  array_push($response,$row);
  }
}
$mysqli->close();
header('Content-Type: application/json');
echo json_encode($response);
?>
