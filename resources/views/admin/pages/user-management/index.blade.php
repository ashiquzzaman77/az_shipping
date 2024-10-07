<x-admin-app-layout :title="'User List'">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <div class="card card-flash">
        <div class="card-header mt-6">
            <div class="card-title"></div>

            {{-- <div class="card-toolbar">

                <a href="" class="btn btn-light-danger ms-2 rounded-2">
                     Unpaid
                </a>

                <a href="" class="btn btn-light-primary rounded-2 ms-2">
                     Pending
                </a>

                <a href="" class="btn btn-light-info rounded-2 ms-2">
                    Paid
               </a>


            </div> --}}

        </div>
        <div class="card-body pt-0">
            <table id="kt_datatable_example_5" class="table table-striped table-row-bordered gy-5 gs-7 border rounded">
                <thead class="bg-dark text-white fw-bolder">
                    <tr>
                        <th width="5%">No</th>
                        <th width="10%">Name</th>
                        <th width="10%">Email</th>
                        <th width="10%">Phone</th>
                        <th width="5%">Status</th>
                        <th width="8%">Actions</th>
                    </tr>
                </thead>
                <tbody class="fw-bold text-gray-600">

                    @foreach ($users as $key => $user)
                        <tr>
                            <td>{{ $key + 1 }}</td>

                            <td class="text-start">{{ $user->name }}</td>
                            <td class="text-start">{{ $user->email }}</td>
                            <td class="text-start">{{ $user->phone }}</td>
                            <td class="text-start">
                                @if ($user->status == 'active')
                                    <span class="badge bg-success">Active</span>
                                @else
                                    <span class="badge bg-danger">Inactive</span>
                                @endif
                            </td>

                            <td>

                                @if ($user->status == 'active')
                                    <a href="{{ route('user-register.inactive', $user->id) }}" class=""
                                        title="Inactive"><i class="fa-regular fa-thumbs-down text-primary"></i></a>
                                @else
                                    <a href="{{ route('user-register.active', $user->id) }}" class=""
                                        title="active"><i class="fa-regular fa-thumbs-up text-success"></i></i></a>
                                @endif

                                <a href="{{ route('admin.user-management.destroy', $user->id) }}" class="delete">
                                    <i class="bi bi-trash3-fill text-danger"></i>
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
