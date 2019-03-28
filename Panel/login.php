<?php
session_start();


if (isset($_POST['Submit']))
{
		include 'inc/config.php';
		$username = $_POST['Username'];
		$password = hash("sha256", $_POST['Password']);
		if (ctype_alnum($username))
		{
			$sel = $odb->prepare("SELECT id,password FROM users WHERE username = :user");
			$sel->execute(array(":user" => $username));
			list($userid,$pass) = $sel->fetch();
			if ($pass != "" || $pass != NULL)
			{
				if ($password == $pass)
				{
					$_SESSION['Athan'] = $username.":".$userid;
					header("Location: index.php");
				}
			}
		}
	
}
?>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Athan Home - Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content=" " name="description">
        <meta content="Shadi Nachat" name="author">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- App css -->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="css/icons.min.css" rel="stylesheet" type="text/css">
        <link href="css/app.min.css" rel="stylesheet" type="text/css">

    </head>

    <body class="authentication-bg">

        <div class="account-pages mt-5 mb-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5">
                        <div class="card">

                            <div class="card-body p-4">

                                <div class="text-center w-75 m-auto">
                                    <a href="login.php">
                                        <span><h1>Athan Home</h1></span>
                                    </a>
                                    <p class="text-muted mb-4 mt-3">Enter your Username and password to access admin panel.</p>
                                </div>

                                <form method="post">

                                    <div class="form-group mb-3">
                                        <label for="username">Username</label>
                                        <input class="form-control" type="text" id="username" name="Username" placeholder="Username">
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="password">Password</label>
                                        <input class="form-control" type="password" required="" id="password" name="Password" placeholder="Enter your password">
                                    </div>


                                    <div class="form-group mb-0 text-center">
                                        <button class="btn btn-primary btn-block" name="Submit" type="submit"> Log In </button>
                                    </div>

                                </form>
                            </div>
                            <!-- end card-body -->
                        </div>
                        <!-- end card -->

                        <div class="row mt-3">
                            <div class="col-12 text-center">


                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->

                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->


        <!-- App js -->
        <script src="js/vendor.min.js"></script>
        <script src="js/app.min.js"></script>

    </body>

    </html>