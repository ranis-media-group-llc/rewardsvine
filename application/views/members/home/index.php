    
                <div class="content">
                    <div class="container">

                        <div class="row">
                            <div class="col-sm-12">
                                <h4 class="page-title">Home 
                                </h4>
                                <p class="text-muted page-title-alt"></p>
                            </div>
                        </div>
                            
                        <div class="row">
                            <div class="col-md-6 col-lg-3">
                                <div class="widget-bg-color-icon card-box fadeInDown animated">
                                    <div class="text-right">
                                        <h3 class="text-dark">
                                            <?php 
                                                    if(isset($_SESSION['user'])){
                                                       $data =  $_SESSION['user'];
                                                       echo $data->user_id;
                                                    }
                                                ?>
                                        </b></h3>
                                        <p class="text-muted">USER ID</p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-3">
                                <div class="widget-bg-color-icon card-box">
                                     <div class="text-right">
                                        <h3 class="text-dark"><b class="counter"></b></h3>
                                        <p class="text-muted"></p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>

                             <div class="col-md-6 col-lg-3">
                                <div class="widget-bg-color-icon card-box">
                                     <div class="text-right">
                                        <h3 class="text-dark"><b class="counter"></b></h3>
                                        <p class="text-muted"></p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>

                             <div class="col-md-6 col-lg-3">
                                <div class="widget-bg-color-icon card-box">
                                     <div class="text-right">
                                        <h3 class="text-dark"><b class="counter"></b></h3>
                                        <p class="text-muted"></p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>

                        <div class="row">

                        </div>
                </div>
		</div>
        