<x-admin-app-layout :title="'Permission Edit'">

    <div class="card card-flash">
        <!--begin::Modal body-->
        <div class="card-body scroll-y mx-5 mx-xl-15 my-7">
            <div class="notice d-flex bg-light-warning rounded border-warning border border-dashed mb-9 p-6">
                <!--begin::Icon-->
                <!--begin::Svg Icon | path: icons/duotune/general/gen044.svg-->
                <span class="svg-icon svg-icon-2tx svg-icon-warning me-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10"
                            fill="currentColor" />
                        <rect x="11" y="14" width="7" height="2" rx="1" transform="rotate(-90 11 14)"
                            fill="currentColor" />
                        <rect x="11" y="17" width="2" height="2" rx="1" transform="rotate(-90 11 17)"
                            fill="currentColor" />
                    </svg>
                </span>
                <!--end::Svg Icon-->
                <!--end::Icon-->
                <!--begin::Wrapper-->
                <div class="d-flex flex-stack flex-grow-1">
                    <!--begin::Content-->
                    <div class="fw-bold">
                        <div class="fs-8 text-gray-700">
                            <strong class="me-1">Warning!</strong>By editing the permission name, you
                            might
                            break the system permissions functionality. Please ensure you're absolutely
                            certain
                            before proceeding.
                        </div>
                    </div>
                    <!--end::Content-->
                </div>
                <!--end::Wrapper-->
            </div>
            <!--begin::Form-->
            <form class="form" action="{{ route('admin.permission.update', $permission->id) }}" method="POST">
                @csrf
                @method('PATCH')
                <!--begin::Input group-->
                <div class="fv-row mb-7">
                    <x-metronic.label for="goup-name" class="col-form-label fw-bold fs-6">{{ __('Group Name') }}
                    </x-metronic.label>

                    <x-metronic.input id="goup-name" type="text" name="group_name" :value="old('group_name', $permission->group_name)"
                        placeholder="Enter the permission Group name"></x-metronic.input>
                </div>
                <div class="fv-row mb-7">
                    <x-metronic.label for="permission-add-name"
                        class="col-form-label required fw-bold fs-6">{{ __('Permission Name') }} <i
                            class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="popover" data-bs-trigger="hover"
                            data-bs-html="true" data-bs-content="Permission name is required to be unique."></i>
                    </x-metronic.label>

                    <x-metronic.input id="permission-add-name" type="text" name="name" :value="old('name', $permission->name)"
                        placeholder="Enter the permission name" required></x-metronic.input>
                </div>


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
