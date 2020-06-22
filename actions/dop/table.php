<?php
 while ($result = mysqli_fetch_array($sql)) { ?>

       <tr>
            <td><?php echo $result['id']; ?></td>
            <td><?php echo $result['name']; ?></td>
            <td><?php echo $result['surname']; ?></td>
            <td><?php echo $result['login']; ?></td>
            <td><?php echo $result['lang']; ?></td>
            <td><?php echo $result['role']; ?></td>
            <td><a href='change.php?id=<?php echo $result['id']; ?>'>Change</a></td>
            <td><a href='delete.php?id=<?php echo $result['id']; ?>'>Delete</a></td>
            </tr>
   <?php
}
?>
