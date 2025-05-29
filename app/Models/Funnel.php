<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Funnel extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'initial_amount',
        'order',
        'active',
    ];

    public function steps()
    {
        return $this->hasMany(FunnelStep::class)
        ->orderBy('order');
    }
}
