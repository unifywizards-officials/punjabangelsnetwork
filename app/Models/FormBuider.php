<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormBuider extends Model
{
    use HasFactory;

    protected $casts = [
        'content' => 'array'
    ];
}
