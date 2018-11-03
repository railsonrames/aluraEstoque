<html>
<head>
    <link href="/css/app.css" rel="stylesheet">
    <title>Controle de Estoque</title>
</head>
<body>
<div class="container">
    <br/>
    <div class="row">
        <div class="h1">Detalhes do Produto Cadastrado</div>

        <table class="table table-striped table-hover table-bordered">
            <tr>
                <td><b>Nome: </b><?= $p->nome ?></td>
                <td><b>Valor: R$</b><?= $p->valor ?></td>
                <td><b>Descrição: </b><?= $p->descricao ?></td>
                <td><b>Quantidade: </b><?= $p->quantidade ?></td>
            </tr>
        </table>
    </div>
    <a class="btn btn-primary btn-lg float-right" href="/produtos">Voltar</a>
</div>
</body>
</html>
