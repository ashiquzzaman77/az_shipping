<x-admin-app-layout :title="'HomePage List'">
    <div class="card card-flash">
        <div class="card-header mt-6">
            <div class="card-title">
            </div>

            {{-- <div class="card-toolbar">
                <a href="{{ route('admin.homepage.create') }}" class="btn btn-light-primary rounded-2">
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
                        <th>Template Number</th>
                        <th class="text-right">Action</th>
                    </tr>
                </thead>
                @php
                    $words = ['one', 'two', 'three', 'four', 'five', 'six', 'seven', 'eight', 'nine'];
                @endphp
                <tbody class="fw-bold text-gray-600">
                    @if (count($homes) > 0)
                        @foreach ($homes as $key => $home)
                            <tr>
                                <td>{{ $home->id }}</td>
                                <td>{{ isset($words[$key]) ? 'Template' . ' ' . Str::ucfirst($words[$key]) : 'Number out of range' }}
                                </td>
                                <td class="">
                                    {{-- <a href="{{ route('homepage.show', $home->id) }}" class="text-info">
                                        <i class="icon-eye"></i>
                                    </a> --}}

                                    @if (Auth::guard('admin')->user()->can('edit.homepage'))
                                        <a href="{{ route('admin.homepage.edit', $home->id) }}" class="text-primary">
                                            <i class="bi bi-pencil text-primary"></i>
                                        </a>
                                    @endif

                                    @if (Auth::guard('admin')->user()->can('delete.homepage'))
                                        <a href="{{ route('admin.homepage.destroy', $home->id) }}"
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
