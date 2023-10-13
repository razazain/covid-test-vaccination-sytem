<?php
include('conn.php');
session_start();
ob_start();


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
    <title>ONLINE COVID TEST AND VACCINATION</title>
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
                            if (!isset($_SESSION['amp'])) {
                                header("Location: login.php");
                                exit();
                            }

                            $amp = $_SESSION['amp'];
                            $sql = "SELECT * FROM admin_login WHERE admin_id = '" . $_SESSION['amp'] . "'";
                            $result = $conn->query($sql);


                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                            ?>

                                    <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <img src="./img_rec/<?php echo $row['admin_img']; ?>" alt="user" class="rounded-circle" width="31">
                                    </a>
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
                                <div class="user-pic"><img src="./img_rec/<?php echo $row['admin_img']; ?>" alt="users" class="rounded-circle" width="40" /></div>
                                <div class="user-content hide-menu m-l-10">
                                    <a href="#" class="" id="Userdd" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <h5 class="m-b-0 user-name font-medium"><?php echo $row['admin_name']; ?><i class="fa fa-angle-down"></i></h5>
                                        <span class="op-5 user-email"><?php echo $row['admin_email']; ?></span>
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

                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="index.php" aria-expanded="false"><i class="fa-solid fa-table-columns"></i><span class="hide-menu">Dashboard</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="pateint_details.php" aria-expanded="false"><i class="fa-solid fa-hospital-user"></i><span class="hide-menu">Pateint Details</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="hospital_details.php" aria-expanded="false"><i class="fa-solid fa-hospital"></i><span class="hide-menu">Hospital Details</span></a></li>
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
        </aside>
        <!-- ============================================================== -->
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
                        <h4 class="page-title">Dashboard</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
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
                <!-- Sales chart -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-md-flex align-items-center">
                                    <div>
                                        <h4 class="card-title">Vaccine Avaibility</h4>
                                        <h5 class="card-subtitle">Go to vaccine vaccine availabilty for any changes</h5>
                                    </div>
                                    <div class="ms-auto d-flex no-block align-items-center">
                                        <div class="table-responsive">
                                            <table class="table table-hover">
                                                <?php

                                                //show code
                                                $sql_query = "select * from vaccine_details";
                                                $result = mysqli_query($conn, $sql_query) or die(mysqli_error($conn));

                                                echo '<div>
                                                        <thead>
                                                    
                                                        <th>VACCINE ID</th>
                                                        <th>VACCINE NAME</th>
                                                        <th>VACCINE AVAILIBITY</th>
                                                        </thead>';

                                                while ($data = mysqli_fetch_assoc($result)) {
                                                    echo "
                                                            <tr>
                                                            <td>" . $data['vaccine_id'] . "</td>
                                                            <td>" . $data['vaccine_name'] . "</td>
                                                            <td>" . $data['vaccine_availabilty'] . "</td>
                                                            </tr>";
                                                }

                                                echo '</div>';


                                                ?>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Feeds</h4>
                                <div class="feed-widget">
                                    <ul class="list-style-none feed-body m-0 p-b-20">
                                        <li class="feed-item">
                                            <div class="feed-icon bg-info"><i class="fa-solid fa-hospital-user"></i></div> You have <?php
                                                                                                                                    $result = mysqli_query($conn, "SELECT count(*) as total from patient_detail ");
                                                                                                                                    $data = mysqli_fetch_assoc($result);
                                                                                                                                    echo $data['total'];
                                                                                                                                    ?>
                                            Pateint login
                                        </li>
                                        <li class="feed-item">
                                            <div class="feed-icon bg-success"><i class="fa-solid fa-calendar-check"></i></div>Total <?php
                                                                                                                                    $result = mysqli_query($conn, "SELECT count(*) as total from covid_test_request ");
                                                                                                                                    $data = mysqli_fetch_assoc($result);
                                                                                                                                    echo $data['total'];
                                                                                                                                    ?>
                                            Covid Test Request
                                        </li>
                                        <li class="feed-item">
                                            <div class="feed-icon bg-warning"><i class="fa-solid fa-calendar-check"></i></div> Total <?php
                                                                                                                                        $result = mysqli_query($conn, "SELECT count(*) as total from vaccine_request ");
                                                                                                                                        $data = mysqli_fetch_assoc($result);
                                                                                                                                        echo $data['total'];
                                                                                                                                        ?>
                                            Vaccine Request
                                        </li>
                                        <li class="feed-item">
                                            <div class="feed-icon bg-danger"><i class="ti-user"></i></div> New user
                                            registered
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- Sales chart -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Table -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- column -->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <!-- title -->
                                <div class="d-md-flex">
                                    <div>
                                        <h4 class="card-title">PATIENT DETAIL</h4>
                                        <h5 class="card-subtitle">Overview of All patient deta</h5>
                                    </div>
                                </div>
                                <!-- title -->
                            </div>
                            <div class="table-responsive">
                                <table class="table table-hover">

                                    <?php

                                    //show code
                                    $sql_query = "select * from patient_detail";
                                    $result = mysqli_query($conn, $sql_query) or die(mysqli_error($conn));

                                    echo '<div>
<thead>
<tr>
<th>PATIENT ID</th>
<th>PATIENT NAME</th>
<th>PATIENT ADDRESS</th>   
<th>PATIENT CITY</th>   
<th>PATIENT NUMBER</th>   
<th>PATIENT EMAIL</th>   
<th>PATIENT AGE</th>
<th>PATIENT IMAGE</th>

</tr>
</thead>';

                                    while ($data = mysqli_fetch_assoc($result)) {
                                        echo "
<tr>
<td>" . $data['patient_id'] . "</td>
<td>" . $data['patient_name'] . "</td>
<td>" . $data['patient_address'] . "</td>
<td>" . $data['patient_city'] . "</td>
<td>" . $data['patient_num'] . "</td>
<td>" . $data['patient_email'] . "</td>
<td>" . $data['patient_age'] . "</td>
<td> <img src='../../../user panel/html/img_rec/$data[patient_img]' width='100px' height='100px'> </td>



</tr>";
                                    }

                                    echo '</div>';


                                    ?>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- Table -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Recent comment and chats -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- column -->
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h2 class="card-title">Recent Comments</h2>




                                <?php
                                $sql_query = "SELECT * FROM `message`";
                                $result = mysqli_query($conn, $sql_query) or die(mysqli_error($conn));
                                while ($data = mysqli_fetch_assoc($result)) :

                                    echo "


                                <div class='comment-widgets scrollable'>
                                    <div>
                                        <div>
                                            <h4>" . $data['name'] . "</h4>
                                            <small>" . $data['patient_email'] . "</small><br>
                                            <small>" . $data['dateposted'] . "</small>
                                            <div>
                                                <span>" . $data['msg'] . "</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>";
                                endwhile; ?>
                            </div>
                        </div>
                    </div>
                        <!-- column -->
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">COVID TEST TYPES</h4>
                                    <div class="table-responsive">

                                        <table class="table table-hover">


                                        <?php

//show code
$sql_query = "select * from covid_test_type";
$result = mysqli_query($conn, $sql_query) or die(mysqli_error($conn));

echo '<div>
        <thead>
        <tr>
        <th>ID</th>
        <th><b>TYPES</B></th>
        <th><b>AVAILABILITY</B></th>

        </tr>
        </thead>';

while ($data = mysqli_fetch_assoc($result)) {
    echo "
        <tr>
        <td>" . $data['c_id'] . "</td>
        <td>" . $data['c_name'] . "</td>
        <td>" . $data['c_available'] . "</td>


        </tr>";
}

echo '</div>';


?>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <!-- ============================================================== -->
    <!-- Recent comment and chats -->
    <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
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
    <!--This page JavaScript -->
    <!--chartis chart-->
    <script src="../../assets/libs/chartist/dist/chartist.min.js"></script>
    <script src="../../assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="../../dist/js/pages/dashboards/dashboard1.js"></script>

    <?php
    ob_flush();
    ?>
</body>

</html>