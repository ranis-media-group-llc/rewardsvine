<?php
$this->load->view('layout_superadmin/head');
?>
<link rel="stylesheet" href="//cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
<!-- Root -->
<div class="dt-root">
    <div class="dt-root__inner">
        <?php
        $this->load->view('layout_superadmin/header');
        ?>
        <!-- Site Main -->
        <main class="dt-main">
            <?php
            $this->load->view('layout_superadmin/sidebar');
            ?>

            <!-- Site Content Wrapper -->
            <div class="dt-content-wrapper">

                <!-- Site Content -->
                <div class="dt-content">
                    <!-- Page Header -->
                    <div class="dt-page__header">
                        <h1 class="dt-page__title">Points History Log - <?= $member_info->fullname; ?></h1>
                    </div>

                    <div class="row">
                        <div class="col-xl-12">
                            <div class="table-responsive">
                                <table class="table table-striped table-hover dt-responsive display nowrap" id="gift_cards_table">
                                    <thead>
                                    <tr>
                                        <td >Offer ID</td>
                                        <td >Offer Name</td>
                                        <td >Points</td>
                                        <td >User ID</td>
                                        <td >Date</td>
                                        <td >Ad Network</td>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($member_data as $history) :  ?>
                                        <tr>
                                            <td><?= $history->offer_id; ?></td>
                                            <td><?= $history->offer_name; ?></td>
                                            <td><?= $history->points_added; ?></td>
                                            <td><?= $history->user_id; ?></td>
                                            <td><?= $history->offer_datetime; ?></td>
                                            <td><?= $history->ad_network; ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Footer -->
                <footer class="dt-footer">
                    Copyright. RewardsVine © 2020
                </footer>
                <!-- /site content wrapper -->
            </div>
        </main>

    </div>
</div>

<?php
$this->load->view('layout_superadmin/foot');
?>

<script>
    $(document).ready( function () {
        $('#gift_cards_table').DataTable({
            "responsive" : true,
            "pageLength": 10,
        });
    });
</script>