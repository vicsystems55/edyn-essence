        <header class="header clearfix rs-nav">
            <div class="top-bar">
                <div class="container">
                    <div class="top-inner">
                        <div class="topbar-left">
                            <ul>
                                <li><a href="tel:+002868591"><i class="la la-phone"></i>Call Us (+00) 286 8591</a></li>
                                <li><a href="#"><i class="la la-clock"></i>Mon to Fri - 9:00am - 6:00pm</a></li>
                                <li><a href="mailto:support@edynessence.com"><i
                                            class="las la-envelope-open"></i>support@edynessence.com</a></li>
                            </ul>
                        </div>
                        <div class="topbar-right">
                            <ul>
                                <li><a href="{{ route('about') }}">About</a></li>
                                <li><a href="{{ route('shop') }}">Shop</a></li>
                                <li><a href="{{ route('contact-us') }}">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="sticky-header navbar-expand-lg">
                <div class="menu-bar clearfix">
                    <div class="container clearfix">

                        <!-- Logo -->
                        <div class="menu-logo">
                            <a href="{{ route('home') }}"><img src="{{ asset('assets/images/logo.png') }}"
                                    alt="Edyn Essence"></a>
                        </div>

                        <!-- Mobile Toggle -->
                        <button class="navbar-toggler collapsed menuicon" type="button" data-bs-toggle="collapse"
                            data-bs-target="#menuDropdown">
                            <span></span><span></span><span></span>
                        </button>

                        <!-- Navigation -->
                        <div class="menu-links navbar-collapse collapse justify-content-end" id="menuDropdown">
                            <ul class="nav navbar-nav">
                                <li class="{{ request()->routeIs('home') ? 'active' : '' }}">
                                    <a href="{{ route('home') }}">Home</a>
                                </li>
                                <li class="{{ request()->routeIs('about') ? 'active' : '' }}">
                                    <a href="{{ route('about') }}">About Us</a>
                                </li>
                                <li class="{{ request()->routeIs('shop') ? 'active' : '' }}">
                                    <a href="{{ route('shop') }}">Shop</a>
                                </li>
                                <li class="{{ request()->routeIs('contact-us') ? 'active' : '' }}">
                                    <a href="{{ route('contact-us') }}">Contact Us</a>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </header>
