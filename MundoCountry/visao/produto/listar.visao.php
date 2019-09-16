<h2>Listar produtos</h2>

<thead>
    <table border="1">
        <tr>
            <th>codigo</th>
            <th>categoria</th>
            <th>nomeproduto</th> 
            <th>preco</th> 
            <th>descricao</th>
            <th>quantidade_estoque</th>
            <th>EstoqueMínimo</th>
            <th>EstoqueMáximo</th>
            <th>Ver</th>
            <th>Deletar</th>
            <th> Editar </th>
            <th>Comprar</th>
            
            
            
        </tr>
    </thead>
    
    <?php foreach ($produto as $produto): ?>
    <tr>
        <td><?=$produto['codigo']?></td>
        <td><?=$produto['categoria']?></td>
        <td><?=$produto['nomeproduto']?></td> 
        <td><?=$produto['preco']?></td>
        <td><?=$produto['descricao']?></td>
         <td><?=$produto['quant_estoque']?></td>
        <td><?=$produto['EstoqueMinimo']?></td>
        <td><?=$produto['EstoqueMaximo']?></td>
        <td><a href="./produto/ver/<?=$produto['codigo']?>">Ver</a></td>
        <td><a href="./produto/deletar/<?=$produto['codigo']?>">Deletar</a></td>
        <td><a href="./produto/editar/<?=$produto['codigo']?>">Editar</a></td>
        <td><a href="./produto/comprar/<?=$produto['codigo']?>">Comprar</a></td>
        
        
    </tr>
    <?php endforeach; ?>    
</table>

<a href="./produto/adicionar" class="btn btn-primary"> Novo Produto</a>