<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ButtonLink extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'name',
        'link',
        'active',
    ];

    protected $casts = [
        'active' => 'boolean',
    ];
}
