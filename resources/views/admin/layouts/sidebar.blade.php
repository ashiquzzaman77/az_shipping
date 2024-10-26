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
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                        stroke-linejoin="round">
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

                         <span class="menu-title">SeaFarer Database</span>

                         <span class="menu-arrow"></span>

                     </span>

                     <div
                         class="menu-sub menu-sub-accordion menu-active-bg {{ Request::routeIs('admin.officer.index', 'admin.rating.index') ? 'here show' : '' }}">


                         {{-- Officres  --}}

                         @if (Auth::guard('admin')->user()->can('officer.menu'))
                             <div class="menu-item">
                                 @if (Auth::guard('admin')->user()->can('all.officer'))
                                     <a class="menu-link {{ Request::routeIs('admin.officer.index') ? 'active' : '' }}"
                                         href="{{ route('admin.officer.index') }}">
                                         <span class="menu-bullet">
                                             <span class="bullet bullet-dot"></span>
                                         </span>
                                         <span class="menu-title">Officers</span>
                                     </a>
                                 @endif
                             </div>
                         @endif

                         {{-- Rating  --}}
                         @if (Auth::guard('admin')->user()->can('rating.menu'))
                             <div class="menu-item">
                                 @if (Auth::guard('admin')->user()->can('all.rating'))
                                     <a class="menu-link {{ Request::routeIs('admin.rating.index') ? 'active' : '' }}"
                                         href="{{ route('admin.rating.index') }}">
                                         <span class="menu-bullet">
                                             <span class="bullet bullet-dot"></span>
                                         </span>
                                         <span class="menu-title">Rating</span>
                                     </a>
                                 @endif
                             </div>
                         @endif


                     </div>
                 </div>

                 {{-- Frontend Section  --}}

                 <div data-kt-menu-trigger="click"
                     class="menu-item menu-accordion {{ Request::routeIs('admin.job.index', 'admin.banner.index') ? 'here show' : '' }}">
                     <span class="menu-link">

                         <span class="menu-icon">
                             <!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm002.svg-->
                             <span class="svg-icon svg-icon-2">
                                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 297 297"
                                    xml:space="preserve" fill="#000000">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                        stroke-linejoin="round">
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
                         class="menu-sub menu-sub-accordion menu-active-bg {{ Request::routeIs('admin.job.index', 'admin.banner.index') ? 'here show' : '' }}">

                         @if (Auth::guard('admin')->user()->can('job.menu'))
                             <div class="menu-item">
                                 @if (Auth::guard('admin')->user()->can('all.job'))
                                     <a class="menu-link {{ Request::routeIs('admin.job.index') ? 'active' : '' }}"
                                         href="{{ route('admin.job.index') }}">
                                         <span class="menu-bullet">
                                             <span class="bullet bullet-dot"></span>
                                         </span>
                                         <span class="menu-title">Job Created</span>
                                     </a>
                                 @endif
                             </div>
                         @endif

                         {{-- Banner Section  --}}
                         @if (Auth::guard('admin')->user()->can('banner.menu'))
                             <div class="menu-item">
                                 @if (Auth::guard('admin')->user()->can('all.banner'))
                                     <a class="menu-link {{ Request::routeIs('admin.banner.index') ? 'active' : '' }}"
                                         href="{{ route('admin.banner.index') }}">
                                         <span class="menu-bullet">
                                             <span class="bullet bullet-dot"></span>
                                         </span>
                                         <span class="menu-title">Banner</span>
                                     </a>
                                 @endif
                             </div>
                         @endif


                     </div>
                 </div>

                 {{-- Site Content  --}}

                 {{-- <div data-kt-menu-trigger="click"
                     class="menu-item menu-accordion {{ Request::routeIs('admin.industry.index', 'admin.homepage.index', 'admin.about.index', 'admin.terms-and-condition.index', 'admin.privacy-policy.index', 'admin.common_banner.index') ? 'here show' : '' }}">

                     <span class="menu-link">
                         <span class="menu-icon">
                             <!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm002.svg-->
                             <span class="svg-icon svg-icon-2">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                     viewBox="0 0 24 24" fill="none">
                                     <path
                                         d="M21 10H13V11C13 11.6 12.6 12 12 12C11.4 12 11 11.6 11 11V10H3C2.4 10 2 10.4 2 11V13H22V11C22 10.4 21.6 10 21 10Z"
                                         fill="currentColor" />
                                     <path opacity="0.3"
                                         d="M12 12C11.4 12 11 11.6 11 11V3C11 2.4 11.4 2 12 2C12.6 2 13 2.4 13 3V11C13 11.6 12.6 12 12 12Z"
                                         fill="currentColor" />
                                     <path opacity="0.3"
                                         d="M18.1 21H5.9C5.4 21 4.9 20.6 4.8 20.1L3 13H21L19.2 20.1C19.1 20.6 18.6 21 18.1 21ZM13 18V15C13 14.4 12.6 14 12 14C11.4 14 11 14.4 11 15V18C11 18.6 11.4 19 12 19C12.6 19 13 18.6 13 18ZM17 18V15C17 14.4 16.6 14 16 14C15.4 14 15 14.4 15 15V18C15 18.6 15.4 19 16 19C16.6 19 17 18.6 17 18ZM9 18V15C9 14.4 8.6 14 8 14C7.4 14 7 14.4 7 15V18C7 18.6 7.4 19 8 19C8.6 19 9 18.6 9 18Z"
                                         fill="currentColor" />
                                 </svg>
                             </span>
                             <!--end::Svg Icon-->
                         </span>
                         <span class="menu-title">Site Contents</span>
                         <span class="menu-arrow"></span>
                     </span>

                     <div
                         class="menu-sub menu-sub-accordion menu-active-bg {{ Request::routeIs('admin.industry.index', 'admin.homepage.index', 'admin.about.index', 'admin.terms-and-condition.index', 'admin.privacy-policy.index', 'admin.common_banner.index') ? 'here show' : '' }}"> --}}

                 {{-- @if (Auth::guard('admin')->user()->can('industry.menu'))
                             <div class="menu-item">
                                 @if (Auth::guard('admin')->user()->can('all.industry'))
                                 @endif
                                 <a class="menu-link {{ Request::routeIs('admin.industry.index') ? 'active' : '' }}"
                                     href="{{ route('admin.industry.index') }}">
                                     <span class="menu-bullet">
                                         <span class="bullet bullet-dot"></span>
                                     </span>
                                     <span class="menu-title">Industry</span>
                                 </a>
                             </div>
                         @endif --}}

                 {{-- @if (Auth::guard('admin')->user()->can('homepage.menu'))
                             <div class="menu-item">
                                 @if (Auth::guard('admin')->user()->can('all.homepage'))
                                 @endif
                                 <a class="menu-link {{ Request::routeIs('admin.homepage.index') ? 'active' : '' }}"
                                     href="{{ route('admin.homepage.index') }}">
                                     <span class="menu-bullet">
                                         <span class="bullet bullet-dot"></span>
                                     </span>
                                     <span class="menu-title">HomePage</span>
                                 </a>
                             </div>
                         @endif --}}

                 {{-- @if (Auth::guard('admin')->user()->can('about.menu'))
                             <div class="menu-item">
                                 @if (Auth::guard('admin')->user()->can('all.about'))
                                 @endif
                                 <a class="menu-link {{ Request::routeIs('admin.about.index') ? 'active' : '' }}"
                                     href="{{ route('admin.about.index') }}">
                                     <span class="menu-bullet">
                                         <span class="bullet bullet-dot"></span>
                                     </span>
                                     <span class="menu-title">About</span>
                                 </a>
                             </div>
                         @endif --}}

                 {{-- @if (Auth::guard('admin')->user()->can('term.menu'))
                             <div class="menu-item">
                                 @if (Auth::guard('admin')->user()->can('all.term'))
                                 @endif
                                 <a class="menu-link {{ Request::routeIs('admin.terms-and-condition.index') ? 'active' : '' }}"
                                     href="{{ route('admin.terms-and-condition.index') }}">
                                     <span class="menu-bullet">
                                         <span class="bullet bullet-dot"></span>
                                     </span>
                                     <span class="menu-title">Terms & Condition</span>
                                 </a>
                             </div>
                         @endif --}}

                 {{-- @if (Auth::guard('admin')->user()->can('privacy.menu'))
                             <div class="menu-item">
                                 @if (Auth::guard('admin')->user()->can('all.privacy'))
                                 @endif
                                 <a class="menu-link {{ Request::routeIs('admin.privacy-policy.index') ? 'active' : '' }}"
                                     href="{{ route('admin.privacy-policy.index') }}">
                                     <span class="menu-bullet">
                                         <span class="bullet bullet-dot"></span>
                                     </span>
                                     <span class="menu-title">Privacy & Policy</span>
                                 </a>
                             </div>
                         @endif --}}

                 {{-- @if (Auth::guard('admin')->user()->can('common-banner.menu'))
                             <div class="menu-item">
                                 @if (Auth::guard('admin')->user()->can('all.common-banner'))
                                     <a class="menu-link {{ Request::routeIs('admin.common_banner.index') ? 'active' : '' }}"
                                         href="{{ route('admin.common_banner.index') }}">
                                         <span class="menu-bullet">
                                             <span class="bullet bullet-dot"></span>
                                         </span>
                                         <span class="menu-title">Common Banner</span>
                                     </a>
                                 @endif
                             </div>
                         @endif --}}

                 {{-- </div>
                 </div> --}}

                 {{-- Customer Support  --}}
                 {{-- <div data-kt-menu-trigger="click"
                     class="menu-item menu-accordion {{ Request::routeIs('admin.contacts.index', 'admin.faq_category.index', 'admin.faq.index') ? 'here show' : '' }}">
                     <span class="menu-link">

                         <span class="menu-icon">
                             <!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm002.svg-->
                             <span class="svg-icon svg-icon-2">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                     viewBox="0 0 24 24" fill="none">
                                     <path
                                         d="M21 10H13V11C13 11.6 12.6 12 12 12C11.4 12 11 11.6 11 11V10H3C2.4 10 2 10.4 2 11V13H22V11C22 10.4 21.6 10 21 10Z"
                                         fill="currentColor" />
                                     <path opacity="0.3"
                                         d="M12 12C11.4 12 11 11.6 11 11V3C11 2.4 11.4 2 12 2C12.6 2 13 2.4 13 3V11C13 11.6 12.6 12 12 12Z"
                                         fill="currentColor" />
                                     <path opacity="0.3"
                                         d="M18.1 21H5.9C5.4 21 4.9 20.6 4.8 20.1L3 13H21L19.2 20.1C19.1 20.6 18.6 21 18.1 21ZM13 18V15C13 14.4 12.6 14 12 14C11.4 14 11 14.4 11 15V18C11 18.6 11.4 19 12 19C12.6 19 13 18.6 13 18ZM17 18V15C17 14.4 16.6 14 16 14C15.4 14 15 14.4 15 15V18C15 18.6 15.4 19 16 19C16.6 19 17 18.6 17 18ZM9 18V15C9 14.4 8.6 14 8 14C7.4 14 7 14.4 7 15V18C7 18.6 7.4 19 8 19C8.6 19 9 18.6 9 18Z"
                                         fill="currentColor" />
                                 </svg>
                             </span>
                             <!--end::Svg Icon-->
                         </span>

                         <span class="menu-title">Customer Support</span>

                         <span class="menu-arrow"></span>

                     </span>
                     <div
                         class="menu-sub menu-sub-accordion menu-active-bg {{ Request::routeIs('admin.contacts.index', 'admin.faq_category.index', 'admin.faq.index') ? 'here show' : '' }}">


                         @if (Auth::guard('admin')->user()->can('contact-message.menu'))
                             <div class="menu-item">
                                 @if (Auth::guard('admin')->user()->can('all.contact-message'))
                                     <a class="menu-link {{ Route::is('admin.contacts.index') ? 'active' : '' }}"
                                         href="{{ route('admin.contacts.index') }}">
                                         <span class="menu-bullet">
                                             <span class="bullet bullet-dot"></span>
                                         </span>
                                         <span class="menu-title">Contact Messages</span>
                                     </a>
                                 @endif
                             </div>
                         @endif

                         @if (Auth::guard('admin')->user()->can('faq-category.menu'))
                             <div class="menu-item">
                                 @if (Auth::guard('admin')->user()->can('all.faq-category'))
                                     <a class="menu-link {{ Route::is('admin.faq_category.index') ? 'active' : '' }}"
                                         href="{{ route('admin.faq_category.index') }}">
                                         <span class="menu-bullet">
                                             <span class="bullet bullet-dot"></span>
                                         </span>
                                         <span class="menu-title">FAQ Category</span>
                                     </a>
                                 @endif
                             </div>
                         @endif

                         @if (Auth::guard('admin')->user()->can('faq.menu'))
                             <div class="menu-item">
                                 @if (Auth::guard('admin')->user()->can('all.faq'))
                                     <a class="menu-link {{ Route::is('admin.faq.index') ? 'active' : '' }}"
                                         href="{{ route('admin.faq.index') }}">
                                         <span class="menu-bullet">
                                             <span class="bullet bullet-dot"></span>
                                         </span>
                                         <span class="menu-title">FAQ Lists</span>
                                     </a>
                                 @endif
                             </div>
                         @endif

                     </div>
                 </div> --}}

                 {{-- Employee Management --}}
                 @if (Auth::guard('admin')->user()->can('admin.menu'))
                     <div data-kt-menu-trigger="click"
                         class="menu-item menu-accordion {{ Request::routeIs('all.admin.permission', 'admin.user-management.index') ? 'here show' : '' }}">

                         <span class="menu-link">

                             <span class="menu-icon">
                                 <!--begin::Svg Icon | path: icons/duotune/general/gen051.svg-->
                                 <span class="svg-icon svg-icon-2">
                                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 297 297"
                                        xml:space="preserve" fill="#000000">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                            stroke-linejoin="round">
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
                                </span>ss="svg-icon svg-icon-2">
                                     <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                         viewBox="0 0 24 24" fill="none">
                                         <path opacity="0.3"
                                             d="M20.5543 4.37824L12.1798 2.02473C12.0626 1.99176 11.9376 1.99176 11.8203 2.02473L3.44572 4.37824C3.18118 4.45258 3 4.6807 3 4.93945V13.569C3 14.6914 3.48509 15.8404 4.4417 16.984C5.17231 17.8575 6.18314 18.7345 7.446 19.5909C9.56752 21.0295 11.6566 21.912 11.7445 21.9488C11.8258 21.9829 11.9129 22 12.0001 22C12.0872 22 12.1744 21.983 12.2557 21.9488C12.3435 21.912 14.4326 21.0295 16.5541 19.5909C17.8169 18.7345 18.8277 17.8575 19.5584 16.984C20.515 15.8404 21 14.6914 21 13.569V4.93945C21 4.6807 20.8189 4.45258 20.5543 4.37824Z"
                                             fill="currentColor" />
                                         <path
                                             d="M14.854 11.321C14.7568 11.2282 14.6388 11.1818 14.4998 11.1818H14.3333V10.2272C14.3333 9.61741 14.1041 9.09378 13.6458 8.65628C13.1875 8.21876 12.639 8 12 8C11.361 8 10.8124 8.21876 10.3541 8.65626C9.89574 9.09378 9.66663 9.61739 9.66663 10.2272V11.1818H9.49999C9.36115 11.1818 9.24306 11.2282 9.14583 11.321C9.0486 11.4138 9 11.5265 9 11.6591V14.5227C9 14.6553 9.04862 14.768 9.14583 14.8609C9.24306 14.9536 9.36115 15 9.49999 15H14.5C14.6389 15 14.7569 14.9536 14.8542 14.8609C14.9513 14.768 15 14.6553 15 14.5227V11.6591C15.0001 11.5265 14.9513 11.4138 14.854 11.321ZM13.3333 11.1818H10.6666V10.2272C10.6666 9.87594 10.7969 9.57597 11.0573 9.32743C11.3177 9.07886 11.6319 8.9546 12 8.9546C12.3681 8.9546 12.6823 9.07884 12.9427 9.32743C13.2031 9.57595 13.3333 9.87594 13.3333 10.2272V11.1818Z"
                                             fill="currentColor" />
                                     </svg>
                                 </span>
                                 <!--end::Svg Icon-->
                             </span>

                             <span class="menu-title">Employee Management</span>

                             <span class="menu-arrow"></span>

                         </span>

                         <div
                             class="menu-sub menu-sub-accordion menu-active-bg {{ Request::routeIs('all.admin.permission', 'admin.team.index') ? 'here show' : '' }}">

                             @if (Auth::guard('admin')->user()->can('admin.menu'))
                                 <div class="menu-item">
                                     @if (Auth::guard('admin')->user()->can('all.admin'))
                                         <a class="menu-link {{ Route::is('all.admin.permission') ? 'active' : '' }}"
                                             href="{{ route('all.admin.permission') }}">
                                             <span class="menu-bullet">
                                                 <span class="bullet bullet-dot"></span>
                                             </span>
                                             <span class="menu-title">Admin</span>
                                         </a>
                                     @endif
                                 </div>
                             @endif

                             @if (Auth::guard('admin')->user()->can('team.menu'))
                                 <div class="menu-item">
                                     @if (Auth::guard('admin')->user()->can('all.team'))
                                         <a class="menu-link {{ Route::is('admin.team.index') ? 'active' : '' }}"
                                             href="{{ route('admin.team.index') }}">
                                             <span class="menu-bullet">
                                                 <span class="bullet bullet-dot"></span>
                                             </span>
                                             <span class="menu-title">Team Member</span>
                                         </a>
                                     @endif
                                 </div>
                             @endif

                         </div>
                     </div>
                 @endif

                 {{-- Setting  --}}
                 <div data-kt-menu-trigger="click"
                     class="menu-item menu-accordion {{ Request::routeIs('admin.settings.index') ? 'here show' : '' }}">

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
                         class="menu-sub menu-sub-accordion menu-active-bg {{ Request::routeIs('admin.settings.index') ? 'here show' : '' }}">

                         @if (Auth::guard('admin')->user()->can('setting.menu'))
                             <div class="menu-item">
                                 @if (Auth::guard('admin')->user()->can('all.setting'))
                                     <a class="menu-link {{ Route::is('admin.settings.index') ? 'active' : '' }}"
                                         href="{{ route('admin.settings.index') }}">
                                         <span class="menu-bullet">
                                             <span class="bullet bullet-dot"></span>
                                         </span>
                                         <span class="menu-title">Website Setting</span>
                                     </a>
                                 @endif
                             </div>
                         @endif

                     </div>
                 </div>

                 {{-- Apply Post --}}
                 @if (Auth::guard('admin')->user()->can('apply_post.menu'))
                     <div class="menu-item">

                         <a class="menu-link {{ Route::is('admin.apply.post') ? 'active' : '' }}"
                             href="{{ route('admin.apply.post') }}">
                             <span class="menu-icon">
                                 <span class="svg-icon svg-icon-2">
                                     <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                         xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 297 297"
                                         xml:space="preserve" fill="#000000">
                                         <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                         <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                             stroke-linejoin="round">
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
                             <span class="menu-title">Apply Post</span>
                         </a>

                     </div>
                 @endif


                 {{-- Permission & Role  --}}
                 @if (Auth::guard('admin')->user()->can('role.menu'))
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
                                         <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                             stroke-linejoin="round">
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

                             @if (Auth::guard('admin')->user()->can('role.menu'))
                                 <div class="menu-item">
                                     @if (Auth::guard('admin')->user()->can('all.role'))
                                         <a class="menu-link {{ Route::is('all.role') ? 'active' : '' }}"
                                             href="{{ route('all.role') }}">
                                             <span class="menu-bullet">
                                                 <span class="bullet bullet-dot"></span>
                                             </span>
                                             <span class="menu-title">Role</span>
                                         </a>
                                     @endif
                                 </div>
                             @endif

                             @if (Auth::guard('admin')->user()->can('permission.menu'))
                                 <div class="menu-item">
                                     @if (Auth::guard('admin')->user()->can('all.permission'))
                                         <a class="menu-link {{ Route::is('all.permission') ? 'active' : '' }}"
                                             href="{{ route('all.permission') }}">
                                             <span class="menu-bullet">
                                                 <span class="bullet bullet-dot"></span>
                                             </span>
                                             <span class="menu-title">Permission</span>
                                         </a>
                                     @endif
                                 </div>
                             @endif

                         </div>
                     </div>

                 @endif


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
