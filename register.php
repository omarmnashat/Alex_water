<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Register</title>
    <link rel="stylesheet" href="style.css">
   
</head>

<body style="background-image: url(background.jpg);background-repeat: no-repeat;background-size: cover;">	

<div class="login-box">
    
	
	
	<form method="post" action="register.php">
	<h1 style="text-align: center;">Sign Up</h1>
		<?php include('errors.php'); ?>

        <div class="user-box">
		<label>Username</label><br>
			<input type="text" name="username"
				value="<?php echo $username; ?>">
		</div>

    <div class="user-box">
			<label>Email</label><br>
			<input type="email" name="email"
				value="<?php echo $email; ?>">
		</div>

    <div class="user-box">
			<label>Enter Password</label><br>
			<input type="password" name="password_1">
		</div>
		<div class="user-box">
			<label>Confirm password</label><br>
			<input type="password" name="password_2">
		</div>
		<div class="user-box">
			<label>Mobile Number</label><br>
			<input type="number" name="phonenumber">
		</div>
		<div class="user-box">
			<label>ًWater meter number</label><br>
			<input type="number" name="meter">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="reg_user">
				Register
			</button>
		</div>


<p>
			Already having an account?
			<a href="login.php">
				Login Here!
			</a>
		</p>



	</form>
	</body>
</html>
