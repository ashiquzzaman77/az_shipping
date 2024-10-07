<x-admin-app-layout :title="'User Edit'">

    <div class="card card-flash">
        <!--begin::card body-->
        <div class="card-body scroll-y mx-5 mx-xl-15 my-7">
            <!--begin::Form-->
            <form class="form" method="POST" action="{{ route('admin.user.update',$user->id) }}">
                @csrf
                @method('PATCH')
                <!--begin::Scroll-->
                <div class="d-flex flex-column scroll-y me-n7 pe-7" data-kt-scroll="true"
                    data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto"
                    data-kt-scroll-offset="300px">
                    <div class="row">
                        <div class="col-lg-6 mb-7">
                            <x-metronic.label for="name"
                                class="required fw-bold fs-6 mb-2">{{ __('Full Name') }}</x-metronic.label>
                            <x-metronic.input id="name" type="text" class="form-control-solid mb-3 mb-lg-0"
                                name="name" :value="old('name', $user->name)" placeholder="Enter Full name"></x-metronic.input>
                        </div>
                        <div class="col-lg-6 mb-7">
                            <x-metronic.label for="email"
                                class="required fw-bold fs-6 mb-2">{{ __('Email') }}</x-metronic.label>
                            <x-metronic.input id="email" type="email" class="form-control-solid mb-3 mb-lg-0"
                                name="email" :value="old('email', $user->email)" placeholder="example@domain.com"></x-metronic.input>
                        </div>
                        {{-- <div class="col-lg-6 mb-7">
                            <x-metronic.label for="password"
                                class="required fw-bold fs-6 mb-2">{{ __('Password') }}</x-metronic.label>
                            <x-metronic.input id="password" type="password" class="form-control-solid mb-3 mb-lg-0"
                                name="password" :value="old('password')" placeholder="Enter Password"></x-metronic.input>
                        </div>
                        <div class="col-lg-6 mb-7">
                            <x-metronic.label for="password_confirmation"
                                class="required fw-bold fs-6 mb-2">{{ __('Confirm Password') }}</x-metronic.label>
                            <x-metronic.input id="password_confirmation" type="password"
                                class="form-control-solid mb-3 mb-lg-0" name="password_confirmation"
                                placeholder="Confirm the password"></x-metronic.input>
                        </div> --}}
                        <!--begin::Input group-->
                        <div class="mb-7">
                            <!--begin::Label-->
                            <label class="required fw-bold fs-6 mb-5">Role</label>
                            <!--end::Label-->
                            <!--begin::Roles-->
                            @foreach ($roles as $role)
                                <!--begin::Input row-->
                                <div class="d-flex fv-row">
                                    <!--begin::Checkbox-->
                                    <div class="form-check form-check-custom form-check-solid">
                                        <!-- Input -->
                                        <x-metronic.checkbox id="role-name-{{ $role->id }}" type="checkbox"
                                            name="roles[]" :value="$role->name" :checked="$user->roles->contains($role->id)"/>
                                        <!-- Label -->
                                        <x-metronic.label for="role-name-{{ $role->id }}"
                                            class="form-check-label">{{ $role->name }}</x-metronic.label>
                                    </div>
                                    <!--end::Checkbox-->
                                </div>
                                <!--end::Input row-->
                                <div class='separator separator-dashed my-5'></div>
                            @endforeach
                            <!--end::Roles-->
                        </div>
                        <!--end::Input group-->
                    </div>
                </div>
                <!--end::Scroll-->
                <!--begin::Actions-->
                <div class="text-center pt-15">
                    <x-metronic.button type="submit" class="primary">
                        {{ __('Save Changes') }}
                    </x-metronic.button>
                </div>
                <!--end::Actions-->
            </form>
            <!--end::Form-->
        </div>
        <!--end::Modal body-->
    </div>

</x-admin-app-layout>
