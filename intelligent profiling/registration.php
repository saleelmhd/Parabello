<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration</title>
    <link rel="stylesheet" type="text/css" href="registration.css">
</head>
<?php
require_once('Conection/connect.php');
//start session
if(!isset($_SESSION))
{
session_start();
}
    
    
if(isset($_REQUEST['submit12']))
{
$name=$_POST['fullname'];
$number=$_POST['phonenumber'];
$mail=$_POST['email'];
$pass=$_POST['password'];

$adhar=$_POST['adhrnum'];
$address=$_POST['address'];
$roll=$_POST['roll'];
echo "INSERT INTO registration(name,email,password,adhar_num,address,roll,contactno) VALUES('$name','$mail','$pass',$adhar,'$address','$roll',$number)";
//mysqli_query($con,"INSERT INTO registration(name,email,password,adhar_num,address,roll,contactno) VALUES('$name','$mail','$pass',$adhar,'$address','$roll',$number)") or die(mysqli_error($con));
}
?>


<body>
<form method="post" class="regform">

<label for="name">Full Name</label><input type="text" name="fullname" placeholder="Full Name...">
<label for="PHONE NUMBER">PHONE NUMBER</label><input type="text" name="phonenumber" placeholder="Phone Number..">
<label for="EMAIL">EMAIL</label><input type="text" name="email" placeholder="Email Address...">
<label for="PASSWORD">PASSWORD</label><input type="text" name="password" placeholder="Enter Password...">


<label for="ADHAR NUMBER">ADHAR NUMBER</label><input type="text" name="adhrnum" placeholder="Adhar Number...">
<label for="ADDRESS">ADDRESS</label><input type="text" name="address" placeholder="Address ...">
<select name="roll"><OPTION VALUE="seller">SELLER</OPTION><OPTION VALUE="buyer">BUYER</OPTION>
</select>
<p>
<input class="btn" type="submit" name="submit12" value="REGISTER">
</p>
</form>
</body>
</html>