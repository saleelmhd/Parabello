<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Buyer Login</title>
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
    <form method="post">
        User Name<input type="text" name="uname"><BR>
        Password<input type="password" name="password"><BR>
        <input type="submit" name="login1" value="LogIn">

    </form>
</body>
</html>