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
                                                <h3 class="dt-card__title">Offerwalls</h3>
                                            </div>
                                        </div>
                                        <br><br>
                                        <div class="tab-content">
                                            <div class="col-md-12">
                                                <div class="row">
                                                        <div class="col-xl-6">
                                                            <div class="col-xl-12">
                                                                <a href="/offerwall/view/adscend" >
                                                                    <div class="dt-card dt-social-card animate-slide border border-w-2 border-dark">
                                                                        <div class="dt-social__circle bg-dark">
                                                                        </div>
                                                                        <div class="dt-card__body">
                                                                            <div class="row">
                                                                                <div class="col-xl-9">
                                                                                    <h3 class="font-weight-500 mb-1">Adscend Media</h3>
                                                                                    <ul class="dt-list dt-list-bordered dt-list-cm-0 flex-nowrap">
                                                                                        <li class="dt-list__item">
                                                                                            <p class="dt-indicator-title text-muted" style="word-break:break-word !important;">
                                                                                                Watch Videos, Complete Offers, Download Apps & More!
                                                                                            </p>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                                <img class="img-fluid dt-card__tools responsive" width="60" src="/assets/images/members/adscend.jpg" alt="Adscend Media">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="col-xl-12">
                                                                <a href="/offerwall/view/cpa_lead" >
                                                                    <div class="dt-card dt-social-card animate-slide border border-w-2 border-dark">
                                                                        <div class="dt-social__circle bg-dark">
                                                                        </div>
                                                                        <div class="dt-card__body">
                                                                            <div class="row">
                                                                                <div class="col-xl-9">
                                                                                    <h3 class="font-weight-500 mb-1">CPA Lead</h3>
                                                                                    <ul class="dt-list dt-list-bordered dt-list-cm-0 flex-nowrap">
                                                                                        <li class="dt-list__item">
                                                                                            <p class="dt-indicator-title text-muted f-12"> Sign Up, Complete Offers, Download Apps and Surveys</p>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                                <img class="img-fluid dt-card__tools responsive" width="60" src="/assets/images/members/cpalead.jpg" alt="CPA Lead">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="col-xl-12">
                                                                <a href="/offerwall/view/offertoro" >
                                                                    <div class="dt-card dt-social-card animate-slide border border-w-2 border-dark">
                                                                        <div class="dt-social__circle bg-dark">
                                                                        </div>
                                                                        <div class="dt-card__body">
                                                                            <div class="row">
                                                                                <div class="col-xl-9">
                                                                                    <h3 class="font-weight-500 mb-1">Offertoro</h3>
                                                                                    <ul class="dt-list dt-list-bordered dt-list-cm-0 flex-nowrap">
                                                                                        <li class="dt-list__item">
                                                                                            <p class="dt-indicator-title text-muted f-12">
                                                                                                Earn points by Watching Videos,Completing Offers and More!
                                                                                            </p>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                                <img class="img-fluid dt-card__tools responsive" width="60" src="/assets/images/members/offertoro.jpg" alt="Offertoro">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="col-xl-12">
                                                                <a href="/offerwall/view/adgem" >
                                                                    <div class="dt-card dt-social-card animate-slide border border-w-2 border-dark">
                                                                        <div class="dt-social__circle bg-dark">
                                                                        </div>
                                                                        <div class="dt-card__body">
                                                                            <div class="row">
                                                                                <div class="col-xl-9">
                                                                                    <h3 class="font-weight-500 mb-1">AdGem</h3>
                                                                                    <ul class="dt-list dt-list-bordered dt-list-cm-0 flex-nowrap">
                                                                                        <li class="dt-list__item">
                                                                                            <p class="dt-indicator-title text-muted f-12">
                                                                                                Earn points by Watching Videos,Completing Offers and More!
                                                                                            </p>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                                <div class="col-xl-3">
                                                                                        <img class="img-fluid dt-card__tools responsive" width="60" src="/assets/images/members/adgem.jpg" alt="AdGem">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="col-xl-12">
                                                                <a href="#" >
                                                                    <div class="dt-card dt-social-card animate-slide border border-w-2 border-dark">
                                                                        <div class="dt-social__circle bg-dark">
                                                                        </div>
                                                                        <div class="dt-card__body">
                                                                            <div class="row">
                                                                                <div class="col-xl-9">
                                                                                    <h3 class="font-weight-500 mb-1">Payment Wall</h3>
                                                                                    <ul class="dt-list dt-list-bordered dt-list-cm-0 flex-nowrap">
                                                                                        <li class="dt-list__item">
                                                                                            <p class="dt-indicator-title text-muted f-12">
                                                                                                Earn points by Watching Videos,Completing Offers and More!
                                                                                            </p>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                                <img class="img-fluid dt-card__tools responsive" width="60" src="/assets/images/members/offerwall.jpg" alt="OfferWall">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>

                                                            <article data-id="62267"  data-brand="Website"  class="product">
                                                                <a href="https://www.templatemonster.com/website-templates/monstroid2.html" class="product-image-wrapper">
                                                                    <img src="/assets/images/test.jpg" alt="Monstroid2 Multipurpose Website Template"  class="product-image lazyloaded responsive">
                                                                </a>
                                                                <div class="product-details">
                                                                    <div class="product-name">
                                                                        <span data-bg="/assets/icons/types/type-html5-2.svg" class="product-name-icon lazyloaded" style="background-image: url(&quot;/assets/icons/types/type-html5-2.svg&quot;);"></span>
                                                                        <span class="product-name-links">
                                                                            <a href="https://www.templatemonster.com/website-templates/monstroid2.html" title="Monstroid2 Multipurpose Bootstrap Website Template" class="product-name-link">
                                                                                <h3 class="product-name-title">POINTS TO PAYCHECK</h3>
                                                                            </a>
                                                                            <span class="product-name-vendor">
                                                                                Last Date Purchase :
                                                                                <a href="https://www.templatemonster.com/authors/zemez/" class="product-name-vendor-link"> 11/20/2020</a>
                                                                            </span><br>
                                                                            <span class="product-name-vendor">
                                                                                Last Redeem Amt :
                                                                                <a href="https://www.templatemonster.com/authors/zemez/" class="product-name-vendor-link"> $75</a>
                                                                            </span>
                                                                        </span>
                                                                    </div>
                                                                    <div class="product-info">
                                                                        <div class="product-info-line">
                                                                            <div class="product-sales">

                                                                            </div>
                                                                            <div class="product-price">

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-links">
                                                                        <a href="https://www.templatemonster.com/website-templates/monstroid2.html" class="product-link product-link_details btn btn_3">
                                                                            SEE DETAILS
                                                                        </a>
                                                                        <a href="https://www.templatemonsterpreview.com/demo/62267.html" rel="noopener noreferrer nofollow" target="_blank" class="product-link product-link_demo btn btn_2">
                                                                            REDEEM POINTS
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </article>
                                                        </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- /grid -->
                        </div>

                        <style>
                            .product {
                                background: #fff;
                                box-shadow: 2px 2px 2px 2px rgba(0,0,0,.3);
                                border-radius: 3px;
                                width : 300px;
                                background-image: url('/assets/images/sample.png') !important;
                                height : 200px;
                            }
                            .product-image-wrapper {
                                display: block;
                                padding-top: 1.5%;
                                margin-bottom: 20px;
                                border-radius: 3px 3px 0 0;
                                overflow: hidden;
                            }
                            .product-details {
                                padding: 0 10px 10px;
                                font-size: 14px;
                            }
                            .product-info{
                                text-align: center;
                            }
                            .product-name {
                                display: flex;
                                text-decoration: none;
                                margin-bottom: 20px;
                            }
                            .product-info-line {
                                display: flex;
                                justify-content: space-between;
                                align-items: center;
                            }
                            .product-sales {
                                color: #78909c;
                                margin-right: auto;
                            }
                            .product-price {
                                font-weight: 600;
                                font-size: 20px;
                                color: #243238;
                                margin-left: 10px;
                            }
                            .product-links {
                                display: flex;
                                margin-top: 1px;
                            }
                            .product-link {
                                flex: 1;
                            }
                            .btn_3 {
                                background: linear-gradient(180deg,#90a4ae,#78909c);
                            }
                            .btn, .btn:active, .btn:hover {
                                color: #fff;
                            }
                            .product-link:not(:first-child) {
                                margin-left: 20px;
                            }
                            .btn_2 {
                                background: linear-gradient(180deg,#42a5f5,#2196f3);
                            }
                            .btn {
                                display: inline-flex;
                                justify-content: center;
                                align-items: center;
                                cursor: pointer;
                                border-radius: 3px;
                                font-size: 14px;
                                line-height: 40px;
                                height: 40px;
                                padding: 0 20px;
                                text-align: center;
                                text-decoration: none;
                                white-space: nowrap;
                            }
                        </style>

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

<?php
$this->load->view('layout/foot');
?>

