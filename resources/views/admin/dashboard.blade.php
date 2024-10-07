<x-admin-app-layout>
    <div class="row gy-5 g-xl-8">
        <div class="col-xl-4">
            <div class="card h-xl-100">
                <div class="card-header border-0 pt-5">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bold text-gray-900">Course Section</span>
                    </h3>
                </div>

                <div class="card-body pt-6">

                
                        <div class="d-flex flex-stack">
                            <div class="symbol  me-5">
                                <div class="text-inverse-danger">
                                    <img src=""
                                        alt="Avatar">

                                </div>
                            </div>

                            <div class="d-flex align-items-center flex-row-fluid flex-wrap">

                                <div class="flex-grow-1 me-2">
                                    <a href="https://preview.keenthemes.com/metronic8/demo1/pages/user-profile/overview.html"
                                        class="text-gray-800 text-hover-primary fs-6 fw-bold">Ashik</a>

                                    <span class="text-muted fw-semibold d-block fs-7">+
                                        Courses</span>

                                </div>

                                <a href="javascript:;"
                                    class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                    Ashik
                                </a>

                            </div>
                        </div>

                        <div class="separator separator-dashed my-4"></div>
                    



                </div>
            </div>
        </div>
        <div class="col-xl-4">
            <div class="card card-flush h-xl-100">
                <div class="card-header rounded bgi-no-repeat bgi-size-cover bgi-position-y-top bgi-position-x-center align-items-start h-250px"
                    style="background-image:url('https://preview.keenthemes.com/metronic8/demo1/assets/media/svg/shapes/top-green.png"
                    data-bs-theme="light">
                    <h3 class="card-title align-items-start flex-column text-white pt-15">
                        <span class="fw-bold fs-2x mb-3">Information</span>
                    </h3>
                </div>

                <div class="card-body mt-n20">
                    <div class="mt-n20 position-relative">
                        <div class="row g-3 g-lg-6">
                            <div class="col-6">
                                <div class="bg-gray-100 bg-opacity-70 rounded-2 px-6 py-5">
                                    <div class="symbol symbol-30px me-5 mb-8">
                                        <span class="symbol-label">
                                            <i class="fa-solid fa-flask fs-1 text-primary"><span
                                                    class="path1"></span><span class="path2"></span></i>
                                        </span>
                                    </div>

                                    <div class="m-0">
                                        <a href=""
                                            class="text-gray-700 fw-bolder d-block fs-2qx lh-1 ls-n1 mb-1">Ashik</a>

                                        <span class="text-gray-500 fw-semibold fs-6">Total Courses</span>
                                    </div>

                                </div>
                            </div>
                            <div class="col-6">
                                <div class="bg-gray-100 bg-opacity-70 rounded-2 px-6 py-5">
                                    <div class="symbol symbol-30px me-5 mb-8">
                                        <span class="symbol-label">
                                            <i class="fa-solid fa-bank fs-1 text-primary"><span
                                                    class="path1"></span><span class="path2"></span></i>
                                        </span>
                                    </div>

                                    <div class="m-0">
                                        <a href=""
                                            class="text-gray-700 fw-bolder d-block fs-2qx lh-1 ls-n1 mb-1">Ashik</a>

                                        <span class="text-gray-500 fw-semibold fs-6">Total Enrolled</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="bg-gray-100 bg-opacity-70 rounded-2 px-6 py-5">

                                    <div class="symbol symbol-30px me-5 mb-8">
                                        <span class="symbol-label">
                                            <i class="fa-solid fa-award fs-1 text-primary"><span
                                                    class="path1"></span><span class="path2"></span><span
                                                    class="path3"></span></i>
                                        </span>
                                    </div>

                                    <div class="m-0">
                                        <a href=""
                                            class="text-gray-700 fw-bolder d-block fs-2qx lh-1 ls-n1 mb-1">Ashik</a>

                                        <span class="text-gray-500 fw-semibold fs-6">Monthly Enrolled</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="bg-gray-100 bg-opacity-70 rounded-2 px-6 py-5">

                                    <div class="symbol symbol-30px me-5 mb-8">
                                        <span class="symbol-label">
                                            <i class="fa-solid fa-award fs-1 text-primary"><span
                                                    class="path1"></span><span class="path2"></span><span
                                                    class="path3"></span></i>
                                        </span>
                                    </div>

                                    <div class="m-0">
                                        <a href=""
                                            class="text-gray-700 fw-bolder d-block fs-2qx lh-1 ls-n1 mb-1">Ashik</a>

                                        <span class="text-gray-500 fw-semibold fs-6">Today Enrolled</span>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        {{-- @if (Auth::guard('admin')->user()->hasRole('Super Admin'))
            <!-- Code to execute if the user is a Super Admin -->
        @endif --}}

        
        <div class="col-xl-4">
            <div class="card card-flush h-md-100 mb-5 mb-xl-10">
                <div class="card-header pt-5">
                    <div class="card-title d-flex flex-column">
                        <div class="d-flex align-items-center">
                            <span
                                class="fs-2hx fw-bold text-gray-900 me-2 lh-1 ls-n2">Ashik
                                Tk</span>

                            {{-- <span class="badge badge-light-success fs-base">
                                <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1"><span
                                        class="path1"></span><span class="path2"></span></i>
                                2.2%
                            </span> --}}
                        </div>
                        <span class="text-gray-500 pt-1 fw-semibold fs-6">Total Earnings</span>
                    </div>
                </div>
                <div class="card-body pt-2 pb-4 d-flex align-items-center flex-column">


                    <div class="d-flex flex-center me-5 pt-20">
                        <div id="kt_card_widget_1_chart" style="min-width: 150px; min-height: 100px" data-kt-size="150"
                            data-kt-line="11">
                        </div>
                    </div>

                    <div class="d-flex flex-column content-justify-center w-100 pt-20">


                        <div class="d-flex fs-6 fw-semibold align-items-center my-3">
                            <div class="bullet w-8px h-6px rounded-2 bg-primary me-3"></div>
                            <div class="text-gray-500 flex-grow-1 me-4">Today Paid Amount</div>
                            <div class="fw-bolder text-gray-700 text-xxl-end">Ashik
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        {{-- <div class="col-xl-12">
            <div class="card card-flush">
                <div class="card-header pt-5">
                    <div class="card-title d-flex flex-column">
                        <span class="text-gray-500 pt-1 fw-semibold fs-2">Courses Info</span>
                    </div>
                </div>

                <div class="card-body pt-0">
                    <table id="kt_datatable_example_5"
                        class="table table-striped table-row-bordered gy-5 gs-7 border rounded">
                        <thead class="bg-dark text-light">
                            <tr>
                                <th width="5%">No</th>
                                <th width="8%">Image</th>
                                <th>Course Name</th>
                                <th>Lecture</th>
                                <th>Seat</th>
                                <th>Price</th>
                                <th>Discount Price</th>
                                
                            </tr>
                        </thead>
                        <tbody class="fw-bold text-gray-600">

                            @foreach ($courses as $key => $course)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td class="">

                                        <img class=""
                                            src="{{ !empty($course->thumbnail_image) ? url('storage/course/' . $course->thumbnail_image) : 'https://ui-avatars.com/api/?name=' . urlencode($course->name) }}"
                                            height="40" width="40" alt="">

                                    </td>

                                    <td class="text-start">{{ $course->name }}</td>
                                    <td class="text-start">{{ $course->lecture }}</td>
                                    <td class="text-start">{{ $course->available_seats }}</td>
                                    <td class="text-start">{{ $course->price }} Tk</td>
                                    <td class="text-start">{{ $course->discount_price }} Tk</td>

                                    

                                </tr>
                            @endforeach


                        </tbody>
                    </table>
                </div>

            </div>
        </div> --}}

    </div>
    @push('scripts')
        <script>
            $("#kt_datatable_example_5").DataTable({
                "language": {
                    "lengthMenu": "Show _MENU_",
                },
                "dom": "<'row'" +
                    "<'col-sm-6 d-flex align-items-center justify-conten-start'l>" +
                    "<'col-sm-6 d-flex align-items-center justify-content-end'f>" +
                    ">" +

                    "<'table-responsive'tr>" +

                    "<'row'" +
                    "<'col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start'i>" +
                    "<'col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end'p>" +
                    ">"
            });
        </script>
    @endpush
</x-admin-app-layout>
