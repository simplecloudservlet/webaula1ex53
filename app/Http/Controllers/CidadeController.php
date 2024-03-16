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

    // /cidades/{type}/{val}/search
    //http://localhost/webaula1ex53/public/index.php/cidades/0/Acrelândia/search
    public function search($type,$val){
        if($type == "0"){
            $cidades = Cidade::where('nome',$val)->paginate($this->max_rows);
        } elseif ($type == "1"){
            $cidades = Cidade::where('nome','LIKE',$val . '%')->paginate($this->max_rows);
        } elseif ($type == "2"){
            $cidades = Cidade::where('nome','LIKE','%'.$val.'%')->paginate($this->max_rows);
        } else {
            $cidades = Cidade::where('nome',$val)->paginate($this->max_rows);
        }
        return view('main',['cidades'=>$cidades]);
    }
}
