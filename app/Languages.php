<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Languages extends Model
{

    public function restaurants()
    {
        return $this->belongsToMany(Restaurants::class, 'rest_language', 'language_id', 'restaurant_id');

    }

    public function hols()
    {
        return $this->belongsToMany('App\Hols', 'hols_languages', 'language_id', 'hols_id');
    }

    public function menus()
    {
        return $this->belongsToMany('App\Menus', 'menus_languages', 'language_id', 'menu_id');
    }
}
