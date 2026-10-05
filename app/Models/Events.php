<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    use HasFactory;

    public function event_category()
    {
        return $this->hasMany(EventCategory::class,'event_id');
    }

}
