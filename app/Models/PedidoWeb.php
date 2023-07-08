<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PedidoWeb extends Model
{
    protected $table = 'pedidosweb';

    public function detallepedido(){
        return $this->hasMany('App\Models\DetallesPedidoWeb', 'pedidoweb_id', 'id');
    }

}
