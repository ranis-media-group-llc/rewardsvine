<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Meta tags -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Drift - A fully responsive, HTML5 based admin template">
        <meta name="keywords" content="Responsive, HTML5, admin theme, business, professional, jQuery, web design, CSS3, sass">
        <!-- /meta tags -->
        <title> RewardsVine </title>

        <!-- Site favicon -->
        <link rel="shortcut icon" href="/assets/images/mini_logo.png" type="image/x-icon">
        <!-- /site favicon -->

        <!-- Font Icon Styles -->
        <link rel="stylesheet" href="/assets/fonts/noir-pro/styles.css">
        <link rel="stylesheet" href="/assets/plugins/flag-icon-css/css/flag-icon.min.css">
        <link rel="stylesheet" href="/assets/vendor/gaxon-icon/styles.css">
        <!-- /font icon Styles -->
        <link rel="stylesheet" href="/assets/css/intranet/theme.min.css">
        <script src="/assets/plugins/jquery/js/jquery.min.js"></script>
        <script src="/assets/plugins/moment/js/moment.min.js"></script>
        <script src="/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
        <div class="dt-loader-container">
            <div class="dt-loader">
                <svg class="circular" viewBox="25 25 50 50">
                    <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"></circle>
                </svg>
            </div>
        </div>
        <div class="dt-root">
            <div class="dt-root__inner">
                <div class="dt-login--container">
                    <div class="dt-login__content-wrapper">
                        <div class="dt-login__bg-section">
                            <div class="dt-login__bg-content">
                                <h1 class="dt-login__title">Sign Up</h1>
                                <p class="f-16">Sign in and explore the Rewardsvine Apps.</p>
                            </div>
                            <div class="dt-login__logo">
                                <a class="dt-brand__logo-link" href="#">
                                    <img  width="200" class="responsive" src="/assets/images/header_logo2.png" alt="Rewardsvine">
                                </a>
                            </div>
                        </div>
                        <div class="dt-login__content">
                            <?php if(isset($error)) {
                                ?>
                                    <div class="alert alert-danger alert-dismissible" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        <strong>Error!</strong> <?php echo $error; ?>
                                    </div>
                                <?php
                                }
                            ?>
                            <div class="dt-login__content-inner">
                                <form method="post">
                                    <div class="form-group">
                                        <label class="" for="user-name">Full Name</label>
                                        <input type="text" class="form-control" id="user-name" aria-describedby="user-name" name="fullname" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="" for="email-1">Email Address</label>
                                        <input type="email" class="form-control" id="email-1" aria-describedby="email-1" name="email_address" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="" for="password-1">Password</label>
                                        <input type="password" class="form-control" id="password-1" name="password" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="" for="password-1">Confirm Password</label>
                                        <input type="password" class="form-control" id="password-1" name="re_password" required>
                                    </div>
                                    <div class="dt-checkbox d-block mb-6">
                                        <input type="checkbox" id="checkbox-1" required>
                                        <label class="dt-checkbox-content" for="checkbox-1"> by signing up, I accept
                                            <a href="javascript:void(0)">Term &amp; Condition</a>
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary text-uppercase">Sign up</button>
                                        <span class="d-inline-block ml-4">OR
                                            <a class="d-inline-block font-weight-500 ml-3" href="/auth/login">LOGIN</a>
                                        </span>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="/assets/plugins/masonry-layout/js/masonry.pkgd.min.js"></script>
        <script src="/assets/plugins/sweetalert2/js/sweetalert2.js"></script>
        <script src="/assets/js/intranet/functions.js"></script>
        <script src="/assets/js/intranet/customizer.js"></script>
        <script src="/assets/js/intranet/script.js"></script>
    </body>
</html>