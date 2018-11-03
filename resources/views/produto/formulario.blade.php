@extends('layout.principal')
@section('conteudo')
    <br/>
    <h1>Novo cadastro de produto</h1>
        <form action="/produtos/adiciona" method="post">
            <input type="hidden" value="{{csrf_token()}}" name="_token">
            <div class="form-group">
                <label for="">Nome</label>
                <input type="text" name="nome" class="form-control"/>
            </div>
            <div class="form-group">
                <label for="">Valor</label>
                <input type="text" name="valor" class="form-control"/>
            </div>
            <div class="form-group">
                <label for="">Quantidade</label>
                <input type="text" name="quantidade" class="form-control"/>
            </div>
            <div class="form-group">
                <label for="">Descricão</label>
                <input type="text" name="descricao" class="form-control"/>
            </div>
            <button class="btn btn-primary" type="submit">Adicionar</button>
        </form>
@stop
