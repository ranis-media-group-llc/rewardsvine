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
            content: "Warning";
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
                        <p class="f-16">You are trying to use PROXY/VPN IP Address.</p>
                    </div>
                    <div class="dt-login__logo">
                        <a class="dt-brand__logo-link" href="#">
                            <img  width="200" class="responsive" src="/assets/images/header_logo2.png" alt="Rewardsvine">
                        </a>
                    </div>
                </div>
                <div class="dt-login__content">
                    <div class="dt-login__content-inner">
                        <div class="col-md-12 ">
                        </div>
                        <div class="login-or">
                            <hr class="hr-or">
                            <div class="alert alert-danger alert-dismissible" role="alert">
                                <strong>VPN is strongly probihited!</strong>
                            </div>
                        </div>
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