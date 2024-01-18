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
<script type="text/javascript" src="jquery-1.11.1.js"></script>
</head>
<body>
 
<?php 
session_start();
     
$error = [
"opwd_error" => '',
"npwd_error" => '',
"cpwd_error" => ''
];
 
$form_data = [
"opwd" => '',
"npwd" => '',
"cpwd" => ''
];
 
if(!empty($_SESSION['error']))
{
    $error = $_SESSION['error'];
}
 
if(!empty($_SESSION['form_data']))
{
    $form_data = $_SESSION['form_data'];
}
 
?>
 
    <h1><center>Change Password Form</center></h1>
    <form action="change.php" method="post" name="changepwd" onsubmit="return validate();" id="form_submission_ajax">
        <table class="form-table">
        <tr>
                <td><label>Email:</label></td>
                <td><input type="email" name="useremail" id="useremai" value="<?php echo $form_data['opwd']; ?>"></td>
            </tr>
            <tr>
                <td><label>Old password:</label></td>
                <td><input type="password" name="opwd" id="opwd" value="<?php echo $form_data['opwd']; ?>"></td>
            </tr>
            <tr>
                <td></td>
                <td id="opwd_error" class="error"><?php echo $error['opwd_error']; ?></td>
            </tr>
 
            <tr>
                <td><label>New Password:</label></td>
                <td><input type="password" name="npwd" id="npwd" value="<?php echo $form_data['npwd']; ?>"></td>
            </tr>
            <tr>
                <td></td>
                <td id="npwd_error" class="error"><?php echo $error['npwd_error']; ?></td>
            </tr>
 
            <tr>
                <td><label>Confirm Password:</label></td>
                <td><input type="password" name="cpwd" id="cpwd" value="<?php echo $form_data['cpwd']; ?>"></td>
            </tr>
 
            <tr>
                <td></td>
                <td id="cpwd_error" class="error"><?php echo $error['cpwd_error']; ?></td>
            </tr>
 
            <tr>
                <td></td>
                <td>
                    <input type="hidden" name="user_id" id="user_id" value="1">
                    <input type="submit" name="Submit" value="Change Password">
                </td>
            </tr>
        </table>
    </form>
</body>
 
<script type="text/javascript">
function validate()
{
    var valid = true;
    var opwd = $('#opwd').val();
    var npwd = $('#npwd').val();
    var cpwd = $('#cpwd').val();
 
    if(opwd=='' || opwd==null)
    {
        valid=false;
        $('#opwd_error').html("* This field is required.");
    }
    else
    {
        $('#opwd_error').html("");  
    }
 
    if(npwd=='' || npwd==null)
    {
        valid=false;
        $('#npwd_error').html("* This field is required.");
    }
    else
    {
        $('#npwd_error').html("");
    }
 
    if(cpwd=='' || cpwd==null)
    {
        valid=false;
        $('#cpwd_error').html("* This field is required.");
    }
    else
    {
        $('#cpwd_error').html("");
    }
 
    if(npwd != '' && cpwd != '')
    {
        if(npwd != cpwd)
        {
            valid = false;
            $('#cpwd_error').html("* Confirm password is same as new password.");
        }
 
        if(npwd == cpwd)
        {
            $('#cpwd_error').html("");          
        }
    }
 
    if(valid==true)
    {
        return true;
    }
    else
    {
        return false;
    }
}
</script>
</html>   
 
<?php 
include_once "connection.php";

// $_SESSION['error'] = "";
// $_SESSION['form_data'] = "";
?>