<x-admin-app-layout :title="'Event Page Create'">
    <div class="card card-flash">
        <div class="card-header">
            <div class="card-title">
            </div>

            <div class="card-toolbar">
                <a href="{{ route('admin.event-page.index') }}" class="btn btn-light-primary rounded-2">
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

            <form id="myForm" method="post" action="{{ route('admin.event-page.store') }}"
                enctype="multipart/form-data">
                @csrf

                <div class="card bg-light">

                    <div class="row p-4">

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">Banner Badge</label>
                                <input type="text" name="banner_badge" placeholder="Banner Badge"
                                    class="form-control form-control-sm" value="{{ old('banner_badge') }}">
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">Banner Title</label>
                                <input type="text" name="banner_title" placeholder="Banner Title"
                                    class="form-control form-control-sm" value="{{ old('banner_title') }}">
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">Banner Sub Title</label>
                                <input type="text" name="banner_sub_title" placeholder="Banner Sub Title"
                                    class="form-control form-control-sm" value="{{ old('banner_sub_title') }}">
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">Organizer Text</label>
                                <input type="text" name="organizer_text" placeholder=""
                                    class="form-control form-control-sm" value="{{ old('organizer_text') }}">
                            </div>
                        </div>


                        <div class="col-4 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">Website Link</label>
                                <input type="text" name="website_link" placeholder=""
                                    class="form-control form-control-sm" value="{{ old('website_link') }}">
                            </div>
                        </div>

                        <div class="col-4 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">WhatsApp Link</label>
                                <input type="text" name="whatsapp_link" placeholder=""
                                    class="form-control form-control-sm" value="{{ old('whatsapp_link') }}">
                            </div>
                        </div>

                        <div class="col-4 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">Other Link</label>
                                <input type="text" name="other_link" placeholder=""
                                    class="form-control form-control-sm" value="{{ old('other_link') }}">
                            </div>
                        </div>

                        <div class="col-5 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">Row One Title</label>
                                <input type="text" name="row_one_title" placeholder=""
                                    class="form-control form-control-sm" value="{{ old('row_one_title') }}">
                            </div>
                        </div>

                        <div class="col-7 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">Map Link</label>
                                <textarea name="map_link" class="form-control form-control-sm" id="" cols="5" rows="5"></textarea>
                            </div>
                        </div>

                        <div class="col-12 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">Description</label>
                                <textarea name="row_one_description" class="form-control editor" id="" cols="3" rows="3"></textarea>
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="">
                                <label for="" class="mb-2">Row One Image</label>
                                <input type="file" name="row_one_image" accept="image/*"
                                    class="form-control form-control-sm">
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="">
                                <label for="" class="mb-2">Banner Image</label>
                                <input type="file" name="banner_image" accept="image/*"
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


</x-admin-app-layout>
