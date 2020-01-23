<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    public $table='menus';
    //

    public function branches()
    {
        return $this->hasMany('App\Branch','menu_id');
    }

    public function pages()
    {
        return $this->hasMany('App\Pages','menu_id');
    }
}
