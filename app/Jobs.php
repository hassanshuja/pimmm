<?php
/**
 * Created by PhpStorm.
 * User: VnA
 * Date: 11/26/2019
 * Time: 2:02 PM
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jobs extends Model
{
    protected $table="jobs";

    public function entry(){
        return $this->belongsTo('App\EntryType' , 'entry_type_id');
    }
    public function equipment(){
        return $this->belongsTo('App\EquipmentDetials' , 'equipment_id');
    }
}

