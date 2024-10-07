<x-admin-app-layout :title="'Role Add'">
    <div class="card card-flush">
        <!--begin::Form-->
        <form class="form" action="{{ route('admin.role.store') }}" method="POST">
            @csrf
            <!--begin::Scroll-->
            <div class="card-body d-flex flex-column scroll-y me-n7 pe-7"
                data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-offset="300px">
                <!--begin::Input group-->
                <div class="fv-row mb-10">
                    <x-metronic.label for="role-name"
                        class="col-form-label required fw-bold fs-6">{{ __('Role Name') }}</x-metronic.label>
                    <x-metronic.input id="role-name" type="text" name="name" :value="old('name')"
                        placeholder="Enter the Role name"></x-metronic.input>
                </div>
                <!--end::Input group-->
                <!--begin::Permissions-->
                <div class="fv-row">
                    <!--begin::Label-->
                    <label class="fs-5 fw-bolder form-label mb-2">Role Permissions</label>
                    <!--end::Label-->
                    <!--begin::Table wrapper-->
                    <div class="table-responsive">
                        <!--begin::Table-->
                        <table class="table align-middle table-row-dashed fs-6 gy-5">
                            <!--begin::Table body-->
                            <tbody class="text-gray-600 fw-bold">
                                <!--begin::Table row-->
                                <tr>
                                    <td class="text-gray-800">Administrator Access
                                        <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                            title="Allows a full access to the system"></i>
                                    </td>
                                    <td>
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-sm form-check-custom form-check-solid me-9">
                                            <input class="form-check-input metronic_select_all" type="checkbox" value=""
                                                id="kt_roles_select_all" />
                                            <span class="form-check-label" for="kt_roles_select_all">Select all</span>
                                        </label>
                                        <!--end::Checkbox-->
                                    </td>
                                </tr>
                                @foreach ($permissionsByGroups as $group)
                                    <tr>
                                        <!--begin::Label-->
                                        <td class="text-gray-800">{{$group->group_name}}</td>
                                        <!--end::Label-->
                                        <!--begin::Input group-->
                                        <td>
                                            <!--begin::Wrapper-->
                                            <div class="d-flex">
                                                @foreach ($permissions->where('group_name', $group->group_name) as $permission)
                                                    <!--begin::Checkbox-->
                                                    <label
                                                        class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                        <input class="form-check-input" type="checkbox" value="{{ $permission->name }}"
                                                            name="permissions[]" />
                                                        <span class="form-check-label">{{ $permission->name }}</span>
                                                    </label>
                                                    <!--end::Checkbox-->
                                                @endforeach
                                            </div>
                                            <!--end::Wrapper-->
                                        </td>
                                        <!--end::Input group-->
                                    </tr>
                                @endforeach
                                <!--end::Table row-->

                            </tbody>
                            <!--end::Table body-->
                        </table>
                        <!--end::Table-->
                    </div>
                    <!--end::Table wrapper-->
                </div>
                <!--end::Permissions-->
            </div>
            <!--end::Scroll-->
            <!--begin::Actions-->
            <div class="card-footer text-center">
                    <x-metronic.button type="submit" class="primary">
                        {{ __('Submit') }}
                    </x-metronic.button>
            </div>
            <!--end::Actions-->
        </form>
        <!--end::Form-->
    </div>
</x-admin-app-layout>
