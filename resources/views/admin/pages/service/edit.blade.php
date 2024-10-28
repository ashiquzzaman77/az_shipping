<x-admin-app-layout :title="'Service Edit'">
    <div class="card card-flash">
        <div class="card-header">
            <div class="card-title">
            </div>

            <div class="card-toolbar">
                <a href="{{ route('admin.service.index') }}" class="btn btn-light-primary rounded-2">
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
                    </span> Back to list
                </a>

            </div>
        </div>
        <div class="card-body">

            <form id="myForm" method="post" action="{{ route('admin.service.update', $service->id) }}"
                enctype="multipart/form-data">
                @csrf

                @method('PUT')

                <div class="card bg-light">
                    <div class="row p-4">

                        <div class="col-4 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">Status</label>
                                <select name="status" data-placeholder="Select Row One.."
                                    class="form-select form-select-sm" data-control="select2"
                                    data-placeholder="Select an option">
                                    <option value="active" {{ $service->status === 'active' ? 'selected' : '' }}>Active
                                    </option>
                                    <option value="inactive" {{ $service->status === 'inactive' ? 'selected' : '' }}>
                                        Inactive</option>
                                </select>
                                @error('status')
                                    <div class="text-danger mt-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-4 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">Name</label>
                                <input type="text" name="name" placeholder="Service Name"
                                    class="form-control form-control-sm" value="{{ old('name', $service->name) }}">
                                @error('name')
                                    <div class="text-danger mt-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-12 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">Short Description</label>
                                <textarea name="short_descp" class="form-control" id="" cols="4" rows="4">{!! $service->short_descp !!}</textarea>
                                @error('short_descp')
                                    <div class="text-danger mt-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-4 mb-3">
                            <div class="">
                                <div class="row">
                                    <div class="col-6">
                                        <label for="" class="mb-2">Image</label>
                                        <input type="file" name="thumbnail_image" accept="image/*"
                                            class="form-control form-control-sm" id="thumbnailInput">
                                        @error('thumbnail_image')
                                            <div class="text-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-6">
                                        <img class=""
                                            src="{{ !empty($service->thumbnail_image) ? url('storage/' . $service->thumbnail_image) : 'https://ui-avatars.com/api/?name=' . urlencode('SS') }}"
                                            height="100" width="100" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="mt-2">
                                <img id="thumbnailPreview" src="#" alt="Image Preview"
                                    style="display:none; width: 200px; height: 100px; object-fit: cover;" />
                            </div>
                            <div id="errorMessage" class="text-danger mt-2" style="display:none;"></div>
                        </div>

                        <div class="col-12 mb-3 mt-4">
                            <button type="submit"
                                class="btn btn-primary rounded-0 px-5 btn-sm float-end">Update</button>
                        </div>

                    </div>
                </div>
            </form>


        </div>

    </div>

    @push('scripts')
        <script>
            document.getElementById('thumbnailInput').addEventListener('change', function(event) {
                const file = event.target.files[0];
                const preview = document.getElementById('thumbnailPreview');
                const errorMessage = document.getElementById('errorMessage');

                // Clear previous error message and preview
                errorMessage.style.display = 'none';
                errorMessage.textContent = '';
                preview.style.display = 'none'; // Hide preview initially

                if (file) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        const img = new Image();
                        img.src = e.target.result;
                        img.onload = function() {
                            // Check dimensions
                            if (img.width > 510 || img.height > 300) {
                                errorMessage.textContent = 'Image dimensions must not exceed 510x300 pixels.';
                                errorMessage.style.display = 'block';
                                event.target.value = ''; // Clear the input
                                return;
                            }
                            // If valid, show preview
                            preview.src = e.target.result;
                            preview.style.display = 'block';
                        }
                    }
                    reader.readAsDataURL(file);
                }
            });
        </script>
    @endpush




</x-admin-app-layout>
