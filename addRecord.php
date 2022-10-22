<?php
include('connection.php');
header('Location:admin.php');

$name = $_POST['name'];
$weight = $_POST['weight'];
$date = $_POST['date'];

$name_check_sql = "SELECT * FROM dog_weight WHERE name = '". mysqli_real_escape_string($conn, $name) ."' LIMIT 1";
$name_check = mysqli_query($conn, $name_check_sql);
if($name_check == $name){
    $lastWeek_sql = "SELECT weight FROM dog_weight BY ID DESC WHERE name = '".mysqli_real_escape_string($conn, $name)."' LIMIT 1";
    $lastWeek = mysqli_query($conn, $lastWeeksql);
    $lastWeek = (int) $lastWeek;
    if($weight > $lastWeek){
        $weeklyChange = $weight - $lastWeek;
    } else{
        $weeklyChange = $lastWeek - $weight;
    }
} else{
    $weeklyChange = 0;
}




$sql = "INSERT INTO dog_weight (name, weight, date, weeklyChange) values('".$name. "', '".$weight. "', '".$date. "','".$weeklyChange. "')";
$result = mysqli_query($conn, $sql);

?>