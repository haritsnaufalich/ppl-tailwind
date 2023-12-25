<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FootballClub extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function league()
    {
        return $this->belongsTo(FootballLeague::class);
    }

    public function bundesligaTable()
    {
        return $this->hasOne(BundesligaTable::class);
    }

    public function eplTable()
    {
        return $this->hasOne(EPLTable::class);
    }

    public function laligaTable()
    {
        return $this->hasOne(LaLigaTable::class);
    }

    public function ligue1Table()
    {
        return $this->hasOne(Ligue1Table::class);
    }

    public function serieaTable()
    {
        return $this->hasOne(SerieATable::class);
    }
}
