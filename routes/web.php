<?php

use App\Models\FootballMatch;
use App\Models\FootballLeague;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FootballMatchController;


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
        'matches' => FootballMatch::all()->take(4),
    ]);
});

// Request
Route::get('/request', function () {
    return view('request', [
        'title' => 'Request',
    ]);
});

// Sponsorship
Route::get('/sponsorship', function () {
    return view('sponsorship', [
        'title' => 'Sponsorship',
    ]);
});

// Matches & Detail Match
Route::get('/matches', [FootballMatchController::class, 'view']);
Route::get('/matches/{match}', [FootballMatchController::class, 'show']);

// League Tables
Route::get('/tables', function () {
    return view('tables', [
        'title' => 'League Tables',
    ]);
});

// Regis
Route::get('/auth/register', [RegisterController::class, 'view']);
Route::post('/auth/register', [RegisterController::class, 'store']);

// Login & Logout
Route::get('/auth/login', [LoginController::class, 'view'])->name('login');
Route::post('/auth/login', [LoginController::class, 'authenticate']);
Route::post('logout', [LoginController::class, 'logout']);

// Dashboard
Route::get('/dashboard', [DashboardController::class, 'view'])->middleware('auth');

// List Football League
Route::get('/football-leagues', function () {
  return view('football-leagues', [
    'title' => 'Football Leagues',
    'football_leagues' => FootballLeague::all()
  ]);
});

// List Match by League
Route::get('/football-leagues/{football_league}', function(FootballLeague $football_league) {
  return view('football-league', [
    'title' => $football_league->name,
    'matches' => $football_league->matches,
    'football_league' => $football_league->name
  ]);
});