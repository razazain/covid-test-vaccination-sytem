<?php
include('conn.php');
session_start();
ob_start();

$id= $_REQUEST['pid'];
$query = "SELECT * from covid_test_report where test_id='" . $id . "'";
$result1 = mysqli_query($conn, $query) or die(mysqli_error($conn, $query));
$data = mysqli_fetch_assoc($result1);

?>


<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Xtreme lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Xtreme admin lite design, Xtreme admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description" content="Xtreme Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>Hopital Admin Panel</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/xtreme-admin-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./assets/img/favicon.ico">
    <!-- Custom CSS -->
    <link href="../../assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
    <!-- Custom CSS -->

    <script src="https://kit.fontawesome.com/2f31abc651.js" crossorigin="anonymous"></script>
    <link href="../../dist/css/style.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full" data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin5">
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="index.php">
                        <!-- Logo icon -->
                        <b class="logo-icon">
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <!-- <img src="../../assets/images/logo-icon.png" alt="homepage" class="dark-logo" /> -->
                            <!-- Light Logo icon -->
                            <img src="./assets/img/logo.png" height="40px" width="40px" alt="homepage" class="light-logo" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->

                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-start me-auto">
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->

                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-end">



                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <?php
                            if (!isset($_SESSION['hmp'])) {
                                header("Location: login.php");
                                exit();
                            }

                            $amp = $_SESSION['hmp'];
                            $sql = "SELECT * FROM hospital_login WHERE hospital_id = '" . $_SESSION['hmp'] . "'";
                            $result = $conn->query($sql);


                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                            ?>
                                    <ul class="dropdown-menu dropdown-menu-end user-dd animated" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="pages-profile.php"><i class="ti-user m-r-5 m-l-5"></i>
                                            My Profile</a>
                                    </ul>

                        <li class="nav-item dropdown">
                            <a href="logout.php" class="nav-link dropdown-toggle btn d-block w-100 btn-danger text-white" target="_self">LOGOUT</a>
                        </li>


                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <!-- User Profile-->

                        <li>
                            <!-- User Profile-->
                            <div class="user-profile d-flex no-block dropdown m-t-20">
                                <div class="user-content hide-menu m-l-10">
                                    <a href="#" class="" id="Userdd" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <h4 class="m-b-0 user-name font-medium"><?php echo $row['hospital_name']; ?><i class="fa fa-angle-down"></i></h2>
                                        <span class="op-5 user-email"><?php echo $row['hospital_email']; ?></span>
                                    </a>
                                    <div class="dropdown-menu
                                     dropdown-menu-end" aria-labelledby="Userdd">
                                        <a class="dropdown-item" href="pages-profile.php"><i class="ti-user m-r-5 m-l-5"></i> My Profile</a>


                                        <a class="dropdown-item btn-danger" href="logout.php"><i class="fa fa-power-off m-r-5 m-l-5"></i>LOGOUT</a>
                                    </div>
                                </div>
                            </div>
                            <!-- End User Profile-->
                    <?php
                                }
                            }
                    ?>
                        </li>

                     <!-- User Profile-->
                     <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="index.php" aria-expanded="false"><i class="fa-solid fa-table-columns"></i><span class="hide-menu">Dashboard</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="appointment.php" aria-expanded="false"><i class="fa-solid fa-calendar-check"></i><span class="hide-menu">Covid Test appointments</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="vaccine_appointment.php" aria-expanded="false"><i class="fa-solid fa-calendar-check"></i><span class="hide-menu">Vaccination appointments</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="time_slot.php" aria-expanded="false"><i class="fa-solid fa-clock"></i><span class="hide-menu">Time Slots</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="vaccine_detail.php" aria-expanded="false"><i class="fa-solid fa-syringe"></i><span class="hide-menu">Vaccine Details</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="covid_test_type.php" aria-expanded="false"><i class="fa-solid fa-syringe"></i><span class="hide-menu">Covid Test Details</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="covid_test_report.php" aria-expanded="false">
                                <i class="fa-solid fa-file"></i><span class="hide-menu">Covid Test Report</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="vaccination_report.php" aria-expanded="false">
                                <i class="fa-solid fa-file"></i><span class="hide-menu">Vaccination Report</span></a>
                        </li>
                    </ul>


                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>      <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-5">
                        <h4 class="page-title">Appointments</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"><a href="pages-profile.php">Appointments</a></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
               
                    
                    <!-- ============================================================== -->
                    <!-- End PAge Content -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Right sidebar -->
                    <!-- ============================================================== -->
                    <!-- .right-sidebar -->
                    <!-- ============================================================== -->
                    <!-- End Right sidebar -->
                    <!-- ============================================================== -->
                    <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Covid Test Appointments</h4>
                                   </div>
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        
                                    <?php
                                    if (isset($_POST['new']) && $_POST['new'] == 1) {
                                        $id  = $_REQUEST['pid'];
                                        $name = $_REQUEST['name'];
                                        $address = $_REQUEST['address'];
                                        $city = $_REQUEST['city'];
                                        $number = $_REQUEST['number'];
                                        $test = $_REQUEST['test'];
                                        $time = $_REQUEST['time'];
                                        $report = $_REQUEST['report'];


                                     

                                        $query = "UPDATE covid_test_report SET r_name='$name',r_address='$address',r_city='$city',r_number='$number',r_test='$test',r_time='$time',r_report='$report' WHERE test_id='$id' ";
                                        $result = mysqli_query($conn, $query) or die(mysqli_error($conn));

                                        if ($result) {
                                            echo '<script> alert("Successfully Updated") </script>';
                                            header("Location:covid_test_report.php");
                                        } else {
                                            echo '<script> alert("record not update in database") </script>';
                                        }
                                    } else {
                                    ?>



<div class="card-body">
<form name="form" method="post" enctype="multipart/form-data">
                                                <input type="hidden" name="new" value="1" />
                                                <p><input class="form-control" type="text" name="name" placeholder="Enter Name" required value="<?php echo $data['r_name']; ?>" /></p>
                                                <p><input class="form-control" type="text" name="address" placeholder="Enter address"required value="<?php echo $data['r_address']; ?>" /></p>
                                                <p><input class="form-control" type="text" name="city" placeholder="Enter city" required value="<?php echo $data['r_city']; ?>"/></p>
                                                <p><input class="form-control" type="text" name="number" placeholder="Enter number" required value="<?php echo $data['r_number']; ?>"/></p>
                                                <p><input class="form-control" type="text" name="test" placeholder="Enter Test name" required value="<?php echo $data['r_test']; ?>"/></p>
                                                <p><input class="form-control" type="date-local" name="time" placeholder="Enter time" required value="<?php echo $data['r_time']; ?>"/></p>
                                                
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="report" value="POSITIVE">
                                                    <label class="form-check-label" for="exampleRadios1">
                                                        POSITIVE
                                                    </label>
                                                </div>

                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="report" value="NEGATIVE">
                                                    <label class="form-check-label" for="exampleRadios1">
                                                        NEGATIVE
                                                    </label>
                                                </div>
        

 

                                                <p><input class="btn btn-danger btn-block btn-lg gradient-custom-4 text-body" name="submit" type="submit" value="Update" /></p>
                                            </form>



</div>
                                       
                                         
                                        <?php } ?>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- End PAge Content -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Right sidebar -->
                    <!-- ============================================================== -->
                    <!-- .right-sidebar -->
                    <!-- ============================================================== -->
                    <!-- End Right sidebar -->
                    <!-- ============================================================== -->
                
                </div>
                
                <!-- ============================================================== -->
                <!-- End Container fluid  -->

            

                    <!-- ============================================================== -->
                    <!-- End PAge Content -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Right sidebar -->
                    <!-- ============================================================== -->
                    <!-- .right-sidebar -->
                    <!-- ============================================================== -->
                    <!-- End Right sidebar -->
                    <!-- ============================================================== -->
                </div>



                <!-- footer -->
                <!-- ============================================================== -->
                <footer class="footer text-center">
                    All Rights Reserved by Xtreme Admin. Designed and Developed by <a href="https://www.wrappixel.com">WrapPixel</a>.
                </footer>
                <!-- ============================================================== -->
                <!-- End footer -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Page wrapper  -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Wrapper -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- All Jquery -->
        <!-- ============================================================== -->
        <script src="../../assets/libs/jquery/dist/jquery.min.js"></script>
        <!-- Bootstrap tether Core JavaScript -->
        <script src="../../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
        <script src="../../dist/js/app-style-switcher.js"></script>
        <!--Wave Effects -->
        <script src="../../dist/js/waves.js"></script>
        <!--Menu sidebar -->
        <script src="../../dist/js/sidebarmenu.js"></script>
        <!--Custom JavaScript -->
        <script src="../../dist/js/custom.js"></script>
        <script src="assets/js/jquery-3.2.1.min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/select2.min.js"></script>

        <?php
        ob_flush();
        ?>
</body>

</html>