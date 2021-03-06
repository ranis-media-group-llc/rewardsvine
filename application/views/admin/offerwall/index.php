<?php
    $this->load->view('layout_admin/head');
?>
    <!-- Loader -->
    <div class="dt-loader-container">
        <div class="dt-loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"></circle>
            </svg>
        </div>
    </div>
    <!-- /loader -->
<!-- Root -->
<div class="dt-root">
    <div class="dt-root__inner">
        <!-- Header -->
        <header class="dt-header">

            <!-- Header container -->
            <div class="dt-header__container">

                <!-- Brand -->
                <div class="dt-brand">

                    <!-- Brand tool -->
                    <div class="dt-brand__tool" data-toggle="main-sidebar">
                        <div class="hamburger-inner"></div>
                    </div>
                    <!-- /brand tool -->

                    <!-- Brand logo -->
                    <span class="dt-brand__logo">
        <a class="dt-brand__logo-link" href="index.html">
          <img class="dt-brand__logo-img d-none d-sm-inline-block" src="https://via.placeholder.com/334x119" alt="Drift">
          <img class="dt-brand__logo-symbol d-sm-none" src="https://via.placeholder.com/133x119" alt="Drift">
        </a>
      </span>
                    <!-- /brand logo -->

                </div>
                <!-- /brand -->

                <!-- Header toolbar-->
                <div class="dt-header__toolbar">

                    <!-- Search box -->
                    <form class="search-box d-none d-lg-block">
                        <div class="input-group">
                            <input class="form-control" placeholder="Search in app..." value="" type="search">
                            <span class="search-icon"><i class="icon icon-search icon-lg"></i></span>
                            <div class="input-group-append">
                                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">Category
                                </button>

                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                    <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                    <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- /search box -->

                    <!-- Header Menu Wrapper -->
                    <div class="dt-nav-wrapper">
                        <!-- Header Menu -->
                        <ul class="dt-nav d-lg-none">
                            <li class="dt-nav__item dt-notification-search dropdown">

                                <!-- Dropdown Link -->
                                <a href="#" class="dt-nav__link dropdown-toggle no-arrow" data-toggle="dropdown"
                                   aria-haspopup="true" aria-expanded="false"> <i class="icon icon-search icon-fw icon-lg"></i> </a>
                                <!-- /dropdown link -->

                                <!-- Dropdown Option -->
                                <div class="dropdown-menu">

                                    <!-- Search Box -->
                                    <form class="search-box right-side-icon">
                                        <input class="form-control form-control-lg" type="search" placeholder="Search in app...">
                                        <button type="submit" class="search-icon"><i class="icon icon-search icon-lg"></i></button>
                                    </form>
                                    <!-- /search box -->

                                </div>
                                <!-- /dropdown option -->

                            </li>
                        </ul>
                        <!-- /header menu -->



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
                                                <img class="dt-avatar mr-3" src="https://via.placeholder.com/150x150" alt="User">
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

                            <li class="dt-nav__item dt-notification dropdown">

                                <!-- Dropdown Link -->
                                <a href="#" class="dt-nav__link dropdown-toggle no-arrow" data-toggle="dropdown"
                                   aria-haspopup="true" aria-expanded="false"> <i class="icon icon-open-mail icon-fw"></i> </a>
                                <!-- /dropdown link -->

                                <!-- Dropdown Option -->
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-media">
                                    <!-- Dropdown Menu Header -->
                                    <div class="dropdown-menu-header">
                                        <h4 class="title">Messages (6)</h4>

                                        <div class="ml-auto action-area">
                                            <a href="javascript:void(0)">Mark All Read</a> <a class="ml-2" href="javascript:void(0)">
                                                <i class="icon icon-settings icon-lg text-light-gray"></i></a>
                                        </div>
                                    </div>
                                    <!-- /dropdown menu header -->

                                    <!-- Dropdown Menu Body -->
                                    <div class="dropdown-menu-body ps-custom-scrollbar">

                                        <div class="h-auto">

                                            <!-- Media -->
                                            <a href="javascript:void(0)" class="media">

                                                <!-- Avatar -->
                                                <img class="dt-avatar mr-3" src="https://via.placeholder.com/150x150" alt="User">
                                                <!-- avatar -->

                                                <!-- Media Body -->
                                                <span class="media-body text-truncate">
                    <span class="user-name mb-1">Chris Mathew</span>
                    <span class="message text-light-gray text-truncate">Okay.. I will be waiting for your...</span>
                  </span>
                                                <!-- /media body -->

                                                <span class="action-area h-100 min-w-80 text-right">
                      <span class="meta-date mb-1">8 hours ago</span>
                                                    <!-- Toggle Button -->
                      <span class="toggle-button" data-toggle="tooltip" data-placement="left" title="Mark as read">
                        <span class="show"><i class="icon icon-dot-o icon-fw f-10 text-light-gray"></i></span>
                        <span class="hide"><i class="icon icon-dot icon-fw f-10 text-light-gray"></i></span>
                      </span>
                                                    <!-- /toggle button -->
                    </span> </a>
                                            <!-- /media -->

                                            <!-- Media -->
                                            <a href="javascript:void(0)" class="media">

                                                <!-- Avatar -->
                                                <img class="dt-avatar mr-3" src="https://via.placeholder.com/150x150" alt="User">
                                                <!-- avatar -->

                                                <!-- Media Body -->
                                                <span class="media-body text-truncate">
                    <span class="user-name mb-1">Alia Joseph</span>
                    <span class="message text-light-gray text-truncate">
                      Alia Joseph just joined Messenger! Be the first to send a welcome message or sticker.
                    </span>
                  </span>
                                                <!-- /media body -->

                                                <span class="action-area h-100 min-w-80 text-right">
                    <span class="meta-date mb-1">9 hours ago</span>
                                                    <!-- Toggle Button -->
                      <span class="toggle-button" data-toggle="tooltip" data-placement="left" title="Mark as read">
                        <span class="show"><i class="icon icon-dot-o icon-fw f-10 text-light-gray"></i></span>
                        <span class="hide"><i class="icon icon-dot icon-fw f-10 text-light-gray"></i></span>
                      </span>
                                                    <!-- /toggle button -->
                  </span> </a>
                                            <!-- /media -->

                                            <!-- Media -->
                                            <a href="javascript:void(0)" class="media">

                                                <!-- Avatar -->
                                                <img class="dt-avatar mr-3" src="https://via.placeholder.com/150x150" alt="User">
                                                <!-- avatar -->

                                                <!-- Media Body -->
                                                <span class="media-body text-truncate">
                    <span class="user-name mb-1">Joshua Brian</span>
                    <span class="message text-light-gray text-truncate">
                      Alex will explain you how to keep the HTML structure and all that.
                    </span>
                  </span>
                                                <!-- /media body -->

                                                <span class="action-area h-100 min-w-80 text-right">
                    <span class="meta-date mb-1">12 hours ago</span>
                                                    <!-- Toggle Button -->
                      <span class="toggle-button" data-toggle="tooltip" data-placement="left" title="Mark as read">
                        <span class="show"><i class="icon icon-dot-o icon-fw f-10 text-light-gray"></i></span>
                        <span class="hide"><i class="icon icon-dot icon-fw f-10 text-light-gray"></i></span>
                      </span>
                                                    <!-- /toggle button -->
                  </span> </a>
                                            <!-- /media -->

                                            <!-- Media -->
                                            <a href="javascript:void(0)" class="media">

                                                <!-- Avatar -->
                                                <img class="dt-avatar mr-3" src="https://via.placeholder.com/150x150" alt="User">
                                                <!-- avatar -->

                                                <!-- Media Body -->
                                                <span class="media-body text-truncate">
                    <span class="user-name mb-1">Domnic Brown</span>
                    <span class="message text-light-gray text-truncate">Okay.. I will be waiting for your...</span>
                  </span>
                                                <!-- /media body -->

                                                <span class="action-area h-100 min-w-80 text-right">
                    <span class="meta-date mb-1">yesterday</span>
                                                    <!-- Toggle Button -->
                      <span class="toggle-button" data-toggle="tooltip" data-placement="left" title="Mark as read">
                        <span class="show"><i class="icon icon-dot-o icon-fw f-10 text-light-gray"></i></span>
                        <span class="hide"><i class="icon icon-dot icon-fw f-10 text-light-gray"></i></span>
                      </span>
                                                    <!-- /toggle button -->
                  </span> </a>
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
                                <a href="#" class="dt-nav__link dropdown-toggle" data-toggle="dropdown"
                                   aria-haspopup="true"
                                   aria-expanded="false">
                                    <i class="flag-icon flag-icon-us flag-icon-rounded flag-icon-lg"></i><span>English</span> </a>
                                <!-- /dropdown link -->

                                <!-- Dropdown Option -->
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="javascript:void(0)">
                                        <i class="flag-icon flag-icon-es mr-2"></i><span>Spanish</span> </a>
                                </div>
                                <!-- /dropdown option -->

                            </li>
                        </ul>
                        <!-- /header menu -->

                        <!-- Header Menu -->
                        <ul class="dt-nav">
                            <li class="dt-nav__item dropdown">

                                <!-- Dropdown Link -->
                                <a href="#" class="dt-nav__link dropdown-toggle no-arrow dt-avatar-wrapper"
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img class="dt-avatar size-30" src="https://via.placeholder.com/150x150" alt="Domnic Harris">
                                    <span class="dt-avatar-info d-none d-sm-block">
                <span class="dt-avatar-name">Andy Ranis</span>
              </span> </a>
                                <!-- /dropdown link -->

                                <!-- Dropdown Option -->
                                <div class="dropdown-menu dropdown-menu-right">
                                    <div class="dt-avatar-wrapper flex-nowrap p-6 mt-n2 bg-gradient-purple text-white rounded-top">
                                        <img class="dt-avatar" src="https://via.placeholder.com/150x150" alt="Domnic Harris">
                                        <span class="dt-avatar-info">
                  <span class="dt-avatar-name">Andy Ranis</span>
                  <span class="f-12">Administrator</span>
                </span>
                                    </div>
                                    <a class="dropdown-item" href="javascript:void(0)"> <i class="icon icon-user icon-fw mr-2 mr-sm-1"></i>Account
                                    </a> <a class="dropdown-item" href="javascript:void(0)">
                                        <i class="icon icon-settings icon-fw mr-2 mr-sm-1"></i>Setting </a>
                                    <a class="dropdown-item" href="page-login.html"> <i class="icon icon-editors icon-fw mr-2 mr-sm-1"></i>Logout
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
        <!-- Site Main -->
        <main class="dt-main">
            <!-- Sidebar -->
            <aside id="main-sidebar" class="dt-sidebar">
                <div class="dt-sidebar__container">

                    <!-- Sidebar Navigation -->
                    <ul class="dt-side-nav">

                        <!-- Menu Header -->
                        <li class="dt-side-nav__item dt-side-nav__header">
                            <span class="dt-side-nav__text">NAVIGATIONS</span>
                        </li>
                        <!-- /menu header -->

                        <!-- Menu Item -->
                        <li class="dt-side-nav__item">
                            <a href="#" class="dt-side-nav__link">
                                <i class="icon icon-metrics icon-fw icon-lg"></i>
                                <span class="dt-side-nav__text">OfferWall</span>
                            </a>
                        </li>
                        <li class="dt-side-nav__item">
                            <a href="#" class="dt-side-nav__link">
                                <i class="icon icon-metrics icon-fw icon-lg"></i>
                                <span class="dt-side-nav__text">Surveys</span>
                            </a>
                        </li>
                        <li class="dt-side-nav__item">
                            <a href="#" class="dt-side-nav__link" title="Layouts">
                                <i class="icon icon-layout icon-fw icon-lg"></i>
                                <span class="dt-side-nav__text">Videos</span>
                            </a>
                        </li>
                        <li class="dt-side-nav__item">
                            <a href="#" class="dt-side-nav__link" title="Layouts">
                                <i class="icon icon-layout icon-fw icon-lg"></i>
                                <span class="dt-side-nav__text">Offers</span>
                            </a>
                        </li>
                        <li class="dt-side-nav__item">
                            <a href="#" class="dt-side-nav__link" title="Layouts">
                                <i class="icon icon-layout icon-fw icon-lg"></i>
                                <span class="dt-side-nav__text">Apps</span>
                            </a>
                        </li>
                        <!-- /menu item -->
                    </ul>
                    <!-- /sidebar navigation -->

                </div>
            </aside>
            <!-- /sidebar -->
            <!-- Site Content Wrapper -->
            <div class="dt-content-wrapper">

                <!-- Site Content -->
                <div class="dt-content">
                    <!-- Page Header -->
                    <div class="dt-page__header">
                        <h1 class="dt-page__title">Dashboard - Listing</h1>
                    </div>
                    <!-- /page header -->

                    <!-- Grid -->
                    <div class="row">

                        <!-- Grid Item -->
                        <div class="col-xl-3 col-sm-6 col-12">

                            <!-- Card -->
                            <div class="dt-card">

                                <!-- Card Body -->
                                <div class="dt-card__body px-5 py-4">
                                    <h6 class="text-body text-uppercase mb-2">Listed Property</h6>
                                    <div class="d-flex align-items-baseline mb-4">
                                        <span class="display-4 font-weight-500 text-dark mr-2">26,873</span>

                                        <div class="d-flex align-items-center">
                                            <div class="trending-section font-weight-500 text-success mr-2">
                                                <span class="value">03%</span>
                                            </div>
                                            <span class="f-12">This week</span>
                                        </div>
                                    </div>

                                    <div class="dt-indicator-item__info mb-2" data-fill="62" data-max="100">
                                        <div class="dt-indicator-item__bar">
                                            <div class="dt-indicator-item__fill fill-pointer bg-primary"></div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /bard body -->

                            </div>
                            <!-- /card -->

                        </div>
                        <!-- /grid item -->

                        <!-- Grid Item -->
                        <div class="col-xl-3 col-sm-6 col-12">

                            <!-- Card -->
                            <div class="dt-card">

                                <!-- Card Body -->
                                <div class="dt-card__body px-5 py-4">
                                    <h6 class="text-body text-uppercase mb-2">Serving Cities</h6>
                                    <div class="d-flex align-items-baseline mb-4">
                                        <span class="display-4 font-weight-500 text-dark mr-2">384</span>

                                        <div class="d-flex align-items-center">
                                            <span class="f-12">7 New cities this week</span>
                                        </div>
                                    </div>

                                    <div class="dt-indicator-item__info mb-2" data-fill="48" data-max="100">
                                        <div class="dt-indicator-item__bar">
                                            <div class="dt-indicator-item__fill fill-pointer bg-warning"></div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /bard body -->

                            </div>
                            <!-- /card -->

                        </div>
                        <!-- /grid item -->

                        <!-- Grid Item -->
                        <div class="col-xl-3 col-sm-6 col-12">

                            <!-- Card -->
                            <div class="dt-card">

                                <!-- Card Body -->
                                <div class="dt-card__body px-5 py-4">
                                    <h6 class="text-body text-uppercase mb-2">Online Visitors</h6>
                                    <div class="d-flex align-items-baseline mb-4">
                                        <span class="display-4 font-weight-500 text-dark mr-2">84,729</span>

                                        <div class="d-flex align-items-center">
                                            <span class="f-12">Avg. 327 visits daily</span>
                                        </div>
                                    </div>

                                    <div class="dt-indicator-item__info mb-2" data-fill="85" data-max="100">
                                        <div class="dt-indicator-item__bar">
                                            <div class="dt-indicator-item__fill fill-pointer bg-success"></div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /bard body -->

                            </div>
                            <!-- /card -->

                        </div>
                        <!-- /grid item -->

                        <!-- Grid Item -->
                        <div class="col-xl-3 col-sm-6 col-12">

                            <!-- Card -->
                            <div class="dt-card">

                                <!-- Card Body -->
                                <div class="dt-card__body px-5 py-4">
                                    <h6 class="text-body text-uppercase mb-2">online queries</h6>
                                    <div class="d-flex align-items-baseline mb-4">
                                        <span class="display-4 font-weight-500 text-dark mr-2">87,239</span>

                                        <div class="d-flex align-items-center">
                                            <div class="trending-section font-weight-500 text-success mr-2">
                                                <span class="value">38%</span>
                                                <i class="icon icon-pointer-up"></i>
                                            </div>
                                            <span class="f-12">past month</span>
                                        </div>
                                    </div>

                                    <div class="dt-indicator-item__info mb-2" data-fill="90" data-max="100">
                                        <div class="dt-indicator-item__bar">
                                            <div class="dt-indicator-item__fill fill-pointer bg-secondary"></div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /bard body -->

                            </div>
                            <!-- /card -->

                        </div>
                        <!-- /grid item -->

                    </div>
                    <!-- /grid -->

                    <!-- Grid -->
                    <div class="row">

                        <!-- Grid Item -->
                        <div class="col-xl-4 col-md-6 order-xl-1">

                            <!-- Card -->
                            <div class="dt-card bg-primary text-white">

                                <!-- Card Header -->
                                <div class="dt-card__header pt-6 px-6 mb-4">

                                    <!-- Card Heading -->
                                    <div class="dt-card__heading">
                                        <h3 class="dt-card__title text-white">Your Current Plan</h3>
                                    </div>
                                    <!-- /card heading -->
                                </div>
                                <!-- /card header -->

                                <!-- Card Body -->
                                <div class="dt-card__body px-6">
                                    <!-- Grid -->
                                    <div class="row no-gutters">
                                        <!-- Grid Item -->
                                        <div class="col-6 pr-2 border-right">
                                            <div class="display-1 font-weight-500 mb-3">
                                                $19<span class="d-inline-block f-14">/month</span>
                                            </div>
                                            <ul class="pl-4 mb-0 dt-list-square">
                                                <li>Max listing items 2K</li>
                                                <li>Max agents - 10</li>
                                            </ul>
                                        </div>
                                        <!-- /grid item -->
                                        <!-- Grid Item -->
                                        <div class="col-6 text-center">
                                            <p>Expires in 80 days</p>
                                            <div class="mb-3">
                                                <a href="javascript:void(0)"
                                                   class="btn btn-secondary btn-xs text-uppercase">Renew Plan</a>
                                            </div>
                                            <a href="javascript:void(0)" class="text-white">Other Plans</a>
                                        </div>
                                        <!-- /grid item -->
                                    </div>
                                    <!-- /grid -->
                                </div>
                                <!-- /card body -->

                            </div>
                            <!-- /card -->

                        </div>
                        <!-- /grid item -->

                        <!-- Grid Item -->
                        <div class="col-xl-4 col-md-6 order-xl-3">

                            <!-- Card -->
                            <div class="dt-card">

                                <!-- Card Body -->
                                <div class="dt-card__body p-6">
                                    <!-- Media -->
                                    <div class="media mb-3">

                                        <!-- Avatar -->
                                        <img class="img-fluid mr-6" src="../assets/images/widget/home-logo.jpg"
                                             alt="project">
                                        <!-- /avatar -->

                                        <!-- Media Body -->
                                        <div class="media-body align-self-center">
                                            <div class="h2 mb-1">Modern home</div>
                                            <span class="d-block text-light-gray">Biloxy, Boston</span>
                                        </div>
                                        <!-- /media body -->

                                    </div>
                                    <!-- /media -->

                                    <!-- Card text -->
                                    <p>Structure sales Pvt. Ltd is boston’s reputed government construction company since 2011.</p>
                                    <!-- /card text -->

                                    <!-- Button -->
                                    <a href="javascript:void(0)" class="card-link">Read More</a>
                                    <!-- /button -->

                                </div>
                                <!-- /card body -->

                            </div>
                            <!-- /card -->

                        </div>
                        <!-- /grid item -->

                        <!-- Grid Item -->
                        <div class="col-xl-4 order-xl-2">

                            <!-- Card -->
                            <div class="dt-card">

                                <!-- Card Header -->
                                <div class="dt-card__header mb-0">

                                    <!-- Card Heading -->
                                    <div class="dt-card__heading">
                                        <h3 class="dt-card__title">927 Deals Closed</h3>
                                        <span class="text-light-gray f-12">This year</span>
                                    </div>
                                    <!-- /card heading -->

                                    <!-- Card Tools -->
                                    <div class="dt-card__tools align-self-start">
                    <span class="dt-card__more font-weight-normal mr-1">
                        <span class="dot-shape bg-secondary mr-2"></span>Queries
                    </span>
                                        <span class="dt-card__more font-weight-normal">
                        <span class="dot-shape bg-primary mr-2"></span>Closed Deals
                    </span>
                                    </div>
                                    <!-- /card tools -->

                                </div>
                                <!-- /card header -->

                                <!-- Card Body -->
                                <div class="dt-card__body px-4 pb-1">

                                    <!-- Chart Body -->
                                    <div class="dt-chart__body my-n2">
                                        <div class="ct-line-chart stroke-w-1 stroke-dasharray-0 fill-opacity-0_5"></div>
                                    </div>
                                    <!-- /chart body -->

                                </div>
                                <!-- /card body -->

                            </div>
                            <!-- /card -->

                        </div>
                        <!-- /grid item -->

                        <!-- Grid Item -->
                        <div class="col-xl-8 order-xl-4">
                            <!-- Grid -->
                            <div class="row">

                                <!-- Grid Item -->
                                <div class="col-12">
                                    <div class="w-100 ps-custom-scrollbar mb-6">
                                        <!-- List -->
                                        <ul class="dt-list dt-list-xxl dt-list-bordered flex-nowrap">
                                            <!-- List Item -->
                                            <li class="dt-list__item text-center col">
                                                <div class="dt-avatar-wrapper flex-column">
                                                    <!-- Image -->
                                                    <img src="https://via.placeholder.com/150x150" alt="Noah Owens"
                                                         class="dt-avatar mb-4 size-80">
                                                    <!-- /image -->
                                                    <!-- Content -->
                                                    <div class="dt-avatar-info">
                                                        <span class="dt-avatar-name mb-1 text-nowrap">Noah Owens</span>
                                                        <!-- List -->
                                                        <ul class="dt-list dt-list-bordered dt-list-cm-0 f-12 flex-nowrap">
                                                            <!-- List Item -->
                                                            <li class="dt-list__item">
                                                                <div class="d-inline-flex align-items-center">
                                                                    <i class="icon icon-star-fill mr-2 text-yellow"></i>
                                                                    <span>5.0</span>
                                                                </div>
                                                            </li>
                                                            <!-- /list item -->
                                                            <!-- List Item -->
                                                            <li class="dt-list__item">
                                                                <span class="d-inline-block text-nowrap">21 Deals</span>
                                                            </li>
                                                            <!-- /list item -->
                                                        </ul>
                                                        <!-- /list -->
                                                    </div>
                                                    <!-- /content -->
                                                </div>
                                            </li>
                                            <!-- /list item -->
                                            <!-- List Item -->
                                            <li class="dt-list__item text-center col">
                                                <div class="dt-avatar-wrapper flex-column">
                                                    <!-- Image -->
                                                    <img src="https://via.placeholder.com/150x150"
                                                         alt="Ellen Manning" class="dt-avatar mb-4 size-80">
                                                    <!-- /image -->
                                                    <!-- Content -->
                                                    <div class="dt-avatar-info">
                                                        <span class="dt-avatar-name mb-1 text-nowrap">Ellen Manning</span>
                                                        <!-- List -->
                                                        <ul class="dt-list dt-list-bordered dt-list-cm-0 f-12 flex-nowrap">
                                                            <!-- List Item -->
                                                            <li class="dt-list__item">
                                                                <div class="d-inline-flex align-items-center">
                                                                    <i class="icon icon-star-fill mr-2 text-yellow"></i>
                                                                    <span>5.0</span>
                                                                </div>
                                                            </li>
                                                            <!-- /list item -->
                                                            <!-- List Item -->
                                                            <li class="dt-list__item">
                                                                <span class="d-inline-block text-nowrap">21 Deals</span>
                                                            </li>
                                                            <!-- /list item -->
                                                        </ul>
                                                        <!-- /list -->
                                                    </div>
                                                    <!-- /content -->
                                                </div>
                                            </li>
                                            <!-- /list item -->
                                            <!-- List Item -->
                                            <li class="dt-list__item text-center col">
                                                <div class="dt-avatar-wrapper flex-column">
                                                    <!-- Image -->
                                                    <img src="https://via.placeholder.com/150x150" alt="Angel Jones"
                                                         class="dt-avatar mb-4 size-80">
                                                    <!-- /image -->
                                                    <!-- Content -->
                                                    <div class="dt-avatar-info">
                                                        <span class="dt-avatar-name mb-1 text-nowrap">Angel Jones</span>
                                                        <!-- List -->
                                                        <ul class="dt-list dt-list-bordered dt-list-cm-0 f-12 flex-nowrap">
                                                            <!-- List Item -->
                                                            <li class="dt-list__item">
                                                                <div class="d-inline-flex align-items-center">
                                                                    <i class="icon icon-star-fill mr-2 text-yellow"></i>
                                                                    <span>5.0</span>
                                                                </div>
                                                            </li>
                                                            <!-- /list item -->
                                                            <!-- List Item -->
                                                            <li class="dt-list__item">
                                                                <span class="d-inline-block text-nowrap">21 Deals</span>
                                                            </li>
                                                            <!-- /list item -->
                                                        </ul>
                                                        <!-- /list -->
                                                    </div>
                                                    <!-- /content -->
                                                </div>
                                            </li>
                                            <!-- /list item -->
                                            <!-- List Item -->
                                            <li class="dt-list__item text-center col">
                                                <div class="dt-avatar-wrapper flex-column">
                                                    <!-- Image -->
                                                    <img src="https://via.placeholder.com/150x150" alt="Mila Alba"
                                                         class="dt-avatar mb-4 size-80">
                                                    <!-- /image -->
                                                    <!-- Content -->
                                                    <div class="dt-avatar-info">
                                                        <span class="dt-avatar-name mb-1 text-nowrap">Dollie Norton</span>
                                                        <!-- List -->
                                                        <ul class="dt-list dt-list-bordered dt-list-cm-0 f-12 flex-nowrap">
                                                            <!-- List Item -->
                                                            <li class="dt-list__item">
                                                                <div class="d-inline-flex align-items-center">
                                                                    <i class="icon icon-star-fill mr-2 text-yellow"></i>
                                                                    <span>5.0</span>
                                                                </div>
                                                            </li>
                                                            <!-- /list item -->
                                                            <!-- List Item -->
                                                            <li class="dt-list__item">
                                                                <span class="d-inline-block text-nowrap">21 Deals</span>
                                                            </li>
                                                            <!-- /list item -->
                                                        </ul>
                                                        <!-- /list -->
                                                    </div>
                                                    <!-- /content -->
                                                </div>
                                            </li>
                                            <!-- /list item -->
                                            <!-- List Item -->
                                            <li class="dt-list__item text-center col">
                                                <div class="dt-avatar-wrapper flex-column">
                                                    <!-- Image -->
                                                    <img src="https://via.placeholder.com/150x150"
                                                         alt="Joshua Brian"
                                                         class="dt-avatar mb-4 size-80">
                                                    <!-- /image -->
                                                    <!-- Content -->
                                                    <div class="dt-avatar-info">
                                                        <span class="dt-avatar-name mb-1 text-nowrap">Joshua Brian</span>
                                                        <!-- List -->
                                                        <ul class="dt-list dt-list-bordered dt-list-cm-0 f-12 flex-nowrap">
                                                            <!-- List Item -->
                                                            <li class="dt-list__item">
                                                                <div class="d-inline-flex align-items-center">
                                                                    <i class="icon icon-star-fill mr-2 text-yellow"></i>
                                                                    <span>5.0</span>
                                                                </div>
                                                            </li>
                                                            <!-- /list item -->
                                                            <!-- List Item -->
                                                            <li class="dt-list__item">
                                                                <span class="d-inline-block text-nowrap">21 Deals</span>
                                                            </li>
                                                            <!-- /list item -->
                                                        </ul>
                                                        <!-- /list -->
                                                    </div>
                                                    <!-- /content -->
                                                </div>
                                            </li>
                                            <!-- /list item -->
                                            <!-- List Item -->
                                            <li class="dt-list__item text-center col">
                                                <div class="dt-avatar-wrapper flex-column">
                                                    <!-- Image -->
                                                    <img src="https://via.placeholder.com/150x150" alt="Amay Mathur"
                                                         class="dt-avatar mb-4 size-80">
                                                    <!-- /image -->
                                                    <!-- Content -->
                                                    <div class="dt-avatar-info">
                                                        <span class="dt-avatar-name mb-1 text-nowrap">Amay Mathur</span>
                                                        <!-- List -->
                                                        <ul class="dt-list dt-list-bordered dt-list-cm-0 f-12 flex-nowrap">
                                                            <!-- List Item -->
                                                            <li class="dt-list__item">
                                                                <div class="d-inline-flex align-items-center">
                                                                    <i class="icon icon-star-fill mr-2 text-yellow"></i>
                                                                    <span>5.0</span>
                                                                </div>
                                                            </li>
                                                            <!-- /list item -->
                                                            <!-- List Item -->
                                                            <li class="dt-list__item">
                                                                <span class="d-inline-block text-nowrap">21 Deals</span>
                                                            </li>
                                                            <!-- /list item -->
                                                        </ul>
                                                        <!-- /list -->
                                                    </div>
                                                    <!-- /content -->
                                                </div>
                                            </li>
                                            <!-- /list item -->
                                            <!-- List Item -->
                                            <li class="dt-list__item text-center col">
                                                <div class="dt-avatar-wrapper flex-column">
                                                    <!-- Image -->
                                                    <img src="https://via.placeholder.com/150x150" alt="Selena"
                                                         class="dt-avatar mb-4 size-80">
                                                    <!-- /image -->
                                                    <!-- Content -->
                                                    <div class="dt-avatar-info">
                                                        <span class="dt-avatar-name mb-1 text-nowrap">Selena</span>
                                                        <!-- List -->
                                                        <ul class="dt-list dt-list-bordered dt-list-cm-0 f-12 flex-nowrap">
                                                            <!-- List Item -->
                                                            <li class="dt-list__item">
                                                                <div class="d-inline-flex align-items-center">
                                                                    <i class="icon icon-star-fill mr-2 text-yellow"></i>
                                                                    <span>5.0</span>
                                                                </div>
                                                            </li>
                                                            <!-- /list item -->
                                                            <!-- List Item -->
                                                            <li class="dt-list__item">
                                                                <span class="d-inline-block text-nowrap">21 Deals</span>
                                                            </li>
                                                            <!-- /list item -->
                                                        </ul>
                                                        <!-- /list -->
                                                    </div>
                                                    <!-- /content -->
                                                </div>
                                            </li>
                                            <!-- /list item -->
                                            <!-- List Item -->
                                            <li class="dt-list__item text-center col">
                                                <div class="dt-avatar-wrapper flex-column">
                                                    <!-- Image -->
                                                    <img src="https://via.placeholder.com/150x150" alt="Chris Mathew"
                                                         class="dt-avatar mb-4 size-80">
                                                    <!-- /image -->
                                                    <!-- Content -->
                                                    <div class="dt-avatar-info">
                                                        <span class="dt-avatar-name mb-1 text-nowrap">Chris Mathew</span>
                                                        <!-- List -->
                                                        <ul class="dt-list dt-list-bordered dt-list-cm-0 f-12 flex-nowrap">
                                                            <!-- List Item -->
                                                            <li class="dt-list__item">
                                                                <div class="d-inline-flex align-items-center">
                                                                    <i class="icon icon-star-fill mr-2 text-yellow"></i>
                                                                    <span>5.0</span>
                                                                </div>
                                                            </li>
                                                            <!-- /list item -->
                                                            <!-- List Item -->
                                                            <li class="dt-list__item">
                                                                <span class="d-inline-block text-nowrap">21 Deals</span>
                                                            </li>
                                                            <!-- /list item -->
                                                        </ul>
                                                        <!-- /list -->
                                                    </div>
                                                    <!-- /content -->
                                                </div>
                                            </li>
                                            <!-- /list item -->
                                            <!-- List Item -->
                                            <li class="dt-list__item text-center col">
                                                <div class="dt-avatar-wrapper flex-column">
                                                    <!-- Image -->
                                                    <img src="https://via.placeholder.com/150x150" alt="Nikki Johnson"
                                                         class="dt-avatar mb-4 size-80">
                                                    <!-- /image -->
                                                    <!-- Content -->
                                                    <div class="dt-avatar-info">
                                                        <span class="dt-avatar-name mb-1 text-nowrap">Nikki Johnson</span>
                                                        <!-- List -->
                                                        <ul class="dt-list dt-list-bordered dt-list-cm-0 f-12 flex-nowrap">
                                                            <!-- List Item -->
                                                            <li class="dt-list__item">
                                                                <div class="d-inline-flex align-items-center">
                                                                    <i class="icon icon-star-fill mr-2 text-yellow"></i>
                                                                    <span>5.0</span>
                                                                </div>
                                                            </li>
                                                            <!-- /list item -->
                                                            <!-- List Item -->
                                                            <li class="dt-list__item">
                                                                <span class="d-inline-block text-nowrap">21 Deals</span>
                                                            </li>
                                                            <!-- /list item -->
                                                        </ul>
                                                        <!-- /list -->
                                                    </div>
                                                    <!-- /content -->
                                                </div>
                                            </li>
                                            <!-- /list item -->
                                        </ul>
                                        <!-- /list -->
                                    </div>
                                </div>
                                <!-- /grid item -->

                                <!-- Grid Item -->
                                <div class="col-xl-12">

                                    <!-- Card -->
                                    <div class="card">

                                        <!-- Card header -->
                                        <div class="card-header card-nav border-bottom-0">
                                            <div class="d-flex align-items-center justify-content-between mb-4">
                                                <h3 class="dt-card__title">Properties</h3>

                                                <!-- Search Box -->
                                                <form class="search-box ml-2 max-w-250">
                                                    <input class="form-control form-control-sm"
                                                           placeholder="Search in app..." value=""
                                                           type="search">
                                                    <span class="search-icon">
                                    <i class="icon icon-search icon-lg"></i>
                                </span>
                                                </form>
                                                <!-- /search box -->
                                            </div>
                                            <ul class="card-header-tabs nav nav-tabs nav-tabs-sm nav-scroll mx-0"
                                                role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active" data-toggle="tab" href="#popular"
                                                       role="tab"
                                                       aria-controls="popular"
                                                       aria-selected="true">Popular</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#new-jercy" role="tab"
                                                       aria-controls="new-jercy"
                                                       aria-selected="true">New Jercy</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#colorado" role="tab"
                                                       aria-controls="colorado"
                                                       aria-selected="true">Colorado</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#albama" role="tab"
                                                       aria-controls="albama"
                                                       aria-selected="true">Albama</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- /card header -->

                                        <!-- Tab Content-->
                                        <div class="tab-content">

                                            <!-- Tab panel -->
                                            <div id="popular" class="tab-pane active">

                                                <!-- Card Body -->
                                                <div class="card-body">

                                                    <!-- Card -->
                                                    <div class="card shadow-none horizontal rounded-0 pb-8 border-bottom">

                                                        <!-- Slider -->
                                                        <div class="dt-slider rounded-xl overflow-hidden order-sm-2">

                                                            <!-- Slider Header -->
                                                            <div class="dt-slider__header">

                                                                <span class="badge bg-orange text-white text-uppercase">featured</span>

                                                                <!-- Checkbox -->
                                                                <div class="dt-checkbox dt-checkbox-icon dt-checkbox-only">
                                                                    <input id="checkbox-1" type="checkbox" checked>
                                                                    <label class="font-weight-light dt-checkbox-content"
                                                                           for="checkbox-1">
                                                    <span class="unchecked"><i
                                                                class="icon icon-heart-o text-white"></i></span>
                                                                        <span class="checked"><i
                                                                                    class="icon icon-heart text-white"></i></span>
                                                                    </label>
                                                                </div>
                                                                <!-- /checkbox -->
                                                            </div>
                                                            <!-- /slider header -->

                                                            <div class="owl-carousel owl-theme">
                                                                <img src="https://via.placeholder.com/640x420"
                                                                     alt="Property">
                                                                <img src="https://via.placeholder.com/640x420"
                                                                     alt="Living Room">
                                                                <img src="https://via.placeholder.com/640x420"
                                                                     alt="Bedroom">
                                                            </div>

                                                        </div>
                                                        <!-- /slider -->

                                                        <!-- Card Stacked -->
                                                        <div class="card-stacked order-sm-1">

                                                            <!-- Card Body -->
                                                            <div class="card-body pt-sm-0 pb-0 px-0 pr-sm-6 pr-md-8">

                                                                <!-- Badges -->
                                                                <span class="badge badge-secondary text-uppercase mb-2">For sale</span>
                                                                <!-- /badges -->

                                                                <!-- Card Title-->
                                                                <h3 class="card-title font-weight-normal text-truncate">
                                                                    Luxury family home at beach side
                                                                </h3>
                                                                <!-- Card Title-->

                                                                <!-- Card Sub Title-->
                                                                <h5 class="card-subtitle">South Western Ave</h5>
                                                                <!-- /card sub title-->

                                                                <!-- Pricing -->
                                                                <div class="d-flex align-items-baseline price mb-1">
                                                                    <span class="d-block text-primary font-weight-500 display-5 mr-1">$670,500</span>
                                                                    <span class="d-inline-block text-light-gray f-12">$6705/sqft</span>
                                                                </div>
                                                                <!-- /pricing -->

                                                                <!-- Card Link -->
                                                                <a class="card-link font-weight-500"
                                                                   href="javascript:void(0)">
                                                                    <span>Check in detail</span>
                                                                    <i class="icon icon-arrow-long-right icon-lg ml-1"></i>
                                                                </a>
                                                                <!-- /card link -->

                                                            </div>
                                                            <!-- /card body -->

                                                        </div>
                                                        <!-- /card stacked -->

                                                    </div>
                                                    <!-- /card -->

                                                    <!-- Card -->
                                                    <div class="card shadow-none horizontal rounded-0 pb-8 border-bottom">

                                                        <!-- Slider -->
                                                        <div class="dt-slider rounded-xl overflow-hidden order-sm-2">

                                                            <!-- Slider Header -->
                                                            <div class="dt-slider__header">

                                                                <!-- Checkbox -->
                                                                <div class="dt-checkbox dt-checkbox-icon dt-checkbox-only">
                                                                    <input id="checkbox-2" type="checkbox">
                                                                    <label class="font-weight-light dt-checkbox-content"
                                                                           for="checkbox-2">
                                                    <span class="unchecked"><i
                                                                class="icon icon-heart-o text-white"></i></span>
                                                                        <span class="checked"><i
                                                                                    class="icon icon-heart text-white"></i></span>
                                                                    </label>
                                                                </div>
                                                                <!-- /checkbox -->
                                                            </div>
                                                            <!-- /slider header -->

                                                            <!-- Carousel -->
                                                            <div class="owl-carousel owl-theme">
                                                                <img src="https://via.placeholder.com/640x420"
                                                                     alt="Property">
                                                                <img src="https://via.placeholder.com/640x420"
                                                                     alt="Living Room">
                                                                <img src="https://via.placeholder.com/640x420"
                                                                     alt="Bedroom">
                                                            </div>
                                                            <!-- /carousel -->

                                                        </div>
                                                        <!-- /slider -->

                                                        <!-- Card Stacked -->
                                                        <div class="card-stacked order-sm-1">

                                                            <!-- Card Body -->
                                                            <div class="card-body pt-sm-0 pb-0 px-0 pr-sm-6 pr-md-8">

                                                                <!-- Badges -->
                                                                <span class="badge badge-secondary text-uppercase mb-2">For sale</span>
                                                                <!-- /badges -->

                                                                <!-- Card Title-->
                                                                <h3 class="card-title font-weight-normal text-truncate">
                                                                    Rolex & Brown Housing
                                                                </h3>
                                                                <!-- Card Title-->

                                                                <!-- Card Sub Title-->
                                                                <h5 class="card-subtitle">South Western Ave</h5>
                                                                <!-- /card sub title-->

                                                                <!-- Pricing -->
                                                                <div class="d-flex align-items-baseline price mb-1">
                                                                    <span class="d-block text-primary font-weight-500 display-5 mr-1">$670,500</span>
                                                                    <span class="d-inline-block text-light-gray f-12">$6705/sqft</span>
                                                                </div>
                                                                <!-- /pricing -->

                                                                <!-- Card Link -->
                                                                <a class="card-link font-weight-500"
                                                                   href="javascript:void(0)">
                                                                    <span>Check in detail</span>
                                                                    <i class="icon icon-arrow-long-right icon-lg ml-1"></i>
                                                                </a>
                                                                <!-- /card link -->

                                                            </div>
                                                            <!-- /card body -->

                                                        </div>
                                                        <!-- /card stacked -->

                                                    </div>
                                                    <!-- /card -->

                                                    <!-- Card -->
                                                    <div class="card shadow-none horizontal mb-0">

                                                        <!-- Slider -->
                                                        <div class="dt-slider rounded-xl overflow-hidden order-sm-2">

                                                            <!-- Slider Header -->
                                                            <div class="dt-slider__header">

                                                                <span class="badge bg-orange text-white text-uppercase">featured</span>

                                                                <!-- Checkbox -->
                                                                <div class="dt-checkbox dt-checkbox-icon dt-checkbox-only">
                                                                    <input id="checkbox-3" type="checkbox" checked>
                                                                    <label class="font-weight-light dt-checkbox-content"
                                                                           for="checkbox-3">
                                                    <span class="unchecked"><i
                                                                class="icon icon-heart-o text-white"></i></span>
                                                                        <span class="checked"><i
                                                                                    class="icon icon-heart text-white"></i></span>
                                                                    </label>
                                                                </div>
                                                                <!-- /checkbox -->
                                                            </div>
                                                            <!-- /slider header -->

                                                            <!-- Carousel -->
                                                            <div class="owl-carousel owl-theme">
                                                                <img src="https://via.placeholder.com/640x420"
                                                                     alt="Property">
                                                                <img src="https://via.placeholder.com/640x420"
                                                                     alt="Living Room">
                                                                <img src="https://via.placeholder.com/640x420"
                                                                     alt="Bedroom">
                                                            </div>
                                                            <!-- /carousel -->

                                                        </div>
                                                        <!-- /slider -->

                                                        <!-- Card Stacked -->
                                                        <div class="card-stacked order-sm-1">

                                                            <!-- Card Body -->
                                                            <div class="card-body pt-sm-0 pb-0 px-0 pr-sm-6 pr-md-8">

                                                                <!-- Badges -->
                                                                <span class="badge badge-success text-uppercase mb-2">For Rent</span>
                                                                <!-- /badges -->

                                                                <!-- Card Title-->
                                                                <h3 class="card-title font-weight-normal text-truncate">
                                                                    Seven Bros Studio Homes
                                                                </h3>
                                                                <!-- Card Title-->

                                                                <!-- Card Sub Title-->
                                                                <h5 class="card-subtitle">South Western Ave</h5>
                                                                <!-- /card sub title-->

                                                                <!-- Pricing -->
                                                                <div class="d-flex align-items-baseline price mb-1">
                                                                    <span class="d-block text-primary font-weight-500 display-5 mr-1">$670,500</span>
                                                                    <span class="d-inline-block text-light-gray f-12">$6705/sqft</span>
                                                                </div>
                                                                <!-- /pricing -->

                                                                <!-- Card Link -->
                                                                <a class="card-link font-weight-500"
                                                                   href="javascript:void(0)">
                                                                    <span>Check in detail</span>
                                                                    <i class="icon icon-arrow-long-right icon-lg ml-1"></i>
                                                                </a>
                                                                <!-- /card link -->

                                                            </div>
                                                            <!-- /card body -->

                                                        </div>
                                                        <!-- /card stacked -->

                                                    </div>
                                                    <!-- /card -->

                                                </div>
                                                <!-- /card body -->

                                            </div>
                                            <!-- /tab panel -->

                                            <!-- Tab panel -->
                                            <div id="new-jercy" class="tab-pane">

                                                <!-- Card Body -->
                                                <div class="card-body">

                                                    <!-- Card -->
                                                    <div class="card shadow-none horizontal rounded-0 pb-8 border-bottom">

                                                        <!-- Slider -->
                                                        <div class="dt-slider rounded-xl overflow-hidden order-sm-2">

                                                            <!-- Slider Header -->
                                                            <div class="dt-slider__header">

                                                                <!-- Checkbox -->
                                                                <div class="dt-checkbox dt-checkbox-icon dt-checkbox-only">
                                                                    <input id="checkbox-4" type="checkbox">
                                                                    <label class="font-weight-light dt-checkbox-content"
                                                                           for="checkbox-4">
                                                    <span class="unchecked"><i
                                                                class="icon icon-heart-o text-white"></i></span>
                                                                        <span class="checked"><i
                                                                                    class="icon icon-heart text-white"></i></span>
                                                                    </label>
                                                                </div>
                                                                <!-- /checkbox -->
                                                            </div>
                                                            <!-- /slider header -->

                                                            <!-- Carousel -->
                                                            <div class="owl-carousel owl-theme">
                                                                <img src="https://via.placeholder.com/640x420"
                                                                     alt="Property">
                                                                <img src="https://via.placeholder.com/640x420"
                                                                     alt="Living Room">
                                                                <img src="https://via.placeholder.com/640x420"
                                                                     alt="Bedroom">
                                                            </div>
                                                            <!-- /carousel -->

                                                        </div>
                                                        <!-- /slider -->

                                                        <!-- Card Stacked -->
                                                        <div class="card-stacked order-sm-1">

                                                            <!-- Card Body -->
                                                            <div class="card-body py-sm-0 px-0 pr-sm-6 pr-md-8">

                                                                <!-- Badges -->
                                                                <span class="badge badge-secondary text-uppercase mb-2">For sale</span>
                                                                <!-- /badges -->

                                                                <!-- Card Title-->
                                                                <h3 class="card-title font-weight-normal text-truncate">
                                                                    Rolex & Brown Housing
                                                                </h3>
                                                                <!-- Card Title-->

                                                                <!-- Card Sub Title-->
                                                                <h5 class="card-subtitle">South Western Ave</h5>
                                                                <!-- /card sub title-->

                                                                <!-- Pricing -->
                                                                <div class="d-flex align-items-baseline price mb-1">
                                                                    <span class="d-block text-primary font-weight-500 display-5 mr-1">$670,500</span>
                                                                    <span class="d-inline-block text-light-gray f-12">$6705/sqft</span>
                                                                </div>
                                                                <!-- /pricing -->

                                                                <!-- Card Link -->
                                                                <a class="card-link font-weight-500"
                                                                   href="javascript:void(0)">
                                                                    <span>Check in detail</span>
                                                                    <i class="icon icon-arrow-long-right icon-lg ml-1"></i>
                                                                </a>
                                                                <!-- /card link -->

                                                            </div>
                                                            <!-- /card body -->

                                                        </div>
                                                        <!-- /card stacked -->

                                                    </div>
                                                    <!-- /card -->

                                                    <!-- Card -->
                                                    <div class="card shadow-none horizontal rounded-0 pb-8 border-bottom">

                                                        <!-- Slider -->
                                                        <div class="dt-slider rounded-xl overflow-hidden order-sm-2">

                                                            <!-- Slider Header -->
                                                            <div class="dt-slider__header">

                                                                <span class="badge bg-orange text-white text-uppercase">featured</span>

                                                                <!-- Checkbox -->
                                                                <div class="dt-checkbox dt-checkbox-icon dt-checkbox-only">
                                                                    <input id="checkbox-5" type="checkbox" checked>
                                                                    <label class="font-weight-light dt-checkbox-content"
                                                                           for="checkbox-5">
                                                    <span class="unchecked"><i
                                                                class="icon icon-heart-o text-white"></i></span>
                                                                        <span class="checked"><i
                                                                                    class="icon icon-heart text-white"></i></span>
                                                                    </label>
                                                                </div>
                                                                <!-- /checkbox -->
                                                            </div>
                                                            <!-- /slider header -->

                                                            <div class="owl-carousel owl-theme">
                                                                <img src="https://via.placeholder.com/640x420"
                                                                     alt="Property">
                                                                <img src="https://via.placeholder.com/640x420"
                                                                     alt="Living Room">
                                                                <img src="https://via.placeholder.com/640x420"
                                                                     alt="Bedroom">
                                                            </div>

                                                        </div>
                                                        <!-- /slider -->

                                                        <!-- Card Stacked -->
                                                        <div class="card-stacked order-sm-1">

                                                            <!-- Card Body -->
                                                            <div class="card-body py-sm-0 px-0 pr-sm-6 pr-md-8">

                                                                <!-- Badges -->
                                                                <span class="badge badge-secondary text-uppercase mb-2">For sale</span>
                                                                <!-- /badges -->

                                                                <!-- Card Title-->
                                                                <h3 class="card-title font-weight-normal text-truncate">
                                                                    Luxury family home at beach side
                                                                </h3>
                                                                <!-- Card Title-->

                                                                <!-- Card Sub Title-->
                                                                <h5 class="card-subtitle">South Western Ave</h5>
                                                                <!-- /card sub title-->

                                                                <!-- Pricing -->
                                                                <div class="d-flex align-items-baseline price mb-1">
                                                                    <span class="d-block text-primary font-weight-500 display-5 mr-1">$670,500</span>
                                                                    <span class="d-inline-block text-light-gray f-12">$6705/sqft</span>
                                                                </div>
                                                                <!-- /pricing -->

                                                                <!-- Card Link -->
                                                                <a class="card-link font-weight-500"
                                                                   href="javascript:void(0)">
                                                                    <span>Check in detail</span>
                                                                    <i class="icon icon-arrow-long-right icon-lg ml-1"></i>
                                                                </a>
                                                                <!-- /card link -->

                                                            </div>
                                                            <!-- /card body -->

                                                        </div>
                                                        <!-- /card stacked -->

                                                    </div>
                                                    <!-- /card -->

                                                    <!-- Card -->
                                                    <div class="card shadow-none horizontal mb-0">

                                                        <!-- Slider -->
                                                        <div class="dt-slider rounded-xl overflow-hidden order-sm-2">

                                                            <!-- Slider Header -->
                                                            <div class="dt-slider__header">

                                                                <span class="badge bg-orange text-white text-uppercase">featured</span>

                                                                <!-- Checkbox -->
                                                                <div class="dt-checkbox dt-checkbox-icon dt-checkbox-only">
                                                                    <input id="checkbox-6" type="checkbox" checked>
                                                                    <label class="font-weight-light dt-checkbox-content"
                                                                           for="checkbox-6">
                                                    <span class="unchecked"><i
                                                                class="icon icon-heart-o text-white"></i></span>
                                                                        <span class="checked"><i
                                                                                    class="icon icon-heart text-white"></i></span>
                                                                    </label>
                                                                </div>
                                                                <!-- /checkbox -->
                                                            </div>
                                                            <!-- /slider header -->

                                                            <!-- Carousel -->
                                                            <div class="owl-carousel owl-theme">
                                                                <img src="https://via.placeholder.com/640x420"
                                                                     alt="Property">
                                                                <img src="https://via.placeholder.com/640x420"
                                                                     alt="Living Room">
                                                                <img src="https://via.placeholder.com/640x420"
                                                                     alt="Bedroom">
                                                            </div>
                                                            <!-- /carousel -->

                                                        </div>
                                                        <!-- /slider -->

                                                        <!-- Card Stacked -->
                                                        <div class="card-stacked order-sm-1">

                                                            <!-- Card Body -->
                                                            <div class="card-body py-sm-0 px-0 pr-sm-6 pr-md-8">

                                                                <!-- Badges -->
                                                                <span class="badge badge-success text-uppercase mb-2">For Rent</span>
                                                                <!-- /badges -->

                                                                <!-- Card Title-->
                                                                <h3 class="card-title font-weight-normal text-truncate">
                                                                    Seven Bros Studio Homes
                                                                </h3>
                                                                <!-- Card Title-->

                                                                <!-- Card Sub Title-->
                                                                <h5 class="card-subtitle">South Western Ave</h5>
                                                                <!-- /card sub title-->

                                                                <!-- Pricing -->
                                                                <div class="d-flex align-items-baseline price mb-1">
                                                                    <span class="d-block text-primary font-weight-500 display-5 mr-1">$670,500</span>
                                                                    <span class="d-inline-block text-light-gray f-12">$6705/sqft</span>
                                                                </div>
                                                                <!-- /pricing -->

                                                                <!-- Card Link -->
                                                                <a class="card-link font-weight-500"
                                                                   href="javascript:void(0)">
                                                                    <span>Check in detail</span>
                                                                    <i class="icon icon-arrow-long-right icon-lg ml-1"></i>
                                                                </a>
                                                                <!-- /card link -->

                                                            </div>
                                                            <!-- /card body -->

                                                        </div>
                                                        <!-- /card stacked -->

                                                    </div>
                                                    <!-- /card -->

                                                </div>
                                                <!-- /card body -->

                                            </div>
                                            <!-- /tab panel -->

                                            <!-- Tab panel -->
                                            <div id="colorado" class="tab-pane">

                                                <!-- Card Body -->
                                                <div class="card-body">

                                                    <!-- Card -->
                                                    <div class="card shadow-none horizontal rounded-0 pb-8 border-bottom">

                                                        <!-- Slider -->
                                                        <div class="dt-slider rounded-xl overflow-hidden order-sm-2">

                                                            <!-- Slider Header -->
                                                            <div class="dt-slider__header">

                                                                <span class="badge bg-orange text-white text-uppercase">featured</span>

                                                                <!-- Checkbox -->
                                                                <div class="dt-checkbox dt-checkbox-icon dt-checkbox-only">
                                                                    <input id="checkbox-7" type="checkbox" checked>
                                                                    <label class="font-weight-light dt-checkbox-content"
                                                                           for="checkbox-7">
                                                    <span class="unchecked"><i
                                                                class="icon icon-heart-o text-white"></i></span>
                                                                        <span class="checked"><i
                                                                                    class="icon icon-heart text-white"></i></span>
                                                                    </label>
                                                                </div>
                                                                <!-- /checkbox -->
                                                            </div>
                                                            <!-- /slider header -->

                                                            <!-- Carousel -->
                                                            <div class="owl-carousel owl-theme">
                                                                <img src="https://via.placeholder.com/640x420"
                                                                     alt="Property">
                                                                <img src="https://via.placeholder.com/640x420"
                                                                     alt="Living Room">
                                                                <img src="https://via.placeholder.com/640x420"
                                                                     alt="Bedroom">
                                                            </div>
                                                            <!-- /carousel -->

                                                        </div>
                                                        <!-- /slider -->

                                                        <!-- Card Stacked -->
                                                        <div class="card-stacked order-sm-1">

                                                            <!-- Card Body -->
                                                            <div class="card-body py-sm-0 px-0 pr-sm-6 pr-md-8">

                                                                <!-- Badges -->
                                                                <span class="badge badge-success text-uppercase mb-2">For Rent</span>
                                                                <!-- /badges -->

                                                                <!-- Card Title-->
                                                                <h3 class="card-title font-weight-normal text-truncate">
                                                                    Seven Bros Studio Homes
                                                                </h3>
                                                                <!-- Card Title-->

                                                                <!-- Card Sub Title-->
                                                                <h5 class="card-subtitle">South Western Ave</h5>
                                                                <!-- /card sub title-->

                                                                <!-- Pricing -->
                                                                <div class="d-flex align-items-baseline price mb-1">
                                                                    <span class="d-block text-primary font-weight-500 display-5 mr-1">$670,500</span>
                                                                    <span class="d-inline-block text-light-gray f-12">$6705/sqft</span>
                                                                </div>
                                                                <!-- /pricing -->

                                                                <!-- Card Link -->
                                                                <a class="card-link font-weight-500"
                                                                   href="javascript:void(0)">
                                                                    <span>Check in detail</span>
                                                                    <i class="icon icon-arrow-long-right icon-lg ml-1"></i>
                                                                </a>
                                                                <!-- /card link -->

                                                            </div>
                                                            <!-- /card body -->

                                                        </div>
                                                        <!-- /card stacked -->

                                                    </div>
                                                    <!-- /card -->

                                                    <!-- Card -->
                                                    <div class="card shadow-none horizontal rounded-0 pb-8 border-bottom">

                                                        <!-- Slider -->
                                                        <div class="dt-slider rounded-xl overflow-hidden order-sm-2">

                                                            <!-- Slider Header -->
                                                            <div class="dt-slider__header">

                                                                <!-- Checkbox -->
                                                                <div class="dt-checkbox dt-checkbox-icon dt-checkbox-only">
                                                                    <input id="checkbox-8" type="checkbox">
                                                                    <label class="font-weight-light dt-checkbox-content"
                                                                           for="checkbox-8">
                                                    <span class="unchecked"><i
                                                                class="icon icon-heart-o text-white"></i></span>
                                                                        <span class="checked"><i
                                                                                    class="icon icon-heart text-white"></i></span>
                                                                    </label>
                                                                </div>
                                                                <!-- /checkbox -->
                                                            </div>
                                                            <!-- /slider header -->

                                                            <!-- Carousel -->
                                                            <div class="owl-carousel owl-theme">
                                                                <img src="https://via.placeholder.com/640x420"
                                                                     alt="Property">
                                                                <img src="https://via.placeholder.com/640x420"
                                                                     alt="Living Room">
                                                                <img src="https://via.placeholder.com/640x420"
                                                                     alt="Bedroom">
                                                            </div>
                                                            <!-- /carousel -->

                                                        </div>
                                                        <!-- /slider -->

                                                        <!-- Card Stacked -->
                                                        <div class="card-stacked order-sm-1">

                                                            <!-- Card Body -->
                                                            <div class="card-body py-sm-0 px-0 pr-sm-6 pr-md-8">

                                                                <!-- Badges -->
                                                                <span class="badge badge-secondary text-uppercase mb-2">For sale</span>
                                                                <!-- /badges -->

                                                                <!-- Card Title-->
                                                                <h3 class="card-title font-weight-normal text-truncate">
                                                                    Rolex & Brown Housing
                                                                </h3>
                                                                <!-- Card Title-->

                                                                <!-- Card Sub Title-->
                                                                <h5 class="card-subtitle">South Western Ave</h5>
                                                                <!-- /card sub title-->

                                                                <!-- Pricing -->
                                                                <div class="d-flex align-items-baseline price mb-1">
                                                                    <span class="d-block text-primary font-weight-500 display-5 mr-1">$670,500</span>
                                                                    <span class="d-inline-block text-light-gray f-12">$6705/sqft</span>
                                                                </div>
                                                                <!-- /pricing -->

                                                                <!-- Card Link -->
                                                                <a class="card-link font-weight-500"
                                                                   href="javascript:void(0)">
                                                                    <span>Check in detail</span>
                                                                    <i class="icon icon-arrow-long-right icon-lg ml-1"></i>
                                                                </a>
                                                                <!-- /card link -->

                                                            </div>
                                                            <!-- /card body -->

                                                        </div>
                                                        <!-- /card stacked -->

                                                    </div>
                                                    <!-- /card -->

                                                    <!-- Card -->
                                                    <div class="card shadow-none horizontal mb-0">

                                                        <!-- Slider -->
                                                        <div class="dt-slider rounded-xl overflow-hidden order-sm-2">

                                                            <!-- Slider Header -->
                                                            <div class="dt-slider__header">

                                                                <span class="badge bg-orange text-white text-uppercase">featured</span>

                                                                <!-- Checkbox -->
                                                                <div class="dt-checkbox dt-checkbox-icon dt-checkbox-only">
                                                                    <input id="checkbox-9" type="checkbox" checked>
                                                                    <label class="font-weight-light dt-checkbox-content"
                                                                           for="checkbox-9">
                                                    <span class="unchecked"><i
                                                                class="icon icon-heart-o text-white"></i></span>
                                                                        <span class="checked"><i
                                                                                    class="icon icon-heart text-white"></i></span>
                                                                    </label>
                                                                </div>
                                                                <!-- /checkbox -->
                                                            </div>
                                                            <!-- /slider header -->

                                                            <div class="owl-carousel owl-theme">
                                                                <img src="https://via.placeholder.com/640x420"
                                                                     alt="Property">
                                                                <img src="https://via.placeholder.com/640x420"
                                                                     alt="Living Room">
                                                                <img src="https://via.placeholder.com/640x420"
                                                                     alt="Bedroom">
                                                            </div>

                                                        </div>
                                                        <!-- /slider -->

                                                        <!-- Card Stacked -->
                                                        <div class="card-stacked order-sm-1">

                                                            <!-- Card Body -->
                                                            <div class="card-body py-sm-0 px-0 pr-sm-6 pr-md-8">

                                                                <!-- Badges -->
                                                                <span class="badge badge-secondary text-uppercase mb-2">For sale</span>
                                                                <!-- /badges -->

                                                                <!-- Card Title-->
                                                                <h3 class="card-title font-weight-normal text-truncate">
                                                                    Luxury family home at beach side
                                                                </h3>
                                                                <!-- Card Title-->

                                                                <!-- Card Sub Title-->
                                                                <h5 class="card-subtitle">South Western Ave</h5>
                                                                <!-- /card sub title-->

                                                                <!-- Pricing -->
                                                                <div class="d-flex align-items-baseline price mb-1">
                                                                    <span class="d-block text-primary font-weight-500 display-5 mr-1">$670,500</span>
                                                                    <span class="d-inline-block text-light-gray f-12">$6705/sqft</span>
                                                                </div>
                                                                <!-- /pricing -->

                                                                <!-- Card Link -->
                                                                <a class="card-link font-weight-500"
                                                                   href="javascript:void(0)">
                                                                    <span>Check in detail</span>
                                                                    <i class="icon icon-arrow-long-right icon-lg ml-1"></i>
                                                                </a>
                                                                <!-- /card link -->

                                                            </div>
                                                            <!-- /card body -->

                                                        </div>
                                                        <!-- /card stacked -->

                                                    </div>
                                                    <!-- /card -->

                                                </div>
                                                <!-- /card body -->

                                            </div>
                                            <!-- /tab panel -->

                                            <!-- Tab panel -->
                                            <div id="albama" class="tab-pane">

                                                <!-- Card Body -->
                                                <div class="card-body">

                                                    <!-- Card -->
                                                    <div class="card shadow-none horizontal rounded-0 pb-8 border-bottom">

                                                        <!-- Slider -->
                                                        <div class="dt-slider rounded-xl overflow-hidden order-sm-2">

                                                            <!-- Slider Header -->
                                                            <div class="dt-slider__header">

                                                                <!-- Checkbox -->
                                                                <div class="dt-checkbox dt-checkbox-icon dt-checkbox-only">
                                                                    <input id="checkbox-10" type="checkbox">
                                                                    <label class="font-weight-light dt-checkbox-content"
                                                                           for="checkbox-10">
                                                    <span class="unchecked"><i
                                                                class="icon icon-heart-o text-white"></i></span>
                                                                        <span class="checked"><i
                                                                                    class="icon icon-heart text-white"></i></span>
                                                                    </label>
                                                                </div>
                                                                <!-- /checkbox -->
                                                            </div>
                                                            <!-- /slider header -->

                                                            <!-- Carousel -->
                                                            <div class="owl-carousel owl-theme">
                                                                <img src="https://via.placeholder.com/640x420"
                                                                     alt="Property">
                                                                <img src="https://via.placeholder.com/640x420"
                                                                     alt="Living Room">
                                                                <img src="https://via.placeholder.com/640x420"
                                                                     alt="Bedroom">
                                                            </div>
                                                            <!-- /carousel -->

                                                        </div>
                                                        <!-- /slider -->

                                                        <!-- Card Stacked -->
                                                        <div class="card-stacked order-sm-1">

                                                            <!-- Card Body -->
                                                            <div class="card-body py-sm-0 px-0 pr-sm-6 pr-md-8">

                                                                <!-- Badges -->
                                                                <span class="badge badge-secondary text-uppercase mb-2">For sale</span>
                                                                <!-- /badges -->

                                                                <!-- Card Title-->
                                                                <h3 class="card-title font-weight-normal text-truncate">
                                                                    Rolex & Brown Housing
                                                                </h3>
                                                                <!-- Card Title-->

                                                                <!-- Card Sub Title-->
                                                                <h5 class="card-subtitle">South Western Ave</h5>
                                                                <!-- /card sub title-->

                                                                <!-- Pricing -->
                                                                <div class="d-flex align-items-baseline price mb-1">
                                                                    <span class="d-block text-primary font-weight-500 display-5 mr-1">$670,500</span>
                                                                    <span class="d-inline-block text-light-gray f-12">$6705/sqft</span>
                                                                </div>
                                                                <!-- /pricing -->

                                                                <!-- Card Link -->
                                                                <a class="card-link font-weight-500"
                                                                   href="javascript:void(0)">
                                                                    <span>Check in detail</span>
                                                                    <i class="icon icon-arrow-long-right icon-lg ml-1"></i>
                                                                </a>
                                                                <!-- /card link -->

                                                            </div>
                                                            <!-- /card body -->

                                                        </div>
                                                        <!-- /card stacked -->

                                                    </div>
                                                    <!-- /card -->

                                                    <!-- Card -->
                                                    <div class="card shadow-none horizontal rounded-0 pb-8 border-bottom">

                                                        <!-- Slider -->
                                                        <div class="dt-slider rounded-xl overflow-hidden order-sm-2">

                                                            <!-- Slider Header -->
                                                            <div class="dt-slider__header">

                                                                <span class="badge bg-orange text-white text-uppercase">featured</span>

                                                                <!-- Checkbox -->
                                                                <div class="dt-checkbox dt-checkbox-icon dt-checkbox-only">
                                                                    <input id="checkbox-11" type="checkbox" checked>
                                                                    <label class="font-weight-light dt-checkbox-content"
                                                                           for="checkbox-11">
                                                    <span class="unchecked"><i
                                                                class="icon icon-heart-o text-white"></i></span>
                                                                        <span class="checked"><i
                                                                                    class="icon icon-heart text-white"></i></span>
                                                                    </label>
                                                                </div>
                                                                <!-- /checkbox -->
                                                            </div>
                                                            <!-- /slider header -->

                                                            <!-- Carousel -->
                                                            <div class="owl-carousel owl-theme">
                                                                <img src="https://via.placeholder.com/640x420"
                                                                     alt="Property">
                                                                <img src="https://via.placeholder.com/640x420"
                                                                     alt="Living Room">
                                                                <img src="https://via.placeholder.com/640x420"
                                                                     alt="Bedroom">
                                                            </div>
                                                            <!-- /carousel -->

                                                        </div>
                                                        <!-- /slider -->

                                                        <!-- Card Stacked -->
                                                        <div class="card-stacked order-sm-1">

                                                            <!-- Card Body -->
                                                            <div class="card-body py-sm-0 px-0 pr-sm-6 pr-md-8">

                                                                <!-- Badges -->
                                                                <span class="badge badge-success text-uppercase mb-2">For Rent</span>
                                                                <!-- /badges -->

                                                                <!-- Card Title-->
                                                                <h3 class="card-title font-weight-normal text-truncate">
                                                                    Seven Bros Studio Homes
                                                                </h3>
                                                                <!-- Card Title-->

                                                                <!-- Card Sub Title-->
                                                                <h5 class="card-subtitle">South Western Ave</h5>
                                                                <!-- /card sub title-->

                                                                <!-- Pricing -->
                                                                <div class="d-flex align-items-baseline price mb-1">
                                                                    <span class="d-block text-primary font-weight-500 display-5 mr-1">$670,500</span>
                                                                    <span class="d-inline-block text-light-gray f-12">$6705/sqft</span>
                                                                </div>
                                                                <!-- /pricing -->

                                                                <!-- Card Link -->
                                                                <a class="card-link font-weight-500"
                                                                   href="javascript:void(0)">
                                                                    <span>Check in detail</span>
                                                                    <i class="icon icon-arrow-long-right icon-lg ml-1"></i>
                                                                </a>
                                                                <!-- /card link -->

                                                            </div>
                                                            <!-- /card body -->

                                                        </div>
                                                        <!-- /card stacked -->

                                                    </div>
                                                    <!-- /card -->

                                                    <!-- Card -->
                                                    <div class="card shadow-none horizontal mb-0">

                                                        <!-- Slider -->
                                                        <div class="dt-slider rounded-xl overflow-hidden order-sm-2">

                                                            <!-- Slider Header -->
                                                            <div class="dt-slider__header">

                                                                <span class="badge bg-orange text-white text-uppercase">featured</span>

                                                                <!-- Checkbox -->
                                                                <div class="dt-checkbox dt-checkbox-icon dt-checkbox-only">
                                                                    <input id="checkbox-12" type="checkbox" checked>
                                                                    <label class="font-weight-light dt-checkbox-content"
                                                                           for="checkbox-12">
                                                    <span class="unchecked"><i
                                                                class="icon icon-heart-o text-white"></i></span>
                                                                        <span class="checked"><i
                                                                                    class="icon icon-heart text-white"></i></span>
                                                                    </label>
                                                                </div>
                                                                <!-- /checkbox -->
                                                            </div>
                                                            <!-- /slider header -->

                                                            <div class="owl-carousel owl-theme">
                                                                <img src="https://via.placeholder.com/640x420"
                                                                     alt="Property">
                                                                <img src="https://via.placeholder.com/640x420"
                                                                     alt="Living Room">
                                                                <img src="https://via.placeholder.com/640x420"
                                                                     alt="Bedroom">
                                                            </div>

                                                        </div>
                                                        <!-- /slider -->

                                                        <!-- Card Stacked -->
                                                        <div class="card-stacked order-sm-1">

                                                            <!-- Card Body -->
                                                            <div class="card-body py-sm-0 px-0 pr-sm-6 pr-md-8">

                                                                <!-- Badges -->
                                                                <span class="badge badge-secondary text-uppercase mb-2">For sale</span>
                                                                <!-- /badges -->

                                                                <!-- Card Title-->
                                                                <h3 class="card-title font-weight-normal text-truncate">
                                                                    Luxury family home at beach side
                                                                </h3>
                                                                <!-- Card Title-->

                                                                <!-- Card Sub Title-->
                                                                <h5 class="card-subtitle">South Western Ave</h5>
                                                                <!-- /card sub title-->

                                                                <!-- Pricing -->
                                                                <div class="d-flex align-items-baseline price mb-1">
                                                                    <span class="d-block text-primary font-weight-500 display-5 mr-1">$670,500</span>
                                                                    <span class="d-inline-block text-light-gray f-12">$6705/sqft</span>
                                                                </div>
                                                                <!-- /pricing -->

                                                                <!-- Card Link -->
                                                                <a class="card-link font-weight-500"
                                                                   href="javascript:void(0)">
                                                                    <span>Check in detail</span>
                                                                    <i class="icon icon-arrow-long-right icon-lg ml-1"></i>
                                                                </a>
                                                                <!-- /card link -->

                                                            </div>
                                                            <!-- /card body -->

                                                        </div>
                                                        <!-- /card stacked -->

                                                    </div>
                                                    <!-- /card -->

                                                </div>
                                                <!-- /card body -->

                                            </div>
                                            <!-- /tab panel -->

                                        </div>
                                        <!-- /tab content-->

                                    </div>
                                    <!-- /card -->

                                </div>
                                <!-- /grid item -->

                            </div>
                            <!-- /grid -->

                        </div>
                        <!-- /grid item -->

                        <!-- Grid Item -->
                        <div class="col-xl-4 order-xl-5">

                            <!-- Card -->
                            <div class="dt-card">

                                <!-- Card Header -->
                                <div class="dt-card__header">

                                    <!-- Card Heading -->
                                    <div class="dt-card__heading">
                                        <h3 class="dt-card__title">Recent Activities</h3>
                                    </div>
                                    <!-- /card heading -->

                                </div>
                                <!-- /card header -->

                                <!-- Card Body -->
                                <div class="dt-card__body px-0">

                                    <!-- Widget -->
                                    <div class="dt-widget dt-widget-hover">
                                        <h6 class="dt-widget__heading">Today</h6>
                                        <!-- Widget Item -->
                                        <div class="dt-widget__item">

                                            <!-- Widget Image -->
                                            <div class="dt-widget__img">
                                                <!-- Avatar -->
                                                <img class="dt-avatar size-35 rounded"
                                                     src="https://via.placeholder.com/150x150" alt="User">
                                                <!-- /avatar -->
                                            </div>
                                            <!-- /widget image -->

                                            <!-- Widget Info -->
                                            <div class="dt-widget__info">
                                                <a href="javascript:void(0)" class="dt-widget__title">Mila Alba left a 5
                                                    star review on Albama’s
                                                    House</a>
                                            </div>
                                            <!-- /widget info -->

                                        </div>
                                        <!-- /widgets item -->

                                        <!-- Widget Item -->
                                        <div class="dt-widget__item">

                                            <!-- Widget Image -->
                                            <div class="dt-widget__img">
                                                <!-- Avatar -->
                                                <img class="dt-avatar size-35 rounded"
                                                     src="https://via.placeholder.com/150x150" alt="User">
                                                <!-- /avatar -->
                                            </div>
                                            <!-- /widget image -->

                                            <!-- Widget Info -->
                                            <div class="dt-widget__info">
                                                <a href="javascript:void(0)" class="dt-widget__title">Callback request
                                                    from Bob Builder for the
                                                    property Dimitri House</a>
                                            </div>
                                            <!-- /widget info -->

                                        </div>
                                        <!-- /widgets item -->

                                        <!-- Widget Item -->
                                        <div class="dt-widget__item">

                                            <!-- Widget Image -->
                                            <div class="dt-widget__img">
                                                <!-- Avatar -->
                                                <img class="dt-avatar size-35 rounded"
                                                     src="https://via.placeholder.com/150x150"
                                                     alt="User">
                                                <!-- /avatar -->
                                            </div>
                                            <!-- /widget image -->

                                            <!-- Widget Info -->
                                            <div class="dt-widget__info">
                                                <a href="javascript:void(0)" class="dt-widget__title">Congratulations to
                                                    Tom Moody for joining 10+
                                                    club</a>
                                            </div>
                                            <!-- /widget info -->

                                        </div>
                                        <!-- /widgets item -->

                                        <!-- Widget Item -->
                                        <div class="dt-widget__item">

                                            <!-- Widget Image -->
                                            <div class="dt-widget__img">
                                                <!-- Avatar -->
                                                <span class="dt-avatar size-35 rounded bg-light-blue text-white">NB</span>
                                                <!-- /avatar -->
                                            </div>
                                            <!-- /widget image -->

                                            <!-- Widget Info -->
                                            <div class="dt-widget__info">
                                                <a href="javascript:void(0)" class="dt-widget__title">Norman Dolphi is
                                                    looking for a house in New
                                                    Jersy, USA</a>
                                            </div>
                                            <!-- /widget info -->

                                        </div>
                                        <!-- /widgets item -->
                                    </div>
                                    <!-- /widget -->

                                    <!-- Widget -->
                                    <div class="dt-widget dt-widget-hover">
                                        <h6 class="dt-widget__heading">Yesterday</h6>

                                        <!-- Widget Item -->
                                        <div class="dt-widget__item">

                                            <!-- Widget Image -->
                                            <div class="dt-widget__img">
                                                <!-- Avatar -->
                                                <span class="dt-avatar size-35 rounded bg-light-green text-white">KJ</span>
                                                <!-- /avatar -->
                                            </div>
                                            <!-- /widget image -->

                                            <!-- Widget Info -->
                                            <div class="dt-widget__info">
                                                <a href="javascript:void(0)" class="dt-widget__title">
                                                    Agent Kily Johns has added 7 new photos to the property Albama’s
                                                    House
                                                </a>
                                            </div>
                                            <!-- /widget info -->

                                        </div>
                                        <!-- /widgets item -->

                                        <!-- Widget Item -->
                                        <div class="dt-widget__item">

                                            <!-- Widget Image -->
                                            <div class="dt-widget__img">
                                                <!-- Avatar -->
                                                <img class="dt-avatar size-35 rounded"
                                                     src="https://via.placeholder.com/150x150" alt="User">
                                                <!-- /avatar -->
                                            </div>
                                            <!-- /widget image -->

                                            <!-- Widget Info -->
                                            <div class="dt-widget__info">
                                                <a href="javascript:void(0)" class="dt-widget__title">
                                                    Welcome to a new agent Tom Moody in
                                                    the Company
                                                </a>
                                                <ul class="dt-team-list mt-2">
                                                    <li>
                                                        <!-- Avatar -->
                                                        <a class="dt-avatar size-35 min-w-55 rounded"
                                                           href="javascript:void(0)">
                                                            <img class="img-fluid" src="https://via.placeholder.com/640x420"
                                                                 alt="Beach">
                                                        </a>
                                                        <!-- /avatar -->
                                                    </li>
                                                    <li>
                                                        <!-- Avatar -->
                                                        <a class="dt-avatar size-35 min-w-55 rounded"
                                                           href="javascript:void(0)">
                                                            <img class="img-fluid" src="https://via.placeholder.com/640x420"
                                                                 alt="Sunset">
                                                        </a>
                                                        <!-- /avatar -->
                                                    </li>
                                                    <li>
                                                        <!-- Avatar -->
                                                        <a class="border py-2 px-4 rounded text-light-gray d-inline-block"
                                                           href="javascript:void(0)">
                                                            +5 More
                                                        </a>
                                                        <!-- /avatar -->
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- /widget info -->

                                        </div>
                                        <!-- /widgets item -->

                                        <!-- Widget Item -->
                                        <div class="dt-widget__item">

                                            <!-- Widget Image -->
                                            <div class="dt-widget__img">
                                                <!-- Avatar -->
                                                <span class="dt-avatar size-35 rounded bg-orange text-white">OS</span>
                                                <!-- /avatar -->
                                            </div>
                                            <!-- /widget image -->

                                            <!-- Widget Info -->
                                            <div class="dt-widget__info">
                                                <a href="javascript:void(0)" class="dt-widget__title">
                                                    Oliver Shorter is looking for an office
                                                    space in Colorado, USA
                                                </a>
                                            </div>
                                            <!-- /widget info -->

                                        </div>
                                        <!-- /widgets item -->
                                    </div>
                                    <!-- /widget -->

                                    <!-- Widget Link -->
                                    <div class="dt-widget-link">
                                        <a href="javascript:void(0)" class="text-uppercase font-weight-500">Load
                                            More</a>
                                    </div>
                                    <!-- /widget link -->

                                </div>
                                <!-- /card body -->

                            </div>
                            <!-- /card -->

                        </div>
                        <!-- /grid item -->

                    </div>
                    <!-- /grid -->                    </div>

                <!-- Footer -->
                <footer class="dt-footer">
                    Copyright. RewardsVine © 2020
                </footer>
                <!-- /footer -->
            </div>
            <!-- /site content wrapper -->
        </main>

    </div>
</div>
<!-- /root -->

<?php
$this->load->view('layout_admin/foot');
?>

