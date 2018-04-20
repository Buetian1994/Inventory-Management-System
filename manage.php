
<?php
session_start();
if(!isset($_SESSION['username'])){
   header("Location:login.php");
}

include_once 'headAdmin.php';

 ?>

<?php
//table view code here for guest...
echo "Welcome to " . $_SESSION['username'] . "!</br>";



 ?>

 <form class="order" action="addItem.php" method="post">

   <?php
   if(isset($_SESSION['msg'])){
   echo "  <label style=\"color:red\">";
   echo $_SESSION['msg'];
   unset($_SESSION['msg']);
   echo "</label></br>";
   }


    ?>

   <p> Add New Item: </p>
   <label for="oder_no"><b>Iteam Rating</b></label>
   <input class="default" type="text" placeholder="Enter Rating out of 10" name="store" required/>

   <label for="count"><b>Iteam Genre</b></label>
   <input class="default" type="text" placeholder="Enter the type of Game" name="department" id="genre" required>

   <label for="count"><b>Iteam Name</b></label>
   <input class="default" type="text" placeholder="Enter the name" name="name" id="name" required>

   <label for="count"><b>Iteam Size</b></label>
   <input class="default" type="text" placeholder="Enter the size of Game" name="size" id="size" required>

   <label for="count"><b>Iteam Quantity</b></label>
   <input class="default" type="text" placeholder="Enter the amount" name="count" id="count" required>

   <label for="count"><b>Iteam Console Type</b></label>
   <input class="default" type="text" placeholder="Enter what type of console" name="location" id="console" required>


   <button class="default" type="submit" name="additem">Add Game</button>

 </form>
  <p> Delete A Game: </p>
 <form class="order" action="addItem.php" method="post">
   <label for="count"><b>Please Enter the Iteam ID</b></label>
   <input class="default" type="text" placeholder="Enter the Iteam ID" name="upc" id="console" required>

   <button class="default" type="submit" name="delitem">Delete Game</button>
 </form>

 <?php

 include_once 'foot.php';

  ?>
