<x-admin-app-layout>
    <div class="py-5"> <!-- Bootstrap doesn't have a py-12, but you can use custom styles or closest approximation py-5 -->
        <div class="container"> <!-- Bootstrap's container replaces max-w-7xl, mx-auto, sm:px-6, lg:px-8 -->
            <div class="bg-white overflow-hidden shadow-sm rounded"> <!-- Use rounded for sm:rounded-lg -->
                <div class="p-3 border-bottom border-secondary"> <!-- p-6 is closest to p-3 in Bootstrap, border-b and border-gray-200 translate to border-bottom and a specific color, which Bootstrap's border-secondary is closest -->
                    <h1 class="h2 font-weight-bold mb-4">Activity Log Details</h1> <!-- text-2xl font-bold mb-4 translates to h2 and font-weight-bold -->

                    <div class="mb-4">
                        <label class="d-block text-dark fw-bold mb-2" for="causer_type">Causer Type</label> <!-- text-gray-700 text-sm font-bold mb-2 can be mapped to text-dark and fw-bold for font-weight-bold -->
                        <p id="causer_type" class="border p-2">{{ $activityLog->user_type }}</p> <!-- Bootstrap uses similar classes for borders and padding -->
                    </div>

                    <div class="mb-4">
                        <label class="d-block text-dark fw-bold mb-2" for="causer">Causer</label>
                        <p id="causer" class="border p-2">{{ $activityLog->user_id }}</p>
                    </div>

                    <div class="mb-4">
                        <label class="d-block text-dark fw-bold mb-2" for="event">Event</label>
                        <p id="event" class="border p-2">{{ $activityLog->description }}</p>
                    </div>

                    <div class="mb-4">
                        <label class="d-block text-dark fw-bold mb-2" for="subject_type">Subject Type</label>
                        <p id="subject_type" class="border p-2">{{ $activityLog->subject_type }}</p>
                    </div>

                    <div class="mb-4">
                        <label class="d-block text-dark fw-bold mb-2" for="subject">Subject</label>
                        <p id="subject" class="border p-2">{{ $activityLog->subject_id }}</p>
                    </div>

                    <div class="mb-4">
                        <label class="d-block text-dark fw-bold mb-2" for="date">Date</label>
                        <p id="date" class="border p-2">{{ $activityLog->created_at->format('F j, Y, g:i a') }}</p>
                    </div>

                    <a href="{{ route('admin.activity_logs.index') }}" class="text-primary hover:text-dark">Back to Activity Logs</a> <!-- text-blue-500 hover:text-blue-700 translates to text-primary and hover:text-dark -->
                </div>
            </div>
        </div>
    </div>
</x-admin-app-layout>