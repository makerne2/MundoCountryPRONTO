<?php
require_once "modelo/produtoModelo.php";
function adicionar($idProduto) {
    if (isset($_SESSION["carrinho"])) {
        $produtos = $_SESSION["carrinho"];
    } else {
        
        $produtos = array();
       
    }
    $chave = existeProdutoNoCarrinho($produtos, $codigo);
   
    if ($chave === false) {
        $produto = pegarProdutoPorId($codigo);
       
        $produtos[] = $produto;
    } else {
        $produto = $produtos[$chave];
       
        $produtos[$chave] = $produto;
    }
    
    $_SESSION["carrinho"] = $produtos;
   
    redirecionar("sacola/mostrar");
}
function existeProdutoNoCarrinho($produtos, $codigo) {
    foreach ($produtos as $chave => $produto) {
        if ($produto["codigo"] == $codigo) { 
            return $chave;
        }
    }
    return false;
}
function mostrar() {
    $total = 0;
    $todos = array();
    if(isset($_SESSION["carrinho"])) {
        
        $produto = $_SESSION["carrinho"];
        foreach ($produto as $produto):
            $produto =  pegarProdutoPorId($produto);
            $todos[] = $produto;
            $total += $produto["preco"];
        endforeach;
    } else {
        echo "Carrinho vazio!";
    }
    
   $dados = array();
   
   $dados["produto"] = $todos;
   $dados["total"] = $total;
   
  
   //print_r($dados);
    exibir('carrinho/mostrar', $dados);
}
function limparCarrinho() {
    unset($_SESSION['carrinho']);
    redirecionar("sacola/mostrar");
}
function removerProduto($id) {
    $produtos = $_SESSION['carrinho'];
    foreach ($produtos as $key => $produto) {
        if ($produto['codigo'] == $id) {
            unset($produtos[$key]);
        }
    }
    $_SESSION['carrinho'] = $produtos;
    redirecionar("sacola/mostrar");
}
?>
