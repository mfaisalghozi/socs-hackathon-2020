<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    public $table = 'Category';

    public function joinWithIdea(){
        return $this->hasMany('App\Idea', 'categoryid', 'id');
    }
}
