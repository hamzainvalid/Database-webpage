<?php
include('connection.php');
header('admin.php');

$name = $_POST['name'];
$weight = $_POST['weight'];
$date = $_POST['date'];
$weeklyChange = 0;



$sql = "INSERT INTO dog_weight (name, weight, date, weeklyChange) values('".$name. "', '".$weight. "', '".$date. "','".$weeklyChange. "')";
$result = mysqli_query($conn, $sql);

?>