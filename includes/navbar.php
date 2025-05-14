<body class="index-page">
    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center">
            <a href="index.html" class="logo d-flex align-items-center me-auto">
                <img src="assets/img/dm-logo3.png" alt="" class="logo-default" />
                <img src="assets/img/dm-logo-white.png" alt="" class="logo-scrolled" />
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="index" class="<?php echo ($currentPage == 'index') ? 'active' : ''; ?>">Home</a></li>
                    <li><a href="aboutus" class="<?php echo ($currentPage == 'aboutus') ? 'active' : ''; ?>">About
                            us</a></li>
                    <li class="dropdown">
                        <a href="products"
                            class="<?php echo in_array($currentPage, ['products', 'plastic_moulded', 'wiring_harness', 'power_cord', 'tools_dies']) ? 'active' : ''; ?>">
                            <span>Products</span>
                            <i class="bi bi-chevron-down toggle-dropdown"></i>
                        </a>
                        <ul>
                            <li><a href="plastic_moulded"
                                    class="<?php echo ($currentPage == 'plastic_moulded') ? 'active' : ''; ?>">Plastic
                                    Moulded Parts</a></li>
                            <li><a href="wiring_harness"
                                    class="<?php echo ($currentPage == 'wiring_harness') ? 'active' : ''; ?>">Wiring
                                    Harness</a></li>
                            <li><a href="power_cord"
                                    class="<?php echo ($currentPage == 'power_cord') ? 'active' : ''; ?>">Power
                                    Cords</a></li>
                            <li><a href="tools_dies"
                                    class="<?php echo ($currentPage == 'tools_dies') ? 'active' : ''; ?>">Tools and
                                    Dies</a></li>

                        </ul>
                    </li>

                    <li><a href="import_export"
                            class="<?php echo ($currentPage == 'import_export') ? 'active' : ''; ?>">Import / Export</a>
                    </li>
                    <li class="dropdown">
                        <a href="#"
                            class="<?php echo in_array($currentPage, ['quality_systems', 'certificates']) ? 'active' : ''; ?>">
                            <span>Quality</span>
                            <i class="bi bi-chevron-down toggle-dropdown"></i>
                        </a>
                        <ul>
                            <li><a href="quality_systems"
                                    class="<?php echo ($currentPage == 'quality_systems') ? 'active' : ''; ?>">Quality
                                    Systems</a></li>
                            <li><a href="certificates"
                                    class="<?php echo ($currentPage == 'certificates') ? 'active' : ''; ?>">Certificates
                                    & Polices</a></li>
                        </ul>
                    </li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>
            <a class="cta-btn <?php echo ($currentPage == 'contactus') ? 'active' : ''; ?>" href="contactus">Contact Us</a>

        </div>
    </header>

    <main class="main">