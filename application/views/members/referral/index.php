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
                                                <h3 class="dt-card__title">Referral</h3>
                                            </div>
                                        </div>
                                        <br><br>
                                        <div class="tab-content">
                                            <div class="col-md-12">
                                                    <div class="row">
                                                        <div class="col-md-10">
                                                            <input type="text" name="job_tag" class="form-control" value="<?= 'https://members.rewardsvine.com/auth/signup?i='. $_SESSION['user']->user_id; ?>" id="job_tags_right" readonly>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <button type="button" class="btn btn-sm btn-primary">
                                                                <span class="icon icon-task-manager icon-fw icon-lg"  style=""></span> Copy</button>
                                                        </div>
                                                    </div>
                                                <br><br>
                                                <div class="table-responsive">
                                                    <table id="referral_table" class="table table-hover table-bordered table-striped">
                                                        <thead>
                                                        <tr>
                                                            <th>Name</th>
                                                            <th>DateTime</th>
                                                            <th>Points</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php foreach($referrals as $his) : ?>
                                                                <tr>
                                                                    <td><?= $his->offer_id; ?></td>
                                                                    <td><?= $his->offer_name; ?></td>
                                                                    <td><?= $his->points_added; ?></td>
                                                                </tr>
                                                            <?php endforeach; ?>
                                                        </tbody>
                                                    </table>
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
<script>
    $(document).ready( function () {
        $('#referral_table').DataTable({
            "responsive" : true,
            "pageLength": 10,
            "order" : [],
            "searching" : false,

        });
    } );
</script>

