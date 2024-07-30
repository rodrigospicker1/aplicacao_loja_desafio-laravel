<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;


class ManagerController extends Controller
{
    function index()
    {
        return view('index');
    }

    function create_view()
    {
        return view('create_product');
    }

    function create(Request $request)
    {
        $regra_validacao_quant_medida = [];
        $regra_validacao_data_validade = [];

        if($request->tipo_unidade_medida == 'litro' || $request->tipo_unidade_medida == 'quilograma'){
            $regra_validacao_quant_medida = ['nullable', 'numeric'];
        }else if($request->tipo_unidade_medida == 'unidade'){
            $regra_validacao_quant_medida = ['nullable', 'integer'];
        }else{
            return redirect()->back()->withInput()->with(['msg' => ['Unidade de medida inexistente'] ]);    
        }

        if($request->perecivel == true){
            $regra_validacao_data_validade = ['required', 'date_format:d/m/Y'];
        }else{
            $regra_validacao_data_validade = ['nullable', 'date_format:d/m/Y'];
        }
        
        $quantidade_original = $request->quant_unidade_medida;
        $preco_original = $request->preco;
        $request->merge([
            'preco' => Str::replace(',', '.', Str::replace(['.', ' '], '', $request->preco)),
            'quant_unidade_medida' => Str::replace(',', '.', Str::replace(['.', ' '], '', $request->quant_unidade_medida)),
        ]);

        $request->validate([
            'nome_produto' => ['required', 'max:50', 'min:3'],
            'tipo_unidade_medida' => ['required', 'max:10', 'min:5'],
            'preco' => ['required', 'numeric'],
            'perecivel' => ['required', 'boolean'],
            'quant_unidade_medida' => $regra_validacao_quant_medida,
            'data_validade' =>  $regra_validacao_data_validade,
            'data_fabricacao' => ['required', 'date_format:d/m/Y']
        ]);

        $data_validade = implode("-", array_reverse(explode("/", $request->data_validade)));
        $data_fabricacao = implode("-", array_reverse(explode("/", $request->data_fabricacao)));

        if( strtotime(date('Y-m-d')) > strtotime($data_validade) )
        {
            return redirect()->back()->withInput()->with(['msg'=> ['Não é possível cadastrar alimento vencido']]);    
        }

        if($request->perecivel == true){
            if( strtotime($data_validade) < strtotime($data_fabricacao) )
            {
                return redirect()->back()->withInput()->with(['msg' => ['Data de fabricação não pode ser superior a data de validade para produtos perecíveis']]);      
            }
        }

        $id_produto = "";
        if($request->id_produto != "")
        {
            $id_produto = $request->id_produto;
        }else{
            $id_produto = Str::random(9);
        }

        $object = [
            'id' => $id_produto,
            'nome_produto' => strtolower($request->nome_produto),
            'tipo_unidade_medida' => $request->tipo_unidade_medida,
            'preco' => $preco_original,
            'perecivel' => $request->perecivel,
            'quant_unidade_medida' => $quantidade_original,
            'data_fabricacao' => $request->data_fabricacao,
            'data_validade' => $request->data_validade,
        ];

        Session::flash('success', 'true');
        Session::flash('produtos', $object );
        return redirect()->back(); 
    }

    function edit_view(Request $request, $id)
    {
        return view('create_product', ['id' => $id]);
    }
}
