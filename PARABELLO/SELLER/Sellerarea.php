<?php
if(!isset($_SESSION)) 
{ 
 session_start(); 
} 
$user=$id="";
if(isset($_SESSION['USERNAME']))
{
    $user=$_SESSION['USERNAME'];
    $id=$_SESSION['SELLER_ID'];
}
else
{
    header("location:error.php");
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="css/bootstrap.min.css" rel="stylesheet" style="text/css">
    <title>Seller Area</title>
</head>
<body>
    <div class="container bg-light">
        <div class="row">
           <div class="col-sm-12">
               <h1 class="text-center">
                   Seller 
               </h1>
           </div>

        </div>
        <div class="row">
            <div class="col-sm-3 bg-dark text-white">
                <h1 class="text-center">
                    CAR
                </h1><br>
                <a role="button" class="btn btn-outline-info btn-block" href="cardetails.html" target="ifrm">Add selling vehichle</a>
                <a role="button" class="btn btn-outline-info btn-block" href="seller details list.html" target="ifrm">view selling vehichle</a>

               
                <a role="button" class="btn btn-outline-info btn-block" href="rentcardetails.html" target="ifrm">Add renting vehichle</a>
                <a role="button" class="btn btn-outline-info btn-block" href="seller details list.html" target="ifrm">View renting vehichle</a>
                <a role="button" class="btn btn-outline-info btn-block" href="seller details list.html" target="ifrm">Sold cars</a> <br>
                <h1 class="text-center">
               
            </div>
            
            <div class="col-sm-9 bg-warning">
                <div class="row">
                    <div class="col-sm-12">
                        <h6 class="text-right"><?php echo $user ?></h6>
                        <iframe src="" name="ifrm"frameborder="0" name="ifrm" class="col-sm-12" height="550"></iframe>
                    </div>
                </div>
                
            </div>



        </div>














    </div>
</body>
</html>