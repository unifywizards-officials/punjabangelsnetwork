<div class="page-wrapper">
    <header class="main-header">
        <div class="topbar">
            <div class="container-fluid">
                <div class="topbar__inner">
                    <ul class="list-unstyled topbar__info">
                        <li>
                            <i class="fa fa-map"></i>
                            <a href="#">C-201-202,Sector 74, Mohali, Punjab </a>
                        </li>
                        <li>
                            <i class="fa fa-envelope-open"></i>
                            <a href="mailto:info@punjabangelsnetwork.com">info@punjabangelsnetwork.com</a>
                        </li>
                        <li class="d-none-1000-1340">
                            <i class="fa fa-mobile"></i>
                            <a href="tel:+919878600316">+91 98786 00316</a> 
                            <!--&nbsp; &nbsp;-->
                            <!--<i class="fa fa-mobile"></i>-->
                            <!--<a href="tel:+919872808007">+91 98728 08007</a>-->
                        </li>
                    </ul><!-- /.topbar__info -->
                    <div class="topbar__social">
                        <div class="main-menu__cta">
                            <div class="main-menu__cta__text pan investor">
                                <a href="https://chat.whatsapp.com/DhJwGL7p6087eeVUQCQcIM" class="border-cap">
                                    <img src="{{ asset('guest/images/join-group.png') }}">
                                </a>
                            </div>
                        </div>
                        <div class="main-menu__cta">
                            <div class="main-menu__cta__text pan startup">
                                <a href="https://chat.whatsapp.com/D4PR0JMtulMI86aOowg67v" class="border-cap">
                                    <img src="{{ asset('guest/images/join-startup.png') }}">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav class="main-menu sticky-header">
            <div class="container-fluid">
                <a href="{{ route('homepage') }}" class="main-header__logo">
                    <img src="{{ asset('guest/images/logo-dark.png') }}" width="160" height="65" alt="">
                </a>

                <ul class="main-menu__list">
                    <li>
                        <a href="{{ route('homepage') }}">Home</a>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">About</a>
                        <ul>
                            <li><a href="{{ route('about') }}">About Our Company</a></li>
                            <li><a href="{{ route('partners') }}">About Our Partners</a></li>
                            <li><a href="{{ route('our-team') }}">About Our Teams</a></li>
                            <li><a href="{{ route('news.list') }}">News</a></li>
                            <li><a href="{{ route('blog.list') }}">Blogs</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ route('fund-raising') }}">Fund Raising</a>
                    </li>
                    
                    <li>
                        <a href="{{ route('startup') }}">Startup</a>

                    </li>
                    <li>
                        <a href="{{ route('investors') }}">Investor</a>
                    </li>
                    <li>
                        <a href="{{ route('institutional-support') }}">Institutional Support</a>
                    </li>
                    <li>
                        <a href="{{ route('events.list') }}">Events</a>
                        {{-- <ul>
								<li><a href="{{ route('events.list') }}">All Events</a></li>
								<li><a href="#">Video Of Events</a></li>
								<li><a href="#">Flagship Events</a></li>
								<li><a href="#">Start-up Investment Summit 1.0</a></li>
								<li><a href="#">Start-up Investment Summit 2.0</a></li>
								<li><a href="#">Captech 2023</a></li>
								
							</ul> --}}
                    </li>

                    <li><a href="{{ route('contact') }}">Contact</a></li>
                </ul>

                <div class="main-menu__right">
                    <a href="{{ route('apply') }}" class="thm-btn thm-btn--two ">
                        <span>Apply Now</span>

                    </a>
                    <a href="#" class="main-header__toggler mobile-nav__toggler">
                        <span></span>
                        <span></span>
                        <span></span>
                    </a>
                </div><!-- /.main-menu__right -->
            </div><!-- /.container-fluid -->
        </nav><!-- /.main-menu -->
    </header>
