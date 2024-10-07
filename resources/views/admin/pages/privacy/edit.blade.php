<x-admin-app-layout :title="'Privacy & Policy Update'">
    <div class="card card-flash">
        <div class="card-header">
            <div class="card-title">
            </div>

            <div class="card-toolbar">
                <a href="{{ route('admin.privacy-policy.index') }}" class="btn btn-light-primary rounded-2">
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

            <form id="myForm" method="post" action="{{ route('admin.privacy-policy.update', $item->id) }}"
                enctype="multipart/form-data">
                @csrf

                @method('PUT')


                <div class="card bg-light">

                    <div class="row p-4">

                        <div class="col-12">

                            <div class="form-group mb-3">
                                <label for="" class="mb-2">Name</label>
                                <input type="text" name="name"
                                    class="form-control @error('name') is-invalid @enderror" placeholder="Name"
                                    autocomplete="off" value="{{ $item->name }}">
                                @error('name')
                                    <span class="text-danger"> {{ $message }} </span>
                                @enderror
                            </div>

                        </div>

                        <div class="col-12">

                            <div class="form-group mb-3">
                                <label for="" class="mb-2">Content</label>
                                <textarea name="content" rows="3" cols="3"
                                    class="editor form-control @error('content') is-invalid @enderror">{!! $item->content !!}</textarea>
                                @error('content')
                                    <span class="text-danger"> {{ $message }} </span>
                                @enderror
                            </div>

                        </div>

                        <div class="col-4">
                            <div class="form-group mb-3">
                                <label for="" class="mb-2">Effective Date</label>
                                <input type="date" name="effective_date"
                                    class="form-control @error('effective_date') is-invalid @enderror"
                                    placeholder="Question" value="{{ $item->effective_date }}"
                                    min="{{ Carbon\Carbon::now()->format('Y-m-d') }}">

                                @error('effective_date')
                                    <span class="text-danger"> {{ $message }} </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-4">
                            <div class="form-group mb-3">
                                <label for="" class="mb-2">Expiration Date</label>
                                <input type="date" name="expiration_date"
                                    class="form-control @error('expiration_date') is-invalid @enderror"
                                    min="{{ Carbon\Carbon::now()->format('Y-m-d') }}"
                                    value="{{ $item->expiration_date }}">

                                @error('expiration_date')
                                    <span class="text-danger"> {{ $message }} </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-4">
                            <div class="form-group mb-3">
                                <label for="" class="mb-2">Version</label>
                                <input type="type" name="version"
                                    class="form-control @error('version') is-invalid @enderror" placeholder="Version"
                                    value="{{ $item->version }}">

                                @error('version')
                                    <span class="text-danger"> {{ $message }} </span>
                                @enderror
                            </div>
                        </div>

                    </div>

                </div>

                <div class="col-12 mb-3 mt-4">
                    <button type="submit" class="btn btn-primary rounded-0 px-5 btn-sm float-end">Update</button>
                </div>

            </form>

        </div>

    </div>

    @push('scripts')
        <script type="text/javascript">
            $(document).ready(function() {
                $('#myForm').validate({
                    rules: {

                        name: {
                            required: true,
                        },

                        // banner_image: {
                        //     required: true,
                        // },

                        content: {
                            required: true,
                        },



                    },
                    messages: {

                        name: {
                            required: 'Please Enter Course Category Name',
                        },

                        // banner_image: {
                        //     required: 'Please Enter Banner Image',
                        // },

                        content: {
                            required: 'Please Enter Description Field',
                        },


                    },
                    errorElement: 'span',
                    errorPlacement: function(error, element) {
                        error.addClass('invalid-feedback');
                        element.closest('.form-group').append(error);
                    },
                    highlight: function(element, errorClass, validClass) {
                        $(element).addClass('is-invalid');
                    },
                    unhighlight: function(element, errorClass, validClass) {
                        $(element).removeClass('is-invalid');
                    },
                });
            });
        </script>
    @endpush


</x-admin-app-layout>
