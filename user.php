
<?php
session_start();
if(!isset($_SESSION['username'])){
   header("Location:login.php");
}

include_once 'head.php';

 ?>

<?php
//table view code here for guest...
include_once 'db.php';

$uid=$_SESSION['username'];
$sql = "SELECT firstN FROM users WHERE user_id ='$uid'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {

        $name= $row['firstN'];
    }
}
echo "<h2 style=\"font-size: 24px;text-align: center;\">";
echo "Welcome to Game Loft  ".$name." !!";
echo "</h2>";

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

 <form class="order" action="order.php" method="post">

   <?php
   if(isset($_SESSION['msg'])){
   echo "  <label style=\"color:red\">";
   echo $_SESSION['msg'];
   unset($_SESSION['msg']);
   echo "</label></br>";
   }


    ?>

   <p> Place Your Order Here: </p>
   <label for="oder_no"><b>Item No.</b></label>
   <input class="default" type="text" placeholder="Enter Item No" name="upc" required/>

   <label for="count"><b>Item Quantity</b></label>
   <input class="default" type="text" placeholder="Enter the amount" name="count" id="username" required>

   <button class="default" type="submit" name="submit">Place Order</button>


 </form>

 <?php
mysqli_close($conn);
 include_once 'foot.php';

  ?>
