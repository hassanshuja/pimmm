<?php
/**
 * Created by PhpStorm.
 * User: VnA
 * Date: 11/17/2019
 * Time: 10:55 PM
 */

namespace App;
use Illuminate\Database\Eloquent\Model;


class Office extends Model
{
    protected $table='office';
    public function user()
    {
        return $this->belongsTo(\App\User::class , 'supervisor_id');
    }
}
