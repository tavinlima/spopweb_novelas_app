<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Novela;

class XmlController extends Controller
{
    //pegar todos os dados e gerar um XML a partir deles
    public function gerarXML() {
        //buscar dados no banco
        $dados = Novela::all();

        //print_r($dados);

        //retornar a view com os dados
        return response()->view('data-xml',['registros' => $dados])->header('Content-Type', 'application/xml');
    }
}
