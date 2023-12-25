<?php

use App\Models\FootballMatch;
use App\Models\FootballLeague;
use App\Models\RequestType;
use App\Models\FootballClub;
use App\Models\EPLTable;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FootballMatchController;
use App\Http\Controllers\ClubRequestController;
use App\Http\Controllers\DashboardClubRequestController;
use App\Http\Controllers\ClubSponsorshipController;
use App\Http\Controllers\DashboardClubSponsorshipController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Home
Route::get('/', function () {
    return view('home', [
        'title' => 'Home',
        'matches' => FootballMatch::all()->random(4),
        'tables' => EPLTable::all()
    ]);
});

// Request
Route::get('/request', [ClubRequestController::class, 'index'])->middleware('auth');
Route::post('/request', [ClubRequestController::class, 'storeReq']);

// Sponsorship
Route::get('/sponsorship', [ClubSponsorshipController::class, 'index'])->middleware('auth');
Route::post('/sponsorship', [ClubSponsorshipController::class, 'storeReq']);

// Matches & Detail Match
Route::get('/matches', [FootballMatchController::class, 'view']);
Route::get('/matches/{match}', [FootballMatchController::class, 'show']);

// Login & Logout
Route::get('/auth/login', [LoginController::class, 'view'])
    ->name('login')
    ->middleware('guest');
Route::post('/auth/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

// Regis
Route::get('/auth/register', [RegisterController::class, 'view'])->middleware('guest');
Route::post('/auth/register', [RegisterController::class, 'storeAcc']);

// Dashboard
Route::get('/dashboard', [DashboardController::class, 'view'])->middleware('isAdmin');
Route::resource('/dashboard/request', DashboardClubRequestController::class)->middleware('isAdmin');
Route::resource('/dashboard/sponsorship', DashboardClubSponsorshipController::class)->middleware('isAdmin');

// List Football League
Route::get('/football-leagues', function () {
    return view('football-leagues', [
        'title' => 'Football Leagues',
        'football_leagues' => FootballLeague::all(),
    ]);
});

// List Match by League
Route::get('/football-leagues/{football_league}', function (FootballLeague $football_league) {
    return view('football-league', [
        'title' => $football_league->name,
        'matches' => $football_league->matches,
        'football_league' => $football_league->name,
    ]);
});

// League Tables (All)
Route::get('/tables', function () {
    return view('tables', [
        'title' => 'League Tables',
        'football_leagues' => FootballLeague::all(),
    ]);
});
Route::get('/tables/{football_league}', function (FootballLeague $football_league) {
  $leagueTableClass = 'App\Models\\' . ucfirst($football_league->slug) . 'Table';
  $tables = $leagueTableClass::where('football_league_id', $football_league->id)->with('footballClub')->get();
  return view('table', [
      'title' => 'League Tables',
      'football_league_name' => $football_league->name,
      'tables' => $tables,
  ]);
});
