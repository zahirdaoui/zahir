<?php use PHPMVC\Controllers;
      use PHPMVC\Helper\Session;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Dashboard</title>

    <!-- Fontfaces CSS-->
    <link href="<?php echo URL_MAIN.'adminpanel/'?>css/font-face.css" rel="stylesheet" media="all">
    <link href="<?php echo URL_MAIN.'adminpanel/'?>vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="<?php echo URL_MAIN.'adminpanel/'?>vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="<?php echo URL_MAIN.'adminpanel/'?>vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="<?php echo URL_MAIN.'adminpanel/'?>vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

     <!-- font awsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Vendor CSS-->
    <link href="<?php echo URL_MAIN.'adminpanel/'?>vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="<?php echo URL_MAIN.'adminpanel/'?>vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="<?php echo URL_MAIN.'adminpanel/'?>vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="<?php echo URL_MAIN.'adminpanel/'?>vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="<?php echo URL_MAIN.'adminpanel/'?>vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="<?php echo URL_MAIN.'adminpanel/'?>vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="<?php echo URL_MAIN.'adminpanel/'?>vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="<?php echo URL_MAIN.'adminpanel/'?>css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="<?php echo URL_MAIN?>admin/index">
                            <img src="<?php echo URL_MAIN.'adminpanel/'?>images/icon/logo.png" alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li>
                            <a href="<?php echo URL_MAIN?>admin/index">
                                <i class="fas fa-table"></i>admin panel</a>
                        </li>
                        <li>
                            <a href="<?php echo URL_MAIN?>admin/index/showdata">
                                <i class="fas fa-table"></i>Show data</a>
                        </li>
                        <li>
                            <a href="<?php echo URL_MAIN?>admin/blog/add">
                            <i class="fa fa-plus" aria-hidden="true"></i></i>Add a new blog</a>
                        </li>
                        <li>
                            <a href="<?php echo URL_MAIN?>admin/comment/">
                            <i class="fas fa-comment"></i>Comments</a>
                        </li>
                        <li>
                            <a href="<?php echo URL_MAIN?>admin/category_tags">
                            <i class="fas fa-tags"></i>categories & tags</a>
                        </li>
                        <li>
                            <a href="<?php echo URL_MAIN?>admin/users">
                            <i class="fas fa-users"></i>admins & users</a>
                        </li>
                        <li>
                            <a href="<?php echo URL_MAIN?>admin/myaccount">
                                <i class="zmdi zmdi-account"></i>My Account</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="<?php echo URL_MAIN?>admin/index/">   
                    <img src="<?php echo URL_MAIN.'adminpanel/'?>images/icon/logo.png" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li>
                            <a href="<?php echo URL_MAIN?>admin/index">
                                <i class="fas fa-table"></i>admin panel</a>
                        </li>
                        <li>
                            <a href="<?php echo URL_MAIN?>admin/index/showdata">
                                <i class="fas fa-table"></i>Show data</a>
                        </li>
                        <li>
                            <a href="<?php echo URL_MAIN?>admin/blog/add">
                            <i class="fa fa-plus" aria-hidden="true"></i>Add a new blog</a>
                        </li>
                        <li>
                            <a href="<?php echo URL_MAIN?>admin/comment">
                            <i class="fas fa-comment"></i>Comments</a>
                        </li>
                        <li>
                            <a href="<?php echo URL_MAIN?>admin/category_tags">
                            <i class="fas fa-tags"></i>categories & tags</a>
                        </li>
                        <li>
                            <a href="<?php echo URL_MAIN?>admin/users">
                            <i class="fas fa-users"></i>admins & users</a>
                        </li>
                        <li>
                            <a href="<?php echo URL_MAIN?>admin/users/myaccount">
                                <i class="fa-solid fa-user"></i>My Account</a>
                        </li>

                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            
                            <div class="header-button">
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="<?php echo URL_MAIN.'adminpanel/'?>images/icon/avatar-01.jpg" alt="John Doe" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#"><?php echo (($_SESSION['f_name'] && $_SESSION['l_name']) != null ? $_SESSION['f_name'] .' '. $_SESSION['l_name']:'username not found')?></a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="<?php echo URL_MAIN.'adminpanel/'?>images/icon/avatar-01.jpg" alt="John Doe" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#"><?php ?></a>
                                                    </h5>
                                                    <span class="email"><?php echo $_SESSION['useremail']; ?></span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="account.html">
                                                        <i class="zmdi zmdi-account"></i>mon compte</a>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="<?php echo URL_MAIN?>admin/user/logout">
                                                    <i class="zmdi zmdi-power"></i>Se déconnecter</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->
<!-- MAIN CONTENT-->
<div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">