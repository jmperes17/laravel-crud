<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estoque;
use Estoque as GlobalEstoque;
use Illuminate\Support\Facades\Validator;

class EstoqueController extends Controller
{
    //


    public function index(){
        $listaEstoque = Estoque::all();

        return view('estoque')->with('listaEstoque', $listaEstoque);
    }

    public function inserir_produto(){
       

        return view('inserir_produto');
    }

    public function insere_novo_produto(Request $request){

        $request->validate([
            'nome_produto' => 'required',
            'quantidade' => 'required'
        ]);

        //dd($request->all());

        $nome_produto = $request->input('nome_produto');
        $quantidade = $request->input('quantidade');

        $arrayInsert = array(
            'nome_produto' => $nome_produto,
            'quantidade' => $quantidade,
            'created_at' => now(),
            'updated_at' => now()
        );

        $insert = \DB::table('estoque')->insert($arrayInsert);

        if($insert){
            return redirect()->route('estoque');
        }

    }

    public function editar($id){
        
       $id = Estoque::findOrFail($id);

       return view('editar')->with('id', $id);

    }

    public function editando_produto(Request $request){

        //$produto = Estoque::findOrFail($id);

        $update = array(
            "nome_produto" => $request->input('nome_produto'),
            "quantidade" => $request->input('quantidade'),
            "updated_at" => now()
        );

        $id = $request->input('id');

        //\DB::table('estoque')->update($update) ;

        Estoque::where('id', $id)->update(
            ["nome_produto" => $request->input('nome_produto'),
        "quantidade" => $request->input('quantidade'),
        "updated_at" => now()]
        );

        return redirect()->route('estoque');

    }
}
