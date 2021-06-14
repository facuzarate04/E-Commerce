<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductoType extends Model
{
    use HasFactory;
    protected $table='productos_type';

    public function producto(){
        return $this->hasMany(Producto::class);
        }   
}
