<!DOCTYPE html>
<html>
	<head>
        <?php $this->load->view('layout/members/includes/head.php');  ?> 
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
        <script src='https://www.google.com/recaptcha/api.js'></script>
        <meta name="google-signin-scope" content="profile email">
        <script src="https://apis.google.com/js/platform.js?onload=renderButton" async defer></script>
        <meta name="google-signin-client_id" content="758165209849-af6jro1dba88u8mk56u9mvncteovnj0t.apps.googleusercontent.com">
        <meta name="google-site-verification" content="PvJbCXAs0h5Jy3QhpEMWuDwxJseKQzurcKbr34XOn8Y" />
        <style>
              body {
                padding-top: 5px;
                font-size: 12px
                
              }
              
              html {
                position: relative;
                min-height: 100%;
                background: #ffffff;
            }
              
              
              .main {
                max-width: 320px;
                margin: 0 auto;
                 position: absolute;
                 top: 0;
                  right: 0;
                  bottom: 40px;
                  left: 0;
                 
              }
              .login-or {
                position: relative;
                font-size: 18px;
                color: #aaa;
                margin-top: 10px;
                        margin-bottom: 10px;
                padding-top: 10px;
                padding-bottom: 10px;
              }
              .span-or {
                display: block;
                position: absolute;
                left: 50%;
                top: -2px;
                margin-left: -25px;
                background-color: #fff;
                width: 50px;
                text-align: center;
              }
              .hr-or {
                background-color: #cdcdcd;
                height: 1px;
                margin-top: 0px !important;
                margin-bottom: 0px !important;
              }
              h3 {
                text-align: center;
                line-height: 300%;
              }
        </style>
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
        <?php
           // $login_url = 'https://accounts.google.com/o/oauth2/v2/auth?scope=' . urlencode('https://www.googleapis.com/auth/userinfo.profile https://www.googleapis.com/auth/userinfo.email') . '&redirect_uri=https://phpflow.com/google-oauth-php&response_type=code&client_id=758165209849-af6jro1dba88u8mk56u9mvncteovnj0t.apps.googleusercontent.com&access_type=online';
        ?>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="main">
                    <h3>Login to<span class="text-purple m-l-5">RewardsVine</span></h3>
                        <div class="row">
                            <div class="col-md-12 ">
                                <div class="panel panel-default" >
                                    <div class="panel-heading" style="background-color:#7266ba;color:#fff;">
                                        <h3 class="panel-title"></h3>
                                           <center>
                                            <p> Login with your Google account. </p> </center>
                                           <div id="my-signin2" class="g-signin2" data-onsuccess="onSignIn" ></div> 
                                    </div>
                                 </div>
                            </div>
                        </div>
                          <div class="login-or">
                            <hr class="hr-or">
                            <span class="span-or">OR</span>
                          </div>
                     <?php if(isset($error)) 
                        { 
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
                    <form role="form" class="form-horizontal m-t-20" method="post">
                        <div class="form-group">
                        <div class="col-xs-12">
                          <label >Username or email</label>
                          <input name="email" type="email" required="" class="form-control" >
                        </div>
                        </div>
                        <div class="form-group">
                        <div class="col-xs-12">
                          <label for="inputPassword">Password</label>
                          <input type="password" class="form-control" name="password" type="password" required="">
                            <a class="pull-right" href="#">Forgot password?</a>
                          
                        </div>
                        </div>
                        <div class="form-group">
                        <div class="col-xs-12">
                            <div class="g-recaptcha" name="g-recaptcha" data-sitekey="6LcZ0pMUAAAAACpi606MstLG0evbI3EMsubXLhWg" data-callback="verifyRecaptchaCallback" data-expired-callback="expiredRecaptchaCallback"></div>
                        </div>
                        </div>
                        <div class="form-group">
                        <div class="col-xs-12">
                        <button type="submit"  class="btn btn-purple btn-block text-uppercase waves-effect waves-light">
                          Log In
                        </button>
                        </div>
                        </div>
                    </form>
                    <div class="row">
                        <div class="col-sm-12 text-center">
                            <p>
                                Don't have an account? 
                                <a href="signup" class="text-purple m-l-5"><b>Sign Up</b></a>
                            </p>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php $this->load->view('layout/members/includes/foot.php');  ?> 
    </body>
</html>
<script>
function onSignIn(googleUser) {
  var profile = googleUser.getBasicProfile();
  console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
  console.log('Name: ' + profile.getName());
  console.log('Image URL: ' + profile.getImageUrl());
  console.log('Email: ' + profile.getEmail()); // This is null if the 'email' scope is not present.
}

</script>

