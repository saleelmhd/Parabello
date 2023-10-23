
<?php
require_once('../connection/connection.php');
$error="";
if(isset($_REQUEST['btn']))
{
    if($_FILES['profile']['type']=='image/jpeg' )
    {
$name=$_POST['name'];
$mobno=$_POST['mobno'];
$adharno=$_POST['ano'];
$email=$_POST['email'];
$city=$_POST['city'];
$adres=$_POST['adr'];
$photo=$_FILES['profile']['name'];
move_uploaded_file($_FILES['profile']['tmp_name'],getcwd().'/photo/'.$_FILES['profile']['name'])	;
mysqli_query($con,"INSERT INTO parabello.buyer_register(name,mobile_no,adhar_no,email,city,address,status,photo)VALUES('$name',$mobno,$adharno,'$email','$city','$adres',0,'$photo')") or die(mysqli_error($con));
header("location:buyerlogin.php") ;
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
    <title>Buyer Registration</title>
</head>
<body background="slide-1.jpg">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-4 bg-transparent">

            </div>
            <div class="col-sm-4 bg-transparent ">
                <form action="" method="post" enctype="multipart/form-data" class=" bg-transparent text-white">
                <div class="row">
                    <div class="col-sm-12">
                        <h1 class="text-center">Buyer Registration</h1>
                    </div>

                    
                </div><br>
                <div class="row">
                    <div class="col-sm-4">
                        <label for="">Name</label>
                    </div>
                    <div class="col-sm-8">
                        <input type="text" name="name" class="form-control" placeholder="enter your name">
                    </div>
                    
                </div><br>
                <div class="row">
                    <div class="col-sm-4">
                        <label for="">Mobile no</label>
                    </div>
                    <div class="col-sm-8">
                        <input type="number" name="mobno" class="form-control" placeholder="enter your mob no">
                    </div>
                    
                </div><br>
                <div class="row">
                    <div class="col-sm-4">
                        <label for="">Adhar no</label>
                    </div>
                    <div class="col-sm-8">
                        <input type="text" name="ano" class="form-control" placeholder="enter the digits">
                    </div>
                    
                </div><br>
                <div class="row">
                    <div class="col-sm-4">
                        <label for="">Email</label>
                    </div>
                    <div class="col-sm-8">
                        <input type="email" class="form-control" name="email" placeholder="eg:123@gmail.com">
                    </div>
                    
                </div><br>
                <div class="row">
                    <div class="col-sm-4">
                        <label for="">City</label>
                    </div>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="city" placeholder="enter your city">
                    </div>
                    
                </div><br>
                <div class="row">
                    <div class="col-sm-4">
                        <label for="">Address</label>
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
<p class="text-danger"><?php echo $error ?></p>                    </div>

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
            <div class="col-sm-4 bg-transparent">

            </div>
        </div>





















    </div>
    
</body>
</html>