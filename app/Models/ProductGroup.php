<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductGroup extends Model
{
    protected $primaryKey = 'groupID';
    protected $table = 'groups';
    protected $guarded = ['groupID'];

    public $attributes_map = [
        'groupID' => 'Identificador del grupo',
        'nameGroup' => 'Nombre del grupo',
        'statusGroup' => 'Estatus del grupo',
        'created_at' => 'Fecha de creación',
        'updated_at' => 'Fecha de actualización',
    ];

    public function getActive()
    {
        return $this->where('statusGroup', 1)->get();
    }

    public function isUsed()
    {
        return false;
    }
}
