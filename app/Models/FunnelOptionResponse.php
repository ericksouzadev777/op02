<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FunnelOptionResponse extends Model
{

    protected $fillable = [
        'user_id', 'funnel_step_id', 'funnel_option_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function step()
    {
        return $this->belongsTo(FunnelStep::class, 'funnel_step_id');
    }

    public function option()
    {
        return $this->belongsTo(FunnelOption::class, 'funnel_option_id');
    }
}
