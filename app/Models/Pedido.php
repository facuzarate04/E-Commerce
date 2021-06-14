<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;
    protected $table = 'pedidos';
    

    public function local(){
        return $this->belongsTo(Local::class,'local_id');
    }
    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
    public function pedidostate(){
        return $this->belongsTo(PedidoState::class,'pedido_state_id');
    }

    public function envio(){
        return $this->belongsTo(Envio::class,'envio_id');
    }
    


}
