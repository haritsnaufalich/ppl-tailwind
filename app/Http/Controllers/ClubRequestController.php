<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FootballClub;
use App\Models\RequestType;
use App\Models\ClubRequest;

class ClubRequestController extends Controller
{
    public function index()
    {
        return view('request', [
            'title' => 'Request',
            'football_clubs' => FootballClub::all(),
            'request_types' => RequestType::all(),
        ]);
    }

    public function storeReq(Request $request)
    {
        $validatedData = $request->validate([
            'football_club_id' => 'required',
            'email' => 'required|email:dns',
            'request_type_id' => 'required',
            'description' => 'required',
        ]);

        ClubRequest::create($validatedData);

        return redirect('/')->with('requestSuccess', 'Request has Been Created!');
    }
}
