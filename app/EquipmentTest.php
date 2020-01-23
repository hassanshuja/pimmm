<?php
/**
 * Created by PhpStorm.
 * User: VnA
 * Date: 12/11/2019
 * Time: 11:05 AM
 */

namespace App;
use Illuminate\Database\Eloquent\Model;


class EquipmentTest extends Model
{
protected $table="equipment_test";
    public function testData(){
        return $this->belongsTo('App\EquipmentDetials' , 'equipment_id');
    }
}