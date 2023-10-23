<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
<?php
    require_once('Conection/connect.php');
    //start session
    if(!isset($_SESSION))
    {
    session_start();
    }
        
        
    if(isset($_REQUEST['submit']))
    {
    $name=$_POST['vname'];
    $manuf=$_POST['model'];
    $mileage=$_POST['mileage'];
    $ftype=$_POST['ftype'];
    $edisp=$_POST['edisp'];
    $scap=$_POST['scap'];
    $fcapacity=$_POST['fcapacity'];
    $price=$_POST['price'];
    $powers=$_POST['ps'];
    $flight=$_POST['flight'];
    mysqli_query($con,"INSERT INTO add_vehicle(car_name,model,mileage,f_type,cc,s_capacity,f_capacity,price,p_steering,fog_lights) VALUES('$name',$manuf,'$mileage','$ftype','$edisp','$scap','$fcapacity',$price,$powers,$flight)") or die(mysqli_error($con));
    }
    ?>
    
</head>
<body>
    <form method="post">
    Name of Vehicle <input type="text" name="vname"><br>
    Year of Manufacture<input type="text" name="model"><br>
    Mileage <input type="text" name="mileage"><br>
    Fuel Type <input type="text" name="ftype"><br>
    Engine Displacement (cc) <input type="text" name="edisp"><br>
    Seating Capacity <input type="text" name="scap"><br>
    Fuel Tank Capacity<input type="text" name="fcapacity"><br>
    Price<input type="text" name="price"><br>
    Power Steering :yes<input type="checkbox" name="ps">no<input type="checkbox" name="ps"><br>
    Fog Lights-Front:yes<input type="checkbox" name="flight">no<input type="checkbox" name="flight"><br>
    

<input type="submit" name="submit" value="ADD VEHICLE">
</form>
    </body>
</html>