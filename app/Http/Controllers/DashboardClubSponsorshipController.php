<?php

namespace App\Http\Controllers;

use App\Models\ClubSponsorship;
use Illuminate\Http\Request;

class DashboardClubSponsorshipController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.sponsorship.index', [
            'title' => 'Sponsorship',
            'club_sponsorships' => ClubSponsorship::with('football_club', 'sponsorship_type')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('dashboard.sponsorship.show', [
            'title' => 'Sponsorship',
            'club_sponsorship' => ClubSponsorship::findOrFail($id),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ClubSponsorship $clubSponsorship)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ClubSponsorship $clubSponsorship)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        ClubSponsorship::destroy($id);
        return redirect('/dashboard/sponsorship')->with('deleteSuccess', 'Data has Been Deleted!');
    }
}
