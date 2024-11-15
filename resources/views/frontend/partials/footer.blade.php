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
                            <a href="{{ 'https://wa.me/' . optional($setting)->whatsapp }}" target="_blank"
                                aria-label="WhatsApp">
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
                            <p data-bs-toggle="modal" data-bs-target="#exampleModal" style="cursor: pointer;">
                                {{ optional($setting)->address_line_one }}
                            </p>
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
        <p class="mb-0">Copyright @2024. All Rights Reserved <a href="javascript:;" target="_blank"><span
                    class="text-white">AZ Shipping</span></a>
        </p>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">AZ Shipping Services</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">

                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3690.675750540797!2d91.8035542!3d22.3280995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30acd9b3d4fcc923%3A0xb638f08bdb4b4469!2sA.Z.Shipping%20Services!5e0!3m2!1sen!2sbd!4v1730271303687!5m2!1sen!2sbd"
                    width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>

            </div>

        </div>
    </div>
</div>
