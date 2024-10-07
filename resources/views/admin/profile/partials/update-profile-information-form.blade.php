<!--begin::Profile Information-->
<div class="card card-flash">
    <!--begin::Card header-->
    <div class="card-header border-0 cursor-pointer">
        <div class="card-title m-0">
            <h3 class="fw-bolder m-0"> {{ __('Profile Information') }} </h3>
        </div>
    </div>
    <!--end::Card header-->
    <form id="send-verification" method="post" action="{{ route('admin.verification.send') }}">
        @csrf
    </form>
    <!--begin::Content-->
    <!--begin::Form-->
    <form class="form" method="post" action="{{ route('admin.profile.update') }}">
        @csrf
        @method('patch')

        <!--begin::Card body-->
        <div class="card-body border-top p-9">
            <!--begin::Input group-->
            <div class="row fv-row">
                <div class="mb-10 col-lg-6">
                    {{-- <!--begin::Label-->
                    <label class="required form-label">{{ __('Name') }}</label>
                    <!--end::Label-->
                    <!--begin::Input-->
                    <input type="text" name="name" class="form-control mb-2" placeholder="Name"
                        value="{{ old('name', $user->name) }}" />
                    <!--end::Input-->
                    <!--begin::Error-->
                    <x-input-error class="mt-2" :messages="$errors->get('name')" />
                    <!--end::Error--> --}}

                    <x-metronic.label for="name"
                        class="form-label">{{ __('Name') }}</x-metronic.label>
                    <x-metronic.input id="name" type="text" name="name" :value="old('name', $user->name)"
                        placeholder="Enter Your name"></x-metronic.input>
                </div>
                <!--end::Input group-->
                <!--begin::Input group-->
                <div class="mb-10 col-lg-6">
                    <x-metronic.label class="form-label">{{ __('Email') }}</x-metronic.label>
                    <!--end::Label-->
                    <!--begin::Input-->
                    <x-metronic.input type="email" name="email"
                        class="form-control form-control-lg form-control-solid" placeholder="Enter your email address"
                        value="{{ old('email',$user->email) }}" autocomplete="off"></x-metronic.input>

                    @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && !$user->hasVerifiedEmail())
                        <div>
                            <p class="small mt-2 text-secondary">
                                {{ __('Your email address is unverified.') }}

                                <button form="send-verification"
                                    class="text-decoration-underline small text-secondary hover:text-dark rounded-0 focus:outline-none"
                                    style="border: none; box-shadow: none;" onclick="this.blur();">
                                    {{ __('Click here to re-send the verification email.') }}
                                </button>
                            </p>

                            @if (session('status') === 'verification-link-sent')
                                <p class="mt-2 fw-semibold small text-success">
                                    {{ __('A new verification link has been sent to your email address.') }}
                                </p>
                            @endif
                        </div>
                    @endif

                </div>
                <!--end::Input group-->
            </div>
        </div>
        <!--end::Card body-->
        <!--begin::Card footer-->
        <div class="card-footer d-flex justify-content-end py-4 px-9">
            <x-metronic.button type="submit" class="primary">
                {{ __('Submit') }}
            </x-metronic.button>
        </div>
        <!--end::Card footer-->
    </form>
    <!--end::Form-->
    <!--end::Content-->
</div>
<!--end::Profile Information-->
