<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DynamicColumns extends Model
{
    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $table = 'dynamic_column';
    // protected $fillable = ['part_status', 'tag_number', 'part_number', 'part_name', 'price', 'recommendation', 'work_performed', 'quantity', 'user_id', 'report_id', 'part_id' , 'condition_rec'];
}