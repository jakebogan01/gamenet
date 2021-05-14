<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;
class IndexController extends Controller
{
    public function index()
    {

        $games = Game::all();

        return view('allgames',[
            'games'=>$games,
            'default'=>'Assassin\'s Creed Odyssey',
            'price'=>60
        ]);
    }
}
