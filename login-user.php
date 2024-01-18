<?php require_once "controllerUserData.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <style>
         @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
        html,body{  
            
            font-family: 'Poppins', sans-serif;
            height: 100%;
            background-position: -10% 100%;
            background-repeat: no-repeat;
        }
        ::selection{
                 
        }
        .container{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
        div .row{
            background-image: url("signin-image.jpg" );
            background
            height: 400px;
            width: 100%;
            background-position: -6%;
            background-size: 50%;
            background-repeat: no-repeat;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }
        .container .form{
            left: 35%;
            background: #fff;
            padding: 30px 35px;
            border-radius: 1px;
        }
        .container .form form .form-control{
            height: 40px;
            font-size: 15px;
        }
        .container .form form .forget-pass{
            margin: -15px 0 15px 0;
        }
        .container .form form .forget-pass a{
           font-size: 15px;
        }
        .container .form form .button{
            background: #eb9234;
            color: #fff;
            font-size: 17px;
            font-weight: 500;
            transition: all 0.3s ease;
        }
        .container .form form .button:hover{
            background: #f7a44e;
        }
        .container .form form .link{
            padding: 5px 0;
        }
        .container .form form .link a{
            color: #eb9234;
        }
        .container .login-form form p{
            font-size: 14px;
        }
        .container .row .alert{
            font-size: 14px;
        }
    </style>

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-5 offset-md-2 form login-form">
                    <?php
                        if(isset($_GET["status"])){
                            $userid = $_GET["status"];
                            $message = $_GET["msg"];
                            echo"<div id= '$userid';>$message</div>";
                        }
                    ?>
                <form action="login-user.php" method="POST" autocomplete="">
                    <h2 class="text-left">Sign In Here</h2>
                    <p class="text-left">Login with your credentials.</p>
                    <?php
                    if(count($errors) > 0){
                        ?>
                        <div class="alert alert-danger text-center">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>
                    <div class="form-group">
                        <input class="form-control" type="text" name="email" placeholder="Email Address" required value="<?php echo $email ?>">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="password" placeholder="Password" required>
                    </div>
                    <div class="link forget-pass text-left"><a href="forgot-password.php">Forgot password?</a></div>
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="login" value="Login">
                    </div>
                    <div class="link login-link text-left">Not a account? <a href="signup-user.php">Signup now</a></div>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>