

<?php
require_once('Conection/connect.php');
//start session

$rid=0;
if(isset($_GET['sid']))
{
    $sid=$_GET['sid'];
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
$query=mysqli_query($con,"select * from `registration` where user_id=$sid") or die(mysqli_error($con));
$count=1; //Declare variable
while($res=mysqli_fetch_array($query))
{ 
?>
<table width="70%" border="10" align="center" cellpadding="0" cellspacing="0">

<tr><td><?php echo $res['name']?></td></tr>

<tr><td><?php echo $res['email']?></td></tr>
<tr><td><?php echo $res['address']?></td></tr>

</table>
<?php
$count++; //increment variable
}
?>

</body>
</html>