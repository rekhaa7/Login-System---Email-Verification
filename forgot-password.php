<?php require_once "controllerUserData.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
        html,body{
            font-family: 'Poppins', sans-serif;
            height: 100%;
            background-position: 1% 100%;
           
        }
        ::selection{
    
            
        }
        .container{
            position: absolute;
            top: 50%;
            width: 50%;
            height: 400px;
            left: 50%;
            transform: translate(-50%, -40%);
        }
        div .row{
            background-image: url("logo.png");
            width: 100%;
            height: 300px;
            background-position: 30px;
            background-size: 40%;
            background-repeat: no-repeat;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }  
        .container .form{
            background: #fff;
            padding: 30px 35px;
            border-radius: 5px;
            left: 25%;
            
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
            color: #6665ee;
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
            <div class="col-md-6 offset-md-3 form">
                <form action="forgot-password.php" method="POST" autocomplete="">
                    <h2 class="text-left">Forgot Password</h2>
                    <p class="text-left">Enter your email address</p>
                    <?php
                        if(count($errors) > 0){
                            ?>
                            <div class="alert alert-danger text-center">
                                <?php 
                                    foreach($errors as $error){
                                        echo $error;
                                    }
                                ?>
                            </div>
                            <?php
                        }
                    ?>
                    <div class="form-group">
                        <input class="form-control" type="email" name="email" placeholder="Enter email address" required value="<?php echo $email ?>">
                    </div>
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="check-email" value="Continue">
                    </div>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>