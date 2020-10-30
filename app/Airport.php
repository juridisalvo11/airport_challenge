<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Flight;

class Airport extends Model
{
    protected $fillable = ["name", "stopover", "code", "lat", "lon"];

    public function flights() {

        return $this->hasMany('App\Flight');
        
    }
}
