<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class relacionamento extends Model
{
    use HasFactory;

    protected $fillable = ['locadora_id', 'genero_id', 'lisat-id'];

    public function locadora()
    {
        return $this->hasMany(locadora::class); //locadora_id
    }

    public function genero()
    {
        return $this->hasMany(genero::class); //locadora_id
    }

    public function lista()
    {
        return $this->hasMany(lista::class); //locadora_id
    }
}
