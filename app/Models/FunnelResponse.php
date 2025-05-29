<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FunnelResponse extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'funnel_step_id',
        'answered',
    ];

    public function step()
    {
        return $this->belongsTo(FunnelStep::class, 'funnel_step_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
