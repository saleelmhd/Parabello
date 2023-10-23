<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Buyer Login</title>
    <link rel="stylesheet" type="text/css" href="login.css">
    <?php
require_once('Conection/connect.php');
$error="";
if(!isset($_SESSION))
{
session_start();
}
if(isset($_REQUEST['login1']))
{
$record=mysqli_query($con,"select * from login where username='".$_POST['uname']."'") or die(mysqli_error($con));
if(mysqli_num_rows($record))
{
if($rec=mysqli_fetch_row($record))
{
if($rec[1]==$_POST['password'])
{
$_SESSION['USERNAME']=$_POST['uname'];//set the session variable
header("location:employees.php");
}
else
{
$error="Invalid Password...";
}
}
}
else
{
$error="Invalid User...";
}
}

?>
</head>
<body>
<div class="login-box"  style="border:1px white solid;padding: 50px 500px;border-left:.5px;border-right:.5px;">
<h1 class="h1">LogIn</h1>
    <form method="post">
<!--<label for="username">User Name</label>-->
        <div class="textbox">
        
        <input type="text" placeholder="Username" name="uname">
        </div>
        
        
        
       <!--
            <label for="Password">Password</label>
            -->
        <div class="textbox">
        <input type="password" placeholder="Password" name="password">
        </div>
        <input class="btn" type="button" name="login1" value="Sign-In">

    </form>
</div>
</body>
</html>