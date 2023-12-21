<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FootballMatch extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function football_league()
    {
      return $this->belongsTo(FootballLeague::class);
    }
}
