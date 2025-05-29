<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StatusAlert extends Model
{

    protected $fillable = [
        'active',
    ];

    protected $casts = [
        'active' => 'boolean',
    ];
}
