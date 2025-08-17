<nav class="pc-sidebar">
    <div class="navbar-wrapper">
        <div class="m-header">
            <a href="../dashboard/index.html" class="b-brand text-primary">
                <!-- ========   Change your logo from here   ============ -->
                <div>
                    <div class="brand">
                        <svg class="brand-mark" viewBox="0 0 64 64" aria-hidden="true">
                            <defs>
                                <linearGradient id="g1" x1="0" y1="0" x2="1" y2="1">
                                    <stop offset="0%" stop-color="#7dd3fc" />
                                    <stop offset="100%" stop-color="#a78bfa" />
                                </linearGradient>
                            </defs>
                            <path d="M8 40 L24 8 H40 L24 56 H12 Z" fill="url(#g1)" />
                            <circle cx="44" cy="44" r="8" fill="url(#g1)" />
                        </svg>
                        <span class="brand-name">AGLET</span>
                    </div>
                </div>
            </a>
        </div>
        <div class="navbar-content">
            <div class="card pc-user-card">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-0">
                            <img src="<?php echo ASSETS_PATH; ?>images/admin/user/avatar-1.jpg" alt="user-image" class="user-avtar wid-45 rounded-circle" />
                        </div>
                        <div class="flex-grow-1 ms-3 me-2">
                            <h6 class="mb-0">Admin User</h6>
                            <small>Administrator</small>
                        </div>
                        <a class="btn btn-icon btn-link-secondary avtar" data-bs-toggle="collapse" href="#pc_sidebar_userlink">
                            <svg class="pc-icon">
                                <use xlink:href="#custom-sort-outline"></use>
                            </svg>
                        </a>
                    </div>
                    <div class="collapse pc-user-links" id="pc_sidebar_userlink">
                        <div class="pt-3">
                            <a href="#!">
                                <i class="ti ti-user"></i>
                                <span>My Account</span>
                            </a>
                            <a href="#!">
                                <i class="ti ti-settings"></i>
                                <span>Settings</span>
                            </a>
                            <a href="#!">
                                <i class="ti ti-lock"></i>
                                <span>Lock Screen</span>
                            </a>
                            <a href="#!">
                                <i class="ti ti-power"></i>
                                <span>Logout</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <ul class="pc-navbar">
                <li class="pc-item pc-caption">
                    <label>Navigation</label>
                </li>

                <?php if (!empty($side_menu)) {
                    foreach ($side_menu as $row) { ?>
                        <li class="pc-item <?php echo ($row['page_type'] == $active_page) ? 'active' : ''; ?>">
                            <a href="<?php echo $row['url']; ?>" class="pc-link">
                                <span class="pc-micon">
                                    <svg class="pc-icon">
                                        <use xlink:href="<?php echo $row['icon']; ?>"></use>
                                    </svg>
                                </span>
                                <span class="pc-mtext"><?php echo $row['name']; ?></span>
                            </a>
                        </li>
                <?php }
                } ?>


                <li class="pc-item pc-caption">
                    <label>Other</label>
                    <svg class="pc-icon">
                        <use xlink:href="#custom-notification-status"></use>
                    </svg>
                </li>
                <li class="pc-item pc-hasmenu">
                    <a href="#!" class="pc-link"><span class="pc-micon">
                            <svg class="pc-icon">
                                <use xlink:href="#custom-level"></use>
                            </svg> </span><span class="pc-mtext">Menu levels</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
                    <ul class="pc-submenu">
                        <li class="pc-item"><a class="pc-link" href="#!">Level 2.1</a></li>
                        <li class="pc-item pc-hasmenu">
                            <a href="#!" class="pc-link">Level 2.2<span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
                            <ul class="pc-submenu">
                                <li class="pc-item"><a class="pc-link" href="#!">Level 3.1</a></li>
                                <li class="pc-item"><a class="pc-link" href="#!">Level 3.2</a></li>
                                <li class="pc-item pc-hasmenu">
                                    <a href="#!" class="pc-link">Level 3.3<span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
                                    <ul class="pc-submenu">
                                        <li class="pc-item"><a class="pc-link" href="#!">Level 4.1</a></li>
                                        <li class="pc-item"><a class="pc-link" href="#!">Level 4.2</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="pc-item pc-hasmenu">
                            <a href="#!" class="pc-link">Level 2.3<span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
                            <ul class="pc-submenu">
                                <li class="pc-item"><a class="pc-link" href="#!">Level 3.1</a></li>
                                <li class="pc-item"><a class="pc-link" href="#!">Level 3.2</a></li>
                                <li class="pc-item pc-hasmenu">
                                    <a href="#!" class="pc-link">Level 3.3<span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
                                    <ul class="pc-submenu">
                                        <li class="pc-item"><a class="pc-link" href="#!">Level 4.1</a></li>
                                        <li class="pc-item"><a class="pc-link" href="#!">Level 4.2</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>

            </ul>
            <div class="card pc-user-card mt-3">
                <div class="card-body text-center">
                    <img src="<?php echo ASSETS_PATH; ?>images/admin/application/img-coupon.png" alt="img" class="img-fluid w-50" />
                    <h5 class="mb-0 mt-1">Aglet</h5>
                    <p>Ulmiate Shoes Solution</p>
                    <a
                        href="https://themeforest.net/item/able-pro-bootstrap-admin-dashboard-template/50170229"
                        target="_blank"
                        class="btn btn-warning">
                        <svg class="pc-icon me-2">
                            <use xlink:href="#custom-logout-1-outline"></use>
                        </svg>
                        Aglet Admin Panel
                    </a>
                </div>
            </div>
        </div>
    </div>
</nav>