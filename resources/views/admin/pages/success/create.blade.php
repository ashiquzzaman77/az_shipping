<x-admin-app-layout :title="'Success Create'">
    <div class="card card-flash">
        <div class="card-header">
            <div class="card-title">
            </div>

            <div class="card-toolbar">
                <a href="{{ route('admin.success.index') }}" class="btn btn-light-primary rounded-2">
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
                    </span> Back to list
                </a>

            </div>
        </div>
        <div class="card-body">
            <form id="myform" method="post" action="{{ route('admin.success.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-lg-7">
                        <div class="row mb-3">
                            <div class="col-12">
                                <h6 class="mb-0">Title <span class="text-danger">*</span> </h6>
                            </div>
                            <div class="form-group col-12 text-secondary">
                                <input type="text" name="title" class="form-control maxlength" maxlength="252" />
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="row mb-1">
                            <div class="col-lg-12">
                                <span>Success Image</span>
                            </div>
                            <div class="col-10">
                                <input type="file" name="image" class="form-control form-control-sm" id="image"
                                    accept="image/*" />
                            </div>
                            <div class="col-2">
                                <img id="showImage" class="rounded-circle"
                                    src="https://cdn.pixabay.com/photo/2017/02/07/02/16/cloud-2044823_960_720.png"
                                    alt="Brand" height="40px" width="40px">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="row mb-3">
                            <div class="col-12">
                                <h6 class="mb-0">Button Name </h6>
                            </div>
                            <div class="form-group col-12 text-secondary">
                                <input type="text" name="btn_name" class="form-control" />
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="row mb-1">
                            <div class="col-lg-12">
                                <h6 class="mb-0">Button Link</h6>
                            </div>
                            <div class="col-12">
                                <input type="text" name="link" class="form-control maxlength" maxlength="255" />
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-12">
                        <h6 class="mb-0">Description <span class="text-danger">*</span></h6>
                    </div>
                    <div class="form-group col-12 text-secondary">
                        <textarea name="description" class="form-control" cols="40" rows="10"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-8"></div>
                    <div class="col-sm-4 text-secondary">
                        <button type="submit" class="btn btn-primary" id="submitbtn">Submit<i
                                class="ph-paper-plane-tilt ms-2"></i></button>
                    </div>
                </div>


            </form>
        </div>

    </div>

    @push('scripts')
        <script></script>
    @endpush
</x-admin-app-layout>
