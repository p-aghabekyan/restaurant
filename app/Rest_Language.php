<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rest_Language extends Model
{
    protected $table = 'rest_language';

    public function languages()
    {
        return $this->belongsToMany(Languages::class, 'rest_language', 'restaurant_id', 'language_id');
    }

    public function restaurants()
    {
        return $this->belongsToMany(Restaurants::class, 'rest_language', 'language_id', 'restaurant_id');

    }
}
