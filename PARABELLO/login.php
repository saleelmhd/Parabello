
<?php 
require_once('connection/connection.php'); 
 
$error=""; 
if(!isset($_SESSION)) 
{ 
 session_start(); 
} 
 
 
if(isset($_REQUEST['btn'])) 
{ 
 $record=mysqli_query($con,"select * from login where username='mahir9'") or die(mysqli_error($con)); 
 if(mysqli_num_rows($record)) 
 { 
  if($rec=mysqli_fetch_row($record)) 
  { 
   if($rec[1]==$_POST['txtPassword'])  
   {
    $_SESSION['USERNAME']=$_POST['txtUname']; 
    if($rec[3]=='SELLER') 
    {
    $_SESSION['SELLER_ID']=$rec[2];
    header("location:home.php"); 
    }
    if($rec[3]=='BUYER') 
    {
    $_SESSION['BUYER_ID']=$rec[2];
    header("location:home.php"); 
    }
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
    <div class="container">
        <div class="row">
             <div class="col-sm-4 bg-info">

             </div>



             <div class="col-sm-4 bg-dark">
                 <form action="" method="post" class="form-control bg-dark text-white">
                 <div class="row">
                     <div class="col-sm-12">
                         <h1 class="text-center">
                             Seller Login
                         </h1>
                     </div>
                 </div><br><br><br>
                 <div class="row">
                     <div class="col-sm-4">
                       <h6> <label for=""> Seller Id:</label></h6>
                     </div>
                     <div class="col-sm-8">
                         <input type="text" name="txtUname" class="form-control" placeholder="Enter Your Id">
                     </div>

                 </div><br><br>
                 <div class="row">
                     <div class="col-sm-4">
                         Password:
                     </div>
                     <div class="col-sm-8">
                         <input type="password" name="txtPassword" placeholder="Enter your password" class="form-control">
                     </div>
                 </div><br><br><br><br>
                 <div class="row">
                     <div class="col-sm-4">
                        <p class="text-danger"><?php echo $error?></p>
                     </div>
                     <div class="col-sm-4">
                          <input type="submit" value="Login" name="btn" class="btn btn-outline-info btn-block">
                     </div>
                     <div class="col-sm-4">

                     </div>
                 </div><br><br>



                </form>

             </div>




             <div class="col-sm-4 bg-info">

             </div>





        </div>
       




    </div>
    
</body>
</html>