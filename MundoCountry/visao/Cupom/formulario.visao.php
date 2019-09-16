
<?php 
    if(ehPost()) {
        foreach ($errors as $erro) {
            echo "$erro<br>";
        }
    }
?>


<form method="POST" id="formularios" action ="">
    Desconto: <input type="text" name="desconto" value="<?=@$cupom['desconto']?>"> <br>
    Nome do Cupom: <input type="text" name="nome_cupom" value="<?=@$cupom['nome_cupom']?>"><br>
      
    <button type="submit"> Enviar </button>
    
</form>
    
