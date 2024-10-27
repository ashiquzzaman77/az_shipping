<x-admin-app-layout>

    <div class="row gy-5 g-xl-8">

        {{-- Total Job  --}}
        <div class="col-xl-4">
            <div class="card h-xl-100">
                <div class="card-header border-0 pt-5">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bold text-gray-900">Total Job Offer</span>
                    </h3>
                </div>

                <div class="card-body pt-6">

                    @forelse ($jobs as $job)
                        <div class="d-flex flex-stack">

                            <div class="symbol me-5">
                                <div class="text-inverse-danger">
                                    <img src="https://ui-avatars.com/api/?name=Job+Offer&size=40" alt="Avatar">
                                </div>
                            </div>

                            @php
                                $deadline = \Carbon\Carbon::parse($job->deadline);
                                $currentDate = \Carbon\Carbon::now();
                            @endphp

                            <div class="d-flex align-items-center flex-row-fluid flex-wrap">

                                <div class="flex-grow-1 me-2">
                                    <a href="javascript:;"
                                        class="text-gray-800 text-hover-primary fs-6 fw-bold">{{ $job->rank }}</a>

                                    <span class="text-muted fw-semibold d-block fs-7">
                                        Deadline:
                                        @if ($currentDate->isAfter($deadline))
                                            <span class="text-danger">Error: Job time deadline has passed.</span>
                                        @else
                                            {{ $deadline->format('F j, Y h:i A') }}
                                        @endif
                                    </span>

                                </div>

                                <a title="Needed Person" href="javascript:;"
                                    class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                    {{ $job->total_needed }}
                                </a>

                            </div>
                        </div>

                        <div class="separator separator-dashed my-4"></div>
                    @empty
                        <p>No Job Offer Avaiable</p>
                    @endforelse

                </div>
            </div>
        </div>
        {{-- Total Job  --}}

        {{-- Middle Section  --}}

        @php
            $hour = \Carbon\Carbon::now()->format('H');
            $greeting = '';

            if ($hour > 12) {
                $greeting = 'Good Morning';
            } elseif ($hour < 18) {
                $greeting = 'Good Afternoon';
            } else {
                $greeting = 'Good Evening';
            }
        @endphp
        <div class="col-xl-4">
            <div class="card card-flush h-xl-100">
                <div class="card-header rounded bgi-no-repeat bgi-size-cover bgi-position-y-top bgi-position-x-center align-items-start h-200px"
                    style="background-image:url('https://preview.keenthemes.com/metronic8/demo1/assets/media/svg/shapes/top-green.png"
                    data-bs-theme="light">

                    <h2 style="font-size: 22px"
                        class="align-items-center justify-content-center flex-column text-white pt-15">
                        <span class="fw-bold mb-3">{{ $greeting }} :
                            {{ Auth::guard('admin')->user()->name }}</span>
                    </h2>

                </div>

                <div class="card-body mt-n20">
                    <div class="mt-n20 position-relative">
                        <div class="row g-3 g-lg-6">
                            <div class="col-6">
                                <div class="bg-gray-100 bg-opacity-70 rounded-2 px-6 py-5">
                                    <div class="symbol symbol-30px me-5 mb-8">
                                        <span class="symbol-label">
                                            <i class="fas fa-check" style="font-size: 30px; color: green;"></i>
                                        </span>
                                    </div>

                                    <div class="m-0">
                                        <h4>Total Visited</h4>
                                        <span class="text-gray-500 fw-semibold fs-6">{{ $visitCount }}+</span>
                                    </div>

                                </div>
                            </div>
                            <div class="col-6">
                                <div class="bg-gray-100 bg-opacity-70 rounded-2 px-6 py-5">
                                    <div class="symbol symbol-30px me-5 mb-8">
                                        <span class="symbol-label">
                                            <i class="fas fa-user" style="font-size: 30px; color: green;"></i>
                                        </span>
                                    </div>

                                    <div class="m-0">
                                        <h4>Total Employee</h4>

                                        <span class="text-gray-500 fw-semibold fs-6">{{ count($team) }}</span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="bg-gray-100 bg-opacity-70 rounded-2 px-6 py-5">

                                    <div class="symbol symbol-30px me-5 mb-8">
                                        <span class="symbol-label">
                                            <i class="fas fa-user-check" style="font-size: 30px; color: green;"></i>
                                        </span>
                                    </div>

                                    <div class="m-0">
                                        <h4>Apply Job</h4>

                                        <span class="text-gray-500 fw-semibold fs-6">{{ count($items) }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="bg-gray-100 bg-opacity-70 rounded-2 px-6 py-5">

                                    <div class="symbol symbol-30px me-5 mb-8">
                                        <span class="symbol-label">
                                            <i class="fas fa-briefcase" style="font-size: 30px; color: green;"></i>
                                        </span>
                                    </div>

                                    <div class="m-0">
                                        <h4>Total Job</h4>

                                        <span class="text-gray-500 fw-semibold fs-6">{{ count($jobs) }}</span>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>


        <div class="col-xl-4">
            <div class="card card-flush h-md-100 mb-5 mb-xl-10">
                <div class="card-header pt-5">
                    <div class="card-title d-flex flex-column">
                        <div class="d-flex align-items-center">
                            <span class="fs-2hx fw-bold text-gray-900 me-2 lh-1 ls-n2">Ashik
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

        {{-- Apply For Job  --}}
        <div class="col-xl-12">
            <div class="card card-flush">
                <div class="card-header pt-5">
                    <div class="card-title d-flex flex-column">
                        <span class="text-gray-500 pt-1 fw-semibold fs-2">Apply For Job</span>
                    </div>
                </div>

                <div class="card-body pt-0">
                    <table id="kt_datatable_example_5"
                        class="table table-striped table-row-bordered gy-5 gs-7 border rounded">
                        <thead class="bg-dark text-light">
                            <tr>
                                <th width="5%">No</th>
                                <th width="10%">Rank Name</th>
                                <th width="10%">Name</th>
                                <th width="10%">Email</th>
                                <th width="10%">Phone</th>
                                <th width="10%">Passport Number</th>
                                <th width="10%">Nationality</th>
                                <th width="10%">CV</th>
                                <th width="5%">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="fw-bold text-gray-600">

                            @foreach ($items as $key => $item)
                                <tr>
                                    <td>{{ $key + 1 }}</td>

                                    <td>
                                        <h6>{{ $item->jobName->rank }}</h6>
                                    </td>

                                    <td>
                                        <h6>{{ $item->name }}</h6>
                                    </td>

                                    <td>
                                        <h6>{{ $item->email }}</h6>
                                    </td>

                                    <td>
                                        <h6>{{ $item->phone }}</h6>
                                    </td>
                                    <td>
                                        <h6>{{ $item->passport_number }}</h6>
                                    </td>

                                    <td>
                                        <h6>{{ $item->nationality }}</h6>
                                    </td>

                                    <td>
                                        @if ($item->attachment == null)
                                            <p>No File</p>
                                        @else
                                            <a href="{{ route('download.attachment', $item->id) }}"
                                                class="text-danger">Download
                                                CV</a>
                                        @endif
                                    </td>


                                    <td>

                                        <form action="{{ route('admin.apply.post.delete', $item->id) }}"
                                            method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class=""
                                                style="border: none; background: none; cursor: pointer;">
                                                <i class="fa-solid fa-trash text-danger"></i>
                                            </button>
                                        </form>

                                    </td>
                                </tr>
                            @endforeach


                        </tbody>
                    </table>
                </div>

            </div>
        </div>
        {{-- Apply For Job  --}}

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
