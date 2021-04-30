<?php include 'connectDB.php';?>

<?php
    $sql = "SELECT * FROM `user`";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
        echo "
        <tr>
            <td>$row[id]</td>
            <td>$row[name]</td>
            <td>$row[time]</td>
            <td>$row[time_add]</td>
            <td>$row[time_final]</td>
            <td class='countdown'></td>
            <input type='hidden' class='timecountdown' value='$row[time_countdown]'>
        </tr>";
      }
    }
    $conn->close();
?>
//sdfsdsdfdsfsdfsd
