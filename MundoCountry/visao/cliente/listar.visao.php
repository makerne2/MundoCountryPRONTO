<h2>Listar clientes</h2>


    
    <thead>
    <table border="1">
        <tr>
            <th>nome</th>
            <th>email</th>
            <th>senha</th> 
            <th>cpf</th> 
            <th>celular</th> 
            <th>Data de Nascimento</th>
            <th>Sexo</th>
            <th>Tipo do Usuário</th>
            <th>Ver</th>
            <th>Deletar</th>
            <th> Editar</th>
        </tr>
  

    <?php foreach ($clientes as $cliente): ?>
    <tr>
        <td><?=$cliente['nome']?></td>
        <td><?=$cliente['email']?></td>
        <td><?=$cliente['senha']?></td> 
        <td><?=$cliente['cpf']?></td>
        <td><?=$cliente['celular']?></td>
        <td><?=$cliente['dataNascimento']?></td>
        <td><?=$cliente['sexo']?></td>
        <td><?=$cliente['tipousuario']?></td>
        <td><a href="./cliente/ver/<?=$cliente['id']?>">Ver</a></td>
        <td><a href="./cliente/deletar/<?=$cliente['id']?>">Deletar</a></td>
        <td><a href="./cliente/editar/<?=$cliente['id']?>">Editar</a></td>
        
    </tr>
    <?php endforeach ?>    
</table>

<a href="./cliente/cadastro" class="btn btn-primary"> Novo Cliente</a>