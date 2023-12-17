<?php
   include("config.php");
   session_start();
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
                <h1 class="opacity">REGISTER</h1>
                <form id="reg" method="post">
                    <input type="text" name="name" placeholder="NAME" />
                    <input type="text" name="username" placeholder="USERNAME" />
                    <input type="date" name="dob" placeholder="DATE OF BIRTH" />
                    <input type="text" name="contact" placeholder="CONTACT NO." />
                    <input type="text" name="age" placeholder="AGE" />
                    <input type="password" name="pass" placeholder="PASSWORD" />
                    <button class="opacity" name="reg" href="index.php" type="submit">SUBMIT</button>
                </form>
                <div class="register-forget opacity">
                    <a href="index.php">Login</a>
                    <a href="">Forgot Password</a>
                </div>
            </div>
        </div>
    </section>

    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script>
 $(document).on('submit', '#reg', function (e) {
            e.preventDefault();

            var formData = new FormData(this);
            formData.append("save_reg", true);

            console.log(formData);
            $.ajax({
                type: "POST",
                url: "insert.php",
                data: formData,
                processData: false,
                contentType: false,
                success: function (response) {
                    
                    var res = jQuery.parseJSON(response);
                    if(res.status == 422) {
                        $('#errorMessage').removeClass('d-none');
                        $('#errorMessage').text(res.message);

                    }else if(res.status == 200){

                        $('#errorMessage').addClass('d-none');

                        alertify.set('notifier','position', 'top-right');
                        alertify.success(res.message);
                        
                        $('#reg')[0].reset();

                        $('index.php').load(location.href + " index.php");

                    }else if(res.status == 500) {
						$('#errorMessage').addClass('d-none');
                        $('#reg')[0].reset();
                        alertify.set('notifier','position', 'top-right');
                        alertify.success(res.message);
                    }
                }
            });
            

        });
</script>
    
</body>
  <script  src="./script.js"></script>
  

</body>
</html>
