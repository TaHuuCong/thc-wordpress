<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Alpha Framework Template</title>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i|Work+Sans:300,400,500,700" rel="stylesheet">

	<!-- Fontawesome CDN -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<!-- Bootstrap 4 -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

	<?php wp_head(); ?>

</head>

<body>
    <!-- START: Header -->
    <div class="header" style="background: url('<?php echo IMAGES; ?>/home-7.jpg') no-repeat fixed;">
        <div class="bg-color">
            <nav class="navbar navbar-expand-lg fixed-top my-nav">
            <div class="container">
                <!-- Brand -->
                <a href="">
                <img src="<?php echo IMAGES; ?>/logo-white.png" alt="" class="white-logo">
                <img src="<?php echo IMAGES; ?>/logo-black.png" alt="" class="black-logo">
                </a>

                <!-- Collapse -->
                <a href="#" class="navbar-toggler">
                <span class="icon-burger">
                    <span class="ib-1"></span>
                    <span class="ib-2"></span>
                    <span class="ib-3"></span>
                </span>
                </a>

                <!-- Links -->
                <div class="collapse navbar-collapse" id="mynavbar">
                <ul class="navbar-nav ml-auto my-nav-ul">
                    <li class="nav-item">
                    <a href="#about">About</a>
                    </li>
                    <li class="nav-item">
                    <a href="#contact">Contact</a>
                    </li>
                    <li class="nav-item">
                    <a href="#">Login</a>
                    </li>
                    <li class="nav-item">
                    <a href="#">Register</a>
                    </li>
                </ul>
                </div>
            </div>
            </nav>

            <div class="wrapper-header">
            <div class="container text-center">
                <h2 class="wh-h2">New Branding Agency</h2>
                <h1 class="wh-h1">
                We are about to change the way
                <br>
                <i>you publish on the web</i>
                </h1>
                <a href="">
                <button type="submit" class="btn btn-submit wh-button">Free Download</button>
                </a>
            </div>
            </div>

            <div class="angle-down">
            <a href="#about">
                <i class="fa fa-angle-down"></i>
            </a>
            </div>
        </div>
    </div>
    <!-- END: Header -->