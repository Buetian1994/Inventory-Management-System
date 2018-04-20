<?php
  ob_start();
   session_start();

							 $msg = '';

							 if (isset($_POST['login']) && !empty($_POST['username'])
									&& !empty($_POST['password'])) {

                    if ($_POST['username'] == 'admin1' &&
                       $_POST['password'] == 'admin1') {
                         $_SESSION['valid'] = true;
                         $_SESSION['timeout'] = time();
                         $_SESSION['username'] = 'Admin';
                         $_SESSION['name']='Admin';
                         header("Location:admin.php");
                    }

                    else {


                      include_once 'db.php';
                      $uid = mysqli_real_escape_string($conn,$_POST['username']);
                      $pwd = mysqli_real_escape_string($conn,$_POST['password']);
                      $sql = "SELECT * FROM users WHERE user_id ='$uid'  AND passW='$pwd'";
                      $result = mysqli_query($conn, $sql);
                      $resultCheck = mysqli_num_rows($result);

                      if ($resultCheck < 1)
                      {
                        header ("Location:login.php");
                        $_SESSION['msg'] = 'Wrong username or password';
                        exit();
                      }

                      else {
                        $_SESSION['valid'] = true;
 										    $_SESSION['timeout'] = time();
                        $_SESSION['username'] = $_POST['username'];
                        header("Location:user.php");

                      }

                    }

							 }
?>
