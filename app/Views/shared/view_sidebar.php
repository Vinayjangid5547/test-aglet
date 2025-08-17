<aside class="sidebar" id="sidebar">
    <div class="sidebar-header">
        <div class="logo">
            <i class="fas fa-shopping-bag"></i>
            <span>Alget Shoes</span>
        </div>
        <button class="toggle-sidebar" id="toggleSidebar">
            <i class="fas fa-bars"></i>
        </button>
    </div>
    <div class="sidebar-content">
        <ul class="menu">
            <li class="menu-item active">
                <a href="index.html">
                    <i class="fas fa-home"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="menu-item">
                <a href="products.html">
                    <i class="fas fa-box"></i>
                    <span>Products</span>
                </a>
            </li>
            <li class="menu-item">
                <a href="orders.html">
                    <i class="fas fa-shopping-cart"></i>
                    <span>Orders</span>
                </a>
            </li>
            <li class="menu-item">
                <a href="#">
                    <i class="fas fa-users"></i>
                    <span>Customers</span>
                </a>
            </li>
            <li class="menu-item">
                <a href="#">
                    <i class="fas fa-chart-bar"></i>
                    <span>Analytics</span>
                </a>
            </li>
            <li class="menu-item">
                <a href="#">
                    <i class="fas fa-cog"></i>
                    <span>Settings</span>
                </a>
            </li>
        </ul>
    </div>
    <div class="sidebar-footer">
        <div class="user-profile">
            <div class="avatar">
                <img src="<?php echo ASSETS_PATH; ?>images/admin/avatar-1.png" alt="Admin">
            </div>
            <div class="user-info">
                <h4>Admin</h4>
                <p>admin@alget.com</p>
            </div>
        </div>
    </div>
</aside>

<button id="mobileSidebarToggle" class="mobile-sidebar-toggle">
    <i class="fas fa-bars"></i>
</button>