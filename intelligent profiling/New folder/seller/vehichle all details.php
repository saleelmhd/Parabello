<?php
require_once('../connection/connection.php');

if(!isset($_SESSION)) 
{ 
 session_start(); 
} 
 
$user=$sid="";
if(isset($_SESSION['USERNAME']))
{
    $user=$_SESSION['USERNAME'];
    $sid=$_SESSION['SELLER_ID'];
}
else
{
    header("location:error.php");
}
$no="";
if(isset($_GET['no']))
$no=$_GET['no'];
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
    <div class="container bg-dark text-white">
     <div class="row">
         <div class="col-sm-12">
             <h1>Vehichle info</h1> 
         </div>

     </div>
     <div class="row">
         <div class="col-sm-12">


         
             
               
                 <?php
                   $query=mysqli_query($con,"select * from parabello.add_car_details where seller_no=$sid and no=$no") or die(mysqli_error($con));
$count=1; //Declare variable
while($res=mysqli_fetch_array($query))
{
 
?> 
<h1 class="text-center"><?php echo $res['company'] ?></h1>
<div class="row">
<div class="col-sm-6">
<table class="table table-striped table-dark">

                 <tr>
                     <td>Model</td>
                     <td><?php echo $res['model'] ?></td>
                     <td></td>
                 </tr>
                 <tr>
                     <td>color</td>
                     <td><?php echo $res['color'] ?></td>
                 </tr>
                 <tr>
                     <td>Kms driven</td>
                     <td><?php echo $res['kms_driven'] ?></td>
                 </tr>
                 <tr>
                     <td>Fuel type</td>
                     <td><?php echo $res['fuel_type'] ?></td>

                 </tr>
                 <tr>
                     <td>City</td>
                     <td><?php echo $res['city'] ?></td>
                     
                 </tr>
                 <tr>
                     <td>Price</td>
                     <td><?php echo $res['rate'] ?></td>
                     
                 </tr>
                 <tr>
                     <td><br></td>
                     <td><br></td>
                 </tr>
                


          
             </table>
             </div>
             <div class="col-sm-6">
                 <td></td>
             <td><img src="images/<?php echo $res['image'] ?>" alt="" width="200" height="200" class="rounded"></td>
                     <td><img src="images/<?php echo $res['image2'] ?>" alt="" width="200" height="200" class="rounded"></td>
                     <td><img src="images/<?php echo $res['image3'] ?>" alt="" width="200" height="200" class="rounded"></td>
                     <td><img src="images/<?php echo $res['image4'] ?>" alt="" width="200" height="200" class="rounded"></td>
                
</div>
<?php
            $count++; //increment variable
}
?>
         </div>
     </div>
     </div>
    </div>
    
</body>
</html>