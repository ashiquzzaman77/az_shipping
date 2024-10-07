<x-admin-app-layout>
    <x-slot name="header">
        <div class="grid grid-cols-2">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Assign Permission to the Role') }}
            </h2>
            <a href="{{ route('admin.role.index') }}"
                class="px-4 py-2 text-sm text-white bg-green-600 rounded hover:bg-blue-600 text-center">
                Back</a>
        </div>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <form method="POST" action="{{ route('admin.role.store-permission', $role->id) }}">
                @csrf
                @method('patch')
                <!-- Name -->
                <div class="mb-5">
                    <label for="">
                        <span
                            class="block mb-2 text-sm font-medium text-green-700 dark:text-green-500">Permissions</span>
                    </label>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        @foreach ($permissions as $permission)
                            <div class="flex items-center">
                                <input type="checkbox" name="permissions[]" value="{{ $permission->name }}"
                                    {{ $role->permissions->contains($permission) ? 'checked' : '' }}
                                    class="rounded text-blue-600 shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 dark:bg-gray-700 dark:border-gray-500 dark:focus:border-green-500 dark:focus:ring-green-800 dark:focus:ring-opacity-50">
                                <span class="ml-2 text-sm">{{ $permission->name }}
                                </span>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="flex items-center justify-end mt-4">
                    <x-primary-button class="ml-4">
                        {{ __('Submit') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
</x-admin-app-layout>
