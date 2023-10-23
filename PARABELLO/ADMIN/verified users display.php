
<?php
require_once('../connection/connection.php');
?>








<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="css/bootstrap.min.css" rel="stylesheet" style="text/css">
    <title>Verified users</title>
</head>
<body>
    <form action="" method="POST">
    <div class="container-fluid bg-dark text-white">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="bg-dark text-white text-center">VERIFIED USERS</h1>
            </div>
                 <div class="col-sm-6">
                     <div class="row">
                         <h1 class="bg-dark text-white">SELLER</h1>

                     </div>
                     <div class="row">
                         <table class="table table-striped table-dark">
                             <tr>
                                 <th>USERNAME</th>
                                 <th>EMAIL</th>
                                 <th>MOBILE NO</th>
                                 <th>CITY</th>
                                 <th>ADDRESS</th>
                             </tr>
                             <?php
                             $query=mysqli_query($con,"select * from parabello.seller_register") or die(mysqli_error($con));
$count=1; //Declare variable
while($res=mysqli_fetch_array($query))
{
 
 
?>

                             <tr>
                                 <td> <?php echo $res['name']?></td>
                                 <td><?php echo $res['email']?> </td>
                                 <td> <?php echo $res['mobile_no']?></td>
                                 <td><?php echo $res['city']?> </td>
                                 <td><?php echo $res['address']?></td>


                             </tr>
                             <?php
            $count++; //increment variable
}
?>




                             <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>


                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>


                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>


                            </tr>




                         </table>

                     </div>

                 </div>
                 <div class="col-sm-6">
                    <div class="row">
                        <h1 class="bg-dark text-white">BUYER</h1>

                    </div>
                    <div class="row">
                        <table class="table table-striped table-dark">
                        <tr>
                            <th>NAME</th>
                            <th>MOBILE NO</th>
                            <th>ADHAR NO</th>
                            <th>EMAIL</th>
                            <th>CITY</th>
                            <th>ADDRESS</th>
                        </tr>
                        </tr>
            <?php

$query=mysqli_query($con,"select * from parabello.buyer_register") or die(mysqli_error($con));
$count=1; //Declare variable
while($res=mysqli_fetch_array($query))
{
    //Edit
 if(isset($_REQUEST['btn'.$count]))
 {
 header("location:userpassword.php?id=".$res[0]."&role=buyer");
 }
 
 
?>






                        <tr>
                        
                        <td><?php echo $res['name']?></td>
                        <td><?php echo $res['mobile_no']?></td>
                        <td><?php echo $res['adhar_no']?></td>
                        <td><?php echo $res['email']?></td>
                        <td><?php echo $res['city']?></td>
                        <td><?php echo $res['address']?></td>


                        </tr>
                        
                    <?php
            $count++; //increment variable
}
?>

                        <tr>
                           <td></td>
                           <td></td>
                           <td></td>
                           <td></td>


                       </tr>
                       <tr>
                           <td></td>
                           <td></td>
                           <td></td>
                           <td></td>


                       </tr>
                       <tr>
                           <td></td>
                           <td></td>
                           <td></td>
                           <td></td>


                       </tr>




                    </table>

                    </div>


                 </div>




































            
        </div>




















    </div>
</form>

    
</body>
</html>