<?php require_once('../connection/connection.php'); 

require_once('../connection/connection.php'); 
 
$error=""; 
if(!isset($_SESSION)) 
{ 
 session_start(); 
} 
$user=$bid="";
if(isset($_SESSION['USERNAME']))
{
    $user=$_SESSION['USERNAME'];
    $bid=$_SESSION['BUYER_ID'];
}
else
{
    header("location:error.php");
}


if(isset($_POST['btn1']))
{
       $car1=$_POST['brand1'];
            $year1=$_POST['year1'];
            $car2=$_POST['brand2'];
            $year2=$_POST['year2'];
            header("location:compare.php?car1=$car1&year1=$year1&car2=$car2&year2=$year2");
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
    <link href="css/bootstrap.min.css" rel="stylesheet" style="text/css">
    <link href="buttonstyle.css" rel="stylesheet" style="text/css">
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
    <div class="container">
    <form action="" name="cmp" method="post">
    <div class="container bg-info">
        <div class="row">
            <div class="col-sm-12 border-rounded">
                <h1 class="text-center">Compare</h1>

            </div>
        </div>
    </div><br>
    <div class="container bg-dark">
            <div class="row">
                <div class="col-sm-5  bg-dark"><br>
                       <div class="row">
                              <div class="col-sm-7 text-white">
                                     Choose available vehichle:
                              </div>
                              <div class="col-sm-5">

                                     <select class="form-control" name="brand1">
                                     <?php $qry1=mysqli_query($con,"select distinct(car_name) from compare_car") or die(myssqli_error($con));
                                     while($res1=mysqli_fetch_array($qry1))
                                     {
                                     ?>
                                            <option value="<?php echo $res1['car_name']?>">
                                            <?php echo $res1['car_name']?>
                                            </option>
                                           <?php
                                          }
                                          ?>

                                     </select>
                              </div>
                       </div><br>
                       <div class="row">
                              <div class="col-sm-7 text-white">
                                     Select model:
                              </div>
                              <div class="col-sm-5">
                                     <select class="form-control" name="year1" id="">
                                     <option value="2012">2012</option>
                                     <option value="2013">2013</option>
                                     <option value="2014">2014</option>
                                     <option value="2015">2015</option>
                                            <option value="2016">2016</option>
                                            <option value="2017">2017</option>
                                            <option value="2018">2018</option>
                                            <option value="2019">2019</option>
                                          </select>

                              </div>
                       </div>
    
                </div>
                <div class="col-sm-2  bg-dark">
                      
        
                </div>


                <div class="col-sm-5  bg-dark">
                     <br>
                     <div class="row">
                            <div class="col-sm-7 text-white">
                                   Choose available vehichle:
                            </div>
                            <div class="col-sm-5">
                                <select class="form-control" name="brand2">
                                     <?php $qry2=mysqli_query($con,"select distinct(car_name) from compare_carb") or die(myssqli_error($con));
                                     while($res2=mysqli_fetch_array($qry2))
                                     {
                                     ?>
                                            <option value="<?php echo $res2['car_name']?>">
                                            <?php echo $res2['car_name']?>
                                            </option>
                                           <?php
                                          }
                                          ?>

                                     </select>
   
                            </div>
                     </div><br>
                     <div class="row">
                            <div class="col-sm-7 text-white">
                                   Select model:
                            </div>
                            <div class="col-sm-5">
                                   <select class="form-control" name="year2" id="">
                                   <option value="2012">2012</option>
                                     <option value="2013">2013</option>
                                     <option value="2014">2014</option>
                                     <option value="2015">2015</option>
                                            <option value="2016">2016</option>
                                            <option value="2017">2017</option>
                                            <option value="2018">2018</option>
                                            <option value="2019">2019</option>
                                        </select>

                            </div>
                     </div>
        
                </div>
                
            </div>
        </div><br>
        

        <div class="conatiner">
              <div class="row">
                  <div class="col-sm-12">
                      <div class="row">
                      <div class="col-sm-5"></div>
                      <div class="col-sm-4">
                      <input type="submit" vlaue="compare" name="btn1" class="btn bg-info">
                    </div>
                    <div class="col-sm-4"></div>
                    </div>
                  </div>
              </div>

        </div><br>
       
             
             
        </div>

    </div>
    </form>
 
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
