<?php
/**
 * Created by PhpStorm.
 * User: VnA
 * Date: 11/21/2019
 * Time: 10:33 PM
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parts extends Model
{
protected $table="parts";
    public function getCreated()
    {
        return $this->belongsTo('App\User','created_by');
    }
    public function getUpdated()
    {
        return $this->belongsTo('App\User','updated_by');
    }
}