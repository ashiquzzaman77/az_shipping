<x-admin-guest-layout>
    <!--begin::Authentication - Confirm-Password -->
    <div class="d-flex flex-column flex-column-fluid bgi-position-y-bottom position-x-center bgi-no-repeat bgi-size-contain bgi-attachment-fixed"
        style="background-image: url({{ asset('admin/assets/media/illustrations/sketchy-1/14.png') }}">
        <!--begin::Content-->
        <div class="d-flex flex-center flex-column flex-column-fluid p-10 pb-lg-20">
            <!--begin::Logo-->
            <a href="../../demo1/dist/index.html" class="mb-12">
                <img alt="Logo" src="{{ asset('admin/assets/media/logos/logo-1.svg') }}" class="h-40px" />
            </a>
            <!--end::Logo-->
            <!--begin::Wrapper-->
            <div class="w-lg-500px bg-body rounded shadow-sm p-10 p-lg-15 mx-auto">

                <!--begin::Form-->
                <form class="form w-100" action="{{ route('admin.password.confirm') }}" method="POST">
                    @csrf

                    <!--begin::Heading-->
                    <div class="text-center mb-10">
                        <!--begin::Title-->
                        <h1 class="text-dark mb-3">Confirm Password</h1>
                        <!--end::Title-->
                    </div>
                    <!--begin::Heading-->
                    <!--begin::Input group-->
                    <div class="fv-row mb-10">
                        <!--begin::Label-->
                        <x-metronic.label
                            class="form-label fs-6 fw-bolder text-dark">{{ __('Password') }}</x-metronic.label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <x-metronic.input type="password" name="password" class="form-control form-control-lg"
                            placeholder="Enter your password" required
                            autocomplete="current-password"></x-metronic.input>
                        <!--end::Input-->
                    </div>
                    <!--end::Input group-->

                    <!--begin::Actions-->
                    <div class="text-center">
                        <!--begin::Submit button-->
                        <x-metronic.button type="submit" class="primary w-100 mb-5">
                            <span class="indicator-label"> {{ __('Confirm') }}</span>
                        </x-metronic.button>
                        <!--end::Submit button-->
                    </div>
                    <!--end::Actions-->
                </form>
                <!--end::Form-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Content-->
        <!--begin::Footer-->
        <div class="d-flex flex-center flex-column-auto p-10">
            <!--begin::Links-->
            <div class="d-flex align-items-center fw-bold fs-6">
                <a href="https://keenthemes.com" class="text-muted text-hover-primary px-2">About</a>
                <a href="mailto:support@keenthemes.com" class="text-muted text-hover-primary px-2">Contact</a>
                <a href="https://1.envato.market/EA4JP" class="text-muted text-hover-primary px-2">Contact Us</a>
            </div>
            <!--end::Links-->
        </div>
        <!--end::Footer-->
    </div>
    <!--end::Authentication - Confirm-Password-->
</x-admin-guest-layout>
