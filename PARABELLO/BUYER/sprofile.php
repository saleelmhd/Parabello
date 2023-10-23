<?php 
require_once('../connection/connection.php'); 
 
$error=""; 
if(!isset($_SESSION)) 
{ 
 session_start(); 
} 
$user=$id="";
if(isset($_SESSION['USERNAME']))
{
    $user=$_SESSION['USERNAME'];
    $id=$_SESSION['BUYER_ID'];
}
else
{
    header("location:error.php");
}
if(isset($_POST['btnLogout']))
{
    $_SESSION['USERNAME']=NULL;
    $_SESSION['BUYER_ID']=NULL;
    unset($_SESSION['USERNAME']);
    unset($_SESSION['BUYER_ID']);
    header("location:../index.php");
}
$sno=0;
if(isset($_GET['sno']))
$sno=$_GET['sno'];
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
    <div class="container bg-dark text-white">
        <div class="row">
           <div class="col-sm-2"></div>
            <div class="col-sm-8">
                <label for=""></label>
            </div>
            <div class="col-sm-2">
               
            </div>
        </div>
        <?php 
        $qry=mysqli_query($con,"select * from seller_register where no=$sno")or die(mysqli_error($con));
        if($rec=mysqli_fetch_assoc($qry))
        {
        ?>
        <div class="row">
        <div class="col-sm-4">
        </div>
        <div class="col-sm-4">
        <img src="../SELLER//photo/<?php echo $rec['photo']?>" alt="" width="100" height="100" class="rounded-circle">
       
        </div>
        <div class="col-sm-4">
        </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
           
                 <label for="">NAME:</label> 
            </div>
            <div class="col-sm-8"><?php echo $rec['name']?></div>
       
       </div>
       <div class="row">
        <div class="col-sm-4">
             <label for="">EMAIL:</label>
        </div>
        <div class="col-sm-8"><?php echo $rec['email']?></div>
   
   </div>
   <div class="row">
    <div class="col-sm-4">
         <label for="">MOBILE NO:</label>
    </div>
    <div class="col-sm-8"><?php echo $rec['mobile_no']?></div>

   </div>
   <div class="row">
    <div class="col-sm-4">
         <label for="">CITY:</label>
    </div>
    <div class="col-sm-8"><?php echo $rec['city']?></div>

</div>
<div class="row">
    <div class="col-sm-4">
         <label for="">ADDRESS:</label>
    </div>
    <div class="col-sm-8"><?php echo $rec['address']?></div>

</div>
<?php
        }
?>
<div class="row">
    <div class="col-sm-4">

    </div>
   
    </div>
</div><br>
<div class="row">
    <div class="col-sm-4">

    </div>
   
    <div class="col-sm-4">

    </div>
</div><br>


       
        </div>

    </div>


    </div>
                                </div>
                            </div>
                           
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                               
                                </div>
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
