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
        
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="main">
                    <h3><span class="text-purple m-l-5">SignUp </span>Now!</h3>
                        <div class="row">
                            <div class="col-md-12 ">
                                <div class="panel panel-default" >
                                    <div class="panel-heading" style="background-color:#7266ba;color:#fff;">
                                        <h3 class="panel-title"></h3>
                                           <center>
                                            <p> Signup with your Google account. </p> </center>
                                           <div id="my-signin2" class="g-signin2" data-onsuccess="onSignIn" ></div> 
                                    </div>
                                 </div>
                            </div>
                        </div>
                  <div class="login-or">
                    <hr class="hr-or">
                    <span class="span-or">OR</span>
                  </div>

                    <form class="form-horizontal m-t-20" method="post">
                            
                        <div class="form-group ">
							<div class="col-xs-12">
								<input class="form-control" name="email" type="email" required="" placeholder="Email Address">
							</div>
						</div>

						<div class="form-group">
							<div class="col-xs-12">
								<input class="form-control" name="password" type="password" required="" placeholder="Password">
							</div>
						</div>
                        <div class="form-group">
							<div class="col-xs-12">
								<input class="form-control" name="password2" type="password" required="" placeholder="Confirm Password">
							</div>
						</div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <div class="g-recaptcha" name="g-recaptcha" data-sitekey="6LcZ0pMUAAAAACpi606MstLG0evbI3EMsubXLhWg" data-callback="verifyRecaptchaCallback" data-expired-callback="expiredRecaptchaCallback"></div>
                            </div>
                        </div>
                        <div class="col-sm-12 text-center">
                            <p>
                                By creating an account you are agreeing to RewardsVine's <a href="#">Privacy and Policy</a> and <a href="#">Terms Service</a>.
                            </p>
                            
                            </div>
                        <div class="form-group text-center m-t-40">
							<div class="col-xs-12">
								<button  type="submit" class="btn btn-purple btn-block text-uppercase waves-effect waves-light">
									CREATE MY ACCOUNT
								</button>
							</div>
						</div>
                    </form>
                    <div class="row">
                        <div class="col-sm-12 text-center">
                            <p>
                                Already have an account? 
                                <a href="login" class="text-purple m-l-5"><b>Login</b></a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php $this->load->view('layout/members/includes/foot.php');  ?> 
    </body>
</html>
