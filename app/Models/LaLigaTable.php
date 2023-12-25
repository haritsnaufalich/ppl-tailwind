<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LaLigaTable extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function footballClub()
    {
        return $this->belongsTo(FootballClub::class);
    }

    public function footballLeague()
    {
        return $this->belongsTo(FootballLeague::class);
    }
}
