<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarroCor extends Model
{
    use HasFactory;

    protected $fillable =['carro_id','cor_id'];

    public function carro(){
        return $this->belongsTo(Carro::class);
    }
    
    public function cor(){
        return $this->belongsTo(Cor::class);
    }
}
