<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;


use Illuminate\Database\Eloquent\SoftDeletes;

class Itinerary extends Model {

    protected $table    = 'itinerary';
    
    protected $fillable = [
          'title',
          'description',
          'tours_id'
    ];
    
    public function tours()
    {
        return $this->hasOne('App\Tours', 'id', 'tours_id');
    }


    
    
    
}