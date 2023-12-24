<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FootballMatch;

class FootballMatchController extends Controller
{
    public function view()
    {
        return view('matches', [
            'title' => 'Matches',
            'matches' => FootballMatch::all(),
        ]);
    }

    public function show(FootballMatch $match)
    {
        return view('match', [
            'title' => 'Matches',
            'match' => $match
        ]);
    }
}
