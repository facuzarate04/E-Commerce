<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    protected $table = 'productos';

    public function local(){
        return $this->belongsTo(Local::class,'local_id');
    }
    public function productostate(){
        return $this->belongsTo(ProductoState::class,'producto_state_id');
    }
    public function productotype(){
        return $this->belongsTo(ProductoType::class,'producto_type_id');
    }
}
