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
?>

</head>
<body>
<h1>List of Selling Vehicle</h1>
<?php
$query=mysqli_query($con,"select * from `add_vehicle_seller`") or die(mysqli_error($con));
$count=1; //Declare variable
while($res=mysqli_fetch_array($query))
{ 
?>
<table width="70%" border="10" align="center" cellpadding="0" cellspacing="0">
<tr>
<td ><img src="vehicle/<?php echo $res['image']?>" height="250" width="250" align="center"></img></td>
<td><?php echo $res['company']?><br>
<?php echo $res['rate']?><br>
<?php echo $res['city']?></td>
<td>
<td>
    <a href="sellvehicle.php?rid=<?php echo $res['car_id'] ?>">More</a>
    <a href="profiles.php?sid=<?php echo $res['seller_id'] ?>">Show Profile</a>
    </td>
</td><br>
</table>
<?php
$count++; //increment variable
}
?>
</body>
</html>