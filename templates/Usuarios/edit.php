
<h1>Edite os dados do usuário</h1>

<?php

echo $this->Form->create($usuarios_edit);
echo $this->Form->control("nome") . "<br>";
echo $this->Form->control("email"). "<br>";
echo $this->Form->control("cpf") . "<br>";
echo $this->Form->control("rg") . "<br>";
echo $this->Form->control("signo"). "<br>";
echo $this->Form->button(__("Salvar")) . "<br>";
echo $this->Form->end();

?>