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
        $error="";
        
    if(isset($_REQUEST['submit']))
    {
        
    
    if($_FILES['img1']['type']=="image/jpeg" && $_FILES['img1']['size']>0)
    {
        $error="Submitted";
    $company=$_POST['company'];
    $model=$_POST['model'];
    $color=$_POST['color'];
    $kms=$_POST['kms'];
    $ftype=$_POST['ftype'];
    $img1=$_FILES['img1']['name'];
    $img2=$_FILES['img2']['name'];
    $img3=$_FILES['img3']['name'];
    $city=$_POST['city'];
    $rate=$_POST['rate'];
    

    move_uploaded_file($_FILES['img1']['tmp_name'],getcwd().'/vehicle/'.$_FILES['img1']['name']);
    
    mysqli_query($con,"INSERT INTO add_vehicle_rent(company,model,color,kms_driven,fuel_type,image,image2,image3,city,rent_rate) VALUES('$company',$model,'$color','$kms','$ftype','$img1','$img2','$img3','$city','$rate')") or die(mysqli_error($con));
     
}
    else 
    $error="Please Choose Jpg Files".$_FILES['img1']['type'];
}
    ?>
    
</head>
<body>
    <form method="post" enctype="multipart/form-data">
    Name<input type="text" name="company"><br>
    Model<input type="text" name="model"><br>
    color <input type="text" name="color"><br>
    Km's Driven<input type="text" name="kms"><br>
    Fuel Type<input type="text" name="ftype"><br>
    Image:<input type="file" name="img1"><br><input type="file" name="img2"><br><input type="file" name="img3"><br>
    City<input type="text" name="city"><br>
    Rent Rate<input type="text" name="rate"><br>
    
    <?php
    echo $error;
?>
<input type="submit" name="submit" value="ADD VEHICLE">
</form>
    </body>
</html>