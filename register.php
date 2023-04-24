<!DOCTYPE html>
<html>
<head>
	<title>SkyKosovo - Register</title>
	<link rel="stylesheet" type="text/css" href="./style/register.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
   <div class="container">
   <form method="POST" action="register.php">
        <div class="titleContain">
        <div class="logoContain">
        <img class="logoReg" style="width: 5vw;" src="../airline/images/SkyKosovoLogo.png">
        </div>
        <h1 class="titleReg">SkyKosovo</h1>
        </div>
        <p>The Wings of Kosovo!</p>
        <div class="nameSurname">
        <input class="inputi" type="text" id="name" name="name" placeholder="Name"required>
        <input class="inputi" type="text" id="surname" name="surname" placeholder="Surname"required>
        </div>
		<input class="inputi" type="email" id="email" name="email" placeholder="Email"required>
		<input class="inputi" type="number" id="phoneNumber" name="phoneNumber" placeholder="Phone Number"required>
        <input class="inputi" type="number" id="age" name="age" placeholder="Age"required>
        <div class="passwords">
		<input class="inputi" type="password" id="password" name="password" placeholder="Password"required>
		<input class="inputi" type="password" id="confirmPassword" name="confirmPassword" placeholder="Confirm Password"required>

        
        </div>
        <div class="registerButton">
        <a class="register" href="index.php">Register</a>
        </div>
        <div class="loginLink">
        <div class="login">Already have an account?</div> <a href="/airline/login.php"class="loginshort">Log in</a>
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

