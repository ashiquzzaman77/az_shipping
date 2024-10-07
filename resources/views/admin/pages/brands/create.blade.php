<x-admin-app-layout :title="'Icon Add'">
    <div class="card card-flash">
        <!--begin::Card header-->
        <div class="card-header mt-6">
            <div class="card-title"></div>

            <!--begin::Card toolbar-->
            <div class="card-toolbar">
                <!--begin::Button-->
                <a href="{{ route('admin.brands.index') }}" class="btn btn-light-info rounded-2">
                    <!--begin::Svg Icon | path: brands/duotune/general/gen035.svg-->
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
                    <!--end::Svg Icon-->Back to the list
                </a>
            </div>
        </div>
        <div class="card-body pt-0">
            <!--begin::Form-->
            <form class="form" action="{{ route('admin.brands.store') }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                <!--begin::Input group-->
                <div class="row">
                    <div class="col-lg-4 mb-7">
                        <x-metronic.label for="name"
                            class="col-form-label fw-bold fs-6 required">{{ __('Name') }}
                        </x-metronic.label>

                        <x-metronic.input id="name" type="text" name="name" :value="old('name')"
                            placeholder="Enter the Name" required></x-metronic.input>
                    </div>

                    <div class="col-lg-4 mb-7">
                        <x-metronic.label for="url"
                            class="col-form-label fw-bold fs-6 required">{{ __('Url') }}
                        </x-metronic.label>

                        <x-metronic.input id="url" type="url" name="url" :value="old('url')"
                            placeholder="Enter the Url"></x-metronic.input>
                    </div>

                    <div class="col-lg-4 mb-7">
                        <x-metronic.label for="status" class="col-form-label required fw-bold fs-6">
                            {{ __('Select a Status ') }}</x-metronic.label>
                        <x-metronic.select-option id="status" name="status" data-hide-search="true"
                            data-placeholder="Select an option">
                            <option></option>
                            <option value="1">Active</option>
                            <option value="0">Inactive</option>
                        </x-metronic.select-option>
                    </div>

                    <div class="col-lg-4 mb-7">
                        <x-metronic.label for="logo" class="col-form-label fw-bold fs-6 ">{{ __('Logo') }}
                        </x-metronic.label>

                        <x-metronic.input id="logo" type="file" name="logo"></x-metronic.input>
                    </div>
                </div>
                <div class="text-center pt-15">
                    <x-metronic.button type="submit" class="primary">
                        {{ __('Submit') }}
                    </x-metronic.button>
                </div>
                <!--end::Actions-->
            </form>
            <!--end::Form-->
        </div>
    </div>
</x-admin-app-layout>
