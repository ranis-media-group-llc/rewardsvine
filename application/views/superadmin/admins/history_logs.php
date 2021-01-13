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
                        <h1 class="dt-page__title">User Settings</h1>
                    </div>

                    <div class="row">
                        <div class="col-xl-12">
                            <div class="table-responsive">
                                <table class="table table-striped table-hover dt-responsive display nowrap" id="gift_cards_table">
                                    <thead>
                                    <tr>
                                        <td >Name</td>
                                        <td >Email</td>
                                        <td >User ID</td>
                                        <td >Date Created</td>
                                        <td >Role</td>
                                        <td >Status</td>
                                        <td >Points</td>
                                        <td >Actions</td>
                                        <td ></td>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($admins as $user) :  ?>
                                        <tr>
                                            <td><?= $user->fullname; ?></td>
                                            <td><?= $user->email_address; ?></td>
                                            <td><?= $user->user_id; ?></td>
                                            <td><?= $user->date_created; ?></td>

                                            <td><?= $user->role; ?></td>

                                            <td>
                                                <?php
                                                if($user->status==0){
                                                    echo 'Unverified';
                                                } else if($user->status==1){
                                                    echo 'Banned';
                                                }else if($user->status==2){
                                                    echo 'Verified';
                                                }else if($user->status==3){
                                                    echo 'Suspended';
                                                }
                                                ?>
                                            </td>
                                            <td>
                                                <?= $user->points; ?>
                                            </td>
                                            <td>
                                                <button id="<?= $user->id; ?>" type="button" data-status="remove" class="btn btn-secondary btn-xs text-uppercase btn_status">Remove</button>
                                                <button id="<?= $user->id; ?>" type="button" data-status="ban" class="btn btn-danger btn-xs text-uppercase btn_status">Ban</button>
                                                <button id="<?= $user->id; ?>" type="button" data-status="suspend" class="btn btn-warning btn-xs text-uppercase btn_status">Suspend</button>
                                            </td>
                                            <td>
                                                <a href="<?= base_url('superadmin/users/history/'.$user->user_id) ?>" data-toggle="tooltip" title="Redeem History Logs" type="button" class="btn btn-success btn-xs text-uppercase ">
                                                    <i class="icon icon-list icon-fw icon-sm"></i>
                                                </a>
                                                <a href="<?= base_url('superadmin/users/history/'.$user->user_id) ?>" data-toggle="tooltip" title="User Settings" type="button" class="btn btn-success btn-xs text-uppercase ">
                                                    <i class="icon icon-settings icon-fw icon-sm"></i>
                                                </a>
                                            </td>
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

        function sucess_add(information,is_reload){
            Swal.fire({
                title: 'Good job!',
                text: information,
                icon: 'success',
                showCancelButton: false,
                confirmButtonColor: '#32243d',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ok'
            }).then((result) => {
                if(is_reload === 1){
                    if (result.value) {
                        window.location.reload();
                    }
                }
            });
        }
        function warning(information){
            Swal.fire({
                title: 'Warning!',
                text: information,
                icon: 'warning',
                showCancelButton: false,
                confirmButtonColor: '#32243d',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ok'
            }).then((result) => {

            });
        }
    } );
</script>
