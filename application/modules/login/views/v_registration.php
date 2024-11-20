<!doctype html>
<html class="fixed">

<head>

    <!-- Basic -->
    <meta charset="UTF-8">

    <meta name="keywords" content="HTML5 Admin Template" />
    <meta name="description" content="Porto Admin - Responsive HTML5 Template">
    <meta name="author" content="okler.net">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <!-- Web Fonts  -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/template') ?>/vendor/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="<?= base_url('assets/template') ?>/vendor/animate/animate.compat.css">
    <link rel="stylesheet" href="<?= base_url('assets/template') ?>/vendor/font-awesome/css/all.min.css" />
    <link rel="stylesheet" href="<?= base_url('assets/template') ?>/vendor/boxicons/css/boxicons.min.css" />
    <link rel="stylesheet" href="<?= base_url('assets/template') ?>/vendor/magnific-popup/magnific-popup.css" />
    <link rel="stylesheet" href="<?= base_url('assets/template') ?>/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css" />

    <!-- Theme CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/template') ?>/css/theme.css" />

    <!-- Skin CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/template') ?>/css/skins/default.css" />

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/template') ?>/css/custom.css">

    <!-- Head Libs -->
    <script src="<?= base_url('assets/template') ?>/vendor/modernizr/modernizr.js"></script>

</head>

<body>
    <!-- start: page -->
    <section class="body-sign">
        <div class="center-sign">
            <a href="/" class="logo float-start">
                <img src="<?= base_url('assets/template') ?>/img/logo.png" height="70" alt="Porto Admin" />
            </a>

            <div class="panel card-sign">
                <div class="card-title-sign mt-3 text-end">
                    <h2 class="title text-uppercase font-weight-bold m-0"><i class="bx bx-user-circle me-1 text-6 position-relative top-5"></i> Sign Up</h2>
                </div>
                <div class="card-body">
                    <form>
                        <div class="form-group mb-3">
                            <label>Name</label>
                            <input name="name" type="text" class="form-control form-control-lg" />
                        </div>

                        <div class="form-group mb-3">
                            <label>E-mail Address</label>
                            <input name="email" type="email" class="form-control form-control-lg" />
                        </div>

                        <div class="form-group mb-0">
                            <div class="row">
                                <div class="col-sm-6 mb-3">
                                    <label>Password</label>
                                    <input name="pwd" type="password" class="form-control form-control-lg" />
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <label>Password Confirmation</label>
                                    <input name="pwd_confirm" type="password" class="form-control form-control-lg" />
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-8">
                                <div class="checkbox-custom checkbox-default">
                                    <input id="AgreeTerms" name="agreeterms" type="checkbox" />
                                    <label for="AgreeTerms">I agree with <a href="#">terms of use</a></label>
                                </div>
                            </div>
                            <div class="col-sm-4 text-end">
                                <button type="submit" class="btn btn-primary mt-2">Sign Up</button>
                            </div>
                        </div>

                        <span class="mt-3 mb-3 line-thru text-center text-uppercase">
                            <span>or</span>
                        </span>

                        <div class="mb-1 text-center">
                            <a class="btn btn-facebook mb-3 ms-1 me-1" href="#">Connect with <i class="fab fa-facebook-f"></i></a>
                        </div>

                        <p class="text-center">Already have an account? <a href="<?php echo base_url() ?>">Sign In!</a></p>

                    </form>
                </div>
            </div>

            <p class="text-center text-muted mt-3 mb-3">&copy; Copyright 2023. All Rights Reserved.</p>
        </div>
    </section>
    <!-- end: page -->

    <!-- Vendor -->
    <script src="<?= base_url('assets/template') ?>/vendor/jquery/jquery.js"></script>
    <script src="<?= base_url('assets/template') ?>/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
    <script src="<?= base_url('assets/template') ?>/vendor/popper/umd/popper.min.js"></script>
    <script src="<?= base_url('assets/template') ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('assets/template') ?>/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
    <script src="<?= base_url('assets/template') ?>/vendor/common/common.js"></script>
    <script src="<?= base_url('assets/template') ?>/vendor/nanoscroller/nanoscroller.js"></script>
    <script src="<?= base_url('assets/template') ?>/vendor/magnific-popup/jquery.magnific-popup.js"></script>
    <script src="<?= base_url('assets/template') ?>/vendor/jquery-placeholder/jquery.placeholder.js"></script>

    <!-- Specific Page Vendor -->

    <!-- Theme Base, Components and Settings -->
    <script src="<?= base_url('assets/template') ?>/js/theme.js"></script>

    <!-- Theme Custom -->
    <script src="<?= base_url('assets/template') ?>/js/custom.js"></script>

    <!-- Theme Initialization Files -->
    <script src="<?= base_url('assets/template') ?>/js/theme.init.js"></script>

</body>

</html>