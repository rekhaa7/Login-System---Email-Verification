<?php require_once "controllerUserData.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Signup Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
    
    <link rel="stylesheet" href="fonts/material-icons.css">
    <link rel="stylesheet" href="css/lslstrength.css">
    <!-- Fontawesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   
    <!-- Implementing Inline CSS  -->
    <style>
        @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
        html,body{
         
            font-family: 'Poppins', sans-serif;
            height: 100%;
            background-position: right;
            background-repeat: no-repeat;
        }
        ::selection{
 
        }
        .container{ 
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-45%, -50%);
        }

 
        div .row{
            background-image: url("signup-image.jpg" );
            background height: 400px;
            width: 90%;
            background-position: right;
            background-size: 45%;
            background-repeat: no-repeat;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }       
        .container .form{
            right: 22%;
            width:100%;
            background: #fff;
            padding: 30px 35px;
            border-radius: 5px;        
        }
        .container .form h2{
            padding:6px;
        }
        .container .form form .form-control{
            height: 40px;
            font-size: 15px;
        }

        div .form-generate {
            height: 40px;
            text-align: center;
            font-size: 15px;
            letter-spacing: 4px;
            border:white;
            border-radius:4px;
            cursor: pointer;
            width:394px;
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
        form .form-group{
            top: 50%;
            left: 40%;
            width: 400px;
        }
        form .password{
            top: 50%;
            left: 40%;
            width: 400px;
        }
       
        span{
            position: absolute;
            right: 50px;
            transform: translate(0,-50%);
            top: 39%;
            cursor: pointer;
        }
        .fa{
            font-size: 20px;
            color: #7a797e;
        }
        #frmCheckPassword 
        {
            border-top:#F0F0F0 2px solid;
            background:#FAF8F8;
            padding:10px;
        }
        #password-strength-status 
        {
            width: 400px;
            padding: 5px;
            text-align: center;
            color: #FFFFFF; 
            border-radius:4px;
            margin-top: 10px;
            margin-bottom: 10px;
            font-size: 14px;
        }
        .medium
        {
            background-color: #ffa500;
            border:#BBB418 1px solid;}
            .weak{background-color: #e60000;
            border:#AA4502 1px solid;
         }
         .strong
         {
            background-color: #12CC1A;
            border:#0FA015 1px solid;
         }
    </style>
    
    <!-- Google Captcha script -->
        <script src='https://www.google.com/recaptcha/api.js'></script>
    
    <!-- captcha script  -->
    <script>
            var recaptcha_response = '';
            function submitUserForm() {
                if(recaptcha_response.length == 0) {
                    document.getElementById('g-recaptcha-error').innerHTML = '<p style="color:red;">Please verify you are human.</p>';
                    return false;
                }
                return true;
            }
             
            function verifyCaptcha(token) {
                recaptcha_response = token;
                document.getElementById('g-recaptcha-error').innerHTML = '';
            }
            
</script>
    <!-- Google Captcha Script end -->

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-3 form">
                <form action="signup-user.php" method="POST" autocomplete="" onsubmit="return submitUserForm();"> 
                    <h2 class="text-left">Signup Now</h2>
                   
                    <?php
                    if(count($errors) == 1){
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
                    elseif(count($errors) > 1){
                        ?>
                        <div class="alert alert-danger">
                            <?php
                            foreach($errors as $showerror){
                                ?>
                                <li><?php echo $showerror; ?></li>
                                <?php
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>
                 
                    <div class="form-group" >
                        <input class="form-control" type="text" name="username" placeholder="Username" pattern="[a-z0-9]{6,20}" title = "Should include atleast 6 characters."  required value="<?php echo $name ?>">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="email" name="email" placeholder="Email Address" required value="<?php echo $email ?>">
                    </div>
                     <div class="form-group field">
                         <input type="password" id= "password"  name="password" class=" form-control password" pattern = "/^[a-zA-Z0-9!@#\$%\^\&*_=+-]{8,12}$/g"  title = "Must include special characters, numbers and lower and uppercase alphabets." placeholder="Password" required >
                        <div class="gen-pass">GENERATE</div>
                        <div class="show-pass"><i class="material-icons">visibility</i></div>
                        </div>
                        <div class="progress-bar">
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                        </div>

                        <div class="percentage">
                            <div class="digit">0</div>%
                        </div>
                   
                    <div class="form-group">
                        <input class="form-control" type="password" name="cpassword" placeholder="Confirm password" required>
                    </div>

                    <!-- captcha -->
                    <div class="form-group">
                        <div class="g-recaptcha" data-sitekey="6Lefi14gAAAAAO1cdFbLuMacw_GT-uc_HyIwkpXz" data-callback="verifyCaptcha"></div>
                        <div id="g-recaptcha-error"></div>
                    </div>
                    <!-- captcha end -->
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="signup" value="Signup">
                    </div>
                    <div class="link login-link text-left">Already a member? <a href="login-user.php"> Sign In</a></div>
                </form>
            </div>
        </div>
    </div>
    

<script src="./js/lslstrength.js"></script>
      
</body>
</html>