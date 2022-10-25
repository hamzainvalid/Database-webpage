<?php
include('connection.php');

$name = $_POST['name'];
$weight = $_POST['weight'];
$date = $_POST['date'];
$weeklyChange = $_POST['weeklyChange'];
$id = $_POST['id'];


if(isset($_POST['no'])){
    header('Location:showRecord.php');
}

if(isset($_POST['yes'])){
    ?>
    <html>
        <body>
            <form method="post" action="editRecordFinal.php"><br>
                <label>Name</label><br>
                <input type="text" name="name" value="<?= $name ?>"><br><br>
                <label>Weight</label><br>
                <input type="text" name="weight" value="<?= $weight ?>"><br><br>
                <label>Date</label><br>
                <input type="date" name="date" value="<?= $date ?>"><br><br>
                <label>Change</label><br>
                <input type="text" name="weeklyChange" value="<?= $weeklyChange ?>"><br><br>
                <input type="hidden" name="id" value="<?= $id ?>">
                <input type="submit" value="Change">
            </form>
        </body>
    </html>
    <?php
 }
?>