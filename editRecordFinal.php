<?php
header('Refresh: 3; URL=http://muhammadhamza.me/other/showRecord.php');
include('connection.php');


$id = $_POST['id'];
$name = $_POST['name'];
$weight = $_POST['weight'];
$date = $_POST['date'];
$weeklyChange = $_POST['weeklyChange'];


$sql = "UPDATE dog_weight SET name='$name', weight='$weight', date='$date', weeklyChange='$weeklyChange' WHERE id=id";
$result = mysqli_query($conn, $sql);


if($result){
    echo "<h1>Record Updated!<br>You will be redirected in 3 seconds.</h1>";
}

