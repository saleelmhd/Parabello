<?php require_once('connection/connection.php'); 


if(isset($_POST['btn1']))
{
       $car1=$_POST['brand1'];
            $year1=$_POST['year1'];
            $car2=$_POST['brand2'];
            $year2=$_POST['year2'];
            header("location:compare.php?car1=$car1&year1=$year1&car2=$car2&year2=$year2");
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
                <div class="col-sm-5 border bg-light"><br>
                       <div class="row">
                              <div class="col-sm-7">
                                     Choose available vehichle:
                              </div>
                              <div class="col-sm-5">

                                     <select class="form-control" name="brand1">
                                     <?php $qry1=mysqli_query($con,"select distinct(car_name) from compare_car") or die(myssqli_error($con));
                                     while($res1=mysqli_fetch_array($qry1))
                                     {
                                     ?>
                                            <option value="<?php echo $res1['car_name']?>">
                                            <?php echo $res1['car_name']?>
                                            </option>
                                           <?php
                                          }
                                          ?>

                                     </select>
                              </div>
                       </div><br>
                       <div class="row">
                              <div class="col-sm-7">
                                     Select model:
                              </div>
                              <div class="col-sm-5">
                                     <select class="form-control" name="year1" id="">
                                     <option value="2012">2012</option>
                                     <option value="2013">2013</option>
                                     <option value="2014">2014</option>
                                     <option value="2015">2015</option>
                                            <option value="2016">2016</option>
                                            <option value="2017">2017</option>
                                            <option value="2018">2018</option>
                                            <option value="2019">2019</option>
                                          </select>

                              </div>
                       </div>
    
                </div>
                <div class="col-sm-2 border bg-light">
                        <img src="D:\PROJECT MAIN\images\vs-logo-png-3.png" class="img-fluid img1">
        
                </div>


                <div class="col-sm-5 border bg-light">
                     <br>
                     <div class="row">
                            <div class="col-sm-7">
                                   Choose available vehichle:
                            </div>
                            <div class="col-sm-5">
                                <select class="form-control" name="brand2">
                                     <?php $qry2=mysqli_query($con,"select distinct(car_name) from compare_carb") or die(myssqli_error($con));
                                     while($res2=mysqli_fetch_array($qry2))
                                     {
                                     ?>
                                            <option value="<?php echo $res2['car_name']?>">
                                            <?php echo $res2['car_name']?>
                                            </option>
                                           <?php
                                          }
                                          ?>

                                     </select>
   
                            </div>
                     </div><br>
                     <div class="row">
                            <div class="col-sm-7">
                                   Select model:
                            </div>
                            <div class="col-sm-5">
                                   <select class="form-control" name="year2" id="">
                                   <option value="2012">2012</option>
                                     <option value="2013">2013</option>
                                     <option value="2014">2014</option>
                                     <option value="2015">2015</option>
                                            <option value="2016">2016</option>
                                            <option value="2017">2017</option>
                                            <option value="2018">2018</option>
                                            <option value="2019">2019</option>
                                        </select>

                            </div>
                     </div>
        
                </div>
                
            </div>
        </div><br>
        

        <div class="conatiner">
              <div class="row">
                  <div class="col-sm-12">
                      <input type="submit" vlaue="compare" name="btn1" class="btn bg-info">
                  </div>
              </div>

        </div><br>
       
             
             
        </div>

    </div>
    </form>
</body>
</html>