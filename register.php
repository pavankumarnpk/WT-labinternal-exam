<?php 
include"server.php"; 
if(isset($_POST['register'])){
		$username = $_POST['username'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$sql = "INSERT INTO papers(username, email, password) VALUES ('$username','$email','$password')";
			mysqli_query($db, $sql);	
			header('location:login.php'); 
		
	}
?>
<!Doctype html>
<html>
<head>
	<title>register</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="total">
	<div class="header">
	<h1>register<h1>
	</div>
	<div class="center">
	<form method="post" action="">
	<div class="details">
	<label>username</label><br>
	<input type="text" name="username" placeholder="enter name"required>
	</div>
	<div class="details">
	<label>email</label><br>
	<input type="text" name="email" placeholder="enter mail"required>
	</div>
	<div class="details">
	<label>password</label><br>
	
	<input type="password" name="password" placeholder="enter pass"required>
	</div>
	<div class="details">
	<button type="submit" name="register" class="btn">register</button>
	</div>
	<p>already register? <a href="login.php">sign in</a></p>
	<button>
	<a href="home.php">home</a>
	</button>
	</form>
	</div>
</div>
</body>
</html>
