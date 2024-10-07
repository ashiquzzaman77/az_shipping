<x-admin-app-layout :title="'User Add'">

    <div class="card card-flash">
        <!--begin::card body-->
        <div class="card-body scroll-y mx-5 mx-xl-15 my-7">
            <!--begin::Form-->
            <form class="form" method="POST" action="{{ route('admin.user.store') }}">
                @csrf
                <!--begin::Scroll-->
                <div class="d-flex flex-column scroll-y me-n7 pe-7" data-kt-scroll="true"
                    data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto"
                    data-kt-scroll-offset="300px">
                    <div class="row">
                        <div class="col-lg-6 mb-7">
                            <x-metronic.label for="name"
                                class="required fw-bold fs-6 mb-2">{{ __('Full Name') }}</x-metronic.label>
                            <x-metronic.input id="name" type="text" class="form-control-solid mb-3 mb-lg-0"
                                name="name" :value="old('name')" placeholder="Enter Full name"></x-metronic.input>
                        </div>
                        <div class="col-lg-6 mb-7">
                            <x-metronic.label for="email"
                                class="required fw-bold fs-6 mb-2">{{ __('Email') }}</x-metronic.label>
                            <x-metronic.input id="email" type="email" class="form-control-solid mb-3 mb-lg-0"
                                name="email" :value="old('email')" placeholder="example@domain.com"></x-metronic.input>
                        </div>
                        <div class="col-lg-6 mb-7">
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
                        </div>
                        <!--begin::Input group-->
                        <div class="mb-7">
                            <!--begin::Label-->
                            <label class="required fw-bold fs-6 mb-5">Role</label>
                            <!--end::Label-->
                            <!--begin::Roles-->
                            @foreach ($roles as $role)
                                <!--begin::Input row-->
                                <div class="d-flex fv-row">
                                    <!--begin::Radio-->
                                    <div class="form-check form-check-custom form-check-solid">
                                        <!--begin::Input-->

                                        <x-metronic.checkbox id="role-name-{{ $role->id }}" type="checkbox"
                                            name="roles[]" :value="$role->name"></x-metronic.checkbox>


                                        {{-- <input class="form-check-input me-3" name="roles[]" type="radio" value="0"
                                        id="kt_modal_update_role_option_0" checked='checked' /> --}}
                                        <!--end::Input-->
                                        <!--begin::Label-->
                                        <x-metronic.label for="role-name-{{ $role->id }}"
                                            class="form-check-label">{{ $role->name }}</x-metronic.label>
                                        {{-- <label class="form-check-label" for="kt_modal_update_role_option_0">
                                        <div class="fw-bolder text-gray-800">
                                            {{ $role->name }}</div>
                                        <div class="text-gray-600">Best for
                                            business owners and company
                                            administrators</div>
                                    </label> --}}
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Radio-->
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
                        {{ __('Submit') }}
                    </x-metronic.button>
                </div>
                <!--end::Actions-->
            </form>
            <!--end::Form-->
        </div>
        <!--end::Modal body-->
    </div>
    {{-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <form method="POST" action="{{ route('admin.user.store') }}">
                @csrf

                <!-- Name -->
                <div>
                    <x-input-label for="name" :value="__('Name')" />
                    <x-text-input id="name" class="block mt-1 w-full" type="text" name="name"
                        :value="old('name')" required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <!-- Email Address -->
                <div class="mt-4">
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                        :value="old('email')" required autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <x-input-label for="password" :value="__('Password')" />

                    <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                        autocomplete="new-password" />

                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Confirm Password -->
                <div class="mt-4">
                    <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                    <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                        name="password_confirmation" required autocomplete="new-password" />

                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>

                <div class="mb-4">
                    <label for="role" class="block text-gray-700 text-sm font-bold mb-2">Role</label>
                    <select name="roles[]" id="role" multiple
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline js-example-basic-multiple">
                        @foreach ($roles as $role)
                            <option value="{{ $role->name }}">{{ $role->name }}</option>
                        @endforeach
                    </select>
                    @error('role')
                        <p class="text-red-500 text-xs italic mt-4">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex items-center justify-end mt-4">
                    <x-primary-button class="ml-4">
                        {{ __('Register') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div> --}}
</x-admin-app-layout>
