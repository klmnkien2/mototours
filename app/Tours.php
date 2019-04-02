<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;


use Illuminate\Database\Eloquent\SoftDeletes;

class Tours extends Model {

    use SoftDeletes;

    /**
    * The attributes that should be mutated to dates.
    *
    * @var array
    */
    protected $dates = ['deleted_at'];

    protected $table    = 'tours';
    
    protected $fillable = [
          'name',
          'location',
          'description',
          'start_finish',
          'nearest_airport',
          'duration',
          'route',
          'accommodation',
          'rest_day',
          'highlights',
          'minimum_participant',
          'itinerary',
          'book_info',
          'price_info',
          'adventure_level',
          'photo'
    ];
    

    public static function boot()
    {
        parent::boot();

        Tours::observe(new UserActionsObserver);
    }

    public function stages()
    {
        return $this->hasMany('App\Stages');
    }

    public function itinerarys()
    {
        return $this->hasMany('App\Itinerary');
    }

    public function tourPrices()
    {
        return $this->hasMany('App\TourPrices');
    }

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }

    public function tourDestination()
    {
        return $this->hasMany('App\TourDestination');
    }

    public static function recent()
    {
        return Tours::orderby('id', 'desc')->paginate(6);
    }
}