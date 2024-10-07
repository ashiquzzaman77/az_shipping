<x-admin-app-layout :title="'Permissions List'">
    <!--begin::Card-->
    <div class="card card-flush">
        <!--begin::Card header-->
        <div class="card-header mt-6">
            <!--begin::Card title-->
            <div class="card-title">
                <!--begin::Search-->
                <div class="d-flex align-items-center position-relative my-1 me-5">
                    <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                    <span class="svg-icon svg-icon-1 position-absolute ms-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none">
                            <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1"
                                transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
                            <path
                                d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                                fill="currentColor" />
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                    <input type="text" data-kt-permissions-table-filter="search"
                        class="form-control form-control-solid w-250px ps-15" placeholder="Search Permissions" />
                </div>
                <!--end::Search-->
            </div>
            <!--end::Card title-->
            <!--begin::Card toolbar-->
            <div class="card-toolbar">
                <!--begin::Button-->
                <a href="{{ route('admin.permission.create') }}" class="btn btn-light-primary rounded-2">
                    <!--begin::Svg Icon | path: icons/duotune/general/gen035.svg-->
                    <span class="svg-icon svg-icon-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none">
                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5"
                                fill="currentColor" />
                            <rect x="10.8891" y="17.8033" width="12" height="2" rx="1"
                                transform="rotate(-90 10.8891 17.8033)" fill="currentColor" />
                            <rect x="6.01041" y="10.9247" width="12" height="2" rx="1"
                                fill="currentColor" />
                        </svg>
                    </span>
                    <!--end::Svg Icon-->Add Permission</a>

            </div>
        </div>
        <div class="card-body pt-0">
            <!--begin::Table-->
            <table class="table align-middle table-row-dashed fs-6 gy-5 mb-0" id="kt_permissions_table">
                <!--begin::Table head-->
                <thead>
                    <!--begin::Table row-->
                    <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                        <th class="min-w-125px">Name</th>
                        <th class="min-w-250px">Assigned to</th>
                        {{-- <th class="min-w-125px">Created Date</th> --}}
                        <th class="text-end min-w-100px">Actions</th>
                    </tr>
                    <!--end::Table row-->
                </thead>
                <!--end::Table head-->
                <!--begin::Table body-->
                <tbody class="fw-bold text-gray-600">
                    @foreach ($permissions as $permission)
                        <tr>
                            <!--begin::Name=-->
                            <td>{{ $permission->name }}</td>
                            <!--end::Name=-->
                            <!--begin::Assigned to=-->
                            <td>
                                @foreach ($permission->roles as $role)
                                    @php
                                        $badgeColors = [
                                            'badge-primary',
                                            'badge-secondary',
                                            'badge-success',
                                            'badge-danger',
                                            'badge-warning',
                                            'badge-info',
                                            'badge-dark',
                                        ];
                                        $badgeColor = $badgeColors[array_rand($badgeColors)];
                                    @endphp

                                    <a href="" class="badge {{ $badgeColor }} fs-7 m-1">{{ $role->name }}</a>
                                @endforeach
                            </td>
                            {{-- <td>{{ $permission->created_at }}</td> --}}
                            <td class="text-end">
                                <!--begin::Update-->
                                <a href="{{ route('admin.permission.edit', $permission->id) }}"
                                    class="btn btn-icon btn-active-light-primary w-30px h-30px me-3">
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
                                    <span class="svg-icon svg-icon-3">
                                        <i class="fas fa-pen"></i>
                                    </span>
                                    <!--end::Svg Icon-->
                                </a>
                                <!--end::Update-->
                                <!--begin::Delete-->
                                <a href="{{ route('admin.permission.destroy', $permission->id) }}"
                                    class="btn btn-icon btn-active-light-danger w-30px h-30px delete">
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
                                    <span class="svg-icon svg-icon-3">
                                        <i class="fas fa-trash-alt"></i>
                                    </span>
                                    <!--end::Svg Icon-->
                                </a>
                                <!--end::Delete-->
                            </td>
                            <!--end::Action=-->
                        </tr>
                    @endforeach

                </tbody>
                <!--end::Table body-->
            </table>
            <!--end::Table-->
        </div>
    </div>
</x-admin-app-layout>
