    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="page-title">Offer Walls</h4>
                </div>
            </div><br>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box">
                            <a href="/admin/offerwall/add">
                                <button class="btn btn-icon waves-effect waves-light btn-primary pull-right"> 
                                    <i class="fa fa-plus"></i> Add 
                                </button>
                            </a>
                            </br></br>
                            <table id="datatable" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Slug</th>
                                        <th>Description</th>
                                        <th>Is Active</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($offerwalls as $offerwall) { ?>
                                    <tr>
                                        <td><?php echo $offerwall->name; ?></td>
                                        <td><?php echo $offerwall->slug; ?></td>
                                        <td><?php echo $offerwall->description; ?></td>
                                        <td>
                                            <?php 
                                                if($offerwall->is_active==1){
                                                    echo "Active";
                                                }else{
                                                    echo "Inactive";
                                                }
                                            ?>
                                        </td>
                                        <td>
                                            <a href="/admin/offerwall/edit/<?php echo $offerwall->id; ?>/">
                                                <button class="btn btn-icon waves-effect waves-light btn-success">
                                                <i class="fa fa-edit"></i> </button>
                                            <button id="<?php echo $offerwall->id;?>" class="btnRemove btn btn-icon waves-effect waves-light btn-danger"> 
                                            </a>
                                            <i class="fa fa-trash"></i> </button>
                                            <a href="/admin/offerwall/download/<?php echo $offerwall->id; ?>/">
                                                <button id="<?php echo $offerwall->id;?>" class="btnDownloadOffers btn btn-icon waves-effect waves-light btn-default"> 
                                                <i class="fa fa-download"></i> </button>
                                            </a>
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
