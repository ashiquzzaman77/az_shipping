<x-admin-app-layout :title="'Admin Profile'">
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Toolbar-->
        
        <!--end::Toolbar-->

        <!--begin::Post-->
        <div class="post d-flex flex-column-fluid" id="kt_post">
            <!--begin::Container-->
            <div id="kt_content_container" class="container-xxl">

                <!--begin::Navbar-->
                @include('admin.pages.profile.top_navbar')
                <!--end::Navbar-->

                <!--begin::details View-->
                <div class="card">

                    <div class="card-body">
                        <!--begin::Modal body-->


                        <h2 class="fw-bolder mb-5">Update Password</h2>
                        <hr>
                        <!--begin::Form-->
                        <form id="kt_modal_update_password_form" class="form"
                            action="{{ route('admin.password.update.submit') }}" method="POST">

                            @csrf

                            <div class="row">

                                <div class="col-12 mt-3">
                                    <!--begin::Input group=-->
                                    <div class="fv-row mb-10">
                                        <label class="required form-label fs-6 mb-2">Current Password</label>
                                        <input
                                            class="form-control form-control-sm form-control-solid @error('old_password') is-invalid @enderror"
                                            type="password" placeholder="" name="old_password" autocomplete="off" />

                                        @error('old_password')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <!--end::Input group=-->
                                </div>

                                <div class="col-6">
                                    <!--begin::Input group-->
                                    <div class="mb-10 fv-row" data-kt-password-meter="true">
                                        <!--begin::Wrapper-->
                                        <div class="mb-1">
                                            <!--begin::Label-->
                                            <label class="form-label fw-bold fs-6 mb-2">New Password</label>
                                            <!--end::Label-->
                                            <!--begin::Input wrapper-->
                                            <div class="position-relative mb-3">
                                                <input
                                                    class="form-control form-control-sm form-control-solid @error('new_password') is-invalid @enderror"
                                                    type="password" placeholder="" name="new_password" autocomplete="off" />
                                                <span
                                                    class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2"
                                                    data-kt-password-meter-control="visibility">
                                                    <i class="bi bi-eye-slash fs-2"></i>
                                                    <i class="bi bi-eye fs-2 d-none"></i>
                                                </span>

                                                @error('new_password')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <!--end::Input wrapper-->
                                            <!--begin::Meter-->
                                            <div class="d-flex align-items-center mb-3"
                                                data-kt-password-meter-control="highlight">
                                                <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2">
                                                </div>
                                                <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2">
                                                </div>
                                                <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2">
                                                </div>
                                                <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px">
                                                </div>
                                            </div>
                                            <!--end::Meter-->
                                        </div>
                                        <!--end::Wrapper-->
                                        <!--begin::Hint-->
                                        <div class="text-muted">Use 8 or more characters with a mix of letters,
                                            numbers
                                            &amp; symbols.</div>
                                        <!--end::Hint-->
                                    </div>
                                    <!--end::Input group=-->
                                </div>

                                <div class="col-6">
                                    <!--begin::Input group=-->
                                    <div class="fv-row mb-10">
                                        <label class="form-label fw-bold fs-6 mb-2">Confirm New Password</label>
                                        <input class="form-control form-control-sm form-control-solid" type="password"
                                            placeholder="" name="new_password_confirmation" autocomplete="off" />
                                    </div>
                                    <!--end::Input group=-->
                                </div>

                                <div class="col-12">
                                    <!--begin::Actions-->
                                    <div class="float-end">
                                        <button type="submit" class="btn btn-primary btn-sm">
                                            <span class="indicator-label">Update Password</span>
                                        </button>
                                    </div>
                                    <!--end::Actions-->
                                </div>

                            </div>



                        </form>
                        <!--end::Form-->

                        <!--end::Modal body-->
                    </div>

                </div>
                <!--end::details View-->
                <!--begin::Row-->


            </div>
            <!--end::Container-->
        </div>
        <!--end::Post-->

    </div>
</x-admin-app-layout>
