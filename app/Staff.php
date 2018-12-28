<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    protected $table = 'staffs';

    public function languages()
    {
        return $this->belongsToMany('App\Languages', 'staffs_languages', 'staff_id', 'language_id')->withPivot(['firstname', 'lastname']);
    }

    public function staff_types()
    {
        return $this->hasMany('staff_types', 'staff_type_id', 'id');
    }
}
