<header class="transparent-header s-transparent-header">
    <div class="third-header-top d-none d-lg-block">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-3 col-lg-4">
                    <div class="third-logo">
                        <a href="{{ route('home.page') }}"><img src="{{ asset('logo/white_logo.png') }}" alt="Logo"></a>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-8">
                    <div class="third-header-contact">
                        <div class="third-header-form">
                            
                        </div>
                        <div class="third-hrader-contact-list">
                            <ul>
                                <li>
                                    <div class="thc-icon">
                                        <i class="fas fa-headphones"></i>
                                    </div>
                                    <div class="thc-content">
                                        <p><span>Email</span></p>
                                        <p>{{ config('global.settings.email') }}</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="thc-icon">
                                        <i class="fas fa-map-marker"></i>
                                    </div>
                                    <div class="thc-content">
                                        <p>{{ config('global.settings.address_1') }}</p>
                                        <p>{{ config('global.settings.address_2') }}</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="header-sticky" class="main-header third-main-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-6">
                    <div class="logo">
                        <a href="{{ route('home.page') }}"><img src="{{ asset('logo/logo.png') }}" class="mobile-logo logo-none" alt="Logo"></a>
                    </div>
                </div>
                <div class="col-lg-9 col-md-6 d-none d-md-block">
                    <div class="menu-area">
                        <div class="main-menu">
                            <nav id="mobile-menu">
                                <ul>
                                    <li @php echo ( $page_name == 'Home' || $page_parent == 'Home') ? 'class="active"' : ''; @endphp> <a href="{{ route('home.page') }}">Home</a></li>
                                    <li @php echo ( $page_name == 'About Us' || $page_parent == 'About Us') ? 'class="active"' : ''; @endphp><a href="{{ route('about.page') }}">Company</a></li>
                                    <li @php echo ( $page_name == 'Track a Shipment' || $page_parent == 'Track a Shipment') ? 'class="active"' : ''; @endphp><a href="{{ route('track.shipment.page') }}">Tracking</a></li>
                                    <li @php echo ( $page_name == 'Service' || $page_parent == 'Service') ? 'class="active"' : ''; @endphp><a href="{{ route('service.page') }}">Service</a></li>
                                    
                                    <li @php echo ( $page_name == 'Contact Us' || $page_parent == 'Contact Us') ? 'class="active"' : ''; @endphp><a href="{{ route('contact.page') }}">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="header-search t-header-search">
                            <a href="#" data-toggle="modal" data-target="#search-modal"><i class="flaticon-magnifying-glass"></i></a>
                        </div>
                        <div class="header-btn s-header-btn">
                            <a href="{{ route('login') }}" class="btn"><img src="{{ asset('front') }}/img/icon/calculator-symbols02.png" alt="icon">Login</a>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="mobile-menu"></div>
                </div>
            </div>
            <!-- Modal Search -->
            <div class="modal fade" id="search-modal" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <form>
                            <input type="text" placeholder="Search here...">
                            <button><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content fare-rate-modal">
                        <ul class="nav nav-tabs setup-panel">
                            <li class="nav-item single-steps">
                                <a class="nav-link btn-amber" href="#step-1">Select Your Destination</a>
                            </li>
                            <li class="nav-item single-steps">
                                <a class="nav-link btn-blue-grey" href="#step-2">ITEMS TO BE SHIPPED</a>
                            </li>
                            <li class="nav-item single-steps">
                                <a class="nav-link btn-blue-grey" href="#step-3">tracking information</a>
                            </li>
                        </ul>
                        <form action="#" method="post">
                            <div class="single-setup" id="step-1">
                                <div class="fare-rate-tab-content">
                                    <div class="modal-shipping-info">
                                        <ul>
                                            <li>
                                                <div class="shipping-step-count">
                                                    <h5>A</h5>
                                                </div>
                                                <div class="shipping-address-form">
                                                    <div class="shipping-country-box form-group">
                                                        <label for="from-country">from country</label>
                                                        <input type="text" required="required" id="from-country"
                                                            placeholder="Select Your Destination">
                                                    </div>
                                                    <div class="shipping-address-box form-group">
                                                        <label for="from-country-location">add your location</label>
                                                        <input type="text" required="required" id="from-country-location"
                                                            placeholder="Select Your Destination">
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="shipping-step-count">
                                                    <h5>B</h5>
                                                </div>
                                                <div class="shipping-address-form">
                                                    <div class="shipping-country-box form-group">
                                                        <label for="to-country">TO country</label>
                                                        <input type="text" required="required" id="to-country"
                                                            placeholder="Select Your Destination">
                                                    </div>
                                                    <div class="shipping-address-box form-group">
                                                        <label for="to-country-location">add your location</label>
                                                        <input type="text" required="required" id="to-country-location"
                                                            placeholder="Select Your Destination">
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="modal-shipping-more-list">
                                        <ul>
                                            <li><a href="#"><i class="flaticon-credit-card"></i> Don't have an account? No problem
                                                    Pay by credit card or cash.</a></li>
                                            <li><a href="#"><i class="flaticon-sings"></i> Get a quick quote and start shipping</a>
                                            </li>
                                            <li><a href="#"><i class="flaticon-track"></i> Consult your packaging and delivery
                                                    options</a></li>
                                        </ul>
                                    </div>
                                    <button class="btn f-right nextBtn-2 btn-success" type="button">one more step</button>
                                </div>
                            </div>
                            <div class="single-setup" id="step-2">
                                <div class="fare-rate-tab-content">
                                    <div class="modal-shipping-details">
                                        <div class="modal-shipping-title">
                                            <h2>items <span>details</span></h2>
                                            <h2 class="f-right">total cost : <span>$ 19.00</span></h2>
                                        </div>
                                        <div class="shipping-details-info">
                                            <div class="single-shipping-details-box">
                                                <label for="packaging-size">packaging size</label>
                                                <select class="custom-select" id="packaging-size">
                                                    <option selected="">Standart Size ( 42” x 36” )</option>
                                                    <option>Standart Size ( 82” x 86” )</option>
                                                    <option>Standart Size ( 102” x 165” )</option>
                                                    <option>Standart Size ( 110” x 205” )</option>
                                                    <option>Standart Size ( 120” x 250” )</option>
                                                </select>
                                            </div>
                                            <div class="single-shipping-details-box shipping-qty">
                                                <label for="QTY-number">QTY</label>
                                                <input type="number" value="1" id="QTY-number" required="required">
                                            </div>
                                            <div class="single-shipping-details-box shipping-weight">
                                                <label for="packaging-weight">TOTAL WEIGHT</label>
                                                <select class="custom-select" id="packaging-weight">
                                                    <option selected="">KG</option>
                                                    <option>20KG</option>
                                                    <option>30KG</option>
                                                    <option>50KG</option>
                                                    <option>80KG</option>
                                                    <option>100KG</option>
                                                </select>
                                            </div>
                                            <div class="single-shipping-details-box shipping-transport">
                                                <label for="cargo-transport">cargo transport</label>
                                                <select class="custom-select" id="cargo-transport">
                                                    <option selected="">IN</option>
                                                    <option>1500in</option>
                                                    <option>2000in</option>
                                                    <option>2500in</option>
                                                    <option>3000in</option>
                                                    <option>3500in</option>
                                                    <option>4000in</option>
                                                </select>
                                            </div>
                                            <div class="single-shipping-details-box shipping-product">
                                                <label for="product-category">product category</label>
                                                <select class="custom-select" id="product-category">
                                                    <option selected="">Glass Product</option>
                                                    <option>Glass Product</option>
                                                    <option>Glass Product</option>
                                                    <option>Glass Product</option>
                                                    <option>Glass Product</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" required="required" class="custom-control-input"
                                                id="customControlInline">
                                            <label class="custom-control-label" for="customControlInline">International express deliveries; global freight forwarding by air, sea, road and rail; warehousing solutions from packaging, to repairs, to storage; mail deliveries worldwide!</label>
                                        </div>
                                    </div>
                                    <button class="btn f-left prevBtn-2 btn-success" type="button">Previous</button>
                                    <button class="btn f-right nextBtn-2 btn-success" type="button"><span>$19.00</span>
                                        Booking</button>
                                </div>
                            </div>
                            <div class="single-setup" id="step-3">
                                <div class="fare-rate-tab-content">
                                    <div class="modal-shipping-details">
                                        <div class="modal-shipping-title">
                                            <h2>tracking <span>information</span></h2>
                                        </div>
                                        <div class="f-left pr-20">
                                            <div class="shipping-details-info shipping-tracking-info">
                                                <div class="modal-tracking-info">
                                                    <label for="invoice-id">invoice Id</label>
                                                    <input type="text" id="invoice-id" placeholder="Enter Your Id">
                                                </div>
                                                <div class="modal-tracking-info">
                                                    <label>Search invoice</label>
                                                    <button class="btn nextBtn-2 btn-success">find your product</button>
                                                </div>
                                            </div>
                                            <div class="tracking-quots-board">
                                                <label>your happiness quotes</label>
                                                <div class="tracking-quots-board-info">
                                                    <img src="{{ asset('front') }}/img/bg/board_bg.jpg" alt="img">
                                                    <h5>On Board Your Products</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tracking-modal-map">
                                            <div id="contact-map"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>