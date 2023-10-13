<?php
include('conn.php');
session_start();
ob_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="copyright" content="MACode ID, https://macodeid.com/">

    <title>One Health - Medical Center</title>

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
                            <a href="#"><span class="mai-mail text-primary"></span> mail@example.com</a>
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





                <div class="collapse navbar-collapse" id="navbarSupport">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item ">
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
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Find Report
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="find_report.php">Covid test Report</a>
                                <a class="dropdown-item" href="vaccination_report.php">Vaccination Report</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Profile
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="Profile.php">Profile</a>
                                <a class="dropdown-item" href="logout.php">Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div> <!-- .container -->
        </nav>
    </header>

    <div class="page-banner overlay-dark bg-image" style="background-image: url(../assets/img/bg_image_1.jpg);">
        <div class="banner-section">
            <div class="container text-center wow fadeInUp">
                <nav aria-label="Breadcrumb">
                    <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">My Profile</li>
                    </ol>
                </nav>
                <h1 class="font-weight-normal">MY PROFILE</h1>
            </div> <!-- .container -->
        </div> <!-- .banner-section -->
    </div> <!-- .page-banner -->


    <br><br><br><br>

    <?php
    if (!isset($_SESSION['usp'])) {
        header("Location: login.php");
        exit();
    }

    $usp = $_SESSION['usp'];
    $sql = "SELECT * FROM patient_detail WHERE patient_id  = '" . $_SESSION['usp'] . "'";
    $result = $conn->query($sql);


    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
    ?>


            <div class="container">
                <div class="row">
                    <!-- coloum start-->
                    <div class="col-lg-4 col-xlg-3 col-md-5">
                        <div class="card">
                            <div class="card-body">
                                <center class="m-t-30"> <img src="./img_rec/<?php echo $row['patient_img']; ?>" class="rounded-circle" width="150" />
                                    <h4 class="card-title m-t-10"><?php echo $row['patient_name']; ?></h4>
                                    <h6 class="card-subtitle"><?php echo $row['patient_email']; ?></h6><br>
                                    <h6 class="card-subtitle"><a href="change_profile_picture.php">Change Profile Picture</a></h6>

                                </center>
                            </div>
                            <div>
                                <hr>
                            </div>
                            <div class="card-body">
                                <small class="text-muted p-t-30 db">Address</small>
                                <h6><?php echo $row['patient_address']; ?></h6>
                                <small class="text-muted">City </small>
                                <h6><?php echo $row['patient_city']; ?></h6>
                                <small class="text-muted p-t-30 db">Phone</small>
                                <h6><?php echo $row['patient_num']; ?></h6>
                                <small class="text-muted p-t-30 db">Age</small>
                                <h6><?php echo $row['patient_age']; ?></h6>
                                <small class="text-muted p-t-30 db">password</small>
                                <h6><?php echo $row['patient_password']; ?></h6>



                            </div>
                        </div>

                    </div>
                    <!-- coloum end -->

                    <!-- Column  start-->
                    <div class="col-lg-8 col-xlg-9 col-md-7">
                        <div class="card">
                            <div class="card-body">


                                <?php
                                if (isset($_POST['update'])) {


                                    $filename = $_FILES['image_update']['name'];

                                    $tempname = $_FILES['image_update']['tmp_name'];
                                    $folder = "./img_rec/" . basename($_FILES['image_update']['name']);
                                    move_uploaded_file($_FILES['image_update']['tmp_name'], $folder);



                                    $query = "UPDATE patient_detail SET patient_img='$filename' WHERE patient_id  = '" . $_SESSION['usp'] . "'";
                                    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));

                                    if ($result) {
                                        echo '<script> alert("Successfully Updated") </script>';
                                        header("Location:profile.php");
                                    } else {
                                        echo '<script> alert("record not update in database") </script>';
                                    }
                                } else {
                                ?>

                                    <form method="post" enctype="multipart/form-data" class="form-horizontal form-material mx-2">

                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <input type="file" name="image_update" class="form-control form-control-line" />
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <input type="submit" class="btn btn-danger btn-block btn-lg gradient-custom-4 text-white" value="UPDATE" name="update">
                                        </div>
                                    </form>

                        <?php
                                }
                            }
                        }
                        ?>
                            </div>
                        </div>
                    </div>
                    <!-- coloum end -->
                </div>
            </div>
            </div>
            </div>

            <br>






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


            <?php
            ob_flush();
            ?>
</body>

</html>