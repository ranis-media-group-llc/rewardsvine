    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="page-title">Settings</h4>
                </div>
            </div><br>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box">
                            <a href="/admin/settings/add">
                                <button class="btn btn-icon waves-effect waves-light btn-primary pull-right"> 
                                    <i class="fa fa-plus"></i> Add New Configuration
                                </button>
                            </a>
                            <br><br>
                            <form method="post" enctype="multipart/form-data" >
                                <?php if(isset($error)) 
                                    { ?>
                                        <div class="alert alert-danger alert-dismissible" role="alert">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span></button>
                                            <strong>Error! </strong> <?php echo $error; ?>
                                        </div>
                                        <?php 
                                    } 
                                ?>
                                <?php foreach($setting as $settings) {
                                    foreach($settings as &$set) {
                                    $set = htmlentities($set);
                                }
                                ?>
                                    <?php
                                        if($settings->type=='txtarea'){
                                            ?>
                                                <div class="form-group">
                                                    <label ><?php echo $settings->display_name; ?></label>
                                                    <a href="/admin/settings/edit/<?php echo $settings->id; ?>"><i class="fa fa-edit pull-right"></i></a>
                                                    <textarea name="<?php echo $settings->name; ?>" class="form-control"><?php echo $settings->value; ?>  </textarea>
                                                </div>
                                            <?php
                                        }
                                        if($settings->type=='text'){
                                            ?>
                                                <div class="form-group" >
                                                    <label ><?php echo $settings->display_name; ?></label>
                                                    <a href="/admin/settings/edit/<?php echo $settings->id; ?>"><i class="fa fa-edit pull-right"></i></a>
                                                    <input  type="text" name="<?php echo $settings->name; ?>" value="<?php echo $settings->value; ?>" class="form-control">
                                                </div>
                                            <?php
                                        }
                                   
                                } 
                                ?>
                               <br><br><br><br>
                                <button type="submit" class="btn btn-purple waves-effect waves-light">Submit</button>
                                </form>				
                        </div>
                   </div>
                </div> 
         </div>
    </div>
