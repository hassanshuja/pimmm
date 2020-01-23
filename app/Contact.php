<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    public $table='contact';
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
