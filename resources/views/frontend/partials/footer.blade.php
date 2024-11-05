<footer class="footer-area pt-100 pb-70">
    <div class="container">
        <div class="row">

            <div class="col-lg-3 col-sm-6">
                <div class="footer-widget">

                    <div class="logo">

                        <img src="{{ !empty(optional($setting)->site_logo) && file_exists(public_path('storage/' . optional($setting)->site_logo)) ? asset('storage/' . optional($setting)->site_logo) : asset('frontend/images/no-logo(217-55).jpg') }}"
                            class="main-logo" style="width: 170px;height: 49px;" alt="logo">

                        {{-- <img src="assets/img/logo-2.png" class="white-logo" alt="logo"> --}}

                    </div>

                    <span style="font-size: 14px; text-align: justify;">Thank you for visiting our website. Our vision
                        is in developing this website is to set a platform from which we can continuously keep our
                        customers & curious visitors abreast with relevant information on A.Z. SHIPPING SERVICES & its
                        activities.</span>

                    <ul class="footer-socials">

                        <li>
                            <a href="{{ optional($setting)->social_facebook }}" target="_blank" aria-label="Facebook">
                                <i class="bx bxl-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="{{ optional($setting)->social_linkedin }}" target="_blank" aria-label="LinkedIn">
                                <i class="bx bxl-linkedin"></i>
                            </a>
                        </li>
                        <li>
                            <a href="{{ 'https://wa.me/' . optional($setting)->whatsapp }}" target="_blank" aria-label="WhatsApp">
                                <i class="bx bxl-whatsapp"></i>
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
                            <a href="https://dos.gov.bd/" target="blank">DG Shipping</a>
                        </li>
                        <li>
                            <a href="https://gso.gov.bd/" target="blank">Govt. Shipping Office</a>
                        </li>
                        <li>
                            <a href="https://macademy.gov.bd/" target="blank">Bangladesh Marine Academy</a>
                        </li>
                        <li>
                            <a href="https://nmi.gov.bd/" target="blank">National Maritime Institute</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="footer-widget pl-50">

                    <h3>Quick Navigation</h3>

                    <ul class="footer-text">
                        <li>
                            <a href="{{ route('about') }}">About Us</a>
                        </li>

                        <li>
                            <a href="{{ route('contact') }}">Contact</a>
                        </li>
                        <li>
                            <a href="{{ route('why.choose.us') }}">Why Choose Us</a>
                        </li>
                        <li>
                            <a href="{{ route('all.job') }}">Job At Sea</a>
                        </li>
                        <li>
                            <a href="{{ route('legal.papers') }}">Legal Docs</a>
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

<div class="footer-bottom text-center" id="contact">
    <div class="container">
        <p>Copyright @2024. All Rights Reserved <a href="javascript:;" target="_blank"><span class="text-white">AZ Shipping</span></a>
        </p>
        <p>Development By <a href="https://www.ashikuzzaman.net/">Ashiquzzaman</a></p>
    </div>
</div>
