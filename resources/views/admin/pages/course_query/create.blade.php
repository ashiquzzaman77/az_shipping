<x-admin-app-layout :title="'Course Query'">
    <div class="card card-flash">
        <div class="card-header">
            <div class="card-title">
            </div>

            <div class="card-toolbar">
                <a href="{{ route('admin.course_query.index') }}" class="btn btn-light-primary rounded-2">
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

            <form id="myForm" method="post" action="{{ route('admin.course_query.store') }}"
                enctype="multipart/form-data">
                @csrf

                <div class="card bg-light">

                    <div class="row p-4">

                        <div class="col-3 mb-3">

                            <div class="form-group">
                                <label for="" class="mb-2">Course Name</label>
                                <select name="course_id" data-placeholder="Select Row One.."
                                    class="form-select form-select-sm" data-control="select2"
                                    data-placeholder="Select an option">

                                    @if (count($courses) > 0)
                                        @foreach ($courses as $course)
                                            <option class="form-control" value="{{ $course->id }}">{{ $course->name }}
                                            </option>
                                        @endforeach
                                    @endif

                                </select>
                            </div>

                        </div>

                        <div class="col-4 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">Name</label>
                                <input type="text" name="name" placeholder="Eg: Mr Jon"
                                    class="form-control form-control-sm" value="{{ old('name') }}">
                            </div>
                        </div>

                        <div class="col-5 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">Email</label>
                                <input type="email" name="email" placeholder="jon@example.com" class="form-control form-control-sm" value="{{ old('email') }}">
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">Phone</label>
                                <input type="tel" name="phone" placeholder="01725-XXX2541"
                                    class="form-control form-control-sm" value="{{ old('phone') }}">
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">Address</label>
                                <input type="text" name="address" placeholder="78,West Dhaka"
                                    class="form-control form-control-sm" value="{{ old('address') }}">
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">Offer Price</label>
                                <input type="number" name="offer_price" placeholder="Eg: 1000"
                                    class="form-control form-control-sm" min="0" value="{{ old('offer_price') }}">
                            </div>
                        </div>

                        <div class="col-6 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">Course Duration</label>
                                <textarea name="message" class="form-control" id="" cols="2" rows="2"></textarea>
                            </div>
                        </div>


                        <div class="col-3 mb-3 my-auto">
                            <div class="form-group">
                                <input type="checkbox" class="mb-2" name="call" value="1">
                                <label for="" class="">Call</label>
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
        <script type="text/javascript">
            $(document).ready(function() {
                $('#myForm').validate({
                    rules: {

                        instructor_id: {
                            required: true,
                        },

                        name: {
                            required: true,
                        },

                        lecture: {
                            required: true,
                        },

                        project: {
                            required: true,
                        },

                        course_duration: {
                            required: true,
                        },

                        course_time: {
                            required: true,
                        },

                        price: {
                            required: true,
                        },

                        registration_start_date: {
                            required: true,
                        },

                        registration_end_date: {
                            required: true,
                        },


                    },
                    messages: {

                        instructor_id: {
                            required: 'Please Enter Instructor Name',
                        },

                        name: {
                            required: 'Please Enter Course Name',
                        },

                        lecture: {
                            required: 'Please Enter Lecture Name',
                        },

                        project: {
                            required: 'Please Enter Project',
                        },

                        course_duration: {
                            required: 'Please Enter Course Duration',
                        },

                        course_time: {
                            required: 'Please Enter Course Time',
                        },

                        price: {
                            required: 'Please Enter Price',
                        },

                        registration_start_date: {
                            required: 'Please Enter Start Date',
                        },

                        registration_end_date: {
                            required: 'Please Enter End Date',
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
