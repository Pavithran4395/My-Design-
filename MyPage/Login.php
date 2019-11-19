<!DOCTYPE html>
<html>
<head>
	<title>My Web Page - Login</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<?php include 'header.php'; ?>
	<div class="container well">
		<div class="col-md-12 well">
		
		<h2><center>Login</center></h2>

		<div class="con_form"><form method="POST" action="#" enctype="multipart/form-data">
		
		<center><input type="text" name="Userid" autocomplete="off" placeholder="Enter the Username"></br></br>

		<input type="password" name="passcode" autocomplete="off" placeholder="Enter the Password"></br>

		</br><input type="submit" name="submit_button" value="Login"></br></br>

		<a href="/MyPage/Signup.php" id="hyper_remove_under">New User? Sign Up</a>
	
	</center></form></div>
		</div>
	</div>
	

</body>
</html>