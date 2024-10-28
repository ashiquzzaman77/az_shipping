<x-admin-app-layout :title="'Choose Edit'">
    <div class="card card-flash">
        <div class="card-header">
            <div class="card-title">
            </div>

            <div class="card-toolbar">
                <a href="{{ route('admin.choose.index') }}" class="btn btn-light-primary rounded-2">
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

            <form id="myForm" method="post" action="{{ route('admin.choose.update', $choose->id) }}"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="card bg-light">
                    <div class="row p-4">

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">Status</label>
                                <select name="status" class="form-select form-select-sm" data-control="select2">
                                    <option value="active" {{ $choose->status == 'active' ? 'selected' : '' }}>Active
                                    </option>
                                    <option value="inactive" {{ $choose->status == 'inactive' ? 'selected' : '' }}>
                                        Inactive</option>
                                </select>
                                @error('status')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">Row One Title</label>
                                <input type="text" name="row_one_title" placeholder="Row One Title"
                                    class="form-control form-control-sm"
                                    value="{{ old('row_one_title', $choose->row_one_title) }}">
                                @error('row_one_title')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">Row One Subtitle</label>
                                <input type="text" name="row_one_subtitle" placeholder="Row One Subtitle"
                                    class="form-control form-control-sm"
                                    value="{{ old('row_one_subtitle', $choose->row_one_subtitle) }}">
                                @error('row_one_subtitle')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        {{-- <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">Row One Icon</label>
                                <input type="text" name="row_one_icon" placeholder="Row One Icon"
                                    class="form-control form-control-sm"
                                    value="{{ old('row_one_icon', $choose->row_one_icon) }}">
                                @error('row_one_icon')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div> --}}

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">Row Two Title</label>
                                <input type="text" name="row_two_title" placeholder="Row Two Title"
                                    class="form-control form-control-sm"
                                    value="{{ old('row_two_title', $choose->row_two_title) }}">
                                @error('row_two_title')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">Row Two Subtitle</label>
                                <input type="text" name="row_two_subtitle" placeholder="Row Two Subtitle"
                                    class="form-control form-control-sm"
                                    value="{{ old('row_two_subtitle', $choose->row_two_subtitle) }}">
                                @error('row_two_subtitle')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        {{-- <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">Row Two Icon</label>
                                <input type="text" name="row_two_icon" placeholder="Row Two Icon"
                                    class="form-control form-control-sm"
                                    value="{{ old('row_two_icon', $choose->row_two_icon) }}">
                                @error('row_two_icon')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div> --}}

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">Row Three Title</label>
                                <input type="text" name="row_three_title" placeholder="Row Three Title"
                                    class="form-control form-control-sm"
                                    value="{{ old('row_three_title', $choose->row_three_title) }}">
                                @error('row_three_title')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">Row Three Subtitle</label>
                                <input type="text" name="row_three_subtitle" placeholder="Row Three Subtitle"
                                    class="form-control form-control-sm"
                                    value="{{ old('row_three_subtitle', $choose->row_three_subtitle) }}">
                                @error('row_three_subtitle')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        {{-- <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">Row Three Icon</label>
                                <input type="text" name="row_three_icon" placeholder="Row Three Icon"
                                    class="form-control form-control-sm"
                                    value="{{ old('row_three_icon', $choose->row_three_icon) }}">
                                @error('row_three_icon')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div> --}}

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">Row Four Title</label>
                                <input type="text" name="row_four_title" placeholder="Row Four Title"
                                    class="form-control form-control-sm"
                                    value="{{ old('row_four_title', $choose->row_four_title) }}">
                                @error('row_four_title')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">Row Four Subtitle</label>
                                <input type="text" name="row_four_subtitle" placeholder="Row Four Subtitle"
                                    class="form-control form-control-sm"
                                    value="{{ old('row_four_subtitle', $choose->row_four_subtitle) }}">
                                @error('row_four_subtitle')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        {{-- <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">Row Four Icon</label>
                                <input type="text" name="row_four_icon" placeholder="Row Four Icon"
                                    class="form-control form-control-sm"
                                    value="{{ old('row_four_icon', $choose->row_four_icon) }}">
                                @error('row_four_icon')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div> --}}

                        <div class="col-6 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">Main Title</label>
                                <input type="text" name="main_title" placeholder="Main Title"
                                    class="form-control form-control-sm"
                                    value="{{ old('main_title', $choose->main_title) }}">
                                @error('main_title')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-12 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">Long Description</label>
                                <textarea name="long_descp" placeholder="Long Description" class="form-control form-control-sm editor">{!! old('long_descp', $choose->long_descp) !!}</textarea>
                                @error('long_descp')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
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
