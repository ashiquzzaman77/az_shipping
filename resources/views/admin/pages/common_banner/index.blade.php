<x-admin-app-layout :title="'Common Banner'">
    <div class="card card-flash">
        <div class="card-header mt-6">
            <div class="card-title">
            </div>

            {{-- <div class="card-toolbar">
                <a href="{{ route('admin.common_banner.create') }}" class="btn btn-light-primary rounded-2">
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
            </div> --}}
        </div>
        <div class="card-body pt-0">
            <table class="bannersDT table align-middle table-row-dashed fs-6 gy-5 mb-0" id="kt_permissions_table">
                <thead>
                    <tr>
                        <th>Sl No :</th>
                        <th>ALl Banner Image</th>
                        <th class="text-right">Action</th>
                    </tr>
                </thead>
                @php
                    $words = ['Image', 'Image', 'Image', 'Image', 'Image', 'Image'];
                @endphp
                <tbody class="fw-bold text-gray-600">
                    @if (count($items) > 0)
                        @foreach ($items as $key => $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ isset($words[$key]) ? 'Banner' . ' ' . Str::ucfirst($words[$key]) : 'Number out of range' }}
                                </td>
                                <td class="">

                                    @if (Auth::guard('admin')->user()->can('edit.common-banner'))
                                        <a href="{{ route('admin.common_banner.edit', $item->id) }}"
                                            class="text-primary">
                                            <i class="bi bi-pencil text-primary"></i>
                                        </a>
                                    @endif

                                    @if (Auth::guard('admin')->user()->can('delete.common-banner'))
                                        <a href="{{ route('admin.common_banner.destroy', $item->id) }}"
                                            class="text-danger delete mx-2">
                                            <i class="bi bi-trash3-fill text-danger"></i>
                                        </a>
                                    @endif
                                    
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td class="text-center" colspan="3">No Data Found</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>

    @push('scripts')
        <script></script>
    @endpush
</x-admin-app-layout>
