<?php
session_start();

if (isset($_POST['submit'])) {

  include_once 'db.php';

  $first = mysqli_real_escape_string($conn,$_POST['first']);
  $last = mysqli_real_escape_string($conn,$_POST['last']);
  $email = mysqli_real_escape_string($conn,$_POST['email']);
  $uid = mysqli_real_escape_string($conn,$_POST['uid']);
  $pwd = mysqli_real_escape_string($conn,$_POST['password']);
  $sql = "SELECT * FROM users WHERE user_id= '$uid'";
  $result = mysqli_query($conn, $sql);
  $resultCheck = mysqli_num_rows($result);
  if ($resultCheck > 0) {

    echo "user name taken";
    header("Location: register.php");
    exit();
  }
  $sql = "SELECT * FROM users WHERE email= '$email'";
  $result1 = mysqli_query($conn, $sql);
  $resultCheck1 = mysqli_num_rows($result1);
  if ($resultCheck1 > 0) {

    echo "email taken";
    header("Location: register.php");
    exit();
  }
  else{
  $sql = "INSERT INTO users (firstN, lastN, email, user_id, passW) VALUES ('$first','$last','$email','$uid','$pwd');";
  mysqli_query($conn, $sql);
    $_SESSION['msg']="Registration SuccessFull Please Log In";
  if(isset($_SESSION['username'])){
   header("Location:logout.php");
}

  header("Location: login.php");
  exit();
}
}
else {
  exit();
}

 ?>
