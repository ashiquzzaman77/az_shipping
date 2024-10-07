<x-admin-app-layout :title="'Registration Pending'">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <div class="card card-flash">
        <div class="card-header mt-6">
            <div class="card-title"></div>

            <div class="card-toolbar">

                <a href="{{ route('admin.all.registration') }}" class="btn btn-light-danger ms-2 rounded-2">
                    Unpaid
                </a>

                <a href="{{ route('admin.registration.pending') }}" class="btn btn-light-primary rounded-2 ms-2">
                    Pending
                </a>

                <a href="{{ route('admin.registration.paid') }}" class="btn btn-light-info rounded-2 ms-2">
                    Paid
                </a>


            </div>

        </div>
        <div class="card-body pt-0">
            <table id="kt_datatable_example_5" class="table table-striped table-row-bordered gy-5 gs-7 border rounded">
                <thead class="bg-dark text-light">
                    <tr>
                        <th width="7%">No</th>
                        <th width="5%">Name</th>
                        <th width="5%">Email</th>
                        <th width="10%">Phone</th>
                        <th width="25%">Course Name</th>
                        <th width="25%">Course Type</th>
                        <th width="15%">Course Amount</th>
                        <th width="15%">Register Date</th>
                        <th width="15%">Payment Method</th>
                        <th width="15%">Amount</th>
                        <th width="15%">Transcation</th>
                        <th width="18%">Status</th>
                        <th width="10%">Actions</th>
                    </tr>
                </thead>
                <tbody class="fw-bold text-gray-600">

                    @foreach ($registrations as $key => $registration)
                        <tr>
                            <td>{{ $key + 1 }}</td>

                            <td class="text-start">{{ $registration->name }}</td>
                            <td class="text-start">{{ $registration->email }}</td>
                            <td class="text-start">{{ $registration->phone }}</td>
                            <td class="text-start">{{ optional($registration->courseName)->name }}</td>
                            <td class="text-start">{{ $registration->course_type }}</td>
                            <td class="text-start">Tk {{ $registration->course_amount }}</td>
                            <td class="text-start">
                                {{ \Carbon\Carbon::parse($registration->course_register_date)->format('F j, Y') }}
                            </td>

                            <td class="text-start">{{ $registration->payment_method }}</td>
                            <td class="text-start text-danger">{{ $registration->amount }}</td>
                            <td class="text-start">{{ $registration->transcation_id }}</td>

                            <td>

                                @if ($registration->payment_type == 'unpaid')
                                    <a href="javascript:;" class="btn btn-danger btn-sm text-light">
                                        Unpaid
                                    </a>
                                @elseif ($registration->payment_type == 'pending')
                                    <a href="javascript:;" class="btn btn-info btn-sm text-light">
                                        Pending
                                    </a>
                                @else
                                    <a href="javascript:;" class="btn btn-success btn-sm text-dark">
                                        Paid
                                    </a>
                                @endif
                                
                            </td>

                            <td>

                                <a style="cursor: pointer" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal{{ $registration->id }}" title="Details">
                                    <i class="bi bi-view-list text-primary fs-3"></i>
                                </a>

                                <a href="{{ route('admin.delete.registration', $registration->id) }}" class="delete">
                                    <i class="bi bi-trash3-fill text-danger fs-3"></i>
                                </a>

                            </td>
                        </tr>
                    @endforeach


                </tbody>
            </table>
        </div>
    </div>

    <!-- Modal -->
    @foreach ($registrations as $key => $registration)
        <div class="modal fade" id="exampleModal{{ $registration->id }}" tabindex="-1"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Course Registration Details</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">

                        <div class="row">
                            <div class="col-12">
                                <form action="{{ route('paid-course-registration.update', $registration->id) }}"
                                    method="POST">
                                    @csrf
                                    @method('POST')
                                    <div class="row">
                                        <div class="col-12 mb-3">
                                            <label for="" class="mb-2">Course Name</label>
                                            <input type="text" readonly disabled class="form-control form-control-sm"
                                                value="{{ optional($registration->courseName)->name }}">
                                        </div>

                                        <div class="col-6">
                                            <label for="" class="mb-2">Course Amount</label>
                                            <input type="number" readonly disabled required class="form-control form-control-sm"
                                                name="course_amount" value="{{ $registration->course_amount }}"
                                                placeholder="eg:10,000">
                                        </div>

                                        <div class="col-6">
                                            <label for="" class="mb-2">Course Name</label>
                                            <select name="payment_type" required class="form-select form-select-sm"
                                                id="">
                                                <option disabled selected>Choose Payment</option>

                                                {{-- <option value="unpaid" {{ $registration->payment_type == 'unpaid' ? 'selected' : '' }}>Unpaid</option> --}}

                                                <option value="pending" {{ $registration->payment_type == 'pending' ? 'selected' : '' }}>Pending</option>

                                                <option value="paid" {{ $registration->payment_type == 'paid' ? 'selected' : '' }}>Approve</option>

                                            </select>
                                        </div>
                                        <div class="col-6 mt-3 me-end">
                                            <button type="submit" class="btn btn-primary btn-sm">Update</button>

                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    @endforeach


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
