<h2>Listar categorias</h2>

<thead>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>descricao</th> 
            <th>Ver</th>
            <th>Deletar</th>
            <th> Editar</th>
            
            
        </tr>
    </thead>
    
    <?php foreach ($categorias as $categoria): ?>
    <tr>
        <td><?=$categoria['codigo']?></td>
        <td><?=$categoria['descricao']?></td>
        <td><a href="./categoria/ver/<?=$categoria['codigo']?>">Ver</a></td>
        <td><a href="./categoria/deletar/<?=$categoria['codigo']?>">Deletar</a></td>
         <td><a href="./categoria/editar/<?=$categoria['codigo']?>">Editar</a></td>
        
    </tr>
    <?php endforeach; ?>    
</table>

<a href="./categoria/adicionar" class="btn btn-primary"> Nova Categoria</a>