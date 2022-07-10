<?php

namespace App\Http\Controllers;

use App\Models\Carro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CarroController extends Controller
{
    //
    public function show($id){
        $user = Auth::user();
        $carro = Carro::findOrFail($id);
        return view('carros.show', compact('carro'));
    }

    public function index(){
        $carros = Carro::get();

        return view('carros.index', compact('carros'));
    }

    public function store(Request $request){
        Carro::create([
            'marca' => $request->marca,
            'modelo' => $request->modelo,
            'placa' => $request->placa,
            'roda' => $request->roda,
            'user_id' => Auth::user()->id
        ]);

        return redirect()->route('carros.index');
    }

    public function edit($id)
    {
        $user = Auth::user();
        $carro = Carro::findOrFail($id);

        return view('carros.edit', ['carro' => $carro]);
    }

    public function update(Request $request, $id)
    {
        $user = Auth::user();
        $camisa = Carro::findOrFail($id);
        $camisa->marca = $request->marca;
        $camisa->modelo = $request->modelo;
        $camisa->placa = $request->placa;
        $camisa->roda = $request->roda;
        $camisa->update();
        return redirect()->route('carros.index');
    }

    public function destroy($id){
        $user = Auth::user();
        $carro = Carro::findOrFail($id);
        $carro->delete();
        return redirect()->route('carros.index');
    }
}
