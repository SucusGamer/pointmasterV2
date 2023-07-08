<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dimension extends Model
{
    protected $table = 'dimensionllanta';

    public function marcallanta(){
        return $this->hasOne('App\Models\Marca', 'id', 'marca_id');
    }
}
