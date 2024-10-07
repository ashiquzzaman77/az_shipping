<x-admin-guest-layout :title="'403 Error'">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        :root {
            --white-color: #ffff;
            --white: #ffff;
            --primary-color: #0a1d5b;
            --secondary-color: #051225;
            --extra-color: #28a745;
            --font-one-font: "Hind Siliguri", sans-serif;
            --font-two-font: "Inter", sans-serif;
            --font-three-font: "Bebas Neue", sans-serif;
            --font-four-font: "Dancing Script", cursive;
            --font-two-font-weight: 400;
            --font-size-base: 16px;
        }

        .error-title {
            color: var(--primary-color);
            font-size: 45px;
        }

        .error-page {
            width: 100%;
            overflow: hidden;
            height: 100vh;
        }

        .fullscreen-bg {
            background-image: url('https://i.ibb.co/84wgNwT/Training-error-page-BG-1.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 70vh;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            overflow: hidden;
        }

        .content {
            text-align: center;
        }

        .content-bottom {
            align-items: center;
            text-align: center;
        }

        .primary-btn-one {
            appearance: none;
            backface-visibility: hidden;
            background-color: var(--primary-color);
            border-radius: 8px;
            border: 1px solid var(--secondary-color);
            box-shadow: none;
            color: #fff;
            cursor: pointer;
            display: inline-block;
            font-family: Inter, -apple-system, system-ui, "Segoe UI", Helvetica, Arial, sans-serif;
            font-size: 15px;
            font-weight: 500;
            height: auto;
            letter-spacing: normal;
            line-height: 0.8;
            outline: none;
            overflow: hidden;
            padding: 15px !important;
            position: relative;
            text-align: center;
            text-decoration: none;
            transform: translate3d(0, 0, 0);
            transition: all 0.3s;
            user-select: none;
            -webkit-user-select: none;
            touch-action: manipulation;
            vertical-align: top;
            white-space: nowrap;
        }

        .primary-btn-one:hover {
            cursor: pointer;
            background-color: #fff;
            border: 1px solid var(--secondary-color);
            box-shadow: rgba(0, 0, 0, 0.05) 0 5px 30px, rgba(0, 0, 0, 0.05) 0 1px 4px;
            opacity: 1;
            padding: 15px !important;
            transition-duration: 0.35s;
            color: var(--secondary-color);
            display: inline-block;
            font-family: Inter, -apple-system, system-ui, "Segoe UI", Helvetica, Arial, sans-serif;
            font-size: 15px;
            font-weight: 500;
            height: auto;
            letter-spacing: normal;
            line-height: 0.8;
            outline: none;
            overflow: hidden;
            position: relative;
            text-align: center;
            text-decoration: none;
            transform: translate3d(0, 0, 0);
            user-select: none;
            -webkit-user-select: none;
            touch-action: manipulation;
            vertical-align: top;
            white-space: nowrap;
        }

        .error-footer {
            position: relative;
            top: 70px;
        }
    </style>
    <div class="container-fluid px-0 error-page">
        <!-- Background section -->
        <div class="row fullscreen-bg px-0">
            <div class="col-lg-12 content">
                <div class="pb-5 mb-5">
                    <a class="navbar-brand" href="{{ route('homepage') }}">
                        <img class="img-fluid"
                            src="{{ !empty(optional($setting)->site_logo) && file_exists(public_path('storage/' . optional($setting)->site_logo)) ? asset('storage/' . optional($setting)->site_logo) : asset('frontend/images/no-logo(217-55).jpg') }}"
                            alt="" />
                    </a>
                </div>
                <div>
                    <h1 class="error-title">Access Denied</h1>
                    <h3 class="pt-5">You don't have permission to access this page. <br> Please contact support if you believe this is a mistake.</h3>
                </div>
                <div class="mt-5 pt-5">
                    <a href="{{ route('homepage') }}" class="primary-btn-one">
                        Back to the home page <i class="fa-solid fa-long-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
        <!-- Additional content below -->
        <div class="row">
            <div class="col-lg-12 content-bottom">
                <div class="error-footer">
                    <div>
                        <h1 class="card-title">Need Assistance?</h1>
                        <h3 class="pt-2 mb-5">Explore our help resources or get in touch with us for support.</h3>
                    </div>
                    <a href="{{ route('support') }}" class="primary-btn-one mt-5">
                        Contact Support <i class="fa-solid fa-long-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-admin-guest-layout>
