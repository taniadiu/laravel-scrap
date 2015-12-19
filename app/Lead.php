<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    
    protected $table = "leads";

    protected $fillable = ["link_id", "name", "phone", "email", "title"];

    public function link(){

    	$this->belongsTo('App/Link');
    }
}