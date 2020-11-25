<?php
    $this->load->view('layout_admin/head');
?>
<link rel="stylesheet" href="//cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
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
                        <h1 class="dt-page__title">Redeem Messages</h1>
                    </div>

                    <div class="row">
                        <div class="col-xl-12">
                            <table class="table" id="gift_cards_table">
                                <thead>
                                    <tr>
                                        <td >User ID</td>
                                        <td >Redeem Option</td>
                                        <td >Redeem Amount</td>
                                        <td >Redeem Points</td>
                                        <td >Redeem Message</td>
                                        <td >Date</td>
                                        <td >Status</td>
                                        <td >Action</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($messages as  $message) :  ?>
                                        <tr>
                                            <td><?= $message->user_id; ?></td>
                                            <td><?= $message->redeem_option; ?></td>
                                            <td><?= $message->redeem_amt; ?></td>
                                            <td><?= $message->redeem_points; ?></td>
                                            <td><?= $message->redeem_message; ?></td>
                                            <td><?= $message->redeem_date; ?></td>
                                            <td>
                                                <?php
                                                    if($message->status == 0){
                                                        echo 'Pending';
                                                    }
                                                ?>
                                            </td>
                                            <td>
                                                <button type="submit" class="btn btn-secondary btn-xs text-uppercase">Accept</button>
                                                <button type="submit" class="btn btn-danger btn-xs text-uppercase">Reject</button>
                                                <button type="submit" class="btn btn-success btn-xs text-uppercase">Done</button>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Footer -->
                <footer class="dt-footer">
                    Copyright Company Name © 2019
                </footer>
            <!-- /site content wrapper -->
            </div>
        </main>

    </div>
</div>

<?php
$this->load->view('layout_admin/foot');
?>

<script>
    $(document).ready( function () {
        $('#gift_cards_table').DataTable({
            "responsive" : true,
            "pageLength": 10,
        });
    } );
</script>
