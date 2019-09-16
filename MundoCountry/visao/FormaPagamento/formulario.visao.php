<?php
if (ehPost()) {
	foreach ($errors as $erro) {
		echo "$erro<br>";
	}
}
?>
<h3>Cadastrar forma de pagamento</h3>
<div id="formulario">
<form method="POST" id="formularios" action="">
	Descrição: <input type="text" name="descricao" value="<?=@$formapagamento['descricao']?>"><br>
	<button type="submit"> Enviar </button>
</form>