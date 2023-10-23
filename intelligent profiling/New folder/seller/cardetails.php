<?php
require_once('../connection/connection.php');
if(!isset($_SESSION)) 
{ 
 session_start(); 
} 
 
$user=$sid="";
if(isset($_SESSION['USERNAME']))
{
    $user=$_SESSION['USERNAME'];
    $sid=$_SESSION['SELLER_ID'];
}
else
{
    header("location:error.php");
}
$err="";
if(isset($_REQUEST['btn']))
{
    if($_FILES['img1']['type']=='image/jpeg' )//&& $_FILES['img2']['type']=='image/jpeg' && $_FILES['img3']['type']=='image/jpeg' && $_FILES['img4']['type']=='image/jpeg')
	{
$company=$_POST['cmpny'];
$model=$_POST['model'];
$color=$_POST['clr'];
$kilometer=$_POST['kms'];
$fuel=$_POST['fuel'];
$image1=$_FILES['img1']['name'];
$image2=$_FILES['img2']['name'];
$image3=$_FILES['img3']['name'];
$image4=$_FILES['img4']['name'];
$city=$_POST['city'];
$price=$_POST['price'];
$status=$_POST['status'];
move_uploaded_file($_FILES['img1']['tmp_name'],getcwd().'/images/'.$_FILES['img1']['name'])	;
move_uploaded_file($_FILES['img2']['tmp_name'],getcwd().'/images/'.$_FILES['img2']['name'])	;
move_uploaded_file($_FILES['img3']['tmp_name'],getcwd().'/images/'.$_FILES['img3']['name'])	;
move_uploaded_file($_FILES['img4']['tmp_name'],getcwd().'/images/'.$_FILES['img4']['name'])	;

mysqli_query($con,"INSERT INTO parabello.add_car_details(company,model,color,kms_driven,fuel_type,image,image2,image3,image4,city,rate,status,seller_no)VALUES('$company',$model,'$color',$kilometer,'$fuel','$image1','$image2','$image3','$image4','$city',$price,'$status',$sid)") or die(mysqli_error($con));
    }
    else
	{
		$err="Please Choose Jpeg file";
	}

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
                            <a class="js-arrow" href="#">
                                <i class="fas fa-home"></i>HOME</a>
                            
                        </li>
                         
                        <li>
                            <a href="cardetails.php">
                                <i class="fas fa-chart-bar"></i>Add Selling Vehicle</a>
                        </li>

                        <li>
                            <a href="selling vehichle list.php">
                                <i class="fas fa-chart-bar"></i>Selling Vehicle</a>
                        </li>
                        <li>
                            <a href="rentcardetails.php">
                                <i class="fas fa-table"></i>New Rent</a>
                        </li>
                        <li>
                            <a href="renting vehichle list.php">
                                <i class="far fa-check-square"></i>Renting Vehicle</a>
                        </li>
                        <li>
                            <a href="calendar.html">
                                <i class="fas fa-calendar-alt"></i>Sold Vehicles</a>
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
                                        


    <div class="container bg-dark text-white">
        <form action="" method="post" enctype="multipart/form-data" class="form-control text-white bg-dark">
            
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="text-center text-white">ADD CAR DETAILS</h1>
                </div>
            </div><br>
        <div class="row">
            <div class="col-sm-3">
                <label for="">Company</label>
            </div>
            <div class="col-sm-8">
                 <input type="text" name="cmpny" class="form-control"  >
            </div>
         
        </div><br>
        <div class="row">
            <div class="col-sm-3">
                <label for="">Model</label>
            </div>
            <div class="col-sm-8">
                <input type="text" name="model" class="form-control">
            </div>
        </div><br>
        <div class="row">
            <div class="col-sm-3">
                <label for="">Color</label>
            </div>
            <div class="col-sm-8">
                <input type="text" name="clr" class="form-control">
            </div>
        </div><br>
        <div class="row">
            <div class="col-sm-3">
                <label for="">KMs driven</label>
            </div>
            <div class="col-sm-8">
                <input type="text" name="kms" class="form-control">
            </div>
        </div><br>
        <div class="row">
            <div class="col-sm-3">
                <label for="">Fuel type</label>
            </div>
            <div class="col-sm-8">
                <input type="text" name="fuel" class="form-control">
            </div>
        </div><br>
        <div class="row">
            <div class="col-sm-3">
                <label for="">image</label>
            </div>
            <div class="col-sm-8">
                <input type="file" name="img1" class="form-control">
            </div>
        </div><br>
        <div class="row">
            <div class="col-sm-3">

            </div>
            <div class="col-sm-8">
                <input type="file" name="img2" class="form-control">
            </div>

        </div><br>
        <div class="row">
            <div class="col-sm-3">

            </div>
            <div class="col-sm-8">
                <input type="file" name="img3" class="form-control">
            </div>
            
        </div><br>
        <div class="row">
            <div class="col-sm-3">

            </div>
            <div class="col-sm-8">
                <input type="file" name="img4" class="form-control">
            </div>
        </div><br>
        <div class="row">
            <div class="col-sm-3">
                <label for="">city</label>
            </div>
            <div class="col-sm-8">
                <input type="text" name="city" class="form-control">
            </div>
        </div><br>
        <div class="row">
            <div class="col-sm-3">
                <label for="">Price</label>
            </div>
            <div class="col-sm-8">
                <input type="text" name="price" class="form-control">
            </div>
        </div><br>
        <div class="row">
            <div class="col-sm-3">
                status
            </div>
            <div class="col-sm-8">
                <select  id="" name="status" class="form-control">
                    <option value="Available">Available</option>
                    <option value="Not Available">Not Available</option>
                </select>
            </div>
        </div><br>
        <div class="row">
            <div class="col-sm-4">
            <?php echo $err ?>
            </div>
            <div class="col-sm-4">
              <input type="submit" name="btn" class="form-control">
            </div>
            <div class="col-sm-4">

            </div>
        </div>














      



    </form>





    </div>

                           
    </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->
