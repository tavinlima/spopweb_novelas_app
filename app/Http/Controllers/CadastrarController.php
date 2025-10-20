<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Novela;

class CadastrarController extends Controller
{
    // Regra de negócio: Validar e persisitir dados no banco de dados
    public function salvar(Request $request){
        $request->validate([
            "titulo"=>"required|max:50",
            "descricao"=>"required|max:100",
            "inicio_exibicao"=>"required|date",
            "fim_exibicao"=>"required|date",
            "topo_audiencia"=>"required|decimal:2",
            "qtd_capitulos"=>"required|integer"
        ],[
            "titulo.required"=>"O campo 'título' não pode ser vazio",
            "titulo.max"=>"O campo 'título' deve ter no máximo 50 caracteres",
            "descricao.required"=>"O campo 'descrição' não pode ser vazio",
            "descricao.max"=>"O campo 'descrição' deve ter no máximo 100 caracteres",
            "inicio_exibicao.required"=>"O campo não pode ser vazio",
            "inicio_exibicao.date"=>"data inválida",
            "fim_exibicao.required"=>"O campo não pode ser vazio",
            "fim_exibicao.date"=>"data inválida",
            "topo_audiencia.required"=>"O campo não pode ser vazio",
            "topo_audiencia.decimal"=>"O campo deve ser um número com duas casas decimais",
            "qtd_capitulos.required"=>"O campo não pode ser vazio",
            "qtd_capitulos.integer"=>"O campo deve ser um número inteiro",
        ]);

        $novela = new Novela();
        $novela->fill($request->all());
        $novela->save();

        // dd($request);
        return View('cadastro_salvo');
    }
}
