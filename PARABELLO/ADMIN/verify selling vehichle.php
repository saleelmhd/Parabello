
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
                            <a class="js-arrow" href="verifyb.php">
                                <i class="fas fa-home"></i>VERIFY BUYERS</a>
                            
                        </li>
                         
                        <li>
                            <a href="verifys.php">
                                <i class="fas fa-chart-bar"></i>VERIFY SELLERS</a>
                        </li>

                        <li>
                            <a href="verified BUYERS.php">
                                <i class="fas fa-chart-bar"></i>VERIFIED BUYERS</a>
                        </li>
                        <li>
                            <a href="verified SELLERSphp.php">
                                <i class="fas fa-table"></i>VERIFIED SELLERS</a>
                        </li>
                        <li>
                            <a href="denyseller.php">
                                <i class="fas fa-table"></i>DENY SELLERS</a>
                        </li>
                        <li>
                            <a href="denybuyer.php">
                                <i class="fas fa-table"></i>DENY BUYERS</a>
                        </li>
                        <li>
                            <a href="verify selling vehichle.php">
                                <i class="far fa-check-square"></i>VERIFY SELLING VEHICHLE</a>
                        </li>
                        <li>
                            <a href="verify renting vehichle.php">
                                <i class="fas fa-calendar-alt"></i>VERIFY RENTING VEHICHLE</a>
                        </li>
                        <li>
                            <a href="compare_car.php">
                                <i class="fas fa-calendar-alt"></i>COMPARISON INPUT</a>
                        </li>
                        <li>
                            <a href="feedbview.php">
                                <i class="fas fa-calendar-alt"></i>FEEDBACK</a>
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
    <div class="container bg-dark text-white">
        <div class="row">
            <div class="col-sm-12">
                <form action="" method="post">
                <table  class="table table table-dark table-responsive" border="1%""> 
                    <tr>
                    <th>Car photo 1</th>
                    <th>Car photo 2</th>
                    <th>Car photo 3</th>
                    <th>Car photo 4</th>
                    <th>verification</th>
                   </tr>
                   <?php
                   $query=mysqli_query($con,"select no,image,image2,image3,image4 from parabello.add_car_details where priority=0") or die(mysqli_error($con));
$count=1; //Declare variable
while($res=mysqli_fetch_array($query))
{
    if(isset($_POST['btn'.$count]))
    {
        
        $priority=$_POST['dl'.$count];
        mysqli_query($con,"update add_car_details set priority=$priority where no=".$res['no']) or die(mysqli_error($con));
        header("location:".$_SERVER['PHP_SELF']);

    }


 
 
?>






                   <tr>
                    <td><a href="../seller/images/<?php echo $res['image']?>"> <img src="../seller/images/<?php echo $res['image']?>" alt="" width="200" height="200" class="rounded"></a> </td>
                    <td><a href="../seller/images/<?php echo $res['image']?>"> <img src="../seller/images/<?php echo $res['image2']?>" alt="" width="200" height="200" class="rounded"></a> </td>
                    <td><a href="../seller/images/<?php echo $res['image']?>"> <img src="../seller/images/<?php echo $res['image3']?>" alt="" width="200" height="200" class="rounded"></a></td>
                    <td><a href="../seller/images/<?php echo $res['image']?>"> <img src="../seller/images/<?php echo $res['image4']?>" alt="" width="200" height="200" class="rounded"></a></td>
                    
                    <td><select name="dl<?php echo $count ?>" id="" class="form-control">
                    <option value="1">photo 1</option>
                    <option value="2">photo 2</option>
                    <option value="3">photo 3</option>
                    <option value="4">photo 4</option>
                    
                    </select>
                    <br>
                    <input type="submit"  name="btn<?php echo $count ?>" class="btn btn-outline-info btn-block" value="Verify" ></td>
                   

                
                



                
            </tr>
            <?php
            $count++; //increment variable
}
?>






            <tr>
             <td></td>
             <td></td>
             <td></td>
             <td></td>
             
             
             <td><button class="btn btn-outline-info btn-block">Verify</button> </td>

         
         </tr>
        </tr>
        <tr>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         
         
         <td><button class="btn btn-outline-info btn-block">Verify</button> </td>

     
     </tr>
    </tr>
    <tr>
     <td></td>
     <td></td>
     <td></td>
     <td></td>
     
     
     <td><button class="btn btn-outline-info btn-block">Verify</button> </td>

 
 </tr>
</tr>
<tr>
 <td></td>
 <td></td>
 <td></td>
 <td></td>
 
 
 <td><button class="btn btn-outline-info btn-block">Verify</button> </td>


</tr>
</tr>
<tr>
 <td></td>
 <td></td>
 <td></td>
 <td></td>
 
 
 <td><button class="btn btn-outline-info btn-block">Verify</button> </td>


</tr>
</tr>
<tr>
 <td></td>
 <td></td>
 <td></td>
 <td></td>
 
 
 <td><button class="btn btn-outline-info btn-block">Verify</button> </td>


</tr>
</tr>
<tr>
 <td></td>
 <td></td>
 <td></td>
 <td></td>
 
 
 <td><button class="btn btn-outline-info btn-block">Verify</button> </td>


</tr>
</tr>
<tr>
 <td></td>
 <td></td>
 <td></td>
<td></td> 
 
 <td><button class="btn btn-outline-info btn-block">Verify</button> </td>


</tr>





            </table> 






            </div> 
        </div>
        </form>
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
