<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductFamily extends Model
{
    protected $primaryKey = 'familyID';
    protected $table = 'families';
    protected $guarded = ['familyID'];

    public $attributes_map = [
        'familyID' => 'Identificador de la familia',
        'nameFamily' => 'Nombre de la familia',
        'statusFamily' => 'Estatus de la familia',
        'created_at' => 'Fecha de creación',
        'updated_at' => 'Fecha de actualización',
    ];

    public function getActive()
    {
        return $this->where('statusFamily', 1)->get();
    }

    public function isUsed()
    {
        return false;
    }
}
