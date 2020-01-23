<?php
/**
 * Created by PhpStorm.
 * User: VnA
 * Date: 11/26/2019
 * Time: 2:05 PM
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jobs_info extends Model
{
    protected $table="job_info";
    public function owner(){
        return $this->belongsTo('App\Owner' , 'owner_id');
    }

    public function equipment(){
        return $this->belongsTo('App\Equipment' , 'equipment_id');
    }

    public function part(){
        return $this->belongsTo('App\Parts' , 'equipment_part_job');
    }
}