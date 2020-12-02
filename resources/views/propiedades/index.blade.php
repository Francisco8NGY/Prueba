<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-teal-500 leading-tight">
            {{ __('Propiedades') }}
            <a href="{{route('propiedades.create')}}"  class="float-right inline-flex items-center px-4 py-2 bg-teal-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-teal-700 active:bg-teal-700 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">Agregar propiedad</a>
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