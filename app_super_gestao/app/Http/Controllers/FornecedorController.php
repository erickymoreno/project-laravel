<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index() {
        $fornecedores = [1,2,3,4,5,6];
        $s = ($fornecedores[0] == 1 ? true : false);
        echo $s;
        return view('app.fornecedor.index', compact('fornecedores'));
    }
}
