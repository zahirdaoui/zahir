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
                            <form action="<?php echo URL_MAIN?>admin/user/register" method="POST">
                                <div class="form-group">
                                    <label>first name</label>
                                    <input id="inputIsInvalid" value="<?php echo $data['name'];?>" class="<?php echo (!empty($data['name_err']) ? 'is-invalid':'')?> form-control" type="text" name="name" placeholder="inter your name">
                                    <small class="text-danger<?php echo (!empty($data['name_err']) ? '':' d-none')?>"><?php echo $data['name_err']?> </small>
                                </div>
                                <div class="form-group">
                                    <label>last name</label>
                                    <input id="inputIsInvalid" value="<?php echo $data['lname'];?>" class="<?php echo (!empty($data['lname_err']) ? 'is-invalid':'')?> form-control" type="text" name="lname" placeholder="inter your last name">
                                    <small class="text-danger<?php echo (!empty($data['lname_err']) ? '':' d-none')?>"><?php echo $data['lname_err']?> </small>
                                </div>
                                <div class="form-group">
                                    <label>Email Address</label>
                                    <input id="inputIsInvalid" value="<?php echo $data['email']?>" class="<?php echo (!empty($data['email_err']) ? 'is-invalid':'')?> form-control" type="email" name="email" placeholder="Email">
                                    <small class="text-danger<?php echo (!empty($data['email_err']) ? '':' d-none')?>"><?php echo $data['email_err']?> </small>
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" id="inputIsInvalid" class="<?php echo (!empty($data['password_err']) ? 'is-invalid':'')?> form-control"  type="password" name="password" placeholder="Password">
                                    <small class="text-danger<?php echo (!empty($data['password_err']) ? '':' d-none')?>"><?php echo $data['password_err']?> </small>
                                </div>
                                <div class="form-group">
                                    <label>Confirm Password</label>
                                    <input id="inputIsInvalid" class="<?php echo (!empty($data['Cpassword_err']) ? 'is-invalid':'')?> form-control" type="password" name="Cpassword" placeholder="Password">
                                    <small class="text-danger<?php echo (!empty($data['Cpassword_err']) ? '':' d-none')?>"><?php echo $data['Cpassword_err']?> </small>
                                </div>
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">register</button>
                                <div class="social-login-content">
                                    <div class="social-button">
                                        <button class="au-btn au-btn--block au-btn--blue m-b-20">register with facebook</button>
                                        <button class="au-btn au-btn--block au-btn--blue2">register with twitter</button>
                                    </div>
                                </div>
                            </form>
                            <div class="register-link">
                                <p>
                                    Already have account?
                                    <a href="#">Sign In</a>
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
