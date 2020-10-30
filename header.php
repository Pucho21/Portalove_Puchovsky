<?php session_start(); ?>
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Gutim Template">
    <meta name="keywords" content="Gutim, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gutim | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900&display=swap"
          rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<header class="header-section">
    <div class="container">
        <div class="logo">
            <a href="index.php">
                <img src="img/logo.png" alt="">
            </a>
        </div>
        <div class="nav-menu">
            <?php include_once ("menu.php"); ?>

            <?php if (isset($_SESSION['uname'])){ ?>
                <a href="logout.php" class="primary-btn signup-btn">Logout</a>
            <?php
            } else {
            ?>
                <a href="login.php" class="primary-btn signup-btn">Login</a>
                <a href="register.php" class="primary-btn signup-btn">Sign Up Today</a>
            <?php
            }
            ?>
        </div>
        <div id="mobile-menu-wrap"></div>
    </div>
</header>
