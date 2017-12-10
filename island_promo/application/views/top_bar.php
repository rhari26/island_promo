
<!-- Navigation Bar-->
<header id="topnav">
    <div class="topbar-main">
        <div class="container">

            <!-- LOGO -->
            <div class="topbar-left">
                <a href="dashboard.php" class="logo">
                    <i class="zmdi zmdi-compass icon-c-logo"></i>
                    <span>Island Promotions</span>
                </a>
            </div>
            <!-- End Logo container-->


            <div class="menu-extras navbar-topbar">
                <ul class="list-inline float-right mb-0">
                    <li class="list-inline-item">
                        <!-- Mobile menu toggle-->
                        <a class="navbar-toggle">
                        <div class="lines">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        </a>
                        <!-- End mobile menu toggle-->
                    </li>
                    <li class="list-inline-item dropdown notification-list">
                        <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
                        aria-haspopup="false" aria-expanded="false">
                            <i class="zmdi zmdi-account-circle rounded-circle user-icon"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-dropdown " aria-labelledby="Preview">
                            <!-- item-->
                            <div class="dropdown-item noti-title">
                                <h5 class="text-overflow"><small>Welcome ! Island</small> </h5>
                            </div>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="zmdi zmdi-power"></i> <span>Logout</span>
                            </a>
                        </div>
                    </li>
                </ul>
            </div> <!-- end menu-extras -->
            <div class="clearfix"></div>

        </div> <!-- end container -->
    </div>
    <!-- end topbar-main -->

    <div class="navbar-custom">
        <div class="container">
            <div id="navigation">
                <!-- Navigation Menu-->
                <ul class="navigation-menu">
                    <li>
                        <a href="<?php echo site_url("user_authentication/dashboard"); ?>"><i class="zmdi zmdi-view-dashboard"></i> <span> Dashboard </span> </a>
                    </li>
                    <li class="has-submenu">
                        <a href="#"><i class="zmdi zmdi-format-underlined"></i> <span>Campaign </span> </a>
                        <ul class="submenu ">
                            <li><a href="<?php echo site_url("user_authentication/add_campaign"); ?>">Add Campaign</a></li>
                            <li><a href="<?php echo site_url("user_authentication/campaign"); ?>">Manage Campaign</a></li>
                        </ul>
                    </li>
                    <li class="has-submenu">
                        <a href="#"><i class="zmdi zmdi-format-list-bulleted"></i> <span> Add Clients </span> </a>
                        <ul class="submenu">
                            <li><a href="<?php echo site_url("user_authentication/add_client"); ?>">Add Clients</a></li>
                            <li><a href="<?php echo site_url("user_authentication/client"); ?>">Manage Clients</a></li>
                        </ul>
                    </li>
                    <li class="has-submenu">
                        <a href="#"><i class="zmdi zmdi-album"></i> <span>Batch Summary </span> </a>
                    </li>

                    <li class="has-submenu">
                        <a href="#"><i class="zmdi zmdi-collection-text"></i><span>Monthly Summary </span> </a>
                    </li>

                    <li class="has-submenu">
                        <a href="#"><i class="zmdi zmdi-format-list-bulleted"></i> <span>Quotation</span> </a>
                        <ul class="submenu">
                            <li><a href="<?php echo site_url("user_authentication/add_package"); ?>">Add Packages</a></li>
                            <li><a href="<?php echo site_url("user_authentication/package"); ?>">Manage Packages</a></li>
                            <li><a href="#">Add Quoation</a></li>
                            <li><a href="#">Manange Quoation</a></li>
                            <!-- <li><a href="#">Default Setting</a></li> -->
                        </ul>
                    </li>
                </ul>
                <!-- End navigation menu  -->
            </div>
        </div>
    </div>
</header>
<!-- End Navigation Bar-->
