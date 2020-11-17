<?php
    $this->load->view('layout/head');
?>
    <!-- Loader -->
    <div class="dt-loader-container">
        <div class="dt-loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"></circle>
            </svg>
        </div>
    </div>
    <!-- /loader -->
    <!-- Root -->
    <div class="dt-root">
        <div class="dt-root__inner">

            <!-- Root Intra -->
            <div class="dt-root__intra">
                <?php
                $this->load->view('layout/header');
                ?>
                <!-- Site Main -->
                <main class="dt-main">
                    <?php
                        $this->load->view('layout/aside');
                    ?>
                    <div class="dt-content-wrapper">
                        <div class="dt-content">
                            <div class="dt-page__header">
                                <h1 class="dt-page__title"></h1>
                            </div>
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="card">
                                        <div class="card-header card-nav border-bottom-0">
                                            <div class="d-flex align-items-center justify-content-between mb-4">
                                                <h3 class="dt-card__title">Gift Cards</h3>
                                            </div>
                                        </div>
                                        <br><br>
                                        <div class="tab-content">
                                            <div class="col-md-12">
                                                <div class="social-box">
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-xs-12 text-center">
                                                                <div class="box">
                                                                    <img alt="" class="card-img-top img-fluid" src="/assets/images/steam.jpg">
                                                                    <i class="fa fa-behance fa-3x" aria-hidden="true"></i>
                                                                    <br><br>
                                                                    <div class="box-title">
                                                                        <h4>STEAM</h4>
                                                                        <small>$15 - 1500 points</small>
                                                                    </div>
                                                                    <div class="box-text">
                                                                        <span></span>
                                                                    </div>
                                                                    <div class=" box-btn box-btn-redeem">
                                                                        <a href="#">REDEEM</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-3 col-xs-12 text-center">
                                                                <div class="box">
                                                                    <img alt="" class="card-img-top img-fluid" src="/assets/images/gift_cards/itunes.png">
                                                                    <i class="fa fa-behance fa-3x" aria-hidden="true"></i>
                                                                    <br><br>
                                                                    <div class="box-title">
                                                                        <h4>iTunes</h4>
                                                                        <small>$5 - 2000 points</small>
                                                                    </div>
                                                                    <div class="box-text">
                                                                        <span></span>
                                                                    </div>
                                                                    <div class=" box-btn box-btn-redeem">
                                                                        <a href="#">REDEEM</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-3 col-xs-12 text-center">
                                                                <div class="box">
                                                                    <img alt="" class="card-img-top img-fluid" src="/assets/images/gift_cards/google-pay.png">
                                                                    <i class="fa fa-behance fa-3x" aria-hidden="true"></i>
                                                                    <br><br>
                                                                    <div class="box-title">
                                                                        <h4>Google Play</h4>
                                                                        <small>$10 - 3300 points</small>
                                                                    </div>
                                                                    <div class="box-text">
                                                                        <span></span>
                                                                    </div>
                                                                    <div class=" box-btn box-btn-redeem">
                                                                        <a href="#">REDEEM</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-3 col-xs-12 text-center">
                                                                <div class="box">
                                                                    <img alt="" class="card-img-top img-fluid" src="/assets/images/gift_cards/amazon.png">
                                                                    <i class="fa fa-behance fa-3x" aria-hidden="true"></i>
                                                                    <br><br>
                                                                    <div class="box-title">
                                                                        <h4>Amazon</h4>
                                                                        <small>$5 - 1800 points</small>
                                                                    </div>
                                                                    <div class="box-text">
                                                                        <span></span>
                                                                    </div>
                                                                    <div class=" box-btn box-btn-redeem">
                                                                        <a href="#">REDEEM</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-3 col-xs-12 text-center">
                                                                <div class="box">
                                                                    <img alt="" class="card-img-top img-fluid" src="/assets/images/gift_cards/bestbuy.png">
                                                                    <i class="fa fa-behance fa-3x" aria-hidden="true"></i>
                                                                    <br><br>
                                                                    <div class="box-title">
                                                                        <h4>Best Buy</h4>
                                                                        <small>$10 - 3300 points</small>
                                                                    </div>
                                                                    <div class="box-text">
                                                                        <span></span>
                                                                    </div>
                                                                    <div class=" box-btn box-btn-redeem">
                                                                        <a href="#">REDEEM</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-3 col-xs-12 text-center">
                                                                <div class="box">
                                                                    <img alt="" class="card-img-top img-fluid" src="/assets/images/gift_cards/sony.png">
                                                                    <i class="fa fa-behance fa-3x" aria-hidden="true"></i>
                                                                    <br><br>
                                                                    <div class="box-title">
                                                                        <h4>Sony Playstation</h4>
                                                                        <small>$10 - 3000 points</small>
                                                                    </div>
                                                                    <div class="box-text">
                                                                        <span></span>
                                                                    </div>
                                                                    <div class=" box-btn box-btn-redeem">
                                                                        <a href="#">REDEEM</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-3 col-xs-12 text-center">
                                                                <div class="box">
                                                                    <img alt="" class="card-img-top img-fluid" src="/assets/images/gift_cards/rixty.jpg">
                                                                    <i class="fa fa-behance fa-3x" aria-hidden="true"></i>
                                                                    <br><br>
                                                                    <div class="box-title">
                                                                        <h4>Rixty Gift Card</h4>
                                                                        <small>$10 - 3000 points</small>
                                                                    </div>
                                                                    <div class="box-text">
                                                                        <span></span>
                                                                    </div>
                                                                    <div class=" box-btn box-btn-redeem">
                                                                        <a href="#">REDEEM</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-3 col-xs-12 text-center">
                                                                <div class="box">
                                                                    <img alt="" class="card-img-top img-fluid" src="/assets/images/gift_cards/xbox.png">
                                                                    <i class="fa fa-behance fa-3x" aria-hidden="true"></i>
                                                                    <br><br>
                                                                    <div class="box-title">
                                                                        <h4>Xbox Digital Gift Card</h4>
                                                                        <small>$15 - 4500 points</small>
                                                                    </div>
                                                                    <div class="box-text">
                                                                        <span></span>
                                                                    </div>
                                                                    <div class=" box-btn box-btn-redeem">
                                                                        <a href="#">REDEEM</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-3 col-xs-12 text-center">
                                                                <div class="box">
                                                                    <img alt="" class="card-img-top img-fluid" src="/assets/images/gift_cards/defiance.png">
                                                                    <i class="fa fa-behance fa-3x" aria-hidden="true"></i>
                                                                    <br><br>
                                                                    <div class="box-title">
                                                                        <h4>Trion Defiance </h4>
                                                                        <small>$15 - 4500 points</small>
                                                                    </div>
                                                                    <div class="box-text">
                                                                        <span></span>
                                                                    </div>
                                                                    <div class=" box-btn box-btn-redeem">
                                                                        <a href="#">REDEEM</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /grid -->
                        </div>
                        <!-- Footer -->
                        <footer class="dt-footer">
                            Copyright.RewardsVine © 2020
                        </footer>
                        <!-- /footer -->
                    </div>
                    <!-- /site content wrapper -->
                </main>
            </div>

        </div>
    </div>
    <!-- /root -->
<style>
    @import url('https://fonts.googleapis.com/css?family=Poppins&display=swap');


    .box-btn {
        background-color:#4385f8;
        width: auto;
        height: 40px;
        border-radius: 2px;
        color: #fff !important;
        background-size: 100% 100%;
        box-shadow: 0 0 0 7px #4385f8 inset;
        margin-top: 15px;
        cursor: pointer;
    }

    .card-img-top {
        background-color: #f2f2f2;
    }

    .social-box .box{
        backface-visibility: hidden;
        background: #faf9f8;
        border-radius: 10px;
        padding: 0 ;
        margin: 10px 0px;
        transition: all 0.5s ease-out;
        box-shadow: 0 0 6px #4183D7;
    }

    .social-box .box:hover{
        box-shadow: 0 0 6px #00d7c6;
    }



    .social-box .box .box-btn a{
        text-decoration: none;
        color: #fff;
        font-size: 16px;
        top: 10px !important;
        position: relative;
    }

    .fa{
        color:#4183D7;
    }
</style>


<?php
$this->load->view('layout/foot');
?>

