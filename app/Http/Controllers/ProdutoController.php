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
}
