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
                        <h1 class="dt-page__title">Add New Member</h1>
                    </div>

                    <div class="row">
                        <div class="col-xl-12">
                            <form method="post">
                                <div class="form-group">
                                    <label class="" for="user-name">Full Name</label>
                                    <input type="text" class="form-control" id="user-name" aria-describedby="user-name" name="fullname" required>
                                </div>
                                <div class="form-group">
                                    <label class="" for="email-1">Email Address</label>
                                    <input type="email" class="form-control" id="email-1" aria-describedby="email-1" autocomplete="off" placeholder="Your Best Email" name="email_address" required>
                                    <small><i>Valid email only to receive digital gift cards.</i></small>
                                </div>
                                <div class="form-group">
                                    <label class="" for="password-1">Password</label>
                                    <input type="password" class="form-control" id="password-1" name="password" required>
                                </div>
                                <div class="form-group">
                                    <label class="" for="password-1">Confirm Password</label>
                                    <input type="password" class="form-control" id="password-1" name="re_password" required>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary text-uppercase">Create Account</button>
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
