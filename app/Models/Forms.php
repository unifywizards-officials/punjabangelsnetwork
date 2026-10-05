<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Forms extends Model
{
    use HasFactory;

    protected $casts = [
        'form' => 'array'
    ];

    public function form_name()
    {
        return $this->hasOne(FormBuider::class, 'id', 'form_id');
    }
}
