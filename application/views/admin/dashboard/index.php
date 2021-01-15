<?php
    $this->load->view('layout_admin/head');
?>

<!-- Root -->
<div class="dt-root">
    <div class="dt-root__inner">
        <?php
            $this->load->view('layout_admin/header');
        ?>
        <!-- Site Main -->
        <main class="dt-main">
            <?php
                $this->load->view('layout_admin/sidebar');
            ?>
            <!-- Site Content Wrapper -->
            <div class="dt-content-wrapper">

                <!-- Site Content -->
                <div class="dt-content">
                    <!-- Page Header -->
                    <div class="dt-page__header">
                        <h1 class="dt-page__title">Dashboard</h1>
                    </div>
                    <!-- /page header -->

                    <!-- Grid -->
                    <div class="row">
                        <!-- Grid Item -->
                        <div class="col-xl-3 col-sm-6 col-12">
                            <!-- Card -->
                            <div class="dt-card">
                                <!-- Card Body -->
                                <div class="dt-card__body px-5 py-4">
                                    <h6 class="text-body text-uppercase mb-2">No Of Users</h6>
                                    <div class="d-flex align-items-baseline mb-4">
                                        <span class="display-4 font-weight-500 text-dark mr-2">
                                            <?= isset($users) ? count($users) : ''; ?>
                                        </span>
                                        <div class="d-flex align-items-center">
                                            <div class="trending-section font-weight-500 text-success mr-2">
                                                <span class="value"></span>
                                            </div>
                                            <span class="f-12"></span>
                                        </div>
                                    </div>
                                    <div class="dt-indicator-item__info mb-2" data-fill="62" data-max="100">
                                        <div class="dt-indicator-item__bar">
                                            <div class="dt-indicator-item__fill fill-pointer bg-primary"></div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /bard body -->

                            </div>
                            <!-- /card -->

                        </div>
                        <!-- /grid item -->

                        <!-- Grid Item -->
                        <div class="col-xl-3 col-sm-6 col-12">
                            <!-- Card -->
                            <div class="dt-card">
                                <!-- Card Body -->
                                <div class="dt-card__body px-5 py-4">
                                    <h6 class="text-body text-uppercase mb-2">Pending Messages</h6>
                                    <div class="d-flex align-items-baseline mb-4">
                                        <span class="display-4 font-weight-500 text-dark mr-2"><?= isset($messages) ? $messages : 0; ?> </span>
                                        <div class="d-flex align-items-center">
                                            <span class="f-12"></span>
                                        </div>
                                    </div>
                                    <div class="dt-indicator-item__info mb-2" data-fill="48" data-max="100">
                                        <div class="dt-indicator-item__bar">
                                            <div class="dt-indicator-item__fill fill-pointer bg-warning"></div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /bard body -->

                            </div>
                            <!-- /card -->

                        </div>
                        <!-- /grid item -->

                        <!-- Grid Item -->
                        <div class="col-xl-3 col-sm-6 col-12">
                            <!-- Card -->
                            <div class="dt-card">
                                <!-- Card Body -->
                                <div class="dt-card__body px-5 py-4">
                                    <h6 class="text-body text-uppercase mb-2">Unread Messages</h6>
                                    <div class="d-flex align-items-baseline mb-4">
                                        <span class="display-4 font-weight-500 text-dark mr-2">84,729</span>

                                        <div class="d-flex align-items-center">
                                            <span class="f-12">Avg. 327 visits daily</span>
                                        </div>
                                    </div>
                                    <div class="dt-indicator-item__info mb-2" data-fill="85" data-max="100">
                                        <div class="dt-indicator-item__bar">
                                            <div class="dt-indicator-item__fill fill-pointer bg-success"></div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /bard body -->
                            </div>
                            <!-- /card -->
                        </div>
                        <!-- /grid item -->

                        <!-- Grid Item -->
                        <div class="col-xl-3 col-sm-6 col-12">

                            <!-- Card -->
                            <div class="dt-card">

                                <!-- Card Body -->
                                <div class="dt-card__body px-5 py-4">
                                    <h6 class="text-body text-uppercase mb-2">online queries</h6>
                                    <div class="d-flex align-items-baseline mb-4">
                                        <span class="display-4 font-weight-500 text-dark mr-2">87,239</span>

                                        <div class="d-flex align-items-center">
                                            <div class="trending-section font-weight-500 text-success mr-2">
                                                <span class="value">38%</span>
                                                <i class="icon icon-pointer-up"></i>
                                            </div>
                                            <span class="f-12">past month</span>
                                        </div>
                                    </div>

                                    <div class="dt-indicator-item__info mb-2" data-fill="90" data-max="100">
                                        <div class="dt-indicator-item__bar">
                                            <div class="dt-indicator-item__fill fill-pointer bg-secondary"></div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /bard body -->

                            </div>
                            <!-- /card -->

                        </div>
                        <!-- /grid item -->

                    </div>
                    <!-- /grid -->
                <!-- Footer -->
                <footer class="dt-footer">
                    Copyright. RewardsVine © 2020
                </footer>
                <!-- /footer -->
            </div>
            <!-- /site content wrapper -->
        </main>

    </div>
</div>
<!-- /root -->

<?php
$this->load->view('layout_admin/foot');
?>

