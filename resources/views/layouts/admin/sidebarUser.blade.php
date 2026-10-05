<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <a href="{{ route('user.dashboard') }}" class="brand-link">
        <img src="{{asset('images/unifyholiday.png')}}" alt="AdminLTE Logo" class="brand-image">
        <span class="brand-text font-weight-light"></span>
    </a>
    <br>

    <div class="sidebar">
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                <li class="nav-item">
                    <a href="{{ route('user.dashboard') }}"
                        class="nav-link {{ Request::is('user/dashboard') ? 'active' : null }}">
                        <i class="fa-solid fa-chart-line"></i>
                        <p>Dashboard</p>
                    </a>
                </li>


                <li class="nav-item">
                    <a href="{{ route('user.contactdata.list') }}"
                        class="nav-link {{ Request::is('user/contact-data*') ? 'active' : null }}">
                        <i class="nav-icon fa fa-address-card"></i>
                        <p>Contact Data List</p>
                    </a>
                </li>

                <li class="nav-item">
                    <form id="myForm" action="{{ route('logout') }}" method="POST">
                        @csrf
                        <a href="#" id="submitLink" class="nav-link">
                            <i class="fa fa-power-off nav-icon"></i>
                            <p>
                                Logout
                            </p>
                        </a>
                    </form>
                </li>
            </ul>
        </nav>

    </div>

</aside>