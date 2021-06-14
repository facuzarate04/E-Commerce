<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SolicitudSocio extends Model
{
    use HasFactory;
    protected $table='solicitud_socio';

    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
}
