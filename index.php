<?php
require_once 'clientes.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AnRi Bank</title>
    <link rel="stylesheet" href="bootstrap.css">
</head>
<body>

    <table class="table">
    <thead>
        <tr>
        <th scope="col">Código</th>
        <th scope="col">Nome</th>
        <th scope="col">Saldo</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($clientes as $cod => $cliente) { ?>
        <tr>
            <th scope="row"><?=$cod?></th>
            <td><?=$cliente['titular']?></td>
            <td><?=$cliente['saldo']?></td>
        </tr>
        <?php } ?>
    </tbody>
    </table>   
</body>
</html>