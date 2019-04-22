    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="page-title">Users</h4>
                </div>
            </div><br>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box">
                            <a href="/admin/users/add">
                                <button class="btn btn-icon waves-effect waves-light btn-primary pull-right"> 
                                    <i class="fa fa-plus"></i> Add 
                                </button>
                            </a>
                            </br></br>
                            <table id="datatable" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>UserID</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($users as $user) { ?>
                                    <tr>
                                        <td><?php echo $user->user_id; ?></td>
                                        <td><?php echo $user->email; ?></td>
                                        <td><?php echo $user->role; ?></td>
                                        <td>
                                            <button id="<?php echo $user->id;?>" class="btnRemove btn btn-icon waves-effect waves-light btn-danger"> 
                                            <i class="fa fa-trash"></i> </button>
                                           
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                   </div>
                </div> 
         </div>
    </div>
