<?php 
    if(ehPost()) {
        foreach ($errors as $erro) {
            echo "$erro<br>";
        }
    }
?>
<h3>Cadastrar Endereço</h3>
<div id="formulario">
<form method="POST" id="formularios" action ="">
    
    <label for="email"><b> logradouro</b></label>
    <input type="text"  placeholder="" name="logradouro" value="<?=@$endereco['logradouro']?>" required="">
    
    
    <label for="psw"><b>Numero</b></label>
    <input type="text" placeholder="" name="numero" value="<?=@$endereco['numero']?>" required="">
   
    <label for="email"><b>Complemento</b></label>
    <input type="text" placeholder="ex: casa, ap..." name="complemento" value="<?=@$complemento['complemento']?>" required="complemento">
   
    
    <label for="email"><b>Bairro</b></label>
    <input type="text" placeholder="" name="bairro" value="<?=@$endereco['bairro']?>" required="">

    <label for="email"><b>Cidade</b></label>
    <input type="text" placeholder="" name="cidade" value="<?=@$endereco['cidade']?>" required="">
    
   <label for="email"><b>Cep</b></label>
   <input type="text" placeholder="00000000" name="cep" value="<?=@$endereco['cep']?>" required="">

                                
 <button type="submit" class="signupbtn">Confirmar</button>
    
</div>
    
