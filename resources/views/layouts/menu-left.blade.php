<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="index.html">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div>

    <!-- Menu Users -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
           aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-users"></i>
            <span>Users</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">User manager:</h6>
                <a class="collapse-item" href="{{ route('users.index') }}">List User</a>
                <a class="collapse-item" href="{{ route('users.create') }}">Create User</a>
            </div>
        </div>
    </li>

    <!-- Menu Categories -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCategory"
           aria-expanded="true" aria-controls="collapseCategory">
            <i class="fas fa-fw fa-th-list"></i>
            <span>Categories</span>
        </a>
        <div id="collapseCategory" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Categories manager:</h6>
                <a class="collapse-item" href="{{ route('categories.index') }}">List Category</a>
                <a class="collapse-item" href="{{ route('categories.create') }}">Create Category</a>
            </div>
        </div>
    </li>

    <!-- Food Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFood"
           aria-expanded="true" aria-controls="collapseFood">
            <i class="fas fa-utensils"></i>
            <span>Food</span>
        </a>
        <div id="collapseFood" class="collapse" aria-labelledby="headingTwo"
             data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Food:</h6>
                <a class="collapse-item" href="{{route('food.index')}}">List Food</a>
                <a class="collapse-item" href="{{route('food.create')}}">Create Food</a>

            </div>
        </div>
    </li>



    <!-- Menu Pots -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePost"
           aria-expanded="true" aria-controls="collapsePost">
            <i class="far fa-newspaper"></i>
            <span>Pots</span>
        </a>
        <div id="collapsePost" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">User manager:</h6>
                <a class="collapse-item" href="{{ route('pots.index') }}">List Post</a>
                <a class="collapse-item" href="{{ route('pots.create') }}">Create Post</a>
            </div>
        </div>
    </li>

    <!-- Menu Reservation -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseReservation"
           aria-expanded="true" aria-controls="collapseReservation">
            <i class="far fa-newspaper"></i>
            <span>Reservation</span>
        </a>
        <div id="collapseReservation" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">User manager:</h6>
                <a class="collapse-item" href="{{ route('reservation.index') }}">List Reservation </a>
            </div>
        </div>
    </li>

    <!-- Menu Table -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTable"
           aria-expanded="true" aria-controls="collapseTable">
            <i class="far fa-newspaper"></i>
            <span>Table</span>
        </a>
        <div id="collapseTable" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">User manager:</h6>
                <a class="collapse-item" href="{{route('table.index')}}">List Table </a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Addons
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    {{--<li class="nav-item">--}}
        {{--<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"--}}
           {{--aria-expanded="true" aria-controls="collapsePages">--}}
            {{--<i class="fas fa-fw fa-folder"></i>--}}
            {{--<span>Pages</span>--}}
        {{--</a>--}}
        {{--<div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">--}}
            {{--<div class="bg-white py-2 collapse-inner rounded">--}}
                {{--<h6 class="collapse-header">Login Screens:</h6>--}}
                {{--<a class="collapse-item" href="login.html">Login</a>--}}
                {{--<a class="collapse-item" href="register.html">Register</a>--}}
                {{--<a class="collapse-item" href="forgot-password.html">Forgot Password</a>--}}
                {{--<div class="collapse-divider"></div>--}}
                {{--<h6 class="collapse-header">Other Pages:</h6>--}}
                {{--<a class="collapse-item" href="404.html">404 Page</a>--}}
                {{--<a class="collapse-item" href="blank.html">Blank Page</a>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</li>--}}

    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link" href="charts.html">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Charts</span></a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="tables.html">
            <i class="fas fa-fw fa-table"></i>
            <span>Tables</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
