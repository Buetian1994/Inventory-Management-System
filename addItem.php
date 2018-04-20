<?php
session_start();

if (isset($_POST['additem'])) {

  include_once 'db.php';
  $store = mysqli_real_escape_string($conn,$_POST['store']);
  $department = mysqli_real_escape_string($conn,$_POST['department']);
  $name = mysqli_real_escape_string($conn,$_POST['name']);
  $size = mysqli_real_escape_string($conn,$_POST['size']);
  $count = mysqli_real_escape_string($conn,$_POST['count']);
  $location = mysqli_real_escape_string($conn,$_POST['location']);
  $sql = "SELECT * FROM inventory_db WHERE name= '$name';";
  $result = mysqli_query($conn, $sql);
  $resultCheck = mysqli_num_rows($result);
  if ($resultCheck > 0) {
    $_SESSION['msg']="Already Exists";
    header("Location: manage.php");
    exit();
  }
  else{
  $sql = "INSERT INTO inventory_db (store, department, name, size, count, location) VALUES ('$store','$department','$name','$size','$count','$location')";
  mysqli_query($conn, $sql);
  $_SESSION['msg']="Successfully Added Iteam";
  header("Location: admin.php");
  exit();
}
}

else if (isset($_POST['delitem'])){
    include_once 'db.php';
    $upc = mysqli_real_escape_string($conn,$_POST['upc']);
    $sql = "SELECT * FROM inventory_db WHERE upc= '$upc'";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
    if ($resultCheck <= 0) {

      $_SESSION['msg']="Wrong Item No";
      header("Location: manage.php");
      exit();
    }
    else{
    $sql = "DELETE FROM inventory_db WHERE upc = $upc";
    mysqli_query($conn, $sql);
    $_SESSION['msg']="Successfully Deleted";
    header("Location: admin.php");
    exit();
  }
}

else {
  exit();
}

 ?>
