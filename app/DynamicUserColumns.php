<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DynamicUserColumns extends Model
{
    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $table = 'dynamic_user_columns';
    protected $fillable = ['dynamic_column_id', 'status', 'user_id', 'plant_Id'];
}