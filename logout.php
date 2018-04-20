
<?php
   session_start();
   include_once 'head.php';
    if(isset($_SESSION['username'])){
      unset($_SESSION["username"]);
      unset($_SESSION["password"]);
      unset($_SESSION['msg']);

      echo 'You Have Successfully Logged Out...';
      header('Refresh: 2; URL = login.php');
    }

 else {
   echo "No user is logged in to log out!!";
   header('Refresh: 2; URL = login.php');
 }
   include_once 'foot.php';
?>>
