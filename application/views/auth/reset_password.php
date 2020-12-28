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
</head>
<body>
<div class="dt-loader-container">
    <div class="dt-loader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"></circle>
        </svg>
    </div>
</div>
<!-- Root -->
<div class="dt-root">
    <div class="dt-root__inner">
        <div class="dt-login--container dt-forgot-password">
            <div class="dt-login__content-wrapper">
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
                    <div class="dt-login__content-inner" style="background-color: #000000 !important;">
                        <span class="dt-login__logo" >
                             <a class="dt-brand__logo-link" href="#">
                                 <img  width="200" class="responsive" src="/assets/images/header_logo2.png" alt="Rewardsvine">
                             </a>
                        </span>
                        <form method="post">
                            <div class="form-group search-box right-side-icon mw-100">
                                <label class="sr-only" for="email-1">Enter New Password</label>
                                <input type="password" class="form-control" name="password"  placeholder="Enter New Password" required>
                                <span class="search-icon"><i class="icon icon-forgot-pass icon-lg"></i></span>
                            </div>
                            <div class="form-group search-box right-side-icon mw-100">
                                <label class="sr-only" for="email-1">New Password</label>
                                <input type="password" class="form-control" name="re_password"  placeholder="Re-Enter New Password" required>
                                <span class="search-icon"><i class="icon icon-forgot-pass icon-lg"></i></span>
                            </div>
                            <div class="form-group">
                                <input type="hidden" name="id" value="<?= $user; ?>">
                                <button type="submit" class="btn btn-primary text-uppercase">Submit</button>
                                <a style="text-align :right;color: #7d287e;" class="pull-right" href="<?= base_url('auth/login') ?>">Login</a>
                            </div>
                        </form>
                    </div>
                    <div class="dt-login__content-footer">

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
                    window.location.href='/offerwall';
                }else{
                    console.log(data);
                }
            }
        });
    }
</script>

</body>
</html>