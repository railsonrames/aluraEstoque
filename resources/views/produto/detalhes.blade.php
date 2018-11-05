@extends('layout.principal')
@section('conteudo')
    <br/>
    <div class="row">
        <div class="h1">Detalhes do Produto Cadastrado</div>

        <table class="table table-striped table-hover table-bordered">
            <tr>
                <td><b>Nome: </b>{{$p->nome}}</td>
                <td><b>Valor: R$</b>{{$p->valor}}</td>
                <td><b>Descrição: </b>{{$p->descricao}}</td>
                <td><b>Quantidade: </b>{{$p->quantidade}}</td>
            </tr>
        </table>
    </div>
    <a class="btn btn-primary btn-lg float-right"  href="{{action('ProdutoController@lista')}}">Voltar</a>
@stop
