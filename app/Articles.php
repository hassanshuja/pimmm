<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Articles extends Model
{
    //

    public $table='articles';
    public function galleries()
    {
        return $this->hasMany('App\Galleries','article_id');
    }

}
