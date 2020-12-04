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
        <title> <?= $title ?>  </title>

        <!-- Site favicon -->
        <link rel="shortcut icon" href="/assets/images/mini_logo.png" type="image/x-icon">
        <!-- /site favicon -->

        <!-- Font Icon Styles -->
        <link rel="stylesheet" href="/assets/fonts/noir-pro/styles.css">
        <link rel="stylesheet" href="/assets/plugins/flag-icon-css/css/flag-icon.min.css">
        <link rel="stylesheet" href="/assets/vendor/gaxon-icon/styles.css">
        <!-- /font icon Styles -->
        <link rel="stylesheet" href="/assets/css/intranet/theme.css?sdsds">
        <script src="/assets/plugins/jquery/js/jquery.min.js"></script>
        <script src="/assets/plugins/moment/js/moment.min.js"></script>
        <script src="/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src='https://www.google.com/recaptcha/api.js'></script>
        <meta name="google-signin-scope" content="profile email">
        <script src="https://apis.google.com/js/platform.js?onload=renderButton" async defer></script>
        <meta name="google-signin-client_id" content="758165209849-af6jro1dba88u8mk56u9mvncteovnj0t.apps.googleusercontent.com">
        <meta name="google-site-verification" content="PvJbCXAs0h5Jy3QhpEMWuDwxJseKQzurcKbr34XOn8Y" />

        <script>
            function onSuccess(googleUser) {
                console.log('Logged in as: ' + googleUser.getBasicProfile().getName());
            }
            function onFailure(error) {
                console.log(error);
            }
            function renderButton() {
                gapi.signin2.render('my-signin2', {
                    'scope': 'profile email',
                    'width': 270,
                    'height': 50,
                    'longtitle': true,
                    'theme': 'white',
                    'onsuccess': onSuccess,
                    'onfailure': onFailure,
                });
            }
        </script>
        <style>
            /* Glyph, by Harry Roberts */

            hr.hr-or {
                overflow: visible; /* For IE */
                padding: 0;
                border: none;
                border-top: medium double #333;
                color: #333;
                text-align: center;
            }
            hr.hr-or:after {
                content: "OR";
                display: inline-block;
                position: relative;
                top: -0.7em;
                font-size: 1.5em;
                padding: 0 0.25em;
                background: white;
            }
        </style>
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
                                <p class="f-16">Explore The RewardsVine App.</p>
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
                                <div class="col-md-12 ">
                                    <div class="panel panel-default" >
                                        <div class="panel-heading">
                                            <h3 class="panel-title"></h3>
                                            <center>

                                                <div id="my-signin2" class="g-signin2" data-onsuccess="onSignIn" ></div>
                                            </center>
                                        </div>
                                    </div>
                                </div>

                                <div class="login-or">
                                    <hr class="hr-or">
                                </div>
                                <form method="post">
                                    <div class="form-group">
                                        <label class="" for="user-name">Full Name</label>
                                        <input type="text" class="form-control" id="user-name" aria-describedby="user-name" name="fullname" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="" for="email-1">Email Address</label>
                                        <input type="email" class="form-control" id="email-1" aria-describedby="email-1" autocomplete="off" placeholder="Your Best Email" name="email_address" required>
                                        <small><i>Valid email only to receive digital gift cards.</i></small>
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
                                        <label class="dt-checkbox-content" for="checkbox-1"> By creating an account you are agreeing to RewardsVine's
                                            <a href="https://rewardsvine.com/privacy" target="_blank">Privacy and Policy</a> and
                                            <a href="https://rewardsvine.com/terms" target="_blank">Terms of Service</a>
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-xs-12">
                                            <div class="g-recaptcha" name="g-recaptcha" data-sitekey="6LcZ0pMUAAAAACpi606MstLG0evbI3EMsubXLhWg" data-callback="verifyRecaptchaCallback" data-expired-callback="expiredRecaptchaCallback"></div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary text-uppercase">Create Account</button>
                                        <span class="d-inline-block ml-4">OR
                                            <a class="d-inline-block font-weight-500 ml-3" href="<?= base_url('/auth/login'); ?>">LOGIN</a>
                                        </span>
                                    </div>
                                    <small>We respect your privacy.  We hate spam too. </small>
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
        <script>
            function onSignIn(googleUser) {
                var profile = googleUser.getBasicProfile();
                console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
                console.log('Name: ' + profile.getName());
                console.log('Image URL: ' + profile.getImageUrl());
                console.log('Email: ' + profile.getEmail()); // This is null if the 'email' scope is not present.
            }

        </script>
    </body>
</html>