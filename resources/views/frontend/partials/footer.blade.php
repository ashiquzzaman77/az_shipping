<footer class="footer-area pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="footer-widget">

                    <div class="logo">

                        <img src="{{ !empty(optional($setting)->site_logo) && file_exists(public_path('storage/' . optional($setting)->site_logo)) ? asset('storage/' . optional($setting)->site_logo) : asset('frontend/images/no-logo(217-55).jpg') }}" class="main-logo" style="width: 90px" alt="logo">

                        <img src="assets/img/logo-2.png" class="white-logo" alt="logo">

                    </div>

                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut.</p>
                    
                    <ul class="footer-socials">
                        <li>
                            <a href="#" target="_blank">
                                <i class="bx bxl-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank">
                                <i class="bx bxl-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank">
                                <i class="bx bxl-linkedin"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank">
                                <i class="bx bxl-instagram"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="footer-widget pl-80">
                    <h3>Important Links</h3>
                    <ul class="footer-text">
                        <li>
                            <a href="javascript:;">DG Shipping</a>
                        </li>
                        <li>
                            <a href="javascript:;">Govt. Shipping Office</a>
                        </li>
                        <li>
                            <a href="javascript:;">Bangladesh Marine Academy</a>
                        </li>
                        <li>
                            <a href="javascript:;">National Maritime Institute</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="footer-widget pl-50">
                    <h3>Quick Navigation</h3>
                    <ul class="footer-text">
                        <li>
                            <a href="javascript:;">About Us</a>
                        </li>
                        <li>
                            <a href="javascript:;">Why Choose Us</a>
                        </li>
                        <li>
                            <a href="javascript:;">Job At Sea</a>
                        </li>
                        <li>
                            <a href="javascript:;">Services</a>
                        </li>
                        <li>
                            <a href="javascript:;">Legal Docs</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="footer-widget">
                    <h3>Contact Info</h3>
                    <ul class="info-list">
                        <li>
                            <i class="bx bxs-location-plus"></i>
                            <p>{{ optional($setting)->address_line_one }}</p>
                        </li>
                        <li>
                            <i class="bx bxs-envelope"></i>
                            <p>{{ optional($setting)->primary_email }}</p>
                        </li>
                        <li>
                            <i class="bx bxs-envelope"></i>
                            <p>{{ optional($setting)->support_email }}</p>
                        </li>
                        <li>
                            <i class="bx bxs-phone"></i>
                            <p>{{ optional($setting)->primary_phone }}</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

<div class="footer-bottom" id="contact">
    <div class="container">
        <p>Copyright @2024. All Rights Reserved <a href="javascript:;" target="_blank">AZ Shipping</a>
        </p>
    </div>
</div>
