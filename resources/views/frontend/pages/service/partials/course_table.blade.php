<table class="table table-bordered table-striped table-hover">
    <thead class="">
        <tr>
            <th style="background-color: #0a1d5b !important;color: white;" scope="col">
                Code
            </th>
            <th style="background-color: #0a1d5b !important;color: white;" scope="col">
                Course Title
            </th>
            <th style="background-color: #0a1d5b !important;color: white;" scope="col">
                Venue
            </th>
            <th style="background-color: #0a1d5b !important;color: white;" scope="col">
                Starting Date
            </th>
            <th style="background-color: #0a1d5b !important;color: white;" scope="col">
                Duration
            </th>
            <th style="background-color: #0a1d5b !important;color: white;" scope="col">
                Fees
            </th>
        </tr>
    </thead>

    <tbody>
        @foreach ($courses as $course)
            <tr class="">
                <td>{{ $course->course_code }}</td>
                <td>{{ $course->name }}</td>
                <td>{{ $course->course_type }}</td>
                <td>{{ $course->registration_start_date }}</td>
                <td>{{ $course->course_duration }}</td>
                <td>{{ $course->price }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
