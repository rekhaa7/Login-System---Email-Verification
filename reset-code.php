<?php require_once "controllerUserData.php"; ?>
<?php 
$email = $_SESSION['email'];
if($email == false){
  header('Location: login-user.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Code Verification</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
        html,body{
            font-family: 'Poppins', sans-serif;
            height: 100%;
            
        }
        ::selection{
           
            
        }
        .container{
            position: absolute;
            top: 50%;
            left: 60%;
            transform: translate(-50%, -50%);
        }
        div .row{
            background-image: url("code-verify.png");
            width: 90%;
            height: 350px;
            background-position: left;
            background-size: 50%;
            background-repeat: no-repeat;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }  
        .container .form{
            width: 50%;
            background: #fff;
            padding: 30px 35px;
            border-radius: 5px;
            left: 15%;
        }
        .container .form form .form-control{
            height: 40px;
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
        .alert-success {
            color: #155724;
            background-color: #f2cfaa;
            border-color: #ffffff;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-5 offset-md-5 form">
                <form action="reset-code.php" method="POST" autocomplete="off">
                    <h2 class="text-center">Code Verification</h2>
                    <?php 
                    if(isset($_SESSION['info'])){
                        ?>
                        <div class="alert alert-success text-center" style="padding: 0.4rem 0.4rem">
                            <?php echo $_SESSION['info']; ?>
                        </div>
                        <?php
                    }
                    ?>
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
                        <input class="form-control" type="number" name="otp" placeholder="Enter code" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="check-reset-otp" value="Submit">
                    </div>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>