<!-- Header -->
<header class="dt-header">
    <!-- Header container -->
    <div class="dt-header__container">

        <!-- Brand -->
        <div class="dt-brand">

            <!-- Brand tool -->
            <div class="dt-brand__tool d-lg-none" data-toggle="main-sidebar">
                <div class="hamburger-inner"></div>
            </div>
            <!-- /brand tool -->
            <!-- Brand logo -->
            <span class="dt-brand__logo">
        <a class="dt-brand__logo-link" href="/">
          <img width="200" class="responsive d-none d-sm-inline-block" src="/assets/images/header_logo2.png" alt="RewardsVine">
        </a>
      </span>
            <!-- /brand logo -->

        </div>
        <!-- /brand -->

        <!-- Header toolbar-->
        <div class="dt-header__toolbar">

            <!-- Search box
            <form class="search-box d-none d-lg-block">
                <input class="form-control" placeholder="Search in app..." value="" type="search">
                <span class="search-icon"><i class="icon icon-search icon-lg"></i></span>
            </form>
            /search box -->
            <!-- Header Menu Wrapper -->
            <div class="dt-nav-wrapper">
                <ul class="dt-nav">
                    <li class="dt-nav__item dt-notification dropdown">
                        <!-- Dropdown Link -->
                        <a href="#" class="dt-nav__link dropdown-toggle no-arrow" aria-haspopup="true" aria-expanded="false"><b><?= isset($users_data->points) ? $users_data->points : '0';  ?> PTS</b></a>
                        <!-- /dropdown link -->
                    </li>
                </ul>
                <!-- Header Menu -->
                <ul class="dt-nav">
                    <li class="dt-nav__item dt-notification dropdown">

                        <!-- Dropdown Link -->
                        <a href="#" class="dt-nav__link dropdown-toggle no-arrow" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false"> <i class="icon icon-notification2 icon-fw dt-icon-alert"></i>
                        </a>
                        <!-- /dropdown link -->

                        <!-- Dropdown Option -->
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-media">
                            <!-- Dropdown Menu Header -->
                            <div class="dropdown-menu-header">
                                <h4 class="title">Notifications (9)</h4>

                                <div class="ml-auto action-area">
                                    <a href="javascript:void(0)">Mark All Read</a> <a class="ml-2" href="javascript:void(0)">
                                        <i class="icon icon-settings icon-lg text-light-gray"></i> </a>
                                </div>
                            </div>
                            <!-- /dropdown menu header -->

                            <!-- Dropdown Menu Body -->
                            <div class="dropdown-menu-body ps-custom-scrollbar">

                                <div class="h-auto">
                                    <!-- Media -->
                                    <a href="javascript:void(0)" class="media">

                                        <!-- Avatar -->
                                        <img class="dt-avatar mr-3" src="/assets/images/avatar1.png" alt="User">
                                        <!-- avatar -->

                                        <!-- Media Body -->
                                        <span class="media-body">
                    <span class="message">
                      <span class="user-name">Stella Johnson</span> and <span class="user-name">Chris Harris</span>
                      have birthdays today. Help them celebrate!
                    </span>
                    <span class="meta-date">8 hours ago</span>
                  </span>
                                        <!-- /media body -->

                                    </a>
                                    <!-- /media -->

                                    <!-- Media -->
                                    <a href="javascript:void(0)" class="media">

                                        <!-- Avatar -->
                                        <img class="dt-avatar mr-3" src="https://via.placeholder.com/150x150" alt="User">
                                        <!-- avatar -->

                                        <!-- Media Body -->
                                        <span class="media-body">
                    <span class="message">
                      <span class="user-name">Jonathan Madano</span> commented on your post.
                    </span>
                    <span class="meta-date">9 hours ago</span>
                  </span>
                                        <!-- /media body -->

                                    </a>
                                    <!-- /media -->

                                    <!-- Media -->
                                    <a href="javascript:void(0)" class="media">

                                        <!-- Avatar -->
                                        <img class="dt-avatar mr-3" src="https://via.placeholder.com/150x150" alt="User">
                                        <!-- avatar -->

                                        <!-- Media Body -->
                                        <span class="media-body">
                    <span class="message">
                      <span class="user-name">Chelsea Brown</span> sent a video recomendation.
                    </span>
                    <span class="meta-date">
                      <i class="icon icon-play-circle text-primary icon-fw mr-1"></i>
                      13 hours ago
                    </span>
                  </span>
                                        <!-- /media body -->

                                    </a>
                                    <!-- /media -->

                                    <!-- Media -->
                                    <a href="javascript:void(0)" class="media">

                                        <!-- Avatar -->
                                        <img class="dt-avatar mr-3" src="https://via.placeholder.com/150x150" alt="User">
                                        <!-- avatar -->

                                        <!-- Media Body -->
                                        <span class="media-body">
                                                        <span class="message">
                                                          <span class="user-name">Alex Dolgove</span> and <span class="user-name">Chris Harris</span>
                                                          like your post.
                                                        </span>
                                                        <span class="meta-date">
                                                          <i class="icon icon-like text-light-blue icon-fw mr-1"></i>
                                                          yesterday at 9:30
                                                        </span>
                                                      </span>
                                        <!-- /media body -->

                                    </a>
                                    <!-- /media -->
                                </div>

                            </div>
                            <!-- /dropdown menu body -->

                            <!-- Dropdown Menu Footer -->
                            <div class="dropdown-menu-footer">
                                <a href="javascript:void(0)" class="card-link"> See All <i class="icon icon-arrow-right icon-fw"></i>
                                </a>
                            </div>
                            <!-- /dropdown menu footer -->
                        </div>
                        <!-- /dropdown option -->
                    </li>
                </ul>
                <!-- /header menu -->
                <!-- Header Menu -->
                <ul class="dt-nav">
                    <li class="dt-nav__item dropdown">
                        <!-- Dropdown Link -->
                        <a href="/" class="dt-nav__link dropdown-toggle no-arrow dt-avatar-wrapper" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="dt-avatar size-50" src="/assets/images/avatar1.png" alt="Domnic Harris">
                            <span class="dt-avatar-info d-none d-sm-block">
                                <span class="d-block text-light-primary f-10 mb-1">Welcome back!</span>
                                <span class="dt-avatar-name"><?= $_SESSION['user']->fullname ?></span>
                            </span>
                        </a>
                        <!-- /dropdown link -->

                        <!-- Dropdown Option -->
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="dt-avatar-wrapper flex-nowrap p-6 mt-n2 bg-gradient-purple text-white rounded-top">
                                <img class="dt-avatar" src="https://via.placeholder.com/150x150" alt="Domnic Harris">
                                <span class="dt-avatar-info">
                                    <span class="dt-avatar-name"><?= $_SESSION['user']->fullname ?></span>
                                    <span class="f-12">Member</span>
                                </span>
                            </div>
                            <a class="dropdown-item" href="javascript:void(0)"> <i class="icon icon-user icon-fw mr-2 mr-sm-1"></i>Account
                            </a>
                            <a class="dropdown-item" href="javascript:void(0)">
                                <i class="icon icon-settings icon-fw mr-2 mr-sm-1"></i>
                                Setting
                            </a>
                            <a class="dropdown-item" href="<?= base_url('auth/logout') ?>"> <i class="icon icon-editors icon-fw mr-2 mr-sm-1"></i>
                                Logout
                            </a>
                        </div>
                        <!-- /dropdown option -->
                    </li>
                </ul>
                <!-- /header menu -->
            </div>
            <!-- Header Menu Wrapper -->

        </div>
        <!-- /header toolbar -->

    </div>
    <!-- /header container -->
</header>
<!-- /header -->