<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClubSponsorship extends Model
{
    protected $guarded = ['id'];

    public function football_club()
    {
        return $this->belongsTo(FootballClub::class);
    }

    public function sponsorship_type()
    {
        return $this->belongsTo(SponsorshipType::class);
    }
}
