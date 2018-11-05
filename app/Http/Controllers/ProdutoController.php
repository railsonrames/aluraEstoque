<?php

namespace estoque\Http\Controllers;

use estoque\Models\Janela;
use Illuminate\Container\Container;
use Request;
use Illuminate\Support\Facades\DB;
use estoque\Produto;

class ProdutoController extends Controller
{
    public function lista(){
        $produtos = Produto::all();
        return view('produto.listagem')->withProdutos($produtos);
    }

    public function detalhes($id){

        $produto = Produto::find($id);

        if (empty($produto)){
            return "Esse produto não existe!";
        }
        return view('produto.detalhes')->with('p', $produto);
    }

    public function novo(){
        return view('produto.formulario');
    }

    public function adiciona(){
        Produto::create(Request::all());
        return redirect()->action('ProdutoController@lista')->withInput(Request::Only('nome'));
    }

    public function listaJson(){
        $produtos = DB::select('select * from produtos');
        return response()->json($produtos);
    }

    public function qualNamespace(){
        $resultado = Container::getInstance()->getNamespace();
        return $resultado;
    }

    public function testandoJanelas(){
        $resultado = Janela::all();
        return $resultado;
    }

    public function remove($id){

        $produto = Produto::find($id);
        $produto->delete();
        return redirect()->action('ProdutoController@lista')->withInput(Request::Only('nome'));
    }
}
