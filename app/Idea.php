<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Idea extends Model
{
    //

    public $table = 'Idea';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'categoryid', 
        'userid',
        'ideaName', 
        'ideadescription',
        'qa','ideatarget',
        'tierAmount',
        'ideadeadline',
        'ideaimg',
         'currentearning',
         'donatorcount',
    ];

    public function joinWithTier(){
        return $this->hasMany('App\Tier', 'ideaid', 'id');
    }

    public function joinWithComment(){
        return $this->hasMany('App\Comment', 'ideaid', 'id');
    }

    public function joinWithCategory(){
        return $this->belongsTo('App\Category', 'categoryid', 'id');
    }

    public function joinWithuser(){
        return $this->belongsTo('App\User', 'userid', 'id');
    }
}
