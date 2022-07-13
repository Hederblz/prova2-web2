<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

class CarroCor extends Pivot
{
    //
    use HasFactory;

    protected $fillable =['carro_id','cor_id'];

    public function carro(){
        return $this->belongsTo(Carro::class);
    }
    
    public function cor(){
        return $this->belongsTo(Cor::class);
    }
}
