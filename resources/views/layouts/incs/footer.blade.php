<!-- begin::Footer -->
<footer class="footer-style1 footer-dark">
    <div class="footer-top">
        <div class="container">
            <div class="row">

                <!-- Newsletter / Brand Message -->
                <div class="col-12 col-lg-5 git-right">
                    <a href="{{ route('contact-us') }}" class="getintouch">Get In <br>T<span>o</span>uch</a>
                    <div class="widget widget_info">
                        <h5 class="footer-title mb-1">Glow Naturally with Us ✨</h5>
                        <p class="mb-4">Join the Edyn Essence community for exclusive self-care tips, wellness rituals & product launches.</p>
                        <form class="subscribe-form1 m-b20" action="#" method="post">
                            <div class="ajax-message"></div>
                            <div class="position-relative">
                                <input name="email" class="form-control" placeholder="Enter email address" type="email" required>
                                <button name="submit" value="Submit" type="submit" class="btn-link">
                                    <i class="icon-move-right"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Links Section -->
                <div class="col-12 col-lg-3 col-sm-6 offset-lg-1">
                    <div class="widget footer_widget">
                        <h5 class="footer-title">Shop</h5>
                        <ul>
                            <li><a href="{{ route('shop') }}"><span>All Products</span></a></li>
                            <li><a href="{{ route('shop') }}#best-sellers"><span>Best Sellers</span></a></li>
                            <li><a href="{{ route('shop') }}#new-arrivals"><span>New Arrivals</span></a></li>
                            <li><a href="{{ route('contact-us') }}"><span>Wholesale / Partnership</span></a></li>
                        </ul>
                    </div>

                    <div class="widget footer_widget">
                        <h5 class="footer-title">About Edyn</h5>
                        <ul>
                            <li><a href="{{ route('about') }}"><span>Our Story</span></a></li>
                            <li><a href="{{ route('home') }}#ingredients"><span>Our Ingredients</span></a></li>
                            <li><a href="{{ route('contact-us') }}"><span>Contact Us</span></a></li>
                        </ul>
                    </div>
                </div>

                <!-- Contact Section -->
                <div class="col-12 col-lg-3 col-sm-6">
                    <div class="widget footer_widget contact-info">
                        <h5 class="footer-title">Customer Support</h5>
                        <ul>
                            <li><i class="icon-mail"></i>
                                <a href="mailto:support@edynessence.com" class="text-decoration-underline link-offset-1">
                                    support@edynessence.com
                                </a>
                            </li>
                            <li><i class="icon-phone"></i>
                                <a href="tel:+001123456790">+001 123 456 790</a>
                            </li>
                            <li><i class="icon-map-pin"></i> Lagos, Nigeria</li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Footer Bottom -->
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 text-center text-md-start">
                    <p class="m-b0">© {{ date('Y') }} Edyn Essence. All Rights Reserved.</p>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 text-center text-md-end">
                    <ul class="link-inline">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('about') }}">About</a></li>
                        <li><a href="{{ route('contact-us') }}">Contact</a></li>
                        <li><a href="{{ route('shop') }}">Shop</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- end::Footer -->
