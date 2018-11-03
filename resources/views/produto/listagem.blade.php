<html>
<head>
    <link href="/css/app.css" rel="stylesheet">
    <title>Controle de Estoque</title>
</head>
<body>
<div class="container">
    <br/>
    <div class="row">
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
            <tr>
                <td><?= $produto->nome ?></td>
                <td>R$<?= $produto->valor ?></td>
                <td><?= $produto->descricao ?></td>
                <td><?= $produto->quantidade ?></td>
                <td>
                    <a href="produtos/detalhes/<?= $produto->id?>">Detalhes</a>
                </td>
            </tr>
            <?php endforeach ?>
        </table>
    </div>
</div>
</body>
</html>
