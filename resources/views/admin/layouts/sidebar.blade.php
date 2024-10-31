 <div id="kt_aside" class="aside aside-dark aside-hoverable" data-kt-drawer="true" data-kt-drawer-name="aside"
     data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true"
     data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start"
     data-kt-drawer-toggle="#kt_aside_mobile_toggle">
     <div class="aside-logo flex-column-auto" id="kt_aside_logo">

         <a class="text-center mx-auto" href="{{ route('admin.dashboard') }}">
             {{-- <img alt="Logo" src="{{ asset('backend/login/assets/logo/Logo_White.png') }}"
                 style="width: 100px; height: 40px;" class="logo text-center" /> --}}

             <h1 class="text-light">A Z Shipping</h1>
         </a>

         <div id="kt_aside_toggle" class="btn btn-icon w-auto px-0 btn-active-color-primary aside-toggle active"
             data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body"
             data-kt-toggle-name="aside-minimize">
             <span class="svg-icon svg-icon-1 rotate-180">
                 <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                     fill="none">
                     <path opacity="0.5"
                         d="M14.2657 11.4343L18.45 7.25C18.8642 6.83579 18.8642 6.16421 18.45 5.75C18.0358 5.33579 17.3642 5.33579 16.95 5.75L11.4071 11.2929C11.0166 11.6834 11.0166 12.3166 11.4071 12.7071L16.95 18.25C17.3642 18.6642 18.0358 18.6642 18.45 18.25C18.8642 17.8358 18.8642 17.1642 18.45 16.75L14.2657 12.5657C13.9533 12.2533 13.9533 11.7467 14.2657 11.4343Z"
                         fill="currentColor"></path>
                     <path
                         d="M8.2657 11.4343L12.45 7.25C12.8642 6.83579 12.8642 6.16421 12.45 5.75C12.0358 5.33579 11.3642 5.33579 10.95 5.75L5.40712 11.2929C5.01659 11.6834 5.01659 12.3166 5.40712 12.7071L10.95 18.25C11.3642 18.6642 12.0358 18.6642 12.45 18.25C12.8642 17.8358 12.8642 17.1642 12.45 16.75L8.2657 12.5657C7.95328 12.2533 7.95328 11.7467 8.2657 11.4343Z"
                         fill="currentColor"></path>
                 </svg>
             </span>
         </div>
     </div>

     <div class="aside-menu flex-column-fluid">

         <div class="hover-scroll-overlay-y my-5 my-lg-5" id="kt_aside_menu_wrapper" data-kt-scroll="true"
             data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-height="auto"
             data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer" data-kt-scroll-wrappers="#kt_aside_menu"
             data-kt-scroll-offset="0" style="height: 318px;">
             <div class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500"
                 id="#kt_aside_menu" data-kt-menu="true" data-kt-menu-expand="false">

                 <div class="menu-item">

                     <a class="menu-link {{ Route::is('admin.dashboard') ? 'active' : '' }}"
                         href="{{ route('admin.dashboard') }}">
                         <span class="menu-icon">
                             <span class="svg-icon svg-icon-2">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                     viewBox="0 0 24 24" fill="none">
                                     <rect x="2" y="2" width="9" height="9" rx="2" fill="currentColor">
                                     </rect>
                                     <rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2"
                                         fill="currentColor"></rect>
                                     <rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2"
                                         fill="currentColor"></rect>
                                     <rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2"
                                         fill="currentColor"></rect>
                                 </svg>
                             </span>
                         </span>
                         <span class="menu-title">Dashboard</span>
                     </a>

                 </div>

                 {{-- SeaFear Section  --}}
                 <div data-kt-menu-trigger="click"
                     class="menu-item menu-accordion {{ Request::routeIs('admin.officer.index', 'admin.rating.index') ? 'here show' : '' }}">
                     <span class="menu-link">

                         <span class="menu-icon">
                             <!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm002.svg-->
                             <span class="svg-icon svg-icon-2">
                                 <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                     xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 297 297"
                                     xml:space="preserve" fill="#000000">
                                     <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                     <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round">
                                     </g>
                                     <g id="SVGRepo_iconCarrier">
                                         <g>
                                             <g>
                                                 <g>
                                                     <g>
                                                         <g>
                                                             <g>
                                                                 <circle style="fill:#345065;" cx="148.5"
                                                                     cy="148.5" r="148.5"></circle>
                                                             </g>
                                                         </g>
                                                     </g>
                                                 </g>
                                             </g>
                                             <path style="fill:#243F4F;"
                                                 d="M264,148.5L67.438,208.223l88.783,88.579c68.287-3.498,124.388-53.124,137.752-118.329L264,148.5z">
                                             </path>
                                             <g>
                                                 <rect x="66" y="95.25" style="fill:#9ADAD9;" width="65.666"
                                                     height="33"></rect>
                                             </g>
                                             <g>
                                                 <rect x="66" y="119.75" style="fill:#FFFFFF;" width="115.5"
                                                     height="33"></rect>
                                             </g>
                                             <g>
                                                 <rect x="149.167" y="119.75" style="fill:#BDC3C7;" width="32.333"
                                                     height="33"></rect>
                                             </g>
                                             <g>
                                                 <path style="fill:#1ABC9C;"
                                                     d="M82.429,214.5h106.855c5.581,0,10.933-2.217,14.879-6.163L264,148.5H49.5l12.515,50.062 C64.357,207.929,72.773,214.5,82.429,214.5z">
                                                 </path>
                                             </g>
                                             <g>
                                                 <path style="fill:#17AB93;"
                                                     d="M149.167,148.5v66h40.117c5.581,0,10.933-2.217,14.879-6.163L264,148.5H149.167z">
                                                 </path>
                                             </g>
                                         </g>
                                     </g>
                                 </svg>
                             </span>
                             <!--end::Svg Icon-->
                         </span>

                         <span class="menu-title">Seafarer Database</span>

                         <span class="menu-arrow"></span>

                     </span>

                     <div
                         class="menu-sub menu-sub-accordion menu-active-bg {{ Request::routeIs('admin.officer.index', 'admin.rating.index') ? 'here show' : '' }}">


                         {{-- Officre  --}}

                         {{-- @if (Auth::guard('admin')->user()->can('officer.menu')) --}}
                         <div class="menu-item">
                             {{-- @if (Auth::guard('admin')->user()->can('all.officer')) --}}
                             <a class="menu-link {{ Request::routeIs('admin.officer.index') ? 'active' : '' }}"
                                 href="{{ route('admin.officer.index') }}">
                                 <span class="menu-bullet">
                                     <span class="bullet bullet-dot"></span>
                                 </span>
                                 <span class="menu-title">Officer</span>
                             </a>
                             {{-- @endif --}}
                         </div>
                         {{-- @endif --}}

                         {{-- Rating  --}}
                         {{-- @if (Auth::guard('admin')->user()->can('rating.menu')) --}}
                         <div class="menu-item">
                             {{-- @if (Auth::guard('admin')->user()->can('all.rating')) --}}
                             <a class="menu-link {{ Request::routeIs('admin.rating.index') ? 'active' : '' }}"
                                 href="{{ route('admin.rating.index') }}">
                                 <span class="menu-bullet">
                                     <span class="bullet bullet-dot"></span>
                                 </span>
                                 <span class="menu-title">Rating</span>
                             </a>
                             {{-- @endif --}}
                         </div>
                         {{-- @endif --}}


                     </div>
                 </div>

                 {{-- Job Section  --}}
                 <div data-kt-menu-trigger="click"
                     class="menu-item menu-accordion {{ Request::routeIs('admin.job.index','admin.apply.post') ? 'here show' : '' }}">

                     <span class="menu-link">
                         <span class="menu-icon">
                             <!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm002.svg-->
                             <span class="svg-icon svg-icon-2">
                                 <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                     xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 297 297"
                                     xml:space="preserve" fill="#000000">
                                     <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                     <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round">
                                     </g>
                                     <g id="SVGRepo_iconCarrier">
                                         <g>
                                             <g>
                                                 <g>
                                                     <g>
                                                         <g>
                                                             <g>
                                                                 <circle style="fill:#345065;" cx="148.5"
                                                                     cy="148.5" r="148.5"></circle>
                                                             </g>
                                                         </g>
                                                     </g>
                                                 </g>
                                             </g>
                                             <path style="fill:#243F4F;"
                                                 d="M264,148.5L67.438,208.223l88.783,88.579c68.287-3.498,124.388-53.124,137.752-118.329L264,148.5z">
                                             </path>
                                             <g>
                                                 <rect x="66" y="95.25" style="fill:#9ADAD9;" width="65.666"
                                                     height="33"></rect>
                                             </g>
                                             <g>
                                                 <rect x="66" y="119.75" style="fill:#FFFFFF;" width="115.5"
                                                     height="33"></rect>
                                             </g>
                                             <g>
                                                 <rect x="149.167" y="119.75" style="fill:#BDC3C7;" width="32.333"
                                                     height="33"></rect>
                                             </g>
                                             <g>
                                                 <path style="fill:#1ABC9C;"
                                                     d="M82.429,214.5h106.855c5.581,0,10.933-2.217,14.879-6.163L264,148.5H49.5l12.515,50.062 C64.357,207.929,72.773,214.5,82.429,214.5z">
                                                 </path>
                                             </g>
                                             <g>
                                                 <path style="fill:#17AB93;"
                                                     d="M149.167,148.5v66h40.117c5.581,0,10.933-2.217,14.879-6.163L264,148.5H149.167z">
                                                 </path>
                                             </g>
                                         </g>
                                     </g>
                                 </svg>
                             </span>
                             <!--end::Svg Icon-->
                         </span>
                         <span class="menu-title">Job Management</span>
                         <span class="menu-arrow"></span>
                     </span>

                     <div
                         class="menu-sub menu-sub-accordion menu-active-bg {{ Request::routeIs('admin.job.index','admin.apply.post') ? 'here show' : '' }}">

                         {{-- @if (Auth::guard('admin')->user()->can('job.menu')) --}}
                         <div class="menu-item">
                             {{-- @if (Auth::guard('admin')->user()->can('all.job')) --}}
                             <a class="menu-link {{ Request::routeIs('admin.job.index') ? 'active' : '' }}"
                                 href="{{ route('admin.job.index') }}">
                                 <span class="menu-bullet">
                                     <span class="bullet bullet-dot"></span>
                                 </span>
                                 <span class="menu-title">Job Created</span>
                             </a>
                             {{-- @endif --}}
                         </div>
                         {{-- @endif --}}



                         {{-- Terms & Policy --}}
                         {{-- @if (Auth::guard('admin')->user()->can('policy.menu')) --}}
                         <div class="menu-item">
                             {{-- @if (Auth::guard('admin')->user()->can('all.policy')) --}}
                             <a class="menu-link {{ Route::is('admin.apply.post') ? 'active' : '' }}"
                                 href="{{ route('admin.apply.post') }}">
                                 <span class="menu-bullet">
                                     <span class="bullet bullet-dot"></span>
                                 </span>
                                 <span class="menu-title">Job Apply</span>
                             </a>
                             {{-- @endif --}}
                         </div>
                         {{-- @endif --}}

                     </div>
                 </div>

                 {{-- Arrived Message --}}
                 {{-- @if (Auth::guard('admin')->user()->can('apply_post.menu')) --}}
                 <div class="menu-item">

                     <a class="menu-link {{ Route::is('admin.admin-contact.index') ? 'active' : '' }}"
                         href="{{ route('admin.admin-contact.index') }}">
                         <span class="menu-icon">
                             <span class="svg-icon svg-icon-2">
                                 <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                     xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 297 297"
                                     xml:space="preserve" fill="#000000">
                                     <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                     <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round">
                                     </g>
                                     <g id="SVGRepo_iconCarrier">
                                         <g>
                                             <g>
                                                 <g>
                                                     <g>
                                                         <g>
                                                             <g>
                                                                 <circle style="fill:#345065;" cx="148.5"
                                                                     cy="148.5" r="148.5"></circle>
                                                             </g>
                                                         </g>
                                                     </g>
                                                 </g>
                                             </g>
                                             <path style="fill:#243F4F;"
                                                 d="M264,148.5L67.438,208.223l88.783,88.579c68.287-3.498,124.388-53.124,137.752-118.329L264,148.5z">
                                             </path>
                                             <g>
                                                 <rect x="66" y="95.25" style="fill:#9ADAD9;" width="65.666"
                                                     height="33"></rect>
                                             </g>
                                             <g>
                                                 <rect x="66" y="119.75" style="fill:#FFFFFF;" width="115.5"
                                                     height="33"></rect>
                                             </g>
                                             <g>
                                                 <rect x="149.167" y="119.75" style="fill:#BDC3C7;" width="32.333"
                                                     height="33"></rect>
                                             </g>
                                             <g>
                                                 <path style="fill:#1ABC9C;"
                                                     d="M82.429,214.5h106.855c5.581,0,10.933-2.217,14.879-6.163L264,148.5H49.5l12.515,50.062 C64.357,207.929,72.773,214.5,82.429,214.5z">
                                                 </path>
                                             </g>
                                             <g>
                                                 <path style="fill:#17AB93;"
                                                     d="M149.167,148.5v66h40.117c5.581,0,10.933-2.217,14.879-6.163L264,148.5H149.167z">
                                                 </path>
                                             </g>
                                         </g>
                                     </g>
                                 </svg>
                             </span>
                         </span>
                         <span class="menu-title">Arrived Message</span>
                     </a>

                 </div>
                 {{-- @endif --}}

                 {{-- Frontend Section  --}}
                 <div data-kt-menu-trigger="click"
                     class="menu-item menu-accordion {{ Request::routeIs('admin.banner.index','admin.about.index','admin.team.index','admin.service.index','admin.principle.index','admin.client.index') ? 'here show' : '' }}">
                     <span class="menu-link">

                         <span class="menu-icon">
                             <!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm002.svg-->
                             <span class="svg-icon svg-icon-2">
                                 <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                     xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 297 297"
                                     xml:space="preserve" fill="#000000">
                                     <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                     <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round">
                                     </g>
                                     <g id="SVGRepo_iconCarrier">
                                         <g>
                                             <g>
                                                 <g>
                                                     <g>
                                                         <g>
                                                             <g>
                                                                 <circle style="fill:#345065;" cx="148.5"
                                                                     cy="148.5" r="148.5"></circle>
                                                             </g>
                                                         </g>
                                                     </g>
                                                 </g>
                                             </g>
                                             <path style="fill:#243F4F;"
                                                 d="M264,148.5L67.438,208.223l88.783,88.579c68.287-3.498,124.388-53.124,137.752-118.329L264,148.5z">
                                             </path>
                                             <g>
                                                 <rect x="66" y="95.25" style="fill:#9ADAD9;" width="65.666"
                                                     height="33"></rect>
                                             </g>
                                             <g>
                                                 <rect x="66" y="119.75" style="fill:#FFFFFF;" width="115.5"
                                                     height="33"></rect>
                                             </g>
                                             <g>
                                                 <rect x="149.167" y="119.75" style="fill:#BDC3C7;" width="32.333"
                                                     height="33"></rect>
                                             </g>
                                             <g>
                                                 <path style="fill:#1ABC9C;"
                                                     d="M82.429,214.5h106.855c5.581,0,10.933-2.217,14.879-6.163L264,148.5H49.5l12.515,50.062 C64.357,207.929,72.773,214.5,82.429,214.5z">
                                                 </path>
                                             </g>
                                             <g>
                                                 <path style="fill:#17AB93;"
                                                     d="M149.167,148.5v66h40.117c5.581,0,10.933-2.217,14.879-6.163L264,148.5H149.167z">
                                                 </path>
                                             </g>
                                         </g>
                                     </g>
                                 </svg>
                             </span>
                             <!--end::Svg Icon-->
                         </span>

                         <span class="menu-title">Frontend</span>

                         <span class="menu-arrow"></span>

                     </span>

                     <div
                         class="menu-sub menu-sub-accordion menu-active-bg {{ Request::routeIs('admin.banner.index','admin.about.index','admin.team.index','admin.service.index','admin.principle.index','admin.client.index') ? 'here show' : '' }}">

                         {{-- Banner Section  --}}

                         {{-- @if (Auth::guard('admin')->user()->can('banner.menu')) --}}
                         <div class="menu-item">
                             {{-- @if (Auth::guard('admin')->user()->can('all.banner')) --}}
                             <a class="menu-link {{ Request::routeIs('admin.banner.index') ? 'active' : '' }}"
                                 href="{{ route('admin.banner.index') }}">
                                 <span class="menu-bullet">
                                     <span class="bullet bullet-dot"></span>
                                 </span>
                                 <span class="menu-title">Banner</span>
                             </a>
                             {{-- @endif --}}
                         </div>
                         {{-- @endif --}}

                         {{-- Good To Know  --}}

                         {{-- @if (Auth::guard('admin')->user()->can('about.menu')) --}}
                         <div class="menu-item">
                             {{-- @if (Auth::guard('admin')->user()->can('all.about')) --}}
                             <a class="menu-link {{ Request::routeIs('admin.about.index') ? 'active' : '' }}"
                                 href="{{ route('admin.about.index') }}">
                                 <span class="menu-bullet">
                                     <span class="bullet bullet-dot"></span>
                                 </span>
                                 <span class="menu-title">Good To Know</span>
                             </a>
                             {{-- @endif --}}
                         </div>
                         {{-- @endif --}}

                         {{-- Team Member  --}}
                         {{-- @if (Auth::guard('admin')->user()->can('team.menu')) --}}
                         <div class="menu-item">
                             {{-- @if (Auth::guard('admin')->user()->can('all.team')) --}}
                             <a class="menu-link {{ Route::is('admin.team.index') ? 'active' : '' }}"
                                 href="{{ route('admin.team.index') }}">
                                 <span class="menu-bullet">
                                     <span class="bullet bullet-dot"></span>
                                 </span>
                                 <span class="menu-title">Team Member</span>
                             </a>
                             {{-- @endif --}}
                         </div>
                         {{-- @endif --}}


                         {{-- Service Section  --}}
                         {{-- @if (Auth::guard('admin')->user()->can('service.menu')) --}}
                         <div class="menu-item">
                             {{-- @if (Auth::guard('admin')->user()->can('all.service')) --}}
                             <a class="menu-link {{ Request::routeIs('admin.service.index') ? 'active' : '' }}"
                                 href="{{ route('admin.service.index') }}">
                                 <span class="menu-bullet">
                                     <span class="bullet bullet-dot"></span>
                                 </span>
                                 <span class="menu-title">Service</span>
                             </a>
                             {{-- @endif --}}
                         </div>
                         {{-- @endif --}}



                         {{-- Principle Section  --}}
                         {{-- @if (Auth::guard('admin')->user()->can('service.menu')) --}}
                         <div class="menu-item">
                             {{-- @if (Auth::guard('admin')->user()->can('all.service')) --}}
                             <a class="menu-link {{ Request::routeIs('admin.principle.index') ? 'active' : '' }}"
                                 href="{{ route('admin.principle.index') }}">
                                 <span class="menu-bullet">
                                     <span class="bullet bullet-dot"></span>
                                 </span>
                                 <span class="menu-title">Principle</span>
                             </a>
                             {{-- @endif --}}
                         </div>
                         {{-- @endif --}}

                         {{-- Client Section  --}}
                         {{-- @if (Auth::guard('admin')->user()->can('about.menu')) --}}
                         <div class="menu-item">
                             {{-- @if (Auth::guard('admin')->user()->can('all.about')) --}}
                             <a class="menu-link {{ Request::routeIs('admin.client.index') ? 'active' : '' }}"
                                 href="{{ route('admin.client.index') }}">
                                 <span class="menu-bullet">
                                     <span class="bullet bullet-dot"></span>
                                 </span>
                                 <span class="menu-title">Client</span>
                             </a>
                             {{-- @endif --}}
                         </div>
                         {{-- @endif --}}


                     </div>
                 </div>


                 {{-- Employee Management --}}
                 {{-- @if (Auth::guard('admin')->user()->can('admin.menu')) --}}
                 <div data-kt-menu-trigger="click"
                     class="menu-item menu-accordion {{ Request::routeIs('all.admin.permission', 'admin.user-management.index') ? 'here show' : '' }}">

                     <span class="menu-link">

                         <span class="menu-icon">
                             <!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm002.svg-->
                             <span class="svg-icon svg-icon-2">
                                 <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                     xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 297 297"
                                     xml:space="preserve" fill="#000000">
                                     <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                     <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round">
                                     </g>
                                     <g id="SVGRepo_iconCarrier">
                                         <g>
                                             <g>
                                                 <g>
                                                     <g>
                                                         <g>
                                                             <g>
                                                                 <circle style="fill:#345065;" cx="148.5"
                                                                     cy="148.5" r="148.5"></circle>
                                                             </g>
                                                         </g>
                                                     </g>
                                                 </g>
                                             </g>
                                             <path style="fill:#243F4F;"
                                                 d="M264,148.5L67.438,208.223l88.783,88.579c68.287-3.498,124.388-53.124,137.752-118.329L264,148.5z">
                                             </path>
                                             <g>
                                                 <rect x="66" y="95.25" style="fill:#9ADAD9;" width="65.666"
                                                     height="33"></rect>
                                             </g>
                                             <g>
                                                 <rect x="66" y="119.75" style="fill:#FFFFFF;" width="115.5"
                                                     height="33"></rect>
                                             </g>
                                             <g>
                                                 <rect x="149.167" y="119.75" style="fill:#BDC3C7;" width="32.333"
                                                     height="33"></rect>
                                             </g>
                                             <g>
                                                 <path style="fill:#1ABC9C;"
                                                     d="M82.429,214.5h106.855c5.581,0,10.933-2.217,14.879-6.163L264,148.5H49.5l12.515,50.062 C64.357,207.929,72.773,214.5,82.429,214.5z">
                                                 </path>
                                             </g>
                                             <g>
                                                 <path style="fill:#17AB93;"
                                                     d="M149.167,148.5v66h40.117c5.581,0,10.933-2.217,14.879-6.163L264,148.5H149.167z">
                                                 </path>
                                             </g>
                                         </g>
                                     </g>
                                 </svg>
                             </span>
                             <!--end::Svg Icon-->
                             <!--end::Svg Icon-->
                         </span>

                         <span class="menu-title">Office Staff Management</span>

                         <span class="menu-arrow"></span>

                     </span>

                     <div
                         class="menu-sub menu-sub-accordion menu-active-bg {{ Request::routeIs('all.admin.permission', 'admin.team.index') ? 'here show' : '' }}">

                         {{-- @if (Auth::guard('admin')->user()->can('admin.menu')) --}}
                         <div class="menu-item">
                             {{-- @if (Auth::guard('admin')->user()->can('all.admin')) --}}
                             <a class="menu-link {{ Route::is('all.admin.permission') ? 'active' : '' }}"
                                 href="{{ route('all.admin.permission') }}">
                                 <span class="menu-bullet">
                                     <span class="bullet bullet-dot"></span>
                                 </span>
                                 <span class="menu-title">Admin</span>
                             </a>
                             {{-- @endif --}}
                         </div>
                         {{-- @endif --}}



                     </div>
                 </div>
                 {{-- @endif --}}

                 {{-- Setting  --}}
                 <div data-kt-menu-trigger="click"
                     class="menu-item menu-accordion {{ Request::routeIs('admin.settings.index', 'admin.policy.index') ? 'here show' : '' }}">

                     <span class="menu-link">
                         <span class="menu-icon">
                             <!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm002.svg-->
                             <span class="svg-icon svg-icon-2">
                                 <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                     xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 297 297"
                                     xml:space="preserve" fill="#000000">
                                     <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                     <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round">
                                     </g>
                                     <g id="SVGRepo_iconCarrier">
                                         <g>
                                             <g>
                                                 <g>
                                                     <g>
                                                         <g>
                                                             <g>
                                                                 <circle style="fill:#345065;" cx="148.5"
                                                                     cy="148.5" r="148.5"></circle>
                                                             </g>
                                                         </g>
                                                     </g>
                                                 </g>
                                             </g>
                                             <path style="fill:#243F4F;"
                                                 d="M264,148.5L67.438,208.223l88.783,88.579c68.287-3.498,124.388-53.124,137.752-118.329L264,148.5z">
                                             </path>
                                             <g>
                                                 <rect x="66" y="95.25" style="fill:#9ADAD9;" width="65.666"
                                                     height="33"></rect>
                                             </g>
                                             <g>
                                                 <rect x="66" y="119.75" style="fill:#FFFFFF;" width="115.5"
                                                     height="33"></rect>
                                             </g>
                                             <g>
                                                 <rect x="149.167" y="119.75" style="fill:#BDC3C7;" width="32.333"
                                                     height="33"></rect>
                                             </g>
                                             <g>
                                                 <path style="fill:#1ABC9C;"
                                                     d="M82.429,214.5h106.855c5.581,0,10.933-2.217,14.879-6.163L264,148.5H49.5l12.515,50.062 C64.357,207.929,72.773,214.5,82.429,214.5z">
                                                 </path>
                                             </g>
                                             <g>
                                                 <path style="fill:#17AB93;"
                                                     d="M149.167,148.5v66h40.117c5.581,0,10.933-2.217,14.879-6.163L264,148.5H149.167z">
                                                 </path>
                                             </g>
                                         </g>
                                     </g>
                                 </svg>
                             </span>
                             <!--end::Svg Icon-->
                         </span>
                         <span class="menu-title">Settings</span>
                         <span class="menu-arrow"></span>
                     </span>

                     <div
                         class="menu-sub menu-sub-accordion menu-active-bg {{ Request::routeIs('admin.settings.index', 'admin.policy.index') ? 'here show' : '' }}">

                         {{-- //setting.menu --}}
                         {{-- @if (Auth::guard('admin')->user()->can('setting.menu')) --}}
                         <div class="menu-item">
                             {{-- @if (Auth::guard('admin')->user()->can('all.setting')) --}}
                             <a class="menu-link {{ Route::is('admin.settings.index') ? 'active' : '' }}"
                                 href="{{ route('admin.settings.index') }}">
                                 <span class="menu-bullet">
                                     <span class="bullet bullet-dot"></span>
                                 </span>
                                 <span class="menu-title">Website Setting</span>
                             </a>
                             {{-- @endif --}}
                         </div>
                         {{-- @endif --}}



                         {{-- Terms & Policy --}}
                         {{-- @if (Auth::guard('admin')->user()->can('policy.menu')) --}}
                         <div class="menu-item">
                             {{-- @if (Auth::guard('admin')->user()->can('all.policy')) --}}
                             <a class="menu-link {{ Route::is('admin.policy.index') ? 'active' : '' }}"
                                 href="{{ route('admin.policy.index') }}">
                                 <span class="menu-bullet">
                                     <span class="bullet bullet-dot"></span>
                                 </span>
                                 <span class="menu-title">Terms & Policy</span>
                             </a>
                             {{-- @endif --}}
                         </div>
                         {{-- @endif --}}

                     </div>
                 </div>


                 {{-- Permission & Role  --}}
                 {{-- @if (Auth::guard('admin')->user()->can('role.menu')) --}}
                 <div data-kt-menu-trigger="click"
                     class="menu-item menu-accordion {{ Request::routeIs('all.role', 'all.permission') ? 'here show' : '' }}">

                     <span class="menu-link">
                         <span class="menu-icon">

                             <!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm002.svg-->
                             <span class="svg-icon svg-icon-2">
                                 <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                     xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 297 297"
                                     xml:space="preserve" fill="#000000">
                                     <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                     <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round">
                                     </g>
                                     <g id="SVGRepo_iconCarrier">
                                         <g>
                                             <g>
                                                 <g>
                                                     <g>
                                                         <g>
                                                             <g>
                                                                 <circle style="fill:#345065;" cx="148.5"
                                                                     cy="148.5" r="148.5"></circle>
                                                             </g>
                                                         </g>
                                                     </g>
                                                 </g>
                                             </g>
                                             <path style="fill:#243F4F;"
                                                 d="M264,148.5L67.438,208.223l88.783,88.579c68.287-3.498,124.388-53.124,137.752-118.329L264,148.5z">
                                             </path>
                                             <g>
                                                 <rect x="66" y="95.25" style="fill:#9ADAD9;" width="65.666"
                                                     height="33"></rect>
                                             </g>
                                             <g>
                                                 <rect x="66" y="119.75" style="fill:#FFFFFF;" width="115.5"
                                                     height="33"></rect>
                                             </g>
                                             <g>
                                                 <rect x="149.167" y="119.75" style="fill:#BDC3C7;" width="32.333"
                                                     height="33"></rect>
                                             </g>
                                             <g>
                                                 <path style="fill:#1ABC9C;"
                                                     d="M82.429,214.5h106.855c5.581,0,10.933-2.217,14.879-6.163L264,148.5H49.5l12.515,50.062 C64.357,207.929,72.773,214.5,82.429,214.5z">
                                                 </path>
                                             </g>
                                             <g>
                                                 <path style="fill:#17AB93;"
                                                     d="M149.167,148.5v66h40.117c5.581,0,10.933-2.217,14.879-6.163L264,148.5H149.167z">
                                                 </path>
                                             </g>
                                         </g>
                                     </g>
                                 </svg>
                             </span>
                             <!--end::Svg Icon-->

                         </span>

                         <span class="menu-title">Role & Permission</span>

                         <span class="menu-arrow"></span>

                     </span>

                     <div
                         class="menu-sub menu-sub-accordion menu-active-bg {{ Request::routeIs('all.role', 'all.permission') ? 'here show' : '' }}">

                         {{-- @if (Auth::guard('admin')->user()->can('role.menu')) --}}
                         <div class="menu-item">
                             {{-- @if (Auth::guard('admin')->user()->can('all.role')) --}}
                             <a class="menu-link {{ Route::is('all.role') ? 'active' : '' }}"
                                 href="{{ route('all.role') }}">
                                 <span class="menu-bullet">
                                     <span class="bullet bullet-dot"></span>
                                 </span>
                                 <span class="menu-title">Role</span>
                             </a>
                             {{-- @endif --}}
                         </div>
                         {{-- @endif

                             @if (Auth::guard('admin')->user()->can('permission.menu')) --}}
                         <div class="menu-item">
                             {{-- @if (Auth::guard('admin')->user()->can('all.permission')) --}}
                             <a class="menu-link {{ Route::is('all.permission') ? 'active' : '' }}"
                                 href="{{ route('all.permission') }}">
                                 <span class="menu-bullet">
                                     <span class="bullet bullet-dot"></span>
                                 </span>
                                 <span class="menu-title">Permission</span>
                             </a>
                             {{-- @endif --}}
                         </div>
                         {{-- @endif --}}

                     </div>
                 </div>

                 {{-- @endif --}}


             </div>
         </div>
     </div>
     <div class="aside-footer flex-column-auto pt-5 pb-7 px-5" id="kt_aside_footer">
         <form method="POST" action="{{ route('admin.logout') }}">
             <a href="{{ route('admin.logout') }}" class="btn btn-custom btn-primary w-100"
                 onclick="event.preventDefault();this.closest('form').submit();">
                 <span class="btn-label">
                     @csrf
                     {{ __('Log Out') }}
                 </span>
             </a>
         </form>
     </div>
 </div>
