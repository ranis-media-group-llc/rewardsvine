<!-- Sidebar -->
<aside id="main-sidebar" class="dt-sidebar">

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
                <a href="/offerwall" class="dt-side-nav__link <?= $this->uri->segment(1) == "offerwall" || $this->uri->segment(1) == "" ? 'active' : '' ?>">
                    <i class="icon icon-metrics icon-fw icon-lg"></i>
                    <span class="dt-side-nav__text">OfferWall </span>
                </a>
            </li>
            <li class="dt-side-nav__item">
                <a href="/surveys" class="dt-side-nav__link <?= $this->uri->segment(1) == "surveys" ? 'active' : '' ?>">
                    <i class="icon icon-metrics icon-fw icon-lg"></i>
                    <span class="dt-side-nav__text">Surveys</span>
                </a>
            </li>
            <!--<li class="dt-side-nav__item">
                <a href="/videos" class="dt-side-nav__link <?= $this->uri->segment(1) == "videos" ? 'active' : '' ?>" >
                    <i class="icon icon-layout icon-fw icon-lg"></i>
                    <span class="dt-side-nav__text">Videos</span>
                </a>
            </li>-->
            <li class="dt-side-nav__item">
                <a href="/offers" class="dt-side-nav__link <?= $this->uri->segment(1) == "offers" ? 'active' : '' ?>">
                    <i class="icon icon-layout icon-fw icon-lg"></i>
                    <span class="dt-side-nav__text">Complete Offers</span>
                </a>
            </li>
            <li class="dt-side-nav__item">
                <a href="/apps" class="dt-side-nav__link <?= $this->uri->segment(1) == "apps" ? 'active' : '' ?>" >
                    <i class="icon icon-layout icon-fw icon-lg"></i>
                    <span class="dt-side-nav__text">Download Apps</span>
                </a>
            </li>
            <li class="dt-side-nav__item">
                <a href="/referral" class="dt-side-nav__link <?= $this->uri->segment(1) == "referral" ? 'active' : '' ?>" >
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
                <a href="/gifts" class="dt-side-nav__link <?= $this->uri->segment(1) == "gifts" ? 'active' : '' ?>">
                    <i class="icon icon-task-manager icon-fw icon-lg"></i>
                    <span class="dt-side-nav__text">Gift Cards</span>
                </a>
            </li>
            <li class="dt-side-nav__item">
                <a href="/crypto" class="dt-side-nav__link <?= $this->uri->segment(1) == "crypto" ? 'active' : '' ?>">
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
                <a href="/profile" class="dt-side-nav__link <?= $this->uri->segment(1) == "profile" ? 'active' : '' ?>">
                    <i class="icon icon-task-manager icon-fw icon-lg"></i>
                    <span class="dt-side-nav__text">Profile</span>
                </a>
            </li>
            <li class="dt-side-nav__item">
                <a href="/settings" class="dt-side-nav__link <?= $this->uri->segment(1) == "settings" ? 'active' : '' ?>">
                    <i class="icon icon-task-manager icon-fw icon-lg"></i>
                    <span class="dt-side-nav__text">Settings</span>
                </a>
            </li>
            <li class="dt-side-nav__item">
                <a href="/history" class="dt-side-nav__link <?= $this->uri->segment(1) == "history" ? 'active' : '' ?>">
                    <i class="icon icon-task-manager icon-fw icon-lg"></i>
                    <span class="dt-side-nav__text">History</span>
                </a>
            </li>
            <li class="dt-side-nav__item">
                <a href="/faq" class="dt-side-nav__link <?= $this->uri->segment(1) == "faq" ? 'active' : '' ?>">
                    <i class="icon icon-task-manager icon-fw icon-lg"></i>
                    <span class="dt-side-nav__text">FAQ</span>
                </a>
            </li>
            <li class="dt-side-nav__item">
                <a href="/support" class="dt-side-nav__link <?= $this->uri->segment(1) == "support" ? 'active' : '' ?>">
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