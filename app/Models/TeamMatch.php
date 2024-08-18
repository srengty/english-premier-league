<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TeamMatch extends Model
{
    use HasFactory;
    protected $fillable = ['team_a_id', 'team_b_id', 'match_date'];
    public function team_a():BelongsTo
    {
        return $this->belongsTo(Team::class, 'team_a_id');
    }
    public function team_b():BelongsTo
    {
        return $this->belongsTo(Team::class, 'team_b_id');
    }
    protected function casts(): array
    {
        return [
            'match_date' => 'datetime:Y-m-d H:i',
        ];
    }
}
