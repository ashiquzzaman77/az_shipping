<x-app-layout :title="'Register Course'">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"/>
    <link href="assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />

    <script src="assets/plugins/custom/datatables/datatables.bundle.js"></script>

    
    <div class="card">

        <div class="card-body pt-5">

            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">

                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                        aria-selected="true">Module</button>
                </li>

                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                        aria-selected="false">Recording</button>
                </li>

                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact"
                        aria-selected="false">Resource</button>
                </li>

                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-disabled-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-disabled" type="button" role="tab" aria-controls="pills-disabled"
                        aria-selected="false">Certificate</button>
                </li>

            </ul>


            <div class="tab-content" id="pills-tabContent">

                {{-- Module Section  --}}
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab"
                    tabindex="0">

                    <div class="accordion" id="accordionExample">

                        @foreach ($course->courseCurriculams as $courseCurriculam)
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="heading{{ $courseCurriculam->id }}">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse{{ $courseCurriculam->id }}"
                                        aria-expanded="{{ $loop->first ? 'true' : 'false' }}"
                                        aria-controls="collapse{{ $courseCurriculam->id }}">


                                        <div class="">
                                            <h3><strong class="fs-1">{{ $loop->iteration }}. </strong>
                                                {{ $courseCurriculam->title }}</h3>
                                            <p>
                                                <span class="badge badge-secondary"><i
                                                        class="fa-solid fa-video me-2"></i> Live Class :
                                                    {{ $courseCurriculam->class_number }} </span>

                                                <span class="badge badge-secondary"><i
                                                        class="fa-solid fa-clock me-2"></i> Time :
                                                    {{ $courseCurriculam->duration }} Hours </span>
                                            </p>
                                            {{-- <p>1 Test</p> --}}
                                        </div>

                                    </button>
                                </h2>

                                <div id="collapse{{ $courseCurriculam->id }}"
                                    class="accordion-collapse collapse {{ $loop->first ? 'show' : '' }}"
                                    aria-labelledby="heading{{ $courseCurriculam->id }}"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        {!! $courseCurriculam->description !!}
                                    </div>
                                </div>
                            </div>
                        @endforeach


                    </div>

                </div>

                {{-- Recording Section  --}}
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab"
                    tabindex="0">

                    <div class="card">

                        <div class="card-body pt-5">

                            <table id="kt_datatable_example_5"
                                class="table table-striped table-row-bordered gy-5 gs-7 border rounded">
                                <thead class="bg-dark">
                                    <tr class="fw-bolder text-white fs-6 px-7">
                                        <th>No</th>
                                        <th>Course Curriculum</th>
                                        <th>Class Video</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($course->courseCurriculams as $courseCurriculam)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $courseCurriculam->title }}</td>

                                            <td>
                                                @foreach ($courseCurriculam->courseCurriContent as $video)
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-grey" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModal{{ $video->id }}">
                                                        <i class="fa-solid fa-video"></i> ক্লাস রেকর্ডিং
                                                    </button>

                                                    <!-- Modal -->
                                                    <div class="modal fade" id="exampleModal{{ $video->id }}"
                                                        tabindex="-1" aria-labelledby="exampleModalLabel"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog modal-lg modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h1 class="modal-title fs-5"
                                                                        id="exampleModalLabel">
                                                                        {{ $courseCurriculam->title }}</h1>
                                                                    <button type="button" class="btn-close"
                                                                        data-bs-dismiss="modal"
                                                                        aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <video width="100%" height="300px" controls>
                                                                        <source
                                                                            src="{{ asset('storage/' . $video->course_video) }}"
                                                                            type="video/mp4">
                                                                    </video>
                                                                    <br>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>

                        </div>
                    </div>

                </div>

                {{-- Resource Section --}}
                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab"
                    tabindex="0">

                    <div class="card">

                        <div class="card-body pt-5">

                            <table id="kt_datatable_example_5"
                                class="table table-striped table-row-bordered gy-5 gs-7 border rounded">
                                <thead class="bg-dark">
                                    <tr class="fw-bolder text-white fs-6 px-7">
                                        <th>No</th>
                                        <th>Course Curriculum</th>
                                        <th>File</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($course->courseCurriculams as $courseCurriculam)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $courseCurriculam->title }}</td>
                                            <td>
                                                @foreach ($courseCurriculam->courseCurriContentFileName as $file)
                                                    <a href="{{ asset('storage/' . $file->course_file) }}"
                                                        target="_blank">
                                                        Download PDF
                                                    </a>
                                                @endforeach
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>

                        </div>
                    </div>

                </div>

                {{-- Certificate Section --}}
                <div class="tab-pane fade" id="pills-disabled" role="tabpanel" aria-labelledby="pills-disabled-tab"
                    tabindex="0">
                </div>

            </div>

        </div>
    </div>

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

</x-app-layout>
