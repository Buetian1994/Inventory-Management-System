<?php
session_start();
//adds inventory count
include_once 'db.php';
$msg='';
$upc = mysqli_real_escape_string($conn,$_POST['upc']);
$count = mysqli_real_escape_string($conn,$_POST['count']);
$sql = "SELECT * FROM inventory_db WHERE upc= '$upc'";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);
if ($resultCheck <= 0) {

  $_SESSION['msg']="Wrong Serial";
  header("Location: admin.php");
  exit();
}


if (isset($_POST['add'])){

    $sql = "UPDATE inventory_db SET count = count + $count WHERE upc = $upc;";
    mysqli_query($conn, $sql);
    $_SESSION['msg']="sucess";
    unset($_POST['add']);
    header("Location: admin.php");
    exit();
  }

  if (isset($_POST['del'])){

      $sql = "UPDATE inventory_db SET count = count - $count WHERE upc = $upc;";
      mysqli_query($conn, $sql);
      $_SESSION['msg']="sucess";
      unset($_POST['del']);
      header("Location: admin.php");
      exit();
    }

 ?>
