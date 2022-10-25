<?php
include('connection.php');

$name = $_POST['name'];
$weight = $_POST['weight'];
$date = $_POST['date'];
$weeklyChange = $_POST['weeklyChange'];
$id = $_POST['id'];


if(isset($_POST['remove'])){
    header('Location:showRecord.php');
    $sql = "DELETE FROM dog_weight WHERE name ='".$name. "' ";
    $result = mysqli_query($conn, $sql);
}

if(isset($_POST['edit'])){?>
    <form method="post" action="editRecord.php">
    <h2>Are you sure you would like to edit the following record?</h1><br>
    <h4>Name: </h4><p><?= $name; ?></p>
    <h4>Weight: </h4><p><?= $weight; ?></p>
    <h4>Date: </h4><p><?= $date; ?></p>
    <h4>Change: </h4><p><?= $weeklyChange; ?></p>
    
    <input type="hidden" name="id" value="<?= $row['id']; ?>">
    <input type="hidden" name="name" value="<?= $row['name']; ?>">
    <input type="hidden" name="weight" value="<?= $row['weight']; ?>">
    <input type="hidden" name="date" value="<?= $row['date']; ?>">
    <input type="hidden" name="weeklyChange" value="<?= $row['weeklyChange']; ?>">
    <input type="submit" name="yes" value="Yes">
    <input type="submit" name="no" value="No">
    </form>
<?php }
?>