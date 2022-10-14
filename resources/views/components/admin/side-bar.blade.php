        <!-- Sidebar -->
        <ul class="navbar-nav sidebar sidebar-dark accordion" style="background-color: #1F1F1F;" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon">
                    <i>
                        <img src="/asssets/img/logo-admin.png" alt="" height="40" />

                    </i>
                </div>
                <div class="sidebar-brand-text mx-3">Admin</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item {{ $title == 'Dashboard' ? 'active' : '' }}">
                <a class="nav-link" href="/admin">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Manage data
            </div>

            <li class="nav-item {{ $title == 'User' ? 'active' : '' }}">
                <a class="nav-link" href="/list-user">
                    <i class="fas fa-user-circle fa-lg me-2"></i></i>
                    <span>User</span></a>
            </li>
            <li class="nav-item {{ $title == 'Admin Perpustakaan' ? 'active' : '' }}">
                <a class="nav-link" href="/list-perpus">
                    <i class="fas fa-user-circle fa-lg me-2"></i></i>
                    <span>Admin Perpustakaan</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>
        <!-- End of Sidebar -->
