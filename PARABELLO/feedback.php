<?php require_once('connection/connection.php'); 


if(isset($_POST['btn1']))
{
    $name=$_POST['nm'];
    $feed=$_POST['fb'];
    mysqli_query($con,"INSERT INTO parabello.feedback(name,comment)VALUES('$name','$feed')") or die(mysqli_error($con));
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="css/bootstrap.min.css" rel="stylesheet" style="text/css">
    <link href="buttonstyle.css" rel="stylesheet" style="text/css">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    <div class="container">
    <form action="" name="cmp" method="post">
    <div class="container bg-warning">
        <div class="row">
            <div class="col-sm-12 border">
                <h1 class="text-center">Compare</h1>

            </div>
        </div>
    </div><br>
    <div class="container bg-light">
            <div class="row">
                <div class="col-sm-5  bg-light"><br>
                       <div class="row">
                              <div class="col-sm-12">
                             
                              <label for="">NAME:</label>
                              <input type="text" name="nm" class="form-control">
                              <br>
                              <label for="">Feedback</label>
                              <textarea name="fb" id="" cols="30" rows="10" class="form-control"></textarea>
                              <br>
                              <input type="submit" value="sent" name="btn1" class="btn btn-outline bg-dark">

                              <div>
                        </div> 
                        <div class="row">
                              <div class="col-sm-12">
                          </div>
                          </div>     
                </div>              
            </div>                  

        </div><br>
       
             
             
        </div>

    </div>
    </form>
</body>
</html>