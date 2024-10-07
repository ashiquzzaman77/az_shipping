<x-admin-app-layout :title="'Coupon Create'">
    <div class="card card-flash">
        <div class="card-header">
            <div class="card-title">
            </div>

            <div class="card-toolbar">
                <a href="{{ route('admin.coupon.index') }}" class="btn btn-light-primary rounded-2">
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

            <form id="myForm" method="post" action="{{ route('admin.coupon.store') }}"
                enctype="multipart/form-data">
                @csrf

                <div class="card bg-light">

                    <div class="row p-4">

                        <div class="col-4 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">Coupon Name</label>
                                <input type="text" name="coupon_name" placeholder="Coupon Name"
                                    class="form-control form-control-sm" value="{{ old('coupon_name') }}">
                            </div>
                        </div>

                        <div class="col-2 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">Coupon Discount</label>
                                <input type="number" name="coupon_discount" placeholder="Eg: 20%"
                                    class="form-control form-control-sm" value="{{ old('coupon_discount') }}">
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">Start Date</label>
                                <input type="date" name="coupon_start_date" class="form-control form-control-sm"
                                    value="{{ old('coupon_start_date') }}"
                                    min="{{ Carbon\Carbon::now()->format('Y-m-d') }}">
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">End Date</label>
                                <input type="date" name="coupon_end_date" class="form-control form-control-sm"
                                    value="{{ old('coupon_end_date') }}"
                                    min="{{ Carbon\Carbon::now()->format('Y-m-d') }}">
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
