		<div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                    <div class="text-center">
                        <a href="/" class="logo">
                            <img  src="/uploads/mini_logo.png" class="icon-c-logo" alt="wala"/>
                             <span><img src="/uploads/right_logo11.png" alt="wala"/> </span>
                        </a>
                    </div>
                </div>

                <!-- Button mobile view to collapse sidebar menu 
                    <img src="/uploads/right_logo8.png" alt="wala" class="icon-c-logo">
                        
                -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">
                        <div class="">
                            <div class="pull-left">
                                <button class="button-menu-mobile open-left">
                                    <i class="ion-navicon"></i>
                                </button>
                                <span class="clearfix"></span>
                            </div>

                            <ul class="nav navbar-nav navbar-right pull-right" >
								<li style="display: inline-block;">
									<span style="color:white;">
                                       <button type="button" style="color:#800080;" class="userPoints btn btn-white  btn-rounded waves-effect waves-light">
                                        <strong> <?php echo $users->points; ?> </strong> PTS
                                    </button>
                                    </span>
                                   
                                </li>
                                <li class="dropdown" style="display: inline-block;"> 
                                    <a href="" class="dropdown-toggle profile" data-toggle="dropdown" aria-expanded="true">
                                    <img src="/uploads/avatar1.png" alt="Avatar" class="img-circle"> </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="javascript:void(0)"><i class="md  md-account-circle"></i> 
                                                <?php 
                                                    if(isset($_SESSION['user'])){
                                                       $data =  $_SESSION['user'];
                                                       echo $data->firstname.' '.$data->lastname;
                                                    }
                                                ?>
                                            </a>
                                        </li>
                                        <li><a href="/auth/logout"><i class="md  md-exit-to-app m-r-5"></i> Logout</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <!--/.nav-collapse -->
                    </div>
                </div>
            </div>
        <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">
                    <!--- Divider -->
                    <div id="sidebar-menu">
                        <ul>

                        	<li class="text-muted menu-title" style="">EARN</li>

                            <li>
                                <a href="/members" class="waves-effect <?php if($this->uri->uri_string() == 'members'){echo "active";} ?>"><i class="md md-home"></i> <span> Home </span> </a>
							</li>
							<li>
                                <a href="/offerwall" class="waves-effect <?php if($this->uri->uri_string() == 'offerwall'){echo "active";} ?>"><i class="md  md-wallet-giftcard"></i> <span> Offer Walls </span> </a>
							</li>
							<li>
                                <a href="#" class="waves-effect "><i class="md  md-list"></i> <span> Surveys </span> </a>
							</li>
							<li>
                                <a href="#" class="waves-effect "><i class="md  md-videocam"></i> <span> Videos </span> </a>
							</li>
							<li>
                                <a href="#" class="waves-effect "><i class="md  md-view-list"></i> <span> Complete Offers </span> </a>
							</li>
							<li>
                                <a href="#" class="waves-effect "><i class="md  md-file-download"></i> <span> Download Apps </span> </a>
							</li>
							<li>
                                <a href="#" class="waves-effect "><i class="md  md-account-child"></i> <span> Referral </span> </a>
							</li>
                            <li class="text-muted menu-title">REDEEM</li>
                            <li>
                                <a href="#" class="waves-effect "><i class="md   md-wallet-giftcard"></i> <span> Gift Cards </span> </a>
							</li>
                            <li>
                                <a href="#" class="waves-effect "><i class="fa fa-bitcoin"></i> <span> Cryptocurrency </span> </a>
							</li>
							<li class="text-muted menu-title">MORE</li>
							<li>
                                <a href="#" class="waves-effect "><i class="md  md-account-circle"></i> <span> Profile </span> </a>
							</li>	
							<li>
                                <a href="/history" class="waves-effect <?php if($this->uri->uri_string() == 'history'){echo "active";} ?>"><i class="md  md-history"></i> <span> History </span> </a>
							</li>
							<li>
                                <a href="#" class="waves-effect "><i class="md  md-help"></i> <span> FAQ </span> </a>
							</li>
						</ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
                