<?php
/**
 * Created by PhpStorm.
 * User: VnA
 * Date: 11/20/2019
 * Time: 4:29 PM
 */

namespace App;
use Illuminate\Database\Eloquent\Model;


class Equipment extends Model
{
    protected $table='equipments';
    public function owner(){
        return $this->belongsTo('App\Owner' , 'owner_id');
    }
    public function plant(){
        return $this->belongsTo('App\Plants' , 'plant_id');
    }
    public function equipment(){
        return $this->belongsTo('App\EquipmentType' , 'equipment_id');
    }
    public function getCreated()
    {
        return $this->belongsTo('App\User','created_by');
    }
    public function getUpdated()
    {
        return $this->belongsTo('App\User','updated_by');
    }
}