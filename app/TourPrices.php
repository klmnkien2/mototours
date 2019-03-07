<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;


use Illuminate\Database\Eloquent\SoftDeletes;

class TourPrices extends Model {

    protected $table    = 'tour_prices';
    
    protected $fillable = [
          'type',
          'price',
          'motorcycle_id',
          'tours_id'
    ];
    
    public function tours()
    {
        return $this->hasOne('App\Tours', 'id', 'tours_id');
    }

    public function motorcycle()
    {
        return $this->hasOne('App\Motorcycle', 'id', 'motorcycle_id');
    }


    
    
    
}