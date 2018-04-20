<?php
session_start();
if(!isset($_SESSION['username'])){
   header("Location:login.php");
}

include_once 'head.php';

?>

<?php
if (isset($_POST['submit'])){
    include_once 'db.php';
    $upc = mysqli_real_escape_string($conn,$_POST['upc']);
    $count = mysqli_real_escape_string($conn,$_POST['count']);
    $sql = "SELECT * FROM inventory_db WHERE upc= '$upc'";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
    if ($resultCheck <= 0) {

      $_SESSION['msg']="wrong id";
      header("Location: user.php");
      exit();
    }
    else{
    $sql = "UPDATE inventory_db SET count = count - $count WHERE upc = $upc";
    mysqli_query($conn, $sql);
    echo "<p style='font-size:18px'>";
    echo "Your Order was placed SucessFully!!!";
    echo "</p>";
    header('Refresh: 3; URL = user.php');
  }
}
 ?>
 
  <?php
mysqli_close($conn);
 include_once 'foot.php';

  ?>
