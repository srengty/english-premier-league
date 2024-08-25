<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddPlayerRequest;
use App\Models\Player;
use App\Models\Team;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    public function index()
    {
        $players = Player::all();
        return view('players.index', compact('players'));
    }
    public function store(AddPlayerRequest $request)
    {
        /* $data = $request->validate([
            'team_id' => 'required',
            'name' => 'required|unique:players,name',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]); */
        $player = new Player();
        $player->team_id = $request->team_id;
        $player->name = $request->name;
        $player->photo = $request->photo->store('photos');
        $player->save();
        session()->flash('success', 'Player added successfully');
        return redirect(route('players'));

    }
    public function add(){
        \App::setLocale('kh');
        return view('players.add')->with('more','More data')
        ->with('teams',Team::all());
    }
}
