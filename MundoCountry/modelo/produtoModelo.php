<?php

function adicionarProduto($categoria, $nomeproduto, $preco, $descricao, $quant_estoque, $EstoqueMinimo, $EstoqueMaximo) {
    $sql = "insert into produto ( categoria, nomeproduto, preco, descricao, quant_estoque, EstoqueMinimo, EstoqueMaximo) VALUES ('$categoria', '$nomeproduto', '$preco', '$descricao', '$quant_estoque', '$EstoqueMinimo', '$EstoqueMaximo')";
    echo $sql;
    $cnx = conn();
    $resultado = mysqli_query($cnx, $sql);
    if (!$resultado) {
        die('Erro ao cadastrar produto' . mysqli_error($cnx));
    }
    return 'Produto cadastrado com sucesso!';
}

function pegarTodosProdutos(){

   
    $sql = "SELECT * FROM produto";
    $resultado = mysqli_query(conn(), $sql);
    $produto = array();
    while ($linha = mysqli_fetch_assoc($resultado)) {
        $produto[] = $linha;
    }
    
    return $produto;
}
    
function pegarProdutoPorId($codigo) {
    $sql = "SELECT * FROM produto WHERE codigo=$codigo";
    $resultado = mysqli_query(conn(), $sql);
    $produto = mysqli_fetch_assoc($resultado);
    return $produto;
  
}

function deletarProduto($codigo) {
    $sql = "DELETE FROM produto WHERE codigo = $codigo";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!resultado){
        die('Erro ao deletar Produto' . msqli_error($cnx));
        
    }
    return 'Produto deletado com sucesso!';
    
}

function editarProduto( $categoria, $nomeproduto, $descricao, $preco,$quant_estoque, $EstoqueMinimo, $EstoqueMaximo, $codigo){
    $sql = "UPDATE produto SET categoria = '$categoria', nomeproduto = '$nomeproduto', preco = '$preco', descricao = '$descricao', quant_estoque = '$quant_estoque', EstoqueMinimo = '$EstoqueMinimo', EstoqueMaximo = '$EstoqueMaximo' WHERE codigo = $codigo ";
   //echo $sql;
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao alterar produto' . mysqli_error($cnx));}
    return 'Produto alterado com sucesso!';
}

?>
  