<?php
require_once('Conection/connect.php');
//start session

$rid=0;
if(isset($_GET['rid']))
{
    $rid=$_GET['rid'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
$query=mysqli_query($con,"select * from `add_vehicle_seller` where car_id=$rid") or die(mysqli_error($con));
$count=1; //Declare variable
while($res=mysqli_fetch_array($query))
{ 
?>
<table width="70%" border="10" align="center" cellpadding="0" cellspacing="0">
<tr>
<td ><img src="vehicle/<?php echo $res['image']?>" height="250" width="250" align="center"></img></td></tr>
<tr><td><?php echo $res['company']?></td></tr>

<tr><td><?php echo $res['model']?></td></tr>
<tr><td><?php echo $res['color']?></td></tr>
<tr><td><?php echo $res['kms_driven']?></td></tr>
<tr><td><?php echo $res['fuel_type']?></td></tr>

<tr><td><?php echo $res['rate']?></td></tr>
</tr><td><?php echo $res['city']?></td></tr>


</table>
<?php
$count++; //increment variable
}
?>
</body>
</html>