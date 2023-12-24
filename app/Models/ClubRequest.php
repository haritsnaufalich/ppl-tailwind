<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClubRequest extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function football_club()
    {
        return $this->belongsTo(FootballClub::class);
    }

    public function request_type()
    {
        return $this->belongsTo(RequestType::class);
    }
}
