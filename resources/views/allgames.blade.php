@extends('layouts.layout')
@section('content')
    <div class="flex h-4/6 justify-center items-center">
        <div>
            <h1 class="font-bold text-3xl">Current Games</h1>
            <br>
            <ul class="px-10 list-disc">
                @foreach($games as $game)
                    <li><strong>{{ $game->title }}</strong> - ${{ $game->price }}</li>
                @endforeach
                <li><strong>{{ $default }}</strong> - ${{ $price }}</li>
            </ul>
            @if(!$games)
                <p class="text-red-500">Only 1 Game Avaiable!</p>
            @endif
            <br>
            <a href="/" class="text-blue-300">Go Back</a>
        </div>
    </div>
@endsection