<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    public $table='clients';
    //

    public function articles()
    {
        return $this->hasMany('App\Articles','page_id');
    }
    public function menu()
    {
        return $this->belongsTo('App\Menu','menu_id');
    }
    public function branch()
    {
        return $this->belongsTo('App\Branch','branch_id');
    }
}
