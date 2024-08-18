<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Team extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'club_crest', 'home_stadium', 'city_name', 
    'head_coach', 'team_lineup'];
    public function players():HasMany
    {
        return $this->hasMany(Player::class);
    }
}
