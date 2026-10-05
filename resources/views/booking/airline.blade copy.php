<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>GeoTrip - Tour & Travel Booking Agency HTML Template | ThemezHub</title>
  <link rel="icon" type="image/x-icon" href="{{asset('booking/img/favicon.png')}}">

  <!-- All Plugins -->
  <link href="{{asset('booking/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('booking/css/animation.css')}}" rel="stylesheet">
  <link href="{{asset('booking/css/dropzone.min.css')}}" rel="stylesheet">
  <link href="{{asset('booking/css/flatpickr.min.css')}}" rel="stylesheet">
  <link href="{{asset('booking/css/flickity.min.css')}}" rel="stylesheet">
  <link href="{{asset('booking/css/lightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('booking/css/magnifypopup.css')}}" rel="stylesheet">
  <link href="{{asset('booking/css/select2.min.css')}}" rel="stylesheet">
  <link href="{{asset('booking/css/rangeSlider.min.css')}}" rel="stylesheet">
  <link href="{{asset('booking/css/prism.css')}}" rel="stylesheet">

  <!-- Fontawesome & Bootstrap Icons CSS -->
  <link href="{{asset('booking/css/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('booking/css/fontawesome.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  

  <!-- Custom CSS -->
  <link href="{{asset('booking/css/style.css')}}" rel="stylesheet">
</head>

<body>
  <!-- ============================================================== -->
  <!-- Preloader - style you can find in spinners.css -->
  <!-- ============================================================== -->
  <div id="preloader">
    <div class="preloader"><span></span><span></span></div>
  </div>

  <!-- ============================================================== -->
  <!-- Main wrapper - style you can find in pages.scss -->
  <!-- ============================================================== -->
  <div id="main-wrapper">

    <!-- ============================================================== -->
    <!-- Top header  -->
    <!-- ============================================================== -->
    <!-- Start Navigation -->
    <div class="header header-transparent theme">
      <div class="container">
        <nav id="navigation" class="navigation navigation-landscape">
          <div class="nav-header">
            <a class="nav-brand static-show" href="#"><img src="{{asset('booking/img/logo-light.png')}}" class="logo" alt=""></a>
            <a class="nav-brand mob-show" href="#"><img src="{{asset('booking/img/logo.png')}}" class="logo" alt=""></a>
            <div class="nav-toggle"></div>
            <div class="mobile_nav">
              <ul>
                <li class="currencyDropdown me-2">
                  <a href="#" class="nav-link" data-bs-toggle="modal" data-bs-target="#currencyModal"><span
                      class="fw-medium">INR</span></a>
                </li>
                <li class="languageDropdown me-2">
                  <a href="#" class="nav-link" data-bs-toggle="modal" data-bs-target="#countryModal"><img
                      src="{{asset('booking/img/flag/flag.png')}}" class="img-fluid" width="17" alt="Country"></a>
                </li>
                <li>
                  <a href="#" class="bg-light-primary text-primary rounded" data-bs-toggle="modal"
                    data-bs-target="#login"><i class="fa-regular fa-circle-user fs-6"></i></a>
                </li>
              </ul>
            </div>
          </div>
          <div class="nav-menus-wrapper" style="transition-property: none;">
            <ul class="nav-menu">
              <li><a href="JavaScript:Void(0);">Home<span class="submenu-indicator"></span></a>
                <ul class="nav-dropdown nav-submenu">
                  <li>
                    <a href="index.html">Home version 01</a>
                  </li>
                  <li>
                    <a href="home-2.html">Home version 02</a>
                  </li>
                  <li>
                    <a href="home-3.html">Home version 03</a>
                  </li>
                  <li>
                    <a href="home-4.html">Home version 04</a>
                  </li>
                  <li>
                    <a href="home-5.html">Home version 05</a>
                  </li>
                  <li>
                    <a href="slider-home.html">Home version 06</a>
                  </li>
                </ul>
              </li>

              <li><a href="JavaScript:Void(0);">Listing<span class="submenu-indicator"></span></a>
                <ul class="nav-dropdown nav-submenu">
                  <li><a href="JavaScript:Void(0);">Hotel<span class="submenu-indicator"></span></a>
                    <ul class="nav-dropdown nav-submenu">
                      <li><a href="hotel-list-01.html">Hotel list 01</a></li>
                      <li><a href="hotel-list-02.html">Hotel list 02</a></li>
                      <li><a href="hotel-list-03.html">Hotel list 03</a></li>
                      <li><a href="hotel-detail.html">Hotel Detail 01</a></li>
                      <li><a href="hotel-detail-2.html">Hotel Detail 02</a></li>
                    </ul>
                  </li>
                  <li><a href="JavaScript:Void(0);">Flight<span class="submenu-indicator"></span></a>
                    <ul class="nav-dropdown nav-submenu">
                      <li><a href="flight-list-01.html">Flight List 01</a></li>
                      <li><a href="flight-list-02.html">Flight List 02</a></li>
                      <li><a href="Flight-detail.html">Flight Detail</a></li>
                    </ul>
                  </li>
                  <li><a href="JavaScript:Void(0);">Rental<span class="submenu-indicator"></span></a>
                    <ul class="nav-dropdown nav-submenu">
                      <li><a href="property-list-01.html">Rental List 01</a></li>
                      <li><a href="property-list-02.html">Rental List 02</a></li>
                      <li><a href="property-list-03.html">Rental List 03</a></li>
                      <li><a href="rental-detail.html">Rental Detail</a></li>
                    </ul>
                  </li>
                  <li><a href="JavaScript:Void(0);">Car<span class="submenu-indicator"></span></a>
                    <ul class="nav-dropdown nav-submenu">
                      <li><a href="car-list-01.html">Car List 01</a></li>
                      <li><a href="car-list-02.html">Car List 02</a></li>
                      <li><a href="car-list-03.html">Car List 03</a></li>
                      <li><a href="car-detail.html">Car Detail</a></li>
                    </ul>
                  </li>
                  <li><a href="JavaScript:Void(0);">Destination<span class="submenu-indicator"></span></a>
                    <ul class="nav-dropdown nav-submenu">
                      <li><a href="destination-01.html">Destination List 01</a></li>
                      <li><a href="destination-02.html">Destination List 02</a></li>
                      <li><a href="destination-03.html">Destination List 03</a></li>
                      <li><a href="destination-detail.html">Destination Detail</a></li>
                    </ul>
                  </li>
                  <li>
                    <a href="join-us.html">Join with GeoTrip</a>
                  </li>
                  <li>
                    <a href="add-listing.html">Add Listing</a>
                  </li>
                  <li>
                    <a href="compare-listing.html">Compare Listing</a>
                  </li>
                  <li>
                    <a href="booking-page.html">Booking Page</a>
                  </li>
                  <li>
                    <a href="my-profile.html">User Dashboard</a>
                  </li>
                </ul>
              </li>

              <li><a href="JavaScript:Void(0);">Pages<span class="submenu-indicator"></span></a>
                <ul class="nav-dropdown nav-submenu">
                  <li><a href="JavaScript:Void(0);">Blog<span class="submenu-indicator"></span></a>
                    <ul class="nav-dropdown nav-submenu">
                      <li><a href="classic-blog.html">Classic Blog</a></li>
                      <li><a href="blog.html">Blog Grid Style</a></li>
                      <li><a href="blog-detail.html">Single Blog</a></li>
                    </ul>
                  </li>
                  <li><a href="JavaScript:Void(0);">Authentication<span class="submenu-indicator"></span></a>
                    <ul class="nav-dropdown nav-submenu">
                      <li><a href="login.html">Sign In</a></li>
                      <li><a href="register.html">Sign Up</a></li>
                      <li><a href="forgot-password.html">Forgot Password</a></li>
                      <li><a href="two-factor-auth.html">Two factor authentication</a></li>
                    </ul>
                  </li>
                  <li><a href="about-us.html">About Us</a></li>
                  <li><a href="career-page.html">Career Page</a></li>
                  <li><a href="help-center.html">Help Center</a></li>
                  <li><a href="faq.html">FAQ's</a></li>
                  <li><a href="404.html">Error Page</a></li>
                  <li><a href="pricing.html">Pricing</a></li>
                  <li><a href="privacy-policy.html">Privacy Policy</a></li>
                  <li><a href="JavaScript:Void(0);">Contact Us<span class="submenu-indicator"></span></a>
                    <ul class="nav-dropdown nav-submenu">
                      <li><a href="contact-v1.html">Contact V.01</a></li>
                      <li><a href="contact-v2.html">Contact V0.2</a></li>
                    </ul>
                  </li>
                </ul>
              </li>

              <li><a href="JavaScript:Void(0);">Menu<span class="submenu-indicator"></span></a>
                <ul class="nav-dropdown nav-submenu xxl-menu">
                  <li>
                    <a href="home-stay.html">
                      <div class="mega-advance-menu">
                        <div class="mega-first square--50 rounded-2 gray-simple text-success fs-4"><i
                            class="fa-solid fa-spa"></i></div>
                        <div class="mega-last ps-2">
                          <h6 class="lh-base fs-6 font--bold m-0">Home Stays</h6>
                          <p class="text-sm-muted m-0">Beautiful Place for stays</p>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="home-hotel.html">
                      <div class="mega-advance-menu">
                        <div class="mega-first square--50 rounded-2 gray-simple text-warning fs-4"><i
                            class="fa-solid fa-hotel"></i></div>
                        <div class="mega-last ps-2">
                          <h6 class="lh-base fs-6 font--bold m-0">Home Hotel</h6>
                          <p class="text-sm-muted m-0">Beautiful Place for stays</p>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="home-flight.html">
                      <div class="mega-advance-menu">
                        <div class="mega-first square--50 rounded-2 gray-simple text-primary fs-4"><i
                            class="fa-solid fa-plane"></i></div>
                        <div class="mega-last ps-2">
                          <h6 class="lh-base fs-6 font--bold m-0">Home Flight</h6>
                          <p class="text-sm-muted m-0">Beautiful Place for stays</p>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="home-rental.html">
                      <div class="mega-advance-menu">
                        <div class="mega-first square--50 rounded-2 gray-simple text-purple fs-4"><i
                            class="fa-solid fa-eye"></i></div>
                        <div class="mega-last ps-2">
                          <h6 class="lh-base fs-6 font--bold m-0">Home Rental</h6>
                          <p class="text-sm-muted m-0">Beautiful Place for stays</p>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="home-car.html">
                      <div class="mega-advance-menu">
                        <div class="mega-first square--50 rounded-2 gray-simple text-seagreen fs-4"><i
                            class="fa-brands fa-dropbox"></i></div>
                        <div class="mega-last ps-2">
                          <h6 class="lh-base fs-6 font--bold m-0">Home Cabs</h6>
                          <p class="text-sm-muted m-0">Beautiful Place for stays</p>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="home-stay.html">
                      <div class="mega-advance-menu">
                        <div class="mega-first square--50 rounded-2 gray-simple text-info fs-4"><i
                            class="fa-solid fa-person-walking-luggage"></i></div>
                        <div class="mega-last ps-2">
                          <h6 class="lh-base fs-6 font--bold m-0">Home Destination</h6>
                          <p class="text-sm-muted m-0">Beautiful Place for stays</p>
                        </div>
                      </div>
                    </a>
                  </li>
                </ul>
              </li>

              <li><a href="documantion/index.html" target="_blank">Docs</a></li>

            </ul>

            <ul class="nav-menu nav-menu-social align-to-right">
              <li class="currencyDropdown me-2">
                <a href="#" class="nav-link" data-bs-toggle="modal" data-bs-target="#currencyModal"><span
                    class="fw-medium">INR</span></a>
              </li>
              <li class="languageDropdown me-2">
                <a href="#" class="nav-link" data-bs-toggle="modal" data-bs-target="#countryModal"><img
                    src="{{asset('booking/img/flag/flag.png')}}" class="img-fluid" width="17" alt="Country"></a>
              </li>
              <li class="list-buttons light">
                <a href="#" data-bs-toggle="modal" data-bs-target="#login"><i
                    class="fa-regular fa-circle-user fs-6 me-2"></i>Sign In / Register</a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </div>
    <!-- End Navigation -->
    <div class="clearfix"></div>
    <!-- ============================================================== -->
    <!-- Top header  -->
    <!-- ============================================================== -->


    <!-- ============================ Hero Banner  Start================================== -->
    <div class="image-cover hero-header bg-white" style="background:url({{asset('booking/img/17125.jpg')}} no-repeat;" data-overlay="5">
      <div class="container">

        <!-- Search Form -->
        <div class="row justify-content-center align-items-center">
          <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12">
            <div class="position-relative text-center mb-5">
              <h1>Book Your Perfect Escape</h1>
              <p class="fs-5 fw-light">Take a little break from the work strss of everyday. Discover plan trip and
                explore beautiful destinations.</p>
            </div>
          </div>

          <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
            <div class="navTabbs d-flex align-items-center justify-content-center w-100 mb-2">
              <ul class="nav nav-pills lights medium justify-content-center mb-3" id="tour-pills-tab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" data-bs-toggle="tab" href="#hotels"><i class="fa-solid fa-hotel me-2"></i>Hotels</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-bs-toggle="tab" href="#flights"><i class="fa-solid fa-jet-fighter me-2"></i>Flights</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-bs-toggle="tab" href="#tours"><i class="fa-solid fa-globe me-2"></i>Tour</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-bs-toggle="tab" href="#cabs"><i class="fa-solid fa-car me-2"></i>Cab</a>
                </li>
              </ul>
            </div>
            <div class="search-wrap bg-transparents rounded-3 p-3">
              <div class="tab-content">
                <div class="tab-pane show active" id="hotels">
                  <div class="row gy-2 gx-md-2 gx-sm-2">

                    <div class="col-xl-8 col-lg-7 col-md-12">
                      <div class="row gy-3 gx-md-2 gx-sm-2">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 position-relative">
                          <div class="form-group hdd-arrow mb-0">
                            <select class="goingto form-control fw-bold hdd-arrow">
                              <option value="">Select</option>
                              <option value="ny">New York</option>
                              <option value="sd">San Diego</option>
                              <option value="sj">San Jose</option>
                              <option value="ph">Philadelphia</option>
                              <option value="nl">Nashville</option>
                              <option value="sf">San Francisco</option>
                              <option value="hu">Houston</option>
                              <option value="sa">San Antonio</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                          <div class="form-group mb-0">
                            <input type="text" class="form-control fw-bold" placeholder="Check-In & Check-Out"
                              id="checkinout" readonly="readonly">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-4 col-lg-5 col-md-12">
                      <div class="row gy-3 gx-md-2 gx-sm-2">
                        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8">
                          <div class="form-group mb-0">
                            <div class="booking-form__input guests-input mixer-auto">
                              <button name="guests-btn" id="guests-input-btn">1 Guest</button>
                              <div class="guests-input__options" id="guests-input-options">
                                <div>
                                  <span class="guests-input__ctrl minus" id="adults-subs-btn"><i
                                      class="fa-solid fa-minus"></i></span>
                                  <span class="guests-input__value"><span id="guests-count-adults">1</span>Adults</span>
                                  <span class="guests-input__ctrl plus" id="adults-add-btn"><i
                                      class="fa-solid fa-plus"></i></span>
                                </div>
                                <div>
                                  <span class="guests-input__ctrl minus" id="children-subs-btn"><i
                                      class="fa-solid fa-minus"></i></span>
                                  <span class="guests-input__value"><span id="guests-count-children">0</span>Children</span>
                                  <span class="guests-input__ctrl plus" id="children-add-btn"><i
                                      class="fa-solid fa-plus"></i></span>
                                </div>
                                <div>
                                  <span class="guests-input__ctrl minus" id="room-subs-btn"><i
                                      class="fa-solid fa-minus"></i></span>
                                  <span class="guests-input__value"><span id="guests-count-room">0</span>Rooms</span>
                                  <span class="guests-input__ctrl plus" id="room-add-btn"><i
                                      class="fa-solid fa-plus"></i></span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                          <div class="form-group mb-0">
                            <button type="button" class="btn btn-primary full-width fw-medium"><i
                                class="fa-solid fa-magnifying-glass me-2"></i>Search</button>
                          </div>
                        </div>
                      </div>
                    </div>

                  </div>  
                </div>
                <div class="tab-pane" id="flights">
                  <div class="row gx-lg-2 g-3">

                    <div class="col-xl-5 col-lg-5 col-md-12">
                      <div class="row gy-3 gx-lg-2 gx-3">
                      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 position-relative">
                        <div class="form-group hdd-arrow mb-0">
						             <input type="text" id="leaving_search" class="leaving_search form-control fw-bold" placeholder="Enter city name">
                          <div id="leaving"></div>
                          <div id="cityCodeResult"></div>
                        </div>
                        
                        <div class="btn-flip-icon mt-md-0">
                        <button class="p-0 m-0 text-primary"><i class="fa-solid fa-right-left"></i></button>
                        </div>
                        
                      </div>
                      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                        <div class="form-groupp hdd-arrow mb-0">
						            <input type="text" id="goingto_search" class="goingto_search form-control fw-bold mySelect2" placeholder="Enter city name">
                          <div id="going"></div>
                          <div id="cityCodeResult1"></div>
                      </div>
                      </div>
                      </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-12">
                      <div class="row gy-3 gx-lg-2 gx-3">
                      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                        <div class="form-group mb-0">
                        <input class="form-control fw-bold choosedate choosedate_start" type="text" placeholder="Departure.." readonly="readonly">
                        </div>
                      </div>
                      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                        <div class="form-group mb-0">
                        <input class="form-control fw-bold choosedate choosedate_end" type="text" placeholder="Return.." readonly="readonly">
                        </div>
                      </div>
                      </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-12">
                      <div class="form-groupp hdd-arrow mb-0">
                      <select class="occupant form-control fw-bold">
                        <option value="">Select</option>
                        <option value="1">01 Adult</option>
                        <option value="2">02 Adult</option>
                        <option value="3">03 Adult</option>
                        <option value="4">04 Adult</option>
                        <option value="5">05 Adult</option>
                        <option value="6">06 Adult</option>
                        <option value="7">07 Adult</option>
                        <option value="8">08 Adult</option>
                      </select>
                      </div>
                    </div>
                    <div class="col-xl-1 col-lg-1 col-md-12">
                      <div class="form-group mb-0">
                      <button class="btn btn-primary full-width fw-medium" id="fetchDataBtn"><i
                        class="fa-solid fa-magnifying-glass fs-5"></i></button>
                      </div>
                    </div>

                    </div>

					        <div id="flightResponse"></div>
                  <div id="loader" style="display: none;">Loading...</div>

                </div>
                <div class="tab-pane" id="tours">
                  <div class="row gy-3 gx-md-2 gx-sm-2">

                    <div class="col-xl-8 col-lg-7 col-md-12">
                      <div class="row gy-3 gx-md-2 gx-sm-2">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 position-relative">
                          <div class="form-group hdd-arrow mb-0">
                            <select class="goingto form-control fw-bold">
                              <option value="">Select</option>
                              <option value="ny">New York</option>
                              <option value="sd">San Diego</option>
                              <option value="sj">San Jose</option>
                              <option value="ph">Philadelphia</option>
                              <option value="nl">Nashville</option>
                              <option value="sf">San Francisco</option>
                              <option value="hu">Houston</option>
                              <option value="sa">San Antonio</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                          <div class="form-group mb-0">
                            <input type="text" class="form-control choosedate fw-bold" placeholder="Choose Date" readonly="readonly">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-4 col-lg-5 col-md-12">
                      <div class="row gy-3 gx-md-2 gx-sm-2">
                        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8">
                          <div class="form-group hdd-arrow mb-0">
                            <select class="tour form-control fw-bold">
                              <option value="">Select</option>
                              <option value="ny">Family Package</option>
                              <option value="sd">Honymoon Package</option>
                              <option value="sj">Group Package</option>
                              <option value="ph">Desert</option>
                              <option value="nl">History</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                          <div class="form-group mb-0">
                            <button type="button" class="btn btn-primary full-width fw-medium"><i
                                class="fa-solid fa-magnifying-glass me-2"></i>Search</button>
                          </div>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>
                <div class="tab-pane" id="cabs">
                  <div class="row gy-3 gx-md-2 gx-sm-2">

                    <div class="col-xl-8 col-lg-7 col-md-12">
                      <div class="row gy-3 gx-md-2 gx-sm-2">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 position-relative">
                          <div class="form-group hdd-arrow mb-0">
                            <select class="pickup form-control fw-bold">
                              <option value="">Select</option>
                              <option value="ny">New York</option>
                              <option value="sd">San Diego</option>
                              <option value="sj">San Jose</option>
                              <option value="ph">Philadelphia</option>
                              <option value="nl">Nashville</option>
                              <option value="sf">San Francisco</option>
                              <option value="hu">Houston</option>
                              <option value="sa">San Antonio</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                          <div class="form-group hdd-arrow mb-0">
                            <select class="drop form-control fw-bold">
                              <option value="">Select</option>
                              <option value="ny">New York</option>
                              <option value="sd">San Diego</option>
                              <option value="sj">San Jose</option>
                              <option value="ph">Philadelphia</option>
                              <option value="nl">Nashville</option>
                              <option value="sf">San Francisco</option>
                              <option value="hu">Houston</option>
                              <option value="sa">San Antonio</option>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-4 col-lg-5 col-md-12">
                      <div class="row gy-3 gx-md-2 gx-sm-2">
                        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8">
                          <div class="form-group mb-0">
                            <input type="text" class="form-control choosedate fw-bold" placeholder="Choose Pickup Date" readonly="readonly">
                          </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                          <div class="form-group mb-0">
                            <button type="button" class="btn btn-primary full-width fw-medium"><i
                                class="fa-solid fa-magnifying-glass me-2"></i>Search</button>
                          </div>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- </row> -->

      </div>
    </div>
    <!-- ============================ Hero Banner End ================================== -->

    <!-- ============================ Call To Action Start ================================== -->
    <div class="position-relative bg-cover py-5 bg-primary" style="background:url({{asset('booking/img/bg.jpg')}}) no-repeat;"
      data-overlay="5">
      <div class="container">
        <div class="row align-items-center justify-content-between">
          <div class="col-xl-12 col-lg-12 col-md-12">
            <div class="calltoAction-wraps position-relative py-5 px-4">
              <div class="ht-40"></div>
              <div class="row align-items-center justify-content-center">
                <div class="col-xl-8 col-lg-9 col-md-10 col-sm-11 text-center">

                  <div class="calltoAction-title mb-5">
                    <h4 class="text-light fs-2 fw-bold lh-base m-0">Subscribe & Get<br>Special Discount with GeoTrip.com
                    </h4>
                  </div>
                  <div class="newsletter-forms mt-md-0 mt-4">
                    <form>
                      <div class="row align-items-center justify-content-between bg-white rounded-3 p-2 gx-0">

                        <div class="col-xl-9 col-lg-8 col-md-8">
                          <div class="form-group m-0">
                            <input type="text" class="form-control bold ps-1 border-0" placeholder="Enter Your Mail!">
                          </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-4">
                          <div class="form-group m-0">
                            <button type="button" class="btn btn-primary fw-medium full-width">Submit<i
                                class="fa-solid fa-arrow-trend-up ms-2"></i></button>
                          </div>
                        </div>

                      </div>
                    </form>
                  </div>

                </div>
              </div>
              <div class="ht-40"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- ============================ Call To Action Start ================================== -->


    <!-- ============================ Footer Start ================================== -->
    <footer class="footer skin-dark-footer">
      <div>
        <div class="container">
          <div class="row">

            <div class="col-lg-3 col-md-4">
              <div class="footer-widget">
                <div class="d-flex align-items-start flex-column mb-3">
                  <div class="d-inline-block"><img src="{{asset('booking/img/logo-light.png')}}" class="img-fluid" width="160"
                      alt="Footer Logo"></div>
                </div>
                <div class="footer-add pe-xl-3">
                  <p>We make your dream more beautiful & enjoyful with lots of happiness.</p>
                </div>
                <div class="foot-socials">
                  <ul>
                    <li><a href="JavaScript:Void(0);"><i class="fa-brands fa-facebook"></i></a></li>
                    <li><a href="JavaScript:Void(0);"><i class="fa-brands fa-linkedin"></i></a></li>
                    <li><a href="JavaScript:Void(0);"><i class="fa-brands fa-google-plus"></i></a></li>
                    <li><a href="JavaScript:Void(0);"><i class="fa-brands fa-twitter"></i></a></li>
                    <li><a href="JavaScript:Void(0);"><i class="fa-brands fa-dribbble"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-2 col-md-4">
              <div class="footer-widget">
                <h4 class="widget-title">The Navigation</h4>
                <ul class="footer-menu">
                  <li><a href="JavaScript:Void(0);">Talent Marketplace</a></li>
                  <li><a href="JavaScript:Void(0);">Payroll Services</a></li>
                  <li><a href="JavaScript:Void(0);">Direct Contracts</a></li>
                  <li><a href="JavaScript:Void(0);">Hire Worldwide</a></li>
                  <li><a href="JavaScript:Void(0);">Hire in the USA</a></li>
                  <li><a href="JavaScript:Void(0);">How to Hire</a></li>
                </ul>
              </div>
            </div>

            <div class="col-lg-2 col-md-4">
              <div class="footer-widget">
                <h4 class="widget-title">Our Resources</h4>
                <ul class="footer-menu">
                  <li><a href="JavaScript:Void(0);">Free Business tools</a></li>
                  <li><a href="JavaScript:Void(0);">Affiliate Program</a></li>
                  <li><a href="JavaScript:Void(0);">Success Stories</a></li>
                  <li><a href="JavaScript:Void(0);">Upwork Reviews</a></li>
                  <li><a href="JavaScript:Void(0);">Resources</a></li>
                  <li><a href="JavaScript:Void(0);">Help & Support</a></li>
                </ul>
              </div>
            </div>

            <div class="col-lg-2 col-md-6">
              <div class="footer-widget">
                <h4 class="widget-title">The Company</h4>
                <ul class="footer-menu">
                  <li><a href="JavaScript:Void(0);">About Us</a></li>
                  <li><a href="JavaScript:Void(0);">Leadership</a></li>
                  <li><a href="JavaScript:Void(0);">Contact Us</a></li>
                  <li><a href="JavaScript:Void(0);">Investor Relations</a></li>
                  <li><a href="JavaScript:Void(0);">Trust, Safety & Security</a></li>
                </ul>
              </div>
            </div>

            <div class="col-lg-3 col-md-6">
              <div class="footer-widget">
                <h4 class="widget-title">Payment Methods</h4>
                <div class="pmt-wrap">
                  <img src="{{asset('booking/img/payment.png')}}" class="img-fluid" alt="">
                </div>
                <div class="our-prtwrap mt-4">
                  <div class="prtn-title">
                    <p class="text-light opacity-75 fw-medium">Our Partners</p>
                  </div>
                  <div class="prtn-thumbs d-flex align-items-center justify-content-start">
                    <div class="pmt-wrap pe-4">
                      <img src="{{asset('booking/img/mytrip.png')}}" class="img-fluid" alt="">
                    </div>
                    <div class="pmt-wrap pe-4">
                      <img src="{{asset('booking/img/tripadv.png')}}" class="img-fluid" alt="">
                    </div>
                    <div class="pmt-wrap pe-4">
                      <img src="{{asset('booking/img/goibibo.png')}}" class="img-fluid" alt="">
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>

      <div class="footer-bottom border-top">
        <div class="container">
          <div class="row align-items-center justify-content-between">

            <div class="col-xl-6 col-lg-6 col-md-6">
              <p class="mb-0">© 2023 GeoTrip Design by Themezhub.</p>
            </div>

            <div class="col-xl-6 col-lg-6 col-md-6">
              <ul class="p-0 d-flex justify-content-start justify-content-md-end text-start text-md-end m-0">
                <li><a href="#">Terms of services</a></li>
                <li class="ms-3"><a href="#">Privacy Policies</a></li>
                <li class="ms-3"><a href="#">Cookies</a></li>
              </ul>
            </div>

          </div>
        </div>
      </div>
    </footer>
    <!-- ============================ Footer End ================================== -->
    <a id="back2Top" class="top-scroll" title="Back to top" href="#"><i class="fa-solid fa-sort-up"></i></a>


  </div>
  <!-- ============================================================== -->
  <!-- End Wrapper -->
  <!-- ============================================================== -->


  <!-- ============================================================== -->
  <!-- All Jquery -->
  <!-- ============================================================== -->
  <script src="{{asset('booking/js/jquery.min.js')}}"></script>
    <script src="{{asset('booking/js/popper.min.js')}}"></script>
    <script src="{{asset('booking/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('booking/js/dropzone.min.js')}}"></script>
    <script src="{{asset('booking/js/flatpickr.js')}}"></script>
    <script src="{{asset('booking/js/flickity.pkgd.min.js')}}"></script>
    <script src="{{asset('booking/js/lightbox.min.js')}}"></script>
    <script src="{{asset('booking/js/rangeslider.js')}}"></script>
    <script src="{{asset('booking/js/select2.min.js')}}"></script>
    <script src="{{asset('booking/js/counterup.min.js')}}"></script>
    <script src="{{asset('booking/js/prism.js')}}"></script>
  
  <script src="{{asset('booking/js/addadult.js')}}"></script>
  <script src="{{asset('booking/js/custom.js')}}"></script>
  <!-- ============================================================== -->
  <!-- This page plugins -->
  <!-- ============================================================== -->

</body>

<script>

	$(document).ready(function() {



var typingTimer; // Timer identifier
var doneTypingInterval = 500; // Time in milliseconds (adjust as needed)

// Function to execute after typing stops
function doneTypingLeaving(inputElement) {
    var searchTerm = inputElement.val(); // Get the user input
    $('#leaving').empty();
    $('#cityCodeResult').text('');
    // Perform your AJAX request with the user input
    $.ajax({
        url: "{{ route('getCityCode') }}",
        method: 'GET',
        data: {
            searchTerm: searchTerm
        },
        success: function(response) {
            
            if (response.meta.count === 0) {
              $('#cityCodeResult').text('No Record Found');
            }
            
          $.each(response.data, function(index, item) {
          var leaving = $('<a>').attr("href", "#").attr("data-value", item.address.cityName).attr("data-iataCode", item.address.cityCode).attr("class", 'leavingclass').text(item.address.cityName +' '+item.address.cityCode).append('<br>'); // Create list item with text
            $('#leaving').append(leaving); // Append list item to the list
         
          });  
        },
        error: function(xhr, status, error) {
            console.error(error);
            $('#leaving').empty();
            $('#cityCodeResult').text('Error fetching city code');
        }
    });
}


function doneTypingGoing(inputElement) {
    var searchTerm = inputElement.val(); // Get the user input
    $('#going').empty();
    $('#cityCodeResult1').text('');
    // Perform your AJAX request with the user input
    $.ajax({
        url: "{{ route('getCityCode') }}",
        method: 'GET',
        data: {
            searchTerm: searchTerm
        },
        success: function(response) {
            console.log(response.data)
          
            if (response.meta.count === 0) {
              $('#cityCodeResult1').text('No Record Found');
            }
          $.each(response.data, function(index, item) {
            var going = $('<a>').attr("href", "#").attr("class", 'goingclass').attr("data-value", item.address.cityName).attr("data-iataCode", item.address.cityCode).text(item.address.cityName +' '+item.address.cityCode).append('<br>'); // Create list item with text
              $('#going').append(going); // Append list item to the list
          })
        },
        error: function(xhr, status, error) {
          $('#going').empty();
            console.error(error);
            $('#cityCodeResult1').text('Error fetching city code');
        }
    });
}

$('.leaving_search').keyup(function() {
    clearTimeout(typingTimer); // Clear the previous timer

    var $inputElement = $(this); // Get the input element that triggered the event

    // Start a new timer
    typingTimer = setTimeout(function() {
        doneTypingLeaving($inputElement); // Call the doneTyping function with the input element
    }, doneTypingInterval);
});

$('.goingto_search').keyup(function() {
    clearTimeout(typingTimer); // Clear the previous timer

    var $inputElement = $(this); // Get the input element that triggered the event

    // Start a new timer
    typingTimer = setTimeout(function() {
        doneTypingGoing($inputElement); // Call the doneTyping function with the input element
    }, doneTypingInterval);
});



$(document).ready(function() {
  $("#leaving").on("click", "a.leavingclass", function(event) {
    event.preventDefault();
    // Prevent the default behavior of the anchor tag
    // Retrieve the value of the data-value attribute
    var value = $(this).data("value");
    var iata = $(this).data("iatacode");
    // console.log(value,iata);
    // console.log(value,'leaving');
     $("#leaving_search").val(value);
     $("#leaving_search").attr("data-value", value)
     $("#leaving_search").attr("data-iatacode", iata)
     $('#leaving').empty();
    
    // Output the value (you can perform any further actions with it)
    // console.log("Clicked value: " + value);
});
   }) 

   
// Attach a click event handler to the <a> tag
$(document).ready(function() {
      $("#going").on("click", "a.goingclass", function(event) {
        event.preventDefault();
        // Prevent the default behavior of the anchor tag
        // Retrieve the value of the data-value attribute
        var value = $(this).data("value");
        var iata = $(this).data("iatacode");
        $("#goingto_search").attr("data-value", value)
        $("#goingto_search").attr("data-iatacode", iata)
        $("#goingto_search").val(value);
        $('#going').empty();
        
        // Output the value (you can perform any further actions with it)
        // console.log("Clicked value: " + value);
    });
   }) 




});

$(document).ready(function() {
   $("#fetchDataBtn").click(function() {
    // console.log($('#leaving_search').data("iatacode"));
    // console.log($('#goingto_search').val());
    var leaving_search=$('#leaving_search').data("iatacode");
    var goingto_search=$('#goingto_search').data("iatacode");
    var choosedate_start=$('.choosedate_start').val();
    var choosedate_end=$('.choosedate_end').val();
    var occupant=$('.occupant').val();
    // console.log(leaving_search,goingto_search,choosedate_start,choosedate_end,occupant)
    // return;
    // Make AJAX request to fetch API data
        $.ajax({
            url: "{{ route('search_flight') }}",
            method: 'GET',
            data: {
            leaving_search: leaving_search,
            goingto_search: goingto_search,
            choosedate_start: choosedate_start,
            choosedate_end: choosedate_end,
            occupant: occupant
            },
            beforeSend: function() {
                // Show loader before sending the request
                $('#loader').show();
            },
            success: function(response) {
                // Hide loader and display API response
                $('#loader').hide();
                

                // Function to format date and time
         // Function to format date and time
        function formatDate(dateString) {
            var date = new Date(dateString);
            return date.toLocaleDateString() + ' ' + date.toLocaleTimeString();
        }
                console.log(response)
                // displayResponse(response);
                 // Generate HTML for each flight
        var flightHtml = '';
        response.forEach(function(flight) {
            flightHtml += `
                <div class="row justify-content-between gy-4 gx-xl-4 gx-lg-3 gx-md-3 gx-4">

					<!-- Sidebar Filter Options -->
					<div class="col-xl-3 col-lg-4 col-md-12">
						<div class="filter-searchBar bg-white rounded-3">
							<div class="filter-searchBar-head border-bottom">
								<div class="searchBar-headerBody d-flex align-items-start justify-content-between px-3 py-3">
									<div class="searchBar-headerfirst">
										<h6 class="fw-bold fs-5 m-0">Filters</h6>
										<p class="text-md text-muted m-0">Showing 180 Flights</p>
									</div>
									<div class="searchBar-headerlast text-end">
										<a href="#" class="text-md fw-medium text-primary active">Clear All</a>
									</div>
								</div>
							</div>

							<div class="filter-searchBar-body">

								<!-- Departure & Return -->
								<div class="searchBar-single px-3 py-3 border-bottom">
									<div class="searchBar-single-title d-flex mb-3">
										<h6 class="sidebar-subTitle fs-6 fw-medium m-0">Departure</h6>
									</div>
									<div class="searchBar-single-wrap mb-4">
										<ul class="row align-items-center justify-content-between p-0 gx-3 gy-2">
											<li class="col-6">
												<input type="checkbox" class="btn-check" id="before6am">
												<label class="btn btn-sm btn-secondary rounded-1 fw-medium px-4 full-width" for="before6am">Before 6AM</label>
											</li>
											<li class="col-6">
												<input type="checkbox" class="btn-check" id="6am12pm">
												<label class="btn btn-sm btn-secondary rounded-1 fw-medium px-4 full-width" for="6am12pm">6AM -
													12PM</label>
											</li>
											<li class="col-6">
												<input type="checkbox" class="btn-check" id="12pm6pm">
												<label class="btn btn-sm btn-secondary rounded-1 fw-medium px-4 full-width" for="12pm6pm">12PM -
													6PM</label>
											</li>
											<li class="col-6">
												<input type="checkbox" class="btn-check" id="after6pm">
												<label class="btn btn-sm btn-secondary rounded-1 fw-medium px-4 full-width" for="after6pm">After
													6PM</label>
											</li>
										</ul>
									</div>

									<div class="searchBar-single-title d-flex mb-3">
										<h6 class="sidebar-subTitle fs-6 fw-medium m-0">Return</h6>
									</div>
									<div class="searchBar-single-wrap">
										<ul class="row align-items-center justify-content-between p-0 gx-3 gy-2">
											<li class="col-6">
												<input type="checkbox" class="btn-check" id="before6am1">
												<label class="btn btn-sm btn-secondary rounded-1 fw-medium px-4 full-width" for="before6am1">Before 6AM</label>
											</li>
											<li class="col-6">
												<input type="checkbox" class="btn-check" id="6am12pm1">
												<label class="btn btn-sm btn-secondary rounded-1 fw-medium px-4 full-width" for="6am12pm1">6AM -
													12PM</label>
											</li>
											<li class="col-6">
												<input type="checkbox" class="btn-check" id="12pm6pm1">
												<label class="btn btn-sm btn-secondary rounded-1 fw-medium px-4 full-width" for="12pm6pm1">12PM
													- 6PM</label>
											</li>
											<li class="col-6">
												<input type="checkbox" class="btn-check" id="after6pm1">
												<label class="btn btn-sm btn-secondary rounded-1 fw-medium px-4 full-width" for="after6pm1">After 6PM</label>
											</li>
										</ul>
									</div>

								</div>

								<!-- Onward Stops -->
								<div class="searchBar-single px-3 py-3 border-bottom">
									<div class="searchBar-single-title d-flex mb-3">
										<h6 class="sidebar-subTitle fs-6 fw-medium m-0">Onward Stops</h6>
									</div>
									<div class="searchBar-single-wrap">
										<ul class="row align-items-center justify-content-between p-0 gx-3 gy-2">
											<li class="col-6">
												<input type="checkbox" class="btn-check" id="direct">
												<label class="btn btn-sm btn-secondary rounded-1 fw-medium px-4 full-width" for="direct">Direct</label>
											</li>
											<li class="col-6">
												<input type="checkbox" class="btn-check" id="1stop">
												<label class="btn btn-sm btn-secondary rounded-1 fw-medium px-4 full-width" for="1stop">1
													Stop</label>
											</li>
											<li class="col-6">
												<input type="checkbox" class="btn-check" id="2stop">
												<label class="btn btn-sm btn-secondary rounded-1 fw-medium px-4 full-width" for="2stop">2+
													Stop</label>
											</li>
										</ul>
									</div>

									<div class="searchBar-single-title d-flex mb-3">
										<h6 class="sidebar-subTitle fs-6 fw-medium m-0">Return Stops</h6>
									</div>
									<div class="searchBar-single-wrap">
										<ul class="row align-items-center justify-content-between p-0 gx-3 gy-2">
											<li class="col-6">
												<input type="checkbox" class="btn-check" id="direct1">
												<label class="btn btn-sm btn-secondary rounded-1 fw-medium px-4 full-width" for="direct1">Direct</label>
											</li>
											<li class="col-6">
												<input type="checkbox" class="btn-check" id="1stop1">
												<label class="btn btn-sm btn-secondary rounded-1 fw-medium px-4 full-width" for="1stop1">1
													Stop</label>
											</li>
											<li class="col-6">
												<input type="checkbox" class="btn-check" id="2stop1">
												<label class="btn btn-sm btn-secondary rounded-1 fw-medium px-4 full-width" for="2stop1">2+
													Stop</label>
											</li>
										</ul>
									</div>

								</div>

								<!-- Pricing -->
								<div class="searchBar-single px-3 py-3 border-bottom">
									<div class="searchBar-single-title d-flex mb-3">
										<h6 class="sidebar-subTitle fs-6 fw-medium m-0">Pricing Range in US$</h6>
									</div>
									<div class="searchBar-single-wrap">
										<span class="irs irs--round js-irs-0"><span class="irs"><span class="irs-line" tabindex="0"></span><span class="irs-min" style="visibility: hidden;">0</span><span class="irs-max" style="visibility: hidden;">1 000</span><span class="irs-from" style="visibility: visible; left: 5.51105%;">100</span><span class="irs-to" style="visibility: visible; left: 79.9215%;">900</span><span class="irs-single" style="visibility: hidden; left: 32.8603%;">100 — 900</span></span><span class="irs-grid"></span><span class="irs-bar" style="left: 12.7948%; width: 74.4105%;"></span><span class="irs-shadow shadow-from" style="display: none;"></span><span class="irs-shadow shadow-to" style="display: none;"></span><span class="irs-handle from" style="left: 9.30131%;"><i></i><i></i><i></i></span><span class="irs-handle to type_last" style="left: 83.7118%;"><i></i><i></i><i></i></span></span><input type="text" class="js-range-slider irs-hidden-input" name="my_range" value="" data-skin="round" data-type="double" data-min="0" data-max="1000" data-grid="false" tabindex="-1" readonly="">
									</div>
								</div>

								<!-- Facilities -->
								<div class="searchBar-single px-3 py-3 border-bottom">
									<div class="searchBar-single-title d-flex mb-3">
										<h6 class="sidebar-subTitle fs-6 fw-medium m-0">Facilities</h6>
									</div>
									<div class="searchBar-single-wrap">
										<ul class="row align-items-center justify-content-between p-0 gx-3 gy-2">
											<li class="col-12">
												<div class="form-check">
													<input class="form-check-input" type="checkbox" id="baggage">
													<label class="form-check-label" for="baggage">Baggage</label>
												</div>
											</li>
											<li class="col-12">
												<div class="form-check">
													<input class="form-check-input" type="checkbox" id="inflightmeal">
													<label class="form-check-label" for="inflightmeal">In-flight Meal</label>
												</div>
											</li>
											<li class="col-12">
												<div class="form-check">
													<input class="form-check-input" type="checkbox" id="inflightenter">
													<label class="form-check-label" for="inflightenter">In-flight Entertainment</label>
												</div>
											</li>
											<li class="col-12">
												<div class="form-check">
													<input class="form-check-input" type="checkbox" id="flswifi">
													<label class="form-check-label" for="flswifi">WiFi</label>
												</div>
											</li>
											<li class="col-12">
												<div class="form-check">
													<input class="form-check-input" type="checkbox" id="flusbport">
													<label class="form-check-label" for="flusbport">Power/USB Port</label>
												</div>
											</li>
										</ul>
									</div>

								</div>

								<!-- Popular Flights -->
								<div class="searchBar-single px-3 py-3 border-bottom">
									<div class="searchBar-single-title d-flex align-items-center justify-content-between mb-3">
										<h6 class="sidebar-subTitle fs-6 fw-medium m-0">Preferred Airlines</h6>
										<a href="#" class="text-md fw-medium text-muted active">Reset</a>
									</div>
									<div class="searchBar-single-wrap">
										<ul class="row align-items-center justify-content-between p-0 gx-3 gy-2">
											<li class="col-12">
												<div class="form-check lg">
													<div class="frm-slicing d-flex align-items-center">
														<div class="frm-slicing-first">
															<input class="form-check-input" type="checkbox" id="baggage1">
															<label class="form-check-label" for="baggage1"></label>
														</div>
														<div class="frm-slicing-end d-flex align-items-center justify-content-between full-width ps-1">
															<div class="frms-flex d-flex align-items-center">
																<div class="frm-slicing-img"><img src="assets/img/air-1.png" class="img-fluid" width="25" alt=""></div>
																<div class="frm-slicing-title ps-2"><span class="text-muted-2">Air India</span></div>
															</div>
															<div class="text-end"><span class="text-md text-muted-2 opacity-75">$390.00</span></div>
														</div>
													</div>

												</div>
											</li>
											<li class="col-12">
												<div class="form-check lg">
													<div class="frm-slicing d-flex align-items-center">
														<div class="frm-slicing-first">
															<input class="form-check-input" type="checkbox" id="baggage2">
															<label class="form-check-label" for="baggage2"></label>
														</div>
														<div class="frm-slicing-end d-flex align-items-center justify-content-between full-width ps-1">
															<div class="frms-flex d-flex align-items-center">
																<div class="frm-slicing-img"><img src="assets/img/air-2.png" class="img-fluid" width="25" alt=""></div>
																<div class="frm-slicing-title ps-2"><span class="text-muted-2">Jal Airlines</span></div>
															</div>
															<div class="text-end"><span class="text-md text-muted-2 opacity-75">$310.00</span></div>
														</div>
													</div>

												</div>
											</li>
											<li class="col-12">
												<div class="form-check lg">
													<div class="frm-slicing d-flex align-items-center">
														<div class="frm-slicing-first">
															<input class="form-check-input" type="checkbox" id="baggage3">
															<label class="form-check-label" for="baggage3"></label>
														</div>
														<div class="frm-slicing-end d-flex align-items-center justify-content-between full-width ps-1">
															<div class="frms-flex d-flex align-items-center">
																<div class="frm-slicing-img"><img src="assets/img/air-3.png" class="img-fluid" width="25" alt=""></div>
																<div class="frm-slicing-title ps-2"><span class="text-muted-2">Indigo</span></div>
															</div>
															<div class="text-end"><span class="text-md text-muted-2 opacity-75">$390.00</span></div>
														</div>
													</div>

												</div>
											</li>
											<li class="col-12">
												<div class="form-check lg">
													<div class="frm-slicing d-flex align-items-center">
														<div class="frm-slicing-first">
															<input class="form-check-input" type="checkbox" id="baggage4">
															<label class="form-check-label" for="baggage4"></label>
														</div>
														<div class="frm-slicing-end d-flex align-items-center justify-content-between full-width ps-1">
															<div class="frms-flex d-flex align-items-center">
																<div class="frm-slicing-img"><img src="assets/img/air-4.png" class="img-fluid" width="25" alt=""></div>
																<div class="frm-slicing-title ps-2"><span class="text-muted-2">Air Asia</span></div>
															</div>
															<div class="text-end"><span class="text-md text-muted-2 opacity-75">$410.00</span></div>
														</div>
													</div>

												</div>
											</li>
											<li class="col-12">
												<div class="form-check lg">
													<div class="frm-slicing d-flex align-items-center">
														<div class="frm-slicing-first">
															<input class="form-check-input" type="checkbox" id="baggage5">
															<label class="form-check-label" for="baggage5"></label>
														</div>
														<div class="frm-slicing-end d-flex align-items-center justify-content-between full-width ps-1">
															<div class="frms-flex d-flex align-items-center">
																<div class="frm-slicing-img"><img src="assets/img/air-5.png" class="img-fluid" width="25" alt=""></div>
																<div class="frm-slicing-title ps-2"><span class="text-muted-2">Vistara</span></div>
															</div>
															<div class="text-end"><span class="text-md text-muted-2 opacity-75">$370.00</span></div>
														</div>
													</div>

												</div>
											</li>
										</ul>
									</div>

								</div>

							</div>
						</div>
					</div>

					<!-- All Flight Lists -->
					<div class="col-xl-9 col-lg-8 col-md-12">

						<div class="row align-items-center justify-content-between">
							<div class="col-xl-4 col-lg-4 col-md-4">
								<h5 class="fw-bold fs-6 mb-lg-0 mb-3">Showing 280 Search Results</h5>
							</div>
							<div class="col-xl-8 col-lg-8 col-md-12">
								<div class="d-flex align-items-center justify-content-start justify-content-lg-end flex-wrap">
									<div class="flsx-first me-2">
										<div class="bg-white rounded py-2 px-3">
											<div class="form-check form-switch">
												<input class="form-check-input" type="checkbox" role="switch" id="mapoption">
												<label class="form-check-label ms-1" for="mapoption">Map</label>
											</div>
										</div>
									</div>
									<div class="flsx-first mt-sm-0 mt-2">
										<ul class="nav nav-pills nav-fill p-1 small lights blukker bg-primary rounded-3 shadow-sm" id="filtersblocks" role="tablist">
											<li class="nav-item" role="presentation">
												<button class="nav-link active rounded-3" id="trending" data-bs-toggle="tab" type="button" role="tab" aria-selected="true">Our Trending</button>
											</li>
											<li class="nav-item" role="presentation">
												<button class="nav-link rounded-3" id="mostpopular" data-bs-toggle="tab" type="button" role="tab" aria-selected="false" tabindex="-1">Most Popular</button>
											</li>
											<li class="nav-item" role="presentation">
												<button class="nav-link rounded-3" id="lowprice" data-bs-toggle="tab" type="button" role="tab" aria-selected="false" tabindex="-1">Lowest Price</button>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>

						<div class="row align-items-center g-4 mt-2">

							<!-- Single Flight -->
							<div class="col-xl-12 col-lg12 col-md-12">
								<div class="flights-accordion">
									<div class="flights-list-item bg-white rounded-3 p-3">
										<div class="row gy-4 align-items-center justify-content-between">

											<div class="col">
												<div class="row">
													<div class="col-xl-12 col-lg-12 col-md-12">
														<div class="d-flex align-items-center mb-2">
															<span class="label bg-light-primary text-primary me-2">Departure</span>
															<span class="text-muted text-sm">26 Jun 2023</span>
														</div>
													</div>
													<div class="col-xl-12 col-lg-12 col-md-12">
														<div class="row gx-lg-5 gx-3 gy-4 align-items-center">

															<div class="col-sm-auto">
																<div class="d-flex align-items-center justify-content-start">
																	<div class="d-start fl-pic">
																		<img class="img-fluid" src="assets/img/air-1.png" width="45" alt="image">
																	</div>
																	<div class="d-end fl-title ps-2">
																		<div class="text-dark fw-medium">Qutar Airways</div>
																		<div class="text-sm text-muted">First Class</div>
																	</div>
																</div>
															</div>

															<div class="col">
																<div class="row gx-3 align-items-center">
																	<div class="col-auto">
																		<div class="text-dark fw-bold">07:40</div>
																		<div class="text-muted text-sm fw-medium">DOH</div>
																	</div>

																	<div class="col text-center">
																		<div class="flightLine departure">
																			<div></div>
																			<div></div>
																		</div>
																		<div class="text-muted text-sm fw-medium mt-3">Direct</div>
																	</div>

																	<div class="col-auto">
																		<div class="text-dark fw-bold">12:20</div>
																		<div class="text-muted text-sm fw-medium">DEL</div>
																	</div>
																</div>
															</div>

															<div class="col-md-auto">
																<div class="text-dark fw-medium">4H 40M</div>
																<div class="text-muted text-sm fw-medium">2 Stop</div>
															</div>
														</div>
													</div>
												</div>

												<div class="row mt-4">
													<div class="col-xl-12 col-lg-12 col-md-12">
														<div class="d-flex align-items-center mb-2">
															<span class="label bg-light-success text-success me-2">Return</span>
															<span class="text-muted text-sm">26 Jun 2023</span>
														</div>
													</div>

													<div class="col-xl-12 col-lg-12 col-md-12">
														<div class="row gx-lg-5 gx-3 gy-4 align-items-center">
															<div class="col-sm-auto">
																<div class="d-flex align-items-center justify-content-start">
																	<div class="d-start fl-pic">
																		<img class="img-fluid" src="assets/img/air-2.png" width="45" alt="image">
																	</div>
																	<div class="d-end fl-title ps-2">
																		<div class="text-dark fw-medium">Qutar Airways</div>
																		<div class="text-sm text-muted">Business</div>
																	</div>
																</div>
															</div>

															<div class="col">
																<div class="row gx-3 align-items-center">
																	<div class="col-auto">
																		<div class="text-dark fw-bold">14:10</div>
																		<div class="text-muted text-sm fw-medium">DEL</div>
																	</div>

																	<div class="col text-center">
																		<div class="flightLine return">
																			<div></div>
																			<div></div>
																		</div>
																		<div class="text-muted text-sm fw-medium mt-3">Direct</div>
																	</div>

																	<div class="col-auto">
																		<div class="text-dark fw-bold">19:30</div>
																		<div class="text-muted text-sm fw-medium">DOH</div>
																	</div>
																</div>
															</div>

															<div class="col-md-auto">
																<div class="text-dark fw-medium">5H 30M</div>
																<div class="text-muted text-sm fw-medium">2 Stop</div>
															</div>
														</div>
													</div>
												</div>
											</div>

											<div class="col-md-auto">
												<div class="d-flex items-center h-100">
													<div class="d-lg-block d-none border br-dashed me-4"></div>
													<div>
														<div class="d-flex align-items-center justify-content-md-end mb-3">
															<span class="square--20 rounded text-xs text-muted border me-2" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Free WiFi"><i class="fa-solid fa-wifi"></i></span>
															<span class="square--20 rounded text-xs text-muted border me-2" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Food Available"><i class="fa-solid fa-utensils"></i></span>
															<span class="square--20 rounded text-xs text-muted border me-2" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="One Cup Tea"><i class="fa-solid fa-mug-saucer"></i></span>
															<span class="square--20 rounded text-xs text-muted border" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Pet Allow"><i class="fa-solid fa-dog"></i></span>
														</div>
														<div class="text-start text-md-end">
															<span class="label bg-light-success text-success me-1">15% Off</span>
															<div class="text-dark fs-3 fw-bold lh-base">US$934</div>
															<div class="text-muted text-sm mb-2">Refundable</div>
														</div>

														<div class="flight-button-wrap">
															<button class="btn btn-primary btn-md fw-medium full-width" data-bs-toggle="modal" data-bs-target="#bookflight">
																Select Flight<i class="fa-solid fa-arrow-trend-up ms-2"></i>
															</button>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

							<!-- Single Flight -->
							<div class="col-xl-12 col-lg12 col-md-12">
								<div class="flights-accordion">
									<div class="flights-list-item bg-white rounded-3 p-3">
										<div class="row gy-4 align-items-center justify-content-between">

											<div class="col">
												<div class="row">
													<div class="col-xl-12 col-lg-12 col-md-12">
														<div class="d-flex align-items-center mb-2">
															<span class="label bg-light-primary text-primary me-2">Departure</span>
															<span class="text-muted text-sm">26 Jun 2023</span>
														</div>
													</div>
													<div class="col-xl-12 col-lg-12 col-md-12">
														<div class="row gx-lg-5 gx-3 gy-4 align-items-center">

															<div class="col-sm-auto">
																<div class="d-flex align-items-center justify-content-start">
																	<div class="d-start fl-pic">
																		<img class="img-fluid" src="assets/img/air-2.png" width="45" alt="image">
																	</div>
																	<div class="d-end fl-title ps-2">
																		<div class="text-dark fw-medium">Qutar Airways</div>
																		<div class="text-sm text-muted">First Class</div>
																	</div>
																</div>
															</div>

															<div class="col">
																<div class="row gx-3 align-items-center">
																	<div class="col-auto">
																		<div class="text-dark fw-bold">07:40</div>
																		<div class="text-muted text-sm fw-medium">DOH</div>
																	</div>

																	<div class="col text-center">
																		<div class="flightLine departure">
																			<div></div>
																			<div></div>
																		</div>
																		<div class="text-muted text-sm fw-medium mt-3">Direct</div>
																	</div>

																	<div class="col-auto">
																		<div class="text-dark fw-bold">12:20</div>
																		<div class="text-muted text-sm fw-medium">DEL</div>
																	</div>
																</div>
															</div>

															<div class="col-md-auto">
																<div class="text-dark fw-medium">4H 40M</div>
																<div class="text-muted text-sm fw-medium">2 Stop</div>
															</div>
														</div>
													</div>
												</div>

												<div class="row mt-4">
													<div class="col-xl-12 col-lg-12 col-md-12">
														<div class="d-flex align-items-center mb-2">
															<span class="label bg-light-success text-success me-2">Return</span>
															<span class="text-muted text-sm">26 Jun 2023</span>
														</div>
													</div>

													<div class="col-xl-12 col-lg-12 col-md-12">
														<div class="row gx-lg-5 gx-3 gy-4 align-items-center">
															<div class="col-sm-auto">
																<div class="d-flex align-items-center justify-content-start">
																	<div class="d-start fl-pic">
																		<img class="img-fluid" src="assets/img/air-3.png" width="45" alt="image">
																	</div>
																	<div class="d-end fl-title ps-2">
																		<div class="text-dark fw-medium">Qutar Airways</div>
																		<div class="text-sm text-muted">Business</div>
																	</div>
																</div>
															</div>

															<div class="col">
																<div class="row gx-3 align-items-center">
																	<div class="col-auto">
																		<div class="text-dark fw-bold">14:10</div>
																		<div class="text-muted text-sm fw-medium">DEL</div>
																	</div>

																	<div class="col text-center">
																		<div class="flightLine return">
																			<div></div>
																			<div></div>
																		</div>
																		<div class="text-muted text-sm fw-medium mt-3">Direct</div>
																	</div>

																	<div class="col-auto">
																		<div class="text-dark fw-bold">19:30</div>
																		<div class="text-muted text-sm fw-medium">DOH</div>
																	</div>
																</div>
															</div>

															<div class="col-md-auto">
																<div class="text-dark fw-medium">5H 30M</div>
																<div class="text-muted text-sm fw-medium">2 Stop</div>
															</div>
														</div>
													</div>
												</div>
											</div>

											<div class="col-md-auto">
												<div class="d-flex items-center h-100">
													<div class="d-lg-block d-none border br-dashed me-4"></div>
													<div>
														<div class="d-flex align-items-center justify-content-md-end mb-3">
															<span class="square--20 rounded text-xs text-muted border me-2" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Free WiFi"><i class="fa-solid fa-wifi"></i></span>
															<span class="square--20 rounded text-xs text-muted border me-2" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Food Available"><i class="fa-solid fa-utensils"></i></span>
															<span class="square--20 rounded text-xs text-muted border me-2" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="One Cup Tea"><i class="fa-solid fa-mug-saucer"></i></span>
															<span class="square--20 rounded text-xs text-muted border" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Pet Allow"><i class="fa-solid fa-dog"></i></span>
														</div>
														<div class="text-start text-md-end">
															<span class="label bg-light-success text-success me-1">15% Off</span>
															<div class="text-dark fs-3 fw-bold lh-base">US$934</div>
															<div class="text-muted text-sm mb-2">Refundable</div>
														</div>

														<div class="flight-button-wrap">
															<button class="btn btn-primary btn-md fw-medium full-width" data-bs-toggle="modal" data-bs-target="#bookflight">
																Select Flight<i class="fa-solid fa-arrow-trend-up ms-2"></i>
															</button>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

							<!-- Offer Coupon Box -->
							<div class="col-xl-12 col-lg12 col-md-12">
								<div class="d-md-flex bg-success rounded-2 align-items-center justify-content-between px-3 py-3">
									<div class="d-md-flex align-items-center justify-content-start">
										<div class="flx-icon-first mb-md-0 mb-3">
											<div class="square--60 circle bg-white"><i class="fa-solid fa-gift fs-3 text-success"></i></div>
										</div>
										<div class="flx-caps-first ps-2">
											<h6 class="fs-5 fw-medium text-light mb-0">Start Exploring The World</h6>
											<p class="text-light mb-0">Book FlightsEffortless and Earn $50+ for each booking with Booking.com
											</p>
										</div>
									</div>
									<div class="flx-last text-md-end mt-md-0 mt-4"><button type="button" class="btn btn-whites fw-medium full-width text-dark px-xl-4">Get Started</button></div>
								</div>
							</div>

							<!-- Single Flight -->
							<div class="col-xl-12 col-lg12 col-md-12">
								<div class="flights-accordion">
									<div class="flights-list-item bg-white rounded-3 p-3">
										<div class="row gy-4 align-items-center justify-content-between">

											<div class="col">
												<div class="row">
													<div class="col-xl-12 col-lg-12 col-md-12">
														<div class="d-flex align-items-center mb-2">
															<span class="label bg-light-primary text-primary me-2">Departure</span>
															<span class="text-muted text-sm">26 Jun 2023</span>
														</div>
													</div>
													<div class="col-xl-12 col-lg-12 col-md-12">
														<div class="row gx-lg-5 gx-3 gy-4 align-items-center">

															<div class="col-sm-auto">
																<div class="d-flex align-items-center justify-content-start">
																	<div class="d-start fl-pic">
																		<img class="img-fluid" src="assets/img/air-4.png" width="45" alt="image">
																	</div>
																	<div class="d-end fl-title ps-2">
																		<div class="text-dark fw-medium">Qutar Airways</div>
																		<div class="text-sm text-muted">First Class</div>
																	</div>
																</div>
															</div>

															<div class="col">
																<div class="row gx-3 align-items-center">
																	<div class="col-auto">
																		<div class="text-dark fw-bold">07:40</div>
																		<div class="text-muted text-sm fw-medium">DOH</div>
																	</div>

																	<div class="col text-center">
																		<div class="flightLine departure">
																			<div></div>
																			<div></div>
																		</div>
																		<div class="text-muted text-sm fw-medium mt-3">Direct</div>
																	</div>

																	<div class="col-auto">
																		<div class="text-dark fw-bold">12:20</div>
																		<div class="text-muted text-sm fw-medium">DEL</div>
																	</div>
																</div>
															</div>

															<div class="col-md-auto">
																<div class="text-dark fw-medium">4H 40M</div>
																<div class="text-muted text-sm fw-medium">2 Stop</div>
															</div>
														</div>
													</div>
												</div>

												<div class="row mt-4">
													<div class="col-xl-12 col-lg-12 col-md-12">
														<div class="d-flex align-items-center mb-2">
															<span class="label bg-light-success text-success me-2">Return</span>
															<span class="text-muted text-sm">26 Jun 2023</span>
														</div>
													</div>

													<div class="col-xl-12 col-lg-12 col-md-12">
														<div class="row gx-lg-5 gx-3 gy-4 align-items-center">
															<div class="col-sm-auto">
																<div class="d-flex align-items-center justify-content-start">
																	<div class="d-start fl-pic">
																		<img class="img-fluid" src="assets/img/air-1.png" width="45" alt="image">
																	</div>
																	<div class="d-end fl-title ps-2">
																		<div class="text-dark fw-medium">Qutar Airways</div>
																		<div class="text-sm text-muted">Business</div>
																	</div>
																</div>
															</div>

															<div class="col">
																<div class="row gx-3 align-items-center">
																	<div class="col-auto">
																		<div class="text-dark fw-bold">14:10</div>
																		<div class="text-muted text-sm fw-medium">DEL</div>
																	</div>

																	<div class="col text-center">
																		<div class="flightLine return">
																			<div></div>
																			<div></div>
																		</div>
																		<div class="text-muted text-sm fw-medium mt-3">Direct</div>
																	</div>

																	<div class="col-auto">
																		<div class="text-dark fw-bold">19:30</div>
																		<div class="text-muted text-sm fw-medium">DOH</div>
																	</div>
																</div>
															</div>

															<div class="col-md-auto">
																<div class="text-dark fw-medium">5H 30M</div>
																<div class="text-muted text-sm fw-medium">2 Stop</div>
															</div>
														</div>
													</div>
												</div>
											</div>

											<div class="col-md-auto">
												<div class="d-flex items-center h-100">
													<div class="d-lg-block d-none border br-dashed me-4"></div>
													<div>
														<div class="d-flex align-items-center justify-content-md-end mb-3">
															<span class="square--20 rounded text-xs text-muted border me-2" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Free WiFi"><i class="fa-solid fa-wifi"></i></span>
															<span class="square--20 rounded text-xs text-muted border me-2" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Food Available"><i class="fa-solid fa-utensils"></i></span>
															<span class="square--20 rounded text-xs text-muted border me-2" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="One Cup Tea"><i class="fa-solid fa-mug-saucer"></i></span>
															<span class="square--20 rounded text-xs text-muted border" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Pet Allow"><i class="fa-solid fa-dog"></i></span>
														</div>
														<div class="text-start text-md-end">
															<span class="label bg-light-success text-success me-1">15% Off</span>
															<div class="text-dark fs-3 fw-bold lh-base">US$934</div>
															<div class="text-muted text-sm mb-2">Refundable</div>
														</div>

														<div class="flight-button-wrap">
															<button class="btn btn-primary btn-md fw-medium full-width" data-bs-toggle="modal" data-bs-target="#bookflight">
																Select Flight<i class="fa-solid fa-arrow-trend-up ms-2"></i>
															</button>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

							<!-- Single Flight -->
							<div class="col-xl-12 col-lg12 col-md-12">
								<div class="flights-accordion">
									<div class="flights-list-item bg-white rounded-3 p-3">
										<div class="row gy-4 align-items-center justify-content-between">

											<div class="col">
												<div class="row">
													<div class="col-xl-12 col-lg-12 col-md-12">
														<div class="d-flex align-items-center mb-2">
															<span class="label bg-light-primary text-primary me-2">Departure</span>
															<span class="text-muted text-sm">26 Jun 2023</span>
														</div>
													</div>
													<div class="col-xl-12 col-lg-12 col-md-12">
														<div class="row gx-lg-5 gx-3 gy-4 align-items-center">

															<div class="col-sm-auto">
																<div class="d-flex align-items-center justify-content-start">
																	<div class="d-start fl-pic">
																		<img class="img-fluid" src="assets/img/air-2.png" width="45" alt="image">
																	</div>
																	<div class="d-end fl-title ps-2">
																		<div class="text-dark fw-medium">Qutar Airways</div>
																		<div class="text-sm text-muted">First Class</div>
																	</div>
																</div>
															</div>

															<div class="col">
																<div class="row gx-3 align-items-center">
																	<div class="col-auto">
																		<div class="text-dark fw-bold">07:40</div>
																		<div class="text-muted text-sm fw-medium">DOH</div>
																	</div>

																	<div class="col text-center">
																		<div class="flightLine departure">
																			<div></div>
																			<div></div>
																		</div>
																		<div class="text-muted text-sm fw-medium mt-3">Direct</div>
																	</div>

																	<div class="col-auto">
																		<div class="text-dark fw-bold">12:20</div>
																		<div class="text-muted text-sm fw-medium">DEL</div>
																	</div>
																</div>
															</div>

															<div class="col-md-auto">
																<div class="text-dark fw-medium">4H 40M</div>
																<div class="text-muted text-sm fw-medium">2 Stop</div>
															</div>
														</div>
													</div>
												</div>

												<div class="row mt-4">
													<div class="col-xl-12 col-lg-12 col-md-12">
														<div class="d-flex align-items-center mb-2">
															<span class="label bg-light-success text-success me-2">Return</span>
															<span class="text-muted text-sm">26 Jun 2023</span>
														</div>
													</div>

													<div class="col-xl-12 col-lg-12 col-md-12">
														<div class="row gx-lg-5 gx-3 gy-4 align-items-center">
															<div class="col-sm-auto">
																<div class="d-flex align-items-center justify-content-start">
																	<div class="d-start fl-pic">
																		<img class="img-fluid" src="assets/img/air-4.png" width="45" alt="image">
																	</div>
																	<div class="d-end fl-title ps-2">
																		<div class="text-dark fw-medium">Qutar Airways</div>
																		<div class="text-sm text-muted">Business</div>
																	</div>
																</div>
															</div>

															<div class="col">
																<div class="row gx-3 align-items-center">
																	<div class="col-auto">
																		<div class="text-dark fw-bold">14:10</div>
																		<div class="text-muted text-sm fw-medium">DEL</div>
																	</div>

																	<div class="col text-center">
																		<div class="flightLine return">
																			<div></div>
																			<div></div>
																		</div>
																		<div class="text-muted text-sm fw-medium mt-3">Direct</div>
																	</div>

																	<div class="col-auto">
																		<div class="text-dark fw-bold">19:30</div>
																		<div class="text-muted text-sm fw-medium">DOH</div>
																	</div>
																</div>
															</div>

															<div class="col-md-auto">
																<div class="text-dark fw-medium">5H 30M</div>
																<div class="text-muted text-sm fw-medium">2 Stop</div>
															</div>
														</div>
													</div>
												</div>
											</div>

											<div class="col-md-auto">
												<div class="d-flex items-center h-100">
													<div class="d-lg-block d-none border br-dashed me-4"></div>
													<div>
														<div class="d-flex align-items-center justify-content-md-end mb-3">
															<span class="square--20 rounded text-xs text-muted border me-2" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Free WiFi"><i class="fa-solid fa-wifi"></i></span>
															<span class="square--20 rounded text-xs text-muted border me-2" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Food Available"><i class="fa-solid fa-utensils"></i></span>
															<span class="square--20 rounded text-xs text-muted border me-2" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="One Cup Tea"><i class="fa-solid fa-mug-saucer"></i></span>
															<span class="square--20 rounded text-xs text-muted border" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Pet Allow"><i class="fa-solid fa-dog"></i></span>
														</div>
														<div class="text-start text-md-end">
															<span class="label bg-light-success text-success me-1">15% Off</span>
															<div class="text-dark fs-3 fw-bold lh-base">US$934</div>
															<div class="text-muted text-sm mb-2">Refundable</div>
														</div>

														<div class="flight-button-wrap">
															<button class="btn btn-primary btn-md fw-medium full-width" data-bs-toggle="modal" data-bs-target="#bookflight">
																Select Flight<i class="fa-solid fa-arrow-trend-up ms-2"></i>
															</button>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

							<!-- Single Flight -->
							<div class="col-xl-12 col-lg12 col-md-12">
								<div class="flights-accordion">
									<div class="flights-list-item bg-white rounded-3 p-3">
										<div class="row gy-4 align-items-center justify-content-between">

											<div class="col">
												<div class="row">
													<div class="col-xl-12 col-lg-12 col-md-12">
														<div class="d-flex align-items-center mb-2">
															<span class="label bg-light-primary text-primary me-2">Departure</span>
															<span class="text-muted text-sm">26 Jun 2023</span>
														</div>
													</div>
													<div class="col-xl-12 col-lg-12 col-md-12">
														<div class="row gx-lg-5 gx-3 gy-4 align-items-center">

															<div class="col-sm-auto">
																<div class="d-flex align-items-center justify-content-start">
																	<div class="d-start fl-pic">
																		<img class="img-fluid" src="assets/img/air-3.png" width="45" alt="image">
																	</div>
																	<div class="d-end fl-title ps-2">
																		<div class="text-dark fw-medium">Qutar Airways</div>
																		<div class="text-sm text-muted">First Class</div>
																	</div>
																</div>
															</div>

															<div class="col">
																<div class="row gx-3 align-items-center">
																	<div class="col-auto">
																		<div class="text-dark fw-bold">07:40</div>
																		<div class="text-muted text-sm fw-medium">DOH</div>
																	</div>

																	<div class="col text-center">
																		<div class="flightLine departure">
																			<div></div>
																			<div></div>
																		</div>
																		<div class="text-muted text-sm fw-medium mt-3">Direct</div>
																	</div>

																	<div class="col-auto">
																		<div class="text-dark fw-bold">12:20</div>
																		<div class="text-muted text-sm fw-medium">DEL</div>
																	</div>
																</div>
															</div>

															<div class="col-md-auto">
																<div class="text-dark fw-medium">4H 40M</div>
																<div class="text-muted text-sm fw-medium">2 Stop</div>
															</div>
														</div>
													</div>
												</div>

												<div class="row mt-4">
													<div class="col-xl-12 col-lg-12 col-md-12">
														<div class="d-flex align-items-center mb-2">
															<span class="label bg-light-success text-success me-2">Return</span>
															<span class="text-muted text-sm">26 Jun 2023</span>
														</div>
													</div>

													<div class="col-xl-12 col-lg-12 col-md-12">
														<div class="row gx-lg-5 gx-3 gy-4 align-items-center">
															<div class="col-sm-auto">
																<div class="d-flex align-items-center justify-content-start">
																	<div class="d-start fl-pic">
																		<img class="img-fluid" src="assets/img/air-1.png" width="45" alt="image">
																	</div>
																	<div class="d-end fl-title ps-2">
																		<div class="text-dark fw-medium">Qutar Airways</div>
																		<div class="text-sm text-muted">Business</div>
																	</div>
																</div>
															</div>

															<div class="col">
																<div class="row gx-3 align-items-center">
																	<div class="col-auto">
																		<div class="text-dark fw-bold">14:10</div>
																		<div class="text-muted text-sm fw-medium">DEL</div>
																	</div>

																	<div class="col text-center">
																		<div class="flightLine return">
																			<div></div>
																			<div></div>
																		</div>
																		<div class="text-muted text-sm fw-medium mt-3">Direct</div>
																	</div>

																	<div class="col-auto">
																		<div class="text-dark fw-bold">19:30</div>
																		<div class="text-muted text-sm fw-medium">DOH</div>
																	</div>
																</div>
															</div>

															<div class="col-md-auto">
																<div class="text-dark fw-medium">5H 30M</div>
																<div class="text-muted text-sm fw-medium">2 Stop</div>
															</div>
														</div>
													</div>
												</div>
											</div>

											<div class="col-md-auto">
												<div class="d-flex items-center h-100">
													<div class="d-lg-block d-none border br-dashed me-4"></div>
													<div>
														<div class="d-flex align-items-center justify-content-md-end mb-3">
															<span class="square--20 rounded text-xs text-muted border me-2" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Free WiFi"><i class="fa-solid fa-wifi"></i></span>
															<span class="square--20 rounded text-xs text-muted border me-2" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Food Available"><i class="fa-solid fa-utensils"></i></span>
															<span class="square--20 rounded text-xs text-muted border me-2" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="One Cup Tea"><i class="fa-solid fa-mug-saucer"></i></span>
															<span class="square--20 rounded text-xs text-muted border" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Pet Allow"><i class="fa-solid fa-dog"></i></span>
														</div>
														<div class="text-start text-md-end">
															<span class="label bg-light-success text-success me-1">15% Off</span>
															<div class="text-dark fs-3 fw-bold lh-base">US$934</div>
															<div class="text-muted text-sm mb-2">Refundable</div>
														</div>

														<div class="flight-button-wrap">
															<button class="btn btn-primary btn-md fw-medium full-width" data-bs-toggle="modal" data-bs-target="#bookflight">
																Select Flight<i class="fa-solid fa-arrow-trend-up ms-2"></i>
															</button>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

							<!-- Single Flight -->
							<div class="col-xl-12 col-lg12 col-md-12">
								<div class="flights-accordion">
									<div class="flights-list-item bg-white rounded-3 p-3">
										<div class="row gy-4 align-items-center justify-content-between">

											<div class="col">
												<div class="row">
													<div class="col-xl-12 col-lg-12 col-md-12">
														<div class="d-flex align-items-center mb-2">
															<span class="label bg-light-primary text-primary me-2">Departure</span>
															<span class="text-muted text-sm">26 Jun 2023</span>
														</div>
													</div>
													<div class="col-xl-12 col-lg-12 col-md-12">
														<div class="row gx-lg-5 gx-3 gy-4 align-items-center">

															<div class="col-sm-auto">
																<div class="d-flex align-items-center justify-content-start">
																	<div class="d-start fl-pic">
																		<img class="img-fluid" src="assets/img/air-1.png" width="45" alt="image">
																	</div>
																	<div class="d-end fl-title ps-2">
																		<div class="text-dark fw-medium">Qutar Airways</div>
																		<div class="text-sm text-muted">First Class</div>
																	</div>
																</div>
															</div>

															<div class="col">
																<div class="row gx-3 align-items-center">
																	<div class="col-auto">
																		<div class="text-dark fw-bold">07:40</div>
																		<div class="text-muted text-sm fw-medium">DOH</div>
																	</div>

																	<div class="col text-center">
																		<div class="flightLine departure">
																			<div></div>
																			<div></div>
																		</div>
																		<div class="text-muted text-sm fw-medium mt-3">Direct</div>
																	</div>

																	<div class="col-auto">
																		<div class="text-dark fw-bold">12:20</div>
																		<div class="text-muted text-sm fw-medium">DEL</div>
																	</div>
																</div>
															</div>

															<div class="col-md-auto">
																<div class="text-dark fw-medium">4H 40M</div>
																<div class="text-muted text-sm fw-medium">2 Stop</div>
															</div>
														</div>
													</div>
												</div>

												<div class="row mt-4">
													<div class="col-xl-12 col-lg-12 col-md-12">
														<div class="d-flex align-items-center mb-2">
															<span class="label bg-light-success text-success me-2">Return</span>
															<span class="text-muted text-sm">26 Jun 2023</span>
														</div>
													</div>

													<div class="col-xl-12 col-lg-12 col-md-12">
														<div class="row gx-lg-5 gx-3 gy-4 align-items-center">
															<div class="col-sm-auto">
																<div class="d-flex align-items-center justify-content-start">
																	<div class="d-start fl-pic">
																		<img class="img-fluid" src="assets/img/air-3.png" width="45" alt="image">
																	</div>
																	<div class="d-end fl-title ps-2">
																		<div class="text-dark fw-medium">Qutar Airways</div>
																		<div class="text-sm text-muted">Business</div>
																	</div>
																</div>
															</div>

															<div class="col">
																<div class="row gx-3 align-items-center">
																	<div class="col-auto">
																		<div class="text-dark fw-bold">14:10</div>
																		<div class="text-muted text-sm fw-medium">DEL</div>
																	</div>

																	<div class="col text-center">
																		<div class="flightLine return">
																			<div></div>
																			<div></div>
																		</div>
																		<div class="text-muted text-sm fw-medium mt-3">Direct</div>
																	</div>

																	<div class="col-auto">
																		<div class="text-dark fw-bold">19:30</div>
																		<div class="text-muted text-sm fw-medium">DOH</div>
																	</div>
																</div>
															</div>

															<div class="col-md-auto">
																<div class="text-dark fw-medium">5H 30M</div>
																<div class="text-muted text-sm fw-medium">2 Stop</div>
															</div>
														</div>
													</div>
												</div>
											</div>

											<div class="col-md-auto">
												<div class="d-flex items-center h-100">
													<div class="d-lg-block d-none border br-dashed me-4"></div>
													<div>
														<div class="d-flex align-items-center justify-content-md-end mb-3">
															<span class="square--20 rounded text-xs text-muted border me-2" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Free WiFi"><i class="fa-solid fa-wifi"></i></span>
															<span class="square--20 rounded text-xs text-muted border me-2" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Food Available"><i class="fa-solid fa-utensils"></i></span>
															<span class="square--20 rounded text-xs text-muted border me-2" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="One Cup Tea"><i class="fa-solid fa-mug-saucer"></i></span>
															<span class="square--20 rounded text-xs text-muted border" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Pet Allow"><i class="fa-solid fa-dog"></i></span>
														</div>
														<div class="text-start text-md-end">
															<span class="label bg-light-success text-success me-1">15% Off</span>
															<div class="text-dark fs-3 fw-bold lh-base">US$934</div>
															<div class="text-muted text-sm mb-2">Refundable</div>
														</div>

														<div class="flight-button-wrap">
															<button class="btn btn-primary btn-md fw-medium full-width" data-bs-toggle="modal" data-bs-target="#bookflight">
																Select Flight<i class="fa-solid fa-arrow-trend-up ms-2"></i>
															</button>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

							<!-- Single Flight -->
							<div class="col-xl-12 col-lg12 col-md-12">
								<div class="flights-accordion">
									<div class="flights-list-item bg-white rounded-3 p-3">
										<div class="row gy-4 align-items-center justify-content-between">

											<div class="col">
												<div class="row">
													<div class="col-xl-12 col-lg-12 col-md-12">
														<div class="d-flex align-items-center mb-2">
															<span class="label bg-light-primary text-primary me-2">Departure</span>
															<span class="text-muted text-sm">26 Jun 2023</span>
														</div>
													</div>
													<div class="col-xl-12 col-lg-12 col-md-12">
														<div class="row gx-lg-5 gx-3 gy-4 align-items-center">

															<div class="col-sm-auto">
																<div class="d-flex align-items-center justify-content-start">
																	<div class="d-start fl-pic">
																		<img class="img-fluid" src="assets/img/air-4.png" width="45" alt="image">
																	</div>
																	<div class="d-end fl-title ps-2">
																		<div class="text-dark fw-medium">Qutar Airways</div>
																		<div class="text-sm text-muted">First Class</div>
																	</div>
																</div>
															</div>

															<div class="col">
																<div class="row gx-3 align-items-center">
																	<div class="col-auto">
																		<div class="text-dark fw-bold">07:40</div>
																		<div class="text-muted text-sm fw-medium">DOH</div>
																	</div>

																	<div class="col text-center">
																		<div class="flightLine departure">
																			<div></div>
																			<div></div>
																		</div>
																		<div class="text-muted text-sm fw-medium mt-3">Direct</div>
																	</div>

																	<div class="col-auto">
																		<div class="text-dark fw-bold">12:20</div>
																		<div class="text-muted text-sm fw-medium">DEL</div>
																	</div>
																</div>
															</div>

															<div class="col-md-auto">
																<div class="text-dark fw-medium">4H 40M</div>
																<div class="text-muted text-sm fw-medium">2 Stop</div>
															</div>
														</div>
													</div>
												</div>

												<div class="row mt-4">
													<div class="col-xl-12 col-lg-12 col-md-12">
														<div class="d-flex align-items-center mb-2">
															<span class="label bg-light-success text-success me-2">Return</span>
															<span class="text-muted text-sm">26 Jun 2023</span>
														</div>
													</div>

													<div class="col-xl-12 col-lg-12 col-md-12">
														<div class="row gx-lg-5 gx-3 gy-4 align-items-center">
															<div class="col-sm-auto">
																<div class="d-flex align-items-center justify-content-start">
																	<div class="d-start fl-pic">
																		<img class="img-fluid" src="assets/img/air-2.png" width="45" alt="image">
																	</div>
																	<div class="d-end fl-title ps-2">
																		<div class="text-dark fw-medium">Qutar Airways</div>
																		<div class="text-sm text-muted">Business</div>
																	</div>
																</div>
															</div>

															<div class="col">
																<div class="row gx-3 align-items-center">
																	<div class="col-auto">
																		<div class="text-dark fw-bold">14:10</div>
																		<div class="text-muted text-sm fw-medium">DEL</div>
																	</div>

																	<div class="col text-center">
																		<div class="flightLine return">
																			<div></div>
																			<div></div>
																		</div>
																		<div class="text-muted text-sm fw-medium mt-3">Direct</div>
																	</div>

																	<div class="col-auto">
																		<div class="text-dark fw-bold">19:30</div>
																		<div class="text-muted text-sm fw-medium">DOH</div>
																	</div>
																</div>
															</div>

															<div class="col-md-auto">
																<div class="text-dark fw-medium">5H 30M</div>
																<div class="text-muted text-sm fw-medium">2 Stop</div>
															</div>
														</div>
													</div>
												</div>
											</div>

											<div class="col-md-auto">
												<div class="d-flex items-center h-100">
													<div class="d-lg-block d-none border br-dashed me-4"></div>
													<div>
														<div class="d-flex align-items-center justify-content-md-end mb-3">
															<span class="square--20 rounded text-xs text-muted border me-2" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Free WiFi"><i class="fa-solid fa-wifi"></i></span>
															<span class="square--20 rounded text-xs text-muted border me-2" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Food Available"><i class="fa-solid fa-utensils"></i></span>
															<span class="square--20 rounded text-xs text-muted border me-2" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="One Cup Tea"><i class="fa-solid fa-mug-saucer"></i></span>
															<span class="square--20 rounded text-xs text-muted border" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Pet Allow"><i class="fa-solid fa-dog"></i></span>
														</div>
														<div class="text-start text-md-end">
															<span class="label bg-light-success text-success me-1">15% Off</span>
															<div class="text-dark fs-3 fw-bold lh-base">US$934</div>
															<div class="text-muted text-sm mb-2">Refundable</div>
														</div>

														<div class="flight-button-wrap">
															<button class="btn btn-primary btn-md fw-medium full-width" data-bs-toggle="modal" data-bs-target="#bookflight">
																Select Flight<i class="fa-solid fa-arrow-trend-up ms-2"></i>
															</button>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="col-xl-12 col-lg-12 col-12">
								<div class="pags card py-2 px-5">
									<nav aria-label="Page navigation example">
										<ul class="pagination m-0 p-0">
											<li class="page-item">
												<a class="page-link" href="#" aria-label="Previous">
													<span aria-hidden="true"><i class="fa-solid fa-arrow-left-long"></i></span>
												</a>
											</li>
											<li class="page-item active"><a class="page-link" href="#">1</a></li>
											<li class="page-item"><a class="page-link" href="#">2</a></li>
											<li class="page-item"><a class="page-link" href="#">3</a></li>
											<li class="page-item">
												<a class="page-link" href="#" aria-label="Next">
													<span aria-hidden="true"><i class="fa-solid fa-arrow-right-long"></i></span>
												</a>
											</li>
										</ul>
									</nav>
								</div>
							</div>

						</div>
					</div>

				</div>
            `;
        });

                // Appending the card to the container
                $('#flightResponse').html(flightHtml);



                
            },
            error: function(xhr, status, error) {
                // Hide loader and display error message
                $('#loader').hide();
                $('#response').html('Error: ' + error);
            }
        });
    });
});


</script>

</html>