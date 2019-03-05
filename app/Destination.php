<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;


use Illuminate\Database\Eloquent\SoftDeletes;

class Destination extends Model {

    use SoftDeletes;

    /**
    * The attributes that should be mutated to dates.
    *
    * @var array
    */
    protected $dates = ['deleted_at'];

    protected $table    = 'destination';
    
    protected $fillable = [
          'name',
          'url',
          'description'
    ];
    

    public static function boot()
    {
        parent::boot();

        Destination::observe(new UserActionsObserver);
    }
    
    
    
    
}