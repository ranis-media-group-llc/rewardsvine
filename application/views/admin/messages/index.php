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
                        <h1 class="dt-page__title">Redeem Messages</h1>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-responsive">
                            <table class="table table-striped table-hover dt-responsive display nowrap" id="redeem_table">
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
                                                    }else if($message->status == 1){
                                                        echo 'In Progress';
                                                    }else if($message->status == 2){
                                                        echo 'Rejected';
                                                    }else if($message->status == 3){
                                                        echo 'Completed';
                                                    }
                                                ?>
                                            </td>
                                            <td>
                                                <?php
                                                    if($message->status == 0){
                                                        ?>
                                                        <button id="<?= $message->id; ?>" type="submit" class="btn btn-secondary btn-xs text-uppercase btn_accept">Accept</button>
                                                        <button id="<?= $message->id; ?>" type="submit" class="btn btn-danger btn-xs text-uppercase btn_reject">Reject</button>
                                                        <?php
                                                    }else if($message->status == 1){
                                                        ?>
                                                            <button id="<?= $message->id; ?>" type="submit" class="btn btn-success btn-xs text-uppercase btn_complete">Mark As Complete</button>
                                                        <?php
                                                    }

                                                ?>
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
$this->load->view('layout_admin/foot');
?>

<script>
    $(document).ready( function () {
        $('#redeem_table').DataTable({
            "responsive" : false,
            "pageLength": 10,
        });

        $(".btn_accept").on( "click", function( event ) {
            var ID=this.id;
            Swal.fire({
                title: 'Accept Redeem?',
                text: "",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#32243d',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes',
                cancelButtonText: 'No',
            }).then((result) => {
                $.ajax({
                    type: "POST",
                    url: "/admin/messages/redeem_status",
                    data: {id : ID,stat : 'accept'}, // serializes the form's elements.
                    success: function(data)
                    {
                        //console.log(data);
                        if(data === "success"){
                            sucess_add("Accepted!",1);
                        }else{
                            warning('An error occur, contact superadmin!');
                        }
                    }
                });
            });
        });

        $(".btn_reject").on( "click", function( event ) {
            var ID=this.id;
            Swal.fire({
                title: 'Reject Redeem?',
                text: "",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#32243d',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes',
                cancelButtonText: 'No',
            }).then((result) => {
                $.ajax({
                    type: "POST",
                    url: "/admin/messages/redeem_status",
                    data: {id : ID,stat : 'reject'}, // serializes the form's elements.
                    success: function(data)
                    {
                        //console.log(data);
                        if(data === "success"){
                            sucess_add("Rejected!",1);
                        }else{
                            warning('An error occur, contact superadmin!');
                        }
                    }
                });
            });
        });

        $(".btn_complete").on( "click", function( event ) {
            var ID=this.id;
            Swal.fire({
                title: 'Complete Redeem?',
                text: "",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#32243d',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes',
                cancelButtonText: 'No',
            }).then((result) => {
                $.ajax({
                    type: "POST",
                    url: "/admin/messages/redeem_status",
                    data: {id : ID,stat : 'complete'}, // serializes the form's elements.
                    success: function(data)
                    {
                        //console.log(data);
                        if(data === "success"){
                            sucess_add("Completed!",1);
                        }else{
                            warning('An error occur, contact superadmin!');
                        }
                    }
                });
            });
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
