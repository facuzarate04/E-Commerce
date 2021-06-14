<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LocalState extends Model
{
    use HasFactory;
    protected $table='locals_state';

    public function local(){
        return $this->hasMany(Local::class);
    }
}
