<?php require_once "controllerUserData.php"; ?>
<?php 
// session will stay alive for 10 seconds only
$duration = 10;  
if(isset($_SESSION["loggedin"])){
    $duration = $_SESSION["loggedin"]["duration"];
    $start = $_SESSION["loggedin"]["start"];

    if((time() - $start)> $duration){
        unset($_SESSION["loggedin"]["duration"]);
        unset($_SESSION["loggedin"]["start"]);
        unset($_SESSION["loggedin"]);

        header('location: login-user.php?status=error&msg=Session has been expired after 30 seconds');
    }
}
$email = $_SESSION['email'];
$password = $_SESSION['password'];
if($email != false && $password != false){
    $sql = "SELECT * FROM usertable WHERE email = '$email'";
    $run_Sql = mysqli_query($con, $sql);
    if($run_Sql){
        $fetch_info = mysqli_fetch_assoc($run_Sql);
        $status = $fetch_info['status'];
        $code = $fetch_info['code'];
        if($status == "verified"){
            if($code != 0){
                header('Location: reset-code.php');
            }
        }else{
            header('Location: user-otp.php');
        }
    }
}else{
    header('Location: login-user.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Welcome</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
    @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
    html,body{  
            background: url(welcome.png);
            font-family: 'Poppins', sans-serif;
            height: 100%;
            background-size: 50%;
            background-position: center;
            background-repeat: no-repeat;
        }
    nav{
        padding-left: 100px!important;
        padding-right: 100px!important;
        background: #eb9234;
        font-family: 'Ubuntu', sans-serif;
    } 
    nav a.navbar-brand{
        color: #fff;
        font-size: 30px!important;
        font-weight: 500;
    }
    button a{
        color: #eb9234;
        font-weight: 500;
        cursor: pointer;
    }
    button a:hover{
        text-decoration: none;
    }
    h1{
        position: absolute;
        top: 20%;
        left: 50%;
        width: 50%;
        text-align: center;
        transform: translate(-50%, -50%);
        font-size: 30px;
        font-weight: 600;
        margin-top:20px;
        color: white;
    }
    </style>
</head>
<body>
    <nav class="navbar">

    <a class="navbar-brand" href="">
        RC 
    </a>
   
    <h1> Welcome <?php echo $fetch_info['username']?></h1>
    <button type="button" class="btn btn-light"><a href="logout-user.php">Logout</a></button>
    </nav>
    
    
</body>
</html>