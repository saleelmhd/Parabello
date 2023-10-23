<?php
require_once('../connection/connection.php');
$id=0;
$role="";
if(isset($_GET['id']))
{
$id=$_GET['id'];
$role=$_GET['role'];
}


if(isset($_REQUEST['btn']))
{
$name=$_POST['usrn'];
$password=$_POST['usrpass'];

mysqli_query($con,"INSERT INTO parabello.user_verification(username,password,id,role)VALUES('$name','$password',$id,'$role')") or die(mysqli_error($con));

;




}
?>











<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="css/bootstrap.min.css" rel="stylesheet" style="text/css">
    <title>Document</title>
</head>
<body>
    <div class="container bg-dark">
        <br>
        <form action="" method="post"  class="form-control bg-dark text-white">
        <div class="row">
           
                <div class="col-sm-4">
                    <label for="">Username</label>
                </div>
                <div class="col-sm-8">
                    <input type="text" name="usrn" class="form-control" >

                </div>
            </div><br>
            <div class="row">
                <div class="col-sm-4">
                    <label for="">Password</label>
                </div>
                <div class="col-sm-8">
                    <input type="text" name="usrpass" class="form-control" >

                </div>
            </div><br>
            <div class="row">
                <div class="col-sm-4">

                </div>
                <div class="col-sm-4">
                <input type="submit" vaue="ADD" name="btn" class="btn btn-outline-info btn-block">
                </div>
                <div class="col-sm-4"></div>
            </div>


            
    </form> 
    <a href="verifys.php" class="btn btn-outline-info btn-block">BUYER</a>
    <a href="verifyb.php" class="btn btn-outline-info btn-block">SELLER</a>

    </div>
    
</body>
</html>