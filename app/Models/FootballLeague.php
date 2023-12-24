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
}
