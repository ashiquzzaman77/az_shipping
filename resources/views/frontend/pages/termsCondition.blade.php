@extends('frontend.master')
@section('content')
    <section class="">
        <div class="showcase">
            <img class="img-fluid" src="{{ asset('storage/common_banner/' . optional($common_banner)->term_banner) }}"
                alt="Picture"
                onerror="this.onerror=null; this.src='https://images.ctfassets.net/ihx0a8chifpc/GTlzd4xkx4LmWsG1Kw1BB/ad1834111245e6ee1da4372f1eb5876c/placeholder.com-1280x720.png?w=1920&q=60&fm=webp';" />
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav aria-label="breadcrumb" class="py-3">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item">
                                <a href="{{ route('homepage') }}" class="text-decoration-none main-color">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                <span class="text-muted">Terms & Condition</span>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-12">
                    {!! optional($terms)->content !!}
                </div>
            </div>
        </div>
    </section>
@endsection
