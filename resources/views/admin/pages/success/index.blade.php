<x-admin-app-layout :title="'Success List'">
    <div class="card card-flash">
        <div class="card-header mt-6">
            <div class="card-title">
            </div>

            <div class="card-toolbar">
                <a href="{{ route('admin.success.create') }}" class="btn btn-light-primary rounded-2">
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
            </div>
        </div>
        <div class="card-body pt-0">
            <table class="bannersDT table align-middle table-row-dashed fs-6 gy-5 mb-0" id="kt_permissions_table">
                <thead>
                    <tr>
                        <th width="10%">Id</th>
                        <th width="15%">Image</th>
                        <th width="25%">Success Title</th>
                        <th width="35%">Success Description</th>
                        <th width="15%" class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody class="fw-bold text-gray-600">

                    @if ($successes)
                        @foreach ($successes as $key => $succes)
                            <tr>
                                <td>{{ ++$key }}</td>
                                <td>
                                    <img class="rounded-circle" src="{{ asset('storage/' . $succes->image) }}"
                                        height="25px" width="25px" alt="">
                                </td>
                                <td>{{ $succes->title }}</td>
                                <td>{{ Str::words($succes->description, 20) }}</td>
                                <td>
                                    <a href="{{ route('admin.success.edit', [$succes->id]) }}" class="text-primary">
                                        <i class="fa-solid fa-pen-to-square me-2 p-1 rounded-circle text-primary"></i>
                                    </a>
                                    <a href="{{ route('admin.success.destroy', [$succes->id]) }}" class="text-danger delete">
                                        <i class="fa-solid fa-trash p-1 rounded-circle text-danger"></i>
                                    </a>

                                </td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>

    @push('scripts')
        <script></script>
    @endpush
</x-admin-app-layout>
