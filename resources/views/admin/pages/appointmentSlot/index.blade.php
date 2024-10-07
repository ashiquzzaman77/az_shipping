<x-admin-app-layout :title="'Appointment Slot'">

    <div class="card card-flash">
        <div class="card-header mt-6">
            <div class="card-title"></div>
            <div class="card-toolbar">

                <a href="javascript:void(0)" class="btn btn-light-primary rounded-2" data-bs-toggle="modal"
                    data-bs-target="#createModal">

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
                    </span> Create

                </a>

            </div>
        </div>

        <div class="card-body pt-0">
            <table id="kt_datatable_example_5" class="table table-striped table-row-bordered gy-5 gs-7 border rounded">
                <thead class="bg-dark text-light">
                    <tr>
                        <th width="5%">Sl.</th>
                        <th width="35%">Counselor Name</th>
                        <th width="20%">Start Time</th>
                        <th width="20%">End Time</th>
                        <th width="20%">Date</th>
                        <th width="10%">Actions</th>
                    </tr>
                </thead>
                <tbody class="fw-bold text-gray-600">

                    @foreach ($items as $key => $item)
                        <tr>
                            <td>{{ $key + 1 }}</td>

                            <td class="text-start">{{ $item->adminName->name }}</td>
                            <td class="text-start">{{ $item->start_time }}</td>
                            <td class="text-start">{{ $item->end_time }}</td>
                            <td class="text-start">{{ $item->date }}</td>



                            <td>

                                <a href="" data-bs-toggle="modal" data-bs-target="#editModal{{ $item->id }}"
                                    class="text-primary">
                                    <i class="bi bi-pencil text-primary"></i>
                                </a>

                                {{-- Edit Modal  --}}
                                <div class="modal fade" id="editModal{{ $item->id }}" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">

                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Appointment Slot
                                                </h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>

                                            <div class="modal-body">

                                                <form id="myForm" method="post"
                                                    action="{{ route('admin.appointment-slot.update', $item->id) }}"
                                                    enctype="multipart/form-data">
                                                    @csrf

                                                    @method('PUT')

                                                    <div class="card bg-light">

                                                        <form id="myForm" method="post"
                                                            action="{{ route('admin.appointment-slot.update', $item->id) }}"
                                                            enctype="multipart/form-data">
                                                            @csrf
                                                            @method('PUT') <!-- Use PUT method for updating -->

                                                            <div class="card bg-light">
                                                                <div class="row p-4">
                                                                    <div class="col-12 mb-3">
                                                                        <div>
                                                                            <label for=""
                                                                                class="mb-2">Instructor Name</label>
                                                                            <select
                                                                                class="form-select form-select-solid form-select-sm @error('counselor_id') is-invalid @enderror"
                                                                                name="counselor_id" autocomplete="off">
                                                                                <option selected disabled>Choose
                                                                                    Counselor</option>
                                                                                @if (count($admins) > 0)
                                                                                    @foreach ($admins as $admin)
                                                                                        <option class="form-control"
                                                                                            value="{{ $admin->id }}"
                                                                                            {{ $admin->id == old('counselor_id', $item->counselor_id) ? 'selected' : '' }}>
                                                                                            {{ $admin->name }}
                                                                                        </option>
                                                                                    @endforeach
                                                                                @endif
                                                                            </select>
                                                                            @error('counselor_id')
                                                                                <div class="invalid-feedback">
                                                                                    {{ $message }}</div>
                                                                            @enderror
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-12 mb-3">
                                                                        <div class="form-group">
                                                                            <label for="" class="mb-2">Start
                                                                                Time</label>
                                                                            <input type="time" name="start_time"
                                                                                placeholder="Start Time"
                                                                                class="form-control form-control-sm"
                                                                                value="{{ old('start_time', $item->start_time) }}">
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-12 mb-3">
                                                                        <div class="form-group">
                                                                            <label for="" class="mb-2">End
                                                                                Time</label>
                                                                            <input type="time" name="end_time"
                                                                                placeholder="End Time"
                                                                                class="form-control form-control-sm"
                                                                                value="{{ old('end_time', $item->end_time) }}">
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-12 mb-3">
                                                                        <div class="form-group">
                                                                            <label for=""
                                                                                class="mb-2">Date</label>
                                                                            <input type="date" name="date"
                                                                                placeholder="Date"
                                                                                class="form-control form-control-sm"
                                                                                value="{{ old('date', $item->date) }}">
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-12 mb-3 mt-4">
                                                                        <button type="submit"
                                                                            class="btn btn-primary rounded-0 px-5 btn-sm float-end">Update</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>


                                                    </div>

                                                </form>

                                            </div>


                                        </div>
                                    </div>
                                </div>
                                {{-- Edit Modal  --}}

                                <a href="{{ route('admin.appointment-slot.destroy', $item->id) }}" class="delete">
                                    <i class="bi bi-trash3-fill text-danger"></i>
                                </a>


                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>

    </div>

    {{-- Create Modal --}}
    <div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Appointment Slot</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">

                    <form id="myForm" method="post" action="{{ route('admin.appointment-slot.store') }}"
                        enctype="multipart/form-data">
                        @csrf

                        <div class="card bg-light">

                            <div class="row p-4">

                                <div class="col-12 mb-3">
                                    <div>
                                        <label for="counselor_id" class="mb-2">Instructor Name</label>

                                        <select
                                            class="form-select form-select-solid form-select-sm @error('counselor_id') is-invalid @enderror"
                                            name="counselor_id" required autocomplete="off">


                                            <!-- Default option -->

                                            @if ($admins->count() > 0)
                                                <option selected disabled>Choose Counselor</option>
                                                @foreach ($admins as $admin)
                                                    <option class="form-control" value="{{ $admin->id }}">
                                                        {{ $admin->name }}
                                                    </option>
                                                @endforeach
                                            @endif

                                        </select>

                                        @error('counselor_id')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>


                                <div class="col-12 mb-3">
                                    <div class="form-group">
                                        <label for="" class="mb-2">Start Time</label>
                                        <input type="time" required name="start_time" placeholder="Start Time"
                                            class="form-control form-control-sm" value="{{ old('start_time') }}">
                                    </div>
                                </div>

                                <div class="col-12 mb-3">
                                    <div class="form-group">
                                        <label for="" class="mb-2">End Time</label>
                                        <input type="time" required name="end_time" placeholder="End Time"
                                            class="form-control form-control-sm" value="{{ old('end_time') }}">
                                    </div>
                                </div>

                                <div class="col-12 mb-3">
                                    <div class="form-group">
                                        <label for="" class="mb-2">Date</label>
                                        <input type="date" required name="date" placeholder="Date"
                                            class="form-control form-control-sm" value="{{ old('date') }}">
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
