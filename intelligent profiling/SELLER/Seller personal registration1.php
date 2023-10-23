<?php
require_once('../connection/connection.php');
$error="";
if(isset($_REQUEST['btn']))
{
    if($_FILES['profile']['type']=='image/jpeg' )
    {
    $name=$_POST['name'];
$email=$_POST['email'];
$mobno=$_POST['mobno'];
$city=$_POST['city'];
$adres=$_POST['adr'];
$photo=$_FILES['profile']['name'];
move_uploaded_file($_FILES['profile']['tmp_name'],getcwd().'/photo/'.$_FILES['profile']['name'])	;
mysqli_query($con,"INSERT INTO parabello.seller_register(name,email,mobile_no,city,address,status,photo)VALUES('$name','$email',$mobno,'$city','$adres',0,'$photo')") or die(mysqli_error($con));
header("location:sellerlogin.php") ;   
}
    else
    $error="Please choose jpeg file";
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
<body background="slide-1.jpg">
    <div class="container-fluid">
        
        <div class="row">

            <div class="col-sm-4 bg-transparent">

            </div>
            <div class="col-sm-4  bg-transparent ">
                <form action="" method="post" enctype="multipart/form-data" class="  bg-transparent text-white">
               <div class="row">
                    <div class="col-sm-12">
                        <h1 class="text-center">Seller personal registration</h1>
                    </div>
               </div><br>
               <div class="row">
                   <div class="col-sm-4">
                       <h6><label for="">Name</label></h6>
                   </div>
                   <div class="col-sm-8">
                       <input type="text" placeholder="enter your name" name="name" class="form-control">

                   </div>
               </div><br>
                <div class="row">
                    <div class="col-sm-4">
                      <h6> <label for=""> Email</label></h6>
                    </div>
                    <div class="col-sm-8">
                        <input type="email" placeholder="eg:123@gmail.com" name="email" class="form-control">
                    </div>

                </div><br>
                <div class="row">
                    <div class="col-sm-4">
                       <h6><label for=""> Mob No</label></h6>
                    </div>
                    <div class="col-sm-8">
                        <input type="number" placeholder="Enter your mob no" name="mobno" class="form-control">
                    </div>

                </div><br>
                <div class="row">
                    <div class="col-sm-4">
                       <h6><label for=""> City</label></h6>
                    </div>
                    <div class="col-sm-8">
                        <input type="text" placeholder="enter your city" name="city" class="form-control">
                    </div>

                </div><br>
                <div class="row">
                    <div class="col-sm-4">
                       <h6><label for="">Address</label></h6>
                    </div>
                    <div class="col-sm-8">
                       <textarea rows="5" cols="15" name="adr" class="form-control"></textarea>
                    </div>

                </div><br>
                <div class="row">
                    <div class="col-sm-4">
                       <h6><label for="">Profile photo</label></h6>
                    </div>
                    <div class="col-sm-8">
                      <input type="file" name="profile" class="form-control">
<p class="text-danger"><?php echo $error?></p>                    </div>

                </div><br>






                <div class="row">
                    <div class="col-sm-4">

                    </div>
                    <div class="col-sm-4">
                        <input type="submit" value="Register" name="btn" class="btn btn-outline-info btn-block">

                    </div>
                    <div class="col-sm-4">

                    </div>
                </div><br>







            </form>
            </div>
            <div class="col-sm-4  bg-transparent">

            </div>











        </div>
    
    </div>
    
</body>
</html>