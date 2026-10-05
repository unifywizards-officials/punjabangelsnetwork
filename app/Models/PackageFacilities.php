<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PackageFacilities extends Model
{
    use HasFactory;

    

    public function facilities_name()
    {
        return $this->hasOne(Facilities::class,'id','facilities_id');
    }
}