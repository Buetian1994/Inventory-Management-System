
<?php
session_start();
if(!isset($_SESSION['username'])){
   header("Location:login.php");
}

include_once 'headAdmin.php';

 ?>

<?php
//table view code here for guest...
echo "<h2>";
echo "Welcome to the Manage page " . $_SESSION['username']."!";
echo "</h2>";
include_once 'db.php';
$sql = "SELECT * FROM inventory_db";
$result = mysqli_query($conn, $sql);



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

 <form class="order" action="inventory.php" method="post">

   <?php
   if(isset($_SESSION['msg'])){
   echo "  <label style=\"color:red\">";
   echo $_SESSION['msg'];
   unset($_SESSION['msg']);
   echo "</label></br>";
   }


    ?>

   <p> Edit Iteam Count: </p>
   <label for="oder_no"><b>Iteam No.</b></label>
   <input class="default" type="text" placeholder="Enter Iteam No" name="upc" required/>

   <label for="count"><b>Iteam Quantity</b></label>
   <input class="default" type="text" placeholder="Enter the amount" name="count" id="username" required>

   <button class="default" type="submit" name="add">Add Iteam Count</button>
   <button class="default" style="background-color:red;margin-top:5px;margin-bottom:5px" type="submit" name="del">Subtract Iteam Count</button>
</form>
 <?php

 include_once 'foot.php';

  ?>
