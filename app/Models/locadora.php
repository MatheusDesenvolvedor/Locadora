<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class locadora extends Model
{

    use HasFactory;

    protected $fillable = ['titulo', 'nome'];

    public function relacionamento()
    {
        return $this->belongsTo(relacionamento::class); //locadora_id
    }
}
