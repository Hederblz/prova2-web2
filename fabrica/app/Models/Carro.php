<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carro extends Model
{
    use HasFactory;

    protected $fillable = [
        'marca',
        'modelo',
        'placa',
        'roda',
        'user_id'
    ];

    public function dono(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
