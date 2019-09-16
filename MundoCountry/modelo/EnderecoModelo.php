<?php

function adicionarEndereco($idusuario, $logradouro, $numero, $complemento, $bairro, $cidade, $cep){
    
    
    $sql = "insert into endereco ( idusuario, logradouro, numero, complemento, bairro, cidade, cep) VALUES ('$idusuario','$logradouro', '$numero', '$complemento', '$bairro', '$cidade', '$cep')";
    
    $resultado = mysqli_query($cnx = conn(), $sql);
    if (!$resultado) {
        die('Erro ao cadastrar endereco' . mysqli_error($cnx));
         
    }
    return 'endereco cadastrado com sucesso!';
}

function pegarTodosEnderecos(){

    $sql = "SELECT * FROM endereco";
    $resultado = mysqli_query(conn(), $sql);
    $endereco = array();
    while ($linha = mysqli_fetch_assoc($resultado)) {
        $endereco[] = $linha;
    }
    
    return $endereco;
}
   
function pegarEnderecoPorId($idendereco) {
    $sql = "SELECT * FROM endereco WHERE idendereco=$idendereco";
    $resultado = mysqli_query(conn(), $sql);
    $endereco = mysqli_fetch_assoc($resultado);
    return $endereco;
  
}


function pegarEnderecoPorIdCliente($id) {
    $sql = "SELECT * FROM endereco WHERE idusuario=$id";
    
    $resultado = mysqli_query(conn(), $sql);
    $endereco = array();
    while ($linha = mysqli_fetch_assoc($resultado)) {
        $endereco[] = $linha;
    }
    return $endereco;
}

function deletarEndereco($idendereco){
    $sql = "delete from endereco where idendereco = $idendereco";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if (!$resultado){
        die('Erro ao deletar endereco'. mysqli_error($cnx));  
    }
    return 'Endereço deletado com sucesso!';
}



function editarEndereco($idendereco, $logradouro, $numero, $complemento, $bairro, $cidade, $cep){
    $sql = "UPDATE endereco SET  logradouro = '$logradouro', numero = '$numero', complemento = '$complemento', bairro = '$bairro', cidade = '$cidade', cep = '$cep' WHERE idendereco = '$idendereco' ";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao alterar endereco' . mysqli_error($cnx));}
    return 'Endereco alterado com sucesso!';
}


?>