<?php 
require_once('../connection/connection.php'); 
 
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
                                            <a class="js-acc-btn" href="#"></a>
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
    <div class="container bg-warning">
        <div class="row">
            <div class="col-sm-12 ">
                <h1 class="text-center">Compare</h1>

            </div>
        </div>
    </div><br>
<div class="container">
            <div class="row bg-dark">
                <div class="col-sm-12 text-white">
                   <h1 class="text-white">SPECIFICATION</h1>
                </div>
            </div>  
            
            <?php
             require_once('../connection/connection.php'); 
             $mileage=$capacity=$price=$comfort=$mcost="";
            
             $result;
            $car1=$year1=$car2=$year2="";
              if(isset($_GET['car1'])) 
              {
            $car1=$_GET['car1'];
            $year1=$_GET['year1'];
            $car2=$_GET['car2'];
            $year2=$_GET['year2'];
          
            $qry1=mysqli_query($con,"select * from compare_car where car_name='$car1' and yom='$year1'  ") or die(myssqli_error($con));
                                     if($res1=mysqli_fetch_array($qry1))
                                    {
          
            $qry2=mysqli_query($con,"select * from compare_carb where car_name='$car2' and yom='$year2'  ") or die(myssqli_error($con));
                                     if($res2=mysqli_fetch_array($qry2))
                                     {
                                     ?>                         
                                          

            <div class="row bg-dark">
                <div class="col-sm-4 border-right text-white">Name</div>
                <div class="col-sm-4 border-bottom text-white"><?php echo $res1['car_name']?></div>
                <div class="col-sm-4 border-bottom text-white"><?php echo $res2['car_name']?></div>
            </div>   
            <div class="row bg-dark">
                    <div class="col-sm-4 border-right text-white">Mileage</div>
                    <div class="col-sm-4 border-bottom text-white"> <?php echo $res1['mileage']?></div>
                    <div class="col-sm-4 border-bottom text-white"><?php echo $res2['mileage']?></div>
                </div>  
            <div class="row bg-dark">
                        <div class="col-sm-4 border-right text-white">Seat capacity</div>
                        <div class="col-sm-4 border-bottom text-white"><?php echo $res1['seat_capacity']?></div>
                        <div class="col-sm-4 border-bottom text-white"><?php echo $res2['seat_capacity']?></div>
             </div> 
             <div class="row bg-dark">
                    <div class="col-sm-4 border-right text-white">Transmission type</div>
                    <div class="col-sm-4 border-bottom text-white"><?php echo $res1['transmission_type']?></div>
                    <div class="col-sm-4 border-bottom text-white"><?php echo $res2['transmission_type']?></div>
             </div> 
             <div class="row bg-dark">
                    <div class="col-sm-4 border-right text-white">Safety</div>
                    <div class="col-sm-4 border-bottom text-white"><?php echo $res1['safety']?></div>
                    <div class="col-sm-4 border-bottom text-white"><?php echo $res2['safety']?></div>
             </div>
             <div class="row bg-dark">
                    <div class="col-sm-4 border-right text-white">Price</div>
                    <div class="col-sm-4 border-bottom text-white"><?php echo $res1['price']?></div>
                    <div class="col-sm-4 border-bottom text-white"><?php echo $res2['price']?></div>
             </div> 
             <div class="row bg-dark">
                    <div class="col-sm-4 border-right text-white">Body type</div>
                    <div class="col-sm-4 border-bottom text-white"><?php echo $res1['body_type']?></div>
                    <div class="col-sm-4 border-bottom text-white"><?php echo $res2['body_type']?></div>
             </div> 
             <div class="row bg-dark">
                    <div class="col-sm-4 border-right text-white">Comfort & convinience</div>
                    <div class="col-sm-4 border-bottom text-white"><?php echo $res1['comfort_convinience']?></div>
                    <div class="col-sm-4 border-bottom text-white"><?php echo $res2['comfort_convinience']?></div>
             </div> 
             <div class="row bg-dark">
                    <div class="col-sm-4 border-right text-white">Maintenance Cost </div>
                    <div class="col-sm-4 border-bottom text-white"><?php echo $res1['maintenance_cost']?></div>
                    <div class="col-sm-4 border-bottom text-white"><?php echo $res2['maintenance_cost']?></div>
             </div> 
            <?php
            
           if($res1['mileage']>$res2['mileage'])
             {
                $mileage=1; 
             
             }
             else
             {
               $mileage=2;   
              
             }
            if($res1['seat_capacity']>$res2['seat_capacity'])
            {
              $capacity=1;
              
            }
            else
            {
                $capacity=2;
                
            }
           
           
            if($res1['comfort_convinience']>$res2['comfort_convinience'])
            {
                $comfort=1;
            }
            else
            {
                $comfort=2;

            }
            if($res1['maintenance_cost']<$res2['maintenance_cost'])
            {
                $mcost=1;
            }
            else
            {
                $mcost=2;

            }
            if(  $mileage==1 && $capacity==1 && $price==1 && $comfort==1 && $mcost==1)
            {
              $result=$res1['car_name'];

            }
            else
            {
                $result=$res2['car_name'];
  
            }














            }
            }
            }
            ?>
            <div class="row">
            <div class="card col-sm-12">
              
            </div>
             </div>

</div>
</form>
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
