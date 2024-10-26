<x-admin-app-layout :title="'Rating All'">

    {{-- Font Awesome CDN --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />

    <!-- Toastr CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <style>
        .custom-table th {
            background: #9DBDFF;
            color: #fff;
            padding: 10px;
        }

        .custom-table td {
            padding: 10px;
            border: 1px solid #dee2e6;
        }

        .custom-table tr:hover {
            background-color: #f1f1f1;
        }

        .custom-table {
            border-radius: 0.5rem;
            overflow: hidden;
        }

        .custom-table th {
            width: 35%;
        }
    </style>



    <div class="card card-flash">
        <div class="card-header mt-6">
            <div class="card-title"></div>
            <div class="card-toolbar">

                <a href="{{ route('admin.rating.create') }}" class="btn btn-light-primary">
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
                    </span>
                    Create
                </a>

            </div>
        </div>

        <div class="card-body pt-0">
            <table id="kt_datatable_example_5" class="table table-striped table-row-bordered gy-5 gs-7 border rounded">
                <thead class="bg-dark text-light">
                    <tr>
                        <th width="5%">No</th>
                        <th width="10%">Name</th>
                        <th width="10%">Rank</th>
                        <th width="10%">CDC NO</th>
                        <th width="10%">Academy</th>
                        <th width="10%">Batch</th>
                        <th width="10%">Contact</th>
                        <th width="10%">Status</th>
                        <th width="10%">Remarks</th>
                        <th width="5%">Actions</th>
                    </tr>
                </thead>
                <tbody class="fw-bold text-gray-600">

                    @foreach ($items as $key => $item)
                        <tr>
                            <td>{{ $key + 1 }}</td>

                            <td>
                                <h6>{{ $item->name }}</h6>
                            </td>
                            <td>
                                <h6>{{ $item->rank }}</h6>
                            </td>
                            <td>
                                <h6>{{ $item->cdc_no }}</h6>
                            </td>
                            <td>
                                <h6>{{ $item->academy }}</h6>
                            </td>
                            <td>
                                <h6>{{ $item->batch }}</h6>
                            </td>
                            <td>
                                <h6>{{ $item->contact }}</h6>
                            </td>
                            <td>
                                @if ($item->status == 'board')
                                    <h6>On Board ({{ $item->ship_name }})</h6>
                                @elseif($item->status == 'leave')
                                    <h6>On Leave</h6>
                                @elseif($item->status == 'fleet')
                                    <h6>Not in Fleet Yet</h6>
                                @endif
                            </td>

                            <td>
                                <h6>{{ $item->remarks }}</h6>
                            </td>


                            <td>

                                <a href="" data-bs-toggle="modal" data-bs-target="#showModal{{ $item->id }}"
                                    class="text-primary">
                                    <i class="fa-solid fa-eye text-success fs-5"></i>
                                </a>

                                <!-- showModal -->
                                <div class="modal fade" id="showModal{{ $item->id }}" data-bs-backdrop="static"
                                    data-bs-keyboard="false" tabindex="-1" aria-labelledby="showModalLabel"
                                    aria-hidden="true">

                                    <div class="modal-dialog modal-xl modal-dialog-scrollable">
                                        <div class="modal-content">

                                            <div class="modal-header bg-secondary">
                                                <h1 class="modal-title fs-3" id="staticBackdropLabel">Rating Details
                                                </h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>

                                            <div class="modal-body">

                                                <div class="row">

                                                    <div class="col-12 mb-3">
                                                        <h2>Name : <span class="text-danger">{{ $item->name }}</span>
                                                            </h3>
                                                    </div>

                                                    <div class="col-6">

                                                        <table
                                                            class="table table-striped table-hover table-row-bordered custom-table">
                                                            <tbody>
                                                                <tr>
                                                                    <th class="fs-5">Rank</th>
                                                                    <td>{{ $item->rank }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <th class="fs-5">CDC NO</th>
                                                                    <td>{{ $item->cdc_no }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <th class="fs-5">Contact</th>
                                                                    <td>{{ $item->contact }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <th class="fs-5">Status</th>
                                                                    <td>
                                                                        @if ($item->status == 'board')
                                                                            <h6>On Board ({{ $item->ship_name }})</h6>
                                                                        @elseif($item->status == 'leave')
                                                                            <h6>On Leave</h6>
                                                                        @elseif($item->status == 'fleet')
                                                                            <h6>Not in Fleet Yet</h6>
                                                                        @endif
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th class="fs-5">Academy</th>
                                                                    <td>{{ $item->academy }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <th class="fs-5">Batch</th>
                                                                    <td>{{ $item->batch }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <th class="fs-5">CDC</th>
                                                                    <td>{{ $item->cdc }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <th class="fs-5">SID</th>
                                                                    <td>{{ $item->sid }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <th class="fs-5">PH</th>
                                                                    <td>{{ $item->ph }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <th class="fs-5">PST</th>
                                                                    <td>{{ $item->pst }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <th class="fs-5">FPFF</th>
                                                                    <td>{{ $item->fpff }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <th class="fs-5">EFA</th>
                                                                    <td>{{ $item->efa }}</td>
                                                                </tr>

                                                            </tbody>
                                                        </table>

                                                    </div>

                                                    <div class="col-6">

                                                        <table
                                                            class="table table-striped table-hover table-row-bordered custom-table">
                                                            <tbody>

                                                                <tr>
                                                                    <th class="fs-5">PSCRB</th>
                                                                    <td>{{ $item->pscrb }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <th class="fs-5">Passport</th>
                                                                    <td>{{ $item->passport }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <th class="fs-5">AFF</th>
                                                                    <td>{{ $item->aff }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <th class="fs-5">PSSR</th>
                                                                    <td>{{ $item->pssr }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <th class="fs-5">SAT</th>
                                                                    <td>{{ $item->sat }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <th class="fs-5">DSD</th>
                                                                    <td>{{ $item->dsd }}</td>
                                                                </tr>

                                                                <tr>
                                                                    <th class="fs-5">NWR</th>
                                                                    <td>{{ $item->nwr }}</td>
                                                                </tr>

                                                                <tr>
                                                                    <th class="fs-5">RASD</th>
                                                                    <td>{{ $item->rasd }}</td>
                                                                </tr>

                                                                <tr>
                                                                    <th class="fs-5">Atoto</th>
                                                                    <td>{{ $item->atoto }}</td>
                                                                </tr>

                                                                <tr>
                                                                    <th class="fs-5">Covid Vaccination</th>
                                                                    <td>{{ $item->covid }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <th class="fs-5">Discharge Date</th>
                                                                    <td>{{ \Carbon\Carbon::parse($item->discharge_date)->format('F j, Y') }}
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th class="fs-5">End Of Contact</th>
                                                                    <td>{{ \Carbon\Carbon::parse($item->end_of_contract)->format('F j, Y') }}
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>

                                                    </div>

                                                </div>

                                            </div>

                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <a href="{{ route('admin.rating.edit', $item->id) }}" class="text-primary">
                                    <i class="fa-solid fa-pencil text-primary fs-5"></i>
                                </a>

                                <a href="{{ route('admin.rating.destroy', $item->id) }}" class="delete">
                                    <i class="fa-solid fa-trash text-danger fs-5"></i>
                                </a>

                            </td>
                        </tr>
                    @endforeach


                </tbody>
            </table>
        </div>

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
