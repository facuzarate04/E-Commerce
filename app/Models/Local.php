<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Local extends Model
{
    use HasFactory;
    protected $table='locals';

    public function localtype(){   
        return $this->belongsTo(LocalType::class,'local_type_id');
    }

    public function user(){     
   return $this->belongsTo(User::class,'user_id');
    } 

    public function localidad(){     
        return $this->belongsTo(Localidad::class,'localidad_id');
    }    

    public function localstate(){   
   return $this->belongsTo(LocalState::class,'local_state_id');
    }

    public function producto(){
    return $this->hasMany(Producto::class);
    } 

    public function pedido(){
        return $this->hasMany(Pedido::class);
    }  
    
}
