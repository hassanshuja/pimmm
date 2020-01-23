<?php
/**
 * Created by PhpStorm.
 * User: VnA
 * Date: 11/18/2019
 * Time: 4:56 PM
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class EntryType extends Model
{
    protected $table='entry_type';
    public function create()
    {
        return $this->belongsTo('App\User' , 'created_by');
    }
    public function entry()
    {
        return $this->belongsTo('App\User' , 'updated_by');
    }
}