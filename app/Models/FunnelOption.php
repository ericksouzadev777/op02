<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FunnelOption extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'funnel_step_id', 'name', 'amount', 'order', 'active',
    ];

    public function step()
    {
        return $this->belongsTo(FunnelStep::class, 'funnel_step_id');
    }

    public function responses()
    {
        return $this->hasMany(FunnelOptionResponse::class);
    }
}
