<x-admin-app-layout :title="'Permission Add'">

    <div class="card card-flash">

        <!--begin::Modal body-->
        <div class="card-body scroll-y mx-5 mx-xl-15 my-7">
            <!--begin::Form-->
            <form class="form" action="{{ route('admin.permission.store') }}" method="POST">
                @csrf
                <!--begin::Input group-->
                <div class="fv-row mb-7">
                    <x-metronic.label for="goup-name"
                        class="col-form-label fw-bold fs-6">{{ __('Group Name') }}
                    </x-metronic.label>

                    <x-metronic.input id="goup-name" type="text" name="group_name" :value="old('group_name')"
                        placeholder="Enter the permission Group name"></x-metronic.input>
                </div>
                <div class="fv-row mb-7">
                    <x-metronic.label for="permission-add-name"
                        class="col-form-label required fw-bold fs-6">{{ __('Permission Name') }} <i
                            class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="popover"
                            data-bs-trigger="hover" data-bs-html="true"
                            data-bs-content="Permission name is required to be unique."></i>
                    </x-metronic.label>

                    <x-metronic.input id="permission-add-name" type="text" name="name" :value="old('name')"
                        placeholder="Enter the permission name" required></x-metronic.input>
                </div>


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
</x-admin-app-layout>
