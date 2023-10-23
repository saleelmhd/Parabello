<?php 
require_once('../connection/connection.php'); 
 
$error=""; 
if(!isset($_SESSION)) 
{ 
 session_start(); 
} 
 
 
if(isset($_REQUEST['btn'])) 
{ 
 $record=mysqli_query($con,"select * from adminlogin  where username='".$_POST['txtUname']."'"); 
 if(mysqli_num_rows($record)) 
 { 
  if($rec=mysqli_fetch_row($record)) 
  { 
   if($rec[1]==$_POST['txtPassword'])  
   { 
     
    $_SESSION['USERNAME']=$_POST['txtUname'];//set the session variable 
   
    header("location:verifyb.php"); 
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
        <div class="col-sm-4 bg-info "><!--column1-->

        </div><!--column1 close-->

        <div class="col-sm-4 bg-dark"><!--column2-->
          <form action="" method="post" class="form-control bg-dark text-white">
            <h1 class="text-center">
                ADMIN login
            </h1>
            <!--blank space start-->
          <div class="row"><br></div>
          <div class="row"><br></div>
          <!-- blank space close-->


            
                <div class="row"><!--row1-->
                <div class="col-sm-4"><label for="">USERNAME:</label></div>
                <div class="col-sm-8"><input type="text" name="txtUname" class="form-control" ><br></div>
                 </div>
                    <!--blan space start-->
          <div class="row"><br></div>
          <div class="row"><br></div>
          <!-- blank space close-->

                 <div class="row"><!--row2-->
                        <div class="col-sm-4"><label for="">PASSWORD:</label></div>
                        <div class="col-sm-8"><input type="password"  name="txtPassword" class="form-control" ><br></div>
                         </div>


                            <!--blan space start-->
          <div class="row"><br></div>
          <div class="row"><br></div>
          <!-- blank space close-->

                         <div class="row"><!--row3  submit button-->
                           <div class="col-sm-4"><?php echo $error ?></div>
                            <div class="col-sm-4"><input type="submit" value="login" name="btn" class="btn btn-outline-info btn-block" ><br></div>
                            <div class="col-sm-4"></div>
                             </div>
    



           
               <!--blan space start-->
          <div class="row"><br></div>
          <div class="row"><br></div>
          <!-- blank space close-->



            
            <div class="row"><!--row bottom-->
                
              
            </div>
          </form>
        </div><!--column2 close-->
        <div class="col-sm-4 bg-info"><!--column3-->


        </div><!--column3 close-->
     </div>  
    </div>
    
</body>
</html>