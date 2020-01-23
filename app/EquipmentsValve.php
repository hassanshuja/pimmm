<?php
/**
 * Created by PhpStorm.
 * User: VnA
 * Date: 12/11/2019
 * Time: 10:30 AM
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class EquipmentsValve extends Model
{
protected $table="equipments_valve";
    public function valv(){
        return $this->belongsTo('App\EquipmentDetials' , 'equipment_id');
    }
}