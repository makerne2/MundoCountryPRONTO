<h2> Ver detalhes do cliente</h2>

<p> Id: <?=$cliente['id']?></p>
<p> Nome: <?=$cliente['nome']?> </p>
<p> Email : <?=$cliente['email']?> </p>
<p> Senha : <?=$cliente['senha']?> </p>
<p> cpf : <?=$cliente['cpf']?> </p>
<p> Celular : <?=$cliente['celular']?> </p>
<p> Data de Nascimento : <?=$cliente['dataNascimento']?> </p>
<p> Sexo : <?=$cliente['sexo']?> </p>
<p> Tipo De Usuário : <?=$cliente['tipousuario']?> </p>

<a href="./endereco/adicionar/<?=$cliente['id']?>"> Novo Endereço </a>
<?php require_once "visao/endereco/listar.visao.php";?>