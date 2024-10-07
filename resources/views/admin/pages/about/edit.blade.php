<x-admin-app-layout :title="'About Us Update'">
    <div class="card card-flash">
        <div class="card-header">
            <div class="card-title">
            </div>

            <div class="card-toolbar">
                <a href="{{ route('admin.course.index') }}" class="btn btn-light-primary rounded-2">
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

            <form id="myForm" method="post" action="{{ route('admin.about.update', $about->id) }}"
                enctype="multipart/form-data">
                @csrf

                @method('PUT')

                {{-- Banner Image  --}}
                <div class="card bg-light mb-3">

                    <div class="row p-4">

                        <div class="col-4 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">Banner Image</label>
                                <input type="file" name="banner_image" class="form-control form-control-sm">

                                <img src="{{ asset('upload/about/' . $about->banner_image) }}" alt=""
                                    style="width: 60px; height: 60px;" class="mt-3">
                            </div>
                        </div>
                    </div>

                </div>

                {{-- CEO Section  --}}
                <div class="card bg-light mb-3">

                    <div class="row p-4">

                        <div class="col-4 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">CEO Image</label>
                                <input type="file" name="ceo_section_image" class="form-control form-control-sm">

                                <img src="{{ asset('upload/about/' . $about->ceo_section_image) }}" alt=""
                                    style="width: 60px; height: 60px;" class="mt-3">
                            </div>
                        </div>

                        <div class="col-4 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">CEO Section Badge</label>
                                <input type="text" name="ceo_section_badge" placeholder="CEO Section Badge"
                                    class="form-control form-control-sm" value="{{ $about->ceo_section_badge }}">
                            </div>
                        </div>

                        <div class="col-4 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">CEO Section Title</label>
                                <input type="text" name="ceo_section_title" placeholder="CEO Section Title"
                                    class="form-control form-control-sm" value="{{ $about->ceo_section_title }}">
                            </div>
                        </div>

                        <div class="col-12 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">CEO Description</label>
                                <textarea name="ceo_section_description" class="form-control form-control-sm editor">{!! $about->ceo_section_description !!}</textarea>
                            </div>
                        </div>

                        <div class="col-4 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">CEO Name</label>
                                <input type="text" name="ceo_name" placeholder="CEO Name"
                                    class="form-control form-control-sm" value="{{ $about->ceo_name }}">
                            </div>
                        </div>

                        <div class="col-4 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">CEO Designation</label>
                                <input type="text" name="ceo_designation" placeholder="CEO Designation"
                                    class="form-control form-control-sm" value="{{ $about->ceo_designation }}">
                            </div>
                        </div>

                        <div class="col-4 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">CEO Signature</label>
                                <input type="file" name="ceo_section_signature"
                                    class="form-control form-control-sm">

                                <img src="{{ asset('upload/about/' . $about->ceo_section_signature) }}" alt=""
                                    style="width: 60px; height: 60px;" class="mt-3">
                            </div>
                        </div>




                    </div>
                </div>

                {{-- Row Two  --}}
                <div class="card bg-light mb-3">

                    <div class="row p-4">

                        <div class="col-4 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">Row Two Badge</label>
                                <input type="text" name="row_two_badge" placeholder="Row Two Badge"
                                    class="form-control form-control-sm" value="{{ $about->row_two_badge }}">
                            </div>
                        </div>

                        <div class="col-4 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">Row Two Title</label>
                                <input type="text" name="row_two_title" placeholder="Row Two Ttitle"
                                    class="form-control form-control-sm" value="{{ $about->row_two_title }}">
                            </div>
                        </div>

                        <div class="col-4 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">Row Two Image</label>
                                <input type="file" name="row_two_image" class="form-control form-control-sm">

                                <img src="{{ asset('upload/about/' . $about->row_two_image) }}" alt=""
                                    style="width: 60px; height: 60px;" class="mt-3">
                            </div>
                        </div>

                        <div class="col-12 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">Row Two Description</label>
                                <textarea name="row_two_description" class="form-control form-control-sm editor">{!! $about->row_two_description !!}</textarea>
                            </div>
                        </div>

                    </div>
                </div>

                {{-- Row Three  --}}
                <div class="card bg-light mb-3">

                    <div class="row p-4">

                        <div class="col-12 mb-5">
                            <div class="form-group">
                                <label for="" class="mb-2">Row Three Section Title</label>
                                <input type="text" name="row_three_section_title"
                                    placeholder="Row Three Section Title"
                                    value="{{ $about->row_three_section_title }}"
                                    class="form-control form-control-sm">
                            </div>
                        </div>

                        {{-- Row Three Column One Section  --}}

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">Row Three Column One</label>
                                <input type="text" name="row_three_column_one" placeholder="Row Three Column One"
                                    class="form-control form-control-sm" value="{{ $about->row_three_column_one }}">
                            </div>
                        </div>


                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">Row Three Column One Title</label>
                                <input type="text" name="row_three_column_one_title"
                                    placeholder="Row Three Column One Title" class="form-control form-control-sm"
                                    value="{{ $about->row_three_column_one_title }}">
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">Row Three Column One Url</label>
                                <input type="text" name="row_three_column_one_url"
                                    placeholder="Row Three Column One Title" class="form-control form-control-sm"
                                    value="{{ $about->row_three_column_one_url }}">
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">Row Three Column One Image</label>
                                <input type="file" name="row_three_column_one_image"
                                    class="form-control form-control-sm">

                                <img src="{{ asset('upload/about/' . $about->row_three_column_one_image) }}"
                                    alt="" style="width: 60px; height: 60px;" class="mt-3">
                            </div>
                        </div>

                        <div class="col-12 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">Row Three Column One Description</label>
                                <textarea name="row_three_column_one_description" class="form-control form-control-sm editor">{!! $about->row_three_column_one_description !!}</textarea>
                            </div>
                        </div>

                        <hr>
                        {{-- Row Three Column Two Section  --}}

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">Row Three Column Two</label>
                                <input type="text" name="row_three_column_two" placeholder="Row Three Column Two"
                                    class="form-control form-control-sm" value="{{ $about->row_three_column_two }}">
                            </div>
                        </div>


                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">Row Three Column Two Title</label>
                                <input type="text" name="row_three_column_two_title"
                                    placeholder="Row Three Column Two Title" class="form-control form-control-sm"
                                    value="{{ $about->row_three_column_two_title }}">
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">Row Three Column Two Url</label>
                                <input type="text" name="row_three_column_two_url"
                                    placeholder="Row Three Column Two Title" class="form-control form-control-sm"
                                    value="{{ $about->row_three_column_two_url }}">
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">Row Three Column Two Image</label>
                                <input type="file" name="row_three_column_two_image"
                                    class="form-control form-control-sm">

                                <img src="{{ asset('upload/about/' . $about->row_three_column_two_image) }}"
                                    alt="" style="width: 60px; height: 60px;" class="mt-3">
                            </div>
                        </div>

                        <div class="col-12 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">Row Three Column Two Description</label>
                                <textarea name="row_three_column_two_description" class="form-control form-control-sm editor">{!! $about->row_three_column_two_description !!}</textarea>
                            </div>
                        </div>

                        <hr>

                        {{-- Row Three Column Three Section  --}}

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">Row Three Column Three</label>
                                <input type="text" name="row_three_column_three"
                                    placeholder="Row Three Column Three" class="form-control form-control-sm"
                                    value="{{ $about->row_three_column_three }}">
                            </div>
                        </div>


                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">Row Three Column Three Title</label>
                                <input type="text" name="row_three_column_three_title"
                                    placeholder="Row Three Column three Title" class="form-control form-control-sm"
                                    value="{{ $about->row_three_column_three_title }}">
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">Row Three Column Three Url</label>
                                <input type="text" name="row_three_column_three_url"
                                    placeholder="Row Three Column Three Title" class="form-control form-control-sm"
                                    value="{{ $about->row_three_column_three_url }}">
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">Row Three Column Three Image</label>
                                <input type="file" name="row_three_column_three_image"
                                    class="form-control form-control-sm">

                                <img src="{{ asset('upload/about/' . $about->row_three_column_three_image) }}"
                                    alt="" style="width: 60px; height: 60px;" class="mt-3">
                            </div>
                        </div>

                        <div class="col-12 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">Row Three Column Three Description</label>
                                <textarea name="row_three_column_three_description" class="form-control form-control-sm editor">{!! $about->row_three_column_three_description !!}</textarea>
                            </div>
                        </div>


                    </div>
                </div>

                {{-- Row Four  --}}
                <div class="card bg-light mb-3">

                    <div class="row p-4">



                        {{-- Row Four Column One Section  --}}

                        <div class="col-6 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">Row four Column One Title</label>
                                <input type="text" name="row_four_column_one_title"
                                    placeholder="Row Four Column One Title" class="form-control form-control-sm"
                                    value="{{ $about->row_four_column_one_title }}">
                            </div>
                        </div>


                        <div class="col-6 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">Row Three Column One Header</label>
                                <input type="text" name="row_four_column_one_header"
                                    placeholder="Row Three Column One Header" class="form-control form-control-sm"
                                    value="{{ $about->row_four_column_one_header }}">
                            </div>
                        </div>


                        <div class="col-12 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">Row Four Column One Description</label>
                                <textarea name="row_four_column_one_description" class="form-control form-control-sm editor">{!! $about->row_four_column_one_description !!}</textarea>
                            </div>
                        </div>

                        <hr>

                        {{-- Row Four Column Two Section  --}}

                        <div class="col-6 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">Row four Column Two Title</label>
                                <input type="text" name="row_four_column_two_title"
                                    placeholder="Row Four Column Two Title" class="form-control form-control-sm"
                                    value="{{ $about->row_four_column_two_title }}">
                            </div>
                        </div>


                        <div class="col-6 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">Row Three Column Two Header</label>
                                <input type="text" name="row_four_column_two_header"
                                    placeholder="Row Three Column Two Header" class="form-control form-control-sm"
                                    value="{{ $about->row_four_column_two_header }}">
                            </div>
                        </div>


                        <div class="col-12 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">Row Four Column Two Description</label>
                                <textarea name="row_four_column_two_description" class="form-control form-control-sm editor">{!! $about->row_four_column_two_description !!}</textarea>
                            </div>
                        </div>


                    </div>
                </div>



                <div class="col-12 mb-3 mt-4">
                    <button type="submit" class="btn btn-primary rounded-0 px-5 btn-sm float-end">Submit</button>
                </div>

            </form>

        </div>

    </div>
</x-admin-app-layout>
