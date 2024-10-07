<x-admin-app-layout :title="'Event Page Edit'">
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

            <form id="myForm" method="post" action="{{ route('admin.event-page.update',$item->id) }}"
                enctype="multipart/form-data">
                @csrf

                @method('PUT')

                <div class="card bg-light">

                    <div class="row p-4">

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="banner_badge" class="mb-2">Banner Badge</label>
                                <input type="text" id="banner_badge" name="banner_badge" placeholder="Enter Banner Badge"
                                    class="form-control form-control-sm" value="{{ old('banner_badge', $item->banner_badge ?? '') }}">
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="banner_title" class="mb-2">Banner Title</label>
                                <input type="text" id="banner_title" name="banner_title" placeholder="Enter Banner Title"
                                    class="form-control form-control-sm" value="{{ old('banner_title', $item->banner_title ?? '') }}">
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="banner_sub_title" class="mb-2">Banner Sub Title</label>
                                <input type="text" id="banner_sub_title" name="banner_sub_title" placeholder="Enter Banner Sub Title"
                                    class="form-control form-control-sm" value="{{ old('banner_sub_title', $item->banner_sub_title ?? '') }}">
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="organizer_text" class="mb-2">Organizer Text</label>
                                <input type="text" id="organizer_text" name="organizer_text" placeholder="Enter Organizer Text"
                                    class="form-control form-control-sm" value="{{ old('organizer_text', $item->organizer_text ?? '') }}">
                            </div>
                        </div>

                        <div class="col-4 mb-3">
                            <div class="form-group">
                                <label for="website_link" class="mb-2">Website Link</label>
                                <input type="url" id="website_link" name="website_link" placeholder="https://example.com"
                                    class="form-control form-control-sm" value="{{ old('website_link', $item->website_link ?? '') }}">
                            </div>
                        </div>

                        <div class="col-4 mb-3">
                            <div class="form-group">
                                <label for="whatsapp_link" class="mb-2">WhatsApp Link</label>
                                <input type="url" id="whatsapp_link" name="whatsapp_link" placeholder="https://wa.me/1234567890"
                                    class="form-control form-control-sm" value="{{ old('whatsapp_link', $item->whatsapp_link ?? '') }}">
                            </div>
                        </div>

                        <div class="col-4 mb-3">
                            <div class="form-group">
                                <label for="other_link" class="mb-2">Other Link</label>
                                <input type="url" id="other_link" name="other_link" placeholder="Enter Other Link"
                                    class="form-control form-control-sm" value="{{ old('other_link', $item->other_link ?? '') }}">
                            </div>
                        </div>

                        <div class="col-5 mb-3">
                            <div class="form-group">
                                <label for="row_one_title" class="mb-2">Row One Title</label>
                                <input type="text" id="row_one_title" name="row_one_title" placeholder="Enter Row One Title"
                                    class="form-control form-control-sm" value="{{ old('row_one_title', $item->row_one_title ?? '') }}">
                            </div>
                        </div>

                        <div class="col-7 mb-3">
                            <div class="form-group">
                                <label for="map_link" class="mb-2">Map Link</label>
                                <textarea id="map_link" name="map_link" class="form-control form-control-sm" cols="5" rows="5"
                                    placeholder="Enter Map Link">{{ old('map_link', $item->map_link ?? '') }}</textarea>
                            </div>
                        </div>

                        <div class="col-12 mb-3">
                            <div class="form-group">
                                <label for="row_one_description" class="mb-2">Description</label>
                                <textarea id="row_one_description" name="row_one_description" class="form-control editor" cols="3" rows="3"
                                    placeholder="Enter Description">{{ old('row_one_description', $item->row_one_description ?? '') }}</textarea>
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="row_one_image" class="mb-2">Row One Image</label>
                                <input type="file" id="row_one_image" name="row_one_image" accept="image/*"
                                    class="form-control form-control-sm">

                                    <img class="mt-3"
                                    src="{{ !empty($item->row_one_image) ? url('storage/event-page/' . $item->row_one_image) : 'https://ui-avatars.com/api/?name=' . urlencode($item->banner_title) }}"
                                    height="80" width="80" alt="">
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="banner_image" class="mb-2">Banner Image</label>
                                <input type="file" id="banner_image" name="banner_image" accept="image/*"
                                    class="form-control form-control-sm">

                                    <img class="mt-3"
                                    src="{{ !empty($item->banner_image) ? url('storage/event-page/' . $item->banner_image) : 'https://ui-avatars.com/api/?name=' . urlencode($item->banner_title) }}"
                                    height="80" width="80" alt="">
                            </div>
                        </div>

                        <div class="col-12 mb-3 mt-4">
                            <button type="submit"
                                class="btn btn-primary rounded-0 px-5 btn-sm float-end">Update</button>
                        </div>

                    </div>


                </div>

            </form>

        </div>

    </div>


</x-admin-app-layout>
