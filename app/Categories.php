<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    public function languages()
    {
        return $this->belongsToMany('App\Languages', 'category_language', 'category_id', 'language_id')->withPivot(['name', 'description']);
    }
}
