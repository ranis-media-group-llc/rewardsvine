    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="page-title">Offer Walls</h4>
                </div>
            </div><br>
            <div class="row">
                <div class="col-lg-8">
                    <?php foreach($offerwalls as $offerwall) { ?>
                        <div class="card-box m-b-10" >
                            <div class="table-box opport-box">
                                <div class="table-detail" onclick="location.href='offerwall_view/<?php echo $offerwall->slug; ?>';" style="cursor: pointer;">
                                    <img src="<?php echo $offerwall->image_path; ?>" alt="img" class="img-circle thumb-lg m-r-15" />
                                </div>
                                <div class="table-detail" onclick="location.href='offerwall_view/<?php echo $offerwall->slug; ?>';" style="cursor: pointer;">
                                    <div class="member-info">
                                        <h4 class="m-t-0"><b><?php echo $offerwall->name; ?></b></h4>
                                            <p class="text-dark m-b-5">
                                                <b>
                                                    <?php echo $offerwall->description; ?>
                                                </b> 
                                     </div>
                                </div>
                                        <div class="table-detail lable-detail">
                                            <a id="<?php echo $offerwall->slug; ?>" href="#custom-modal" class="viewOfferwall btn-sm btn-purple waves-effect waves-light" data-animation="fadein" data-plugin="custommodal" data-overlaySpeed="200" data-overlayColor="#36404a">
                                                <i class="fa fa-info"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>
                            </div> <!-- end col -->
                                    <!--<div class="button-list">
                                        <div class="table-detail lable-detail">
                                           <a href="javascript:void(0);" data-toggle="modal" data-target="#myModal"> <span class="label label-purple" ><i class="fa  fa-info"></i> </span> </a>
                                        </div>
	                                 </div> -->
                                     <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                   
                                            </div>
                                        </div>
                                    </div>
                                    
                                   
                                    <div id="custom-modal" class="modal-demo">
                                        <button type="button" class="close" onclick="Custombox.close();">
                                            <span>&times;</span><span class="sr-only">Close</span>
                                        </button>
                                        <div class="modal-contents">
                                            
                                        </div>
                                    </div>
            
            
                            <div class="col-lg-4">
                            	<div class="card-box m-b-0">
                            		<h4 class=" header-title m-t-0 m-b-20 text-dark">Live Feed</h4>
                            		
                            		<div class="p-20">
                    					<div class="table-responsive">
                                        <table class="table table-actions-bar">
                                           <tbody>
                                             </tbody>
                                        </table>
                                    </div>

                        			</div>
                            	</div>
                            </div>
                            
                        </div>
                    </div> <!-- container -->
                               
                </div> <!-- content -->
                

