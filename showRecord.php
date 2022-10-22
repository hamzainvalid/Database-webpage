<?php
include('connection.php');
$sql = $query="SELECT * FROM dog_weight";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);
?>

<html>
    <body>
        <a href="admin.php">Add a record</a>
        <?php
            while($row = mysqli_fetch_assoc($result)){
                echo "{$row['name']}";
                echo "{$row['weight']}";
                echo "{$row['date']}";
                echo "{$row['weeklyChange']}";
                echo "<br>";
                
            }
        
        ?>
    </body>
</html>