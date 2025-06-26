<?php

//var_dump($usuarios);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    echo $this->Html->link('Cadastrar Usuario', ['controller' => 'Usuarios', 'action' => 'add'])
    ?>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>CPF</th>
                <th>RG</th>
                <th>Signo</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($usuarios as $usuario): ?>
                <tr>
                    <th><?php echo $usuario->id; ?></th>
                    <th><?php echo $usuario->nome; ?></th>
                    <th><?php echo $usuario->email; ?></th>
                    <th><?php echo $usuario->cpf; ?></th>
                    <th><?php echo $usuario->rg; ?></th>
                    <th><?php echo $usuario->signo; ?></th>
                    <th>Visualizar - Editar - Apagar</th>
                </tr>

            <?php endforeach?>
        </tbody>

    </table>

</body>

</html>