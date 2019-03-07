<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;


use Illuminate\Database\Eloquent\SoftDeletes;

class Stages extends Model {

    protected $table    = 'stages';
    
    protected $fillable = [
          'number',
          'from_date',
          'to_date',
          'description',
          'tours_id'
    ];
    
    public function tours()
    {
        return $this->hasOne('App\Tours', 'id', 'tours_id');
    }


    
    
    
}