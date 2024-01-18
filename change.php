
<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Change password in php</title>
<style>
    .form-table
    {
        width:350px;
        margin-left: auto;
        margin-right: auto;
    }
    
    label{
        font-weight: bold;
    }
    
    #form_submission_ajax{
        background-color: #eee;
        padding-top: 10px;
        padding-bottom: 10px;
    }
    
    .error{
        color: #ff0000;
    }
    
    input {
        border: 2px solid #531EBF;
        padding: 4px;
    }
    
    input[type="submit"] {
        padding: 5px 15px;
        background-color: #531EBF;
        border: 2px solid #531EBF;
        color: #fff;
        border-radius: 5px;
    }
    
    h1 {
        color: #531EBF;
    }
</style>
</head>
<body>
        <?php 
        include_once "connection.php";       
        if(!empty($_POST['Submit'])){       
           $email = $_POST['useremail'];
            $opwd = $_POST['opwd'];
            $npwd = $_POST['npwd'];
            $cpwd = $_POST['cpwd'];

            if($npwd == $cpwd){
                $query = "select email, password from usertable where email = '$email' and password = '$opwd'";
                $result = mysqli_query($con, $query);
                $count = mysqli_num_rows($result);
                if($count>0){
                    echo "Password updated successfully";
                }
                else{
                    echo "Old password not matched";
                }
                
            }
            else{
                echo "New password and confirm password not match";
            }
            

            // $query = mysqli_query($con, "select email, password from usertable where email = '$email' and password = '$opwd'");
            // $num = mysqli_fetch_array($query);

            // if($num > 0){
            //     $con = mysqli_query($con, "update usertable set password = '$npwd' where email = '$email'");
            //     $_SESSION['msg1'] = "Password Changed successfully";
            // }
            // else{
            //     $_SESSION['msg2'] = "Password does not match";
            // }
        }
        ?>

    <h1><center>Change Password Form</center></h1>
    <p style= "color: red;"> <?php echo $_SESSION['msg1'];?><?php $_SESSION['msg1'] = ""; ?></p>
    <form action="" method="post" name="chngpwd" onSubmit="return valid();">
        <table class="form-table">
        <tr>
                <td><label>Email:</label></td>
                <td><input type="email" name="useremail" id="useremail" ></td>
            </tr>
            <tr>
                <td><label>Old password:</label></td>
                <td><input type="password" name="opwd" id="opwd"></td>
            </tr>
 
            <tr>
                <td><label>New Password:</label></td>
                <td><input type="password" name="npwd" id="npwd""></td>
            </tr>
          
            <tr>
                <td><label>Confirm Password:</label></td>
                <td><input type="password" name="cpwd" id="cpwd"></td>
            </tr>
 
            <tr>
                <td><a href="home.php"> Back to home</a></td>
                 
                <td>
                    <input type="submit" name="Submit" value="Change Password">
                </td>
            </tr>
        </table>
    </form>
</body>

</html>