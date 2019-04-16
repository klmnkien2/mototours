<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;




class MotorcycleBrand extends Model {

    

    

    protected $table    = 'motorcyclebrand';
    
    protected $fillable = [
          'code',
          'name'
    ];
    

    public static function boot()
    {
        parent::boot();

        MotorcycleBrand::observe(new UserActionsObserver);
    }
    
    
    
    
}