<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Llanta extends Model
{
    protected $table = 'llantas';

    public function marcallanta(){
        return $this->hasOne('App\Models\Marca', 'id', 'marca_id');
    }
}
