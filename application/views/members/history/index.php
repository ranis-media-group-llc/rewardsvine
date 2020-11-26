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
                                                <h3 class="dt-card__title">History</h3>
                                            </div>
                                        </div>
                                        <br><br>
                                        <div class="tab-content">
                                            <div class="col-md-12">
                                                <div class="card-header card-nav bg-transparent border-bottom d-sm-flex justify-content-sm-between">
                                                    <ul class="card-header-links nav nav-underline" role="tablist">
                                                        <li class="nav-item">
                                                            <a class="nav-link active" data-toggle="tab" href="#tab-pane1"
                                                               role="tab"
                                                               aria-controls="tab-pane1"
                                                               aria-selected="true">Points History</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" data-toggle="tab" href="#tab-pane2"
                                                               role="tab"
                                                               aria-controls="tab-pane2"
                                                               aria-selected="true">Redeem History</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="card-body pb-2">
                                                    <div class="tab-content mt-5">
                                                        <div id="tab-pane1" class="tab-pane active">
                                                            <div class="table-responsive">
                                                                <?php if(isset($history)) : ?>
                                                                    <?php foreach($history as $his) : ?>
                                                                        <table id="myTable" class="display">
                                                                            <thead>
                                                                            <tr>
                                                                                <th>Offer ID</th>
                                                                                <th>Offer Name</th>
                                                                                <th>Points Redeem</th>
                                                                                <th>Ad Network</th>
                                                                                <th>DateTime</th>
                                                                            </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                            <tr>
                                                                                <td><?= $his->offer_id; ?></td>
                                                                                <td><?= $his->offer_name; ?></td>
                                                                                <td><?= $his->points_added; ?></td>
                                                                                <td><?= $his->ad_network; ?></td>
                                                                                <td><?= $his->offer_datetime; ?></td>
                                                                            </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    <?php endforeach; ?>
                                                                <?php endif; ?>
                                                            </div>
                                                        </div>

                                                        <div id="tab-pane2" class="tab-pane fade">
                                                            <div class="table-responsive">
                                                                <?php if(isset($redeems)) : ?>
                                                                    <?php foreach($redeems as $redeem) : ?>
                                                                        <table id="redeem_table" class="display">
                                                                            <thead>
                                                                            <tr>
                                                                                <td >User ID</td>
                                                                                <td >Redeem Option</td>
                                                                                <td >Redeem Amount</td>
                                                                                <td >Redeem Points</td>
                                                                                <td >Redeem Message</td>
                                                                                <td >Date</td>
                                                                                <td >Status</td>
                                                                            </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                            <tr>
                                                                                <td><?= $redeem->user_id; ?></td>
                                                                                <td><?= $redeem->redeem_option; ?></td>
                                                                                <td><?= $redeem->redeem_amt; ?></td>
                                                                                <td><?= $redeem->redeem_points; ?></td>
                                                                                <td><?= $redeem->redeem_message; ?></td>
                                                                                <td><?= $redeem->redeem_date; ?></td>
                                                                                <td>
                                                                                    <?php
                                                                                    if($redeem->status == 0){
                                                                                        echo 'Pending';
                                                                                    }else if($redeem->status == 1){
                                                                                        echo 'In Progress';
                                                                                    }else if($redeem->status == 2){
                                                                                        echo 'Rejected';
                                                                                    }else if($redeem->status == 3){
                                                                                        echo 'Completed';
                                                                                    }
                                                                                    ?>
                                                                                </td>
                                                                            </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    <?php endforeach; ?>
                                                                <?php endif; ?>
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

<?php
$this->load->view('layout/foot');
?>

<script>
    $(document).ready( function () {
        $('#myTable').DataTable();
        $('#redeem_table').DataTable({
            "responsive" : true,
            "pageLength": 10,
        });
    } );
</script>

