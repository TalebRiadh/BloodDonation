<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commune extends Model
{
    public function Wilaya(){
        return $this->belongsTo(Wilaya::class);
    }
    public function Donators(){
        return $this->hasMany(Donator::class);
    }
    public function Centers(){
        return $this->hasMany(Center::class);
    }

}
