<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FootballClub;
use App\Models\SponsorshipType;
use App\Models\ClubSponsorship;

class ClubSponsorshipController extends Controller
{
    public function index()
    {
        return view('sponsorship', [
            'title' => 'Sponsorship',
            'football_clubs' => FootballClub::all(),
            'sponsorship_types' => SponsorshipType::all(),
        ]);
    }

    public function storeReq(Request $request)
    {
        $validatedData = $request->validate([
            'football_club_id' => 'required',
            'email' => 'required|email:dns',
            'sponsorship_type_id' => 'required',
            'description' => 'required',
        ]);

        ClubSponsorship::create($validatedData);

        return redirect('/')->with('requestSuccess', 'Sponsorship has Been Requested!');
    }
}
