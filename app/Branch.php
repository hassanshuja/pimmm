<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    public $table='branch';
    //

    public function menu()
    {
        return $this->belongsTo('App\Menu','menu_id');
    }

    public function pages()
    {
        return $this->hasMany('App\Pages','branch_id');
    }
}
