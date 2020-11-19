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
                        <h1 class="dt-page__title">Users</h1>
                    </div>

                    <div class="row">
                        <div class="col-xl-12">
                            <table class="table" id="gift_cards_table">
                                <thead>
                                    <tr>
                                        <td >Name</td>
                                        <td >Email</td>
                                        <td >Date Created</td>
                                        <td >Role</td>
                                        <td >Points</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($users as $user) :  ?>
                                        <tr>
                                            <td><?= $user->fullname; ?></td>
                                            <td><?= $user->email_address; ?></td>
                                            <td><?= $user->date_created; ?></td>
                                            <td><?= $user->role; ?></td>
                                            <td><?= $user->points; ?></td>
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
