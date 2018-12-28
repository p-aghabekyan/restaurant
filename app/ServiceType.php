<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceType extends Model
{
    public function languages()
    {
        return $this->belongsToMany('App\Languages', 'service_type_language', 'service_type_id', 'language_id')->withPivot('name');
    }
}
