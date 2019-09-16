<meta charset="utf-8">

<?php

require_once 'modelo/categoriaModelo.php';

function descricao() {

if (ehPost()) {
        
        $descricao = $_POST ["descricao"];
        
        $errors = array();
        
        if (strlen(trim($descricao)) == 0) {
            $errors[] = "Você deve inserir uma Descrição.";
        }
      
       
        if (count($errors) > 0 ) {
            $dados = array();
            $dados["errors"] = $errors;
            exibir("Categoria/formulario", $dados);
        }else {
            $msg = adicionarCategoria($descricao, $codigo);
            redirecionar("Categoria/listarCategorias");
              }
       
        
        
    } else {
        exibir("categoria/formulario");
    }
}

function listarCategorias() {
    
    $dados = array();
    $dados["categoria"] = pegarTodasCategorias();
    exibir ("categoria/visualizar", $dados);
   
}

function ver($codigo) {
    
    $dados["categoria"] = pegarCategoriaPorId($codigo);
    
    exibir("categoria/visualizar", $dados);
   
}

function deletar($codigo) {
    $msg = deletarCategoria($codigo);
    redirecionar("./categoria/listarCategorias");
}


?>