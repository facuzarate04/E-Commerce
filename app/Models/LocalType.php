<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LocalType extends Model
{
    use HasFactory;
    protected $table='locals_type';

    public function local(){
        return $this->hasMany(Local::class);
    }
}
