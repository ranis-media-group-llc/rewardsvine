<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Drift - A fully responsive, HTML5 based admin template">
        <meta name="keywords" content="Responsive, HTML5, admin theme, business, professional, jQuery, web design, CSS3, sass">
        <title> <?= $title ?>  </title>
        <link rel="shortcut icon" href="/assets/images/mini_logo.png" type="image/x-icon">
        <link rel="stylesheet" href="/assets/fonts/noir-pro/styles.css">
        <link rel="stylesheet" href="/assets/plugins/flag-icon-css/css/flag-icon.min.css">
        <link rel="stylesheet" href="/assets/vendor/gaxon-icon/styles.css">
        <link rel="stylesheet" href="<?= base_url('/assets/css/intranet/theme.css?sdsds'); ?>">
        <script src="/assets/plugins/jquery/js/jquery.min.js"></script>
        <script src="/assets/plugins/moment/js/moment.min.js"></script>
        <script src="/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src='https://www.google.com/recaptcha/api.js'></script>

        <meta name="google-signin-scope" content="profile email">
        <meta name="google-signin-client_id" content="758165209849-af6jro1dba88u8mk56u9mvncteovnj0t.apps.googleusercontent.com">
        <meta name="google-site-verification" content="PvJbCXAs0h5Jy3QhpEMWuDwxJseKQzurcKbr34XOn8Y" />
        <script src="https://apis.google.com/js/platform.js?onload=renderButton" async defer></script>

        <script src="https://apis.google.com/js/api:client.js"></script>

        <script>
            var googleUser = {};
            var startApp = function() {
                gapi.load('auth2', function(){
                    // Retrieve the singleton for the GoogleAuth library and set up the client.
                    auth2 = gapi.auth2.init({
                        client_id: '758165209849-af6jro1dba88u8mk56u9mvncteovnj0t.apps.googleusercontent.com',
                        cookiepolicy: 'single_host_origin',
                        // Request scopes in addition to 'profile' and 'email'
                        scope: 'profile email'
                    });
                    attachSignin(document.getElementById('customBtn'));
                });
            };

            function attachSignin(element) {
                console.log(element.id);
                auth2.attachClickHandler(element, {},
                    function(googleUser) {
                        var user_data = {};
                        //console.log(googleUser);
                        //console.log(googleUser.wt.cu);
                       // console.log('Logged in as: ' + googleUser.getBasicProfile().getName());
                        user_data['email_address'] = googleUser.wt.cu;
                        user_data['fullname'] = googleUser.wt.fV + googleUser.wt.iT;
                        user_data['oauth_provider'] = 'google';
                        //console.log( googleUser.getBasicProfile().getN);
                        check_user(user_data);

                        // document.getElementById('name').innerText = "Signed in: " +
                        //     googleUser.getBasicProfile().getName();
                    }, function(error) {
                        alert(JSON.stringify(error, undefined, 2));
                    });
            }
        </script>
        <style type="text/css">
            #customBtn {
                display: inline-block;
                background: white;
                color: #444;
                width: 270px;
                border-radius: 5px;
                border: thin solid #888;
                box-shadow: 1px 1px 1px grey;
                white-space: nowrap;
                text-align: center;
            }
            #customBtn:hover {
                cursor: pointer;
            }
            span.label {
                font-family: serif;
                font-weight: normal;
            }
            span.icon {
                background: url('/assets/images/g-normal.png') transparent 5px 50% no-repeat;
                display: inline-block;
                vertical-align: middle;
                width: 42px;
                height: 42px;
            }
            span.buttonText {
                display: inline-block;
                vertical-align: middle;
                padding-left: 42px;
                padding-right: 42px;
                font-size: 14px;
                /* Use the Roboto font that is loaded in the <head> */
                font-family: 'Roboto', sans-serif;
            }
        </style>
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
                                <h1 class="dt-login__title">SIGN IN</h1>
                                <p class="f-16">Welcome to RewardsVine.</p>
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
                                                <!-- In the callback, you would hide the gSignInWrapper element on a successful sign in -->
                                                <center>
                                                    <div id="gSignInWrapper">
                                                        <span class="label">:</span>
                                                        <div id="customBtn" class="customGPlusSignIn">
                                                            <span class="icon"></span>
                                                            <span class="buttonText"> Sign in with Google</span>
                                                        </div>
                                                    </div>
                                                <div id="name"></div>
                                                <script>startApp();</script>
                                                </center>
                                                <h3 class="panel-title"></h3>
                                                    <center>
                                                        <div id="my-signin2" class="g-signin2"></div>
                                                    </center>
                                            </div>
                                        </div>
                                    </div>
                                <div class="login-or">
                                    <hr class="hr-or">
                                </div>
                                <form method="post">
                                    <div class="form-group">
                                        <label class="" for="email-1">Email Address</label>
                                        <input type="email" class="form-control" id="email-1" aria-describedby="email-1" name="email_address" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="" for="password-1">Password</label>
                                        <input type="password" class="form-control" id="password-1" name="password" required>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-xs-12">
                                            <div class="g-recaptcha" name="g-recaptcha" data-sitekey="6LcZ0pMUAAAAACpi606MstLG0evbI3EMsubXLhWg" data-callback="verifyRecaptchaCallback" data-expired-callback="expiredRecaptchaCallback"></div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary text-uppercase">LOGIN</button>
                                        <span class="d-inline-block ml-4">OR
                                            <a class="d-inline-block font-weight-500 ml-3" href="/auth/signup"> SIGN UP</a>
                                        </span>
                                    </div>
                                </form>
                            </div>
                            <div class="dt-login__content-footer">
                                <a href="#">Forgot your password?</a>
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
            function check_user(user_data){
                $.ajax({
                    type: "POST",
                    url: "/auth/google_login",
                    data: {data : user_data}, // serializes the form's elements.
                    success: function(data) {
                        if(data==="Member"){
                            //window.location.href='/offerwall';
                        }
                        console.log(data);
                    }
                });
            }
            function onSuccess(googleUser) {
                var user_data = {};
                console.log(googleUser);
                console.log(googleUser.wt.cu);
                console.log('Logged in as: ' + googleUser.getBasicProfile().getName());
                user_data['email_address'] = googleUser.wt.cu;
                user_data['fullname'] = googleUser.wt.fV + googleUser.wt.iT;
                user_data['oauth_provider'] = 'google';
                //console.log( googleUser.getBasicProfile().getN);
                check_user(user_data);
            }
            function onFailure(error) {
                console.log(error);
            }
            function renderButtons() {
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

    </body>
</html>