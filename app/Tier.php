<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tier extends Model
{
    //
    public $table = 'tier';

    public function joinWithIdea(){
        return $this->belongsTo('App\Idea', 'ideaid', 'id');
    }
}
