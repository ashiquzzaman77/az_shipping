<x-admin-app-layout :title="'Contact List'">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <div class="card card-flash">
        <div class="card-header mt-6">
            <div class="card-title"></div>
            {{-- <div class="card-toolbar">
                <a href="{{ route('admin.course.create') }}" class="btn btn-light-primary rounded-2">
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
            </div> --}}
        </div>
        <div class="card-body pt-0">

            <form id="bulkDeleteForm" method="POST" action="{{ route('admin.admin-contact.bulk-delete') }}">
                @csrf
                <button type="submit" class="btn btn-danger">Delete Selected</button>
            </form>

            <table id="kt_datatable_example_5" class="table table-striped table-row-bordered gy-5 gs-7 border rounded">
                <thead class="bg-dark text-white">
                    <tr>
                        <th width="3%"><input type="checkbox" id="selectAll"></th>
                        <th width="3%">No</th>
                        <th width="10%">Code</th>
                        <th width="10%">Name</th>
                        <th width="10%">Email</th>
                        <th width="10%">Phone</th>
                        <th width="10%">Ip Address</th>
                        <th width="10%">Actions</th>
                    </tr>
                </thead>
                <tbody class="fw-bold text-gray-600">
                    @foreach ($items as $key => $item)
                        <tr>
                            <td><input type="checkbox" class="item-checkbox" value="{{ $item->id }}"></td>
                            <td>{{ $key + 1 }}</td>
                            <td class="text-start">{{ $item->code }}</td>
                            <td class="text-start">{{ $item->name }}</td>
                            <td class="text-start">{{ $item->email }}</td>
                            <td class="text-start">{{ $item->phone }}</td>
                            <td class="text-start">{{ $item->ip_address }}</td>
                            <td>
                                <a href="" data-bs-toggle="modal" title="show message"
                                    data-bs-target="#messageModal" class="text-primary">
                                    <i class="bi bi-eye text-primary"></i>
                                </a>

                                {{-- Message Show Modal --}}
                                <div class="modal fade" id="messageModal" tabindex="-1"
                                    aria-labelledby="messageModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg modal-dialog-scrollable modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-2" id="exampleModalLabel">Message Details</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p class="fw-bold fs-3">Subject: <span>{{ $item->subject }}</span></p>
                                                <h5 style="text-align: justify;" class="fw-light">
                                                    {!! $item->message !!}</h5>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <a href="{{ route('admin.admin-contact.destroy', $item->id) }}" class="delete">
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

        <script>
            document.getElementById('selectAll').onclick = function() {
                var checkboxes = document.querySelectorAll('.item-checkbox');
                for (var checkbox of checkboxes) {
                    checkbox.checked = this.checked;
                }
            };

            document.getElementById('bulkDeleteForm').onsubmit = function(e) {
                var selectedIds = [];
                var checkboxes = document.querySelectorAll('.item-checkbox:checked');
                checkboxes.forEach((checkbox) => {
                    selectedIds.push(checkbox.value);
                });

                if (selectedIds.length === 0) {
                    e.preventDefault(); // Prevent form submission
                    alert('Please select at least one item to delete.');
                } else {
                    // Create a hidden input to hold the selected IDs
                    var input = document.createElement('input');
                    input.type = 'hidden';
                    input.name = 'ids';
                    input.value = JSON.stringify(selectedIds);
                    this.appendChild(input);
                }
            };
        </script>
    @endpush

</x-admin-app-layout>
