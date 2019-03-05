<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;


use Illuminate\Database\Eloquent\SoftDeletes;

class Pages extends Model {

    use SoftDeletes;

    /**
    * The attributes that should be mutated to dates.
    *
    * @var array
    */
    protected $dates = ['deleted_at'];

    protected $table    = 'pages';
    
    protected $fillable = [
          'title_en',
          'title_fr',
          'title_de',
          'title_es',
          'content_en',
          'content_fr',
          'content_de',
          'content_es'
    ];
    

    public static function boot()
    {
        parent::boot();

        Pages::observe(new UserActionsObserver);
    }
    
    
    
    
}