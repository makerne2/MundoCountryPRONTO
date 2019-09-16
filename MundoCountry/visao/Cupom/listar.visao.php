<h2>Listar Cupons</h2>

<thead>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>desconto</th> 
            <th>Nome Cupom</th>
            <th>Ver</th>
            <th>Deletar</th>
            <th> Editar</th>
            
            
        </tr>
    </thead>
    
    <?php foreach ($cupom as $cupom): ?>
    <tr>
        <td><?=$cupom['id']?></td>
        <td><?=$cupom['desconto']?></td>
        <td><?=$cupom['nome_cupom']?></td>
        <td><a href="./cupom/ver/<?=$cupom['id']?>">Ver</a></td>
        <td><a href="./cupom/deletar/<?=$cupom['id']?>">Deletar</a></td>
         <td><a href="./cupom/editar/<?=$cupom['id']?>">Editar</a></td>
        
    </tr>
    <?php endforeach; ?>    
</table>

<a href="./cupom/adicionar" class="btn btn-primary"> Novo Cupom</a>