@extends('frontend.master')
@section('content')
    <div class="page-banner bg-1">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">

                </div>
            </div>
        </div>
    </div>


    <div class="pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="contact-info">
                        <i class="bx bxs-phone"></i>
                        <h4>Contact Number</h4>
                        <p> <a href="tel:+0123654987">+0123 654 987</a></p>
                        <p><a href="tel:+0123456789">+0123 456 789</a></p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="contact-info">
                        <i class="bx bxs-location-plus"></i>
                        <h4>Our Location</h4>
                        <p>6th floor, anthina</p>
                        <p>Barbosa Sidney</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
                    <div class="contact-info">
                        <i class="bx bxs-envelope"></i>
                        <h4>Contact Number</h4>
                        <p><a
                                href="https://templates.hibootstrap.com/cdn-cgi/l/email-protection#d5bdb0b9b9ba95b3b0a7a7acfbb6bab8"><span
                                    class="__cf_email__"
                                    data-cfemail="e68e838a8a89a6808394949fc885898b">[email&#160;protected]</span></a>
                        </p>
                        <p><a
                                href="https://templates.hibootstrap.com/cdn-cgi/l/email-protection#81e8efe7eec1e7e4f3f3f8afe2eeec"><span
                                    class="__cf_email__"
                                    data-cfemail="620b0c040d22040710101b4c010d0f">[email&#160;protected]</span></a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="contact-form-area pb-100">
        <div class="container">
            <div class="section-title">
                <span>Contact Us</span>
                <h2>Get in Touch</h2>
            </div>
            <div class="contact-form">
                <form  method="POST" action="{{ route('contact.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">

                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" id="name" required
                                    data-error="Please enter your name" placeholder="Your name">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" id="email" required
                                    data-error="Please enter your email" placeholder="Your email address">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" name="subject" id="subject" class="form-control" required
                                    data-error="Please enter your subject" placeholder="Your Subject">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" name="phone" class="form-control" id="phone" required
                                    data-error="Please enter your phone number" placeholder="Your phone number">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <textarea name="message" id="message" class="form-control" cols="30" rows="6" required
                                    data-error="Please enter your message" placeholder="Write your message..."></textarea>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 text-center">
                            <button type="submit" class="default-btn-one">Send Message</button>
                            <div id="msgSubmit" class="h3 text-center hidden"></div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
