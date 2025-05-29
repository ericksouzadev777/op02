<?php

namespace App\Models;

use App\Models\Funnel;use App\Models\FunnelOption;use App\Models\FunnelOptionResponse;use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FunnelStep extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'funnel_id', 'name', 'icon', 'amount', 'order', 'active',
    ];

    public function funnel()
    {
        return $this->belongsTo(Funnel::class);
    }

    public function options()
    {
        return $this->hasMany(FunnelOption::class)
            ->orderBy('order');
    }

    public function optionResponses()
    {
        return $this->hasMany(FunnelOptionResponse::class);
    }
}
