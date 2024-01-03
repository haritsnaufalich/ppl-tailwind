<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\FootballMatch;
use App\Models\FootballLeague;
use App\Models\FootballClub;
use App\Models\RequestType;
use App\Models\ClubRequest;
use App\Models\SponsorshipType;
use App\Models\ClubSponsorship;
use App\Models\User;
use App\Models\BundesligaTable;
use App\Models\EPLTable;
use App\Models\LaLigaTable;
use App\Models\Ligue1Table;
use App\Models\SerieATable;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $randomDate = fake()->dateTimeBetween('-1 year', 'now');
        $randomTime = fake()->time('H.i');
        $formattedDate = $randomDate->format('l') . ', ' . $randomDate->format('M') . ' ' . $randomDate->format('d');

        // EPL
        FootballMatch::create([
            'football_league_id' => '1',
            'first_team_img' => '/assets/epl/Manchester_United.svg',
            'first_team_name' => 'Manchester United',
            'second_team_img' => '/assets/epl/Manchester_City.svg',
            'second_team_name' => 'Manchester City',
            'match_date' => $formattedDate,
            'match_time' => $randomTime,
        ]);
        FootballMatch::create([
            'football_league_id' => '1',
            'first_team_img' => '/assets/epl/Arsenal.svg',
            'first_team_name' => 'Arsenal',
            'second_team_img' => '/assets/epl/Chelsea.svg',
            'second_team_name' => 'Chelsea',
            'match_date' => $formattedDate,
            'match_time' => $randomTime,
        ]);
        FootballMatch::create([
            'football_league_id' => '1',
            'first_team_img' => '/assets/epl/Liverpool.svg',
            'first_team_name' => 'Liverpool',
            'second_team_img' => '/assets/epl/Tottenham_Hotspur.svg',
            'second_team_name' => 'Tottenham Hotspur',
            'match_date' => $formattedDate,
            'match_time' => $randomTime,
        ]);

        // Bundesliga
        FootballMatch::create([
            'football_league_id' => '2',
            'first_team_img' => '/assets/bundesliga/Bayern_Munich.svg',
            'first_team_name' => 'Bayern Munich',
            'second_team_img' => '/assets/bundesliga/Borussia_Dortmund.svg',
            'second_team_name' => 'Borussia Dortmund',
            'match_date' => $formattedDate,
            'match_time' => $randomTime,
        ]);
        FootballMatch::create([
            'football_league_id' => '2',
            'first_team_img' => '/assets/bundesliga/Eintracht_Frankfurt.svg',
            'first_team_name' => 'Eintracht Frankfurt',
            'second_team_img' => '/assets/bundesliga/RB_Leipzig.svg',
            'second_team_name' => 'RB Leipzig',
            'match_date' => $formattedDate,
            'match_time' => $randomTime,
        ]);

        // La Liga
        FootballMatch::create([
            'football_league_id' => '3',
            'first_team_img' => '/assets/laliga/Atletico_Madrid.svg',
            'first_team_name' => 'Atletico Madrid',
            'second_team_img' => '/assets/laliga/Barcelona.svg',
            'second_team_name' => 'Barcelona',
            'match_date' => $formattedDate,
            'match_time' => $randomTime,
        ]);
        FootballMatch::create([
            'football_league_id' => '3',
            'first_team_img' => '/assets/laliga/Real_Betis.svg',
            'first_team_name' => 'Real Betis',
            'second_team_img' => '/assets/laliga/Real_Madrid.svg',
            'second_team_name' => 'Real Madrid',
            'match_date' => $formattedDate,
            'match_time' => $randomTime,
        ]);
        FootballMatch::create([
            'football_league_id' => '3',
            'first_team_img' => '/assets/laliga/Real_Sociedad.svg',
            'first_team_name' => 'Real Sociedad',
            'second_team_img' => '/assets/laliga/Valencia.svg',
            'second_team_name' => 'Valencia',
            'match_date' => $formattedDate,
            'match_time' => $randomTime,
        ]);

        // Serie A
        FootballMatch::create([
            'football_league_id' => '4',
            'first_team_img' => '/assets/seriea/AC_Milan.svg',
            'first_team_name' => 'AC Milan',
            'second_team_img' => '/assets/seriea/AS_Roma.svg',
            'second_team_name' => 'AS Roma',
            'match_date' => $formattedDate,
            'match_time' => $randomTime,
        ]);
        FootballMatch::create([
            'football_league_id' => '4',
            'first_team_img' => '/assets/seriea/Atalanta.svg',
            'first_team_name' => 'Atalanta',
            'second_team_img' => '/assets/seriea/Inter_Milan.svg',
            'second_team_name' => 'Inter Milan',
            'match_date' => $formattedDate,
            'match_time' => $randomTime,
        ]);
        FootballMatch::create([
            'football_league_id' => '4',
            'first_team_img' => '/assets/seriea/Juventus.svg',
            'first_team_name' => 'Juventus',
            'second_team_img' => '/assets/seriea/Napoli.svg',
            'second_team_name' => 'Napoli',
            'match_date' => $formattedDate,
            'match_time' => $randomTime,
        ]);

        // Ligue 1
        FootballMatch::create([
            'football_league_id' => '5',
            'first_team_img' => '/assets/ligue1/AS_Monaco.svg',
            'first_team_name' => 'AS Monaco',
            'second_team_img' => '/assets/ligue1/Lyon.svg',
            'second_team_name' => 'Lyon',
            'match_date' => $formattedDate,
            'match_time' => $randomTime,
        ]);
        FootballMatch::create([
            'football_league_id' => '5',
            'first_team_img' => '/assets/ligue1/PSG.svg',
            'first_team_name' => 'PSG',
            'second_team_img' => '/assets/ligue1/Stade_Rennais.svg',
            'second_team_name' => 'Stade Rennais',
            'match_date' => $formattedDate,
            'match_time' => $randomTime,
        ]);

        // Football Leagues
        FootballLeague::create([
            'name' => 'English Premier League',
            'slug' => 'EPL',
            'img' => '/assets/epl/epl.svg',
        ]);
        FootballLeague::create([
            'name' => 'Bundesliga',
            'slug' => 'Bundesliga',
            'img' => '/assets/bundesliga/bundesliga.svg',
        ]);
        FootballLeague::create([
            'name' => 'LaLiga',
            'slug' => 'LaLiga',
            'img' => '/assets/laliga/laliga.svg',
        ]);
        FootballLeague::create([
            'name' => 'Serie A',
            'slug' => 'SerieA',
            'img' => '/assets/seriea/seriea.svg',
        ]);
        FootballLeague::create([
            'name' => 'Ligue 1',
            'slug' => 'Ligue1',
            'img' => '/assets/ligue1/ligue1.svg',
        ]);

        // Football Club
        FootballClub::create([
            'name' => 'Bayern Munich',
            'football_league_id' => '2',
        ]);
        FootballClub::create([
            'name' => 'Borussia Dortmund',
            'football_league_id' => '2',
        ]);
        FootballClub::create([
            'name' => 'Eintracht Frankfurt',
            'football_league_id' => '2',
        ]);
        FootballClub::create([
            'name' => 'RB Leipzig',
            'football_league_id' => '2',
        ]);
        FootballClub::create([
            'name' => 'Arsenal',
            'football_league_id' => '1',
        ]);
        FootballClub::create([
            'name' => 'Chelsea',
            'football_league_id' => '1',
        ]);
        FootballClub::create([
            'name' => 'Liverpool',
            'football_league_id' => '1',
        ]);
        FootballClub::create([
            'name' => 'Manchester City',
            'football_league_id' => '1',
        ]);
        FootballClub::create([
            'name' => 'Manchester United',
            'football_league_id' => '1',
        ]);
        FootballClub::create([
            'name' => 'Tottenham Hotspur',
            'football_league_id' => '1',
        ]);
        FootballClub::create([
            'name' => 'Atletico Madrid',
            'football_league_id' => '3',
        ]);
        FootballClub::create([
            'name' => 'Barcelona',
            'football_league_id' => '3',
        ]);
        FootballClub::create([
            'name' => 'Real Betis',
            'football_league_id' => '3',
        ]);
        FootballClub::create([
            'name' => 'Real Madrid',
            'football_league_id' => '3',
        ]);
        FootballClub::create([
            'name' => 'Real Sociedad',
            'football_league_id' => '3',
        ]);
        FootballClub::create([
            'name' => 'Valencia',
            'football_league_id' => '3',
        ]);
        FootballClub::create([
            'name' => 'AS Monaco',
            'football_league_id' => '5',
        ]);
        FootballClub::create([
            'name' => 'Lyon',
            'football_league_id' => '5',
        ]);
        FootballClub::create([
            'name' => 'PSG',
            'football_league_id' => '5',
        ]);
        FootballClub::create([
            'name' => 'Stade Rennais',
            'football_league_id' => '5',
        ]);
        FootballClub::create([
            'name' => 'AC Milan',
            'football_league_id' => '4',
        ]);
        FootballClub::create([
            'name' => 'AS Roma',
            'football_league_id' => '4',
        ]);
        FootballClub::create([
            'name' => 'Atalanta',
            'football_league_id' => '4',
        ]);
        FootballClub::create([
            'name' => 'Inter Milan',
            'football_league_id' => '4',
        ]);
        FootballClub::create([
            'name' => 'Juventus',
            'football_league_id' => '4',
        ]);
        FootballClub::create([
            'name' => 'Napoli',
            'football_league_id' => '4',
        ]);

        // Request Type
        RequestType::create([
            'name' => 'Bathroom',
        ]);
        RequestType::create([
            'name' => 'Field',
        ]);
        RequestType::create([
            'name' => 'Gym',
        ]);
        RequestType::create([
            'name' => 'Treatment Room',
        ]);
        RequestType::create([
            'name' => 'Meeting Room',
        ]);

        // Club Request
        ClubRequest::create([
            'football_club_id' => '9',
            'request_type_id' => '1',
            'email' => 'haritsnaufal@email.com',
            'description' => 'Lorem Ipsum Lorem Ipsum...',
        ]);

        // Sponsorship Type
        SponsorshipType::create([
            'name' => 'Financial',
        ]);
        SponsorshipType::create([
            'name' => 'Official Partner',
        ]);
        SponsorshipType::create([
            'name' => 'Product Placement',
        ]);
        SponsorshipType::create([
            'name' => 'Media',
        ]);

        // Club Sponsorship
        ClubSponsorship::create([
            'football_club_id' => '9',
            'sponsorship_type_id' => '1',
            'email' => 'haritsnaufal@email.com',
            'description' => 'Lorem Ipsum Lorem Ipsum...',
        ]);

        // User Admin
        User::create([
            'name' => 'Harits Naufal',
            'username' => 'haritsnaufal',
            'email' => 'haritsnaufal@email.com',
            'password' => 'Password01',
            'isAdmin' => 1,
        ]);

        User::create([
            'name' => 'Adrian Rachman',
            'username' => 'adrianrachman',
            'email' => 'adrianrachman@email.com',
            'password' => 'Password01',
            'isAdmin' => 0,
        ]);

        // Bundesliga Table
        BundesligaTable::create([
            'football_club_id' => '1',
            'football_league_id' => '2',
            'played' => 18,
            'win' => 15,
            'draw' => 1,
            'lose' => 2,
            'point' => 46,
        ]);
        BundesligaTable::create([
            'football_club_id' => '2',
            'football_league_id' => '2',
            'played' => 18,
            'win' => 14,
            'draw' => 0,
            'lose' => 4,
            'point' => 42,
        ]);
        BundesligaTable::create([
            'football_club_id' => '3',
            'football_league_id' => '2',
            'played' => 18,
            'win' => 13,
            'draw' => 1,
            'lose' => 4,
            'point' => 40,
        ]);
        BundesligaTable::create([
            'football_club_id' => '4',
            'football_league_id' => '2',
            'played' => 18,
            'win' => 12,
            'draw' => 0,
            'lose' => 6,
            'point' => 36,
        ]);

        // EPL Table
        EPLTable::create([
            'football_club_id' => '5',
            'football_league_id' => '1',
            'played' => 18,
            'win' => 18,
            'draw' => 0,
            'lose' => 0,
            'point' => 54,
        ]);
        EPLTable::create([
            'football_club_id' => '6',
            'football_league_id' => '1',
            'played' => 18,
            'win' => 17,
            'draw' => 1,
            'lose' => 0,
            'point' => 52,
        ]);
        EPLTable::create([
            'football_club_id' => '7',
            'football_league_id' => '1',
            'played' => 18,
            'win' => 16,
            'draw' => 0,
            'lose' => 2,
            'point' => 48,
        ]);
        EPLTable::create([
            'football_club_id' => '8',
            'football_league_id' => '1',
            'played' => 18,
            'win' => 15,
            'draw' => 1,
            'lose' => 2,
            'point' => 46,
        ]);
        EPLTable::create([
            'football_club_id' => '9',
            'football_league_id' => '1',
            'played' => 18,
            'win' => 14,
            'draw' => 0,
            'lose' => 4,
            'point' => 42,
        ]);
        EPLTable::create([
            'football_club_id' => '10',
            'football_league_id' => '1',
            'played' => 18,
            'win' => 13,
            'draw' => 1,
            'lose' => 4,
            'point' => 40,
        ]);

        // LaLiga Table
        LaLigaTable::create([
            'football_club_id' => '11',
            'football_league_id' => '3',
            'played' => 18,
            'win' => 17,
            'draw' => 0,
            'lose' => 1,
            'point' => 51,
        ]);
        LaLigaTable::create([
            'football_club_id' => '12',
            'football_league_id' => '3',
            'played' => 18,
            'win' => 16,
            'draw' => 1,
            'lose' => 1,
            'point' => 49,
        ]);
        LaLigaTable::create([
            'football_club_id' => '13',
            'football_league_id' => '3',
            'played' => 18,
            'win' => 15,
            'draw' => 0,
            'lose' => 3,
            'point' => 45,
        ]);
        LaLigaTable::create([
            'football_club_id' => '14',
            'football_league_id' => '3',
            'played' => 18,
            'win' => 14,
            'draw' => 1,
            'lose' => 3,
            'point' => 43,
        ]);
        LaLigaTable::create([
            'football_club_id' => '15',
            'football_league_id' => '3',
            'played' => 18,
            'win' => 13,
            'draw' => 0,
            'lose' => 5,
            'point' => 39,
        ]);
        LaLigaTable::create([
            'football_club_id' => '16',
            'football_league_id' => '3',
            'played' => 18,
            'win' => 12,
            'draw' => 1,
            'lose' => 5,
            'point' => 37,
        ]);

        // Ligue1 Table
        Ligue1Table::create([
            'football_club_id' => '17',
            'football_league_id' => '5',
            'played' => 18,
            'win' => 18,
            'draw' => 0,
            'lose' => 0,
            'point' => 54,
        ]);
        Ligue1Table::create([
            'football_club_id' => '18',
            'football_league_id' => '5',
            'played' => 18,
            'win' => 17,
            'draw' => 1,
            'lose' => 0,
            'point' => 52,
        ]);
        Ligue1Table::create([
            'football_club_id' => '19',
            'football_league_id' => '5',
            'played' => 18,
            'win' => 16,
            'draw' => 0,
            'lose' => 2,
            'point' => 48,
        ]);
        Ligue1Table::create([
            'football_club_id' => '20',
            'football_league_id' => '5',
            'played' => 18,
            'win' => 15,
            'draw' => 1,
            'lose' => 2,
            'point' => 46,
        ]);

        // SerieA Table
        SerieATable::create([
            'football_club_id' => '21',
            'football_league_id' => '4',
            'played' => 18,
            'win' => 17,
            'draw' => 0,
            'lose' => 1,
            'point' => 51,
        ]);
        SerieATable::create([
            'football_club_id' => '22',
            'football_league_id' => '4',
            'played' => 18,
            'win' => 16,
            'draw' => 1,
            'lose' => 1,
            'point' => 49,
        ]);
        SerieATable::create([
            'football_club_id' => '23',
            'football_league_id' => '4',
            'played' => 18,
            'win' => 15,
            'draw' => 0,
            'lose' => 3,
            'point' => 45,
        ]);
        SerieATable::create([
            'football_club_id' => '24',
            'football_league_id' => '4',
            'played' => 18,
            'win' => 14,
            'draw' => 1,
            'lose' => 3,
            'point' => 43,
        ]);
        SerieATable::create([
            'football_club_id' => '25',
            'football_league_id' => '4',
            'played' => 18,
            'win' => 13,
            'draw' => 0,
            'lose' => 5,
            'point' => 39,
        ]);
        SerieATable::create([
            'football_club_id' => '26',
            'football_league_id' => '4',
            'played' => 18,
            'win' => 12,
            'draw' => 1,
            'lose' => 5,
            'point' => 37,
        ]);
    }
}
