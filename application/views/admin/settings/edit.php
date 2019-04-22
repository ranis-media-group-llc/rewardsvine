    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="page-title">Add Configuration</h4>
                    <ol class="breadcrumb">
						<li>
							<a href="/admin/settings">Settings</a>
						</li>
						<li class="active">
							Add
						</li>
					</ol>            
                </div>
            </div><br>
            <div class="row">
                <div class="col-sm-12">
                    <div class="card-box">
                        <form method="post" enctype="multipart/form-data" >
                            <?php if(isset($error)) 
                            { ?>
                            <div class="alert alert-danger alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span></button>
                                <strong>Error! </strong> <?php echo $error; ?>
                            </div>
                            <?php 
                            } ?>
	                        <div class="form-group">
                                <label for="offerwallName">Slug</label>
                                <input type="text" name="name" class="form-control" value="<?php echo $setting->name; ?>" required>
	                        </div>
	                        <div class="form-group">
	                            <label for="offerwallDesc">Display Name</label>
	                            <input type="text" name="display_name" class="form-control" value="<?php echo $setting->display_name; ?>" >
	                        </div>
                            <div class="form-group">
                                <label for="offerwallLink">Value</label>
                                <input type="text" name="value" class="form-control" value="<?php echo htmlentities($setting->value); ?>" required>
	                        </div>
                            <div class="form-group">
                                    <label>Type</label>
                                    <select class="selectpicker" data-style="btn-white" name="type">
                                        <option value="text" <?php if($setting->type == "text"){echo "selected";}; ?>>Text</option>
                                        <option value="file" <?php if($setting->type == "file"){echo "selected";}; ?>>File</option>
                                        <option value="txtarea" <?php if($setting->type == "txtarea"){echo "selected";}; ?>>Textarea</option>
                                    </select>
                            </div> 
	                       <br><br>
                            <button type="submit" class="btn btn-purple waves-effect waves-light">Submit</button>
                        </form>				
                    </div>
                </div>
            </div> 
        </div>
    </div>
