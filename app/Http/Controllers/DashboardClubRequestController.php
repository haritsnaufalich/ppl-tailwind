<?php

namespace App\Http\Controllers;

use App\Models\ClubRequest;
use Illuminate\Http\Request;

class DashboardClubRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.request.index', [
            'title' => 'Request',
            'club_requests' => ClubRequest::with('football_club', 'request_type')->get(),
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
    // public function store(Request $request)
    // {

    // }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('dashboard.request.show', [
            'title' => 'Request',
            'club_request' => ClubRequest::findOrFail($id),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ClubRequest $clubRequest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ClubRequest $clubRequest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        ClubRequest::destroy($id);
        return redirect('/dashboard/request')->with('deleteSuccess', 'Data has Been Deleted!');
    }
}
