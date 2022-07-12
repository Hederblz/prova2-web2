<?php

namespace App\Http\Controllers;

use App\Models\Cor;
use Illuminate\Http\Request;

class CorController extends Controller
{
    //
    public function index(){
        $cores = Cor::get();

        return view('cores.index', compact('cores'));
    }

    public function store(Request $request){
        Cor::create([
            'matriz' => $request->matriz,
        ]);

        return redirect()->route('cores.index');
    }

    public function edit($id)
    {
        $cor = Cor::findOrFail($id);

        return view('cores.edit', ['cor' => $cor]);
    }

    public function update(Request $request, $id)
    {
        $cor = Cor::findOrFail($id);
        $cor->matriz = $request->matriz;
        $cor->update();
        return redirect()->route('cores.index');
    }

    public function destroy($id){
        $cor = Cor::findOrFail($id);
        $cor->delete();
        return redirect()->route('cores.index');
    }

}
