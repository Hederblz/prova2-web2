<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cor extends Model
{
    use HasFactory;

    protected $fillable = ['matriz'];

    public function carroCor(){
        return $this->hasMany(CarroCor::class);
    }

    public function fabrica(){
        return $this->belongsToMany(Carro::class, 'carro_cor','cor_id','carro_id');
    }
}
