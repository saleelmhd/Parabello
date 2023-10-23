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




mysqli_query($con,"INSERT INTO parabello.compare_car(car_name,yom,mileage,seat_capacity,transmission_type,safety,price,body_type,comfort_convinience,maintenance_cost)VALUES('$c_name',$yom,$mileage,$capacity,'$fuel','$safety',$price,'$body_type','$comfort',$mcost)") or die(mysqli_error($con));

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Dashboard</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">
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

<body class="animsition">
    <div class="page-wrapper">
       

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                <img src="logo.png" alt="Cool Admin" />&nbsp;Parabello
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                    <li class="has-sub">
                            <a class="js-arrow" href="homebuyer.php">
                                <i class="fas fa-home"></i>HOME</a>
                            
                        </li>
                        <li>
                            <a href="seller details list.php">
                                <i class="fas fa-chart-bar"></i>Buy a Car</a>
                        </li>
                        <li>
                            <a href="renting vehichle list.php">
                                <i class="fas fa-table"></i>Rent a Car</a>
                        </li>
                        <li>
                            <a href="BCompare page.php">
                                <i class="far fa-check-square"></i>Compare</a>
                        </li>
                        <li>
                        <a href="feedback.php">
                                <i class="far fa-check-square"></i>Feedback</a>
                           
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                               
                            </form>
                            <div class="header-button">
                                <div class="noti-wrap">
                                    
                                    
                                   
                                </div>
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                       
                                        <div class="content">
                                            <a class="js-acc-btn" href="#"><?php echo $user?></a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="Viewprofile.php">
                                                        <i class="zmdi zmdi-account"></i>Account</a>
                                                </div>
                                              
                                              
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <form method="post" name="f1"><button role="button" type="submit"class="btn" name="btnLogout">
                                                   &nbsp;&nbsp;&nbsp;&nbsp; <i class="zmdi zmdi-power"></i>&nbsp;&nbsp;&nbsp;&nbsp;Logout</button></form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                                                     
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="au-card bg-dark recent-report">
                                    <div class="au-card-inner">
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
 
</div>
        
</body>
</html>