<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Center extends Model
{
    public function Wilaya(){
        return $this->belongsTo(Wilaya::class);
    }
    public function Commune(){
        return $this->belongsTo(Commune::class);
    }
}
