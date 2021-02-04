<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function shape()
    {
        return $this->belongsTo('App\Shape');
    }
}
