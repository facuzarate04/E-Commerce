<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Localidad extends Model
{
    use HasFactory;
    protected $table='localidades';

    public function user(){
        return $this->hasMany(User::class);
    }
    public function local(){
        return $this->hasMany(Local::class);
    }
}
