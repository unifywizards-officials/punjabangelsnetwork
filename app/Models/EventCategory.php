<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventCategory extends Model
{
    use HasFactory;

    public function category_name()
    {
        return $this->hasOne(Category::class,'id','event_categories_id');
    }
}
