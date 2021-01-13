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
                            <form method="post">
                                <div class="form-group">
                                    <label class="" for="user-name">Full Name</label>
                                    <input type="text" class="form-control" name="fullname" value="<?= isset($admin_setting) ? $admin_setting->fullname : ''; ?>" disabled>
                                </div>
                                <div class="form-group">
                                    <label class="" for="user-name">User ID</label>
                                    <input type="text" class="form-control" name="fullname" value="<?= isset($admin_setting) ? $admin_setting->user_id : ''; ?>" disabled>
                                </div>
                                <div class="form-group">
                                    <label class="" for="email-1">Can Approve Redeem Messages ?</label>
                                    <select class="form-control" data-style="btn-white" name="is_approval" required>
                                        <option <?= isset($admin_setting) ? $admin_setting->is_approval == 1 ? 'selected' : '' : ''; ?> value="1">Yes</option>
                                        <option <?= isset($admin_setting) ? $admin_setting->is_approval == 0 ? 'selected' : '' : ''; ?> value="0">No</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="" for="email-1">Can Send Message Notification to Members ?</label>
                                    <select class="form-control" data-style="btn-white" name="is_send_notif" required>
                                        <option <?= isset($admin_setting) ? $admin_setting->is_send_notif == 1 ? 'selected' : '' : ''; ?> value="1">Yes</option>
                                        <option <?= isset($admin_setting) ? $admin_setting->is_send_notif == 0 ? 'selected' : '' : ''; ?> value="0">No</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary text-uppercase">Update Settings</button>
                                </div>
                            </form>
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
