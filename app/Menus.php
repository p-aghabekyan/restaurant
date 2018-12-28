<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menus extends Model
{
    protected $table = 'menus';

    public function categories(){
        return $this->belongsTo('App\Categories', 'category_id', 'id');
    }

    public function languages() {
        return $this->belongsToMany('App\Languages', 'menus_languages', 'menu_id', 'language_id')->withPivot(['name']);
    }
}
