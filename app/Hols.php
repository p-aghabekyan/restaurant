<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hols extends Model
{
    public function restaurants(){
        return $this->belongsTo('App\Restaurants', 'restaurant_id', 'id');
    }

    public function languages(){
        return $this->belongsToMany('App\Languages', 'hols_languages', 'hols_id', 'language_id')->withPivot(['name', 'description']);
    }
}
