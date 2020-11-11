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
                                                <h3 class="dt-card__title">Surveys</h3>
                                            </div>
                                        </div>
                                        <br><br>
                                        <div class="tab-content">
                                            <div class="col-md-12">
                                                <div class="col-xl-6">
                                                    <div class="col-xl-12">
                                                        <a href="/surveys/view/theorem" >
                                                            <div class="dt-card dt-social-card animate-slide border border-w-2 border-dark">
                                                                <div class="dt-social__circle bg-dark">
                                                                </div>
                                                                <div class="dt-card__body">
                                                                    <div class="row">
                                                                        <div class="col-xl-9">
                                                                            <h3 class="font-weight-500 mb-1">TheoremReach</h3>
                                                                            <ul class="dt-list dt-list-bordered dt-list-cm-0 flex-nowrap">
                                                                                <li class="dt-list__item">
                                                                                    <p class="dt-indicator-title text-muted" style="word-break:break-word !important;">
                                                                                        Surveys
                                                                                    </p>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        <img class="img-fluid dt-card__tools responsive" width="60" src="/assets/images/members/theorem.png" alt="Theorem Reach">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="col-xl-12">
                                                        <a href="/surveys/view/pollfish" >
                                                            <div class="dt-card dt-social-card animate-slide border border-w-2 border-dark">
                                                                <div class="dt-social__circle bg-dark">
                                                                </div>
                                                                <div class="dt-card__body">
                                                                    <div class="row">
                                                                        <div class="col-xl-9">
                                                                            <h3 class="font-weight-500 mb-1">Pollfish</h3>
                                                                            <ul class="dt-list dt-list-bordered dt-list-cm-0 flex-nowrap">
                                                                                <li class="dt-list__item">
                                                                                    <p class="dt-indicator-title text-muted">Surveys</p>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        <img class="img-fluid dt-card__tools responsive" width="60" src="/assets/images/members/pollfish.jpg" alt="Pollfish">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
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

<?php
$this->load->view('layout/foot');
?>


