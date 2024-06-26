<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    {{ __("You're logged in!") }}

                    @hasrole('admin')
                    {{Auth::user()->getRoleNames()}}
                    {{Auth::user()->full_name}}

                    @else
                        User
                        {{Auth::user()->full_name}}

                    @endrole

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
