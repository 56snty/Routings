<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SongController extends Controller
{
    private $songs = [
        'Living on a prayer',
        'Nothing else matters',
        'Thunderstruck',
        'Back in black',
        'Ace of spades'
    ];

    public function index()
    {
        $songs = $this->songs;
        return view('songs.index', compact('songs'));
    }

    public function show($index)
    {
        if (!isset($this->songs[$index])) {
            abort(404);
        }
        $song = $this->songs[$index];
        return view('songs.show', compact('song'));
    }

    public function create()
    {
        return view('songs.create');
    }

    public function edit($index)
    {
        if (!isset($this->songs[$index])) {
            abort(404);
        }
        $song = $this->songs[$index];
        return view('songs.edit', compact('song'));
    }
}
