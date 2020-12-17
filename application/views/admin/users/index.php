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
                            <div class="table-responsive">
                            <table class="table table-striped table-hover dt-responsive display nowrap" id="gift_cards_table">
                                <thead>
                                    <tr>
                                        <td >Name</td>
                                        <td >Email</td>
                                        <td >Date Created</td>
                                        <td >Role</td>
                                        <td >Points</td>
                                        <td >Status</td>
                                        <td >Actions</td>
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
                                            <td>
                                                <?php
                                                    if($user->status==0){
                                                        echo 'Unverified';
                                                    } else if($user->status==1){
                                                        echo 'Deactivated';
                                                    }else if($user->status==2){
                                                        echo 'Verified';
                                                    }
                                                ?>
                                            </td>
                                            <td>
                                                <button id="<?= $user->id; ?>" type="button" class="btn btn-secondary btn-xs text-uppercase btn_delete">Delete</button>
                                                <button id="<?= $user->id; ?>" type="button" class="btn btn-danger btn-xs text-uppercase btn_deactivate">Deactivate</button>
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
        $('#gift_cards_table').DataTable({
            "responsive" : true,
            "pageLength": 10,
        });
        $(".btn_delete").on( "click", function( event ) {
            var ID=this.id;
            Swal.fire({
                title: 'Delete this User?',
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
                    url: "/admin/users/delete",
                    data: {id : ID}, // serializes the form's elements.
                    success: function(data)
                    {
                        console.log(data);
                        if(data === '1'){
                            sucess_add("User Deleted!",1);
                        }else{
                            warning('An error occur, contact superadmin!');
                        }
                    }
                });
            });
        });

        $(".btn_deactivate").on( "click", function( event ) {
            var ID=this.id;
            Swal.fire({
                title: 'Deactivate User?',
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
                    url: "/admin/users/update_status",
                    data: {id : ID,stat : 'de'}, // serializes the form's elements.
                    success: function(data)
                    {
                        //console.log(data);
                        if(data === "success"){
                            sucess_add("User has been deactivated!",1);
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
