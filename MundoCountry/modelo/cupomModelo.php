<?php



function adicionarCupom($desconto , $nome_cupom) {
    $sql = "insert into cupom (desconto, nome_cupom) VALUES ('$desconto', '$nome_cupom')";{
    $cnx = conn();
    $resultado = mysqli_query($cnx, $sql);
    
    if (!$resultado) {
        die('Erro ao cadastrar cupom' . mysqli_error($cnx));
    } 
    return 'Cupom cadastrado com sucesso!';
}
}


function pegarTodosCupons(){

   
    $sql = "SELECT * FROM cupom";
    $resultado = mysqli_query(conn(), $sql);
    $cupom = array();
    while ($linha = mysqli_fetch_assoc($resultado)) {
        $cupom[] = $linha;
       
    }
    return $cupom;
}

function pegarCupomPorId($id) {
    $sql = "SELECT * FROM cupom WHERE id =$id";
    $resultado = mysqli_query(conn(), $sql);
    $cupom = mysqli_fetch_assoc($resultado);
    return $cupom;
  
}

function deletarCupom($id) {
    $sql = "DELETE FROM cupom WHERE id = $id";
    $resultado = mysqli_query( conn(), $sql);
    if(!resultado){
        die('Erro ao deletar cupom' . msqli_error($cnx));
        
    }
    return 'cupom deletado com sucesso!';
    
}

function editarCupom( $nome_cupom, $desconto, $id){
    $sql = "UPDATE cupom SET desconto = '$desconto', nome_cupom = '$nome_cupom' WHERE id = $id ";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao alterar cupom' . mysqli_error($cnx));}
    return 'cupom alterado com sucesso!';
}
    

?>
