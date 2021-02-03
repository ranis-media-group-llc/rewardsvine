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
                                    <div class="cards">
                                        <br><br>
                                        <div class="tab-content">
                                            <div class="col-md-12">
                                                <div class="profile">
                                                <!-- Profile Banner -->
                                                <div class="profile__banner">

                                                    <!-- Profile Banner Top -->
                                                    <div class="profile__banner-detail">
                                                        <!-- Avatar Wrapper -->
                                                        <div class="dt-avatar-wrapper">
                                                            <!-- Avatar -->
                                                            <img class="dt-avatar dt-avatar__shadow size-90 mr-sm-4"
                                                                 src="https://via.placeholder.com/150x150" alt="Reece Jacklin">
                                                            <!-- /avatar -->

                                                            <!-- Info -->
                                                            <div class="dt-avatar-info">
                                                                <span class="dt-avatar-name display-4 mb-2 font-weight-light">
                                                                    <?= $_SESSION['user']->fullname; ?>
                                                                </span>
                                                                <span class="f-16"><?= $_SESSION['user']->country; ?></span>
                                                            </div>
                                                            <!-- /info -->
                                                        </div>
                                                        <!-- /avatar wrapper -->

                                                        <div class="ml-sm-auto">
                                                            <!-- List -->
                                                            <ul class="dt-list dt-list-bordered dt-list-col-6">
                                                                <!-- List Item -->
                                                                <li class="dt-list__item text-center">
                                                                    <span class="h4 font-weight-500 mb-0 text-white"><?= isset($users_data->points) ? $users_data->points : '0';  ?></span>
                                                                    <span class="d-block f-12">Points</span>
                                                                </li>
                                                                <!-- /list item -->
                                                                <!-- List Item -->
                                                                <li class="dt-list__item text-center">
                                                                    <span class="h4 font-weight-500 mb-0 text-white">0</span>
                                                                    <span class="d-block f-12">Redeem Count</span>
                                                                </li>
                                                                <!-- /list item -->
                                                                <!-- List Item
                                                                <li class="dt-list__item text-center">
                                                                    <span class="h4 font-weight-500 mb-0 text-white">324</span>
                                                                    <span class="d-block f-12">Friends</span>
                                                                </li>
                                                                 /list item -->
                                                            </ul>
                                                            <!-- /list -->
                                                        </div>
                                                    </div>
                                                    <!-- /profile banner top -->

                                                    <!-- Profile Banner Bottom -->
                                                    <div class="profile__banner-navigation">
                                                        <!-- Dropdown -->
                                                        <div class="dropdown pl-3 mt-2 ml-auto">
                                                            <!-- Dropdown Button -->
                                                            <a href="#" class="dropdown-toggle no-arrow text-white" data-toggle="dropdown"
                                                               aria-haspopup="true" aria-expanded="false">
                                                                <i class="icon icon-settings icon-xl mr-2"></i><span class="d-none d-sm-inline-block">Settings</span>
                                                            </a>
                                                            <!-- /dropdown button -->
                                                            <!-- Dropdown Menu -->
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <a class="dropdown-item" href="<?= base_url('profile/edit'); ?>">Edit Profile</a>
                                                                <div class="dropdown-divider"></div>
                                                                <a class="dropdown-item" href="<?= base_url('profile/password'); ?>">Change Password</a>
                                                                <div class="dropdown-divider"></div>
                                                            </div>
                                                            <!-- /dropdown menu -->
                                                        </div>
                                                        <!-- /dropdown -->
                                                    </div>
                                                    <!-- /profile banner bottom -->
                                                </div>
                                                <!-- /profile banner -->
                                                    <!-- Grid Item -->
                                                    <div class="col-md-6 order-xl-1">

                                                        <!-- Card -->
                                                        <div class="dt-card dt-card__full-height">

                                                            <!-- Card Header -->
                                                            <div class="dt-card__header pt-6">

                                                                <!-- Card Heading -->
                                                                <div class="dt-card__heading">
                                                                    <h3 class="dt-card__title">Contact</h3>
                                                                </div>
                                                                <!-- /card heading -->

                                                            </div>
                                                            <!-- /card header -->

                                                            <!-- Card Body -->
                                                            <div class="dt-card__body">
                                                                <!-- Media -->
                                                                <div class="media mb-5">

                                                                    <i class="icon icon-mail icon-xl mr-5"></i>

                                                                    <!-- Media Body -->
                                                                    <div class="media-body">
                                                                        <span class="d-block text-light-gray f-12 mb-1">Email</span>
                                                                        <a href="javascript:void(0)"><?= $_SESSION['user']->email_address ?></a>
                                                                    </div>
                                                                    <!-- /media body -->

                                                                </div>
                                                                <!-- /media -->

                                                                <!-- Media -->
                                                                <div class="media mb-5">

                                                                    <i class="icon icon-link icon-xl mr-5"></i>

                                                                    <!-- Media Body -->
                                                                    <div class="media-body">
                                                                        <span class="d-block text-light-gray f-12 mb-1">Facebook Profile</span>
                                                                        <a href="javascript:void(0)">N/A</a>
                                                                    </div>
                                                                    <!-- /media body -->

                                                                </div>
                                                                <!-- /media -->

                                                                <!-- Media -->
                                                                <div class="media">

                                                                    <i class="icon icon-phone-o icon-xl mr-5"></i>

                                                                    <!-- Media Body -->
                                                                    <div class="media-body">
                                                                        <span class="d-block text-light-gray f-12 mb-1">Phone</span>
                                                                        <span class="h5">N/A</span>
                                                                    </div>
                                                                    <!-- /media body -->

                                                                </div>
                                                                <!-- /media -->
                                                            </div>
                                                            <!-- /card body -->

                                                        </div>
                                                        <!-- /card -->

                                                    </div>
                                                    <!-- /grid item -->

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

