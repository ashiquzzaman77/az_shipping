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
        <div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
            <a href="../../demo1/dist/index.html" class="d-lg-none">
                <img alt="Logo" src="{{ asset('admin/assets/media/logos/logo-2.svg') }}" class="h-30px" />
            </a>
        </div>
        <!--end::Mobile logo-->
        <!--begin::Wrapper-->
        <div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1">
            <!--begin::Navbar-->
            <div class="d-flex align-items-stretch" id="kt_header_nav">
            </div>
            <!--end::Navbar-->
            <!--begin::Toolbar wrapper-->
            <div class="d-flex align-items-stretch flex-shrink-0">
                <!--begin::Notifications-->
                <div class="d-flex align-items-center ms-1 ms-lg-3">
                    <!--begin::Menu- wrapper-->

                    <div class="btn btn-icon btn-icon-muted btn-active-light btn-active-color-primary w-30px h-30px w-md-40px h-md-40px"
                        data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                        <!--begin::Svg Icon | path: icons/duotune/general/gen022.svg-->
                        <span class="svg-icon svg-icon-1">

                            <i class="fa-solid fa-bell fs-4"></i>

                        </span>
                        <!--end::Svg Icon-->
                    </div>

                    @php
                        $ncount = Auth::guard('admin')->user()->unreadNotifications()->count();
                    @endphp

                    <!--begin::Menu-->
                    <div class="menu menu-sub menu-sub-dropdown menu-column w-350px w-lg-375px" data-kt-menu="true">
                        <!--begin::Heading-->
                        <div class="d-flex flex-column bgi-no-repeat rounded-top"
                            style="background-image:url('{{ asset('admin/assets/media/misc/pattern-1.jpg') }}')">
                            <!--begin::Title-->
                            <h3 class="text-white fw-bold px-9 mt-10 mb-6">Notifications
                                <span class="fs-8 opacity-75 ps-3">{{ $ncount }} reports</span>
                            </h3>
                            <!--end::Title-->
                            <!--begin::Tabs-->
                            <ul class="nav nav-line-tabs nav-line-tabs-2x nav-stretch fw-bold px-9">
                                <li class="nav-item">
                                    <a class="nav-link text-white opacity-75 opacity-state-100 pb-4 active"
                                        data-bs-toggle="tab" href="#kt_topbar_notifications_1">Alerts</a>
                                </li>
                            </ul>
                            <!--end::Tabs-->
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
                                            <!--begin::Section-->
                                            <div class="d-flex align-items-center">

                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-35px me-4">
                                                    <span class="symbol-label bg-light-primary">
                                                        <!--begin::Svg Icon | path: icons/duotune/technology/teh008.svg-->

                                                        <span class="svg-icon svg-icon-2 svg-icon-primary">
                                                            <i class="fa-solid fa-message"></i>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Title-->
                                                <div class="mb-0 me-2">
                                                    @if (!empty($notification->data['name']))
                                                        <a href="javascript:;"
                                                            class="fs-6 text-gray-800 text-hover-primary fw-bolder">{{ $notification->data['name'] }}</a>
                                                    @endif
                                                    <div class="text-gray-400 fs-7">
                                                        <a href="">{{ $notification->data['message'] }}</a>
                                                    </div>
                                                </div>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Section-->
                                            <!--begin::Label-->
                                            <span
                                                class="badge badge-light fs-9">{{ Carbon\Carbon::parse($notification->created_at)->diffForHumans() }}</span>
                                            <!--end::Label-->
                                        </div>
                                    @endforeach
                                    <!--end::Item-->


                                </div>
                                <!--end::Items-->

                                <!--begin::View more-->
                                <div class="py-3 text-center border-top">
                                    <a href="../../demo1/dist/pages/user-profile/activity.html"
                                        class="btn btn-color-gray-600 btn-active-color-primary">View All
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                        <span class="svg-icon svg-icon-5">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <rect opacity="0.5" x="18" y="13" width="13" height="2"
                                                    rx="1" transform="rotate(-180 18 13)" fill="currentColor" />
                                                <path
                                                    d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                    fill="currentColor" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon--></a>
                                </div>
                                <!--end::View more-->

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
