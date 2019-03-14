<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;


use Illuminate\Database\Eloquent\SoftDeletes;

class TourDestination extends Model {

    protected $table    = 'tour_destination';
    
    protected $fillable = [
          'sort',
          'tours_id',
          'destination_id'
    ];
    
    public function tours()
    {
        return $this->hasOne('App\Tours', 'id', 'tours_id');
    }

    public function destination()
    {
        return $this->hasOne('App\Destination', 'id', 'destination_id');
    }


    
    
    
}