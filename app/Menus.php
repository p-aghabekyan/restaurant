<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menus extends Model
{
    protected $table = 'menus';
    public function categories(){
        return $this->belongsTo('App\Categories', 'category_id', 'id');
    }
}
