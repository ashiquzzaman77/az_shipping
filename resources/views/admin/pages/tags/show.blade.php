<x-admin-app-layout>
    <div class="py-5">
        <div class="container mx-auto px-3">
            <div class="card shadow-sm">
                <div class="card-body">
                    <div class="mb-4">
                        <p><strong>ID:</strong> {{ $tag->id }}</p>
                        <p><strong>Name:</strong> {{ $tag->name }}</p>
                        <p><strong>Status:</strong> {{ $tag->status == 1 ? 'Active' : 'Inactive' }}</p>
                        <p><strong>Created At:</strong> {{ $tag->created_at->format('F j, Y, g:i a') }}</p>
                        <p><strong>Last Updated:</strong> {{ $tag->updated_at->format('F j, Y, g:i a') }}</p>
                    </div>

                    <div class="d-flex justify-content-end">
                        <a href="{{ route('admin.tags.index') }}" class="text-primary">Back to Tag List</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-app-layout>
