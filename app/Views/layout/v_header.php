<body class="layout layout-header-fixed layout-left-sidebar-fixed">
    <div class="site-overlay"></div>
    <div class="site-header">

        <nav class="navbar navbar-default">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">
                    <i class="zmdi zmdi-code-smartphone zmdi-hc-fw"></i>
                    <b>CI</b>
                </a>
                <button class="navbar-toggler left-sidebar-toggle pull-left visible-xs" type="button">
                    <span class="hamburger"></span>
                </button>
                <button class="navbar-toggler pull-right visible-xs-block" type="button" data-toggle="collapse" data-target="#navbar">
                    <span class="more"></span>
                </button>
            </div>
            <div class="navbar-collapsible">
                <div id="navbar" class="navbar-collapse collapse">
                    <button class="navbar-toggler left-sidebar-collapse pull-left hidden-xs" type="button">
                        <span class="hamburger"></span>
                    </button>
                    <ul class="nav navbar-nav">
                        <li class="visible-xs-block">
                            <div class="nav-avatar">
                                <img class="img-circle" src="<?= base_url('fotoo/' . $profil->foto) ?>" alt="" width="48" height="48">
                            </div>
                            <h4 class="navbar-text text-center">Welcome, <?= $profil->nama ?></h4>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li class="nav-table dropdown visible-xs-block">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                <span class="nav-cell nav-icon">
                                    <i class="zmdi zmdi-account-o"></i>
                                </span>
                                <span class="hidden-md-up m-l-15">Account</span>
                            </a>
                            <ul class="dropdown-menu">
                                <?php if (session()->get('level') == 2) { ?>
                                    <li><a href="user">Profile</a></li>
                                    <li role="separator" class="divider"></li>
                                <?php } ?>
                                <li><a href="<?= base_url('Auth/logout') ?>">Logout</a></li>
                            </ul>
                        </li>



                        <li class="nav-table dropdown hidden-sm-down">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                <span class="nav-cell p-r-10">
                                    <img class="img-circle" src="<?= base_url('fotoo/' . $profil->foto) ?>" alt="" width="32" height="32">
                                </span>
                                <span class="nav-cell"><?= $profil->nama ?>
                                    <span class="caret"></span>
                                </span>
                            </a>
                            <ul class="dropdown-menu">
                                <?php if (session()->get('level') == 2) { ?>
                                    <li>
                                        <a href="user">
                                            <i class="zmdi zmdi-account-o m-r-10"></i> Profile</a>
                                    </li>
                                    <li role="separator" class="divider"></li>
                                <?php } ?>
                                <li>
                                    <a href="<?= base_url('Auth/logout') ?>">
                                        <i class="zmdi zmdi-power m-r-10"></i> Logout</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

    </div>