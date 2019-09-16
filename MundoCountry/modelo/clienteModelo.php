
<?php

function adicionarCliente($nome, $email, $senha, $cpf, $celular, $dataNascimento, $sexo, $tipousuario) {
    
    
    $sql = "insert into cliente ( nome, email, senha, cpf, celular, dataNascimento, sexo, tipousuario) VALUES ('$nome', '$email', '$senha', '$cpf', '$celular', '$dataNascimento', '$sexo', '$tipousuario')";
    $resultado = mysqli_query($cnx= conn(), $sql);
    if (!$resultado) { die('Erro ao cadastrar cliente' . mysqli_error($cnx));}
    return 'Cliente cadastrado com sucesso!';
}

function pegarTodosClientes(){

    $sql = "SELECT * FROM cliente";
    $resultado = mysqli_query(conn(), $sql);
    $clientes = array();
    while ($linha = mysqli_fetch_assoc($resultado)) {
        $clientes[] = $linha;
    }
    
    return $clientes;
}
   
function pegarClientePorId($id) {
    $sql = "SELECT * FROM cliente WHERE id=$id";
    $resultado = mysqli_query(conn(), $sql);
    $cliente = mysqli_fetch_assoc($resultado);
    return $cliente;
  
}

function deletarCliente($id) {
    $sql = "DELETE FROM cliente WHERE id = $id";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!resultado){
        die('Erro ao deletar cliente' . msqli_error($cnx));
        
    }
    return 'Cliente deletado com sucesso!';
    
}

function editarCliente($nome, $email, $senha, $cpf, $celular, $dataNascimento, $sexo, $tipousuario, $id){
    $sql = "UPDATE cliente SET nome = '$nome', email = '$email', senha = '$senha', cpf = '$cpf', celular = '$celular', dataNascimento= '$dataNascimento', sexo = '$sexo', tipousuario = '$tipousuario' WHERE id = $id ";
  
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao alterar cliente' . mysqli_error($cnx));}
    return 'Cliente alterado com sucesso!';
}



?>

  