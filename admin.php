<?php
include("connection.php");
?>

<html>
    <body>
        <a href="showRecord.php">Records</a>
        <form action="addRecord.php" method="post">
            <input type="text" placeholder="Dog Name" name="name">
            <input type="text" placeholder="Dog Weight" name="weight">
            <input type="date" placeholder="Date" name="date">
            <input type="submit" value="Add Record">
        </form>
    </body>
</html>
