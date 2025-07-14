
<h1>Edite os dados do usuário</h1>

<?php

echo $this->Form->create($usuarios_edit);
echo $this->Form->input("nome") . "<br>";
echo $this->Form->input("email"). "<br>";
echo $this->Form->input("cpf") . "<br>";
echo $this->Form->input("rg") . "<br>";
echo $this->Form->input("signo"). "<br>";
echo $this->Form->button(__("Salvar")) . "<br>";
echo $this->Form->end();

?>