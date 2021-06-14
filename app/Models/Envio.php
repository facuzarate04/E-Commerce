<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Envio extends Model
{
    use HasFactory;
    protected $table = 'envios';

    public function origen()
    {
        return $this->belongsTo(Localidad::class, 'origen');
    }
    public function destino()
    {
        return $this->belongsTo(Localidad::class, 'destino');
    }

    public function pedido()
    {
        return $this->hasMany(Pedido::class);
    }
}
