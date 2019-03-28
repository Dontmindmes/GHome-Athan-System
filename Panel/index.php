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
        <title>Athan Home - Dashboard</title>
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
                                    <h6 class="text-overflow m-0">Welcome,
                                        <?php echo $username; ?>
                                    </h6>
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

                            <li class="has-submenu active">
                                <a href="index.php" class="active">
                                    <i class="fe-airplay"></i>Dashboard</a>
                            </li>
                            <li class="has-submenu">
                                <a href="support.php">
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

        <form action="index.php" method="post">
            <div class="wrapper">
                <div class="container-fluid">
                    <!-- end page title -->
                    <?php
			   $ass = 'Users/Status.txt';
			   if (strpos(file_get_contents($ass), 'ON') !== false){ echo '<div class="alert alert-success" role="alert"> Athan Home is running! </div>';} else {echo '<div class="alert alert-danger" role="alert"> Athan Home is not running! </div>';};
			   ?>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Device Settings</h4>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <p class="mb-1 mt-3 font-weight-medium text-muted">Device Name</p>
                                                <input type="text" class="form-control" maxlength="25" name="defaultconfig" id="defaultconfig" value="Device Name">
                                                <div>
                                                    <p class="mb-1 mt-4 font-weight-medium text-muted">Device Language</p>
                                                    <input type="text" maxlength="25" name="thresholdconfig" class="form-control" id="thresholdconfig" value="Device Language">
                                                </div>
                                                <div>
                                                </div>
                                            </div>
                                            <!-- end col -->

                                            <div class="col-md-6">
                                                <div class="">
                                                    <p class="mb-1 mt-3 font-weight-medium text-muted">Device Accent</p>
                                                    <input type="text" class="form-control" maxlength="25" name="placement" id="placement" value="Device Accent">
                                                    <div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end col -->
                                        </div>
                                        <!-- end row -->
                                    </div>
                                    <!-- end card-body -->
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end col -->
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Device Location</h4>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <p class="mb-1 mt-3 font-weight-medium text-muted">Device City</p>
                                                <input type="text" class="form-control" maxlength="25" name="defaultconfig" id="defaultconfig" value="Device City">
                                                <div>
                                                    <p class="mb-1 mt-4 font-weight-medium text-muted">Device State</p>
                                                    <input type="text" maxlength="25" name="thresholdconfig" class="form-control" id="thresholdconfig" value="Device State">
                                                </div>
                                                <div>
                                                </div>
                                            </div>
                                            <!-- end col -->
                                            <div class="col-md-6">
                                                <div class="">
                                                    <p class="mb-1 mt-3 font-weight-medium text-muted">Device Country</p>
                                                    <input type="text" class="form-control" maxlength="25" name="placement" id="placement" value="Device Country">
                                                    <div>
                                                        <div>
                                                            <p class="mb-1 mt-4 font-weight-medium text-muted">Device TimeZone</p>
                                                            <input type="text" maxlength="25" name="thresholdconfig" class="form-control" id="thresholdconfig" value="Device TimeZone">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end col -->
                                        </div>
                                        <!-- end row -->
                                    </div>
                                    <!-- end card-body -->
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end col -->
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Prayers</h4>
                                        <div class="row">
                                            <!-- end col -->

                                            <div class="col-md-9">
                                                <div class="form-check-inline my-2">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customCheck6" data-parsley-multiple="groups" data-parsley-mincheck="2">
                                                        <label class="custom-control-label" for="customCheck6">Fajir</label>
                                                    </div>
                                                </div>
                                                <div class="form-check-inline my-2">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customCheck7" data-parsley-multiple="groups" data-parsley-mincheck="2">
                                                        <label class="custom-control-label" for="customCheck7">Duhur</label>
                                                    </div>
                                                </div>
                                                <div class="form-check-inline my-2">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customCheck8" data-parsley-multiple="groups" data-parsley-mincheck="2">
                                                        <label class="custom-control-label" for="customCheck8">Asr</label>
                                                    </div>
                                                </div>
                                                <div class="form-check-inline my-2">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customCheck5" data-parsley-multiple="groups" data-parsley-mincheck="2">
                                                        <label class="custom-control-label" for="customCheck5">Magrib</label>
                                                    </div>
                                                </div>
                                                <div class="form-check-inline my-2">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customCheck4" data-parsley-multiple="groups" data-parsley-mincheck="2">
                                                        <label class="custom-control-label" for="customCheck4">Isha</label>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <!-- end col -->
                                    </div>
                                    <!-- end row -->
                                </div>
                                <!-- end card-body -->
                            </div>
                            <!-- end card -->
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Calculation Method</h4>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <p class="mb-1 mt-3 font-weight-medium text-muted"></p>
                                                <input type="text" id="example-input-normal" name="example-input-normal" class="form-control" placeholder="Calculation Method">

                                                <div>
                                                </div>
                                            </div>
                                            <!-- end col -->
                                            <!-- end col -->
                                        </div>
                                        <!-- end row -->
                                    </div>
                                    <!-- end card-body -->
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end col -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Audio Files</h4>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <p class="mb-1 mt-3 font-weight-medium text-muted">Athan Audio File</p>
                                                <input type="text" id="example-input-normal" name="example-input-normal" class="form-control" placeholder="Athan Audio File">

                                                <div>
                                                </div>
                                            </div>
                                            <!-- end col -->
                                            <div class="col-md-12">
                                                <p class="mb-1 mt-3 font-weight-medium text-muted">Fajir Athan Audio File</p>
                                                <input type="text" id="example-input-normal" name="example-input-normal" class="form-control" placeholder="Fajir Athan Audio File">

                                                <div>
                                                </div>
                                            </div>
                                            <!-- end col -->
                                            <div class="col-md-12">
                                                <p class="mb-1 mt-3 font-weight-medium text-muted">Quran Audio File</p>
                                                <input type="text" id="example-input-normal" name="example-input-normal" class="form-control" placeholder="Quran Audio File">

                                                <div>
                                                </div>
                                            </div>
                                            <!-- end col -->
                                            <!-- end col -->
                                        </div>
                                        <!-- end row -->
                                    </div>
                                    <!-- end card-body -->
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end col -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Volume</h4>

                                        <div class="input-group">
                                            <!--[/b] Device IP -->
                                            <h5><span class="mdi mdi-volume-high"></span> Default: <small id="defaultP"></small></h5>
                                            <a class="btn btn-neutral" data-toggle="collapse" href="#collapseVolume" aria-expanded="false" aria-controls="collapseVolume">

                                            </a>

                                            <div class="input-group">
                                                <input id="default" data-slider-id='ex1Slider' type="text" data-slider-min="0" data-slider-max="1" data-slider-step="0.01" class="form-control" placeholder="Volume (Default:0.55) Max is: 1.00" name="Deviice_AthanVol">
                                            </div>
                                            <h5><span class="mdi mdi-volume-high"></span> Fajir: <small id="fajirP"></small></h5>
                                            <a style="font-size:22px" class="btn btn-neutral" data-toggle="collapse" href="#collapseVolume" aria-expanded="false" aria-controls="collapseVolume">

                                            </a>

                                            <div class="input-group">
                                                <input id="fajir" data-slider-id='ex1Slider' type="text" data-slider-min="0" data-slider-max="1" data-slider-step="0.01" class="form-control" placeholder="Volume (Default:0.55) Max is: 1.00" name="Deviice_AthanVol">
                                            </div>

                                            <h5><span class="mdi mdi-volume-high"></span> Duhur: <small id="duhurP"></small></h5>
                                            <a style="font-size:22px" class="btn btn-neutral" data-toggle="collapse" href="#collapseVolume" aria-expanded="false" aria-controls="collapseVolume">

                                            </a>

                                            <div class="input-group">
                                                <input id="duhur" data-slider-id='ex1Slider' type="text" data-slider-min="0" data-slider-max="1" data-slider-step="0.01" class="form-control" placeholder="Volume (Default:0.55) Max is: 1.00" name="Deviice_AthanVol">
                                            </div>

                                            <h5><span class="mdi mdi-volume-high"></span> Asr: <small id="asrP"></small></h5>
                                            <a style="font-size:22px" class="btn btn-neutral" data-toggle="collapse" href="#collapseVolume" aria-expanded="false" aria-controls="collapseVolume">
                                            </a>

                                            <div class="input-group">
                                                <input id="asr" data-slider-id='ex1Slider' type="text" data-slider-min="0" data-slider-max="1" data-slider-step="0.01" class="form-control" placeholder="Volume (Default:0.55) Max is: 1.00" name="Deviice_AthanVol">
                                            </div>

                                            <h5><span class="mdi mdi-volume-high"></span> Magrib: <small id="magribP"></small></h5>
                                            <a style="font-size:22px" class="btn btn-neutral" data-toggle="collapse" href="#collapseVolume" aria-expanded="false" aria-controls="collapseVolume">
                                            </a>

                                            <div class="input-group">
                                                <input id="magrib" data-slider-id='ex1Slider' type="text" data-slider-min="0" data-slider-max="1" data-slider-step="0.01" class="form-control" placeholder="Volume (Default:0.55) Max is: 1.00" name="Deviice_AthanVol">
                                            </div>

                                            <h5><span class="mdi mdi-volume-high"></span> Isha: <small id="ishaP"></small></h5>
                                            <a style="font-size:22px" class="btn btn-neutral" data-toggle="collapse" href="#collapseVolume" aria-expanded="false" aria-controls="collapseVolume">
                                            </a>

                                            <div class="input-group">
                                                <input id="isha" data-slider-id='ex1Slider' type="text" data-slider-min="0" data-slider-max="1" data-slider-step="0.01" class="form-control" placeholder="Volume (Default:0.55) Max is: 1.00" name="Deviice_AthanVol">
                                            </div>

                                        </div>
                                        <div>
                                        </div>

                                        <!-- end col -->

                                        <!-- end row -->
                                    </div>
                                    <!-- end card-body -->
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end col -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Options</h4>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="col-md-9">
                                                    <div class="form-check-inline my-2">
                                                        <div class="custom-control 
custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="customCheck3" data-parsley-multiple="groups" data-parsley-mincheck="2" name="options_Connection">
                                                            <label class="custom-control-label" for="customCheck3">Connection Sound</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-check-inline my-2">
                                                        <div class="custom-control 
custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="customCheck2" data-parsley-multiple="groups" data-parsley-mincheck="2" name="options_Recite">
                                                            <label class="custom-control-label" for="customCheck2">Recite</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-check-inline my-2">
                                                        <div class="custom-control 
custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="customCheck14" data-parsley-multiple="groups" data-parsley-mincheck="2" name="options_Alert">
                                                            <label class="custom-control-label" for="customCheck14">Salat Alert</label>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div>
                                                </div>
                                            </div>
                                            <!-- end col -->
                                            <!-- end col -->
                                        </div>
                                        <!-- end row -->
                                    </div>
                                    <!-- end card-body -->
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end col -->
                        </div>
                        <center>
                            <button type="submit" class="btn btn-primary btn-lg" name="SendSettings" id="alertify-success">Save Settings</button>
                        </center>
                        </br>
        </form>

        <?php

              if (isset($_POST['SendSettings']))
              {
                  $json = json_decode(file_get_contents('Users/config.json'),true);
                  foreach($json as $key => $value){
                      foreach($value as $key2 => $value2){
                          if(isset($_POST[$key.'_'.$key2]) && is_numeric($json[$key][$key2]))
                              $json[$key][$key2] = (float)$_POST[$key.'_'.$key2];
                          else if(!is_bool($json[$key][$key2]))
                              $json[$key][$key2] = $_POST[$key.'_'.$key2];
                          else
                              $json[$key][$key2] = isset($_POST[$key.'_'.$key2])?$_POST[$key.'_'.$key2]!='false':false;
                      }
                  }
                  file_put_contents('Users/config.json',json_encode($json));
                  echo'<div class="alert alert-success"> Configurations have been Saved! </div></br> </script>';

              }
              ?>
            </div>

            </div>
            <!-- end container -->

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
            <script>
                var jsonf = <?php echo file_get_contents('Users/config.json');?>;
                var inputs = $('input[type=text]'),
                    checks = $('input[type=checkbox]');
                var inputx = 0,
                    checksx = 0;
                for (var jkey in jsonf) {
                    for (var jkey2 in jsonf[jkey]) {
                        if (typeof jsonf[jkey][jkey2] == 'boolean' && checks.length > checksx) {
                            checks.eq(checksx).attr('checked', jsonf[jkey][jkey2]).attr('name', jkey + '_' + jkey2);
                            checksx++;
                        } else {
                            inputs.eq(inputx).attr('value', jsonf[jkey][jkey2]).attr('name', jkey + '_' + jkey2);
                            inputx++;
                        }
                    }
                }

                $('#default').attr('data-slider-value', $('#default').val()).slider({
                    formatter: function(value) {
                        $('#defaultP').html((value * 100).toFixed(0) + '%');
                        return value;
                    }
                });

                $('#fajir').attr('data-slider-value', $('#fajir').val()).slider({
                    formatter: function(value) {
                        $('#fajirP').html((value * 100).toFixed(0) + '%');
                        return value;
                    }
                });

                $('#duhur').attr('data-slider-value', $('#duhur').val()).slider({
                    formatter: function(value) {
                        $('#duhurP').html((value * 100).toFixed(0) + '%');
                        return value;
                    }
                });

                $('#asr').attr('data-slider-value', $('#asr').val()).slider({
                    formatter: function(value) {
                        $('#asrP').html((value * 100).toFixed(0) + '%');
                        return value;
                    }
                });

                $('#magrib').attr('data-slider-value', $('#magrib').val()).slider({
                    formatter: function(value) {
                        $('#magribP').html((value * 100).toFixed(0) + '%');
                        return value;
                    }
                });

                $('#isha').attr('data-slider-value', $('#isha').val()).slider({
                    formatter: function(value) {
                        $('#ishaP').html((value * 100).toFixed(0) + '%');
                        return value;
                    }
                });
            </script>
            <style>
                .slider.slider-horizontal {
                    width: 1200px !important;
                }
                
                #ex1Slider .slider-selection {
                    background: #5DBCD2;
                }
                
                #ex1Slider .slider-handle {
                    background: #5DBCD2;
                }
            </style>

            <!-- App js -->
            <script src="js/vendor.min.js"></script>
            <script src="js/app.min.js"></script>

            <!-- Plugins js -->
            <script src="js/vendor/Chart.bundle.js"></script>
            <script src="js/vendor/jquery.sparkline.min.js"></script>
            <script src="js/vendor/jquery.knob.min.js"></script>

            <script src="js/pages/dashboard.init.js"></script>

    </body>

    </html>