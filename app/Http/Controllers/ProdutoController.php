<?php

namespace estoque\Http\Controllers;

use Request;
use Illuminate\Support\Facades\DB;

class ProdutoController extends Controller
{
    public function lista(){
        $produtos = DB::select('select * from produtos;');

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
        $produto = DB::select('select * from produtos where id = ?', [$id]);

        if (empty($produto)){
            return "Esse produto não existe!";
        }
        return view('produto.detalhes')->with('p', $produto[0]);
    }

    public function novo(){
        return view('produto.formulario');
    }

    public function adiciona(){
        $nome = Request::input('nome');
        $valor = Request::input('valor');
        $descricao = Request::input('descricao');
        $quantidade = Request::input('quantidade');

        DB::insert('insert into produtos (nome, valor, descricao, quantidade) values (?,?,?,?)',
            array($nome, $valor, $descricao, $quantidade));

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
}
