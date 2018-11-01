<?
//server credentials
$servername = "localhost";
$username = "baughy";
$password = "Espeon1";
$dbname = "jaxcode56";

?>


<?php

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM planets";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
      ?>

      <tr>
      <td><img src="images/<?=$row['planetname']?>.jpg"></td>
      <td><?=$row['planetname']?></td>
      <td><?=$row['description']?></td>
      <td><?=$row['googlelink']?></td>
      <td><?=$row['distancefromsun']?></td>
      <td><?=$row['radius']?></td>
      <td><?=$row['mass']?></td>
      <td><?=$row['lengthofday']?></td>
      <td><?=$row['orbital']?></td>



      </tr>

      <?
      }
  } else {
      echo "0 results";
  }

  mysqli_close($conn);
  ?>
