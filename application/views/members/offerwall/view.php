    <div class="content">
        <div class="container">
            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                   <ol class="breadcrumb">
							<li>
								<a href="/offerwall">Offer Walls</a>
							</li>
							<li class="active">
								<?php echo $offerwall_details->name; ?>
							</li>
						</ol>
                </div>
            </div>
                        <div class="row">
                        	<div class="col-lg-12">
                                <div class="portlet">
                                    <div class="portlet-heading bg-purple">
                                            <h3 class="portlet-title">
                                                <?php echo $offerwall_details->description; ?>
                                            </h3>
                                            <div class="portlet-widgets">
                                                <a href="javascript:;" data-toggle="reload"><i class="ion-refresh"></i></a>
                                                <span class="divider"></span>
                                                <a data-toggle="collapse" data-parent="#accordion1" href="#bg-purple"><i class="ion-minus-round"></i></a>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div id="bg-purple" class="panel-collapse collapse in">
                                            <div class="portlet-body">
                                                <?php
                                                    if($offerwall_details->slug == 'offertoro'){
                                                        ?>
                                                            <iframe width="100%" height="450px" src="<?php echo $offerwall_details->link ?><?php echo $users_info->user_id.'/'.$offerwall_details->link_param; ?>" frameborder="0" allowfullscreen></iframe>
                                                        <?php
                                                    }else{
                                                        ?>
                                                            <iframe width="100%" height="450px" src="<?php echo $offerwall_details->link.'?'.$offerwall_details->link_param.'='; ?><?php echo $users_info->user_id; ?>" frameborder="0" allowfullscreen></iframe>
                                                        <?php
                                                    }
                                                ?>
                                            </div>
                                        </div>
                                </div>
                            </div> 
                            
                                   
                            <!--<div class="col-lg-3">
                            	<div class="card-box m-b-0">
                            		<h4 class=" header-title m-t-0 m-b-20 text-dark">Leads Statics</h4>
                            		<div id="morris-bar-stacked" style="height: 260px;"></div>
                            		
                            		<div class="p-20">
                    					<h4 class="m-b-20 header-title"><b>Activities</b></h4>
                    					<div class="nicescroll p-l-r-10" style="max-height: 535px;">
	                        				<div class="timeline-2">
			                                    <div class="time-item">
			                                        <div class="item-info">
			                                            <div class="text-muted"><small>5 minutes ago</small></div>
			                                            <p><strong><a href="#" class="text-info">John Doe</a></strong> Uploaded a photo <strong>"DSC000586.jpg"</strong></p>
			                                        </div>
			                                    </div>
                                            </div>
	                        			</div>
                        			</div>
                            	</div>
                            </div>-->
                            
            </div>
        </div> 
                               
    </div> 
