<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    use HasFactory;

    public function packages()
    {
        return $this->hasMany(Packages::class,'destination_id')->where('is_active','1');
    }

    public function user()
    {
        return $this->hasOne(User::class,'id','user_id');
    }
    
}