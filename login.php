<?php
session_start();
if(isset($_SESSION['username'])){
    if(strcmp($_SESSION['username'],"Admin")==0)
    header("Location:admin.php");
    else
   header("Location:user.php");
}
?>

<!DOCTYPE html>
<html xmlns = "http://www.w3.org/1999/xhtml">
	<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:500" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah" rel="stylesheet">
	<script type="text/javascript" src="validate.js"></script>


	<title>CSC4370</title>
	</head>

	<body>
		<header><h1>Game Loft</h1></header>
			<div class="top">
				<table align="center">
					<tr>
						<td><a class="top_link" href="login.php">Home</a></td>
						<td><a class="top_link" href="guest.php" >Guest</a></td>
						<td><a class="top_link" href="register.php" >Register</a></td>
						<td><a class="top_link" href="logout.php">Logout</a></td>
					</tr>
				</table>
			</div>

			<div class="row" >
  				<div class="columnL">

						<img src="star.png" alt="missing" width="400px;"/>
						<p style="text-align:center">Wellcome to Game Loft...</br>
							Please log in to order your favorite games...</br>
							Pre user account: username=nashid
                                Password=nashid123
                              </br>
             Admin Account: username: admin1
               Password:                admin1
													</p>

					</div>

					<div class="columnC" style="display: block">

						<form action="submit.php" method="post" onsubmit="return validateLogIn();">
							<div class="imgcontainer">
								<img src="avatar.png" alt="Avatar" class="avatar">
							</div>

							<div class="container">
								<label for="uname"><b>Username</b></label>
								<input type="text" placeholder="Enter Username" name="username" id="username" required>

								<label for="psw"><b>Password</b></label>
								<input type="password" placeholder="Enter Password" name="password" id="pwd" required>

								<button type="submit" name="login">Login</button>

								<label id="result1" style="display: none;">
									User Name Format Wrong
								</label>
								<label id="result3" style="display: none;">
									Password Format Wrong
								</label>

                <!--php block code for shoring wrong password message-->
                  <?php
                  if(isset($_SESSION['msg'])){
                  echo "  <label style=\"color:red\">";
                  echo $_SESSION['msg'];
                  unset($_SESSION['msg']);
                  echo "</label></br>";
                }
                   ?>

								<label>
									<input type="checkbox" checked="checked" name="remember"> Remember me
								</label>
							</div>

							<div class="container" style="background-color:#f1f1f1; padding:3px">
								<button type="button" class="cancelbtn" name="none" onclick="location.href='register.php';">Sign Up</button>
								<span class="psw">Continue as <a href="guest.php">guest?</a></span>
							</div>
						</form>

				</div>


					<div class="columnR">
						<img src="batman.png" alt="missing" width="300px;"/>

				</div>

			</div>


			<footer>
				<p style="color:white">Copyright ©Nashid & Arman </p>
				<a href="https://validator.w3.org/nu/?doc=http%3A%2F%2Fcodd.cs.gsu.edu%2F~nislam9%2Fassignment4.html">
					<img src="https://www.w3.org/Icons/valid-xhtml11" height="25" alt="My site is validated"> </a>
			</footer>

	</body>
</html>
