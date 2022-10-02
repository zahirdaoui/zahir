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
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                                <img src="<?php echo URL_MAIN.'adminpanel/'?>images/icon/logo.png" alt="CoolAdmin">
                            </a>
                        </div>
                        
                        <div class="login-form">
                            <form action="<?php echo URL_MAIN?>admin/user" method="POST">
                                <div class="form-group">
                                    <label>Email Address</label>
                                    <input name="email" type="email" id="inputIsInvalid" value="<?php echo $data['email']?>" class="<?php echo (!empty($data['email_err']) ? 'is-invalid':'')?> form-control au-input au-input--full" placeholder="Email">
                                    <?php ?>
                                    <small class="text-danger<?php echo (!empty($data['email_err']) ? '':' d-none')?>"><?php echo $data['email_err']?> </small>
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input  type="password" id="inputIsInvalid" class="<?php echo (!empty($data['password_err']) ? 'is-invalid':'')?> form-control au-input au-input--full"  type="password" name="password" placeholder="Password" placeholder="Email">
                                    <small class="text-danger<?php echo (!empty($data['password_err']) ? '':' d-none')?>"><?php echo $data['password_err']?> </small>
                                </div>
                                <div class="login-checkbox">
                                    <label>
                                        <input type="checkbox" name="remember">Remember Me
                                    </label>
                                    <label>
                                        <a href="#">Forgotten Password?</a>
                                    </label>
                                </div>
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">sign in</button>
                            </form>
                            <div class="register-link">
                                <p>
                                    Don't you have account?
                                    <a href="<?php echo URL_MAIN?>admin/user/register">Sign Up Here</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
<!-- Jquery JS-->
<script src="<?php echo URL_MAIN.'adminpanel/'?>vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="<?php echo URL_MAIN.'adminpanel/'?>vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="<?php echo URL_MAIN.'adminpanel/'?>vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="<?php echo URL_MAIN.'adminpanel/'?>vendor/wow/wow.min.js"></script>
    <script src="<?php echo URL_MAIN.'adminpanel/'?>vendor/animsition/animsition.min.js"></script>
    <script src="<?php echo URL_MAIN.'adminpanel/'?>vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="<?php echo URL_MAIN.'adminpanel/'?>vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="<?php echo URL_MAIN.'adminpanel/'?>vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="<?php echo URL_MAIN.'adminpanel/'?>vendor/circle-progress/circle-progress.min.js"></script>
    <script src="<?php echo URL_MAIN.'adminpanel/'?>vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="<?php echo URL_MAIN.'adminpanel/'?>vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="<?php echo URL_MAIN.'adminpanel/'?>vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="<?php echo URL_MAIN.'adminpanel/'?>js/main.js"></script>

</body>

</html>
<!-- end document-->
