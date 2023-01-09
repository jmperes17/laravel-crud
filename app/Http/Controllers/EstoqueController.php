<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EstoqueController extends Controller
{
    //
    protected $estoque;

    public function __construct(EstoqueRepository $estoque){
        $this->estoque = $estoque;
    }
}


