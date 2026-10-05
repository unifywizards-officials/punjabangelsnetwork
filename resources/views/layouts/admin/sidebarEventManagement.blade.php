<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <a href="{{ route('event-manager.dashboard') }}" class="brand-link">
        <img src="{{asset('website_logo/pan-logo.png')}}" alt="AdminLTE Logo" class="brand-image" style="width:100px" style="height:40px">
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
                    <a href="{{ route('event-manager.dashboard') }}"
                        class="nav-link {{ Request::is('event-manager/dashboard') ? 'active' : null }}">
                        <i class="fa-solid fa-chart-line"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

                <!--------------------------------------------Location ------------------------------------------------>

                <li class="nav-item">
                    <a href="{{ route('event-manager.manage-banner.index') }}"
                        class="nav-link {{ Request::is('event-manager/manage-banner*') ? 'active' : null }}">
                        <i class="nav-icon fa-solid fa-panorama"></i>
                        <p>Home Page Banner's</p>
                    </a>
                </li>

                <!--------------------------------------------Category or Tags ------------------------------------------------>
                <li class="nav-item">
                    <a href="{{ route('event-manager.category.index') }}"
                        class="nav-link {{ Request::is('event-manager/category*') ? 'active' : null }}">
                        <i class="nav-icon fa-solid fa-tags"></i>
                        <p>Category/Tags</p>
                    </a>
                </li>


                <!--------------------------------------------Blog ------------------------------------------------>

                <li class="nav-item">
                    <a href="{{ route('event-manager.manage-blog.index') }}"
                        class="nav-link {{ Request::is('event-manager/manage-blog*') ? 'active' : null }}">
                        <i class="nav-icon fa-solid fa-blog"></i>
                        <p>Blog</p>
                    </a>
                </li>

                <!--------------------------------------------Event ------------------------------------------------>

                <li class="nav-item">
                    <a href="{{ route('event-manager.manage-event.index') }}"
                        class="nav-link {{ Request::is('event-manager/manage-event*') ? 'active' : null }}">
                        <i class="nav-icon fa-solid fa-calendar-days"></i>
                        <p>Event</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('event-manager.manage-news.index') }}"
                        class="nav-link {{ Request::is('event-manager/manage-news*') ? 'active' : null }}">
                        <i class="nav-icon fa fa-newspaper"></i>
                        <p>News</p>
                    </a>
                </li>


                <li class="nav-item">
                    <a href="{{ route('event-manager.eventFormData') }}"
                        class="nav-link {{ Request::is('event-manager/event-Form-data*') ? 'active' : null }}">
                        <i class="nav-icon fa-solid fa-file-lines"></i>
                        <p>Event From Data List</p>
                    </a>
                </li>



                <li class="nav-item">
                    <a href="{{ route('event-manager.contactdata.list') }}"
                        class="nav-link {{ Request::is('event-manager/contact-data*') ? 'active' : null }}">
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