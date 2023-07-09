<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    protected $primaryKey = 'categoryID';
    protected $table = 'category';
    protected $guarded = ['categoryID'];

    public $attributes_map = [
        'categoryID' => 'Identificador de la categoria',
        'nameCategory' => 'Nombre de la categoria',
        'statusCategory' => 'Estatus de la categoria',
        'created_at' => 'Fecha de creación',
        'updated_at' => 'Fecha de actualización',
    ];

    public function getActive()
    {
        return $this->where('statusCategory', 1)->get();
    }

    public function isUsed()
    {
        return false;
    }
}
