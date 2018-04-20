<!DOCTYPE html>
<html xmlns = "http://www.w3.org/1999/xhtml">
	<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:500" rel="stylesheet">
	<script type="text/javascript" src="validate1.js"></script>


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
  				<div class="columnL" style="display: block">

				</div>

			<div class="columnC">
				<form action="confirmation.php" method="post" onsubmit="return validateLogIn();">
<div class="imgcontainer">
	<img src="avatar.png" alt="Avatar" class="avatar">
</div>

<div class="container">
	<label for="fname"><b>First Name</b></label>
	<input type="text" placeholder="Enter First Name" name="first" id="first" required>
	<label for="lname"><b>Last Name</b></label>
	<input type="text" placeholder="Enter Last Name" name="last" id="last" required>

	<label for="email"><b>Email</b></label>
	<input type="text" placeholder="Enter Email" name="email" id="username" required>

	<label for="uname"><b>Username</b></label>
	<input type="text" placeholder="Enter Username" name="uid" id="username" required>

	<label for="psw"><b>Password</b></label>
	<input type="password" placeholder="Enter Password" name="password" id="pwd" required>

	<label for="psw1"><b>Retype Password</b></label>
	<input type="password" placeholder="Enter Password" name="password1" id="pwd1" required>

	<button type="submit" name="submit">Create Account</button>
	<label id="result1" style="display: none;">
		User Name Format Wrong
	</label>
	<label id="result3" style="display: none;">
		Password Format Wrong
	</label>

</form>
				</div>



					<br />
		</div>

					<div class="columnR">


				</div>


			<footer>
				<p>Copyright ©Nashid & Arman</p>
				<a href="https://validator.w3.org/nu/?doc=http%3A%2F%2Fcodd.cs.gsu.edu%2F~nislam9%2Fassignment4.html">
					<img src="https://www.w3.org/Icons/valid-xhtml11" height="25" alt="My site is validated"> </a>
			</footer>

	</body>
</html>
