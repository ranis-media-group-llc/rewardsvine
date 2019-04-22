    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="page-title"> Edit Offer Walls</h4>
                    <ol class="breadcrumb">
						<li>
							<a href="/admin/offerwall">Offer Walls</a>
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
                                <label for="offerwallName">Name</label>
                                <input type="text" name="name" class="form-control" id="offerwallName" required value="<?php echo $offerwalls->name; ?>">
	                        </div>
                            <div class="form-group">
                                <label for="offerwallName">Slug</label>
                                <input type="text" name="slug" class="form-control" id="offerwallName" required value="<?php echo $offerwalls->slug; ?>">
	                        </div>
	                        <div class="form-group">
	                            <label for="offerwallDesc">Description</label>
	                            <input type="text" name="description" class="form-control" id="offerwallDesc" value="<?php echo $offerwalls->description; ?>">
	                        </div>
                            <div class="form-group">
                                <label for="offerwallLink">Offerwall API Link</label>
                                <input type="text" name="link" class="form-control"  required value="<?php echo $offerwalls->link; ?>">
	                        </div>
                            <div class="form-group">
                                <label for="offerwallLink">Link Parameters</label>
                                <input type="text" name="link_param" class="form-control"  value="<?php echo $offerwalls->link_param; ?>">
	                        </div>
                            <div class="form-group">
                                <label for="offerwallLink">Publisher ID</label>
                                <input type="text" name="publisher_id" class="form-control"  value="<?php echo $offerwalls->publisher_id; ?>">
	                        </div>
                            <div class="form-group">
                                <label for="offerwallLink">Api HOST</label>
                                <input type="text" name="api_host" class="form-control"  value="<?php echo $offerwalls->api_host; ?>">
	                        </div>
                            <div class="form-group">
                                <label for="offerwallLink">Offer Wall ID</label>
                                <input type="text" name="offer_wall_id" class="form-control"  value="<?php echo $offerwalls->offer_wall_id; ?>">
	                        </div>
                            <div class="form-group">
                                <label for="offerwallLink">Offer Wall API Key</label>
                                <input type="text" name="api_key_wall" class="form-control"  value="<?php echo $offerwalls->api_key_wall; ?>">
	                        </div>
                            <div class="form-group">
                                <label for="offerwallLink">Offers API Key</label>
                                <input type="text" name="api_key_offer" class="form-control"  value="<?php echo $offerwalls->api_key_offer; ?>">
	                        </div>
                            <div class="form-group">
                                <label for="offerwallLink">API Naming Convention</label>
                                <textarea type="text" name="api_naming" class="form-control"> <?php echo htmlentities($offerwalls->api_naming); ?> </textarea>
	                        </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="offerwallImg">Image (100x100)</label>
                                    <small> <?php echo $offerwalls->image_path; ?> </small>
                                    <input type="file" name="image_path" class="form-control" id="offerwallImg" >
                                </div>
	                        </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Is Active</label>
                                    <select class="selectpicker" data-style="btn-white" name="is_active">
                                        <option <?php if($offerwalls->is_active == 1){ echo "selected";} ?> value="1">Active</option>
                                        <option <?php if($offerwalls->is_active == 0){ echo "selected";} ?> value="0">Inactive</option>
                                    </select>
                                </div>
	                        </div>
	                       <br><br><br><br>
                            <button type="submit" class="btn btn-purple waves-effect waves-light">Submit</button>
                        </form>				
                    </div>
                </div>
            </div> 
        </div>
    </div>
