<?php
$con=mysqli_connect("localhost","root","") or die('Connection Error');
mysqli_select_db($con,"parabello") or die(mysqli_error($con));
?>
