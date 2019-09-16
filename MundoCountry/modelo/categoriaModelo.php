<?php



function adicionarCategoria($descricao) {
    $sql = "insert into categoria (descricao) VALUES ('$descricao')";{
    $cnx = conn();
    $resultado = mysqli_query($cnx, $sql);
    
    if (!$resultado) {
        die('Erro ao cadastrar categoria' . mysqli_error($cnx));
    } 
    return 'Categoria cadastrada com sucesso!';
}
}


function pegarTodasCategorias(){

   
    $sql = "SELECT * FROM categoria";
    $resultado = mysqli_query(conn(), $sql);
    $categoria = array();
    while ($linha = mysqli_fetch_assoc($resultado)) {
        $categoria[] = $linha;
       
    }
    return $categoria;
}

function pegarCategoriaPorId($codigo) {
    $sql = "SELECT * FROM categoria WHERE codigo =$codigo";
    $resultado = mysqli_query(conn(), $sql);
    $categoria = mysqli_fetch_assoc($resultado);
    return $categoria;
  
}

function deletarCategoria($codigo) {
    $sql = "DELETE FROM categoria WHERE codigo = $codigo";
    $resultado = mysqli_query( conn(), $sql);
    if(!resultado){
        die('Erro ao deletar Categoria' . msqli_error($cnx));
        
    }
    return 'Categoria deletada com sucesso!';
    
}

function editarCategoria($codigo,$descricao){
    $sql = "UPDATE categoria SET descricao = '$descricao' WHERE codigo = $codigo ";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao alterar categoria' . mysqli_error($cnx));}
    return 'Categoria alterada com sucesso!';
}
    

?>
