<x-admin-app-layout :title="'Course List'">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <div class="card card-flash">
        <div class="card-header mt-6">
            <div class="card-title"></div>
            <div class="card-toolbar">
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
            </div>
        </div>

        <div class="card-body pt-0">
            <table id="kt_datatable_example_5" class="table table-striped table-row-bordered gy-5 gs-7 border rounded">
                <thead class="bg-dark text-light">
                    <tr>
                        <th width="5%">No</th>
                        <th width="8%">Image</th>
                        <th width="15%">Section</th>
                        <th width="15%">Category</th>
                        <th width="20%">Course Name</th>
                        <th width="8%">Lecture</th>
                        <th width="8%">Seat</th>
                        <th width="10%">Price</th>
                        <th width="10%">Discount Price</th>
                        <th width="100%">Actions</th>
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

                            <td class="text-start">{{ $course->section->name }}</td>
                            <td class="text-start">{{ $course->category->name }}</td>
                            <td class="text-start">{{ $course->name }}</td>
                            <td class="text-start">{{ $course->lecture }}</td>
                            <td class="text-start">{{ $course->available_seats }}</td>
                            <td class="text-start">{{ $course->price }} Tk</td>
                            <td class="text-start">{{ $course->discount_price }} Tk</td>
                            <td>
                                
                                @if (Auth::guard('admin')->user()->can('edit.course'))
                                    <a href="{{ route('admin.course.edit', $course->id) }}" class="text-primary">
                                        <i class="bi bi-pencil text-primary"></i>
                                    </a>
                                @endif

                                @if (Auth::guard('admin')->user()->can('delete.course'))
                                    <a href="{{ route('admin.course.destroy', $course->id) }}" class="delete">
                                        <i class="bi bi-trash3-fill text-danger"></i>
                                    </a>
                                @endif

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
