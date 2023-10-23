<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ADMIN LOGIN</title>
    <?php
require_once('Conection/connect.php');
$error="";
if(!isset($_SESSION))
{
session_start();
}
if(isset($_REQUEST['LogIn']))
{
$record=mysqli_query($con,"select * from admin_login where admin_id='".$_POST['adminid']."'") or die(mysqli_error($con));
if(mysqli_num_rows($record))
{
if($rec=mysqli_fetch_row($record))
{
if($rec[1]==$_POST['password'])
{
$_SESSION['USERNAME']=$_POST['adminid'];//set the session variable
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
        ADMIN ID<input type="text" name="adminid"><BR>
        PASSWORD<input type="password" name="password"><BR>
        <input type="submit" name="LogIn" value="LogIn">

    </form>
</body>
</html>