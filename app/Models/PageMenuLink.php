<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PageMenuLink extends Model
{
    use HasFactory;

    public function menu()
    {
        return $this->hasOne(PageMenu::class,'id','menu_id');
    }

    public function page()
    {
        return $this->hasOne(Page::class,'id','page_id');
    }
}
