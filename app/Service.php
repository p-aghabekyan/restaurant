<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    public function languages()
    {
        return $this->belongsToMany('App\Languages', 'services_languages', 'service_id', 'language_id')->withPivot(['name']);
    }
}
