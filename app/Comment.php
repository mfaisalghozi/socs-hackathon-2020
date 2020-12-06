<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    public $table = 'comment';

    public function joinWithIdea(){
        return $this->belongsTo('App\Idea', 'ideaid', 'id');
    }
}
