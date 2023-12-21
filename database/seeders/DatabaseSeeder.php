<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\FootballMatch;
use App\Models\FootballLeague;
use App\Models\User;

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
        ]);

        FootballLeague::create([
            'name' => 'Bundesliga',
        ]);

        FootballLeague::create([
            'name' => 'LaLiga',
        ]);

        FootballLeague::create([
            'name' => 'Serie A',
        ]);

        FootballLeague::create([
            'name' => 'Ligue 1',
        ]);
    }
}