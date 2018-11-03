@extends('layout.principal')
@section('conteudo')
    <br/>
    <div class="row">
        @if(old('nome'))
            <div class="alert-success alert">
                <strong>Sucesso!</strong> O produto {{old('nome')}} adicionado com sucesso!
            </div>
            <br/>
        @endif
        @if(empty($produtos))
            <div class="alert-danger alert">Você não tem nenhum produto cadastrado.</div>
        @else
            <br/>
            <div class="h1">Lista de Produtos Cadastrados</div>
            <table class="table table-striped table-hover table-bordered">
                <tr>
                    <th>Nome</th>
                    <th>Valor</th>
                    <th>Descrição</th>
                    <th>Quantidade</th>
                    <th>Ações</th>
                </tr>
                <?php foreach ($produtos as $produto): ?>
                <tr class="{{$produto->quantidade <= 20 ? 'danger' : '' }}">
                    <td>{{$produto->nome}}</td>
                    <td>R${{$produto->valor}}</td>
                    <td>{{$produto->descricao}}</td>
                    <td>{{$produto->quantidade}}</td>
                    <td>
                        <a href="produtos/detalhes/{{$produto->id}}"><span class="glyphicon glyphicon-search"
                                                                           aria-hidden="true"></span></a>
                    </td>
                </tr>
                <?php endforeach ?>
            </table>
        @endif
        <h4>
            <span class="label label-danger pull-right">Vinte ou menos itens no estoque!</span>
        </h4>
    </div>
@stop
