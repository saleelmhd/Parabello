<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration</title>
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
$roll=$_POST['roll'];
$adhar=$_POST['adhrnum'];
$address=$_POST['address'];
mysqli_query($con,"INSERT INTO sold_cars(user_id,name,email,password,roll,adhar_num,address) VALUES('$name','$number','$mail','$pass','$roll',$adhar,'$address')") or die(mysqli_error($con));
}
?>


<body>
<form>
FULL NAME<input type="text" name="fullname"><br>
PHONE NUMBER<input type="text" name="phonenumber"><br>
EMAIL<input type="text" name="email"><br>
PASSWORD<input type="text" name="password"><br>
<select name="roll">
  <option value="Buyer">Buyer</option>
  <option value="Seller">Seller</option>
</select><br>
ADHAR NUMBER<input type="text" name="adhrnum"><br>
ADDRESS<textarea  name="address"></textarea><br>
<input type="submit" name="submit12" value="REGISTER">

</form>
</body>
</html>