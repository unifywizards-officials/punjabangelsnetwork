<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <a href="{{ route('seo-manager.dashboard') }}" class="brand-link">
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
                    <a href="{{ route('seo-manager.dashboard') }}"
                        class="nav-link {{ Request::is('seo-manager/dashboard') ? 'active' : null }}">
                        <i class="fa-solid fa-chart-line"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

                <!--------------------------------------------Blog ------------------------------------------------>

                <li class="nav-item">
                    <a href="{{ route('seo-manager.manage-blog.index') }}"
                        class="nav-link {{ Request::is('seo-manager/manage-blog*') ? 'active' : null }}">
                        <i class="nav-icon fa-solid fa-blog"></i>
                        <p>Blog</p>
                    </a>
                </li>

                <!--------------------------------------------Visa & Insurance ------------------------------------------------>

                <li class="nav-item">
                    <a href="{{ route('seo-manager.edit.visa_insurance') }}"
                        class="nav-link {{ Request::is('seo-manager/edit-visa-and-insurance*') ? 'active' : null }}">
                        <i class="nav-icon fa-solid fa-truck-medical"></i>
                        <p>Visa & Insurance</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('seo-manager.edit-staticpage_seo') }}"
                        class="nav-link {{ Request::is('seo-manager/edit-staticpage_seo*') ? 'active' : null }}">
                        <i class="nav-icon fa-brands fa-searchengin"></i>
                        <p>Manage Seo</p>
                    </a>
                </li>
                

                <li class="nav-item">
                    <a href="{{ route('seo-manager.edit.setting') }}"
                        class="nav-link {{ Request::is('seo-manager/edit-setting*') ? 'active' : null }}">
                        <i class="nav-icon fa fa-puzzle-piece"></i>
                        <p>Settings</p>
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