<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estoque;

class EstoqueController extends Controller
{
    //
    public function index(){
        $listaEstoque = Estoque::all();

        
       
        return view('estoque')->with('listaEstoque', $listaEstoque);


    }
}
