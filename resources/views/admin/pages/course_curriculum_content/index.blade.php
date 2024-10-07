<x-admin-app-layout :title="'Course Curriculum Content List'">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <div class="card card-flash">
        <div class="card-header mt-6">
            <div class="card-title"></div>
            <div class="card-toolbar">
                <a href="{{ route('admin.course_curriculum_content.create') }}" class="btn btn-light-primary rounded-2">
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
                <thead>
                    <tr>
                        <th width="10%">No</th>
                        <th width="20%">Course Curriculum Name</th>
                        <th width="30%">File</th>
                        <th width="20%">Course Video</th>
                        <th class="15%">Actions</th>
                    </tr>
                </thead>
                <tbody class="fw-bold text-gray-600">

                    {{-- @foreach ($courseContents as $key => $courseContent)
                        <tr>
                            <td>{{ $key + 1 }}</td>

                            <td class="text-start">{{ $courseContent->courseCurriculum->title }}</td>

                            <td class="text-start">
                                @if ($courseContent->course_file)
                                    <a href="{{ asset('storage/' . $courseContent->course_file) }}" target="_blank"
                                        class="">
                                        Download PDF
                                    </a>
                                @else
                                    <p class="text-danger">No file available</p>
                                @endif
                            </td>

                            <td class="text-start">

                                @if ($courseContent->course_video)
                                    <video width="70%" height="100" controls>
                                        <source src="{{ asset('storage/' . $courseContent->course_video) }}"
                                            type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video>
                                @else
                                    <p class="text-danger">No videos available</p>
                                @endif

                            </td>



                            <td class="">

                                <a href="{{ route('admin.course_curriculum_content.edit', $courseContent->id) }}"
                                    class="text-primary">
                                    <i class="bi bi-pencil text-primary"></i>
                                </a>

                                <a href="{{ route('admin.course_curriculum_content.destroy', $courseContent->id) }}"
                                    class="delete">
                                    <i class="bi bi-trash3-fill text-danger"></i>
                                </a>

                            </td>
                        </tr>
                    @endforeach --}}

                    @foreach ($groupedCourseContents as $courseCurriculumId => $courseContents)
                        @php
                            // Initialize variables to store aggregated data
                            $files = [];
                            $videos = [];
                        @endphp

                        <!-- Iterate through each grouped content and aggregate files and videos -->
                        @foreach ($courseContents as $courseContent)
                            @if ($courseContent->course_file)
                                @php
                                    $files[] = $courseContent->course_file;
                                @endphp
                            @endif

                            @if ($courseContent->course_video)
                                @php
                                    $videos[] = $courseContent->course_video;
                                @endphp
                            @endif
                        @endforeach

                        <!-- Display aggregated data -->
                        <tr>
                            <!-- Display index (starting from 1) -->
                            <td>{{ $loop->iteration }}</td>

                            <!-- Display course title (assuming it's the same for grouped items) -->
                            <td class="text-start">{{ $courseContents->first()->courseCurriculum->title }}</td>

                            <!-- Display download links for files -->
                            <td class="text-start">
                                @if (count($files) > 0)
                                    @foreach ($files as $file)
                                        <a href="{{ asset('storage/' . $file) }}" target="_blank">
                                            Download PDF
                                        </a><br>
                                    @endforeach
                                @else
                                    <p class="text-danger">No file available</p>
                                @endif
                            </td>

                            <!-- Display video(s) -->
                            <td class="text-start">
                                @if (count($videos) > 0)
                                    @foreach ($videos as $video)
                                        <video width="70%" height="100" controls>
                                            <source src="{{ asset('storage/' . $video) }}" type="video/mp4">
                                            Your browser does not support the video tag.
                                        </video><br>
                                    @endforeach
                                @else
                                    <p class="text-danger">No videos available</p>
                                @endif
                            </td>

                            <!-- Display edit and delete options -->
                            <td>
                                <a href="{{ route('admin.course_curriculum_content.edit', $courseCurriculumId) }}"
                                    class="text-primary">
                                    <i class="bi bi-pencil text-primary"></i>
                                </a>
                                <a href="{{ route('admin.course_curriculum_content.destroy', $courseCurriculumId) }}"
                                    class="delete">
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
