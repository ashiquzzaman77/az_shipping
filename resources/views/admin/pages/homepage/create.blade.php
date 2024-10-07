<x-admin-app-layout :title="'HomePage Create'">
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

            <form id="myForm" method="post" action="{{ route('admin.homepage.store') }}"
                enctype="multipart/form-data">
                @csrf
                {{-- Banner Section  --}}
                <div class="card bg-light mb-3">
                    <div class="row p-4 pb-0">
                        <div class="col-4 mb-5">
                            <x-metronic.label for="banner_one_image"
                                class="col-form-label fw-bold fs-6">{{ __('Banner One Image') }}
                            </x-metronic.label>
                            <x-metronic.file-input id="banner_one_image" name="banner_one_image"
                                :value="old('banner_one_image')"></x-metronic.file-input>
                        </div>
                        <div class="col-4 mb-5">
                            <x-metronic.label for="banner_two_image"
                                class="col-form-label fw-bold fs-6">{{ __('Banner two Image') }}
                            </x-metronic.label>
                            <x-metronic.file-input id="banner_two_image" name="banner_two_image"
                                :value="old('banner_two_image')"></x-metronic.file-input>
                        </div>
                        <div class="col-4 mb-5">
                            <x-metronic.label for="banner_three_image"
                                class="col-form-label fw-bold fs-6">{{ __('Banner three Image') }}
                            </x-metronic.label>
                            <x-metronic.file-input id="banner_three_image" name="banner_three_image"
                                :value="old('banner_three_image')"></x-metronic.file-input>
                        </div>
                    </div>
                    <div class="row p-4 pt-0">
                        <div class="col-4 mb-2">
                            <x-metronic.label for="banner_one_url"
                                class="col-form-label fw-bold fs-6">{{ __('Banner One Url') }}
                            </x-metronic.label>

                            <x-metronic.input id="banner_one_url" type="banner_one_url" name="banner_one_url"
                                :value="old('banner_one_url')" placeholder="Enter the Url"></x-metronic.input>
                        </div>
                        <div class="col-4 mb-2">
                            <x-metronic.label for="banner_two_url"
                                class="col-form-label fw-bold fs-6">{{ __('Banner two Url') }}
                            </x-metronic.label>

                            <x-metronic.input id="banner_two_url" type="banner_two_url" name="banner_two_url"
                                :value="old('banner_two_url')" placeholder="Enter the Url"></x-metronic.input>
                        </div>
                        <div class="col-4 mb-2">
                            <x-metronic.label for="banner_three_url"
                                class="col-form-label fw-bold fs-6">{{ __('Banner three Url') }}
                            </x-metronic.label>

                            <x-metronic.input id="banner_three_url" type="banner_three_url" name="banner_three_url"
                                :value="old('banner_three_url')" placeholder="Enter the Url"></x-metronic.input>
                        </div>
                    </div>
                </div>

                {{-- Row Two --}}
                <div class="card bg-light mb-3">
                    <div class="row p-4">
                        <div class="col-lg-4 mb-4">
                            <x-metronic.label for="row_two_badge"
                                class="col-form-label fw-bold fs-6 ">{{ __('Row Two Badge') }}
                            </x-metronic.label>

                            <x-metronic.input id="row_two_badge" type="text" name="row_two_badge"
                                placeholder="Enter the Badge" :value="old('row_two_badge')"></x-metronic.input>
                        </div>
                        <div class="col-lg-4 mb-4">
                            <x-metronic.label for="row_two_button_name"
                                class="col-form-label fw-bold fs-6 ">{{ __('Row Two Button Name') }}
                            </x-metronic.label>

                            <x-metronic.input id="row_two_button_name" type="text" name="row_two_button_name"
                                placeholder="Enter the Button Name" :value="old('row_two_button_name')"></x-metronic.input>
                        </div>
                        <div class="col-lg-4 mb-4">
                            <x-metronic.label for="row_two_button_url"
                                class="col-form-label fw-bold fs-6 ">{{ __('Row Two Button Link') }}
                            </x-metronic.label>

                            <x-metronic.input id="row_two_button_url" type="url" name="row_two_button_url"
                                placeholder="Enter the Button Link" :value="old('row_two_button_url')"></x-metronic.input>
                        </div>
                        <div class="col-lg-8 mb-4">
                            <x-metronic.label for="row_two_title"
                                class="col-form-label fw-bold fs-6 ">{{ __('Row Two Title') }}
                            </x-metronic.label>

                            <x-metronic.input id="row_two_title" type="text" name="row_two_title"
                                placeholder="Enter the Title" :value="old('row_two_title')"></x-metronic.input>
                        </div>
                        <div class="col-lg-4 mb-4">
                            <x-metronic.label for="row_two_image"
                                class="col-form-label fw-bold fs-6 ">{{ __('Row Two Image') }}
                            </x-metronic.label>

                            <x-metronic.input id="row_two_image" type="file" name="row_two_image"
                                :value="old('row_two_image')"></x-metronic.input>
                        </div>

                        <div class="col-lg-12 mb-4">
                            <x-metronic.label for="row_two_description"
                                class="col-form-label fw-bold fs-6 ">{{ __('Row Two Description') }}
                            </x-metronic.label>

                            <x-metronic.textarea id="row_two_description" class="editor" type="text" name="row_two_description"
                                placeholder="Enter the Short Description" :value="old('row_two_description')"></x-metronic.textarea>
                        </div>

                    </div>
                </div>

                {{-- Row Three  --}}
                <div class="card bg-light mb-3">
                    <div class="row px-4">
                        <div class="col-lg-4 mb-4">
                            <x-metronic.label for="row_three_background_image"
                                class="col-form-label fw-bold fs-6 ">{{ __('Row Three Background Image') }}
                            </x-metronic.label>
                            <x-metronic.file-input id="row_three_background_image" name="row_three_background_image"
                                :value="old('row_three_background_image')"></x-metronic.file-input>

                        </div>
                        <div class="col-lg-8 mb-4">
                            <x-metronic.label for="row_three_title"
                                class="col-form-label fw-bold fs-6 ">{{ __('Row Three Title') }}
                            </x-metronic.label>

                            <x-metronic.input id="row_three_title" type="text" name="row_three_title"
                                placeholder="Enter the Title" :value="old('row_three_title')"></x-metronic.input>
                        </div>

                        <div class="col-lg-12 mb-4">
                            <x-metronic.label for="row_three_description"
                                class="col-form-label fw-bold fs-6 ">{{ __('Row Three Description') }}
                            </x-metronic.label>

                            <x-metronic.textarea id="row_three_description" type="text"
                                name="row_three_description" placeholder="Enter Row Three Description"
                                :value="old('row_three_description')"></x-metronic.textarea>
                        </div>
                    </div>
                    <div class="row px-4">
                        <div class="col-lg-6 mb-4">
                            <x-metronic.label for="row_three_column_one_title"
                                class="col-form-label fw-bold fs-6 ">{{ __('Row Three Column One Title') }}
                            </x-metronic.label>

                            <x-metronic.input id="row_three_column_one_title" type="text"
                                name="row_three_column_one_title" placeholder="Enter the Row Three Column One Title"
                                :value="old('row_three_column_one_title')"></x-metronic.input>
                        </div>
                        <div class="col-lg-3 mb-4">
                            <x-metronic.label for="row_three_column_one_button_name"
                                class="col-form-label fw-bold fs-6 ">{{ __('Row Three Column One Button Name') }}
                            </x-metronic.label>

                            <x-metronic.input id="row_three_column_one_button_name" type="text"
                                name="row_three_column_one_button_name" placeholder="Enter the Button Name"
                                :value="old('row_three_column_one_button_name')"></x-metronic.input>
                        </div>
                        <div class="col-lg-3 mb-4">
                            <x-metronic.label for="row_three_column_one_button_url"
                                class="col-form-label fw-bold fs-6 ">{{ __('Row Three Column One Button Link') }}
                            </x-metronic.label>

                            <x-metronic.input id="row_three_column_one_button_url" type="url"
                                name="row_three_column_one_button_url" placeholder="Enter the Button Link"
                                :value="old('row_three_column_one_button_url')"></x-metronic.input>
                        </div>
                        <div class="col-lg-3 mb-4">
                            <x-metronic.label for="row_three_column_one_url"
                                class="col-form-label fw-bold fs-6 ">{{ __('Row Three Column One Link') }}
                            </x-metronic.label>

                            <x-metronic.input id="row_three_column_one_url" type="url"
                                name="row_three_column_one_url" placeholder="Enter the Button Link"
                                :value="old('row_three_column_one_url')"></x-metronic.input>
                        </div>
                        <div class="col-lg-9 mb-4">
                            <x-metronic.label for="row_three_column_one_description"
                                class="col-form-label fw-bold fs-6 ">{{ __('Row Three Column One Description') }}
                            </x-metronic.label>

                            <x-metronic.textarea id="row_three_column_one_description" type="text"
                                name="row_three_column_one_description" placeholder="Enter the Short Description"
                                :value="old('row_three_column_one_description')"></x-metronic.textarea>
                        </div>
                    </div>
                    <div class="row px-4">
                        <div class="col-lg-6 mb-4">
                            <x-metronic.label for="row_three_column_two_title"
                                class="col-form-label fw-bold fs-6 ">{{ __('Row Three Column Two Title') }}
                            </x-metronic.label>

                            <x-metronic.input id="row_three_column_two_title" type="text"
                                name="row_three_column_two_title" placeholder="Enter the Row Three Column Two Title"
                                :value="old('row_three_column_two_title')"></x-metronic.input>
                        </div>
                        <div class="col-lg-3 mb-4">
                            <x-metronic.label for="row_three_column_two_button_name"
                                class="col-form-label fw-bold fs-6 ">{{ __('Row Three Column Two Button Name') }}
                            </x-metronic.label>

                            <x-metronic.input id="row_three_column_two_button_name" type="text"
                                name="row_three_column_two_button_name" placeholder="Enter the Button Name"
                                :value="old('row_three_column_two_button_name')"></x-metronic.input>
                        </div>
                        <div class="col-lg-3 mb-4">
                            <x-metronic.label for="row_three_column_two_button_url"
                                class="col-form-label fw-bold fs-6 ">{{ __('Row Three Column Two Button Link') }}
                            </x-metronic.label>

                            <x-metronic.input id="row_three_column_two_button_url" type="url"
                                name="row_three_column_two_button_url" placeholder="Enter the Button Link"
                                :value="old('row_three_column_two_button_url')"></x-metronic.input>
                        </div>
                        <div class="col-lg-3 mb-4">
                            <x-metronic.label for="row_three_column_two_url"
                                class="col-form-label fw-bold fs-6 ">{{ __('Row Three Column Two Link') }}
                            </x-metronic.label>

                            <x-metronic.input id="row_three_column_two_url" type="url"
                                name="row_three_column_two_url" placeholder="Enter the Button Link"
                                :value="old('row_three_column_two_url')"></x-metronic.input>
                        </div>
                        <div class="col-lg-9 mb-4">
                            <x-metronic.label for="row_three_column_two_description"
                                class="col-form-label fw-bold fs-6 ">{{ __('Row Three Column Two Description') }}
                            </x-metronic.label>

                            <x-metronic.textarea id="row_three_column_two_description" type="text"
                                name="row_three_column_two_description" placeholder="Enter the Short Description"
                                :value="old('row_three_column_two_description')"></x-metronic.textarea>
                        </div>
                    </div>
                    <div class="row px-4">
                        <div class="col-lg-6 mb-4">
                            <x-metronic.label for="row_three_column_three_title"
                                class="col-form-label fw-bold fs-6 ">{{ __('Row Three Column Three Title') }}
                            </x-metronic.label>

                            <x-metronic.input id="row_three_column_three_title" type="text"
                                name="row_three_column_three_title"
                                placeholder="Enter the Row Three Column Three Title"
                                :value="old('row_three_column_three_title')"></x-metronic.input>
                        </div>
                        <div class="col-lg-3 mb-4">
                            <x-metronic.label for="row_three_column_three_button_name"
                                class="col-form-label fw-bold fs-6 ">{{ __('Row Three Column Three Button Name') }}
                            </x-metronic.label>

                            <x-metronic.input id="row_three_column_three_button_name" type="text"
                                name="row_three_column_three_button_name" placeholder="Enter the Button Name"
                                :value="old('row_three_column_three_button_name')"></x-metronic.input>
                        </div>
                        <div class="col-lg-3 mb-4">
                            <x-metronic.label for="row_three_column_three_button_url"
                                class="col-form-label fw-bold fs-6 ">{{ __('Row Three Column Three Button Link') }}
                            </x-metronic.label>

                            <x-metronic.input id="row_three_column_three_button_url" type="url"
                                name="row_three_column_three_button_url" placeholder="Enter the Button Link"
                                :value="old('row_three_column_three_button_url')"></x-metronic.input>
                        </div>
                        <div class="col-lg-3 mb-4">
                            <x-metronic.label for="row_three_column_three_url"
                                class="col-form-label fw-bold fs-6 ">{{ __('Row Three Column Three Link') }}
                            </x-metronic.label>

                            <x-metronic.input id="row_three_column_three_url" type="url"
                                name="row_three_column_three_url" placeholder="Enter the Button Link"
                                :value="old('row_three_column_three_url')"></x-metronic.input>
                        </div>
                        <div class="col-lg-9 mb-4">
                            <x-metronic.label for="row_three_column_three_description"
                                class="col-form-label fw-bold fs-6 ">{{ __('Row Three Column Three Description') }}
                            </x-metronic.label>

                            <x-metronic.textarea id="row_three_column_three_description" type="text"
                                name="row_three_column_three_description" placeholder="Enter the Description"
                                :value="old('row_three_column_three_description')"></x-metronic.textarea>
                        </div>
                    </div>
                    <div class="row px-4">
                        <div class="col-lg-6 mb-4">
                            <x-metronic.label for="row_three_column_four_title"
                                class="col-form-label fw-bold fs-6 ">{{ __('Row Three Column Four Title') }}
                            </x-metronic.label>

                            <x-metronic.input id="row_three_column_four_title" type="text"
                                name="row_three_column_four_title" placeholder="Enter the Row Three Column Four Title"
                                :value="old('row_three_column_four_title')"></x-metronic.input>
                        </div>
                        <div class="col-lg-3 mb-4">
                            <x-metronic.label for="row_three_column_four_button_name"
                                class="col-form-label fw-bold fs-6 ">{{ __('Row Three Column Four Button Name') }}
                            </x-metronic.label>

                            <x-metronic.input id="row_three_column_four_button_name" type="text"
                                name="row_three_column_four_button_name" placeholder="Enter the Button Name"
                                :value="old('row_three_column_four_button_name')"></x-metronic.input>
                        </div>
                        <div class="col-lg-3 mb-4">
                            <x-metronic.label for="row_three_column_four_button_url"
                                class="col-form-label fw-bold fs-6 ">{{ __('Row Three Column Four Button Link') }}
                            </x-metronic.label>

                            <x-metronic.input id="row_three_column_four_button_url" type="url"
                                name="row_three_column_four_button_url" placeholder="Enter the Button Link"
                                :value="old('row_three_column_four_button_url')"></x-metronic.input>
                        </div>
                        <div class="col-lg-3 mb-4">
                            <x-metronic.label for="row_three_column_four_url"
                                class="col-form-label fw-bold fs-6 ">{{ __('Row Three Column Four Link') }}
                            </x-metronic.label>

                            <x-metronic.input id="row_three_column_four_url" type="url"
                                name="row_three_column_four_url" placeholder="Enter the Button Link"
                                :value="old('row_three_column_four_url')"></x-metronic.input>
                        </div>
                        <div class="col-lg-9 mb-4">
                            <x-metronic.label for="row_three_column_four_description"
                                class="col-form-label fw-bold fs-6 ">{{ __('Row Three Column Four Description') }}
                            </x-metronic.label>

                            <x-metronic.textarea id="row_three_column_four_description" type="text"
                                name="row_three_column_four_description" placeholder="Enter the Short Description"
                                :value="old('row_three_column_four_description')"></x-metronic.textarea>
                        </div>
                    </div>
                </div>

                {{-- Row Four  --}}

                <div class="card bg-light mb-3">
                    <div class="row px-4">

                        <div class="col-lg-3 mb-4">
                            <x-metronic.label for="row_four_title"
                                class="col-form-label fw-bold fs-6 ">{{ __('Row Four Title') }}
                            </x-metronic.label>

                            <x-metronic.input id="row_four_title" type="text" name="row_four_title"
                                placeholder="Enter the Title" :value="old('row_four_title')"></x-metronic.input>
                        </div>

                        <div class="col-lg-3 mb-4">
                            <x-metronic.label for="row_two_button_name"
                                class="col-form-label fw-bold fs-6 ">{{ __('Row Four Header') }}
                            </x-metronic.label>

                            <x-metronic.input id="row_four_header" type="text" name="row_four_header"
                                placeholder="Enter Four Header" :value="old('row_four_header')"></x-metronic.input>
                        </div>

                        <div class="col-lg-3 mb-4">
                            <x-metronic.label for="row_four_button_name"
                                class="col-form-label fw-bold fs-6 ">{{ __('Row Four Button Name') }}
                            </x-metronic.label>

                            <x-metronic.input id="row_four_button_name" type="text" name="row_four_button_name"
                                placeholder="Enter Row Four Button Name" :value="old('row_four_button_name')"></x-metronic.input>
                        </div>

                        <div class="col-lg-3 mb-4">
                            <x-metronic.label for="row_four_button_url"
                                class="col-form-label fw-bold fs-6 ">{{ __('Row Four Button Url') }}
                            </x-metronic.label>

                            <x-metronic.input id="row_four_button_url" type="text" name="row_four_button_url"
                                placeholder="Enter Row Four Button Url" :value="old('row_four_button_url')"></x-metronic.input>
                        </div>

                        {{-- Row Four One  --}}

                        <div class="col-lg-3 mb-5">
                            <x-metronic.label for="row_four_column_one_image"
                                class="col-form-label fw-bold fs-6">{{ __('Row Four One Image') }}
                            </x-metronic.label>
                            <x-metronic.file-input id="row_four_column_one_image" name="row_four_column_one_image"
                                :value="old('row_four_column_one_image')"></x-metronic.file-input>
                        </div>

                        <div class="col-lg-3 mb-4">
                            <x-metronic.label for="row_four_column_one_url"
                                class="col-form-label fw-bold fs-6 ">{{ __('Row Four One Url') }}
                            </x-metronic.label>

                            <x-metronic.input id="row_four_column_one_url" type="text"
                                name="row_four_column_one_url" placeholder="Enter Four One Url"
                                :value="old('row_four_column_one_url')"></x-metronic.input>
                        </div>

                        <div class="col-lg-6 mb-4">
                            <x-metronic.label for="row_four_column_one_description"
                                class="col-form-label fw-bold fs-6 ">{{ __('Row Four One Description') }}
                            </x-metronic.label>

                            <x-metronic.textarea id="row_four_column_one_description" type="text"
                                name="row_four_column_one_description" placeholder="Enter Row Four One Description"
                                :value="old('row_four_column_one_description')"></x-metronic.textarea>
                        </div>

                        {{-- Row Four Two  --}}

                        <div class="col-lg-3 mb-5">
                            <x-metronic.label for="row_four_column_two_image"
                                class="col-form-label fw-bold fs-6">{{ __('Row Four Two Image') }}
                            </x-metronic.label>
                            <x-metronic.file-input id="row_four_column_two_image" name="row_four_column_two_image"
                                :value="old('row_four_column_two_image')"></x-metronic.file-input>
                        </div>

                        <div class="col-lg-3 mb-4">
                            <x-metronic.label for="row_four_column_two_url"
                                class="col-form-label fw-bold fs-6 ">{{ __('Row Four Two Url') }}
                            </x-metronic.label>

                            <x-metronic.input id="row_four_column_two_url" type="text"
                                name="row_four_column_two_url" placeholder="Enter Four One Url"
                                :value="old('row_four_column_two_url')"></x-metronic.input>
                        </div>

                        <div class="col-lg-6 mb-4">
                            <x-metronic.label for="row_four_column_two_description"
                                class="col-form-label fw-bold fs-6 ">{{ __('Row Four Two Description') }}
                            </x-metronic.label>

                            <x-metronic.textarea id="row_four_column_two_description" type="text"
                                name="row_four_column_two_description" placeholder="Enter Row Four Two Description"
                                :value="old('row_four_column_two_description')"></x-metronic.textarea>
                        </div>

                        {{-- Row Four Three  --}}

                        <div class="col-lg-3 mb-5">
                            <x-metronic.label for="row_four_column_three_image"
                                class="col-form-label fw-bold fs-6">{{ __('Row Four Three Image') }}
                            </x-metronic.label>
                            <x-metronic.file-input id="row_four_column_three_image" name="row_four_column_three_image"
                                :value="old('row_four_column_three_image')"></x-metronic.file-input>
                        </div>

                        <div class="col-lg-3 mb-4">
                            <x-metronic.label for="row_four_column_three_url"
                                class="col-form-label fw-bold fs-6 ">{{ __('Row Four Three Url') }}
                            </x-metronic.label>

                            <x-metronic.input id="row_four_column_three_url" type="text"
                                name="row_four_column_three_url" placeholder="Enter Four TWO Url"
                                :value="old('row_four_column_three_url')"></x-metronic.input>
                        </div>

                        <div class="col-lg-6 mb-4">
                            <x-metronic.label for="row_four_column_three_description"
                                class="col-form-label fw-bold fs-6 ">{{ __('Row Four Three Description') }}
                            </x-metronic.label>

                            <x-metronic.textarea id="row_four_column_three_description" type="text"
                                name="row_four_column_three_description"
                                placeholder="Enter Row Four Three Description"
                                :value="old('row_four_column_three_description')"></x-metronic.textarea>
                        </div>

                        {{-- Row Four Four  --}}

                        <div class="col-lg-3 mb-5">
                            <x-metronic.label for="row_four_column_four_image"
                                class="col-form-label fw-bold fs-6">{{ __('Row Four Four Image') }}
                            </x-metronic.label>
                            <x-metronic.file-input id="row_four_column_four_image" name="row_four_column_four_image"
                                :value="old('row_four_column_four_image')"></x-metronic.file-input>
                        </div>

                        <div class="col-lg-3 mb-4">
                            <x-metronic.label for="row_four_column_four_url"
                                class="col-form-label fw-bold fs-6 ">{{ __('Row Four Four Url') }}
                            </x-metronic.label>

                            <x-metronic.input id="row_four_column_four_url" type="text"
                                name="row_four_column_four_url" placeholder="Enter Four Four Url"
                                :value="old('row_four_column_four_url')"></x-metronic.input>
                        </div>

                        <div class="col-lg-6 mb-4">
                            <x-metronic.label for="row_four_column_three_description"
                                class="col-form-label fw-bold fs-6 ">{{ __('Row Four Four Description') }}
                            </x-metronic.label>

                            <x-metronic.textarea id="row_four_column_four_description" type="text"
                                name="row_four_column_four_description" placeholder="Enter Row Four Four Description"
                                :value="old('row_four_column_four_description')"></x-metronic.textarea>
                        </div>

                        {{-- Row Five Four  --}}

                        <div class="col-lg-3 mb-5">
                            <x-metronic.label for="row_four_column_five_image"
                                class="col-form-label fw-bold fs-6">{{ __('Row Four Five Image') }}
                            </x-metronic.label>
                            <x-metronic.file-input id="row_four_column_five_image" name="row_four_column_five_image"
                                :value="old('row_four_column_five_image')"></x-metronic.file-input>
                        </div>

                        <div class="col-lg-3 mb-4">
                            <x-metronic.label for="row_four_column_five_url"
                                class="col-form-label fw-bold fs-6 ">{{ __('Row Four Five Url') }}
                            </x-metronic.label>

                            <x-metronic.input id="row_four_column_five_url" type="text"
                                name="row_four_column_five_url" placeholder="Enter Four Five Url"
                                :value="old('row_four_column_five_url')"></x-metronic.input>
                        </div>

                        <div class="col-lg-6 mb-4">
                            <x-metronic.label for="row_four_column_thive_description"
                                class="col-form-label fw-bold fs-6 ">{{ __('Row Four Five Description') }}
                            </x-metronic.label>

                            <x-metronic.textarea id="row_four_column_five_description" type="text"
                                name="row_four_column_five_description" placeholder="Enter Row Four Five Description"
                                :value="old('row_four_column_five_description')"></x-metronic.textarea>
                        </div>

                        {{-- Row Six Four  --}}

                        <div class="col-lg-3 mb-5">
                            <x-metronic.label for="row_four_column_six_image"
                                class="col-form-label fw-bold fs-6">{{ __('Row Four Six Image') }}
                            </x-metronic.label>
                            <x-metronic.file-input id="row_four_column_six_image" name="row_four_column_six_image"
                                :value="old('row_four_column_six_image')"></x-metronic.file-input>
                        </div>

                        <div class="col-lg-3 mb-4">
                            <x-metronic.label for="row_four_column_six_url"
                                class="col-form-label fw-bold fs-6 ">{{ __('Row Four Six Url') }}
                            </x-metronic.label>

                            <x-metronic.input id="row_four_column_six_url" type="text"
                                name="row_four_column_six_url" placeholder="Enter Four Six Url"
                                :value="old('row_four_column_six_url')"></x-metronic.input>
                        </div>

                        <div class="col-lg-6 mb-4">
                            <x-metronic.label for="row_four_column_tsix_description"
                                class="col-form-label fw-bold fs-6 ">{{ __('Row Four Six Description') }}
                            </x-metronic.label>

                            <x-metronic.textarea id="row_four_column_six_description" type="text"
                                name="row_four_column_six_description" placeholder="Enter Row Four Six Description"
                                :value="old('row_four_column_six_description')"></x-metronic.textarea>
                        </div>

                    </div>
                </div>

                {{-- Row Five  --}}

                <div class="card bg-light mb-3">
                    <div class="row px-4">

                        <div class="col-lg-6 mb-4">
                            <x-metronic.label for="row_five_title"
                                class="col-form-label fw-bold fs-6 ">{{ __('Row Five Title') }}
                            </x-metronic.label>

                            <x-metronic.input id="row_five_title" type="text" name="row_five_title"
                                placeholder="Enter Five Title" :value="old('row_five_title')"></x-metronic.input>
                        </div>

                        <div class="col-lg-6 mb-4">
                            <x-metronic.label for="row_five_header"
                                class="col-form-label fw-bold fs-6 ">{{ __('Row Five Header') }}
                            </x-metronic.label>

                            <x-metronic.input id="row_five_header" type="text" name="row_five_header"
                                placeholder="Enter Five Header" :value="old('row_five_header')"></x-metronic.input>
                        </div>

                        <div class="col-lg-4 mb-4">
                            <x-metronic.label for="row_five_course_one"
                                class="col-form-label fw-bold fs-6 ">{{ __('Row Five Course One') }}
                            </x-metronic.label>

                            <x-metronic.select-option id="row_five_course_one" type="text" name="row_five_course_one">
                                <option selected disabled>Row Five Course One</option>
                                @foreach ($courses as $course)
                                    <option value="{{ $course->id }}">{{ $course->name }}</option>
                                @endforeach
                            </x-metronic.select-option>
                        </div>

                        <div class="col-lg-4 mb-4">
                            <x-metronic.label for="row_five_course_two"
                                class="col-form-label fw-bold fs-6 ">{{ __('Row Five Course Two') }}
                            </x-metronic.label>

                            <x-metronic.select-option id="row_five_course_two" type="text" name="row_five_course_two">
                                <option selected disabled>Row Five Course Two</option>
                                @foreach ($courses as $course)
                                    <option value="{{ $course->id }}">{{ $course->name }}</option>
                                @endforeach
                            </x-metronic.select-option>
                        </div>

                        <div class="col-lg-4 mb-4">
                            <x-metronic.label for="row_five_course_three"
                                class="col-form-label fw-bold fs-6 ">{{ __('Row Five Course Three') }}
                            </x-metronic.label>

                            <x-metronic.select-option id="row_five_course_three" type="text" name="row_five_course_three">
                                <option selected disabled>Row Five Course Three</option>
                                @foreach ($courses as $course)
                                    <option value="{{ $course->id }}">{{ $course->name }}</option>
                                @endforeach
                            </x-metronic.select-option>
                        </div>


                    </div>
                </div>

                {{-- Row Six  --}}

                <div class="card bg-light mb-3">
                    <div class="row px-4">

                        <div class="col-lg-6 mb-4">
                            <x-metronic.label for="row_six_title"
                                class="col-form-label fw-bold fs-6 ">{{ __('Row Six Title') }}
                            </x-metronic.label>

                            <x-metronic.input id="row_six_title" type="text" name="row_six_title"
                                placeholder="Enter Six Title" :value="old('row_six_title')"></x-metronic.input>
                        </div>

                        <div class="col-lg-6 mb-4">
                            <x-metronic.label for="row_six_header"
                                class="col-form-label fw-bold fs-6 ">{{ __('Row Six Header') }}
                            </x-metronic.label>

                            <x-metronic.input id="row_six_header" type="text" name="row_six_header"
                                placeholder="Enter Six Header" :value="old('row_six_header')"></x-metronic.input>
                        </div>

                        <div class="col-lg-4 mb-4">
                            <x-metronic.label for="row_six_button_name"
                                class="col-form-label fw-bold fs-6 ">{{ __('Row Six Button Name') }}
                            </x-metronic.label>

                            <x-metronic.input id="row_six_button_name" type="text" name="row_six_button_name"
                                placeholder="Enter Six Button Name" :value="old('row_six_header')"></x-metronic.input>
                        </div>

                        <div class="col-lg-4 mb-4">
                            <x-metronic.label for="row_six_button_url"
                                class="col-form-label fw-bold fs-6 ">{{ __('Row Six Button Url') }}
                            </x-metronic.label>

                            <x-metronic.input id="row_six_button_url" type="text" name="row_six_button_url"
                                placeholder="Enter Six Button Url" :value="old('row_six_button_url')"></x-metronic.input>
                        </div>

                        <div class="col-lg-4 mb-4">
                            <x-metronic.label for="row_six_background_image"
                                class="col-form-label fw-bold fs-6 ">{{ __('Row Six Background Image') }}
                            </x-metronic.label>
                            <x-metronic.file-input id="row_six_background_image" name="row_six_background_image"
                                :value="old('row_six_background_image')"></x-metronic.file-input>

                        </div>

                        <div class="col-lg-3 mb-4">
                            <x-metronic.label for="row_six_section_one_title"
                                class="col-form-label fw-bold fs-6 ">{{ __('Row Six One Tittle') }}
                            </x-metronic.label>

                            <x-metronic.input id="row_six_section_one_title" type="text" name="row_six_section_one_title"
                                placeholder="Enter Six One Tittle" :value="old('row_six_section_one_title')"></x-metronic.input>
                        </div>

                        <div class="col-lg-3 mb-4">
                            <x-metronic.label for="row_six_section_one_url"
                                class="col-form-label fw-bold fs-6 ">{{ __('Row Six One Url') }}
                            </x-metronic.label>

                            <x-metronic.input id="row_six_section_one_title" type="text" name="row_six_section_one_url"
                                placeholder="Enter Six One Url" :value="old('row_six_section_one_url')"></x-metronic.input>
                        </div>

                        <div class="col-lg-3 mb-4">
                            <x-metronic.label for="row_six_section_two_title"
                                class="col-form-label fw-bold fs-6 ">{{ __('Row Six Two Tittle') }}
                            </x-metronic.label>

                            <x-metronic.input id="row_six_section_two_title" type="text" name="row_six_section_two_title"
                                placeholder="Enter Six Two Tittle" :value="old('row_six_section_two_title')"></x-metronic.input>
                        </div>

                        <div class="col-lg-3 mb-4">
                            <x-metronic.label for="row_six_section_two_url"
                                class="col-form-label fw-bold fs-6 ">{{ __('Row Six Two Url') }}
                            </x-metronic.label>

                            <x-metronic.input id="row_six_section_two_title" type="text" name="row_six_section_two_url"
                                placeholder="Enter Six Two Url" :value="old('row_six_section_two_url')"></x-metronic.input>
                        </div>

                        <div class="col-lg-3 mb-4">
                            <x-metronic.label for="row_six_section_three_title"
                                class="col-form-label fw-bold fs-6 ">{{ __('Row Six Three Tittle') }}
                            </x-metronic.label>

                            <x-metronic.input id="row_six_section_three_title" type="text" name="row_six_section_three_title"
                                placeholder="Enter Six Three Tittle" :value="old('row_six_section_three_title')"></x-metronic.input>
                        </div>

                        <div class="col-lg-3 mb-4">
                            <x-metronic.label for="row_six_section_three_url"
                                class="col-form-label fw-bold fs-6 ">{{ __('Row Six Three Url') }}
                            </x-metronic.label>

                            <x-metronic.input id="row_six_section_three_title" type="text" name="row_six_section_three_url"
                                placeholder="Enter Six Three Url" :value="old('row_six_section_three_url')"></x-metronic.input>
                        </div>

                        <div class="col-lg-3 mb-4">
                            <x-metronic.label for="row_six_section_four_title"
                                class="col-form-label fw-bold fs-6 ">{{ __('Row Six Four Tittle') }}
                            </x-metronic.label>

                            <x-metronic.input id="row_six_section_four_title" type="text" name="row_six_section_four_title"
                                placeholder="Enter Six Four Tittle" :value="old('row_six_section_four_title')"></x-metronic.input>
                        </div>

                        <div class="col-lg-3 mb-4">
                            <x-metronic.label for="row_six_section_four_url"
                                class="col-form-label fw-bold fs-6 ">{{ __('Row Six Four Url') }}
                            </x-metronic.label>

                            <x-metronic.input id="row_six_section_four_title" type="text" name="row_six_section_four_url"
                                placeholder="Enter Six Four Url" :value="old('row_six_section_four_url')"></x-metronic.input>
                        </div>

                        <div class="col-lg-3 mb-4">
                            <x-metronic.label for="row_six_section_five_title"
                                class="col-form-label fw-bold fs-6 ">{{ __('Row Six Five Tittle') }}
                            </x-metronic.label>

                            <x-metronic.input id="row_six_section_five_title" type="text" name="row_six_section_five_title"
                                placeholder="Enter Six Five Tittle" :value="old('row_six_section_five_title')"></x-metronic.input>
                        </div>

                        <div class="col-lg-3 mb-4">
                            <x-metronic.label for="row_six_section_five_url"
                                class="col-form-label fw-bold fs-6 ">{{ __('Row Six Five Url') }}
                            </x-metronic.label>

                            <x-metronic.input id="row_six_section_five_title" type="text" name="row_six_section_five_url"
                                placeholder="Enter Six Five Url" :value="old('row_six_section_five_url')"></x-metronic.input>
                        </div>

                        <div class="col-lg-3 mb-4">
                            <x-metronic.label for="row_six_section_six_title"
                                class="col-form-label fw-bold fs-6 ">{{ __('Row Six  Tittle') }}
                            </x-metronic.label>

                            <x-metronic.input id="row_six_section_six_title" type="text" name="row_six_section_six_title"
                                placeholder="Enter Six Six Tittle" :value="old('row_six_section_five_title')"></x-metronic.input>
                        </div>

                        <div class="col-lg-3 mb-4">
                            <x-metronic.label for="row_six_section_six_url"
                                class="col-form-label fw-bold fs-6 ">{{ __('Row Six Six Url') }}
                            </x-metronic.label>

                            <x-metronic.input id="row_six_section_six_title" type="text" name="row_six_section_six_url"
                                placeholder="Enter Six Six Url" :value="old('row_six_section_six_url')"></x-metronic.input>
                        </div>

                    </div>
                </div>

                {{-- Row Seven  --}}

                <div class="card bg-light mb-3">
                    <div class="row px-4">

                        <div class="col-lg-6 mb-4">
                            <x-metronic.label for="row_seven_badge"
                                class="col-form-label fw-bold fs-6 ">{{ __('Row Seven Badge') }}
                            </x-metronic.label>

                            <x-metronic.input id="row_seven_badge" type="text" name="row_seven_badge"
                                placeholder="Row Seven Badge" :value="old('row_seven_badge')"></x-metronic.input>
                        </div>

                        <div class="col-lg-6 mb-4">
                            <x-metronic.label for="row_seven_title"
                                class="col-form-label fw-bold fs-6 ">{{ __('Row Seven Title') }}
                            </x-metronic.label>

                            <x-metronic.input id="row_seven_title" type="text" name="row_seven_title"
                                placeholder="Enter Seven Title" :value="old('row_seven_title')"></x-metronic.input>
                        </div>

                        <div class="col-lg-4 mb-4">
                            <x-metronic.label for="row_seven_section_one_title"
                                class="col-form-label fw-bold fs-6 ">{{ __('Row Seven One Title') }}
                            </x-metronic.label>

                            <x-metronic.input id="row_seven_section_one_title" type="text" name="row_seven_section_one_title"
                                placeholder="Eneter Seven One Title" :value="old('row_seven_section_one_title')"></x-metronic.input>
                        </div>

                        <div class="col-lg-4 mb-4">
                            <x-metronic.label for="row_seven_section_one_url"
                                class="col-form-label fw-bold fs-6 ">{{ __('Row Seven One Url') }}
                            </x-metronic.label>

                            <x-metronic.input id="row_seven_section_one_url" type="text" name="row_seven_section_one_url"
                                placeholder="Enter Seven One Url" :value="old('row_seven_section_one_url')"></x-metronic.input>
                        </div>

                        <div class="col-lg-4 mb-4">
                            <x-metronic.label for="row_seven_section_one_icon"
                                class="col-form-label fw-bold fs-6 ">{{ __('Row Seven One Icon') }}
                            </x-metronic.label>
                            <x-metronic.file-input id="row_seven_section_one_icon" name="row_seven_section_one_icon"
                                :value="old('row_seven_section_one_icon')"></x-metronic.file-input>

                        </div>

                        <div class="col-lg-12 mb-4">
                            <x-metronic.label for="row_seven_section_one_description"
                                class="col-form-label fw-bold fs-6 ">{{ __('Row Seven One Description') }}
                            </x-metronic.label>

                            <x-metronic.textarea id="row_seven_section_one_description" type="text"
                                name="row_seven_section_one_description" placeholder="Enter Row Seven One Description"
                                :value="old('row_seven_section_one_description')"></x-metronic.textarea>
                        </div>

                        <div class="col-lg-4 mb-4">
                            <x-metronic.label for="row_seven_section_two_title"
                                class="col-form-label fw-bold fs-6 ">{{ __('Row Seven Two Title') }}
                            </x-metronic.label>

                            <x-metronic.input id="row_seven_section_two_title" type="text" name="row_seven_section_two_title"
                                placeholder="Eneter Seven Two Title" :value="old('row_seven_section_two_title')"></x-metronic.input>
                        </div>

                        <div class="col-lg-4 mb-4">
                            <x-metronic.label for="row_seven_section_two_url"
                                class="col-form-label fw-bold fs-6 ">{{ __('Row Seven Two Url') }}
                            </x-metronic.label>

                            <x-metronic.input id="row_seven_section_two_url" type="text" name="row_seven_section_two_url"
                                placeholder="Enter Seven Two Url" :value="old('row_seven_section_two_url')"></x-metronic.input>
                        </div>

                        <div class="col-lg-4 mb-4">
                            <x-metronic.label for="row_seven_section_two_icon"
                                class="col-form-label fw-bold fs-6 ">{{ __('Row Seven Two Icon') }}
                            </x-metronic.label>
                            <x-metronic.file-input id="row_seven_section_two_icon" name="row_seven_section_two_icon"
                                :value="old('row_seven_section_two_icon')"></x-metronic.file-input>

                        </div>

                        <div class="col-lg-12 mb-4">
                            <x-metronic.label for="row_seven_section_two_description"
                                class="col-form-label fw-bold fs-6 ">{{ __('Row Seven Two Description') }}
                            </x-metronic.label>

                            <x-metronic.textarea id="row_seven_section_two_description" type="text"
                                name="row_seven_section_two_description" placeholder="Enter Row Seven Two Description"
                                :value="old('row_seven_section_two_description')"></x-metronic.textarea>
                        </div>

                        <div class="col-lg-4 mb-4">
                            <x-metronic.label for="row_seven_section_three_title"
                                class="col-form-label fw-bold fs-6 ">{{ __('Row Seven Three Title') }}
                            </x-metronic.label>

                            <x-metronic.input id="row_seven_section_three_title" type="text" name="row_seven_section_three_title"
                                placeholder="Eneter Seven Three Title" :value="old('row_seven_section_three_title')"></x-metronic.input>
                        </div>

                        <div class="col-lg-4 mb-4">
                            <x-metronic.label for="row_seven_section_three_url"
                                class="col-form-label fw-bold fs-6 ">{{ __('Row Seven Three Url') }}
                            </x-metronic.label>

                            <x-metronic.input id="row_seven_section_three_url" type="text" name="row_seven_section_three_url"
                                placeholder="Enter Seven Three Url" :value="old('row_seven_section_two_url')"></x-metronic.input>
                        </div>

                        <div class="col-lg-4 mb-4">
                            <x-metronic.label for="row_seven_section_three_icon"
                                class="col-form-label fw-bold fs-6 ">{{ __('Row Seven Three Icon') }}
                            </x-metronic.label>
                            <x-metronic.file-input id="row_seven_section_two_icon" name="row_seven_section_three_icon"
                                :value="old('row_seven_section_three_icon')"></x-metronic.file-input>

                        </div>

                        <div class="col-lg-12 mb-4">
                            <x-metronic.label for="row_seven_section_three_description"
                                class="col-form-label fw-bold fs-6 ">{{ __('Row Seven Three Description') }}
                            </x-metronic.label>

                            <x-metronic.textarea id="row_seven_section_three_description" type="text"
                                name="row_seven_section_three_description" placeholder="Enter Row Seven Three Description"
                                :value="old('row_seven_section_three_description')"></x-metronic.textarea>
                        </div>

                        
                    </div>
                </div>

                {{-- Row Seven  --}}

                <div class="card bg-light mb-3">
                    <div class="row px-4">

                        <div class="col-lg-3 mb-4">
                            <x-metronic.label for="row_eight_title"
                                class="col-form-label fw-bold fs-6 ">{{ __('Row Eight Title') }}
                            </x-metronic.label>

                            <x-metronic.input id="row_eight_title" type="text" name="row_eight_title"
                                placeholder="Row Eight Title" :value="old('row_eight_title')"></x-metronic.input>
                        </div>

                        <div class="col-lg-3 mb-4">
                            <x-metronic.label for="row_eight_header"
                                class="col-form-label fw-bold fs-6 ">{{ __('Row Eight Header') }}
                            </x-metronic.label>

                            <x-metronic.input id="row_eight_header" type="text" name="row_eight_header"
                                placeholder="Enter Seven Header" :value="old('row_eight_header')"></x-metronic.input>
                        </div>

                        <div class="col-lg-3 mb-4">
                            <x-metronic.label for="row_nine_title"
                                class="col-form-label fw-bold fs-6 ">{{ __('Row Nine Title') }}
                            </x-metronic.label>

                            <x-metronic.input id="row_nine_title" type="text" name="row_nine_title"
                                placeholder="Row Nine Title" :value="old('row_nine_title')"></x-metronic.input>
                        </div>

                        <div class="col-lg-3 mb-4">
                            <x-metronic.label for="row_nine_button_name"
                                class="col-form-label fw-bold fs-6 ">{{ __('Row Nine Button Name') }}
                            </x-metronic.label>

                            <x-metronic.input id="row_nine_button_name" type="text" name="row_nine_button_name"
                                placeholder="Row Nine Button Name" :value="old('row_nine_button_name')"></x-metronic.input>
                        </div>

                        <div class="col-lg-3 mb-4">
                            <x-metronic.label for="row_nine_button_url"
                                class="col-form-label fw-bold fs-6 ">{{ __('Row Nine Button Url') }}
                            </x-metronic.label>

                            <x-metronic.input id="row_nine_button_url" type="text" name="row_nine_button_url"
                                placeholder="Row Nine Button Url" :value="old('row_nine_button_url')"></x-metronic.input>
                        </div>

                        <div class="col-lg-3 mb-4">
                            <x-metronic.label for="row_ten_title"
                                class="col-form-label fw-bold fs-6 ">{{ __('Row Ten Title') }}
                            </x-metronic.label>

                            <x-metronic.input id="row_ten_title" type="text" name="row_ten_title"
                                placeholder="Row Ten Title" :value="old('row_ten_title')"></x-metronic.input>
                        </div>

                        <div class="col-lg-3 mb-4">
                            <x-metronic.label for="row_ten_header"
                                class="col-form-label fw-bold fs-6 ">{{ __('Row Ten Header') }}
                            </x-metronic.label>

                            <x-metronic.input id="row_ten_header" type="text" name="row_ten_header"
                                placeholder="Enter Seven Header" :value="old('row_ten_header')"></x-metronic.input>
                        </div>

                    </div>
                </div>


                <div class="col-12 mb-3 mt-4">
                    <button type="submit" class="btn btn-primary rounded-0 px-5 btn-sm float-end">Submit</button>
                </div>

            </form>

        </div>

    </div>

    @push('scripts')
        <script></script>
    @endpush
</x-admin-app-layout>
