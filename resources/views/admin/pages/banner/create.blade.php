<x-admin-app-layout :title="'Banner Create'">
    <div class="card card-flash">
        <div class="card-header">
            <div class="card-title">
            </div>

            <div class="card-toolbar">
                <a href="{{ route('admin.banner.index') }}" class="btn btn-light-primary rounded-2">
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

            <form id="myForm" method="post" action="{{ route('admin.banner.store') }}"
                enctype="multipart/form-data">
                @csrf

                <div class="card bg-light">

                    <div class="row p-4">



                        <div class="col-4 mb-3">

                            <div class="form-group">
                                <label for="" class="mb-2">Status</label>
                                <select name="status" data-placeholder="Select Row One.."
                                    class="form-select form-select-sm" data-control="select2"
                                    data-placeholder="Select an option">

                                    <option value="active">Active</option>
                                    <option value="inactive">Inactive</option>

                                </select>
                            </div>

                        </div>


                        <div class="col-4 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">Badge</label>
                                <input type="text" name="badge" placeholder="Banner Badge"
                                    class="form-control form-control-sm" value="{{ old('badge') }}">
                            </div>
                        </div>

                        <div class="col-4 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">Title</label>
                                <input type="text" name="title" placeholder="Banner Title"
                                    class="form-control form-control-sm" value="{{ old('title') }}">
                            </div>
                        </div>


                        <div class="col-4 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">Sub Title</label>
                                <input type="text" name="sub_title" placeholder="Banner Sub Title"
                                    class="form-control form-control-sm" value="{{ old('sub_title') }}">
                            </div>
                        </div>

                        {{-- <div class="col-4 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">Contact</label>
                                <input type="text" name="contact" placeholder="Banner Contact Url"
                                    class="form-control form-control-sm" value="{{ old('contact') }}">
                            </div>
                        </div> --}}


                        <div class="col-4 mb-3">
                            <div class="">
                                <label for="" class="mb-2">Image</label>
                                <input type="file" name="image" accept="image/*"
                                    class="form-control form-control-sm">
                            </div>
                        </div>

                        <div class="col-12 mb-3 mt-4">
                            <button type="submit"
                                class="btn btn-primary rounded-0 px-5 btn-sm float-end">Submit</button>
                        </div>

                    </div>
                </div>

            </form>

        </div>

    </div>

    @push('scripts')
        
    @endpush




</x-admin-app-layout>
