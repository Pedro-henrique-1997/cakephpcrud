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
                <th scope="col"><?php echo $this->Paginator->sort('id')?></th>
                <th scope="col"><?php echo $this->Paginator->sort('nome')?></th>
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
<div class="paginator">
    <ul class="pagination">
        <?php echo $this->Paginator->first('<<' . __("Primeira")); ?> 
   	  	<?php echo $this->Paginator->prev('<' . __("Anterior")); ?>  
   	  	<?php echo $this->Paginator->numbers(); ?> 
   	  	<?php echo $this->Paginator->next('>' . __("Proximo")); ?> 
        <?php echo $this->Paginator->last('>>' . __("Ultima")); ?> 

    </ul>
</div>
</body>

</html>