
<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      
      $username = mysqli_real_escape_string($db,$_POST['username']);
      $pass = mysqli_real_escape_string($db,$_POST['pass']); 
      
      $sql = "SELECT * FROM db WHERE username = '$username' and pass = '$pass'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
      $count = mysqli_num_rows($result);
      
      if($count == 1) {
		 $_SESSION['loggedin'] = TRUE;
         $_SESSION['login_user'] = $username;
         
echo "<script>alert('Login Successful');window.location.href='profile.php';</script>";
	}
	  else
	  {
         echo "<script>alert('Your Login Name or Password is invalid');window.location.href='index.php';</script>";
		 exit();
      }
   }	


?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Guvi</title>
  <link rel="stylesheet" href="./style.css">

</head>
<body>
<body>
    <section class="container">
        <div class="login-container">
            <div class="form-container">
                <h1 class="opacity">LOGIN</h1>
                <form id="reg" method="post">
                    <input type="text" name="username" placeholder="USERNAME" />
                    <input type="password" name="pass" placeholder="PASSWORD" />
                    <button class="opacity" name="reg" type="submit">SUBMIT</button>
                </form>
                <div class="register-forget opacity">
                    <a href="reg.php">Register</a>
                    <a href="">Forgot Password</a>
                </div>
            </div>
        </div>
    </section>


</body>
  <script  src="./script.js"></script>
  

</body>
</html>
