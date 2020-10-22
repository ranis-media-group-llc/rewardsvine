<?php
    $this->load->view('layout/head');
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

            <!-- Root Intra -->
            <div class="dt-root__intra">
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
        <a class="dt-brand__logo-link" href="index.html">
          <img class="dt-brand__logo-img d-none d-sm-inline-block" src="/assets/images/header_logo.png" alt="Drift">
          <img class="dt-brand__logo-symbol d-sm-none" src="/assets/images/header_logo.png" alt="Drift">
        </a>
      </span>
                            <!-- /brand logo -->

                        </div>
                        <!-- /brand -->

                        <!-- Header toolbar-->
                        <div class="dt-header__toolbar">

                            <!-- Search box -->
                            <form class="search-box d-none d-lg-block">
                                <input class="form-control" placeholder="Search in app..." value="" type="search">
                                <span class="search-icon"><i class="icon icon-search icon-lg"></i></span>
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
                                <ul class="dt-nav d-lg-none">
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
                                                <i class="flag-icon flag-icon-es mr-2"></i><span>Spanish</span>
                                            </a>
                                        </div>
                                        <!-- /dropdown option -->

                                    </li>
                                    <li class="dt-nav__item dt-notification-app dropdown">

                                        <!-- Dropdown Link -->
                                        <a href="#" class="dt-nav__link dropdown-toggle no-arrow" data-toggle="dropdown"
                                           aria-haspopup="true" aria-expanded="false"> <i class="icon icon-apps icon-sm icon-fw"></i>
                                        </a>
                                        <!-- /dropdown link -->

                                        <!-- Dropdown Option -->
                                        <div class="dropdown-menu dropdown-menu-right ps-custom-scrollbar">

                                            <!-- Apps -->
                                            <ul class="dt-app-list">
                                                <li class="dt-app-list__item">
                                                    <a href="javascript:void(0)" class="dt-app-list__link">
                                                        <img src="../assets/images/icon/icon-achiever.png" alt="Achiever">
                                                        <span class="dt-app-list__text">Achiever</span> </a>
                                                </li>
                                                <li class="dt-app-list__item">
                                                    <a href="javascript:void(0)" class="dt-app-list__link">
                                                        <img src="../assets/images/icon/icon-bookmark.png" alt="Bookmark">
                                                        <span class="dt-app-list__text">Bookmark</span> </a>
                                                </li>
                                                <li class="dt-app-list__item">
                                                    <a href="javascript:void(0)" class="dt-app-list__link">
                                                        <img src="../assets/images/icon/icon-calculator.png" alt="Calculator">
                                                        <span class="dt-app-list__text">Calculator</span> </a>
                                                </li>
                                                <li class="dt-app-list__item">
                                                    <a href="javascript:void(0)" class="dt-app-list__link">
                                                        <img src="../assets/images/icon/icon-camera.png" alt="Camera">
                                                        <span class="dt-app-list__text">Camera</span> </a>
                                                </li>
                                                <li class="dt-app-list__item">
                                                    <a href="javascript:void(0)" class="dt-app-list__link">
                                                        <img src="../assets/images/icon/icon-chat.png" alt="Chat">
                                                        <span class="dt-app-list__text">Chat</span> </a>
                                                </li>
                                                <li class="dt-app-list__item">
                                                    <a href="javascript:void(0)" class="dt-app-list__link">
                                                        <img src="../assets/images/icon/icon-compass.png" alt="Compass">
                                                        <span class="dt-app-list__text">Compass</span> </a>
                                                </li>
                                                <li class="dt-app-list__item">
                                                    <a href="javascript:void(0)" class="dt-app-list__link">
                                                        <img src="../assets/images/icon/icon-locator.png" alt="Locator">
                                                        <span class="dt-app-list__text">Locator</span> </a>
                                                </li>
                                                <li class="dt-app-list__item">
                                                    <a href="javascript:void(0)" class="dt-app-list__link">
                                                        <img src="../assets/images/icon/icon-message.png" alt="Bottle Message">
                                                        <span class="dt-app-list__text">Message</span> </a>
                                                </li>
                                                <li class="dt-app-list__item">
                                                    <a href="javascript:void(0)" class="dt-app-list__link">
                                                        <img src="../assets/images/icon/icon-music.png" alt="Music">
                                                        <span class="dt-app-list__text">Music</span> </a>
                                                </li>
                                                <li class="dt-app-list__item">
                                                    <a href="javascript:void(0)" class="dt-app-list__link">
                                                        <img src="../assets/images/icon/icon-notes.png" alt="Notes">
                                                        <span class="dt-app-list__text">Notes</span> </a>
                                                </li>
                                                <li class="dt-app-list__item">
                                                    <a href="javascript:void(0)" class="dt-app-list__link">
                                                        <img src="../assets/images/icon/icon-sender.png" alt="Sender">
                                                        <span class="dt-app-list__text">Sender</span> </a>
                                                </li>
                                                <li class="dt-app-list__item">
                                                    <a href="javascript:void(0)" class="dt-app-list__link">
                                                        <img src="../assets/images/icon/icon-shopping.png" alt="Shopping">
                                                        <span class="dt-app-list__text">Shopping</span> </a>
                                                </li>
                                                <li class="dt-app-list__item">
                                                    <a href="javascript:void(0)" class="dt-app-list__link">
                                                        <img src="../assets/images/icon/icon-video-chat.png" alt="Video Chat">
                                                        <span class="dt-app-list__text">Video Chat</span> </a>
                                                </li>
                                                <li class="dt-app-list__item">
                                                    <a href="javascript:void(0)" class="dt-app-list__link">
                                                        <img src="../assets/images/icon/icon-watch.png" alt="watch">
                                                        <span class="dt-app-list__text">Watch</span> </a>
                                                </li>
                                                <li class="dt-app-list__item">
                                                    <a href="javascript:void(0)" class="dt-app-list__link">
                                                        <img src="../assets/images/icon/icon-writing.png" alt="Writing">
                                                        <span class="dt-app-list__text">Writing</span> </a>
                                                </li>
                                            </ul>
                                            <!-- /apps -->

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
                                            <img class="dt-avatar size-50" src="/assets/images/avatar1.png" alt="Domnic Harris">
                                            <span class="dt-avatar-info d-none d-sm-block">
                                                <span class="d-block text-light-primary f-10 mb-1">Welcome back!</span>
                                                <span class="dt-avatar-name">RewardsVine User</span>
                                              </span> </a>
                                        <!-- /dropdown link -->

                                        <!-- Dropdown Option -->
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <div class="dt-avatar-wrapper flex-nowrap p-6 mt-n2 bg-gradient-purple text-white rounded-top">
                                                <img class="dt-avatar" src="https://via.placeholder.com/150x150" alt="Domnic Harris">
                                                <span class="dt-avatar-info">
                  <span class="dt-avatar-name">Bob Hyden</span>
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

                        <!-- Sidebar Notification -->
                        <div class="dt-sidebar__notification d-none d-lg-block">
                            <ul class="dt-list dt-list-xl">
                                <li class="dt-list__item">
                                    <a href="javascript:void(0)"
                                       class="dt-fab-btn btn-shadow"
                                       data-toggle="drawer"
                                       data-target="#drawer-notifications"><i class="icon icon-notification2 icon-lg"></i></a>
                                </li>
                                <li class="dt-list__item">
                                    <a href="javascript:void(0)"
                                       class="dt-fab-btn btn-shadow"
                                       data-toggle="drawer"
                                       data-target="#drawer-messages"><i class="icon icon-message icon-lg"></i></a>
                                </li>
                                <li class="dt-list__item">
                                    <a href="javascript:void(0)" class="dt-fab-btn btn-shadow" data-toggle="drawer" data-target="#drawer-list"><i
                                                class="icon icon-menu-lines-new icon-xl"></i></a>
                                </li>
                            </ul>
                        </div>
                        <!-- /sidebar notification -->

                        <div class="dt-sidebar__container">

                            <!-- Sidebar Navigation -->
                            <ul class="dt-side-nav">

                                <!-- Menu Header -->
                                <li class="dt-side-nav__item dt-side-nav__header">
                                    <span class="dt-side-nav__text">EARN</span>
                                </li>
                                <!-- /menu header -->

                                <!-- Menu Item -->
                                <li class="dt-side-nav__item">
                                    <a href="page-metrics.html" class="dt-side-nav__link">
                                        <i class="icon icon-metrics icon-fw icon-lg"></i>
                                        <span class="dt-side-nav__text">OfferWall</span>
                                    </a>
                                </li>
                                <li class="dt-side-nav__item">
                                    <a href="page-metrics.html" class="dt-side-nav__link">
                                        <i class="icon icon-metrics icon-fw icon-lg"></i>
                                        <span class="dt-side-nav__text">Surveys</span>
                                    </a>
                                </li>
                                <li class="dt-side-nav__item">
                                    <a href="page-layouts.html" class="dt-side-nav__link" title="Layouts">
                                        <i class="icon icon-layout icon-fw icon-lg"></i>
                                        <span class="dt-side-nav__text">Videos</span>
                                    </a>
                                </li>
                                <li class="dt-side-nav__item">
                                    <a href="page-layouts.html" class="dt-side-nav__link" title="Layouts">
                                        <i class="icon icon-layout icon-fw icon-lg"></i>
                                        <span class="dt-side-nav__text">Complete Offers</span>
                                    </a>
                                </li>
                                <li class="dt-side-nav__item">
                                    <a href="page-layouts.html" class="dt-side-nav__link" title="Layouts">
                                        <i class="icon icon-layout icon-fw icon-lg"></i>
                                        <span class="dt-side-nav__text">Download Apps</span>
                                    </a>
                                </li>
                                <li class="dt-side-nav__item">
                                    <a href="page-layouts.html" class="dt-side-nav__link" title="Layouts">
                                        <i class="icon icon-layout icon-fw icon-lg"></i>
                                        <span class="dt-side-nav__text">Referral</span>
                                    </a>
                                </li>
                                <!-- /menu item -->
                                <!-- Menu Header -->
                                <li class="dt-side-nav__item dt-side-nav__header">
                                    <span class="dt-side-nav__text">REDEEM</span>
                                </li>
                                <!-- /menu header -->

                                <!-- Menu Item -->
                                <li class="dt-side-nav__item">
                                    <a href="app-task-manager.html" class="dt-side-nav__link">
                                        <i class="icon icon-task-manager icon-fw icon-lg"></i>
                                        <span class="dt-side-nav__text">Gift Cards</span>
                                    </a>
                                </li>
                                <li class="dt-side-nav__item">
                                    <a href="app-mail.html" class="dt-side-nav__link">
                                        <i class="icon icon-mail icon-fw icon-lg"></i>
                                        <span class="dt-side-nav__text">Cryptocurrency</span>
                                    </a>
                                </li>
                                <!-- /menu item -->

                                <!-- Menu Header -->
                                <li class="dt-side-nav__item dt-side-nav__header">
                                    <span class="dt-side-nav__text">MORE</span>
                                </li>
                                <!-- /menu header -->

                                <!-- Menu Item -->
                                <li class="dt-side-nav__item">
                                    <a href="app-task-manager.html" class="dt-side-nav__link">
                                        <i class="icon icon-task-manager icon-fw icon-lg"></i>
                                        <span class="dt-side-nav__text">Profile</span>
                                    </a>
                                </li>
                                <li class="dt-side-nav__item">
                                    <a href="app-task-manager.html" class="dt-side-nav__link">
                                        <i class="icon icon-task-manager icon-fw icon-lg"></i>
                                        <span class="dt-side-nav__text">Settings</span>
                                    </a>
                                </li>
                                <li class="dt-side-nav__item">
                                    <a href="app-task-manager.html" class="dt-side-nav__link">
                                        <i class="icon icon-task-manager icon-fw icon-lg"></i>
                                        <span class="dt-side-nav__text">History</span>
                                    </a>
                                </li>
                                <li class="dt-side-nav__item">
                                    <a href="app-task-manager.html" class="dt-side-nav__link">
                                        <i class="icon icon-task-manager icon-fw icon-lg"></i>
                                        <span class="dt-side-nav__text">FAQ</span>
                                    </a>
                                </li>
                                <li class="dt-side-nav__item">
                                    <a href="app-task-manager.html" class="dt-side-nav__link">
                                        <i class="icon icon-task-manager icon-fw icon-lg"></i>
                                        <span class="dt-side-nav__text">Contact Support</span>
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
                                <h1 class="dt-page__title">OfferWall</h1>
                            </div>
                            <!-- /page header -->

                            <!-- Grid -->
                            <div class="row">

                                <!-- Grid Item -->
                                <div class="col-xl-3 col-sm-6">

                                    <!-- Card -->
                                    <div class="dt-card">

                                        <!-- Card Header -->
                                        <div class="dt-card__header px-5 pt-4 mb-4">

                                            <!-- Card Heading -->
                                            <div class="dt-card__heading">
                                                <h3 class="dt-card__title f-12 font-weight-400">
                                                    <i class="icon icon-bitcoin text-primary mr-1 icon-2x"></i>
                                                    <span class="align-middle">Bitcoin Price</span>
                                                </h3>
                                            </div>
                                            <!-- /card heading -->

                                        </div>
                                        <!-- /card header -->

                                        <!-- Card Body -->
                                        <div class="dt-card__body px-5 pb-4">
                                            <!-- Grid -->
                                            <div class="row no-gutters">

                                                <!-- Grid Item -->
                                                <div class="col-6">
                                                    <div class="d-flex align-items-center">
                                                        <span class="f-16 text-success mr-1">84%</span>
                                                        <i class="icon icon-pointer-up text-success"></i>
                                                    </div>
                                                    <span class="display-4 font-weight-500 text-dark">$9,626</span>
                                                </div>
                                                <!-- /grid item -->

                                                <!-- Grid Item -->
                                                <div class="col-6">

                                                    <!-- Chart Body -->
                                                    <div class="dt-chart__body">
                                                        <div id="ct-widget-line-chart"
                                                             class="height-100 stroke-w-3 drop-shadow stroke-primary mt-n8 mb-n2"></div>
                                                    </div>
                                                    <!-- /chart body -->

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
                                <div class="col-xl-3 col-sm-6">

                                    <!-- Card -->
                                    <div class="dt-card">

                                        <!-- Card Header -->
                                        <div class="dt-card__header px-5 pt-4 mb-4">

                                            <!-- Card Heading -->
                                            <div class="dt-card__heading">
                                                <h3 class="dt-card__title f-12 font-weight-400">
                                                    <i class="icon icon-etherium text-primary mr-1 icon-2x"></i>
                                                    <span class="align-middle">Etherium Price</span>
                                                </h3>
                                            </div>
                                            <!-- /card heading -->

                                        </div>
                                        <!-- /card header -->

                                        <!-- Card Body -->
                                        <div class="dt-card__body px-5 pb-4">
                                            <!-- Grid -->
                                            <div class="row no-gutters">

                                                <!-- Grid Item -->
                                                <div class="col-6">
                                                    <div class="d-flex align-items-center text-success">
                                                        <span class="f-16 mr-1">07%</span>
                                                        <i class="icon icon-pointer-up"></i>
                                                    </div>
                                                    <span class="display-4 font-weight-500 text-dark">$7,831</span>
                                                </div>
                                                <!-- /grid item -->

                                                <!-- Grid Item -->
                                                <div class="col-6">

                                                    <!-- Chart Body -->
                                                    <div class="dt-chart__body">
                                                        <div id="ct-widget-line-chart2"
                                                             class="height-100 stroke-w-3 drop-shadow stroke-success mt-n8 mb-n2"></div>
                                                    </div>
                                                    <!-- /chart body -->

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
                                <div class="col-xl-3 col-sm-6">

                                    <!-- Card -->
                                    <div class="dt-card">

                                        <!-- Card Header -->
                                        <div class="dt-card__header px-5 pt-4 mb-4">

                                            <!-- Card Heading -->
                                            <div class="dt-card__heading">
                                                <h3 class="dt-card__title f-12 font-weight-400">
                                                    <i class="icon icon-ripple text-primary mr-1 icon-2x"></i>
                                                    <span class="align-middle">Ripple Price</span>
                                                </h3>
                                            </div>
                                            <!-- /card heading -->

                                        </div>
                                        <!-- /card header -->

                                        <!-- Card Body -->
                                        <div class="dt-card__body px-5 pb-4">
                                            <!-- Grid -->
                                            <div class="row no-gutters">

                                                <!-- Grid Item -->
                                                <div class="col-6">
                                                    <div class="d-flex align-items-center text-danger">
                                                        <span class="f-16 mr-1">08%</span>
                                                        <i class="icon icon-pointer-down"></i>
                                                    </div>
                                                    <span class="display-4 font-weight-500 text-dark">$1,239</span>
                                                </div>
                                                <!-- /grid item -->

                                                <!-- Grid Item -->
                                                <div class="col-6">

                                                    <!-- Chart Body -->
                                                    <div class="dt-chart__body">
                                                        <div id="ct-widget-line-chart3"
                                                             class="height-100 stroke-w-3 drop-shadow stroke-secondary mt-n8 mb-n2"></div>
                                                    </div>
                                                    <!-- /chart body -->

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
                                <div class="col-xl-3 col-sm-6">
                                    <!-- Card -->
                                    <div class="dt-card">
                                        <!-- Card Header -->
                                        <div class="dt-card__header px-5 pt-4 mb-4">
                                            <!-- Card Heading -->
                                            <div class="dt-card__heading">
                                                <h3 class="dt-card__title f-12 font-weight-400">
                                                    <i class="icon icon-litcoin text-primary mr-1 icon-2x"></i>
                                                    <span class="align-middle">Litecoin Price</span>
                                                </h3>
                                            </div>
                                            <!-- /card heading -->
                                        </div>
                                        <!-- /card header -->

                                        <!-- Card Body -->
                                        <div class="dt-card__body px-5 pb-4">
                                            <!-- Grid -->
                                            <div class="row no-gutters">

                                                <!-- Grid Item -->
                                                <div class="col-6">
                                                    <div class="d-flex align-items-center text-danger">
                                                        <span class="f-16 mr-1">47%</span>
                                                        <i class="icon icon-pointer-down"></i>
                                                    </div>
                                                    <span class="display-4 font-weight-500 text-dark">$849</span>
                                                </div>
                                                <!-- /grid item -->

                                                <!-- Grid Item -->
                                                <div class="col-6">

                                                    <!-- Chart Body -->
                                                    <div class="dt-chart__body">
                                                        <div id="ct-widget-line-chart4"
                                                             class="height-100 stroke-w-3 drop-shadow stroke-warning mt-n8 mb-n2"></div>
                                                    </div>
                                                    <!-- /chart body -->

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
                                <div class="col-xl-6">

                                    <!-- Card -->
                                    <div class="dt-card dt-card__full-height">

                                        <!-- Card Header -->
                                        <div class="dt-card__header mb-4">

                                            <!-- Card Heading -->
                                            <div class="dt-card__heading">
                                                <h3 class="dt-card__title">
                                                    <i class="icon icon-revenue mr-3 icon-xl"></i><span
                                                            class="align-bottom">Your Portfolio Balance</span>
                                                </h3>
                                            </div>
                                            <!-- /card heading -->

                                            <!-- Card Tools -->
                                            <div class="dt-card__tools">
                                                <a href="javascript:void(0)" class="dt-card__more">
                                                    <i class="icon icon-circle-add-o mr-2"></i>Add New
                                                </a>
                                            </div>
                                            <!-- /card tools -->

                                        </div>
                                        <!-- /card header -->

                                        <!-- Card Body -->
                                        <div class="dt-card__body pb-4">
                                            <!-- Grid -->
                                            <div class="row no-gutters">
                                                <!-- Grid Item -->
                                                <div class="col-sm-7 mb-8 mb-sm-0">
                                                    <div class="d-flex align-items-baseline mb-1">
                                                        <span class="display-2 font-weight-500 text-dark mr-2">$179,626</span>
                                                        <div class="trending-section font-weight-500 text-success">
                                                            <span class="value">64%</span>
                                                            <i class="icon icon-pointer-up"></i>
                                                        </div>
                                                    </div>
                                                    <p class="mb-0">Overall balance</p>
                                                </div>
                                                <!-- /grid item -->
                                                <!-- Grid Item -->
                                                <div class="col-sm-5">
                                                    <div class="mb-3">
                                                        <button type="button" class="btn btn-secondary btn-sm mr-2">Deposit
                                                        </button>
                                                        <button type="button" class="btn btn-light btn-sm">Withdraw</button>
                                                    </div>
                                                    <p class="mb-0">A/C: 4578******45</p>
                                                </div>
                                                <!-- /grid item -->
                                            </div>
                                            <!-- /grid -->

                                            <!-- Separator -->
                                            <hr class="my-5">
                                            <!-- /separator -->

                                            <div class="position-relative">
                                                <h5>Portfolio Distribution</h5>
                                                <!-- Grid -->
                                                <div class="row no-gutters">
                                                    <!-- Grid Item -->
                                                    <div class="col-sm-4 col-12 mb-2 mb-sm-0">
                                                        <!-- Media -->
                                                        <div class="media">
                                                            <!-- Circle Progress bar -->
                                                            <div id="circle-progressbar-1" class="mr-3"></div>
                                                            <!-- /circle progress bar -->

                                                            <!-- Media Body -->
                                                            <div class="media-body">
                                                                <h5 class="mb-0">Bitcoin</h5>
                                                                <div class="d-flex align-items-baseline">
                                                                    <span class="display-5 font-weight-500 text-primary mr-2">8.74</span>
                                                                    <div class="trending-section">
                                                                        <span class="value f-12">78%</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- /media body -->
                                                        </div>
                                                        <!-- /media -->
                                                    </div>
                                                    <!-- /grid item -->
                                                    <!-- Grid Item -->
                                                    <div class="col-sm-4 col-12 mb-2 mb-sm-0">
                                                        <!-- Media -->
                                                        <div class="media">
                                                            <!-- Circle Progress bar -->
                                                            <div id="circle-progressbar-2" class="mr-3"></div>
                                                            <!-- /circle progress bar -->

                                                            <!-- Media Body -->
                                                            <div class="media-body">
                                                                <h5 class="mb-0">Etherium</h5>
                                                                <div class="d-flex align-items-baseline">
                                                                    <span class="display-5 font-weight-500 text-primary mr-2">3.68</span>
                                                                    <div class="trending-section">
                                                                        <span class="value f-12">38%</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- /media body -->
                                                        </div>
                                                        <!-- /media -->
                                                    </div>
                                                    <!-- /grid item -->
                                                    <!-- Grid Item -->
                                                    <div class="col-sm-4 col-12">
                                                        <!-- Media -->
                                                        <div class="media">
                                                            <!-- Circle Progress bar -->
                                                            <div id="circle-progressbar-3" class="mr-3"></div>
                                                            <!-- /circle progress bar -->

                                                            <!-- Media Body -->
                                                            <div class="media-body">
                                                                <h5 class="mb-0">Ripple</h5>
                                                                <div class="d-flex align-items-baseline">
                                                                    <span class="display-5 font-weight-500 text-primary mr-2">1.25</span>
                                                                    <div class="trending-section">
                                                                        <span class="value f-12">15%</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- /media body -->
                                                        </div>
                                                        <!-- /media -->
                                                    </div>
                                                    <!-- /grid item -->
                                                </div>
                                                <!-- /grid -->
                                            </div>
                                        </div>
                                        <!-- /card body -->

                                    </div>
                                    <!-- /card -->

                                </div>
                                <!-- /grid item -->

                                <!-- Grid Item -->
                                <div class="col-xl-6">

                                    <!-- Card -->
                                    <div class="dt-card">

                                        <!-- Card Header -->
                                        <div class="dt-card__header">

                                            <!-- Card Heading -->
                                            <div class="dt-card__heading">
                                                <h3 class="dt-card__title">Balance History</h3>
                                            </div>
                                            <!-- /card heading -->

                                            <!-- Card Tools -->
                                            <div class="dt-card__tools">

                                                <!-- Dropdown -->
                                                <div class="dropdown d-inline-block">
                                                    <a class="dropdown-toggle d-inline-block f-12 py-1 px-2 border rounded text-light-gray"
                                                       href="#"
                                                       data-toggle="dropdown"
                                                       aria-haspopup="true" aria-expanded="false">
                                                        Last 30 days
                                                    </a>

                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="javascript:void(0)">Last week</a>
                                                        <a class="dropdown-item" href="javascript:void(0)">Last 6 month</a>
                                                        <a class="dropdown-item" href="javascript:void(0)">Last 1 year</a>
                                                    </div>
                                                </div>
                                                <!-- /dropdown -->

                                            </div>
                                            <!-- /card tools -->

                                        </div>
                                        <!-- /card header -->

                                        <!-- Chart Body -->
                                        <div class="dt-chart__body">
                                            <div id="ct-area-chart"
                                                 class="chart-area-balance height-200 stroke-w-2 fill-opacity-1"></div>
                                        </div>
                                        <!-- /chart body -->

                                    </div>
                                    <!-- /card -->

                                </div>
                                <!-- /grid item -->

                                <!-- Grid Item -->
                                <div class="col-xl-5 col-md-12">

                                    <!-- Card -->
                                    <div class="dt-card dt-card__full-height pb-4">

                                        <!-- Card Header -->
                                        <div class="dt-card__header mb-5">

                                            <!-- Card Heading -->
                                            <div class="dt-card__heading">
                                                <h3 class="dt-card__title">Pricing Updates</h3>
                                            </div>
                                            <!-- /card heading -->

                                            <!-- Card Tools -->
                                            <div class="dt-card__tools">
                                                <a href="javascript:void(0)" class="dt-card__more">
                                                    <i class="icon icon-circle-add-o mr-2"></i>Add New
                                                </a>
                                            </div>
                                            <!-- /card tools -->

                                        </div>
                                        <!-- /card header -->

                                        <!-- Card Body -->
                                        <div class="dt-card__body p-0">
                                            <!-- Widget -->
                                            <div class="dt-widget dt-widget-sm dt-widget-hover">

                                                <!-- Widget Item -->
                                                <div class="dt-widget__item">

                                                    <!-- Widget Image -->
                                                    <div class="dt-widget__img align-self-center">
                                                        <!-- Avatar -->
                                                        <i class="icon icon-ripple2 icon-fw icon-3x text-primary"></i>
                                                        <!-- /avatar -->
                                                    </div>
                                                    <!-- /widget image -->

                                                    <!-- Widget Info -->
                                                    <div class="dt-widget__info text-truncate">
                                                        <div class="dt-widget__title d-flex">
                                                            <span class="f-16 font-weight-500">Ripple</span>
                                                            <div class="trending-section text-success ml-2">
                                                                <span class="value">2.3%</span>
                                                                <i class="icon icon-pointer-up f-10"></i>
                                                            </div>
                                                        </div>
                                                        <p class="mb-0 text-truncate text-light-gray">
                                                            High: $129.00 Low: $129.00
                                                        </p>
                                                    </div>
                                                    <!-- /widget info -->

                                                    <!-- Widget Extra -->
                                                    <div class="dt-widget__extra text-right">
                                                        <!-- Hide Content -->
                                                        <div class="hide-content">
                                                            <!-- Action Button Group -->
                                                            <div class="action-btn-group">
                                                                <button class="btn btn-primary btn-sm">Buy</button>
                                                                <button class="btn btn-secondary btn-sm">Sell</button>
                                                            </div>
                                                            <!-- /action button group -->
                                                        </div>
                                                        <!-- /hide content -->
                                                    </div>
                                                    <!-- /widget extra -->

                                                </div>
                                                <!-- /widgets item -->

                                                <!-- Widget Item -->
                                                <div class="dt-widget__item">

                                                    <!-- Widget Image -->
                                                    <div class="dt-widget__img align-self-center">
                                                        <!-- Avatar -->
                                                        <i class="icon icon-etherium2 icon-fw icon-3x text-primary"></i>
                                                        <!-- /avatar -->
                                                    </div>
                                                    <!-- /widget image -->

                                                    <!-- Widget Info -->
                                                    <div class="dt-widget__info text-truncate">
                                                        <div class="dt-widget__title d-flex">
                                                            <span class="f-16 font-weight-500">Etherium</span>
                                                            <div class="trending-section text-success ml-2">
                                                                <span class="value">2.3%</span>
                                                                <i class="icon icon-pointer-up f-10"></i>
                                                            </div>
                                                        </div>
                                                        <p class="mb-0 text-truncate text-light-gray">
                                                            High: $129.00 Low: $129.00
                                                        </p>
                                                    </div>
                                                    <!-- /widget info -->

                                                    <!-- Widget Extra -->
                                                    <div class="dt-widget__extra text-right">
                                                        <!-- Hide Content -->
                                                        <div class="hide-content">
                                                            <!-- Action Button Group -->
                                                            <div class="action-btn-group">
                                                                <button class="btn btn-primary btn-sm">Buy</button>
                                                                <button class="btn btn-secondary btn-sm">Sell</button>
                                                            </div>
                                                            <!-- /action button group -->
                                                        </div>
                                                        <!-- /hide content -->
                                                    </div>
                                                    <!-- /widget extra -->

                                                </div>
                                                <!-- /widgets item -->

                                                <!-- Widget Item -->
                                                <div class="dt-widget__item">

                                                    <!-- Widget Image -->
                                                    <div class="dt-widget__img align-self-center">
                                                        <!-- Avatar -->
                                                        <i class="icon icon-bitcoin icon-fw icon-3x text-primary"></i>
                                                        <!-- /avatar -->
                                                    </div>
                                                    <!-- /widget image -->

                                                    <!-- Widget Info -->
                                                    <div class="dt-widget__info text-truncate">
                                                        <div class="dt-widget__title d-flex">
                                                            <span class="f-16 font-weight-500">Bitcoin</span>
                                                            <div class="trending-section text-success ml-2">
                                                                <span class="value">2.3%</span>
                                                                <i class="icon icon-pointer-up f-10"></i>
                                                            </div>
                                                        </div>
                                                        <p class="mb-0 text-truncate text-light-gray">
                                                            High: $129.00 Low: $129.00
                                                        </p>
                                                    </div>
                                                    <!-- /widget info -->

                                                    <!-- Widget Extra -->
                                                    <div class="dt-widget__extra text-right">
                                                        <!-- Hide Content -->
                                                        <div class="hide-content">
                                                            <!-- Action Button Group -->
                                                            <div class="action-btn-group">
                                                                <button class="btn btn-primary btn-sm">Buy</button>
                                                                <button class="btn btn-secondary btn-sm">Sell</button>
                                                            </div>
                                                            <!-- /action button group -->
                                                        </div>
                                                        <!-- /hide content -->
                                                    </div>
                                                    <!-- /widget extra -->

                                                </div>
                                                <!-- /widgets item -->

                                                <!-- Widget Item -->
                                                <div class="dt-widget__item">

                                                    <!-- Widget Image -->
                                                    <div class="dt-widget__img align-self-center">
                                                        <!-- Avatar -->
                                                        <i class="icon icon-litcoin icon-fw icon-3x text-primary"></i>
                                                        <!-- /avatar -->
                                                    </div>
                                                    <!-- /widget image -->

                                                    <!-- Widget Info -->
                                                    <div class="dt-widget__info text-truncate">
                                                        <div class="dt-widget__title d-flex">
                                                            <span class="f-16 font-weight-500">Litecoin</span>
                                                            <div class="trending-section text-success ml-2">
                                                                <span class="value">2.3%</span>
                                                                <i class="icon icon-pointer-up f-10"></i>
                                                            </div>
                                                        </div>
                                                        <p class="mb-0 text-truncate text-light-gray">
                                                            High: $129.00 Low: $129.00
                                                        </p>
                                                    </div>
                                                    <!-- /widget info -->

                                                    <!-- Widget Extra -->
                                                    <div class="dt-widget__extra text-right">
                                                        <!-- Hide Content -->
                                                        <div class="hide-content">
                                                            <!-- Action Button Group -->
                                                            <div class="action-btn-group">
                                                                <button class="btn btn-primary btn-sm">Buy</button>
                                                                <button class="btn btn-secondary btn-sm">Sell</button>
                                                            </div>
                                                            <!-- /action button group -->
                                                        </div>
                                                        <!-- /hide content -->
                                                    </div>
                                                    <!-- /widget extra -->

                                                </div>
                                                <!-- /widgets item -->

                                            </div>
                                            <!-- /widget -->
                                        </div>
                                        <!-- /card body -->

                                    </div>
                                    <!-- /card -->

                                </div>
                                <!-- /grid item -->

                                <!-- Grid Item -->
                                <div class="col-xl-4 col-md-6">

                                    <!-- Card -->
                                    <div class="dt-card dt-card__full-height">

                                        <!-- Card Header -->
                                        <div class="dt-card__header mb-6">

                                            <!-- Card Heading -->
                                            <div class="dt-card__heading">
                                                <h3 class="dt-card__title">Currency Calculator</h3>
                                            </div>
                                            <!-- /card heading -->

                                        </div>
                                        <!-- /card header -->

                                        <!-- Card Body -->
                                        <div class="dt-card__body">

                                            <!-- Form -->
                                            <form>
                                                <div class="form-row mb-7">
                                                    <div class="col-sm-4 col-6">
                                                        <label for="currency-type-1">From</label>
                                                        <select class="custom-select custom-select-sm" id="currency-type-1">
                                                            <option selected>BTC</option>
                                                            <option value="1">RPL</option>
                                                            <option value="2">LTE</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-sm-4 col-6">
                                                        <label for="currency-type">From</label>
                                                        <select class="custom-select custom-select-sm" id="currency-type">
                                                            <option selected>USD</option>
                                                            <option value="1">Yen</option>
                                                            <option value="2">Dinar</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-sm-4 col-12 mt-5 mt-sm-0">
                                                        <label for="amount">Amount(BTC)</label>
                                                        <input type="text" class="form-control form-control-sm" id="amount"
                                                               placeholder="Amount">
                                                    </div>
                                                </div>

                                                <div class="mb-6">
                                                    <span class="d-block f-12 mb-1">1 Euro = 1.23 USD</span>
                                                    <h2 class="mb-1 display-4 font-weight-500 text-primary">11466.78 USD</h2>
                                                    <span class="d-block">@ 1 BTC = 6718.72 USD</span>
                                                </div>

                                                <div>
                                                    <button class="btn btn-primary btn-sm f-14 mr-1" type="submit">Buy Now
                                                    </button>
                                                    <button class="btn btn-light btn-sm f-14" type="reset">Reset</button>
                                                </div>
                                            </form>
                                            <!-- /form -->

                                        </div>
                                        <!-- /card body -->

                                    </div>
                                    <!-- /card -->

                                </div>
                                <!-- /grid item -->

                                <!-- Grid Item -->
                                <div class="col-xl-3 col-md-6">

                                    <!-- Card -->
                                    <div class="dt-card dt-card__full-height bg-image-v6 bg-overlay overlay-opacity-0_8 bg-gradient-blue--after text-white">

                                        <!-- Overlay Content -->
                                        <div class="bg-overlay__inner mt-auto">

                                            <!-- Card Body -->
                                            <div class="dt-card__body text-center">

                                                <h3 class="text-white mb-2">Refer & Earn $10</h3>

                                                <p>Reffer us to your friends and earn bonus when they join.</p>
                                                <input type="email" class="form-control form-control-transparent text-center mb-2" placeholder="Enter Email Address">
                                                <a class="btn btn-light btn-block" href="javascript:void(0)">Invite Friends</a>

                                            </div>
                                            <!-- /card body -->

                                        </div>
                                        <!-- /overlay content -->

                                    </div>
                                    <!-- /card -->

                                </div>
                                <!-- /grid item -->

                            </div>
                            <!-- /grid -->

                            <!-- Grid -->
                            <div class="row">

                                <!-- Grid Item -->
                                <div class="col-xl-4 order-xl-2">

                                    <!-- Grid -->
                                    <div class="row">
                                        <!-- Grid Item -->
                                        <div class="col-xl-12 col-md-6">

                                            <!-- Card -->
                                            <div class="dt-card bg-image-v7 bg-overlay bg-overlay-black overlay-opacity-0_1 text-white overflow-hidden">

                                                <!-- Overlay Content -->
                                                <div class="bg-overlay__inner">

                                                    <!-- Card Body -->
                                                    <div class="dt-card__body py-6">

                                                        <!-- Grid -->
                                                        <div class="row no-gutters">

                                                            <!-- Grid Item -->
                                                            <div class="col-sm-7">
                                                                <div class="text-center text-sm-left mb-8 mb-sm-0">
                                                                    <p class="display-5 font-weight-500">
                                                                        Download our app and start quickly
                                                                    </p>
                                                                    <span class="d-block mb-3">Available on</span>
                                                                    <div class="mb-2">
                                                                        <a href="javascript:void(0)" class="d-inline-block">
                                                                            <img src="../assets/images/dashboard/google-play-store.png"
                                                                                 alt="Play Store" class="img-fluid">
                                                                        </a>
                                                                    </div>
                                                                    <div>
                                                                        <a href="javascript:void(0)" class="d-inline-block">
                                                                            <img src="../assets/images/dashboard/apple-app-store.png"
                                                                                 alt="App Store" class="img-fluid">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- /grid item -->

                                                            <!-- Grid Item -->
                                                            <div class="col-sm-5 align-self-sm-end text-center text-sm-right">
                                                                <img class="img-fluid mb-n18"
                                                                     src="../assets/images/dashboard/iphone.png" alt="App Store">
                                                            </div>
                                                            <!-- /grid item -->

                                                        </div>
                                                        <!-- /grid -->

                                                    </div>
                                                    <!-- /card body -->

                                                </div>
                                                <!-- /overlay content -->

                                            </div>
                                            <!-- /card -->

                                        </div>
                                        <!-- /grid item -->

                                        <!-- Grid Item -->
                                        <div class="col-xl-12 col-md-6">

                                            <!-- Card -->
                                            <div class="dt-card">

                                                <!-- Card Header -->
                                                <div class="dt-card__header mb-4">

                                                    <!-- Card Heading -->
                                                    <div class="dt-card__heading">
                                                        <h3 class="dt-card__title">Order History</h3>
                                                    </div>
                                                    <!-- /card heading -->

                                                    <!-- Card Tools -->
                                                    <div class="dt-card__tools">
                                                        <a href="javascript:void(0)" class="dt-card__more">Detailed History</a>
                                                    </div>
                                                    <!-- /card tools -->

                                                </div>
                                                <!-- /card header -->

                                                <!-- Card Body -->
                                                <div class="dt-card__body pb-5">

                                                    <!-- Tables -->
                                                    <div class="table-responsive ps-custom-scrollbar">
                                                        <table class="table table-ordered table-bordered-0 mb-0">
                                                            <thead>
                                                            <tr>
                                                                <th class="text-uppercase">Currency</th>
                                                                <th class="text-uppercase text-right" scope="col">Rate (USD)
                                                                </th>
                                                                <th class="text-uppercase text-center" scope="col">Date</th>
                                                                <th class="text-uppercase text-right" scope="col">Fee</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            <tr>
                                                                <td>0.24 BTC</td>
                                                                <td class="text-right text-nowrap">1 BTC = $740</td>
                                                                <td class="text-center">08.10.17</td>
                                                                <td class="text-right text-danger">-$2.33</td>
                                                            </tr>
                                                            <tr>
                                                                <td>0.32 RPL</td>
                                                                <td class="text-right text-nowrap">1 RPL = $80.2</td>
                                                                <td class="text-center">08.03.17</td>
                                                                <td class="text-right text-danger">-$1.23</td>
                                                            </tr>
                                                            <tr>
                                                                <td>0.24 BTC</td>
                                                                <td class="text-right text-nowrap">1 BTC = $740</td>
                                                                <td class="text-center">07.29.17</td>
                                                                <td class="text-right text-danger">-$3.22</td>
                                                            </tr>
                                                            <tr>
                                                                <td>0.22 BTC</td>
                                                                <td class="text-right text-nowrap">1 BTC = $740</td>
                                                                <td class="text-center">07.28.17</td>
                                                                <td class="text-right text-danger">-$3.22</td>
                                                            </tr>
                                                            <tr>
                                                                <td>0.74 LTE</td>
                                                                <td class="text-right text-nowrap">1 LTE = $99.9</td>
                                                                <td class="text-center">05.22.17</td>
                                                                <td class="text-right text-danger">-$2.21</td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <!-- /tables -->

                                                </div>
                                                <!-- /card body -->

                                            </div>
                                            <!-- /card -->

                                        </div>
                                        <!-- /grid item -->
                                    </div>
                                    <!-- /grid -->

                                </div>
                                <!-- /grid item -->

                                <!-- Grid Item -->
                                <div class="col-xl-8 order-xl-1">

                                    <!-- Card -->
                                    <div class="card">

                                        <!-- Card header -->
                                        <div class="card-header card-nav border-bottom-0">
                                            <div class="d-flex align-items-center justify-content-between mb-4">
                                                <h3 class="dt-card__title">Latest News</h3>

                                                <a href="javascript:void(0)" class="d-inline-block"><i
                                                            class="icon icon-circle-add-o mr-2"></i>Add New</a>
                                            </div>
                                            <ul class="card-header-tabs nav nav-tabs nav-tabs-sm nav-scroll mx-0"
                                                role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active" data-toggle="tab" href="#all"
                                                       role="tab"
                                                       aria-controls="all"
                                                       aria-selected="true">Popular</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#bitcoin" role="tab"
                                                       aria-controls="bitcoin"
                                                       aria-selected="true">Bitcoin</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#litecoin" role="tab"
                                                       aria-controls="litecoin"
                                                       aria-selected="true">Litecoin</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#crypto" role="tab"
                                                       aria-controls="crypto"
                                                       aria-selected="true">Crypto</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- /card header -->

                                        <!-- Tab Content-->
                                        <div class="tab-content">

                                            <!-- Tab panel -->
                                            <div id="all" class="tab-pane active">

                                                <!-- Card Body -->
                                                <div class="card-body">

                                                    <!-- Media List -->
                                                    <div class="media-list media-separator">
                                                        <!-- Media -->
                                                        <div class="media media-news">

                                                            <!-- Image -->
                                                            <img class="img-fluid rounded-xl order-sm-2 ml-sm-10"
                                                                 src="https://via.placeholder.com/640x420" alt="Currency">
                                                            <!-- /image -->

                                                            <!-- Media Body -->
                                                            <div class="media-body order-sm-1">
                                                                <h4 class="mb-2">5 Steps to consider before bying Bitcoins</h4>
                                                                <p class="mb-5">
                                                                    Cras tincidunt sit amet massa at accumsan. Mauris tincidunt
                                                                    tincidunt est, et pulvinar
                                                                    felis pharetra in vestibulum sed.
                                                                </p>
                                                                <div class="text-light-gray mb-2">
                                                                    <i class="icon icon-tag icon-lg mr-2 align-top"></i>
                                                                    BTC, Crypto, Trading, Tips, Cryptocurrency
                                                                </div>

                                                                <a class="d-inline-block font-weight-500 align-middle"
                                                                   href="javascript:void(0)">
                                                                    <span>Ready Full Story</span>
                                                                    <i class="icon icon-arrow-long-right icon-lg ml-1"></i>
                                                                </a>
                                                            </div>
                                                            <!-- /media body -->

                                                        </div>
                                                        <!-- /media -->
                                                        <!-- Media -->
                                                        <div class="media media-news">

                                                            <!-- Image -->
                                                            <img class="img-fluid rounded-xl order-sm-2 ml-sm-10"
                                                                 src="https://via.placeholder.com/640x420" alt="Currency">
                                                            <!-- /image -->

                                                            <!-- Media Body -->
                                                            <div class="media-body order-sm-1">
                                                                <h4 class="mb-2">How online conversion works for crypto currency?</h4>
                                                                <p class="mb-5">
                                                                    Cras tincidunt sit amet massa at accumsan. Mauris tincidunt
                                                                    tincidunt est, et pulvinar
                                                                    felis pharetra in vestibulum sed.
                                                                </p>
                                                                <div class="text-light-gray mb-2">
                                                                    <i class="icon icon-tag icon-lg mr-2 align-top"></i>
                                                                    BTC, Crypto, Trading, Tips, Cryptocurrency
                                                                </div>

                                                                <a class="d-inline-block font-weight-500 align-middle"
                                                                   href="javascript:void(0)">
                                                                    <span>Ready Full Story</span>
                                                                    <i class="icon icon-arrow-long-right icon-lg ml-1"></i>
                                                                </a>
                                                            </div>
                                                            <!-- /media body -->

                                                        </div>
                                                        <!-- /media -->
                                                        <!-- Media -->
                                                        <div class="media media-news">

                                                            <!-- Image -->
                                                            <img class="img-fluid rounded-xl order-sm-2 ml-sm-10"
                                                                 src="https://via.placeholder.com/640x420" alt="Currency">
                                                            <!-- /image -->

                                                            <!-- Media Body -->
                                                            <div class="media-body order-sm-1">
                                                                <h4 class="mb-2">Lock your crypto with top 5 wallets.</h4>
                                                                <p class="mb-5">
                                                                    Cras tincidunt sit amet massa at accumsan. Mauris tincidunt
                                                                    tincidunt est, et pulvinar
                                                                    felis pharetra in vestibulum sed.
                                                                </p>
                                                                <div class="text-light-gray mb-2">
                                                                    <i class="icon icon-tag icon-lg mr-2 align-top"></i>
                                                                    BTC, Crypto, Trading, Tips, Cryptocurrency
                                                                </div>

                                                                <a class="d-inline-block font-weight-500 align-middle"
                                                                   href="javascript:void(0)">
                                                                    <span>Ready Full Story</span>
                                                                    <i class="icon icon-arrow-long-right icon-lg ml-1"></i>
                                                                </a>
                                                            </div>
                                                            <!-- /media body -->

                                                        </div>
                                                        <!-- /media -->
                                                    </div>
                                                    <!-- /media list -->

                                                </div>
                                                <!-- /card body -->

                                            </div>
                                            <!-- /tab panel -->

                                            <!-- Tab panel -->
                                            <div id="bitcoin" class="tab-pane">

                                                <!-- Card Body -->
                                                <div class="card-body">

                                                    <!-- Media List -->
                                                    <div class="media-list media-separator">
                                                        <!-- Media -->
                                                        <div class="media media-news">

                                                            <!-- Image -->
                                                            <img class="img-fluid rounded-xl order-sm-2 ml-sm-10"
                                                                 src="https://via.placeholder.com/640x420"
                                                                 alt="Currency">
                                                            <!-- /image -->

                                                            <!-- Media Body -->
                                                            <div class="media-body order-sm-1">
                                                                <h4 class="mb-2">5 Steps to consider before bying Bitcoins</h4>
                                                                <p class="mb-5">
                                                                    Cras tincidunt sit amet massa at accumsan. Mauris tincidunt
                                                                    tincidunt est, et pulvinar
                                                                    felis pharetra in vestibulum sed.
                                                                </p>
                                                                <div class="text-light-gray mb-2">
                                                                    <i class="icon icon-tag icon-lg mr-2 align-top"></i>
                                                                    BTC, Crypto, Trading, Tips, Cryptocurrency
                                                                </div>

                                                                <a class="d-inline-block font-weight-500 align-middle"
                                                                   href="javascript:void(0)">
                                                                    <span>Ready Full Story</span>
                                                                    <i class="icon icon-arrow-long-right icon-lg ml-1"></i>
                                                                </a>
                                                            </div>
                                                            <!-- /media body -->

                                                        </div>
                                                        <!-- /media -->
                                                        <!-- Media -->
                                                        <div class="media media-news">

                                                            <!-- Image -->
                                                            <img class="img-fluid rounded-xl order-sm-2 ml-sm-10"
                                                                 src="https://via.placeholder.com/640x420"
                                                                 alt="Currency">
                                                            <!-- /image -->

                                                            <!-- Media Body -->
                                                            <div class="media-body order-sm-1">
                                                                <h4 class="mb-2">How online conversion works for crypto currency?</h4>
                                                                <p class="mb-5">
                                                                    Cras tincidunt sit amet massa at accumsan. Mauris tincidunt
                                                                    tincidunt est, et pulvinar
                                                                    felis pharetra in vestibulum sed.
                                                                </p>
                                                                <div class="text-light-gray mb-2">
                                                                    <i class="icon icon-tag icon-lg mr-2 align-top"></i>
                                                                    BTC, Crypto, Trading, Tips, Cryptocurrency
                                                                </div>

                                                                <a class="d-inline-block font-weight-500 align-middle"
                                                                   href="javascript:void(0)">
                                                                    <span>Ready Full Story</span>
                                                                    <i class="icon icon-arrow-long-right icon-lg ml-1"></i>
                                                                </a>
                                                            </div>
                                                            <!-- /media body -->

                                                        </div>
                                                        <!-- /media -->
                                                        <!-- Media -->
                                                        <div class="media media-news">

                                                            <!-- Image -->
                                                            <img class="img-fluid rounded-xl order-sm-2 ml-sm-10"
                                                                 src="https://via.placeholder.com/640x420"
                                                                 alt="Currency">
                                                            <!-- /image -->

                                                            <!-- Media Body -->
                                                            <div class="media-body order-sm-1">
                                                                <h4 class="mb-2">Lock your crypto with top 5 wallets.</h4>
                                                                <p class="mb-5">
                                                                    Cras tincidunt sit amet massa at accumsan. Mauris tincidunt
                                                                    tincidunt est, et pulvinar
                                                                    felis pharetra in vestibulum sed.
                                                                </p>
                                                                <div class="text-light-gray mb-2">
                                                                    <i class="icon icon-tag icon-lg mr-2 align-top"></i>
                                                                    BTC, Crypto, Trading, Tips, Cryptocurrency
                                                                </div>

                                                                <a class="d-inline-block font-weight-500 align-middle"
                                                                   href="javascript:void(0)">
                                                                    <span>Ready Full Story</span>
                                                                    <i class="icon icon-arrow-long-right icon-lg ml-1"></i>
                                                                </a>
                                                            </div>
                                                            <!-- /media body -->

                                                        </div>
                                                        <!-- /media -->
                                                    </div>
                                                    <!-- /media list -->

                                                </div>
                                                <!-- /card body -->

                                            </div>
                                            <!-- /tab panel -->

                                            <!-- Tab panel -->
                                            <div id="litecoin" class="tab-pane">

                                                <!-- Card Body -->
                                                <div class="card-body">

                                                    <!-- Media List -->
                                                    <div class="media-list media-separator">
                                                        <!-- Media -->
                                                        <div class="media media-news">

                                                            <!-- Image -->
                                                            <img class="img-fluid rounded-xl order-sm-2 ml-sm-10"
                                                                 src="https://via.placeholder.com/640x420" alt="Currency">
                                                            <!-- /image -->

                                                            <!-- Media Body -->
                                                            <div class="media-body order-sm-1">
                                                                <h4 class="mb-2">Lock your crypto with top 5 wallets.</h4>
                                                                <p class="mb-5">
                                                                    Cras tincidunt sit amet massa at accumsan. Mauris tincidunt
                                                                    tincidunt est, et pulvinar
                                                                    felis pharetra in vestibulum sed.
                                                                </p>
                                                                <div class="text-light-gray mb-2">
                                                                    <i class="icon icon-tag icon-lg mr-2 align-top"></i>
                                                                    BTC, Crypto, Trading, Tips, Cryptocurrency
                                                                </div>

                                                                <a class="d-inline-block font-weight-500 align-middle"
                                                                   href="javascript:void(0)">
                                                                    <span>Ready Full Story</span>
                                                                    <i class="icon icon-arrow-long-right icon-lg ml-1"></i>
                                                                </a>
                                                            </div>
                                                            <!-- /media body -->

                                                        </div>
                                                        <!-- /media -->
                                                        <!-- Media -->
                                                        <div class="media media-news">

                                                            <!-- Image -->
                                                            <img class="img-fluid rounded-xl order-sm-2 ml-sm-10"
                                                                 src="https://via.placeholder.com/640x420" alt="Currency">
                                                            <!-- /image -->

                                                            <!-- Media Body -->
                                                            <div class="media-body order-sm-1">
                                                                <h4 class="mb-2">5 Steps to consider before bying Bitcoins</h4>
                                                                <p class="mb-5">
                                                                    Cras tincidunt sit amet massa at accumsan. Mauris tincidunt
                                                                    tincidunt est, et pulvinar
                                                                    felis pharetra in vestibulum sed.
                                                                </p>
                                                                <div class="text-light-gray mb-2">
                                                                    <i class="icon icon-tag icon-lg mr-2 align-top"></i>
                                                                    BTC, Crypto, Trading, Tips, Cryptocurrency
                                                                </div>

                                                                <a class="d-inline-block font-weight-500 align-middle"
                                                                   href="javascript:void(0)">
                                                                    <span>Ready Full Story</span>
                                                                    <i class="icon icon-arrow-long-right icon-lg ml-1"></i>
                                                                </a>
                                                            </div>
                                                            <!-- /media body -->

                                                        </div>
                                                        <!-- /media -->
                                                        <!-- Media -->
                                                        <div class="media media-news">

                                                            <!-- Image -->
                                                            <img class="img-fluid rounded-xl order-sm-2 ml-sm-10"
                                                                 src="https://via.placeholder.com/640x420" alt="Currency">
                                                            <!-- /image -->

                                                            <!-- Media Body -->
                                                            <div class="media-body order-sm-1">
                                                                <h4 class="mb-2">How online conversion works for crypto currency?</h4>
                                                                <p class="mb-5">
                                                                    Cras tincidunt sit amet massa at accumsan. Mauris tincidunt
                                                                    tincidunt est, et pulvinar
                                                                    felis pharetra in vestibulum sed.
                                                                </p>
                                                                <div class="text-light-gray mb-2">
                                                                    <i class="icon icon-tag icon-lg mr-2 align-top"></i>
                                                                    BTC, Crypto, Trading, Tips, Cryptocurrency
                                                                </div>

                                                                <a class="d-inline-block font-weight-500 align-middle"
                                                                   href="javascript:void(0)">
                                                                    <span>Ready Full Story</span>
                                                                    <i class="icon icon-arrow-long-right icon-lg ml-1"></i>
                                                                </a>
                                                            </div>
                                                            <!-- /media body -->

                                                        </div>
                                                        <!-- /media -->
                                                    </div>
                                                    <!-- /media list -->

                                                </div>
                                                <!-- /card body -->

                                            </div>
                                            <!-- /tab panel -->

                                            <!-- Tab panel -->
                                            <div id="crypto" class="tab-pane">

                                                <!-- Card Body -->
                                                <div class="card-body">

                                                    <!-- Media List -->
                                                    <div class="media-list media-separator">
                                                        <!-- Media -->
                                                        <div class="media media-news">

                                                            <!-- Image -->
                                                            <img class="img-fluid rounded-xl order-sm-2 ml-sm-10"
                                                                 src="https://via.placeholder.com/640x420"
                                                                 alt="Currency">
                                                            <!-- /image -->

                                                            <!-- Media Body -->
                                                            <div class="media-body order-sm-1">
                                                                <h4 class="mb-2">Lock your crypto with top 5 wallets.</h4>
                                                                <p class="mb-5">
                                                                    Cras tincidunt sit amet massa at accumsan. Mauris tincidunt
                                                                    tincidunt est, et pulvinar
                                                                    felis pharetra in vestibulum sed.
                                                                </p>
                                                                <div class="text-light-gray mb-2">
                                                                    <i class="icon icon-tag icon-lg mr-2 align-top"></i>
                                                                    BTC, Crypto, Trading, Tips, Cryptocurrency
                                                                </div>

                                                                <a class="d-inline-block font-weight-500 align-middle"
                                                                   href="javascript:void(0)">
                                                                    <span>Ready Full Story</span>
                                                                    <i class="icon icon-arrow-long-right icon-lg ml-1"></i>
                                                                </a>
                                                            </div>
                                                            <!-- /media body -->

                                                        </div>
                                                        <!-- /media -->
                                                        <!-- Media -->
                                                        <div class="media media-news">

                                                            <!-- Image -->
                                                            <img class="img-fluid rounded-xl order-sm-2 ml-sm-10"
                                                                 src="https://via.placeholder.com/640x420"
                                                                 alt="Currency">
                                                            <!-- /image -->

                                                            <!-- Media Body -->
                                                            <div class="media-body order-sm-1">
                                                                <h4 class="mb-2">5 Steps to consider before bying Bitcoins</h4>
                                                                <p class="mb-5">
                                                                    Cras tincidunt sit amet massa at accumsan. Mauris tincidunt
                                                                    tincidunt est, et pulvinar
                                                                    felis pharetra in vestibulum sed.
                                                                </p>
                                                                <div class="text-light-gray mb-2">
                                                                    <i class="icon icon-tag icon-lg mr-2 align-top"></i>
                                                                    BTC, Crypto, Trading, Tips, Cryptocurrency
                                                                </div>

                                                                <a class="d-inline-block font-weight-500 align-middle"
                                                                   href="javascript:void(0)">
                                                                    <span>Ready Full Story</span>
                                                                    <i class="icon icon-arrow-long-right icon-lg ml-1"></i>
                                                                </a>
                                                            </div>
                                                            <!-- /media body -->

                                                        </div>
                                                        <!-- /media -->
                                                        <!-- Media -->
                                                        <div class="media media-news">

                                                            <!-- Image -->
                                                            <img class="img-fluid rounded-xl order-sm-2 ml-sm-10"
                                                                 src="https://via.placeholder.com/640x420"
                                                                 alt="Currency">
                                                            <!-- /image -->

                                                            <!-- Media Body -->
                                                            <div class="media-body order-sm-1">
                                                                <h4 class="mb-2">How online conversion works for crypto currency?</h4>
                                                                <p class="mb-5">
                                                                    Cras tincidunt sit amet massa at accumsan. Mauris tincidunt
                                                                    tincidunt est, et pulvinar
                                                                    felis pharetra in vestibulum sed.
                                                                </p>
                                                                <div class="text-light-gray mb-2">
                                                                    <i class="icon icon-tag icon-lg mr-2 align-top"></i>
                                                                    BTC, Crypto, Trading, Tips, Cryptocurrency
                                                                </div>

                                                                <a class="d-inline-block font-weight-500 align-middle"
                                                                   href="javascript:void(0)">
                                                                    <span>Ready Full Story</span>
                                                                    <i class="icon icon-arrow-long-right icon-lg ml-1"></i>
                                                                </a>
                                                            </div>
                                                            <!-- /media body -->

                                                        </div>
                                                        <!-- /media -->
                                                    </div>
                                                    <!-- /media list -->

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
                            <!-- /grid -->                        </div>

                        <!-- Footer -->
                        <footer class="dt-footer">
                            Copyright Company Name © 2019
                        </footer>
                        <!-- /footer -->
                    </div>
                    <!-- /site content wrapper -->

                </main>
            </div>

            <!-- Theme Chooser
            <div class="dt-customizer-toggle">
                <a href="javascript:void(0)" data-toggle="customizer"> <i class="icon icon-customizer animation-customizer"></i> </a>
            </div>
          theme chooser -->

            <!-- Customizer Sidebar -->
            <aside class="dt-customizer dt-drawer position-right">
                <div class="dt-customizer__inner">

                    <!-- Customizer Header -->
                    <div class="dt-customizer__header">

                        <!-- Customizer Title -->
                        <div class="dt-customizer__title">
                            <h3 class="mb-0">Theme Settings</h3>
                        </div>
                        <!-- /customizer title -->

                        <!-- Close Button -->
                        <button type="button" class="close" data-toggle="customizer">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <!-- /close button -->

                    </div>
                    <!-- /customizer header -->

                    <!-- Customizer Body -->
                    <div class="dt-customizer__body ps-custom-scrollbar">
                        <!-- Customizer Body Inner  -->
                        <div class="dt-customizer__body-inner">

                            <!-- Section -->
                            <section class="d-none d-lg-block" id="layout-chooser">
                                <h4>Layout</h4>

                                <!-- List -->
                                <ul class="dt-list dt-list-sm">
                                    <li class="dt-list__item">
                                        <div class="choose-option">
                                            <a href="javascript:void(0)" class="choose-option__icon" data-layout="framed">
                                                <img src="../assets/images/customizer-icons/framed.png" alt="Framed">
                                            </a>
                                            <span class="choose-option__name">Framed</span>
                                        </div>
                                    </li>
                                    <li class="dt-list__item">
                                        <div class="choose-option">
                                            <a href="javascript:void(0)" class="choose-option__icon" data-layout="full-width">
                                                <img src="../assets/images/customizer-icons/full-width.png" alt="Full Width">
                                            </a>
                                            <span class="choose-option__name">Full Width</span>
                                        </div>
                                    </li>
                                    <li class="dt-list__item">
                                        <div class="choose-option">
                                            <a href="javascript:void(0)" class="choose-option__icon" data-layout="boxed">
                                                <img src="../assets/images/customizer-icons/boxed.png" alt="Boxed">
                                            </a>
                                            <span class="choose-option__name">Boxed</span>
                                        </div>
                                    </li>
                                </ul>
                                <!-- /list -->

                            </section>
                            <!-- /section -->

                            <!-- Section -->
                            <section>
                                <h4>Nav Style</h4>

                                <!-- List -->
                                <ul class="dt-list">
                                    <li class="dt-list__item">
                                        <div class="choose-option">
                                            <a href="http://drift-admin.g-axon.work/default" target="_blank" class="choose-option__icon">
                                                <img src="../assets/images/customizer-icons/layout-default.png" alt="Layout Default">
                                            </a>
                                            <span class="choose-option__name">Default</span>
                                        </div>
                                    </li>
                                    <li class="dt-list__item">
                                        <div class="choose-option">
                                            <a href="http://drift-admin.g-axon.work/saas" target="_blank" class="choose-option__icon">
                                                <img src="../assets/images/customizer-icons/layout-saas.png" alt="Layout SAAS">
                                            </a>
                                            <span class="choose-option__name">SAAS Layout</span>
                                        </div>
                                    </li>
                                    <li class="dt-list__item">
                                        <div class="choose-option">
                                            <a href="http://drift-admin.g-axon.work/listing" target="_blank" class="choose-option__icon">
                                                <img src="../assets/images/customizer-icons/layout-listing.png" alt="Layout listing">
                                            </a>
                                            <span class="choose-option__name">Listing</span>
                                        </div>
                                    </li>
                                    <li class="dt-list__item">
                                        <div class="choose-option active">
                                            <a href="http://drift-admin.g-axon.work/intranet" target="_blank" class="choose-option__icon">
                                                <img src="../assets/images/customizer-icons/layout-intranet.png" alt="Layout Intranet">
                                            </a>
                                            <span class="choose-option__name">Intranet</span>
                                        </div>
                                    </li>
                                    <li class="dt-list__item">
                                        <div class="choose-option">
                                            <a href="http://drift-admin.g-axon.work/back-office" target="_blank" class="choose-option__icon">
                                                <img src="../assets/images/customizer-icons/layout-back-office.png" alt="Layout Back Office">
                                            </a>
                                            <span class="choose-option__name">Back Office</span>
                                        </div>
                                    </li>
                                    <li class="dt-list__item">
                                        <div class="choose-option">
                                            <a href="http://drift-admin.g-axon.work/back-office-mini" target="_blank" class="choose-option__icon">
                                                <img src="../assets/images/customizer-icons/layout-back-office-mini.png"
                                                     alt="Layout Back Office Minimal">
                                            </a>
                                            <span class="choose-option__name">Back Office Minimal</span>
                                        </div>
                                    </li>
                                    <li class="dt-list__item">
                                        <div class="choose-option">
                                            <a href="http://drift-admin.g-axon.work/modern" target="_blank" class="choose-option__icon">
                                                <img src="../assets/images/customizer-icons/layout-modern.png" alt="Layout Modern">
                                            </a>
                                            <span class="choose-option__name">Modern</span>
                                        </div>
                                    </li>
                                    <li class="dt-list__item">
                                        <div class="choose-option">
                                            <a href="http://drift-admin.g-axon.work/crm" target="_blank" class="choose-option__icon">
                                                <img src="../assets/images/customizer-icons/layout-crm.png" alt="Layout CRM">
                                            </a>
                                            <span class="choose-option__name">CRM</span>
                                        </div>
                                    </li>
                                </ul>
                                <!-- /list -->

                            </section>
                            <!-- /section -->

                            <!-- Section -->
                            <section class="d-lg-block">
                                <h4>RTL Version</h4>

                                <a class="btn btn-primary mb-2 btn-block" href="http://drift-admin-rtl.g-axon.work/intranet"><i class="icon-open-new-tab"></i> Try RTL Demo</a>

                            </section>
                            <!-- /section -->

                        </div>
                        <!-- /customizer body inner -->
                    </div>
                    <!-- /customizer body -->

                </div>
            </aside>
            <!-- /customizer sidebar -->            <!-- Drawer -->
            <div class="dt-drawer position-left" id="dt-notification-drawer">

                <div class="p-6">
                    <a href="javascript:void(0)" class="d-inline-block" data-dismiss="drawer">
                        <i class="icon icon-arrow-long-left icon-2x mr-3"></i> <span
                                class="align-middle">Back</span>
                    </a>
                </div>

                <!-- Actionable Drawer -->
                <div class="dt-actionable-drawer">

                    <!-- Menu Bar -->
                    <div class="dt-action-bar">

                        <!-- Action Menu -->
                        <ul class="dt-action-nav">

                            <!-- Menu Item -->
                            <li class="dt-action-nav__item">
                                <a href="javascript:void(0)" class="dt-action-nav__link" data-switch="drawer"
                                   data-target="#drawer-notifications">
                                    <i class="icon icon-notification2 icon-fw"></i> </a>
                            </li>
                            <!-- /menu item -->

                            <!-- Menu Item -->
                            <li class="dt-action-nav__item">
                                <a href="javascript:void(0)" class="dt-action-nav__link" data-switch="drawer"
                                   data-target="#drawer-messages">
                                    <i class="icon icon-message icon-fw"></i> </a>
                            </li>
                            <!-- /menu item -->

                            <!-- Menu Item -->
                            <li class="dt-action-nav__item">
                                <a href="javascript:void(0)" class="dt-action-nav__link" data-switch="drawer"
                                   data-target="#drawer-list">
                                    <i class="icon icon-menu-lines-new icon-xl"></i> </a>
                            </li>
                            <!-- /menu item -->

                        </ul>
                        <!-- /action menu -->

                    </div>
                    <!-- /menu bar -->

                    <!-- Drawer Content Area -->
                    <div class="dt-action-content-wrapper ps-custom-scrollbar">

                        <div class="dt-action-content">

                            <!-- Search -->
                            <div class="dt-notification fade" id="drawer-list">
                                <!-- Search Box -->
                                <form class="search-box right-side-icon mw-100 mb-8">
                                    <input class="form-control form-control-lg" id="address" name="address"
                                           placeholder="Search in app..." type="search">
                                    <button type="submit" class="search-icon"><i
                                                class="icon icon-search icon-lg"></i>
                                    </button>
                                </form>
                                <!-- /search box -->

                                <h4>Recently Viewed</h4>

                                <!-- Search Result-->
                                <div class="search-result">
                                    <a href="javascript:void(0)" class="dt-avatar-wrapper">
                                        <!-- Avatar -->
                                        <span class="dt-avatar bg-primary text-white font-italic">PHP</span>
                                        <!-- /avatar -->

                                        <!-- Avatar Info -->
                                        <span class="dt-avatar-info">
                                <span class="dt-avatar-name">Chat Bull</span>
                                <span class="f-12">Example Web</span>
                            </span>
                                        <!-- /avatar info -->

                                    </a>
                                </div>
                                <!-- /search result-->

                                <!-- Search Result-->
                                <div class="search-result">
                                    <a href="javascript:void(0)" class="dt-avatar-wrapper">
                                        <!-- Avatar -->
                                        <span class="dt-avatar bg-primary text-white font-italic">Ant</span>
                                        <!-- /avatar -->

                                        <!-- Avatar Info -->
                                        <span class="dt-avatar-info">
                                <span class="dt-avatar-name">Flexile</span>
                                <span class="f-12">Example Web</span>
                            </span>
                                        <!-- /avatar info -->

                                    </a>
                                </div>
                                <!-- /search result-->

                                <!-- Search Result-->
                                <div class="search-result">
                                    <a href="javascript:void(0)" class="dt-avatar-wrapper">
                                        <!-- Avatar -->
                                        <span class="dt-avatar bg-primary text-white font-italic">React</span>
                                        <!-- /avatar -->

                                        <!-- Avatar Info -->
                                        <span class="dt-avatar-info">
                                <span class="dt-avatar-name">Admin Template</span>
                                <span class="f-12">Example Web</span>
                            </span>
                                        <!-- /avatar info -->

                                    </a>
                                </div>
                                <!-- /search result-->

                            </div>
                            <!-- /search -->

                            <!-- Notification -->
                            <div class="dt-notification fade" id="drawer-notifications">

                                <div class="d-flex align-items-center mb-6">
                                    <h5 class="mb-0">Notifications (7)</h5>

                                    <div class="ml-auto action-area">
                                        <a href="javascript:void(0)">Mark All Read</a>

                                        <!-- Dropdown -->
                                        <span class="dropdown ml-2 d-inline-block">
                                <a class="dropdown-toggle no-arrow" href="#" data-toggle="dropdown"
                                   aria-haspopup="true" aria-expanded="false">
                                    <i class="icon icon-settings icon-lg text-light-gray"></i>
                                </a>

                                <span class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="javascript:void(0)">
                                        <i class="icon icon-editors icon-fw"></i>
                                        Edit
                                    </a>
                                    <a class="dropdown-item" href="javascript:void(0)">
                                        <i class="icon icon-contacts icon-fw"></i>
                                        Contact List</a>
                                    <a class="dropdown-item" href="javascript:void(0)">
                                        <i class="icon icon-heart icon-fw"></i>
                                        Favourite List
                                    </a>
                                </span>
                            </span>
                                        <!-- /dropdown -->

                                    </div>
                                </div>

                                <!-- Media -->
                                <a href="javascript:void(0)" class="media">

                                    <!-- Avatar -->
                                    <img class="dt-avatar mr-3" src="https://via.placeholder.com/150x150"
                                         alt="User">
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
                                    <img class="dt-avatar mr-3" src="https://via.placeholder.com/150x150"
                                         alt="User">
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
                                    <img class="dt-avatar mr-3" src="https://via.placeholder.com/150x150"
                                         alt="User">
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
                                    <img class="dt-avatar mr-3" src="https://via.placeholder.com/150x150"
                                         alt="User">
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

                                <!-- Media -->
                                <a href="javascript:void(0)" class="media">

                                    <!-- Avatar -->
                                    <img class="dt-avatar mr-3" src="https://via.placeholder.com/150x150" alt="User">
                                    <!-- avatar -->

                                    <!-- Media Body -->
                                    <span class="media-body">
                            <span class="message">
                                <span class="user-name">Amay Mathur</span> and <span class="user-name">Domnic Harris</span>
                                comment your post.
                            </span>
                            <span class="meta-date">
                                <i class="icon icon-message icon-fw mr-1"></i>
                                yesterday at 9:30
                            </span>
                        </span>
                                    <!-- /media body -->

                                </a>
                                <!-- /media -->

                                <!-- Media -->
                                <a href="javascript:void(0)" class="media">

                                    <!-- Avatar -->
                                    <img class="dt-avatar mr-3" src="https://via.placeholder.com/150x150"
                                         alt="User">
                                    <!-- avatar -->

                                    <!-- Media Body -->
                                    <span class="media-body">
                            <span class="message">
                                <span class="user-name">Steve Smith</span> and <span class="user-name">Jimmy</span>
                                inviting on our page.
                            </span>
                            <span class="meta-date">
                                Monday at 18:30
                            </span>
                        </span>
                                    <!-- /media body -->

                                </a>
                                <!-- /media -->

                                <!-- Media -->
                                <a href="javascript:void(0)" class="media">

                                    <!-- Avatar -->
                                    <img class="dt-avatar mr-3" src="https://via.placeholder.com/150x150"
                                         alt="User">
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
                            <!-- /notification -->

                            <!-- Messages -->
                            <div class="dt-notification fade" id="drawer-messages">
                                <div class="d-flex align-items-center mb-6">
                                    <h5 class="mb-0">Messages (5)</h5>

                                    <div class="ml-auto action-area">
                                        <a href="javascript:void(0)">Mark All Read</a>

                                        <!-- Dropdown -->
                                        <span class="dropdown ml-2 d-inline-block">
                                <a class="dropdown-toggle no-arrow" href="#" data-toggle="dropdown"
                                   aria-haspopup="true" aria-expanded="false">
                                    <i class="icon icon-settings icon-lg text-light-gray"></i>
                                </a>

                                <span class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="javascript:void(0)">
                                        <i class="icon icon-editors icon-fw"></i>
                                        Edit
                                    </a>
                                    <a class="dropdown-item" href="javascript:void(0)">
                                        <i class="icon icon-contacts icon-fw"></i>
                                        Contact List</a>
                                    <a class="dropdown-item" href="javascript:void(0)">
                                        <i class="icon icon-heart icon-fw"></i>
                                        Favourite List
                                    </a>
                                </span>
                            </span>
                                        <!-- /dropdown -->

                                    </div>
                                </div>

                                <!-- Media -->
                                <a href="javascript:void(0)" class="media">

                                    <!-- Avatar -->
                                    <img class="dt-avatar mr-3" src="https://via.placeholder.com/150x150"
                                         alt="User">
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
                        </span>
                                </a>
                                <!-- /media -->

                                <!-- Media -->
                                <a href="javascript:void(0)" class="media">

                                    <!-- Avatar -->
                                    <img class="dt-avatar mr-3" src="https://via.placeholder.com/150x150"
                                         alt="User">
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
                        </span>
                                </a>
                                <!-- /media -->

                                <!-- Media -->
                                <a href="javascript:void(0)" class="media">

                                    <!-- Avatar -->
                                    <img class="dt-avatar mr-3" src="https://via.placeholder.com/150x150"
                                         alt="User">
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
                        </span>
                                </a>
                                <!-- /media -->

                                <!-- Media -->
                                <a href="javascript:void(0)" class="media">

                                    <!-- Avatar -->
                                    <img class="dt-avatar mr-3" src="https://via.placeholder.com/150x150"
                                         alt="User">
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
                        </span>
                                </a>
                                <!-- /media -->
                            </div>
                            <!-- /messages -->

                        </div>

                    </div>
                    <!-- /drawer content area -->

                </div>
                <!-- /actionable drawer -->

            </div>
            <!-- /drawer -->                    </div>
    </div>
    <!-- /root -->

<?php
$this->load->view('layout/foot');
?>