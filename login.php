<!DOCTYPE html>
<html>
<head>
	<title>SkyKosovo - Login</title>
	<link rel="stylesheet" type="text/css" href="./style/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="contain">
    <form method="POST" action="login.php">
        <div class="titleContainer">
        <div class="logoContainer">
        <img class="logo" style="width: 5vw;" src="../airline/images/SkyKosovoLogo.png">
        </div>
        <h1 class="title">SkyKosovo</h1>
        </div>
        <p>The Wings of Kosovo!</p>
		<input class="inputi" type="email" id="email" name="email" placeholder="Email"required>
		<input class="inputi" type="password" id="password" name="password" placeholder="Password"required>
        <div class="loginButton">
        <a class="login" href="index.php">Login</a>
        </div>
        <div class="registerLink">
        <a class="register"href="register.php">Don't have an account? Create one!</a>
        </div>
        <div class="socialMedia">
        <i class="fa-brands fa-instagram" ></i>
        <i class="fa-brands fa-facebook-f" ></i>
        <i class="fa-brands fa-twitter" ></i>
        </div>
	</form>

</div>

    
</body>
</html>

