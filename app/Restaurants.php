<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurants extends Model
{

    public function contacts(){
        $this->hasMany('App\Rest_Language', 'restaurant_id', 'id');
    }


    public function languages()
    {
        return $this->belongsToMany(Languages::class, 'rest_language', 'restaurant_id', 'language_id')->withPivot(['name', 'address', 'description']);
    }

    public function restaurants()
    {
        return $this->belongsToMany(Restaurants::class, 'rest_language', 'language_id', 'restaurant_id');

    }
}
