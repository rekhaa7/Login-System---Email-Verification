<?php require_once "controllerUserData.php"; ?>
<?php
if($_SESSION['info'] == false){
    header('Location: login-user.php');  
}
?>
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
            background-position: 1% 100%;
            background-repeat: no-repeat;
        }
        ::selection{
           
            
        }
        div .row{
            background-image: url("login.png" );
            height: 300px;
            width: 90%;
            background-position: 10%;
            background-size: 40%;
            background-repeat: no-repeat;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }
        .container{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
        .container .form{
            width: 90%;
            background: #fff;
            padding: 50px 15px;
            border-radius: 5px;
            left: 20%;
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
            color: #6665ee;
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
            <div class="col-md-5 offset-md-4 form login-form">
            <?php 
            if(isset($_SESSION['info'])){
                ?>
                <div class="alert alert-success text-center">
                <?php echo $_SESSION['info']; ?>
                </div>
                <?php
            }
            ?>
                <form action="login-user.php" method="POST">
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="login-now" value="Login Now">
                    </div>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>