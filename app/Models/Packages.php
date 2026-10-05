<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Packages extends Model
{
    use HasFactory;

    public function destination()
    {
        return $this->hasOne(Destination::class,'id','destination_id');
    }

    public function package_facilities()
    {
        return $this->hasMany(PackageFacilities::class,'packages_id','id');
    }

    public function user()
    {
        return $this->hasOne(User::class,'id','user_id');
    }
}