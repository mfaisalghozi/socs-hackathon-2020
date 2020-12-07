<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    public $table = 'Donation';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'userid','donationamount','donationtypeid'
    ];

    public function User(){
        return $this->belongsTo('App\User', 'userid', 'id');
    }
}
