<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
class Tariff extends Model
{
    use HasFactory;


    // Metodo que recupera la informacion de los  usuarios que tienen esa tarifa

    public function users(){

        return $this->hasMany(User::class);
    }
}
