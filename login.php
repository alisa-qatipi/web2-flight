<!DOCTYPE html>
<html>
<head>
	<title>SkyKosovo - Login</title>
	<link rel="stylesheet" type="text/css" href="./style/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
	<h1>SkyKosovo</h1>
    <p>Fly Higher!</p>
	<form method="POST" action="login.php">
		<input type="email" id="email" name="email" placeholder="Email"required>
		<input type="password" id="password" name="password" placeholder="Password"required>
        <div class="loginButton">
        <a class="login" href="index.php">Login</a>
        </div>
        <div class="registerLink">
        <a class="register"href="register.php">Don't have an account? Create one!</a>
        </div>
	</form>

    <div class="socialMedia">
    <i class="fa-brands fa-instagram" ></i>
    <i class="fa-brands fa-facebook-f" ></i>
    <i class="fa-brands fa-twitter" ></i>
    </div>
    
</body>
</html>

