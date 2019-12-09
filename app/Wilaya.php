<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wilaya extends Model
{
    public function Communes(){
        return $this->hasMany(Commune::class);
    }
    public function Donators(){
        return $this->hasMany(Donator::class);
    }
    public function Centers(){
        return $this->hasMany(Center::class);
    }
}
