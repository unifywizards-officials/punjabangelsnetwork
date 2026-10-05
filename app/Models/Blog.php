<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    public function blog_category()
    {
        return $this->hasMany(BlogCategory::class,'blogs_id');
    }
    
    public function user()
    {
        return $this->hasOne(User::class,'id','user_id');
    }
}
