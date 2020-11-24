<?php
$this->load->view('layout/head');
?>
<link rel="stylesheet" href="//cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
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
                                            <h3 class="dt-card__title"><?= $slug; ?></h3>
                                        </div>
                                    </div>
                                    <br><br>
                                    <div class="tab-content">
                                        <div class="col-md-12">
                                            <form method="post" enctype="multipart/form-data" >
                                                <?php if(isset($error))
                                                { ?>
                                                    <div class="alert alert-danger alert-dismissible" role="alert">
                                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span></button>
                                                        <strong>Error! </strong> <?php echo $error; ?>
                                                    </div>
                                                    <?php
                                                } ?>
                                                <div class="form-group">
                                                    <label for="offerwallName">Vendor</label>
                                                    <input type="text" name="slug" class="form-control" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="offerwallName">Amount</label>
                                                    <select class="form-control" data-style="btn-white" name="is_active">
                                                        <option value="1">$5</option>
                                                        <option value="0">$10</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="offerwallLink">Message <small>(You can state here your account number,etc.)</small></label>
                                                    <textarea type="text" name="api_naming" class="form-control"></textarea>
                                                </div>
                                                <a href="javascript:void(0)" class="btn btn-secondary btn-xs text-uppercase">Send
                                                </a>
                                                <br><br><br>
                                            </form>
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