<h1>Dados do Usuarios</h1>

<table>
    <tr>
        <th>ID</th>
        <td>
            <?= h($usuarios->id) ?>
        </td>
    </tr>

    <tr>
        <th>Nome</th>
        <td>
            <?= h($usuarios->nome) ?>
        </td>
    </tr>

    <tr>
        <th>Email</th>
        <td>
            <?= h($usuarios->email) ?>
        </td>
    </tr>

    <tr>
        <th>CPF</th>
        <td>
            <?= h($usuarios->cpf) ?>
        </td>
    </tr>

    <tr>
        <th>RG</th>
        <td>
            <?= h($usuarios->rg) ?>
        </td>
    </tr>

    <tr>
        <th>Signo</th>
        <td>
            <?= h($usuarios->signo) ?>
        </td>
    </tr>
</table>

    <?= $this->Html->link('Voltar para a listagem', ['action' => 'index'])?>
