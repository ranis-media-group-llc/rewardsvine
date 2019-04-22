    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="page-title"> Edit Offer </h4>
                    <ol class="breadcrumb">
						<li>
							<a href="/admin/offers">Offers</a>
						</li>
						<li class="active">
							Edit
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
                                <label for="offerwallName">Offer ID</label>
                                <input type="text" name="offer_id" class="form-control" disabled value="<?php echo $offers->offer_id; ?>">
	                        </div>
	                        <div class="form-group">
                                <label for="offerwallName">Name</label>
                                <input type="text" name="name" class="form-control" disabled value="<?php echo $offers->name; ?>">
	                        </div>
	                        <div class="form-group">
	                            <label for="offerwallDesc">Description</label>
	                            <input type="text" name="description" class="form-control" disabled  value="<?php echo $offers->description; ?>">
	                        </div>
                            <div class="form-group">
                                <label for="offerwallLink">Preview URL</label>
                                <input type="text" name="preview_url" class="form-control" disabled  value="<?php echo $offers->preview_url; ?>">
	                        </div>
                            <div class="form-group">
                                <label for="offerwallLink">Image URL</label>
                                <input type="text" name="image_url" class="form-control" disabled  value="<?php echo $offers->image_url; ?>">
	                        </div>
                            <div class="form-group">
                                <label for="offerwallLink">Amount</label>
                                <input type="text" name="payout" class="form-control" disabled  value="<?php echo '$'. $offers->payout; ?>">
	                        </div>
                            <div class="form-group">
                                <label for="offerwallLink">Country</label>
                                <input type="text" name="country" class="form-control" disabled  value="<?php echo $offers->country; ?>">
	                        </div>
                            <div class="form-group">
                                <label for="offerwallLink">Ordering</label>
                                <input type="text" name="ordering" class="form-control"  value="<?php echo $offers->ordering; ?>">
	                        </div>
                            
                                <div class="form-group">
                                    <label>Is Active</label>
                                    <select class="selectpicker" data-style="btn-white" name="is_active">
                                        <option <?php if($offers->is_active == 1){ echo "selected";} ?> value="1">Active</option>
                                        <option <?php if($offers->is_active == 0){ echo "selected";} ?> value="0">Inactive</option>
                                    </select>
                                </div>
                            <button type="submit" class="btn btn-purple waves-effect waves-light">Submit</button>
                        </form>				
                    </div>
                </div>
            </div> 
        </div>
    </div>
