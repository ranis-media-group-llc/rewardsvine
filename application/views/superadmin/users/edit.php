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
                        <h1 class="dt-page__title">Edit Member</h1>
                    </div>

                    <div class="row">
                        <div class="col-xl-12">
                            <form method="post">
                                <div class="form-group">
                                    <label class="" for="user-name">Full Name</label>
                                    <input type="text" class="form-control" value="<?= $member_data->fullname; ?>" aria-describedby="user-name" name="fullname" required>
                                </div>
                                <div class="form-group">
                                    <label class="" for="email-1">Email Address</label>
                                    <input type="email" class="form-control" id="email-1"  autocomplete="off" value="<?= $member_data->email_address; ?>" name="email_address" required>
                                    <small><i>Valid email only to receive digital gift cards.</i></small>
                                </div>
                                <div class="form-group">
                                    <label class="" for="password-1">Password</label>
                                    <input type="number" class="form-control" id="user_id" value="<?= $member_data->user_id; ?>" name="user_id" disabled>
                                </div>
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label class="" for="password-1">Points</label>
                                            <input type="number" class="form-control" id="points" value="<?= $member_data->points; ?>" name="points" >
                                        </div>
                                    </div>
                                    <?php if($this->uri->segment(5) == 'a' || $this->uri->segment(5) == 'd'): ?>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label class="" for="password-1">Points to be <?= $this->uri->segment(5) == 'a' ? 'added' : 'deducted'; ?></label>
                                            <input type="number" class="form-control" id="points_new" name="points_new" required>
                                        </div>
                                    </div>
                                    <?php endif; ?>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary text-uppercase">Update Account</button>
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
