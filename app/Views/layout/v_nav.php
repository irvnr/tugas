<div class="site-main">
    <div class="site-left-sidebar">
        <div class="sidebar-backdrop"></div>
        <div class="custom-scrollbar">
            <ul class="sidebar-menu">
                <li class="menu-title">Main</li>

                <?php if (session()->get('level') == 1) { ?>
                    <li>
                        <a href="admin">
                            <span class="menu-icon">
                                <i class="zmdi zmdi-folder-person zmdi-hc-fw"></i>
                            </span>
                            <span class="menu-text">Akun User</span>
                        </a>
                    </li>
                <?php } ?>

                <?php if (session()->get('level') == 2) { ?>
                    <li>
                        <a href="user">
                            <span class="menu-icon">
                                <i class="zmdi zmdi-account"></i>
                            </span>
                            <span class="menu-text">Profile</span>
                        </a>
                    </li>
                <?php } ?>

                <li>
                    <a href="<?= base_url('Auth/logout') ?>">
                        <span class="menu-icon">
                            <i class="zmdi zmdi-power"></i>
                        </span>
                        <span class="menu-text">Logout</span>
                    </a>
                </li>

            </ul>
        </div>
    </div>

    <div class="site-content">