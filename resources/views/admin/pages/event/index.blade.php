<x-admin-app-layout :title="'Event List'">

    

    <div class="card card-flash">
        <div class="card-header mt-6">
            <div class="card-title"></div>
            <div class="card-toolbar">
                <a href="{{ route('admin.event.create') }}" class="btn btn-light-primary rounded-2">
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
                        <th width="5%">No</th>

                        <th width="10%">Banner Image</th>
                        <th width="15%">Event Name</th>
                        <th width="15%">Start Date</th>
                        <th width="15%">End Date</th>
                        <th width="15%">Event Type</th>
                        <th width="15%">Status</th>

                        <th width="100%">Actions</th>
                    </tr>
                </thead>
                <tbody class="fw-bold text-gray-600">

                    @foreach ($items as $key => $item)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td class="">

                                <img class=""
                                    src="{{ !empty($item->banner_image) ? url('storage/event/' . $item->banner_image) : 'https://ui-avatars.com/api/?name=' . urlencode($item->banner_title) }}"
                                    height="40" width="40" alt="">

                            </td>

                            <td class="text-start">{{ $item->event_name }}</td>
                            <td class="text-start">{{ $item->start_date }}</td>
                            <td class="text-start">{{ $item->end_date }}</td>
                            <td class="text-start">
                                <span class="badge 
                                    @if($item->event_type === 'workshop') bg-primary 
                                    @elseif($item->event_type === 'seminar') bg-success 
                                    @elseif($item->event_type === 'concert') bg-danger 
                                    @elseif($item->event_type === 'conference') bg-warning 
                                    @elseif($item->event_type === 'webinar') bg-info 
                                    @endif">
                                    {{ ucfirst($item->event_type) }}
                                </span>
                            </td>
                            <td class="text-start">
                                <span class="badge 
                                    @if($item->status === 'canceled') bg-danger
                                    @elseif($item->status === 'ongoing') bg-success 
                                    @elseif($item->status === 'upcoming') bg-info 
                                    @elseif($item->status === 'completed') bg-dark 
                                    @elseif($item->status === 'registration_open') bg-primary 
                                    @elseif($item->status === 'registration_close') bg-warning 
                                    @endif">
                                    {{ ucfirst($item->status) }}
                                </span>
                            </td>
                            

                            <td>

                                <a href="{{ route('admin.event.edit', $item->id) }}" class="text-primary">
                                    <i class="bi bi-pencil text-primary"></i>
                                </a>

                                <a href="{{ route('admin.event.destroy', $item->id) }}" class="delete">
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
