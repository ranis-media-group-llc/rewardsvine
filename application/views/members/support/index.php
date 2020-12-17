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
                                                <h3 class="dt-card__title">Contact Support</h3>
                                            </div>
                                        </div>
                                        <br><br>
                                        <div class="tab-content">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="col-md-8">
                                                        <div class="well well-sm">
                                                            <form>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <label for="name">
                                                                                Name</label>
                                                                            <input type="text" class="form-control" id="name" placeholder="Enter name" required="required" />
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="email">
                                                                                Email Address</label>
                                                                            <div class="input-group">
                                                                        <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                                                        </span>
                                                                                <input type="email" class="form-control" id="email" placeholder="Enter email" required="required" /></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <label for="name">
                                                                                Message</label>
                                                                            <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
                                                                                      placeholder="Message"></textarea>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <button type="submit" class="btn btn-primary right" id="btnContactUs">
                                                                            Send Message
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                            <br>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <form>
                                                            <legend><span class="glyphicon glyphicon-globe"></span> Our office</legend>
                                                            <address>
                                                                <strong>Twitter, Inc.</strong><br>
                                                                795 Folsom Ave, Suite 600<br>
                                                                San Francisco, CA 94107<br>
                                                                <abbr title="Phone">
                                                                    P:</abbr>
                                                                (123) 456-7890
                                                            </address>
                                                            <address>
                                                                <strong>Full Name</strong><br>
                                                                <a href="mailto:#">first.last@example.com</a>
                                                            </address>
                                                        </form>
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

