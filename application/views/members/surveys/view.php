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
                                            <h3 class="dt-card__title"><?= isset($header_title) ? $header_title : ''; ?></h3>
                                        </div>
                                    </div>
                                    <br><br>
                                    <div class="tab-content">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <?php if(isset($frame) && $header_title!="Pollfish"): ?>
                                                    <iframe width="100%" height="650px" src="<?= $frame; ?>" frameborder="0" allowfullscreen></iframe>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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

<?php if( isset($header_title) && $header_title== "Pollfish"): ?>

    <script type="text/javascript">
        $(document).ready(function () {
            document.querySelector('body').onfocus = function () {
                Pollfish.hide();
                Pollfish.start(pollfishConfig);
            };
        });
            var pollfishConfig = {
                api_key: "8377d41d-0641-4b60-9330-650eb54431df",
                indicator_position: "BOTTOM_RIGHT",
                debug: true,
                offerwall: true,
                uuid: "<?= $_SESSION['user']->user_id; ?>",
                survey_format : 0
            };
    </script>
    <script src="https://storage.googleapis.com/pollfish_production/sdk/webplugin/pollfish.min.js"></script>

<?php endif; ?>
