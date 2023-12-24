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
}
