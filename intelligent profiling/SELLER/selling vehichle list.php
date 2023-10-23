
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
    echo $sid;
}
else
{
    header("location:error.php");
}
if(isset($_POST['btnLogout']))
{
    $_SESSION['USERNAME']=NULL;
    $_SESSION['SELLER_ID']=NULL;
    unset($_SESSION['USERNAME']);
    unset($_SESSION['SELLER_ID']);
    header("location:../index.php");
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
    <script>
    function fun()
    {
       
        document.getElementById('status').submit();
      
    }
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
                            <a class="js-arrow" href="cardetails.php">
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
                                        
    <form action="" method="post">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="text-center text-white">Selling vehichle  list</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <table   class="table table table-dark" >
                <?php
                   $query=mysqli_query($con,"select * from parabello.add_car_details where seller_no=$sid") or die(mysqli_error($con));
$count=1; //Declare variable
while($res=mysqli_fetch_array($query))
{
    $img="";
    if($res['priority']==1)
       $img=$res['image'];
     else  if($res['priority']==2)
       $img=$res['image2'];
    else  if($res['priority']==3)
       $img=$res['image3'];
    else   if($res['priority']==4)
       $img=$res['image4'];
   

 
 
?>
                    <tr>
                        <td><a href="images/<?php echo $img ?>" alt="" width="200" height="200" class="rounded"> <img src="images/<?php echo $img ?>" alt="" width="200" height="200" class="rounded"></a></td>
                        <td>   <ul style="list-style-type:none;">
                    <li><b>-BRAND:</b><?php echo $res['company']?></li>
                    <li><b>-PRICE:</b><?php echo $res['rate']?></li>
                    <li><b>-MODEL:</b><?php echo $res['model']?></li>
                    <li><a href="">-more</a></li>
                </ul></td>
                <td>
                <a role="button" class="btn btn-outline-info btn-block" href="vehichle all details.php?no=<?php echo $res['no']?>">view</a>
                <br>
                <?php 
                $msc="";
                if(isset($_POST['btn3'.$count]))
                {
                    $vst=$_POST['stts'.$count];
                   
                    mysqli_query($con,"update  add_car_details set status='$vst' where no=".$res['no']) or die(myqli_error($con));
                }
                ?>
               
                <select class="btn btn-outline-info btn-block" name="stts<?php echo $count ?>" >
                <option value="">NONE</option>
                <option value="Not Available">Not Available</option>
                <option value="Available">Available</option>
                </select>
                <input type="submit" class="btn btn-outline-info btn-block" name="btn3<?php echo $count ?>">
                </td>
                    </tr>
                    <?php
                    echo $msc;
            $count++; //increment variable
}
?>
                 
                 
                </table>
                </form>
            </div>
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
    </form>
</body>

</html>
<!-- end document-->
