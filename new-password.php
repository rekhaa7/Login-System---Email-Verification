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
    <title>Create a New Password</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="fonts/material-icons.css">
    
     <!-- Fontawesome link -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
        .container{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-40%, -50%);
        }
        div .row{
            background-image: url("otp.jpg");
            width: 80%;
            height: 620px;
            background-position: right;
            background-size: 40%;
            background-repeat: no-repeat;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        } 
        .container .form{
            background: #fff;
            padding: 20px 35px;
            border-radius: 5px;
            right: 30%;
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
       
        .container .row .alert{
            font-size: 14px;
        }
        .alert-success {
            color: #155724;
            background-color: #f2cfaa;
            border-color: #ffffff;
        }
        div.field{
            width: 99%;
            margin-top: 5%;
            border: 1px solid #ced4da;
            border-radius: 0.25rem;
            color: #495057;
            background: white;
            transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
            display: flex;
            align-items: center;
            justify-content: space-between;

            
        }
        input.form-control.password{
            width: 80%;
            padding: 1% 0% 1% 3%;
            background: none;
            border: none;
            outline: none;
        }
        div.show-pass, div.gen-pass{
            font-size: 90%;
            font-weight: 900;
            color: grey;
            cursor: pointer;
            margin-right: 3%;
            display: flex;
            align-items: center;
        }
        i.material-icons{
            font-size: 200%;
        }
        div.show-pass::selection, div.gen-pass::selection, div.show-pass > *::selection, div.gen-pass > *::selection{
            background: none;
        }

        div.progress-bar{
            padding: 1% 0%;
            margin-top: 1%;
            display: flex;
            background-color: white;
            justify-content: space-between;
        }
        .progress-bar {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-direction: column;
            flex-direction: row;
            -ms-flex-pack: center;
            justify-content: center;
            overflow: hidden;    
            color: #fff;
            text-align: center;
            white-space: nowrap;
            width: 100%;
            transition: width .6s ease;
        }
        div.progress-bar > div {
            border: 1px solid lightgrey;
            width: 22%;
            height: 8px;
            border-radius: 5px;
        }

        div.percentage{
            border: 1px solid lightgrey;
            margin: 5% 25% 5% 25%;
            width: 100px;
            height: 100px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            font-size: 200%;
            position: relative;
        }
        div.percentage > div.digit{
             font-size: 100%;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6   offset-md-4     form">
                <form action="new-password.php" method="POST" autocomplete="off">
                    <h2 class="text-left">Type New Password</h2>
                    <?php 
                    if(isset($_SESSION['info'])){
                        ?>
                        <div class="alert alert-success text-center">
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
                    
                    <div class="form-group field">
                         <input type="password" id= "password"  name="password" class=" form-control password" placeholder="Password" required >

                       
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
                        <input class="form-control" type="password" name="cpassword" placeholder="Confirm your password" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="change-password" value="Reset Password">
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <script src="./js/lslstrength.js"></script>
</body>
</html>