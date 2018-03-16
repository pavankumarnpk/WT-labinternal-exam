<?php
include "server.php";
session_start();
		if (isset($_POST['Login'])) {
			$email = $_POST['email'];
			$password = $_POST['password'];
				 $qry = "SELECT * FROM papers WHERE 'email'='$email' `password`='$password'";
				$sql = mysqli_query($db,$qry);
				 		 if(mysqli_num_rows($sql)>0) {
    			    	    		$row=mysqli_fetch_assoc($sql);
    			    	    		$_SESSION['uid'] = $row['uid']; 
    			    	    		$_SESSION['email'] = $row['email'];
    			    	    		$_SESSION['password'] = $row['password'];
								$_SESSION['success'] = "You are now logged in";
        				}
        				header('location:add.php');
		}
?>
<!Doctype html>
<html>
<head>
	<title>login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="total">
	<div class="header">
	<h1>Login<h1>
	</div>
	<div class="center">
	<form method="post" action="">
	<div class="details">
	<label>email</label><br>
	<input type="text" name="email" placeholder="enter mail"required>
	</div>
	<div class="details">
	<label>password</label><br>
	<input type="password" name="password" placeholder="enter pass"required>
	</div>
	<div class="details">
	<button type="submit" name="Login" class="btn">Login</button>
	</div>
	<p>not at register? <a href="register.php">sign up</a></p>
	<button>
	<a href="home.php">home</a>
	</button>
	</form>
	</div>
</div>
</body>
</html>
