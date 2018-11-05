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
//        $produtos = DB::select('select * from produtos;');
        $produtos = Produto::all();

        return view('produto.listagem')->withProdutos($produtos);
//        return view('produto/listagem', [
//            'produtos' => $produtos,
//            'teste' => 'Hakuna',
//            'testeDo' => 'Matata'
//        ]);
//      Com o array eu posso passar mais de uma variável para a view utilizar.
    }

    public function detalhes(){
//        $id = Request::input('id');
        $id = Request::route('id');
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

        $params = Request::all();
        $produto = new Produto($params);
//        $produto->nome = Request::input('nome');
//        $produto->valor = Request::input('valor');
//        $produto->descricao = Request::input('descricao');
//        $produto->quantidade = Request::input('quantidade');

        $produto->save();
//        DB::insert('insert into produtos (nome, valor, descricao, quantidade) values (?,?,?,?)',
//            array($nome, $valor, $descricao, $quantidade));

//        return view('produto.adicionado')->with('nome', $nome);
        return redirect()->action('ProdutoController@lista')->withInput(Request::Only('nome'));
    }

    public function listaJson(){
        $produtos = DB::select('select * from produtos');
        return response()->json($produtos); // Se eu enviasse a variável $produtos ele já faria a conversão para JSON, pois é o formato padrão adotado pelo Laravel.
//        $arquivo = public_path(). '/robots.txt';
//        $headers = array('Content/Type: application/txt');
//        return response()->download($arquivo, 'arquivoBaixado.txt', $headers); // Excelente

    }

    public function qualNamespace(){
        $resultado = Container::getInstance()->getNamespace();
        return $resultado;
    }

    public function testandoJanelas(){
        $resultado = Janela::all();
        return $resultado;
    }
}
