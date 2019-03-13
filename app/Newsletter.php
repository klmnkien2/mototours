<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;


use Illuminate\Database\Eloquent\SoftDeletes;

class Newsletter extends Model {

    use SoftDeletes;

    /**
    * The attributes that should be mutated to dates.
    *
    * @var array
    */
    protected $dates = ['deleted_at'];

    protected $table    = 'newsletter';
    
    protected $fillable = [
          'name',
          'email'
    ];
    

    public static function boot()
    {
        parent::boot();

        Newsletter::observe(new UserActionsObserver);
    }
    
    
    
    
}