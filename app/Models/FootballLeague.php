<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FootballLeague extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function matches()
    {
        return $this->hasMany(FootballMatch::class);
    }

    public function clubs()
    {
        return $this->hasMany(FootballClub::class);
    }

    public function bundesligaTable()
    {
        return $this->hasMany(BundesligaTable::class);
    }

    public function eplTable()
    {
        return $this->hasMany(EPLTable::class);
    }

    public function laligaTable()
    {
        return $this->hasMany(LaLigaTable::class);
    }

    public function ligue1Table()
    {
        return $this->hasMany(Ligue1Table::class);
    }

    public function serieaTable()
    {
        return $this->hasMany(SerieATable::class);
    }
}
