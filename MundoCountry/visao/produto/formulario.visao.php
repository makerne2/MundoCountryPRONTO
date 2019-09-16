<h3>Cadastrar Produto</h3>
<div id="formulario">
<form method="POST" id="formularios" action ="">
    Nome: <input type="text" name="nomeproduto" value="<?=@$produto['nomeproduto']?>"> <br>  
    Preço: <input type="text" name="preco" value="<?=@$produto['preco']?>"><br>
    Descricao: <input type="text" name="descricao" value="<?=@$produto['descricao']?>"> <br>
    Quantidade Estoque: <input type="text" name="quant_estoque" value="<?=@$produto['quant_estoque']?>"><br>
    Estoque Minimo: <input type="text" name="EstoqueMinimo" value="<?=@$produto['EstoqueMinimo']?>"><br>
    Estoque Maximo: <input type="text" name="EstoqueMaximo" value="<?=@$produto['EstoqueMaximo']?>"><br>
    Categoria: <select name="categoria">
        <option value="default"></option>
        <?php foreach ($categorias as $categoria): ?>
        <option value="<?=@$categoria["codigo"]?>"><?=@$categoria["descricao"]?></option>
        <?php endforeach;?>
    </select><br><br>
       
    <button type="submit"> Enviar </button>
    
</form>
    