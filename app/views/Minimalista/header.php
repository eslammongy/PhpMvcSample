<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo $data['page_title'] . " | " . WEBSITE_NAME;  ?></title>
    <link rel="stylesheet" href="<?php echo ASSETS ?>template/css/components.css">
    <link rel="stylesheet" href="<?php echo ASSETS ?>template/css/icons.css">
    <link rel="stylesheet" href="<?php echo ASSETS ?>template/css/responsee.css">
    <link rel="stylesheet" href="<?php echo ASSETS ?>template/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo ASSETS ?>template/owl-carousel/owl.theme.css">
    <link rel="stylesheet" href="<?php echo ASSETS ?>template/css/lightcase.css">
    <!-- CUSTOM STYLE -->
    <link rel="stylesheet" href="<?php echo ASSETS ?>template/css/template-style.css">
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,400,600,900&subset=latin-ext" rel="stylesheet">
    <script type="text/javascript" src="<?php echo ASSETS ?>template/js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="<?php echo ASSETS ?>template/js/jquery-ui.min.js"></script>
</head>

<body class="size-1140">
    <!-- PREMIUM FEATURES BUTTON -->
    <!--  <a target="_blank" class="hide-s" href="../template/minimalista-premium-responsive-business-template/"
        style="position:fixed;top:120px;right:-14px;z-index:10;"><img
            src="<?php echo ASSETS ?>template/img/premium-features.png" alt=""></a> -->
    <div id="page-wrapper">
        <!-- HEADER -->
        <header role="banner" class="position-absolute margin-top-30 margin-m-top-0 margin-s-top-0">
            <!-- Top Navigation -->
            <nav class="background-transparent background-transparent-hightlight full-width sticky">
                <div class="s-12 l-2">
                    <a href="index.html" class="logo">
                        <!-- Logo version before sticky nav -->
                        <img class="logo-before" src="<?php echo ASSETS ?>template/img/logo-dark.png" alt="">
                        <!-- Logo version after sticky nav -->
                        <img class="logo-after" src="<?php echo ASSETS ?>template/img/logo-dark.png" alt="">
                    </a>
                </div>
                <?php
                if (isset($_SESSION['user_name'])) {
                    echo "Hi " . $_SESSION['user_name'] . "";
                } else {
                    echo "Hi user";
                }
                ?>
                <div class="s-12 l-10">
                    <div class="top-nav right">
                        <p class="nav-text"></p>
                        <ul class="right chevron">
                            <li><a href="<?php echo ROOT ?>home">Home</a></li>
                            <li><a href="<?php echo ROOT ?>about">About Us</a></li>
                            <li><a href="<?php echo ROOT ?>contact">Contact</a></li>

                            <?php
                            if (!isset($_SESSION['user_name'])) {
                            ?>
                            <li><a href="<?php echo ROOT ?>login">Login</a></li>
                            <li><a href="<?php echo ROOT ?>signup">Sign up</a></li>
                            <?php
                            } else {
                            ?>
                            <li><a href="<?php echo ROOT ?>logout">Sign Out</a></li>
                            <li><a href="<?php echo ROOT ?>upload">Upload</a></li>

                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>