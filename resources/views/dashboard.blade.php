<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                @if (Route::has('login'))
						@auth
							@if (Auth::user()->role === 1)
								<h1>Soy Admin</h1>
							@else
								<h1>Soy user</h1>
							@endif										
						@endif
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
