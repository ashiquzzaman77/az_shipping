<x-admin-app-layout :title="'Legal Edit'">

    <style>
        /* Basic styling for dropzone */
        .dropzone {
            width: 100%;
            height: 95px;
            border: 2px dashed #007bff;
            border-radius: 5px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #007bff;
            font-size: 13px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        /* Hover effect for dropzone */
        .dropzone:hover {
            background-color: #f0f8ff;
        }

        /* When file is dragged over the dropzone */
        .dropzone.dragover {
            background-color: #e9f7ff;
            border-color: #0056b3;
        }

        /* Hide input field (it is used for clicking to select files) */
        input[type="file"] {
            display: none;
        }

        /* Style for the remove icon on top of the preview */
        #remove-image {
            position: absolute;
            top: 10px;
            right: 10px;
            background: rgba(0, 0, 0, 0.5);
            color: white;
            border: none;
            border-radius: 50%;
            padding: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        #remove-image:hover {
            background: rgba(0, 0, 0, 0.7);
        }

        /* Style for the image size display */
        #image-size {
            position: absolute;
            bottom: 10px;
            left: 10px;
            background: rgba(0, 0, 0, 0.5);
            color: white;
            padding: 5px;
            font-size: 14px;
            border-radius: 3px;
        }
    </style>

    <div class="card card-flash">
        <div class="card-header">
            <div class="card-title">
            </div>

            <div class="card-toolbar">
                <a href="{{ route('admin.legal.index') }}" class="btn btn-light-primary rounded-2">
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

            <form id="myForm" method="post" action="{{ route('admin.legal.update', $legal->id) }}"
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

                                    <option value="active" {{ $legal->status == 'active' ? 'selected' : '' }}>Active
                                    </option>
                                    <option value="inactive" {{ $legal->status == 'inactive' ? 'selected' : '' }}>
                                        Inactive</option>

                                </select>
                            </div>

                        </div>

                        <div class="col-6 mb-3">
                            <div class="course-banner-container">
                                <label for="course_banner_image" class="mb-2">Choose Legal Image</label>

                                <!-- Dropzone area -->
                                <div class="row">
                                    <div class="col-6">
                                        <div id="dropzone" class="dropzone"
                                            aria-label="Drag & drop image here or click to select">
                                            <input type="file" name="image" id="course_banner_image"
                                                accept="image/*" class="form-control form-control-sm"
                                                style="display:none;">

                                            <p>Drag & Drop your image here or click to select (Size 800 x 800).For Less
                                                Than
                                                5Mb </p>
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <img class=""
                                            src="{{ !empty($legal->image) ? url('storage/' . $legal->image) : 'https://ui-avatars.com/api/?name=' . urlencode($legal->image) }}"
                                            height="140" width="140" alt="">
                                    </div>
                                </div>

                                <!-- Validation message -->
                                <div id="validation-message" class="text-danger" style="display:none;"></div>

                                <!-- Image preview and remove icon -->
                                <div id="image-preview" style="display:none; margin-top: 10px; position: relative;">
                                    <img id="preview-img" src="" alt="Image Preview"
                                        style="max-width: 100%; max-height: 200px; object-fit: cover; border-radius: 5px;">

                                    <!-- Image size display -->
                                    <div id="image-size"
                                        style="position: absolute; bottom: 10px; left: 10px; background: rgba(0, 0, 0, 0.5); color: white; padding: 5px; font-size: 14px; border-radius: 3px;">
                                        1920 x 500
                                    </div>

                                    <button type="button" id="remove-image"
                                        style="position: absolute; top: 10px; right: 605px; background: rgba(12, 12, 12, 0.925); color: white; border: none; width:35px;height:35px; border-radius: 50%; padding: 1px; cursor: pointer; font-size: 22px;">
                                        ×
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 mb-3 mt-4">
                            <button type="submit"
                                class="btn btn-primary rounded-0 px-5 btn-sm float-end">Submit</button>
                        </div>

                    </div>
                </div>

            </form>

        </div>

    </div>

    @push('scripts')
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const dropzone = document.getElementById('dropzone');
                const fileInput = document.getElementById('course_banner_image');
                const validationMessage = document.getElementById('validation-message');
                const imagePreview = document.getElementById('image-preview');
                const previewImg = document.getElementById('preview-img');
                const imageSizeDisplay = document.getElementById('image-size');
                const removeButton = document.getElementById('remove-image');
                const maxFileSize = 5 * 1024 * 1024; // 5MB max file size
                const requiredWidth = 800;
                const requiredHeight = 800;

                // Show the file input when clicking the dropzone
                dropzone.addEventListener('click', () => {
                    fileInput.click();
                });

                // Handle dragover to add visual feedback
                dropzone.addEventListener('dragover', function(event) {
                    event.preventDefault();
                    dropzone.classList.add('dragover');
                });

                // Handle dragleave to remove visual feedback
                dropzone.addEventListener('dragleave', function() {
                    dropzone.classList.remove('dragover');
                });

                // Handle drop
                dropzone.addEventListener('drop', function(event) {
                    event.preventDefault();
                    dropzone.classList.remove('dragover');
                    handleFile(event.dataTransfer.files[0]);
                });

                // Handle file selection via input
                fileInput.addEventListener('change', function(event) {
                    handleFile(event.target.files[0]);
                });

                // Function to handle the file
                function handleFile(file) {
                    if (file) {
                        const fileType = file.type.split('/')[0]; // Get the type (e.g., image)
                        const fileSize = file.size;

                        // Validate file type and size
                        if (fileType !== 'image') {
                            validationMessage.textContent = 'Only image files are allowed.';
                            validationMessage.style.display = 'block';
                            fileInput.value = ''; // Reset input
                            imagePreview.style.display = 'none'; // Hide preview if invalid
                        } else if (fileSize > maxFileSize) {
                            validationMessage.textContent = 'File size must be less than 5MB.';
                            validationMessage.style.display = 'block';
                            fileInput.value = ''; // Reset input
                            imagePreview.style.display = 'none'; // Hide preview if invalid
                        } else {
                            // Check image dimensions
                            const img = new Image();
                            img.onload = function() {
                                const width = img.width;
                                const height = img.height;

                                if (width !== requiredWidth || height !== requiredHeight) {
                                    validationMessage.textContent =
                                        `Image dimensions must be ${requiredWidth}x${requiredHeight}.`;
                                    validationMessage.style.display = 'block';
                                    fileInput.value = ''; // Reset input
                                    imagePreview.style.display = 'none'; // Hide preview if invalid
                                } else {
                                    validationMessage.style.display = 'none'; // Hide validation message
                                    // Display the image preview
                                    const reader = new FileReader();
                                    reader.onload = function(e) {
                                        previewImg.src = e.target.result;
                                        imagePreview.style.display = 'block'; // Show the preview container

                                        // Display the image dimensions
                                        imageSizeDisplay.textContent = `${width} x ${height}`;
                                    };
                                    reader.readAsDataURL(file); // Read file as Data URL for preview
                                }
                            };

                            img.src = URL.createObjectURL(file); // Set image source to trigger loading
                        }
                    }
                }

                // Remove image preview when the "remove" button is clicked
                removeButton.addEventListener('click', function() {
                    previewImg.src = ''; // Clear the image source
                    fileInput.value = ''; // Reset the input field
                    imagePreview.style.display = 'none'; // Hide the preview container
                    validationMessage.style.display = 'none'; // Hide any validation message
                });
            });
        </script>
    @endpush




</x-admin-app-layout>
