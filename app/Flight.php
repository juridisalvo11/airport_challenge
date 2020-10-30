<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Airport;

class Flight extends Model
{
    protected $fillable = ["code_departure", "code_arrival", "price"];

    public function airport() {

        return $this->belongsTo('App\Airport');

    }
}
