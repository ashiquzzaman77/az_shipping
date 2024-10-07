<x-app-layout :title="'My Profile'">
    @include('user.profile.partials.update-profile-information-form')
    @include('user.profile.partials.update-password-form')
    @include('user.profile.partials.delete-user-form')
</x-app-layout>
