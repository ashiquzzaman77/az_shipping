<x-admin-app-layout :title="'Admin List'">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <div class="card card-flash">
        <div class="card-header mt-6">
            <div class="card-title"></div>

            <div class="card-toolbar">

                <a href="{{ route('admin.admin-management.create') }}" class="btn btn-light-primary ms-2 rounded-2">
                    Create
                </a>


            </div>

        </div>
        <div class="card-body pt-0">
            <table id="kt_datatable_example_5" class="table table-striped table-row-bordered gy-5 gs-7 border rounded">
                <thead>
                    <tr class="bg-dark text-light">
                        <th>No</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Role</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="fw-bold text-gray-600">

                    @foreach ($admins as $key => $admin)
                        <tr>
                            <td>{{ $key + 1 }}</td>

                            <td>
                                <img src="{{ $admin->image ? asset('storage/images/' . $admin->image) : asset('upload/no_image.jpg') }}"
                                    alt="Admin Image" class="img-thumbnail" style="max-width: 80px;">

                            </td>

                            <td>{{ $admin->name }}</td>
                            <td>{{ $admin->email }}</td>
                            <td>{{ $admin->phone }}</td>
                            <td> <span class="badge bg-danger fw-bolder">{{ $admin->role }}</span></td>

                            <td>

                                <a href="{{ route('admin.admin-management.edit', $admin->id) }}">
                                    <i class="bi bi-pencil text-primary"></i>
                                </a>

                                <a href="{{ route('admin.admin-management.destroy', $admin->id) }}" class="delete">
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
