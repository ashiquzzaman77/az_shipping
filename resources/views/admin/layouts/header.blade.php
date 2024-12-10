<style>
    #clock {
        font-family: 'Arial', sans-serif;
        /* Font style */
        font-size: 24px;
        /* Font size */
        color: #ffffff;
        /* Text color */
        background: linear-gradient(135deg, #023154, #302b63, #023154);
        /* Gradient with specified colors */
        padding: 10px 20px;
        /* Padding */
        border-radius: 4px;
        /* Rounded corners */
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
        /* Shadow for depth */
        display: inline-flex;
        /* Use flex for alignment */
        justify-content: center;
        /* Center items */
        align-items: center;
        /* Center items */
        width: auto;
        /* Let the width adjust automatically */
        min-width: 250px;
        /* Minimum width to ensure the clock is not too small */
        text-align: center;
        /* Center text */
        transition: all 0.3s ease;
        /* Smooth transitions */
        flex-wrap: wrap;
        /* Wrap elements when necessary */
    }

    .time-segment {
        margin: 0 5px;
        font-weight: bold;
        font-size: 30px;
    }

    .colon {
        margin: 0 5px;
        font-weight: bold;
        font-size: 30px;
    }

    #day {
        font-size: 19px;
        font-weight: bolder;
        margin-right: 10px;
        background: linear-gradient(90deg, #5f77ff, #7beafe);
        -webkit-background-clip: text;
        color: transparent;
    }


    /* Hide the clock on small screens (less than 576px) */
    @media (max-width: 576px) {
        #clock {
            display: none;
            /* Hide the clock on small screens */
        }
    }

    @media (max-width: 576px) {
        #frontend {
            display: none;
            /* Hide frontend on small screens */
        }
    }
</style>


<!--begin::Header-->
<div id="kt_header" class="header align-items-stretch">
    <!--begin::Container-->
    <div class="container-fluid d-flex align-items-stretch justify-content-between">
        <!--begin::Aside mobile toggle-->
        <div class="d-flex align-items-center d-lg-none ms-n2 me-2" title="Show aside menu">
            <div class="btn btn-icon btn-active-light-primary w-30px h-30px w-md-40px h-md-40px"
                id="kt_aside_mobile_toggle">
                <!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
                <span class="svg-icon svg-icon-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none">
                        <path d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z"
                            fill="currentColor" />
                        <path opacity="0.3"
                            d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z"
                            fill="currentColor" />
                    </svg>
                </span>
                <!--end::Svg Icon-->
            </div>
        </div>
        <!--end::Aside mobile toggle-->
        
        <!--begin::Mobile logo-->
        <div class="d-flex align-items-center flex-grow-1 mt-3 flex-lg-grow-0">
            <a href="javascript:;" class="d-lg-none">
                <p>AZ Shipping Services</p>
            </a>
        </div>
        <!--end::Mobile logo-->
        <!--begin::Wrapper-->
        <div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1">
            <!--begin::Navbar-->
            <div class="d-flex align-items-stretch" id="kt_header_nav">

                {{-- Frontend  --}}
                <div class="my-auto" id="frontend">
                    <a href="{{ route('homepage') }}" class="btn btn-secondary rounded-1 text-danger"
                        target="blank">Frontend</a>
                </div>
                {{-- Frontend  --}}

            </div>

            {{-- Clock --}}
            <div class="d-flex align-items-stretch" id="kt_header_nav">
                <div class="my-auto" id="clock">
                    <span class="time-segment" id="day">Monday</span>
                    <span class="time-segment" id="hours">00</span>
                    <span class="colon">:</span>
                    <span class="time-segment" id="minutes">00</span>
                    <span class="colon">:</span>
                    <span class="time-segment" id="seconds">00</span>
                </div>
            </div>
            {{-- Clock --}}

            <!--end::Navbar-->

            <!--begin::Toolbar wrapper-->
            @php
                $ncount = Auth::guard('admin')->user()->unreadNotifications()->count();
            @endphp
            <div class="d-flex align-items-stretch flex-shrink-0">
                <!--begin::Notifications-->
                <div class="d-flex align-items-center ms-1 ms-lg-3">
                    <!--begin::Menu- wrapper-->

                    <div class="btn btn-icon btn-icon-muted btn-active-light btn-active-color-primary w-30px h-30px w-md-40px h-md-40px"
                        data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">

                        <span class="svg-icon svg-icon-1 position-relative">
                            <!-- Bell Icon -->
                            <i class="fa-solid fa-bell fs-2"></i>

                            @if ($ncount > 0)
                                <span
                                    class="badge badge-light position-absolute top-0 start-100 translate-middle badge-danger"
                                    style="font-size: 0.7rem; padding: 0.4rem 0.4rem; border-radius: 50%;">
                                    {{ $ncount }}
                                    <span class="visually-hidden">unread messages</span>
                                </span>
                            @endif
                        </span>



                        <!--end::Svg Icon-->
                    </div>



                    <!--begin::Menu-->
                    <div class="menu menu-sub menu-sub-dropdown menu-column w-350px w-lg-375px" data-kt-menu="true">
                        <!--begin::Heading-->
                        <div class="d-flex flex-column bgi-no-repeat rounded-top"
                            style="background-image:url('{{ asset('admin/assets/media/misc/pattern-1.jpg') }}')">
                            <!--begin::Title-->
                            <h3 class="text-white fw-bold px-9 mt-10 mb-6">Notifications
                                <span class="fs-8 opacity-75 ps-3"></span>
                            </h3>
                            <!--end::Title-->
                        </div>
                        <!--end::Heading-->


                        <!--begin::Tab content-->
                        <div class="tab-content">
                            <!--begin::Tab panel-->
                            <div class="tab-pane fade show active" id="kt_topbar_notifications_1" role="tabpanel">

                                <!--begin::Items-->
                                <div class="scroll-y mh-325px my-5 px-8">

                                    @php
                                        $admin = Auth::guard('admin')->user();
                                    @endphp

                                    <!--begin::Item-->
                                    @foreach ($admin->notifications as $notification)
                                        <div class="d-flex flex-stack py-4">
                                            <!-- Begin::Section -->
                                            <div class="d-flex align-items-center">

                                                <!-- Begin::Symbol (Icon) -->
                                                <div class="symbol symbol-35px me-4">
                                                    <span class="symbol-label bg-light-primary">
                                                        <!-- Begin::Svg Icon -->
                                                        <span class="svg-icon svg-icon-2 svg-icon-primary">
                                                            <i class="fa-solid fa-message"></i>
                                                        </span>
                                                        <!-- End::Svg Icon -->
                                                    </span>
                                                </div>
                                                <!-- End::Symbol -->

                                                <!-- Begin::Title -->
                                                <div class="mb-0 me-2">
                                                    <!-- Notification Name -->
                                                    @if (!empty($notification->data['name']))
                                                        <a href="javascript:;"
                                                            class="fs-6 text-gray-800 text-hover-primary fw-bolder">
                                                            {{ $notification->data['name'] }}
                                                        </a>
                                                    @endif

                                                    <!-- Display the subject/message of the notification -->
                                                    <div class="text-gray-400 fs-7">
                                                        @if (!empty($notification->data['message']))
                                                            <a href="">{{ $notification->data['message'] }}</a>
                                                        @elseif (!empty($notification->data['subject']))
                                                            <!-- Fallback for subject -->
                                                            <a href="">{{ $notification->data['subject'] }}</a>
                                                        @endif
                                                    </div>

                                                    <!-- Mark as Read Text Link (only for unread notifications) -->
                                                    @if (!$notification->read_at)
                                                        <!-- Check if notification is unread -->
                                                        <form action="{{ route('admin.markNotificationsAsRead') }}"
                                                            method="POST" style="display:inline;"
                                                            id="mark-read-form-{{ $notification->id }}">
                                                            @csrf
                                                            <input type="hidden" name="notification_id"
                                                                value="{{ $notification->id }}">
                                                            <a href="javascript:void(0);" class="text-danger fs-7"
                                                                style="text-decoration: underline;"
                                                                onclick="event.preventDefault(); document.getElementById('mark-read-form-{{ $notification->id }}').submit();">
                                                                Mark as Read
                                                            </a>
                                                        </form>
                                                    @endif
                                                </div>
                                                <!-- End::Title -->
                                            </div>
                                            <!-- End::Section -->

                                            <!-- Begin::Label (Time ago) -->
                                            <span class="badge badge-light fs-9">
                                                @php
                                                    $diffInMinutes = \Carbon\Carbon::parse(
                                                        $notification->created_at,
                                                    )->diffInMinutes();
                                                    $diffInSeconds = \Carbon\Carbon::parse(
                                                        $notification->created_at,
                                                    )->diffInSeconds();
                                                    $diffInHours = \Carbon\Carbon::parse(
                                                        $notification->created_at,
                                                    )->diffInHours();
                                                @endphp

                                                @if ($diffInMinutes < 1)
                                                    {{ $diffInSeconds }} sec ago
                                                @elseif ($diffInHours < 1)
                                                    {{ $diffInMinutes }} min ago
                                                @else
                                                    {{ $diffInHours }} hour ago
                                                @endif
                                            </span>

                                            <!-- End::Label -->
                                        </div>
                                    @endforeach

                                    <!--end::Item-->


                                </div>
                                <!--end::Items-->



                            </div>
                            <!--end::Tab panel-->
                        </div>
                        <!--end::Tab content-->



                    </div>
                    <!--end::Menu-->

                    <!--end::Menu wrapper-->
                </div>
                <!--end::Notifications-->
                <!--begin::Theme mode-->
                {{-- <div class="d-flex align-items-center ms-1 ms-lg-3">
                    <!--begin::Theme mode docs-->
                    <a class="btn btn-icon btn-icon-muted btn-active-light btn-active-color-primary w-30px h-30px w-md-40px h-md-40px"
                        href="../../demo1/dist/documentation/getting-started/dark-mode.html">
                        <i class="fonticon-sun fs-2"></i>
                    </a>
                    <!--end::Theme mode docs-->
                </div> --}}
                <!--end::Theme mode-->

                @php
                    $id = Auth::guard('admin')->user()->id;
                    $profileData = App\Models\Admin::find($id);
                @endphp
                <!--begin::User menu-->
                <div class="d-flex align-items-center ms-1 ms-lg-3" id="kt_header_user_menu_toggle">
                    <!--begin::Menu wrapper-->
                    <div class="cursor-pointer symbol symbol-30px symbol-md-40px" data-kt-menu-trigger="click"
                        data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                        <img src="{{ !empty($profileData->photo) ? url('upload/admin_images/' . $profileData->photo) : url('upload/image.jpg') }}"
                            alt="user" />
                    </div>
                    <!--begin::User account menu-->
                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-primary fw-bold py-4 fs-6 w-275px"
                        data-kt-menu="true">
                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <div class="menu-content d-flex align-items-center px-3">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-50px me-5">
                                    <img alt="Logo"
                                        src="{{ !empty($profileData->photo) ? url('upload/admin_images/' . $profileData->photo) : url('upload/image.jpg') }}" />
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Username-->
                                <div class="d-flex flex-column">
                                    <div class="fw-bolder d-flex align-items-center fs-5">
                                        {{ Auth::guard('admin')->user()->name }}
                                    </div>
                                    <a href="#" class="fw-bold text-muted text-hover-primary fs-7"
                                        style="overflow-wrap: anywhere;">
                                        {{ Auth::guard('admin')->user()->email }}
                                    </a>
                                </div>
                                <!--end::Username-->
                            </div>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu separator-->
                        <div class="separator my-2"></div>
                        <!--end::Menu separator-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-5">
                            <a href="{{ route('admin.profile') }}" class="menu-link px-5">My
                                Profile</a>
                        </div>

                        <div class="menu-item px-5 my-1">
                            <a href="{{ route('admin.password.page') }}" class="menu-link px-5">Password Change</a>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-5">
                            <form method="POST" action="{{ route('admin.logout') }}">
                                @csrf
                                <a href="{{ route('admin.logout') }}"
                                    onclick="event.preventDefault();
                                this.closest('form').submit();"
                                    class="menu-link px-5"> {{ __('Sign Out') }}</a>
                            </form>
                        </div>


                    </div>
                    <!--end::User account menu-->
                    <!--end::Menu wrapper-->
                </div>
                <!--end::User menu-->
            </div>
            <!--end::Toolbar wrapper-->

        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Container-->
</div>
<!--end::Header-->
<script>
    function updateClock() {
        const now = new Date();

        // Get the current day of the week (e.g., Monday)
        const daysOfWeek = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
        const currentDay = daysOfWeek[now.getDay()]; // Returns a number (0-6) representing the day of the week

        // Get current time components
        const options = {
            hour: '2-digit',
            minute: '2-digit',
            second: '2-digit',
            hour12: true
        };

        const timeString = now.toLocaleTimeString([], options).split(':');

        // Update the clock and day
        document.getElementById('day').textContent = currentDay;
        document.getElementById('hours').textContent = timeString[0];
        document.getElementById('minutes').textContent = timeString[1];
        document.getElementById('seconds').textContent = timeString[2];
    }

    // Update the clock every second
    setInterval(updateClock, 1000);

    // Initialize clock on page load
    updateClock();
</script>
