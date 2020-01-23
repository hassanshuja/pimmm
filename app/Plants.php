<?php
/**
 * Created by PhpStorm.
 * User: VnA
 * Date: 11/19/2019
 * Time: 4:49 PM
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plants extends Model
{
protected $table="plants";
    public function getCreated()
    {
        return $this->belongsTo('App\User','created_by');
    }
    public function getUpdated()
    {
        return $this->belongsTo('App\User','updated_by');
    }
}