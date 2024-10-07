@extends('frontend.master')
@section('content')
    <section>
        <img class="img-fluid" src="{{ asset('storage/common_banner/' . optional($common_banner)->contact_banner) }}"
            alt="" />
    </section>

    <section class="" style="background-color: #eee;">
        <div class="container">
            <div class="row py-5">
                <div class="col-lg-4">
                    <div class="text-center">
                        <i class="fa-solid fa-location-dot contact-location-icons" style="color:var(--primary-color)"></i>
                    </div>
                    <div class="text-center pt-4">
                        <h5 class="">OUR LOCATION</h5>
                        <p class=" pt-2">
                            {{ $setting->address_line_one }}
                        </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="text-center">
                        <i class="fa-solid fa-phone contact-location-icons " style="color:var(--primary-color)"></i>
                    </div>
                    <div class="text-center pt-4">
                        <h5 class="">CONTACT US</h5>
                        <p class=" pt-2">
                            Phone:(+88) {{ $setting->primary_phone }} <br />
                            Tel:(+88) {{ $setting->secondary_phone }}
                        </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="text-center">
                        <i class="fa-solid fa-paper-plane contact-location-icons " style="color:var(--primary-color)"></i>
                    </div>
                    <div class="text-center pt-4">
                        <h5 class="">WRITE SOME WORDS</h5>
                        <p class=" pt-2">
                            {{ optional($setting)->primary_email ?? 'inquiry@ngenitltd.com' }} <br />
                            {{ optional($setting)->support_email ?? 'training@ngenitltd.com' }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row py-5">
                <div class="col-lg-8 offset-lg-2 mx-auto">
                    <div class="text-center">
                        <h1>Leave a Message</h1>
                        <p>
                            Your email address will not be published. Required fields are
                            marked.
                        </p>
                    </div>
                    <form action="{{ route('contact.store') }}" class="pt-5" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="mb-3">
                                    <input type="text" name="name" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" placeholder="Mr Khan" required />
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="mb-3">
                                    <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" placeholder="example@gmail.com" required />
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="mb-3">
                                    <input type="text" name="phone" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" placeholder="0172*******" required />
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <input type="text" name="subject" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" placeholder="Subject" required />
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <textarea rows="5" name="message" class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                            </div>
                            <div class="col-lg-12">
                                <div class="d-flex justify-content-center pt-5">
                                    <button type="submit" class="primary-btn-one">Send Your Message</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
