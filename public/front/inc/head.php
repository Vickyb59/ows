<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php echo ($page_name == 'Home') ? $settings->siteTitle. ' | ' .$settings->siteTagline : $page_name. ' | ' .$settings->siteTitle;  ?></title>
    <meta name="description" content="<?php echo $page_description; ?>">
    <meta name="keywords" content="<?php echo $settings->siteTitle; ?> shipping, <?php echo $settings->siteTitle; ?>, package tracking, shipping calculator">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/meanmenu.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/default.css">
    <?php if ($page_name == 'Tracking') {?>
        <link rel="stylesheet" href="css/stylestracking.css">
    <?php }else{ ?>
        <link rel="stylesheet" href="css/style.css">
    <?php } ?>
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/custom.css">
    <?php if ($page_name == 'Tracking') {?>
        <link rel="stylesheet" href="css/tracking.css">
    <?php } ?>
</head>