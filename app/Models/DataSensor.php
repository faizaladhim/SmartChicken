<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataSensor extends Model
{
    use HasFactory;
    /** 
    *indicates if model should be timestamped.
    *
    * @var bool
    */
    public $timestamps = true;


/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['device_id','temperature', 'humidity', 'light_intensity', 'MQ7'];
}
