<?php 
    if(ehPost()) {
        foreach ($errors as $erro) {
            echo "$erro<br>";
        }
    }
?>
<h3>Cadastrar Cliente</h3>
<div id="formulario">
<form method="POST" id="formularios" action ="">
    nome: <input type="text" name="nome" value="<?=@$cliente['nome']?>"> <br>
    email: <input type="text" name="email" value="<?=@$cliente['email']?>"> <br> 
    senha: <input type="password" name="senha" value="<?=@$cliente['senha']?>"> <br>
    cpf: <input type="text" name="cpf" value="<?=@$cliente['cpf']?>"> <br> 
    celular: <input type="text" name="celular" value="<?=@$cliente['celular']?>"> <br>
    Data de Nascimento: <input type="text" name="dataNascimento" value="<?=@$cliente['dataNascimento']?>"> <br>
   
    Sexo:  <br> <?php if (@$cliente["sexo"] == "M") { ?>
 		 <input type="radio" name="sexo" value="M" checked> Masc<br>
 		<input type="radio" name="sexo" value="F"> Fem<br>
<?php } else { ?>
<input type="radio" name="sexo" value="M"> Masc<br>
 		<input type="radio" name="sexo" value="F" checked> Fem<br>
<?php } ?>

    Tipo de usuário: <input type="text" name="tipousuario" value="<?=@$cliente['tipousuario']?>"> <br>
    
       <button type="submit"> Enviar </button>
    
</form>