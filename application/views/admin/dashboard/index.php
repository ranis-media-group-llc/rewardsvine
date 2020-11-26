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

                    <!-- Grid -->
                    <div class="row">

                        <!-- Grid Item -->
                        <div class="col-xl-4 col-md-6 order-xl-1">

                            <!-- Card -->
                            <div class="dt-card bg-primary text-white">

                                <!-- Card Header -->
                                <div class="dt-card__header pt-6 px-6 mb-4">

                                    <!-- Card Heading -->
                                    <div class="dt-card__heading">
                                        <h3 class="dt-card__title text-white">Your Current Plan</h3>
                                    </div>
                                    <!-- /card heading -->
                                </div>
                                <!-- /card header -->

                                <!-- Card Body -->
                                <div class="dt-card__body px-6">
                                    <!-- Grid -->
                                    <div class="row no-gutters">
                                        <!-- Grid Item -->
                                        <div class="col-6 pr-2 border-right">
                                            <div class="display-1 font-weight-500 mb-3">
                                                $19<span class="d-inline-block f-14">/month</span>
                                            </div>
                                            <ul class="pl-4 mb-0 dt-list-square">
                                                <li>Max listing items 2K</li>
                                                <li>Max agents - 10</li>
                                            </ul>
                                        </div>
                                        <!-- /grid item -->
                                        <!-- Grid Item -->
                                        <div class="col-6 text-center">
                                            <p>Expires in 80 days</p>
                                            <div class="mb-3">
                                                <a href="javascript:void(0)"
                                                   class="btn btn-secondary btn-xs text-uppercase">Renew Plan</a>
                                            </div>
                                            <a href="javascript:void(0)" class="text-white">Other Plans</a>
                                        </div>
                                        <!-- /grid item -->
                                    </div>
                                    <!-- /grid -->
                                </div>
                                <!-- /card body -->

                            </div>
                            <!-- /card -->

                        </div>
                        <!-- /grid item -->

                        <!-- Grid Item -->
                        <div class="col-xl-4 col-md-6 order-xl-3">

                            <!-- Card -->
                            <div class="dt-card">

                                <!-- Card Body -->
                                <div class="dt-card__body p-6">
                                    <!-- Media -->
                                    <div class="media mb-3">

                                        <!-- Avatar -->
                                        <img class="img-fluid mr-6" src="../assets/images/widget/home-logo.jpg"
                                             alt="project">
                                        <!-- /avatar -->

                                        <!-- Media Body -->
                                        <div class="media-body align-self-center">
                                            <div class="h2 mb-1">Modern home</div>
                                            <span class="d-block text-light-gray">Biloxy, Boston</span>
                                        </div>
                                        <!-- /media body -->

                                    </div>
                                    <!-- /media -->

                                    <!-- Card text -->
                                    <p>Structure sales Pvt. Ltd is boston’s reputed government construction company since 2011.</p>
                                    <!-- /card text -->

                                    <!-- Button -->
                                    <a href="javascript:void(0)" class="card-link">Read More</a>
                                    <!-- /button -->

                                </div>
                                <!-- /card body -->

                            </div>
                            <!-- /card -->

                        </div>
                        <!-- /grid item -->

                        <!-- Grid Item -->
                        <div class="col-xl-4 order-xl-2">

                            <!-- Card -->
                            <div class="dt-card">

                                <!-- Card Header -->
                                <div class="dt-card__header mb-0">

                                    <!-- Card Heading -->
                                    <div class="dt-card__heading">
                                        <h3 class="dt-card__title">927 Deals Closed</h3>
                                        <span class="text-light-gray f-12">This year</span>
                                    </div>
                                    <!-- /card heading -->

                                    <!-- Card Tools -->
                                    <div class="dt-card__tools align-self-start">
                    <span class="dt-card__more font-weight-normal mr-1">
                        <span class="dot-shape bg-secondary mr-2"></span>Queries
                    </span>
                                        <span class="dt-card__more font-weight-normal">
                        <span class="dot-shape bg-primary mr-2"></span>Closed Deals
                    </span>
                                    </div>
                                    <!-- /card tools -->

                                </div>
                                <!-- /card header -->

                                <!-- Card Body -->
                                <div class="dt-card__body px-4 pb-1">

                                    <!-- Chart Body -->
                                    <div class="dt-chart__body my-n2">
                                        <div class="ct-line-chart stroke-w-1 stroke-dasharray-0 fill-opacity-0_5"></div>
                                    </div>
                                    <!-- /chart body -->

                                </div>
                                <!-- /card body -->

                            </div>
                            <!-- /card -->

                        </div>
                        <!-- /grid item -->

                        <!-- Grid Item -->
                        <div class="col-xl-8 order-xl-4">
                            <!-- Grid -->
                            <div class="row">

                                <!-- Grid Item -->
                                <div class="col-12">
                                    <div class="w-100 ps-custom-scrollbar mb-6">
                                        <!-- List -->
                                        <ul class="dt-list dt-list-xxl dt-list-bordered flex-nowrap">
                                            <!-- List Item -->
                                            <li class="dt-list__item text-center col">
                                                <div class="dt-avatar-wrapper flex-column">
                                                    <!-- Image -->
                                                    <img src="https://via.placeholder.com/150x150" alt="Noah Owens"
                                                         class="dt-avatar mb-4 size-80">
                                                    <!-- /image -->
                                                    <!-- Content -->
                                                    <div class="dt-avatar-info">
                                                        <span class="dt-avatar-name mb-1 text-nowrap">Noah Owens</span>
                                                        <!-- List -->
                                                        <ul class="dt-list dt-list-bordered dt-list-cm-0 f-12 flex-nowrap">
                                                            <!-- List Item -->
                                                            <li class="dt-list__item">
                                                                <div class="d-inline-flex align-items-center">
                                                                    <i class="icon icon-star-fill mr-2 text-yellow"></i>
                                                                    <span>5.0</span>
                                                                </div>
                                                            </li>
                                                            <!-- /list item -->
                                                            <!-- List Item -->
                                                            <li class="dt-list__item">
                                                                <span class="d-inline-block text-nowrap">21 Deals</span>
                                                            </li>
                                                            <!-- /list item -->
                                                        </ul>
                                                        <!-- /list -->
                                                    </div>
                                                    <!-- /content -->
                                                </div>
                                            </li>
                                            <!-- /list item -->
                                            <!-- List Item -->
                                            <li class="dt-list__item text-center col">
                                                <div class="dt-avatar-wrapper flex-column">
                                                    <!-- Image -->
                                                    <img src="https://via.placeholder.com/150x150"
                                                         alt="Ellen Manning" class="dt-avatar mb-4 size-80">
                                                    <!-- /image -->
                                                    <!-- Content -->
                                                    <div class="dt-avatar-info">
                                                        <span class="dt-avatar-name mb-1 text-nowrap">Ellen Manning</span>
                                                        <!-- List -->
                                                        <ul class="dt-list dt-list-bordered dt-list-cm-0 f-12 flex-nowrap">
                                                            <!-- List Item -->
                                                            <li class="dt-list__item">
                                                                <div class="d-inline-flex align-items-center">
                                                                    <i class="icon icon-star-fill mr-2 text-yellow"></i>
                                                                    <span>5.0</span>
                                                                </div>
                                                            </li>
                                                            <!-- /list item -->
                                                            <!-- List Item -->
                                                            <li class="dt-list__item">
                                                                <span class="d-inline-block text-nowrap">21 Deals</span>
                                                            </li>
                                                            <!-- /list item -->
                                                        </ul>
                                                        <!-- /list -->
                                                    </div>
                                                    <!-- /content -->
                                                </div>
                                            </li>
                                            <!-- /list item -->
                                            <!-- List Item -->
                                            <li class="dt-list__item text-center col">
                                                <div class="dt-avatar-wrapper flex-column">
                                                    <!-- Image -->
                                                    <img src="https://via.placeholder.com/150x150" alt="Angel Jones"
                                                         class="dt-avatar mb-4 size-80">
                                                    <!-- /image -->
                                                    <!-- Content -->
                                                    <div class="dt-avatar-info">
                                                        <span class="dt-avatar-name mb-1 text-nowrap">Angel Jones</span>
                                                        <!-- List -->
                                                        <ul class="dt-list dt-list-bordered dt-list-cm-0 f-12 flex-nowrap">
                                                            <!-- List Item -->
                                                            <li class="dt-list__item">
                                                                <div class="d-inline-flex align-items-center">
                                                                    <i class="icon icon-star-fill mr-2 text-yellow"></i>
                                                                    <span>5.0</span>
                                                                </div>
                                                            </li>
                                                            <!-- /list item -->
                                                            <!-- List Item -->
                                                            <li class="dt-list__item">
                                                                <span class="d-inline-block text-nowrap">21 Deals</span>
                                                            </li>
                                                            <!-- /list item -->
                                                        </ul>
                                                        <!-- /list -->
                                                    </div>
                                                    <!-- /content -->
                                                </div>
                                            </li>
                                            <!-- /list item -->
                                            <!-- List Item -->
                                            <li class="dt-list__item text-center col">
                                                <div class="dt-avatar-wrapper flex-column">
                                                    <!-- Image -->
                                                    <img src="https://via.placeholder.com/150x150" alt="Mila Alba"
                                                         class="dt-avatar mb-4 size-80">
                                                    <!-- /image -->
                                                    <!-- Content -->
                                                    <div class="dt-avatar-info">
                                                        <span class="dt-avatar-name mb-1 text-nowrap">Dollie Norton</span>
                                                        <!-- List -->
                                                        <ul class="dt-list dt-list-bordered dt-list-cm-0 f-12 flex-nowrap">
                                                            <!-- List Item -->
                                                            <li class="dt-list__item">
                                                                <div class="d-inline-flex align-items-center">
                                                                    <i class="icon icon-star-fill mr-2 text-yellow"></i>
                                                                    <span>5.0</span>
                                                                </div>
                                                            </li>
                                                            <!-- /list item -->
                                                            <!-- List Item -->
                                                            <li class="dt-list__item">
                                                                <span class="d-inline-block text-nowrap">21 Deals</span>
                                                            </li>
                                                            <!-- /list item -->
                                                        </ul>
                                                        <!-- /list -->
                                                    </div>
                                                    <!-- /content -->
                                                </div>
                                            </li>
                                            <!-- /list item -->
                                            <!-- List Item -->
                                            <li class="dt-list__item text-center col">
                                                <div class="dt-avatar-wrapper flex-column">
                                                    <!-- Image -->
                                                    <img src="https://via.placeholder.com/150x150"
                                                         alt="Joshua Brian"
                                                         class="dt-avatar mb-4 size-80">
                                                    <!-- /image -->
                                                    <!-- Content -->
                                                    <div class="dt-avatar-info">
                                                        <span class="dt-avatar-name mb-1 text-nowrap">Joshua Brian</span>
                                                        <!-- List -->
                                                        <ul class="dt-list dt-list-bordered dt-list-cm-0 f-12 flex-nowrap">
                                                            <!-- List Item -->
                                                            <li class="dt-list__item">
                                                                <div class="d-inline-flex align-items-center">
                                                                    <i class="icon icon-star-fill mr-2 text-yellow"></i>
                                                                    <span>5.0</span>
                                                                </div>
                                                            </li>
                                                            <!-- /list item -->
                                                            <!-- List Item -->
                                                            <li class="dt-list__item">
                                                                <span class="d-inline-block text-nowrap">21 Deals</span>
                                                            </li>
                                                            <!-- /list item -->
                                                        </ul>
                                                        <!-- /list -->
                                                    </div>
                                                    <!-- /content -->
                                                </div>
                                            </li>
                                            <!-- /list item -->
                                            <!-- List Item -->
                                            <li class="dt-list__item text-center col">
                                                <div class="dt-avatar-wrapper flex-column">
                                                    <!-- Image -->
                                                    <img src="https://via.placeholder.com/150x150" alt="Amay Mathur"
                                                         class="dt-avatar mb-4 size-80">
                                                    <!-- /image -->
                                                    <!-- Content -->
                                                    <div class="dt-avatar-info">
                                                        <span class="dt-avatar-name mb-1 text-nowrap">Amay Mathur</span>
                                                        <!-- List -->
                                                        <ul class="dt-list dt-list-bordered dt-list-cm-0 f-12 flex-nowrap">
                                                            <!-- List Item -->
                                                            <li class="dt-list__item">
                                                                <div class="d-inline-flex align-items-center">
                                                                    <i class="icon icon-star-fill mr-2 text-yellow"></i>
                                                                    <span>5.0</span>
                                                                </div>
                                                            </li>
                                                            <!-- /list item -->
                                                            <!-- List Item -->
                                                            <li class="dt-list__item">
                                                                <span class="d-inline-block text-nowrap">21 Deals</span>
                                                            </li>
                                                            <!-- /list item -->
                                                        </ul>
                                                        <!-- /list -->
                                                    </div>
                                                    <!-- /content -->
                                                </div>
                                            </li>
                                            <!-- /list item -->
                                            <!-- List Item -->
                                            <li class="dt-list__item text-center col">
                                                <div class="dt-avatar-wrapper flex-column">
                                                    <!-- Image -->
                                                    <img src="https://via.placeholder.com/150x150" alt="Selena"
                                                         class="dt-avatar mb-4 size-80">
                                                    <!-- /image -->
                                                    <!-- Content -->
                                                    <div class="dt-avatar-info">
                                                        <span class="dt-avatar-name mb-1 text-nowrap">Selena</span>
                                                        <!-- List -->
                                                        <ul class="dt-list dt-list-bordered dt-list-cm-0 f-12 flex-nowrap">
                                                            <!-- List Item -->
                                                            <li class="dt-list__item">
                                                                <div class="d-inline-flex align-items-center">
                                                                    <i class="icon icon-star-fill mr-2 text-yellow"></i>
                                                                    <span>5.0</span>
                                                                </div>
                                                            </li>
                                                            <!-- /list item -->
                                                            <!-- List Item -->
                                                            <li class="dt-list__item">
                                                                <span class="d-inline-block text-nowrap">21 Deals</span>
                                                            </li>
                                                            <!-- /list item -->
                                                        </ul>
                                                        <!-- /list -->
                                                    </div>
                                                    <!-- /content -->
                                                </div>
                                            </li>
                                            <!-- /list item -->
                                            <!-- List Item -->
                                            <li class="dt-list__item text-center col">
                                                <div class="dt-avatar-wrapper flex-column">
                                                    <!-- Image -->
                                                    <img src="https://via.placeholder.com/150x150" alt="Chris Mathew"
                                                         class="dt-avatar mb-4 size-80">
                                                    <!-- /image -->
                                                    <!-- Content -->
                                                    <div class="dt-avatar-info">
                                                        <span class="dt-avatar-name mb-1 text-nowrap">Chris Mathew</span>
                                                        <!-- List -->
                                                        <ul class="dt-list dt-list-bordered dt-list-cm-0 f-12 flex-nowrap">
                                                            <!-- List Item -->
                                                            <li class="dt-list__item">
                                                                <div class="d-inline-flex align-items-center">
                                                                    <i class="icon icon-star-fill mr-2 text-yellow"></i>
                                                                    <span>5.0</span>
                                                                </div>
                                                            </li>
                                                            <!-- /list item -->
                                                            <!-- List Item -->
                                                            <li class="dt-list__item">
                                                                <span class="d-inline-block text-nowrap">21 Deals</span>
                                                            </li>
                                                            <!-- /list item -->
                                                        </ul>
                                                        <!-- /list -->
                                                    </div>
                                                    <!-- /content -->
                                                </div>
                                            </li>
                                            <!-- /list item -->
                                            <!-- List Item -->
                                            <li class="dt-list__item text-center col">
                                                <div class="dt-avatar-wrapper flex-column">
                                                    <!-- Image -->
                                                    <img src="https://via.placeholder.com/150x150" alt="Nikki Johnson"
                                                         class="dt-avatar mb-4 size-80">
                                                    <!-- /image -->
                                                    <!-- Content -->
                                                    <div class="dt-avatar-info">
                                                        <span class="dt-avatar-name mb-1 text-nowrap">Nikki Johnson</span>
                                                        <!-- List -->
                                                        <ul class="dt-list dt-list-bordered dt-list-cm-0 f-12 flex-nowrap">
                                                            <!-- List Item -->
                                                            <li class="dt-list__item">
                                                                <div class="d-inline-flex align-items-center">
                                                                    <i class="icon icon-star-fill mr-2 text-yellow"></i>
                                                                    <span>5.0</span>
                                                                </div>
                                                            </li>
                                                            <!-- /list item -->
                                                            <!-- List Item -->
                                                            <li class="dt-list__item">
                                                                <span class="d-inline-block text-nowrap">21 Deals</span>
                                                            </li>
                                                            <!-- /list item -->
                                                        </ul>
                                                        <!-- /list -->
                                                    </div>
                                                    <!-- /content -->
                                                </div>
                                            </li>
                                            <!-- /list item -->
                                        </ul>
                                        <!-- /list -->
                                    </div>
                                </div>
                                <!-- /grid item -->


                            </div>
                            <!-- /grid -->

                        </div>


                    </div>
                    <!-- /grid -->                    </div>

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

