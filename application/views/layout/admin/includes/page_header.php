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

                <!-- Button mobile view to collapse sidebar menu -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">
                        <div class="">
                            <div class="pull-left">
                                <button class="button-menu-mobile open-left">
                                    <i class="ion-navicon"></i>
                                </button>
                                <span class="clearfix"></span>
                            </div>

                            <ul class="nav navbar-nav navbar-right pull-right">
								<li class="dropdown">
                                    <a href="" class="dropdown-toggle profile" data-toggle="dropdown" aria-expanded="true">
                                        <img src="/uploads/avatar1.png" alt="user-img" class="img-circle"> </a>
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

                        	<li class="text-muted menu-title">EARN</li>

                            <li>
                                <a href="/admin/home" class="waves-effect <?php if($this->uri->uri_string() == 'admin/home'){echo "active";} ?>"><i class="md md-home">
                                </i> <span> Home </span> </a>
							</li>
							<li>
                                <a href="/admin/offerwall" class="waves-effect <?php if($this->uri->uri_string() == 'admin/offerwall' || $this->uri->uri_string() == 'admin/offerwall/add' ){echo "active";} ?>">
                                <i class="md  md-wallet-giftcard"></i> <span> Offer Walls </span> </a>
							</li>
							
							<li>
                                <a href="/admin/offers" class="waves-effect <?php if($this->uri->uri_string() == 'admin/offers' || $this->uri->uri_string() == 'admin/offers/add' ){echo "active";} ?>"><i class="md  md-view-list">
                                </i> <span>Offers </span> </a>
							</li>
                            
                            <li>
                                <a href="/admin/users" class="waves-effect <?php if($this->uri->uri_string() == 'admin/users'){echo "active";} ?>"><i class="md md-account-child">
                                </i> <span>Users </span> </a>
							</li>
                            <li>
                                <a href="/admin/history" class="waves-effect <?php if($this->uri->uri_string() == 'admin/history'){echo "active";} ?>">
                                <i class="md md-history">
                                </i> <span>Activity History </span> </a>
							</li>
                            <li>
                                <a href="/admin/settings" class="waves-effect <?php if($this->uri->uri_string() == 'admin/settings'){echo "active";} ?>""><i class="md md-settings">
                                </i> <span>Settings </span> </a>
							</li>
							
							<li class="text-muted menu-title">MORE</li>
							<li>
                                <a href="#" class="waves-effect "><i class="md  md-account-circle">
                                </i> <span> Profile </span> </a>
							</li>	
							
						</ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
                