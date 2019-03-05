<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;


use Illuminate\Database\Eloquent\SoftDeletes;

class Comment extends Model {

    use SoftDeletes;

    /**
    * The attributes that should be mutated to dates.
    *
    * @var array
    */
    protected $dates = ['deleted_at'];

    protected $table    = 'comment';
    
    protected $fillable = [
          'name',
          'year',
          'description',
          'photo',
          'tours_id'
    ];
    

    public static function boot()
    {
        parent::boot();

        Comment::observe(new UserActionsObserver);
    }
    
    public function tours()
    {
        return $this->hasOne('App\Tours', 'id', 'tours_id');
    }


    
    
    
}