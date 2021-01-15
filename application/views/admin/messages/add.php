<?php
$this->load->view('layout_admin/head');
?>

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
                        <h1 class="dt-page__title">Add Message</h1>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <form method="post">
                                <div class="form-group">
                                    <label class="" for="user-name">Title</label>
                                    <input type="text" class="form-control" name="title" required>
                                </div>
                                <div class="form-group">
                                    <label class="" for="email-1">Message</label>
                                    <textarea class="form-control"  name="message" required></textarea>
                                </div>
                                <div class="form-group">
                                    <label class="" for="email-1">Status</label>
                                    <select id="status" name="status" class="form-control searchable-dropdown" required>
                                        <option value="0">Draft</option>
                                        <option value="1">Publish</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label> <input  type="radio" name="send_to" checked value="all"> Send to All</label><br>
                                    <label> <input  type="radio" name="send_to" value="single"> Send to Specific User</label>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="users_lists" name="users_lists" placeholder="Input user_id separated by comma(,). Ex. 111,222,333">
                                </div>
                                 <div class="form-group">
                                    <button type="submit" class="btn btn-primary text-uppercase">Save</button>
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
$this->load->view('layout_admin/foot');
?>
<script>
    $('input[type="radio"]').on('click change', function(e) {
        if($(this).val()=== 'all'){
            $("#users_lists").hide();
        }else{
            $("#users_lists").show();
        }
        console.log($(this).val());
    });
    $(document).ready( function () {
        $("#users_lists").hide();
    });
</script>
