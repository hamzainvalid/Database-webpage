<?php
include('connection.php');
$sql = $query="SELECT * FROM dog_weight";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);
?>

<html>
    <body>
        <a href="admin.php">Add a record</a>
        <table>
                <tr>
                    <th>Name</th>
                    <th>Weight</th>
                    <th>Date</th>
                    <th>Change</th>
                </tr>
                    <?php
                    while($row = mysqli_fetch_assoc($result)){?>
                    <tr>
                    <form method="post" action="editOrDelete.php">
                        <td><?= $row['name']; ?></td>
                        <td><?= $row['weight']; ?></td>
                        <td><?= $row['date']; ?></td>
                        <td><?= $row['weeklyChange']; ?></td>

                        <input type="hidden" name="id" value="<?= $row['id']; ?>">
                        <input type="hidden" name="name" value="<?= $row['name']; ?>">
                        <input type="hidden" name="weight" value="<?= $row['weight']; ?>">
                        <input type="hidden" name="date" value="<?= $row['date']; ?>">
                        <input type="hidden" name="weeklyChange" value="<?= $row['weeklyChange']; ?>">
                        <td><input type="submit" name="edit" value="Edit"></td>
                        <td><input type="submit" name="remove" value="Remove"></td>
                    </form>
                    </tr>
                    
               <?php }
                ?>
        </table>
    </body>
</html>