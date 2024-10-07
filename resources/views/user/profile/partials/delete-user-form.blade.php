<div class="card card-flash mt-5">
    <!--begin::Card header-->
    <div class="card-header border-0 cursor-pointer">
        <div class="card-title m-0">
            <div class="row">
                <div class="col-12">
                    <h3 class="fw-bolder m-0"> {{ __('Delete Account') }} </h3>
                </div>
                <div class="col-12">
                    <p class="mt-1 mb-0 text-sm text-gray-600 fs-7">
                        {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.') }}
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="card-body border-top p-9">
        <!--begin::Input group-->
        <div class="row">
            <div class="col-8">
                <div class="menu-item px-3">
                    <div class="menu-content d-flex align-items-center px-3">
                        <!--begin::Avatar-->
                        <div class="symbol symbol-50px me-5">
                            <img alt="Logo" src="{{ asset('admin/assets/media/svg/avatars/blank-dark.svg') }}" />
                        </div>
                        <!--end::Avatar-->
                        <!--begin::Username-->
                        <div class="d-flex flex-column">
                            <div class="fw-bolder d-flex align-items-center fs-5">
                                {{ Auth::user()->name }}
                            </div>
                            <a href="#" class="fw-bold text-muted text-hover-primary fs-7">
                                {{ Auth::user()->email }}
                            </a>
                        </div>
                        <!--end::Username-->
                    </div>
                </div>
            </div>
            <div class="col-4 d-flex align-items-center">
                {{-- <x-danger-button x-data=""
                    x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')">{{ __('Delete Account') }}</x-danger-button> --}}
                <a class="delete-account btn btn-danger font-weight-bold mr-2" href="{{ route('profile.destroy') }}"
                data-check-password-url="{{ route('checkPassword') }}" >
                    {{ __('Delete Account') }}
                </a>


            </div>

        </div>
    </div>
</div>





