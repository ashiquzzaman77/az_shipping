<x-admin-app-layout>
    <div class="py-5">
        <div class="container mx-auto px-3">
            <div class="card shadow-sm">
                <div class="card-body">
                    <div class="mb-4">
                        <p><strong>ID:</strong> {{ $service->id }}</p>
                        <p><strong>Title:</strong> {{ $service->title }}</p>
                        <p><strong>Short Description:</strong> {{ $service->short_description }}</p>
                        <p><strong>Status:</strong> {{ $service->status == 1 ? 'Active' : 'Inactive' }}</p>
                        <p><strong>Created At:</strong> {{ $service->created_at->format('F j, Y, g:i a') }}</p>
                        <p><strong>Last Updated:</strong> {{ $service->updated_at->format('F j, Y, g:i a') }}</p>
                        @if ($service->icon)
                            <p><strong>Icon:</strong></p>
                            <img src="{{ asset('storage/' . $service->icon->image) }}" class="img-fluid img-thumbnail"
                                alt="{{ $service->title }}" style="height: 200px;">
                        @endif
                    </div>

                    <div class="d-flex justify-content-end">
                        <a href="{{ route('admin.services.index') }}" class="text-primary">Back to List</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-app-layout>
