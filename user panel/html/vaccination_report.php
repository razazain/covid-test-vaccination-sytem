<?php
include('conn.php');
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="copyright" content="MACode ID, https://macodeid.com/">

    <title>Find Report</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./assets/img/favicon.ico">

    <link rel="stylesheet" href="../assets/css/maicons.css">

    <link rel="stylesheet" href="../assets/css/bootstrap.css">

    <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

    <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

    <link rel="stylesheet" href="../assets/css/theme.css">
</head>

<body>

    <!-- Back to top button -->
    <div class="back-to-top"></div>

    <header>
        <div class="topbar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 text-sm">
                        <div class="site-info">
                            <a href="#"><span class="mai-call text-primary"></span> +00 123 4455 6666</a>
                            <span class="divider">|</span>
                            <a href="#"><span class="mai-mail text-primary"></span> onehealth@gmail.com</a>
                        </div>
                    </div>
                    <div class="col-sm-4 text-right text-sm">
                        <div class="social-mini-button">
                            <a href="#"><span class="mai-logo-facebook-f"></span></a>
                            <a href="#"><span class="mai-logo-twitter"></span></a>
                            <a href="#"><span class="mai-logo-dribbble"></span></a>
                            <a href="#"><span class="mai-logo-instagram"></span></a>
                        </div>
                    </div>
                </div> <!-- .row -->
            </div> <!-- .container -->
        </div> <!-- .topbar -->

        <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="#"><span class="text-primary">One</span>-Health</a>


                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupport">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="doctors.php">Doctors</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="vaccination_slot.php">Vaccinatin Slot</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="covid_test_slot.php">Covid Test Slot</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Contact</a>
                        </li>
                        <li class="nav-item active dropdown">
                            <a class="nav-link nav-item active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Find Report
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="find_report.php">Covid test Report</a>
                                <a class="dropdown-item" href="vaccination_report.php">Vaccination Report</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link  dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Profile
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="Profile.php">Profile</a>
                                <a class="dropdown-item" href="logout.php">Logout</a>
                            </div>
                        </li>
                    </ul>



                </div> <!-- .navbar-collapse -->
            </div> <!-- .container -->
        </nav>
    </header>
    <div class="page-banner overlay-dark bg-image" style="background-image: url(../assets/img/bg_image_1.jpg);">
        <div class="banner-section">
            <div class="container text-center wow fadeInUp">
                <nav aria-label="Breadcrumb">
                    <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Find Report</li>
                    </ol>
                </nav>
                <h1 class="font-weight-normal">COVID TEST REPORT</h1>
            </div> <!-- .container -->
        </div> <!-- .banner-section -->
    </div> <!-- .page-banner -->

    <div class="page-section">
        <div class="container">
            <?php

            function filterTable($query)
            {
                $connect = mysqli_connect("localhost", "root", "", "covid_db");
                $filter_Result = mysqli_query($connect, $query);
                return $filter_Result;
            }

            if (isset($_POST['search'])) {
                $valueToSearch = $_POST['valueToSearch'];
                // search in all table columns
                // using concat mysql function
                $query = "SELECT * FROM `vaccination_report` WHERE CONCAT (`t_id`,`t_name`,`t_address`,`t_city`,`t_number`,`t_test`,`t_time`,`t_report`) LIKE '%" . $valueToSearch . "%'";
                $search_result = filterTable($query);
            } else {
                $query = "SELECT * FROM `vaccination_report`";
                $search_result = filterTable($query);
            }

            ?>


            <form method="post" class="form-horizontal form-material mx-2">

                <div class="form-group">
                    <div class="col-md-12">
                        <input type="text" name="valueToSearch" class="form-control form-control-line" placeholder="Enter To Search">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <input type="submit" class="btn btn-success btn-block btn-lg gradient-custom-4 text-white" name="search" value="Search">
                    </div>
                </div>





                <div class="table-responsive">
                    <table class="table table-hover">

                        <thead>
                            <th>PATIENT ID</th>
                            <th>PATIENT NAME</th>
                            <th>PATIENT ADDRESS</th>
                            <th>PATIENT CITY</th>
                            <th>PATIENT NUMBER</th>
                            <th>PATIENT TEST</th>
                            <th>PATIENT TIME</th>
                            <th>PATIENT REPORT</th>
                            <th>DOWNLOAD FILE</th>
                        </thead>

                        <tbody>
                            <?php while ($row = mysqli_fetch_array($search_result)) : ?>
                                <tr>
                                    <td><?php echo $row['t_id']; ?></td>
                                    <td><?php echo $row['t_name']; ?></td>
                                    <td><?php echo $row['t_address']; ?></td>
                                    <td><?php echo $row['t_city']; ?></td>
                                    <td><?php echo $row['t_number']; ?></td>
                                    <td><?php echo $row['t_test']; ?></td>
                                    <td><?php echo $row['t_time']; ?></td>
                                    <td><?php echo $row['t_report']; ?></td>
                                    <?php
                                                    echo "
                                                        <td>
                                                            <div class='dropdown dropdown-action'>
                                                                <a href='#' class='action-icon dropdown-toggle' data-toggle='dropdown' aria-expanded='false'><i class='fa fa-ellipsis-v'></i></a>
                                                                <div class='dropdown-menu dropdown-menu-right'>
                                                                    <a class='dropdown-item' href='edit_vaccination_report.php?pid=$row[t_id]'><i class='fa fa-pencil m-r-5'></i>Download Report</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    " ?>
                                <?php endwhile; ?>
                        </tbody>







                    </table>
                </div>
            </form>
        </div>
    </div>


    <div class="page-section banner-home bg-image" style="background-image: url(../assets/img/banner-pattern.svg);">
        <div class="container py-5 py-lg-0">
            <div class="row align-items-center">
                <div class="col-lg-4 wow zoomIn">
                    <div class="img-banner d-none d-lg-block">
                        <img src="../assets/img/mobile_app.png" alt="">
                    </div>
                </div>
                <div class="col-lg-8 wow fadeInRight">
                    <h1 class="font-weight-normal mb-3">Get easy access of all features using One Health Application</h1>
                    <a href="#"><img src="../assets/img/google_play.svg" alt=""></a>
                    <a href="#" class="ml-2"><img src="../assets/img/app_store.svg" alt=""></a>
                </div>
            </div>
        </div>
    </div> <!-- .banner-home -->

    <footer class="page-footer">
        <div class="container">
            <div class="row px-md-3">
                <div class="col-sm-6 col-lg-3 py-3">
                    <h5>Company</h5>
                    <ul class="footer-menu">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Career</a></li>
                        <li><a href="#">Editorial Team</a></li>
                        <li><a href="#">Protection</a></li>
                    </ul>
                </div>
                <div class="col-sm-6 col-lg-3 py-3">
                    <h5>More</h5>
                    <ul class="footer-menu">
                        <li><a href="#">Terms & Condition</a></li>
                        <li><a href="#">Privacy</a></li>
                        <li><a href="#">Advertise</a></li>
                        <li><a href="#">Join as Doctors</a></li>
                    </ul>
                </div>
                <div class="col-sm-6 col-lg-3 py-3">
                    <h5>Our partner</h5>
                    <ul class="footer-menu">
                        <li><a href="#">One-Fitness</a></li>
                        <li><a href="#">One-Drugs</a></li>
                        <li><a href="#">One-Live</a></li>
                    </ul>
                </div>
                <div class="col-sm-6 col-lg-3 py-3">
                    <h5>Contact</h5>
                    <p class="footer-link mt-2">351 Willow Street Franklin, MA 02038</p>
                    <a href="#" class="footer-link">701-573-7582</a>
                    <a href="#" class="footer-link">healthcare@temporary.net</a>

                    <h5 class="mt-3">Social Media</h5>
                    <div class="footer-sosmed mt-3">
                        <a href="#" target="_blank"><span class="mai-logo-facebook-f"></span></a>
                        <a href="#" target="_blank"><span class="mai-logo-twitter"></span></a>
                        <a href="#" target="_blank"><span class="mai-logo-google-plus-g"></span></a>
                        <a href="#" target="_blank"><span class="mai-logo-instagram"></span></a>
                        <a href="#" target="_blank"><span class="mai-logo-linkedin"></span></a>
                    </div>
                </div>
            </div>

            <hr>

            <p id="copyright">Copyright &copy; 2020 <a href="https://macodeid.com/" target="_blank">MACode ID</a>. All right reserved</p>
        </div>
    </footer>

    <script src="../assets/js/jquery-3.5.1.min.js"></script>

    <script src="../assets/js/bootstrap.bundle.min.js"></script>

    <script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

    <script src="../assets/vendor/wow/wow.min.js"></script>

    <script src="../assets/js/google-maps.js"></script>

    <script src="../assets/js/theme.js"></script>

    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAIA_zqjFMsJM_sxP9-6Pde5vVCTyJmUHM&callback=initMap"></script>

</body>

</html>