<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Cidade;
use Illuminate\View\View;

class CidadeController extends Controller
{
    //Livro
    private $max_rows = 10;
    public function index(){
        $cidades = Cidade::paginate($this->max_rows);
        return view('main',['cidades'=>$cidades]);

    }
}
