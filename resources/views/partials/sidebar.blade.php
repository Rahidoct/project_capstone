<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('admin.dashboard') }}">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Admin Seller</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('admin.dashboard') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">


            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Management Category</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="{{ route('admin.categories.index') }}">Category</a>
                        <a class="collapse-item" href="{{ route('admin.tags.index') }}">Tag</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Product -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.products.index') }}">
                    <i class="fas fa-tags"></i>
                    <span>Product</span>
                </a>
            </li>

            <!-- Nav Item - Transaction -->
            <li class="nav-item">
                <a class="nav-link" href="charts.html">
                    <i class="fas fa-cart-plus"></i>
                    <span>Transaction</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Nav Item - Role -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseRole"
                    aria-expanded="true" aria-controls="collapseRole">
                    <i class="fas fa-users-cog"></i>
                    <span>Management Users</span>
                </a>
                <div id="collapseRole" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="{{ route('admin.categories.index') }}">Add Admin</a>
                        <a class="collapse-item" href="{{ route('admin.tags.index') }}">Role Master</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Shopping -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('homepage') }}">
                    <i class="fas fa-shopping-cart"></i>
                    <span>Shopping</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

</ul>

