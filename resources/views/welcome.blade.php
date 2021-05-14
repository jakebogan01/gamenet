@extends('layouts.layout')
@section('content')

    <div class="flex h-4/6 justify-center items-center">
        <button class="mr-1 rounded-3xl max-w-xs w-full bg-blue-300 transition-all border-soli border-4 border-blue-300 hover:border-blue-100">
            <a class="block text-white py-24 text-2xl font-bold" href="/allgames">Browse Games</a>
        </button>
        <button class="ml-1 rounded-3xl max-w-xs w-full bg-blue-300 transition-all border-solid border-4 border-blue-300 hover:border-blue-100">
            <a class="block text-white py-24 text-2xl font-bold" href="#">Add Games</a>
        </button>
    </div>

@endsection