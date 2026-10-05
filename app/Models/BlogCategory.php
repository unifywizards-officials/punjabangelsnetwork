<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
{
    use HasFactory;

    public function category_name()
    {
        return $this->hasOne(Category::class,'id','blog_categories_id');
    }
}
