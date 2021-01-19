<!DOCTYPE html>
<html>
<head>
	<title>Capstone</title>
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>	
<body>	

	<?php 
	session_start();
	?>

	<div>


		<div class="container"> <!-- container starts here-->
			<div class="row box"> <!-- Start of Row-->
					<div class="col-md-6 brandName">
						<h2> Louarc </h2>
					</div>

					<div id="lgBox" class="col-md-4 loginBox"> <!-- start of login -->
						<form action="home.php" method="post"> 
						<div class="form-group">
							<input type="text" name="username" class="form-control" placeholder="Username:" required>
						</div>
						<br>

						<div class="form-group">
						
							<input type="password" name="password" class="form-control" placeholder="Password:" required>
						</div>
						<br>
						<button type="submit" class="form-control 	btn btn-dark LogIn">Log in</button>
						<br>
						<a href="#" id="ForgotPass">Forgot Password?</a>
						<hr>
						</form>	
						<button onclick="create()" type="submit" id="SignUp" class="form-control btn btn-dark signUp"> Sign Up</button>
					</div>	<!-- end of login -->


					<div id="register" class="col-md-4 registerBox"> <!-- start of register -->
						<form action="registration.php" method="post">
						<div class="alert"></div>
						<div class="form-group">
							<input type="text" name="username" class="form-control rg" placeholder="Username:" required>
						</div>
						<br>
						<div class="form-group">
							<input type="email" name="email" class="form-control rg" placeholder="Email Address:" required>
						</div>
						<br>

						<div class="form-group">
							<input type="email" name="confirmemail" class="form-control rg" placeholder="Confirm Email Address:" required>
						</div>

						<br>

						<div class="form-group">
							<input type="password" name="password" class="form-control rg" placeholder="Password:" required>
						</div>

						<br>

						<div class="form-group">
							<input type="password" name="confirmpassword" class="form-control rg" placeholder="Confirm Password:" required>
						</div>	
						<br>
						<hr>
						<button type="submit" class="form-control btn btn-dark Register">Register</button>
						<br>
						<br>
						<button onclick="back()"type="submit" class="form-control btn btn-dark backbtn">Back</button>

						</form>
					</div> <!-- end of register -->
			</div><!--end of row-->
		</div>	<!-- container ends here-->
	</div>


	<script src="myscript.js"></script>


	<!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>
</html>