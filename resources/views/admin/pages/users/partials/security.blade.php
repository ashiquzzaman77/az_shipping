<div class="card pt-4 mb-6 mb-xl-9">
    <!--begin::Card header-->
    <div class="card-header border-0">
        <!--begin::Card title-->
        <div class="card-title">
            <h2>Profile</h2>
        </div>
        <!--end::Card title-->
    </div>
    <!--end::Card header-->
    <!--begin::Card body-->
    <div class="card-body pt-0 pb-5">
        <!--begin::Table wrapper-->
        <div class="table-responsive">
            <!--begin::Table-->
            <table class="table align-middle table-row-dashed gy-5" id="kt_table_users_login_session">
                <!--begin::Table body-->
                <tbody class="fs-6 fw-bold text-gray-600">
                    <tr>
                        <td>Email</td>
                        <td>{{ $user->email }}</td>
                        <td class="text-end">
                            <button type="button" class="btn btn-icon btn-active-light-primary w-30px h-30px ms-auto"
                                data-bs-toggle="modal" data-bs-target="#update_email_{{ $user->id }}">
                                <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                                <span class="svg-icon svg-icon-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none">
                                        <path opacity="0.3"
                                            d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z"
                                            fill="currentColor" />
                                        <path
                                            d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z"
                                            fill="currentColor" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td>*************</td>
                        <td class="text-end">
                            <button type="button" class="btn btn-icon btn-active-light-primary w-30px h-30px ms-auto"
                                data-bs-toggle="modal" data-bs-target="#update_password_{{ $user->id }}">
                                <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                                <span class="svg-icon svg-icon-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none">
                                        <path opacity="0.3"
                                            d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z"
                                            fill="currentColor" />
                                        <path
                                            d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z"
                                            fill="currentColor" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>Role</td>
                        <td>
                            @foreach ($user->getRoleNames() as $role)
                                <!--begin::Badge-->
                                <div class="badge badge-lg badge-light-primary d-inline">{{ $role }}</div>
                                <!--begin::Badge-->
                            @endforeach
                        </td>
                        <td class="text-end">
                            <button type="button" class="btn btn-icon btn-active-light-primary w-30px h-30px ms-auto"
                                data-bs-toggle="modal" data-bs-target="#update_role_{{ $user->id }}">
                                <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                                <span class="svg-icon svg-icon-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none">
                                        <path opacity="0.3"
                                            d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z"
                                            fill="currentColor" />
                                        <path
                                            d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z"
                                            fill="currentColor" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </button>
                        </td>
                    </tr>
                </tbody>
                <!--end::Table body-->
            </table>
            <!--end::Table-->
        </div>
        <!--end::Table wrapper-->
    </div>
    <!--end::Card body-->
</div>
<!--end::Card-->
{{-- <!--begin::Card-->
<div class="card pt-4 mb-6 mb-xl-9">
    <!--begin::Card header-->
    <div class="card-header border-0">
        <!--begin::Card title-->
        <div class="card-title flex-column">
            <h2 class="mb-1">Two Step Authentication</h2>
            <div class="fs-6 fw-bold text-muted">Keep your account extra secure with a second
                authentication step.</div>
        </div>
        <!--end::Card title-->
        <!--begin::Card toolbar-->
        <div class="card-toolbar">
            <!--begin::Add-->
            <button type="button" class="btn btn-light-primary btn-sm" data-kt-menu-trigger="click"
                data-kt-menu-placement="bottom-end">
                <!--begin::Svg Icon | path: icons/duotune/technology/teh004.svg-->
                <span class="svg-icon svg-icon-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none">
                        <path opacity="0.3"
                            d="M21 10.7192H3C2.4 10.7192 2 11.1192 2 11.7192C2 12.3192 2.4 12.7192 3 12.7192H6V14.7192C6 18.0192 8.7 20.7192 12 20.7192C15.3 20.7192 18 18.0192 18 14.7192V12.7192H21C21.6 12.7192 22 12.3192 22 11.7192C22 11.1192 21.6 10.7192 21 10.7192Z"
                            fill="currentColor" />
                        <path
                            d="M11.6 21.9192C11.4 21.9192 11.2 21.8192 11 21.7192C10.6 21.4192 10.5 20.7191 10.8 20.3191C11.7 19.1191 12.3 17.8191 12.7 16.3191C12.8 15.8191 13.4 15.4192 13.9 15.6192C14.4 15.7192 14.8 16.3191 14.6 16.8191C14.2 18.5191 13.4 20.1192 12.4 21.5192C12.2 21.7192 11.9 21.9192 11.6 21.9192ZM8.7 19.7192C10.2 18.1192 11 15.9192 11 13.7192V8.71917C11 8.11917 11.4 7.71917 12 7.71917C12.6 7.71917 13 8.11917 13 8.71917V13.0192C13 13.6192 13.4 14.0192 14 14.0192C14.6 14.0192 15 13.6192 15 13.0192V8.71917C15 7.01917 13.7 5.71917 12 5.71917C10.3 5.71917 9 7.01917 9 8.71917V13.7192C9 15.4192 8.4 17.1191 7.2 18.3191C6.8 18.7191 6.9 19.3192 7.3 19.7192C7.5 19.9192 7.7 20.0192 8 20.0192C8.3 20.0192 8.5 19.9192 8.7 19.7192ZM6 16.7192C6.5 16.7192 7 16.2192 7 15.7192V8.71917C7 8.11917 7.1 7.51918 7.3 6.91918C7.5 6.41918 7.2 5.8192 6.7 5.6192C6.2 5.4192 5.59999 5.71917 5.39999 6.21917C5.09999 7.01917 5 7.81917 5 8.71917V15.7192V15.8191C5 16.3191 5.5 16.7192 6 16.7192ZM9 4.71917C9.5 4.31917 10.1 4.11918 10.7 3.91918C11.2 3.81918 11.5 3.21917 11.4 2.71917C11.3 2.21917 10.7 1.91916 10.2 2.01916C9.4 2.21916 8.59999 2.6192 7.89999 3.1192C7.49999 3.4192 7.4 4.11916 7.7 4.51916C7.9 4.81916 8.2 4.91918 8.5 4.91918C8.6 4.91918 8.8 4.81917 9 4.71917ZM18.2 18.9192C18.7 17.2192 19 15.5192 19 13.7192V8.71917C19 5.71917 17.1 3.1192 14.3 2.1192C13.8 1.9192 13.2 2.21917 13 2.71917C12.8 3.21917 13.1 3.81916 13.6 4.01916C15.6 4.71916 17 6.61917 17 8.71917V13.7192C17 15.3192 16.8 16.8191 16.3 18.3191C16.1 18.8191 16.4 19.4192 16.9 19.6192C17 19.6192 17.1 19.6192 17.2 19.6192C17.7 19.6192 18 19.3192 18.2 18.9192Z"
                            fill="currentColor" />
                    </svg>
                </span>
                <!--end::Svg Icon-->Add Authentication Step</button>
            <!--begin::Menu-->
            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-6 w-200px py-4"
                data-kt-menu="true">
                <!--begin::Menu item-->
                <div class="menu-item px-3">
                    <a href="#" class="menu-link px-3" data-bs-toggle="modal"
                        data-bs-target="#kt_modal_add_auth_app">Use authenticator app</a>
                </div>
                <!--end::Menu item-->
                <!--begin::Menu item-->
                <div class="menu-item px-3">
                    <a href="#" class="menu-link px-3" data-bs-toggle="modal"
                        data-bs-target="#kt_modal_add_one_time_password">Enable one-time
                        password</a>
                </div>
                <!--end::Menu item-->
            </div>
            <!--end::Menu-->
            <!--end::Add-->
        </div>
        <!--end::Card toolbar-->
    </div>
    <!--end::Card header-->
    <!--begin::Card body-->
    <div class="card-body pb-5">
        <!--begin::Item-->
        <div class="d-flex flex-stack">
            <!--begin::Content-->
            <div class="d-flex flex-column">
                <span>SMS</span>
                <span class="text-muted fs-6">+61 412 345 678</span>
            </div>
            <!--end::Content-->
            <!--begin::Action-->
            <div class="d-flex justify-content-end align-items-center">
                <!--begin::Button-->
                <button type="button" class="btn btn-icon btn-active-light-primary w-30px h-30px ms-auto me-5"
                    data-bs-toggle="modal" data-bs-target="#kt_modal_add_one_time_password">
                    <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                    <span class="svg-icon svg-icon-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none">
                            <path opacity="0.3"
                                d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z"
                                fill="currentColor" />
                            <path
                                d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z"
                                fill="currentColor" />
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                </button>
                <!--end::Button-->
                <!--begin::Button-->
                <button type="button" class="btn btn-icon btn-active-light-primary w-30px h-30px ms-auto"
                    id="kt_users_delete_two_step">
                    <!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
                    <span class="svg-icon svg-icon-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none">
                            <path
                                d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z"
                                fill="currentColor" />
                            <path opacity="0.5"
                                d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z"
                                fill="currentColor" />
                            <path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z"
                                fill="currentColor" />
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                </button>
                <!--end::Button-->
            </div>
            <!--end::Action-->
        </div>
        <!--end::Item-->
        <!--begin:Separator-->
        <div class="separator separator-dashed my-5"></div>
        <!--end:Separator-->
        <!--begin::Disclaimer-->
        <div class="text-gray-600">If you lose your mobile device or security key, you can
            <a href='#' class="me-1">generate a backup code</a>to sign in to your
            account.
        </div>
        <!--end::Disclaimer-->
    </div>
    <!--end::Card body-->
</div>
<!--end::Card-->
<!--begin::Card-->
<div class="card pt-4 mb-6 mb-xl-9">
    <!--begin::Card header-->
    <div class="card-header border-0">
        <!--begin::Card title-->
        <div class="card-title flex-column">
            <h2>Email Notifications</h2>
            <div class="fs-6 fw-bold text-muted">Choose what messages you’d like to receive for
                each of your accounts.</div>
        </div>
        <!--end::Card title-->
    </div>
    <!--end::Card header-->
    <!--begin::Card body-->
    <div class="card-body">
        <!--begin::Form-->
        <form class="form" id="kt_users_email_notification_form">
            <!--begin::Item-->
            <div class="d-flex">
                <!--begin::Checkbox-->
                <div class="form-check form-check-custom form-check-solid">
                    <!--begin::Input-->
                    <input class="form-check-input me-3" name="email_notification_0" type="checkbox" value="0"
                        id="kt_modal_update_email_notification_0" checked='checked' />
                    <!--end::Input-->
                    <!--begin::Label-->
                    <label class="form-check-label" for="kt_modal_update_email_notification_0">
                        <div class="fw-bolder">Successful Payments</div>
                        <div class="text-gray-600">Receive a notification for every successful
                            payment.</div>
                    </label>
                    <!--end::Label-->
                </div>
                <!--end::Checkbox-->
            </div>
            <!--end::Item-->
            <div class='separator separator-dashed my-5'></div>
            <!--begin::Item-->
            <div class="d-flex">
                <!--begin::Checkbox-->
                <div class="form-check form-check-custom form-check-solid">
                    <!--begin::Input-->
                    <input class="form-check-input me-3" name="email_notification_1" type="checkbox" value="1"
                        id="kt_modal_update_email_notification_1" />
                    <!--end::Input-->
                    <!--begin::Label-->
                    <label class="form-check-label" for="kt_modal_update_email_notification_1">
                        <div class="fw-bolder">Payouts</div>
                        <div class="text-gray-600">Receive a notification for every initiated
                            payout.</div>
                    </label>
                    <!--end::Label-->
                </div>
                <!--end::Checkbox-->
            </div>
            <!--end::Item-->
            <div class='separator separator-dashed my-5'></div>
            <!--begin::Item-->
            <div class="d-flex">
                <!--begin::Checkbox-->
                <div class="form-check form-check-custom form-check-solid">
                    <!--begin::Input-->
                    <input class="form-check-input me-3" name="email_notification_2" type="checkbox" value="2"
                        id="kt_modal_update_email_notification_2" />
                    <!--end::Input-->
                    <!--begin::Label-->
                    <label class="form-check-label" for="kt_modal_update_email_notification_2">
                        <div class="fw-bolder">Application fees</div>
                        <div class="text-gray-600">Receive a notification each time you collect a
                            fee from an account.</div>
                    </label>
                    <!--end::Label-->
                </div>
                <!--end::Checkbox-->
            </div>
            <!--end::Item-->
            <div class='separator separator-dashed my-5'></div>
            <!--begin::Item-->
            <div class="d-flex">
                <!--begin::Checkbox-->
                <div class="form-check form-check-custom form-check-solid">
                    <!--begin::Input-->
                    <input class="form-check-input me-3" name="email_notification_3" type="checkbox" value="3"
                        id="kt_modal_update_email_notification_3" checked='checked' />
                    <!--end::Input-->
                    <!--begin::Label-->
                    <label class="form-check-label" for="kt_modal_update_email_notification_3">
                        <div class="fw-bolder">Disputes</div>
                        <div class="text-gray-600">Receive a notification if a payment is disputed
                            by a customer and for dispute resolutions.</div>
                    </label>
                    <!--end::Label-->
                </div>
                <!--end::Checkbox-->
            </div>
            <!--end::Item-->
            <div class='separator separator-dashed my-5'></div>
            <!--begin::Item-->
            <div class="d-flex">
                <!--begin::Checkbox-->
                <div class="form-check form-check-custom form-check-solid">
                    <!--begin::Input-->
                    <input class="form-check-input me-3" name="email_notification_4" type="checkbox" value="4"
                        id="kt_modal_update_email_notification_4" checked='checked' />
                    <!--end::Input-->
                    <!--begin::Label-->
                    <label class="form-check-label" for="kt_modal_update_email_notification_4">
                        <div class="fw-bolder">Payment reviews</div>
                        <div class="text-gray-600">Receive a notification if a payment is marked
                            as an elevated risk.</div>
                    </label>
                    <!--end::Label-->
                </div>
                <!--end::Checkbox-->
            </div>
            <!--end::Item-->
            <div class='separator separator-dashed my-5'></div>
            <!--begin::Item-->
            <div class="d-flex">
                <!--begin::Checkbox-->
                <div class="form-check form-check-custom form-check-solid">
                    <!--begin::Input-->
                    <input class="form-check-input me-3" name="email_notification_5" type="checkbox" value="5"
                        id="kt_modal_update_email_notification_5" />
                    <!--end::Input-->
                    <!--begin::Label-->
                    <label class="form-check-label" for="kt_modal_update_email_notification_5">
                        <div class="fw-bolder">Mentions</div>
                        <div class="text-gray-600">Receive a notification if a teammate mentions
                            you in a note.</div>
                    </label>
                    <!--end::Label-->
                </div>
                <!--end::Checkbox-->
            </div>
            <!--end::Item-->
            <div class='separator separator-dashed my-5'></div>
            <!--begin::Item-->
            <div class="d-flex">
                <!--begin::Checkbox-->
                <div class="form-check form-check-custom form-check-solid">
                    <!--begin::Input-->
                    <input class="form-check-input me-3" name="email_notification_6" type="checkbox" value="6"
                        id="kt_modal_update_email_notification_6" />
                    <!--end::Input-->
                    <!--begin::Label-->
                    <label class="form-check-label" for="kt_modal_update_email_notification_6">
                        <div class="fw-bolder">Invoice Mispayments</div>
                        <div class="text-gray-600">Receive a notification if a customer sends an
                            incorrect amount to pay their invoice.</div>
                    </label>
                    <!--end::Label-->
                </div>
                <!--end::Checkbox-->
            </div>
            <!--end::Item-->
            <div class='separator separator-dashed my-5'></div>
            <!--begin::Item-->
            <div class="d-flex">
                <!--begin::Checkbox-->
                <div class="form-check form-check-custom form-check-solid">
                    <!--begin::Input-->
                    <input class="form-check-input me-3" name="email_notification_7" type="checkbox" value="7"
                        id="kt_modal_update_email_notification_7" />
                    <!--end::Input-->
                    <!--begin::Label-->
                    <label class="form-check-label" for="kt_modal_update_email_notification_7">
                        <div class="fw-bolder">Webhooks</div>
                        <div class="text-gray-600">Receive notifications about consistently
                            failing webhook endpoints.</div>
                    </label>
                    <!--end::Label-->
                </div>
                <!--end::Checkbox-->
            </div>
            <!--end::Item-->
            <div class='separator separator-dashed my-5'></div>
            <!--begin::Item-->
            <div class="d-flex">
                <!--begin::Checkbox-->
                <div class="form-check form-check-custom form-check-solid">
                    <!--begin::Input-->
                    <input class="form-check-input me-3" name="email_notification_8" type="checkbox" value="8"
                        id="kt_modal_update_email_notification_8" />
                    <!--end::Input-->
                    <!--begin::Label-->
                    <label class="form-check-label" for="kt_modal_update_email_notification_8">
                        <div class="fw-bolder">Trial</div>
                        <div class="text-gray-600">Receive helpful tips when you try out our
                            products.</div>
                    </label>
                    <!--end::Label-->
                </div>
                <!--end::Checkbox-->
            </div>
            <!--end::Item-->
            <!--begin::Action buttons-->
            <div class="d-flex justify-content-end align-items-center mt-12">
                <!--begin::Button-->
                <button type="button" class="btn btn-light me-5"
                    id="kt_users_email_notification_cancel">Cancel</button>
                <!--end::Button-->
                <!--begin::Button-->
                <button type="button" class="btn btn-primary" id="kt_users_email_notification_submit">
                    <span class="indicator-label">Save</span>
                    <span class="indicator-progress">Please wait...
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                </button>
                <!--end::Button-->
            </div>
            <!--begin::Action buttons-->
        </form>
        <!--end::Form-->
    </div>
    <!--end::Card body-->
    <!--begin::Card footer-->
    <!--end::Card footer-->
</div> --}}
