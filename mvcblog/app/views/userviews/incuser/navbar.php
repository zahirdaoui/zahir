<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap cdn -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- css style  -->
    <link rel="stylesheet" href="<?php echo URL_MAIN.'userfront'?>css/style.css">
    <!-- font awsome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Document</title>
</head>
<body>
    <header>
        <!-- Intro settings -->
        <style>
          #intro {
            /* Margin to fix overlapping fixed navbar */
            margin-top: 58px;
          }
          @media (max-width: 991px) {
            #intro {
              /* Margin to fix overlapping fixed navbar */
              margin-top: 45px;
            }
          }
        </style>
    
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
          <div class="container">
            <!-- Navbar brand -->
            <a class="navbar-brand" href="<?php echo URL_MAIN;?>">
              <img src="https://mdbootstrap.com/img/logo/mdb-transaprent-noshadows.png" height="16" alt="" loading="lazy"
                style="margin-top: -3px;" />
            </a>
            <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarExample01"
              aria-controls="navbarExample01" aria-expanded="false" aria-label="Toggle navigation">
              <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse text-center" id="navbarExample01">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0 ml-auto mr-auto">
                <li class="nav-item active">
                  <a class="nav-link" aria-current="page" href="<?php echo URL_MAIN?>index/default">Home</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    categories
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="<?php echo URL_MAIN.'blogby/posts_catagory/android';?>">Android</a>
                    <a class="dropdown-item" href="<?php echo URL_MAIN.'blogby/posts_catagory/windows';?>">Windows</a>
                    <a class="dropdown-item" href="<?php echo URL_MAIN.'blogby/posts_catagory/news';?>">News</a>
                  </div>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo URL_MAIN?>index/allblogs" rel="nofollow">allblogs</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo URL_MAIN?>index/aboutus">About-us</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link"  href="<?php echo URL_MAIN?>index/contactus">Contact us</a>
                </li>
               
              </ul>
    
              <ul class="navbar-nav d-flex flex-row">
                <!-- Icons -->
                <li class="nav-item me-3 me-lg-0">
                  <a class="nav-link" href="https://www.youtube.com/channel/UC5CF7mLQZhvx8O5GODZAhdA" rel="nofollow"
                    target="_blank">
                    <i class="fab fa-youtube"></i>
                  </a>
                </li>
                <li class="nav-item me-3 me-lg-0">
                  <a class="nav-link" href="https://www.facebook.com/mdbootstrap" rel="nofollow" target="_blank">
                    <i class="fab fa-facebook-f"></i>
                  </a>
                </li>
                <li class="nav-item me-3 me-lg-0">
                  <a class="nav-link" href="https://twitter.com/MDBootstrap" rel="nofollow" target="_blank">
                    <i class="fab fa-twitter"></i>
                  </a>
                </li>
                <li class="nav-item me-3 me-lg-0">
                  <a class="nav-link" href="https://github.com/mdbootstrap/mdb-ui-kit" rel="nofollow" target="_blank">
                    <i class="fab fa-github"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
    </header>
 <!-- Navbar -->