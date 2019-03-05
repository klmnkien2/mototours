<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;


use Illuminate\Database\Eloquent\SoftDeletes;

class Motorcycle extends Model {

    use SoftDeletes;

    /**
    * The attributes that should be mutated to dates.
    *
    * @var array
    */
    protected $dates = ['deleted_at'];

    protected $table    = 'motorcycle';
    
    protected $fillable = [
          'name',
          'brand',
          'seat_height',
          'capacity',
          'weight',
          'performance',
          'photo'
    ];
    

    public static function boot()
    {
        parent::boot();

        Motorcycle::observe(new UserActionsObserver);
    }
    
    
    
    
}