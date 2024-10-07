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
                <div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
                    <!--begin::Card header-->
                    <div class="card-header cursor-pointer">
                        <!--begin::Card title-->
                        <div class="card-title m-0">
                            <h3 class="fw-bolder m-0">Profile Details</h3>
                        </div>
                        <!--end::Card title-->
                        <!--begin::Action-->
                        <a href="" class="btn btn-light-primary btn-sm align-self-center" data-bs-toggle="modal"
                            data-bs-target="#editModal">Edit
                            Profile</a>
                        <!--end::Action-->
                    </div>
                    <!--begin::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body p-9">
                        <!--begin::Row-->
                        <div class="row mb-7">
                            <!--begin::Label-->
                            <label class="col-lg-4 fw-bold text-muted">Full Name</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8">
                                <span class="fw-bolder fs-6 text-gray-800">{{ $profileData->name }}</span>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->
                        <!--begin::Input group-->
                        <div class="row mb-7">
                            <!--begin::Label-->
                            <label class="col-lg-4 fw-bold text-muted">Company</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <span class="fw-bold text-gray-800 fs-6">{{ $profileData->company_name }}</span>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        {{-- <div class="row mb-7">
                            <!--begin::Label-->
                            <label class="col-lg-4 fw-bold text-muted">Biometric Id</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8">
                                <span class="fw-bolder fs-6 text-gray-800">{{ $profileData->biometric_id }}</span>
                            </div>
                            <!--end::Col-->
                        </div> --}}
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="row mb-7">
                            <!--begin::Label-->
                            <label class="col-lg-4 fw-bold text-muted">Contact Phone
                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                    title="Phone number must be active"></i></label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 d-flex align-items-center">
                                <span class="fw-bolder fs-6 text-gray-800 me-2">{{ $profileData->phone }}</span>
                                {{-- <span class="badge badge-success">Verified</span> --}}
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->

                        <!--begin::Input group-->
                        <div class="row mb-7">
                            <!--begin::Label-->
                            <label class="col-lg-4 fw-bold text-muted">Email
                            </label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8">
                                <span class="fw-bolder fs-6 text-gray-800">{{ $profileData->email }}</span>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="row mb-7">
                            <!--begin::Label-->
                            <label class="col-lg-4 fw-bold text-muted">Address</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8">
                                <span class="fw-bolder fs-6 text-gray-800">{{ $profileData->address }}</span>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="row mb-10">
                            <!--begin::Label-->
                            <label class="col-lg-4 fw-bold text-muted">Status</label>
                            <!--begin::Label-->
                            <!--begin::Label-->
                            <div class="col-lg-8">
                                <span class="fw-bold fs-6 text-gray-800">
                                    @if ($profileData->status == 'active')
                                        <span class="badge badge-success">Verified</span>
                                    @else
                                        <span class="badge badge-danger">Inactive</span>
                                    @endif
                                </span>
                            </div>
                            <!--begin::Label-->
                        </div>
                        <!--end::Input group-->

                        <!--end::Notice-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::details View-->
                <!--begin::Row-->


            </div>
            <!--end::Container-->
        </div>
        <!--end::Post-->

    </div>

    <!-- Modal -->
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Update Profile</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <form action="{{ route('admin.profile.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="modal-body">

                        <div class="row">

                            <div class="col-4">
                                <div class="form-group mb-2">
                                    <label for="" class="mb-2">Name</label>
                                    <input type="text" placeholder="Name" name="name"
                                        value="{{ $profileData->name }}"
                                        class="form-control form-control-sm form-control-solid">
                                </div>
                            </div>

                            <div class="col-4">
                                <div class="form-group mb-2">
                                    <label for="" class="mb-2">Email</label>
                                    <input type="text" placeholder="Email" name="email"
                                        value="{{ $profileData->email }}"
                                        class="form-control form-control-sm form-control-solid">
                                </div>
                            </div>

                            <div class="col-4">
                                <div class="form-group mb-2">
                                    <label for="" class="mb-2">Designation</label>
                                    <input type="text" placeholder="Designation" name="designation"
                                        value="{{ $profileData->designation }}"
                                        class="form-control form-control-sm form-control-solid">
                                </div>
                            </div>



                            <div class="col-4">
                                <div class="form-group mb-2">
                                    <label for="" class="mb-2">Phone</label>
                                    <input type="text" placeholder="Phone" name="phone"
                                        value="{{ $profileData->phone }}"
                                        class="form-control form-control-sm form-control-solid">
                                </div>
                            </div>

                            <div class="col-4">
                                <div class="form-group mb-2">
                                    <label for="" class="mb-2">Company Name</label>
                                    <input type="text" placeholder="Company Name" name="company_name"
                                        value="{{ $profileData->company_name }}"
                                        class="form-control form-control-sm form-control-solid">
                                </div>
                            </div>

                            <div class="col-4">
                                <div class="form-group mb-2">
                                    <label for="" class="mb-2">Address</label>
                                    <input type="text" placeholder="Address" name="address"
                                        value="{{ $profileData->address }}"
                                        class="form-control form-control-sm form-control-solid">
                                </div>
                            </div>

                            <div class="col-4">
                                <div class="form-group mb-2">
                                    <label for="" class="mb-2">Status</label>
                                    <select name="status" class="form-select form-select-sm form-select-solid"
                                        id="">

                                        <option selected disabled>Choose Status</option>

                                        <option value="active"
                                            {{ old('status', $profileData->status) == 'active' ? 'selected' : '' }}>
                                            Active</option>
                                        <option value="inactive"
                                            {{ old('status', $profileData->status) == 'inactive' ? 'selected' : '' }}>
                                            Inactive</option>


                                    </select>
                                </div>
                            </div>

                            <div class="col-4">
                                <!--begin::Input group-->
                                <div class="mb-7">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-bold mb-2">
                                        <span>Update Image</span>
                                        <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                            title="Allowed file types: png, jpg, jpeg."></i>
                                    </label>
                                    <!--end::Label-->

                                    <!--begin::Image input wrapper-->
                                    <div class="mt-1">
                                        <!--begin::Image input-->
                                        <div class="image-input image-input-outline" data-kt-image-input="true"
                                            style="background-image: url('assets/media/svg/avatars/blank.svg')">
                                            <!--begin::Preview existing avatar-->
                                            <div class="image-input-wrapper w-125px h-125px"
                                                style="background-image: url(assets/media/avatars/300-6.jpg">
                                            </div>
                                            <!--end::Preview existing avatar-->
                                            <!--begin::Edit-->
                                            <label
                                                class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                data-kt-image-input-action="change" data-bs-toggle="tooltip"
                                                title="Change avatar">
                                                <i class="bi bi-pencil-fill fs-7"></i>
                                                <!--begin::Inputs-->
                                                <input type="file" name="photo" accept=".png, .jpg, .jpeg" />
                                                <input type="hidden" name="avatar_remove" />
                                                <!--end::Inputs-->
                                            </label>
                                            <!--end::Edit-->
                                            <!--begin::Cancel-->
                                            <span
                                                class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                data-kt-image-input-action="cancel" data-bs-toggle="tooltip"
                                                title="Cancel avatar">
                                                <i class="bi bi-x fs-2"></i>
                                            </span>
                                            <!--end::Cancel-->
                                            <!--begin::Remove-->
                                            <span
                                                class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                data-kt-image-input-action="remove" data-bs-toggle="tooltip"
                                                title="Remove avatar">
                                                <i class="bi bi-x fs-2"></i>
                                            </span>
                                            <!--end::Remove-->
                                        </div>
                                        <!--end::Image input-->
                                    </div>
                                    <!--end::Image input wrapper-->

                                </div>
                                <!--end::Input group-->
                            </div>

                        </div>

                    </div>

                    <div class="modal-footer">

                        <button type="submit" class="btn btn-secondary btn-sm"
                            data-bs-dismiss="modal">Close</button>

                        <button type="submit" class="btn btn-primary btn-sm">Update Profile</button>
                    </div>

                </form>

            </div>
        </div>
    </div>

</x-admin-app-layout>
