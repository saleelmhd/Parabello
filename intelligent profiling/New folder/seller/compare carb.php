<?php
require_once('../connection/connection.php');


if(isset($_REQUEST['btn']))
{
$c_name=$_POST['name'];
$yom=$_POST['yom'];
$mileage=$_POST['mileage'];
$capacity=$_POST['capacity'];
$fuel=$_POST['fuel'];
$safety=$_POST['safety'];
$price=$_POST['price'];
$body_type=$_POST['body'];
$comfort=$_POST['comfort'];
$mcost=$_POST['mcost'];




mysqli_query($con,"INSERT INTO parabello.compare_carb(car_name,yom,mileage,seat_capacity,transmission_type,safety,price,body_type,comfort_convinience,maintenance_cost)VALUES('$c_name',$yom,$mileage,$capacity,'$fuel','$safety',$price,'$body_type','$comfort',$mcost)") or die(mysqli_error($con));

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
    <style>
.slidecontainer {
  width: 100%;
}

.slider {
  -webkit-appearance: none;
  width: 100%;
  height: 15px;
  border-radius: 5px;
  background: #d3d3d3;
  outline: none;
  opacity: 0.7;
  -webkit-transition: .2s;
  transition: opacity .2s;
}

.slider:hover {
  opacity: 1;
}

.slider::-webkit-slider-thumb {
  -webkit-appearance: none;
  appearance: none;
  width: 25px;
  height: 25px;
  border-radius: 50%;
  background: #4CAF50;
  cursor: pointer;
}

.slider::-moz-range-thumb {
  width: 25px;
  height: 25px;
  border-radius: 50%;
  background: #4CAF50;
  cursor: pointer;
}
</style>
   
</script>
</head>
<body>
    <div class="container  bg-dark text-white">
        <div class="row"><br></div>
        <form action="" method="post" >
        <div class="row">
            <div class="col-sm-4">
                <label for="">Name of vehichle:</label>
            </div>
            <div class="col-sm-8">
                <input type="text" name="name" class="form-control">
            </div>
        </div><br>
        <div class="row">
            <div class="col-sm-4">
                <label for="">Year of manufacture:</label>
            </div>
            <div class="col-sm-8">
                <input type="text" name="yom" class="form-control">
            </div>
        </div><br>
        <div class="row">
            <div class="col-sm-4">
                <label for="">Mileage:</label>
            </div>
            <div class="col-sm-8">
                <input type="number" name="mileage" class="form-control">
            </div>
        </div><br>
        <div class="row">
            <div class="col-sm-4">
                <label for="">Seat capacity:</label>
            </div>
            <div class="col-sm-8">
                <input type="text" name="capacity" class="form-control">
            </div>
        </div><br>
        <div class="row">
            <div class="col-sm-4">
                <label for="">Transmission type:</label>
            </div>
            <div class="col-sm-8">
                <input type="text" name="fuel" class="form-control">
            </div>
        </div><br>
        <div class="row">
            <div class="col-sm-4">
                <label for="">Safety:</label>
            </div>
            <div class="col-sm-8">
               
                <div class="slidecontainer">
  <input type="range" min="1" max="100" value="0" class="slider" id="safety" name="safety">
  <p class="text-white">Value: <span id="safetyv"></span></p>
</div>           </div>
        </div><br>
        <div class="row">
            <div class="col-sm-4">
                <label for="">Price:</label>
            </div>
            <div class="col-sm-8">
                <input type="text" name="price" class="form-control">
            </div>
        </div><br>
        <div class="row">
            <div class="col-sm-4">
                <label for="">Body type:</label>
            </div>
            <div class="col-sm-8">
                <input type="text" name="body" class="form-control">
            </div>
        </div><br>
        <div class="row">
            <div class="col-sm-4">
                <label for="">Comfort & coninience:</label>
            </div>
            <div class="col-sm-8">
            <div class="slidecontainer">
  <input type="range" min="1" max="100" value="0" class="slider" id="comfort" name="comfort">
  <p class="text-white">Value: <span id="comfortv"></span></p>
</div>  
            </div>
        </div><br>
        <div class="row">
            <div class="col-sm-4">
                <label for="">Maintenance cost:</label>
            </div>
            <div class="col-sm-8">
                <input type="text" name="mcost" class="form-control">
            </div>
        </div><br>
        <div class="row">
            <div class="col-sm-4">

            </div>
            <div class="col-sm-4">
             <input type="submit" class="btn btn-outline-info btn-block" name="btn" value="ADD" >
            </div>
            <div class="col-sm-4">

            </div>
        </div><br>


        </form>








    </div>
    <script>
var slider1 = document.getElementById("safety");
var output1 = document.getElementById("safetyv");
output1.innerHTML = slider1.value;
var slider2 = document.getElementById("comfort");
var output2 = document.getElementById("comfortv");
output2.innerHTML = slider2.value;



slider1.oninput = function() {
  output1.innerHTML = this.value;
}

slider2.oninput = function() {
  output2.innerHTML = this.value;
}


</script>
 
</body>
</html>