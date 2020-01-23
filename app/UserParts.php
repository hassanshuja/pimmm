<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserParts extends Model
{
    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $table = 'user_parts';
    protected $fillable = ['part_status', 'tag_number', 'part_number', 'part_name', 'price', 
                            'recommendation', 'work_performed', 'quantity', 'user_id', 'report_id',
                            'part_id' , 'condition_rec', 'condition_rec_2', 'delivery_date', 'parts_code', 'equipment_type', 'recommended_spare'];
}