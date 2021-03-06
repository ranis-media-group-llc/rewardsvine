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
                <a href="<?= base_url('superadmin/dashboard')?>" class="dt-side-nav__link <?= $this->uri->segment(2) == "dashboard" ? 'active' : '' ?>">
                    <i class="icon icon-dashboard icon-fw icon-lg"></i>
                    <span class="dt-side-nav__text">Dashboard</span>
                </a>
            </li>
            <li class="dt-side-nav__item ">
                <a href="<?= base_url('superadmin/users')?>" class="dt-side-nav__link <?= $this->uri->segment(2) == "users" ? 'active' : '' ?>">
                    <i class="icon icon-users icon-fw icon-lg"></i>
                    <span class="dt-side-nav__text">Users</span>
                </a>
            </li>
            <li class="dt-side-nav__item ">
                <a href="<?= base_url('superadmin/admin')?>" class="dt-side-nav__link <?= $this->uri->segment(2) == "admin" ? 'active' : '' ?>">
                    <i class="icon icon-user icon-fw icon-lg"></i>
                    <span class="dt-side-nav__text">Admins</span>
                </a>
            </li>
            <li class="dt-side-nav__item">
                <a href="<?= base_url('superadmin/history')?>" class="dt-side-nav__link <?= $this->uri->segment(2) == "history" ? 'active' : '' ?>">
                    <i class="icon icon-list-advance icon-fw icon-lg"></i>
                    <span class="dt-side-nav__text">History</span>
                </a>
            </li>
            <li class="dt-side-nav__item">
                <a href="<?= base_url('superadmin/redeem')?>" class="dt-side-nav__link <?= $this->uri->segment(2) == "redeem" ? 'active' : '' ?>">
                    <i class="icon icon-revenue icon-fw icon-lg"></i>
                    <span class="dt-side-nav__text">Redeem Messages</span>
                </a>
            </li>
            <li class="dt-side-nav__item">
                <a href="<?= base_url('superadmin/messages')?>" class="dt-side-nav__link <?= $this->uri->segment(2) == "messages" ? 'active' : '' ?>">
                    <i class="icon icon-message icon-fw icon-lg"></i>
                    <span class="dt-side-nav__text">Messages</span>
                </a>
            </li>
            <!-- /menu item -->
        </ul>
        <!-- /sidebar navigation -->

    </div>
</aside>
<!-- /sidebar -->