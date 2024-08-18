<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Goal extends Model
{
    use HasFactory;
    protected $fillable = ['player_id', 'team_id', 'match_id','minute'];
    public function player():BelongsTo
    {
        return $this->belongsTo(Player::class);
    }
    public function team():BelongsTo
    {
        return $this->belongsTo(Team::class);
    }
    public function match():BelongsTo
    {
        return $this->belongsTo(TeamMatch::class);
    }
}
