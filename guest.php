<?php
session_start();
if(isset($_SESSION['username'])){
   include_once 'headAdmin.php';
}
else {
  include_once 'head.php';
}

 ?>

<?php
include_once 'db.php';

$sql = "SELECT * FROM inventory_db";
$result = mysqli_query($conn, $sql);

if(!isset($_SESSION['username'])){

echo "<p style=\"font-size: 24px; text-align: center;\">";
echo "Welcome Guest!!!";
echo "</p>";

echo "<p style=\"font-size: 16px;\">";
echo "Please log in to order items.. Thank you.";
echo "</p>";
}

//table view code here for guest...

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  echo "<table class='db' border='1' bordercolor='#f442b9' align='left'>";
  echo "<tr><th>Iteam No.</th><th>Rating</th><th>Genre</th><th>Game</th><th>Size(GB)</th><th>Count</th><th>Console Type</th></tr>";
  while($row = mysqli_fetch_assoc($result)) {
      //echo "id: " . $row["upc"]. " - Name: " . $row["store"]. " " . $row["type"]. "<br>";
      echo "<tr><td>{$row['upc']}</td><td>{$row['store']}</td><td>{$row['department']}</td><td>{$row['name']}</td><td>{$row['size']}</td><td>{$row['count']}</td><td>{$row['location']}</tr>";
  }
  echo "</table>";

} else {
  echo "0 results";
}

 ?>

 <?php
mysqli_close($conn);
 include_once 'foot.php';


  ?>
