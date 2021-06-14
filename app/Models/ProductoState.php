<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductoState extends Model
{
    use HasFactory;
    protected $table='productos_state';

    public function producto(){
        return $this->hasMany(Producto::class);
        }   
}
