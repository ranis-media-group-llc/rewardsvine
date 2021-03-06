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
                                            <h3 class="dt-card__title">Change My Profile</h3>
                                        </div>
                                    </div>
                                    <br><br>
                                    <div class="tab-content">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <form method="post">
                                                        <div class="form-group">
                                                            <label class="" for="user-name">Fullname</label>
                                                            <input type="text" value="<?= $profile->fullname; ?>" class="form-control" name="title" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="" for="email-1">Country</label>
                                                            <input type="text" value="<?= $profile->country; ?>" class="form-control" name="title" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <a href="<?= base_url('profile/'); ?>" class="btn btn-primary text-uppercase">
                                                                <i class="icon icon-remove icon-fw icon-lg"></i> Cancel
                                                            </a>
                                                            <button type="submit" class="btn btn-primary text-uppercase"><i class="icon icon-login-page icon-fw icon-lg"></i> Save</button>
                                                        </div>
                                                    </form>
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

