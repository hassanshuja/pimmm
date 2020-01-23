<?php
/**
 * Created by PhpStorm.
 * User: VnA
 * Date: 11/18/2019
 * Time: 10:12 PM
 */

namespace App;
use Illuminate\Database\Eloquent\Model;


class EquipmentType extends Model
{
    protected $table='equipment_types';
    public function getCreated()
    {
        return $this->belongsTo('App\User','created_by');
    }
    public function getUpdated()
    {
        return $this->belongsTo('App\User','updated_by');
    }
}