<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>sold cars</title>
    <?php
require_once('Conection/connect.php');
//start session
if(!isset($_SESSION))
{
session_start();
}
    
    
if(isset($_REQUEST['enter']))
{
$scarid=$_POST['sold_id'];
$carid=$_POST['car_id'];
$buyid=$_POST['buyer_id'];
mysqli_query($con,"INSERT INTO sold_cars(sold_car_id,car_id,buyer_id) VALUES('$scarid','$carid','$buyid')") or die(mysqli_error($con));
}
?>
</head>
<body>
    <form method="post">
        sold car id<input type="text" name="sold_id"><BR>
        car id<input type="text" name="car_id"><BR>
        buyer id<input type="text" name="buyer_id"><BR>
        <input type="submit" name="enter" value="enter">

    </form>
</body>
</html>