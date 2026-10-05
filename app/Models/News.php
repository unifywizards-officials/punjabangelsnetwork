<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    public function news_category()
    {
        return $this->hasMany(NewsCategory::class,'news_id');
    }
}
