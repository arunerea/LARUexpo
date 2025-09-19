@extends('layouts.app')
@section('content')
    <main>
        <div class="flex justify-center mt-12">
            <form class="w-full max-w-xl flex items-center bg-white rounded-full shadow-md px-4 py-2">
                <label for="search" class="sr-only">Buscar</label>
                <input type="text" id="search" name="search" placeholder="Buscar..." class="flex-grow px-4 py-3 rounded-l-full border border-gray-300 focus:outline-none focus:ring-2 focus:ring-pink-500 focus:border-transparent"/>
                <button type="submit" class="bg-pink-400 text-white rounded-r-full px-6 py-3 hover:bg-pink-700 transition font-semibold">
                Buscar
                </button>
            </form>
        </div>
    </main>
@endsection
