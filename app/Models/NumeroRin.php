<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NumeroRin extends Model
{
    protected $table = 'numerorin';

    public function tipovehiculo(){
        return $this->hasOne('App\Models\Tipovehiculo', 'id', 'tipovehiculo_id');
    }
}
