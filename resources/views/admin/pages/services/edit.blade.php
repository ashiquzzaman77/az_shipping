<x-admin-app-layout :title="'Service Edit'">
    <div class="card card-flash">
        <div class="card-header mt-6">
            <div class="card-title"></div>
            <div class="card-toolbar">
                <a href="{{ route('admin.services.index') }}" class="btn btn-light-info rounded-2">
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
                    </span>
                    Back to the list
                </a>
            </div>
        </div>
        <div class="card-body pt-0">
            <form class="form" action="{{ route('admin.services.update', $service) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="form-floating border rounded mt-5">
                        <select class="form-select form-select-transparent" placeholder="..." id="kt_docs_select2_icon"
                            name="icon_id">
                            <option></option>
                            @foreach ($icons as $icon)
                                <option value="{{ $icon->id }}"
                                    data-kt-select2-icon="{{ asset('storage/' . $icon->image) }}"
                                    {{ $icon->id == $service->icon_id ? 'selected' : '' }}>
                                    {{ $icon->name }}</option>
                            @endforeach
                        </select>
                        <label for="kt_docs_select2_icon">Select a icon</label>
                        @error('icon_id')
                            <div class="alert alert-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-lg-4 mb-7">
                        <x-metronic.label for="title"
                            class="col-form-label fw-bold fs-6 required">{{ __('Title') }}
                        </x-metronic.label>

                        <x-metronic.input id="title" type="title" name="title" :value="$service->title"
                            placeholder="Enter the Title"></x-metronic.input>
                    </div>

                    <div class="col-lg-4 mb-7">
                        <x-metronic.label for="short_description"
                            class="col-form-label fw-bold fs-6 required">{{ __('Short Description') }}
                        </x-metronic.label>

                        <x-metronic.input id="short_description" type="short_description" name="short_description"
                            :value="$service->short_description" placeholder="Enter the Short Description"></x-metronic.input>
                    </div>

                    <div class="col-lg-4 mb-7">
                        <x-metronic.label for="status" class="col-form-label required fw-bold fs-6">
                            {{ __('Select a Status ') }}</x-metronic.label>
                        <x-metronic.select-option id="status" name="status" data-hide-search="true"
                            data-placeholder="Select an option">
                            <option></option>
                            <option value="1" {{ $service->status == 1 ? 'selected' : '' }}>Active</option>
                            <option value="0" {{ $service->status == 0 ? 'selected' : '' }}>Inactive</option>
                        </x-metronic.select-option>
                    </div>
                </div>
                <div class="text-center pt-15">
                    <x-metronic.button type="submit" class="primary">
                        {{ __('Update') }}
                    </x-metronic.button>
                </div>
            </form>
        </div>
    </div>

    @push('scripts')
        <script>
            var optionFormat = function(item) {
                if (!item.id) {
                    return item.text;
                }

                var span = document.createElement('span');
                var imgUrl = item.element.getAttribute('data-kt-select2-icon');
                var template = '';

                template += '<img src="' + imgUrl + '" class="rounded-circle h-20px me-2" alt="image"/>';
                template += item.text;

                span.innerHTML = template;

                return $(span);
            }

            $('#kt_docs_select2_icon').select2({
                templateSelection: optionFormat,
                templateResult: optionFormat
            });
        </script>
    @endpush
</x-admin-app-layout>
