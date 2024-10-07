@extends('frontend.master')
@section('content')
    <section class="showcase">
        <img class="img-fluid" src="{{ asset('storage/common_banner/' . optional($common_banner)->course_banner) }}"
            alt="Picture"
            onerror="this.onerror=null; this.src='https://images.ctfassets.net/ihx0a8chifpc/GTlzd4xkx4LmWsG1Kw1BB/ad1834111245e6ee1da4372f1eb5876c/placeholder.com-1280x720.png?w=1920&q=60&fm=webp';" />
    </section>
    <section>
        <div class="container">
            <div class="row py-5">
                <div class="col-lg-12">
                    <div>
                        <h3 class="text-center py-5">Your Searched Course Not Found...</h3>
                    </div>
                    <div class="d-flex justify-content-center align-items-center">
                        <img class="img-fluid"
                            src="https://wizzy.ai/blog/wp-content/uploads/2020/10/No-Result-Found-1024x604.jpg"
                            alt="">
                    </div>
                    <div>
                        <p class="text-center mb-0">We couldn't find the product you're looking for. Please try the
                            following:</p>
                        <p class="text-center">Need assistance? <a class="fw-bold" href="{{ asset('contact') }}">Contact our support
                                team</a> for help.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
