<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <a href="{{ route('dashboard') }}" class="brand-link">
        <img src="{{ asset('website_logo/pan-logo.png') }}" alt="AdminLTE Logo" class="brand-image" style="width:100px"
            style="height:40px">
        <span class="brand-text font-weight-light"></span>
    </a>
    <br>

    <div class="sidebar">
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                    aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">

                <li class="nav-item">
                    <a href="{{ route('dashboard') }}"
                        class="nav-link {{ Request::is('admin/dashboard') ? 'active' : null }}">
                        <i class="fa-solid fa-chart-line"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

                <!--------------------------------------------Location ------------------------------------------------>

                {{-- <li class="nav-item">
                    <a href="{{ route('admin.manage-banner.index') }}"
                        class="nav-link {{ Request::is('admin/manage-banner*') ? 'active' : null }}">
                        <i class="nav-icon fa-solid fa-panorama"></i>
                        <p>Home Page Banner's</p>
                    </a>
                </li> --}}



                <li class="nav-item">
                    <a href="{{ route('admin.manage-partners.index') }}"
                        class="nav-link {{ Request::is('admin/manage-partners*') ? 'active' : null }}">
                        <i class="nav-icon fa-solid fa-panorama"></i>
                        <p>Dynamic Partner</p>
                    </a>
                </li>


                <li class="nav-item">
                    <a href="{{ route('admin.manage-startup-portfolio.index') }}"
                        class="nav-link {{ Request::is('admin/manage-startup-portfolio*') ? 'active' : null }}">
                        <i class="nav-icon fa-solid fa-panorama"></i>
                        <p>Startup Portfolio</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('admin.manage-partner-in-action.index') }}"
                        class="nav-link {{ Request::is('admin/manage-partner-in-action*') ? 'active' : null }}">
                        <i class="nav-icon fa-solid fa-panorama"></i>
                        <p>Partner In Action</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('admin.manage-ecosystem-partner.index') }}"
                        class="nav-link {{ Request::is('admin/manage-ecosystem-partner*') ? 'active' : null }}">
                        <i class="nav-icon fa-solid fa-panorama"></i>
                        <p>Ecosystem Partner</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('admin.manage-institutional-partner.index') }}"
                        class="nav-link {{ Request::is('admin/manage-institutional-partner*') ? 'active' : null }}">
                        <i class="nav-icon fa-solid fa-panorama"></i>
                        <p>Institutional Partner</p>
                    </a>
                </li>






                <!--------------------------------------------Category or Tags ------------------------------------------------>
                <li class="nav-item">
                    <a href="{{ route('admin.category.index') }}"
                        class="nav-link {{ Request::is('admin/category*') ? 'active' : null }}">
                        <i class="nav-icon fa-solid fa-tags"></i>
                        <p>Category/Tags</p>
                    </a>
                </li>


                <!--------------------------------------------Blog ------------------------------------------------>

                <li class="nav-item">
                    <a href="{{ route('admin.manage-blog.index') }}"
                        class="nav-link {{ Request::is('admin/manage-blog*') ? 'active' : null }}">
                        <i class="nav-icon fa-solid fa-blog"></i>
                        <p>Blog</p>
                    </a>
                </li>


                <!--------------------------------------------Event ------------------------------------------------>

                <li class="nav-item">
                    <a href="{{ route('admin.manage-event.index') }}"
                        class="nav-link {{ Request::is('admin/manage-event*') ? 'active' : null }}">
                        <i class="nav-icon fa-solid fa-calendar-days"></i>
                        <p>Event</p>
                    </a>
                </li>

                <!--------------------------------------------News ------------------------------------------------>
                <li class="nav-item">
                    <a href="{{ route('admin.manage-news.index') }}"
                        class="nav-link {{ Request::is('admin/manage-news*') ? 'active' : null }}">
                        <i class="nav-icon fa fa-newspaper"></i>
                        <p>News</p>
                    </a>
                </li>

                <!--------------------------------------------Custom Form ------------------------------------------------>
                {{-- <li class="nav-item">
                    <a href="{{ route('admin.custom-form.index') }}"
                        class="nav-link {{ Request::is('admin/custom-form*') ? 'active' : null }}">
                        <i class="nav-icon fa fa-newspaper"></i>
                        <p>Custom Form</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('admin.custom-showData') }}"
                        class="nav-link {{ Request::is('admin/custom-form/Data*') ? 'active' : null }}">
                        <i class="nav-icon fa fa-newspaper"></i>
                        <p>Custom Form Data Save</p>
                    </a>
                </li> --}}


                <!--------------------------------------------Member ------------------------------------------------>

                <li
                    class="nav-item {{ Request::is('admin/manage-board-advisors*') ? 'menu-is-opening menu-open' : null }} {{ Request::is('admin/manage-turnaroud-specialist*') ? 'menu-is-opening menu-open' : null }} {{ Request::is('admin/manage-investors*') ? 'menu-is-opening menu-open' : null }}">
                    <a href="#"
                        class="nav-link {{ Request::is('admin/manage-board-advisors*') ? 'active' : null }} {{ Request::is('admin/manage-turnaroud-specialist*') ? 'active' : null }} {{ Request::is('admin/manage-investors*') ? 'active' : null }}">
                        <i class="nav-icon fa-solid fa-users"></i>
                        <p>
                            Member
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>

                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.manage-board-advisors.index') }}"
                                class="nav-link {{ Request::is('admin/manage-board-advisors*') ? 'active' : null }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Borad of Adviser</p>
                            </a>
                        </li>
                    </ul>

                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.manage-turnaroud-specialist.index') }}"
                                class="nav-link {{ Request::is('admin/manage-turnaroud-specialist*') ? 'active' : null }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Turnaround Specialist</p>
                            </a>
                        </li>
                    </ul>

                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.manage-investors.index') }}"
                                class="nav-link {{ Request::is('admin/manage-investors*') ? 'active' : null }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Investors</p>
                            </a>
                        </li>
                    </ul>
                </li>


                <li class="nav-item">
                    <a href="{{ route('admin.eventFormData') }}"
                        class="nav-link {{ Request::is('admin/event-Form-data*') ? 'active' : null }}">
                        <i class="nav-icon fa-solid fa-file-lines"></i>
                        <p>Event From Data List</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('admin.24eventFormData') }}"
                        class="nav-link {{ Request::is('admin/captech24-event-Form-data*') ? 'active' : null }}">
                        <i class="nav-icon fa-solid fa-file-lines"></i>
                        <p>Event Captech24 List</p>
                    </a>
                </li>



                <li class="nav-item">
                    <a href="{{ route('admin.contactdata.list') }}"
                        class="nav-link {{ Request::is('admin/contact-data*') ? 'active' : null }}">
                        <i class="nav-icon fa fa-newspaper"></i>
                        <p>Contact Data List</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('admin.applynow.view') }}"
                        class="nav-link {{ Request::is('admin/view-apply-now*') ? 'active' : null }}">
                        <i class="nav-icon fa fa-newspaper"></i>
                        <p>Apply Now Data List</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('admin.mentorship-or-fundraise.view') }}"
                        class="nav-link {{ Request::is('admin/view-mentorship-or-fundraise*') ? 'active' : null }}">
                        <i class="nav-icon fa fa-newspaper"></i>
                        <p>MentorShip Or Fundraise</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('admin.investor-enrollment') }}"
                        class="nav-link {{ Request::is('admin/view-investor-enrollment*') ? 'active' : null }}">
                        <i class="nav-icon fa fa-newspaper"></i>
                        <p>Investor Enrollment</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('admin.corporate-enrollment') }}"
                        class="nav-link {{ Request::is('admin/view-corporate-enrollment*') ? 'active' : null }}">
                        <i class="nav-icon fa fa-newspaper"></i>
                        <p>Corporate Enrollment</p>
                    </a>
                </li>



                {{-- <li class="nav-item">
                    <a href="{{ route('admin.edit-staticpage_seo') }}"
                        class="nav-link {{ Request::is('admin/edit-staticpage_seo*') ? 'active' : null }}">
                        <i class="nav-icon fa-brands fa-searchengin"></i>
                        <p>Manage Seo</p>
                    </a>
                </li>
                

                <li class="nav-item">
                    <a href="{{ route('admin.edit.setting') }}"
                        class="nav-link {{ Request::is('admin/edit-setting*') ? 'active' : null }}">
                        <i class="nav-icon fa fa-puzzle-piece"></i>
                        <p>Settings</p>
                    </a>
                </li> --}}




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
