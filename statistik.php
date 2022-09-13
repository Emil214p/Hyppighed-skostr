<?php
require_once 'login.php';

$sql = "SELECT SkoID, Navn, Email, Alder, Skostoerelse FROM skostoerrelse";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Navn: ". $row["Navn"]. "<br>" ."Email: " . $row["Email"]. "<br>" ."Alder: ".$row["Alder"]. "<br>". "Skostørrelse: ".$row["Skostoerelse"]. "<br><br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>
<html>
  <head>
 </head>
  <body>
      <center><p><a href="index.php">Start</a></p></center>
      <center><p><a href="statistik1.php">Charts</a></p></center>
  </body>
</html>