<h1>Cadastrar Usuarios</h1>

<?php

echo $this->Form->create($user);
echo $this->Form->control('nome');
echo $this->Form->control('email');
echo $this->Form->control('cpf');
echo $this->Form->control('rg');
echo $this->Form->control('signo');
echo $this->Form->control('senha');
echo $this->Form->button('Cadastrar');
echo $this->Form->end();

?>