<?php
session_start();
include 'inc/config.php';
if (!isset($_SESSION["Athan"]))
    die(header("Location: login.php"));

	$u = explode(":", $_SESSION['Athan']);
$username = $u[0];
$userperms = $odb->query("SELECT privileges FROM users WHERE username = '".$username."'")->fetchColumn(0);

			if($userperms == "ban"){

					die();
				}

?>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Athan Home - Support</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content=" " name="description">
        <meta content="Shadi Nachat" name="author">

        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.jpg">

        <!-- App css -->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="css/icons.min.css" rel="stylesheet" type="text/css">
        <link href="css/app.min.css" rel="stylesheet" type="text/css">
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <link rel="stylesheet" href="https://seiyria.com/bootstrap-slider/css/bootstrap-slider.css" type="text/css">
        <style>
            .slider.slider-horizontal {
                width: 1200px !important;
            }
        </style>
        <script src="https://seiyria.com/bootstrap-slider/js/bootstrap-slider.js" type="text/javascript"></script>

        <style type="text/css">
            /* Chart.js */
            
            @-webkit-keyframes chartjs-render-animation {
                from {
                    opacity: 0.99
                }
                to {
                    opacity: 1
                }
            }
            
            @keyframes chartjs-render-animation {
                from {
                    opacity: 0.99
                }
                to {
                    opacity: 1
                }
            }
            
            .chartjs-render-monitor {
                -webkit-animation: chartjs-render-animation 0.001s;
                animation: chartjs-render-animation 0.001s;
            }
        </style>
        <style type="text/css">
            .jqstooltip {
                position: absolute;
                left: 0px;
                top: 0px;
                visibility: hidden;
                background: rgb(0, 0, 0) transparent;
                background-color: rgba(0, 0, 0, 0.6);
                filter: progid: DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);
                -ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";
                color: white;
                font: 10px arial, san serif;
                text-align: left;
                white-space: nowrap;
                padding: 5px;
                border: 1px solid white;
                box-sizing: content-box;
                z-index: 10000;
            }
            
            .jqsfield {
                color: white;
                font: 10px arial, san serif;
                text-align: left;
            }
        </style>
        <style type="text/css">
            /* Chart.js */
            
            @-webkit-keyframes chartjs-render-animation {
                from {
                    opacity: 0.99
                }
                to {
                    opacity: 1
                }
            }
            
            @keyframes chartjs-render-animation {
                from {
                    opacity: 0.99
                }
                to {
                    opacity: 1
                }
            }
            
            .chartjs-render-monitor {
                -webkit-animation: chartjs-render-animation 0.001s;
                animation: chartjs-render-animation 0.001s;
            }
        </style>
        <style type="text/css">
            .jqstooltip {
                position: absolute;
                left: 0px;
                top: 0px;
                visibility: hidden;
                background: rgb(0, 0, 0) transparent;
                background-color: rgba(0, 0, 0, 0.6);
                filter: progid: DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);
                -ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";
                color: white;
                font: 10px arial, san serif;
                text-align: left;
                white-space: nowrap;
                padding: 5px;
                border: 1px solid white;
                box-sizing: content-box;
                z-index: 10000;
            }
            
            .jqsfield {
                color: white;
                font: 10px arial, san serif;
                text-align: left;
            }
        </style>
        <style type="text/css">
            /* Chart.js */
            
            @-webkit-keyframes chartjs-render-animation {
                from {
                    opacity: 0.99
                }
                to {
                    opacity: 1
                }
            }
            
            @keyframes chartjs-render-animation {
                from {
                    opacity: 0.99
                }
                to {
                    opacity: 1
                }
            }
            
            .chartjs-render-monitor {
                -webkit-animation: chartjs-render-animation 0.001s;
                animation: chartjs-render-animation 0.001s;
            }
        </style>
        <style type="text/css">
            .jqstooltip {
                position: absolute;
                left: 0px;
                top: 0px;
                visibility: hidden;
                background: rgb(0, 0, 0) transparent;
                background-color: rgba(0, 0, 0, 0.6);
                filter: progid: DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);
                -ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";
                color: white;
                font: 10px arial, san serif;
                text-align: left;
                white-space: nowrap;
                padding: 5px;
                border: 1px solid white;
                box-sizing: content-box;
                z-index: 10000;
            }
            
            .jqsfield {
                color: white;
                font: 10px arial, san serif;
                text-align: left;
            }
        </style>
        <style type="text/css">
            /* Chart.js */
            
            @-webkit-keyframes chartjs-render-animation {
                from {
                    opacity: 0.99
                }
                to {
                    opacity: 1
                }
            }
            
            @keyframes chartjs-render-animation {
                from {
                    opacity: 0.99
                }
                to {
                    opacity: 1
                }
            }
            
            .chartjs-render-monitor {
                -webkit-animation: chartjs-render-animation 0.001s;
                animation: chartjs-render-animation 0.001s;
            }
        </style>
        <style type="text/css">
            .jqstooltip {
                position: absolute;
                left: 0px;
                top: 0px;
                visibility: hidden;
                background: rgb(0, 0, 0) transparent;
                background-color: rgba(0, 0, 0, 0.6);
                filter: progid: DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);
                -ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";
                color: white;
                font: 10px arial, san serif;
                text-align: left;
                white-space: nowrap;
                padding: 5px;
                border: 1px solid white;
                box-sizing: content-box;
                z-index: 10000;
            }
            
            .jqsfield {
                color: white;
                font: 10px arial, san serif;
                text-align: left;
            }
        </style>
    </head>

    <body>

        <!-- Navigation Bar-->
        <header id="topnav">
            <nav class="navbar-custom">

                <div class="container-fluid">
                    <ul class="list-unstyled topbar-right-menu float-right mb-0">

                        <li class="dropdown notification-list">
                            <!-- Mobile menu toggle-->
                            <a class="navbar-toggle nav-link">
                                <div class="lines">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </a>
                            <!-- End mobile menu toggle-->
                        </li>

                        <li class="dropdown notification-list">
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated dropdown-lg">

                            </div>
                        </li>
                        <li class="dropdown notification-list">
                            <a class="nav-link dropdown-toggle nav-user mr-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <img src="assets/images/users/avatar-1.png" alt="user-image" class="rounded-circle">
                                <small class="pro-user-name ml-1">
                                   <?php echo $username; ?>
                                </small>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated profile-dropdown ">
                                <!-- item-->
                                <div class="dropdown-header noti-title">
                                    <h6 class="text-overflow m-0">Welcome, <?php echo $username; ?></h6>
                                </div>

                                <!-- item-->
                                <a href="account.php" class="dropdown-item notify-item">
                                    <i class="fe-lock"></i>
                                    <span>Account Settings</span>
                                </a>

                                <div class="dropdown-divider"></div>

                                <!-- item-->
                                <a href="logout.php" class="dropdown-item notify-item">
                                    <i class="fe-log-out"></i>
                                    <span>Logout</span>
                                </a>

                            </div>
                        </li>

                    </ul>
                    </br>
                    <ul class="list-inline menu-left mb-0">
                        <li class="float-left">
                            <a href="index.php" class="logo">
                                <span class="logo-lg">
                                    <img src="assets/images/logo.png" alt="" height="18">
                                </span>
                                <span class="logo-sm">
                                    <img src="assets/images/logo-sm.png" alt="" height="28">
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>

            </nav>
            <!-- end topbar-main -->

            <div class="topbar-menu active">
                <div class="container-fluid in">
                    <div id="navigation" class="active">
                        <!-- Navigation Menu-->
                        <ul class="navigation-menu in">

                            <li class="has-submenu">
                                <a href="index.php">
                                    <i class="fe-airplay"></i>Dashboard</a>
                            </li>
                            <li class="has-submenu active">
                                <a href="support.php" class="active">
                                    <i class="mdi mdi-help"></i>Support</a>
                            </li>
                        </ul>
                        <!-- End navigation menu -->

                        <div class="clearfix"></div>
                    </div>
                    <!-- end #navigation -->
                </div>
                <!-- end container -->
            </div>
            <!-- end navbar-custom -->
        </header>
        <!-- End Navigation Bar-->

        <div class="wrapper">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">
                            <div class="page-title-right">

                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="mt-0 header-title">Help and Questions</h4>
                                            <p class="text-muted mb-a font-14">Help and Explanation of features and options.</p>
                                            <div id="accordion-2" role="tablist">
                                                <div class="card shadow-none border mb-0">
                                                    <div class="card-header" role="tab" id="heading-7">
                                                        <h5 class="mb-0 mt-0 font-weight-normal"><a data-toggle="collapse" href="#collapse-7" aria-expanded="true" aria-controls="collapse-7">Calculation Method</a></h5></div>
                                                    <div id="collapse-7" class="collapse show" role="tabpanel" aria-labelledby="heading-7" data-parent="#accordion-2">
                                                        <div class="card-body">Calculation method is the method used to calculate the salat time for the Location of the Device, they calculation method can only be a number
                                                            </br>0 - Shia Ithna-Ansari</br>
                                                            1 - University of Islamic Sciences, Karachi</br>
                                                            2 - Islamic Society of North America</br>
                                                            3 - Muslim World League</br>
                                                            4 - Umm Al-Qura University, Makkah </br>
                                                            5 - Egyptian General Authority of Survey</br>
                                                            7 - Institute of Geophysics, University of Tehran</br>
                                                            8 - Gulf Region</br>
                                                            9 - Kuwait</br>
                                                            10 - Qatar</br>
                                                            11 - Majlis Ugama Islam Singapura, Singapore</br>
                                                            12 - Union Organization islamic de France</br>
                                                            13 - Diyanet İşleri Başkanlığı, Turkey</br>
                                                            14 - Spiritual Administration of Muslims of Russia</br>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card shadow-none border mb-0">
                                                    <div class="card-header" role="tab" id="heading-8">
                                                        <h5 class="mb-0 mt-0 font-weight-normal"><a class="collapsed" data-toggle="collapse" href="#collapse-8" aria-expanded="false" aria-controls="collapse-8">Audio Files</a></h5></div>
                                                    <div id="collapse-8" class="collapse" role="tabpanel" aria-labelledby="heading-8" data-parent="#accordion-2">
                                                        <div class="card-body">The Athan Audio file must be no longer than 4 minutes and must be a direct .mp3 link (can not be a download link)</div>
                                                    </div>
                                                </div>
                                                <div class="card shadow-none border mb-0">
                                                    <div class="card-header" role="tab" id="heading-9">
                                                        <h5 class="mb-0 mt-0 font-weight-normal"><a class="collapsed" data-toggle="collapse" href="#collapse-9" aria-expanded="false" aria-controls="collapse-9">Recite</a></h5></div>
                                                    <div id="collapse-9" class="collapse" role="tabpanel" aria-labelledby="heading-9" data-parent="#accordion-2">
                                                        <div class="card-body">The Recite function is the option to read surat Kahaf during fridays after Duhur Athan.</div>
                                                    </div>
                                                </div>
                                                <div class="card shadow-none border mb-0">
                                                    <div class="card-header" role="tab" id="heading-5">
                                                        <h5 class="mb-0 mt-0 font-weight-normal"><a class="collapsed" data-toggle="collapse" href="#collapse-5" aria-expanded="false" aria-controls="collapse-5">Time Zone</a></h5></div>
                                                    <div id="collapse-5" class="collapse" role="tabpanel" aria-labelledby="heading-5" data-parent="#accordion-2">
                                                        <div class="card-body">TimeZone must be in a specific format (Ex: America/Los_Angeles). To find your timezone use https://www.geoips.com/en/resources/timezones/timezone-profile/timezone/101</div>
                                                    </div>
                                                </div>
                                                <div class="card shadow-none border mb-0">
                                                    <div class="card-header" role="tab" id="heading-4">
                                                        <h5 class="mb-0 mt-0 font-weight-normal"><a class="collapsed" data-toggle="collapse" href="#collapse-4" aria-expanded="false" aria-controls="collapse-4">It's Not Accurate</a></h5></div>
                                                    <div id="collapse-4" class="collapse" role="tabpanel" aria-labelledby="heading-4" data-parent="#accordion-2">
                                                        <div class="card-body">If you athan time is not correct with a couple minute diffrence you can try to fix this by changing calculation method 1-12</div>
                                                    </div>
                                                </div>

                                                <div class="card shadow-none border mb-0">
                                                    <div class="card-header" role="tab" id="heading-6">
                                                        <h5 class="mb-0 mt-0 font-weight-normal"><a class="collapsed" data-toggle="collapse" href="#collapse-6" aria-expanded="false" aria-controls="collapse-6">Athan Stoped Working</a></h5></div>
                                                    <div id="collapse-6" class="collapse" role="tabpanel" aria-labelledby="heading-6" data-parent="#accordion-2">
                                                        <div class="card-body">If Athan Home Stops doing Athan for you, please contact me at athanhome@protonmail.com.</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

            </div>
            <!-- end container -->
        </div>
        <!-- end wrapper -->
        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Contact</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        If you wish to contact me, send me an email at athanhome@protonmail.com
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal" aria-label="Close">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer Start -->
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        Athan Home © 2019 - Shadi Nachat
                    </div>
                    <div class="col-md-6">
                        <div class="text-md-right footer-links d-none d-sm-block">
                            <!--<a href="#">About Me</a>-->
                            <a href="support.php">Help</a>
                            <a data-toggle="modal" data-target="#exampleModalCenter">Contact Me</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end Footer -->

        <!-- App js -->
        <script src="js/vendor.min.js"></script>
        <script src="js/app.min.js"></script>

    </body>

    </html>