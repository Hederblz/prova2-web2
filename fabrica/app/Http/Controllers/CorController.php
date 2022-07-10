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
}
