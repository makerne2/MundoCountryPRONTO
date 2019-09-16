<meta charset="utf-8">

<?php

require_once 'modelo/categoriaModelo.php';

function adicionar() {

if (ehPost()) {
       
        $descricao = strip_tags($_POST ["descricao"]);
        
        $errors = array();
        
        if (strlen(trim($descricao)) == 0) {
            $errors[] = "Você deve inserir uma Descrição.";
        }
      
       
        if (count($errors) > 0 ) {
            $dados = array();
            $dados["errors"] = $errors;
            exibir("categoria/formulario", $dados);
        }else {
            $msg = adicionarCategoria( $descricao);
            redirecionar("categoria/listarCategorias");
              }
        
    } else {
        exibir("categoria/formulario");
    }
}

function listarCategorias() {
    
    $dados = array();
    $dados["categorias"] = pegarTodasCategorias();
    exibir ("categoria/listar", $dados);
   
}

function ver($codigo) {
    
    $dados["categoria"] = pegarCategoriaPorId($codigo);
    
    exibir("categoria/visualizar", $dados);
   
}

function deletar($codigo) {
    $msg = deletarCategoria($codigo);
    redirecionar("./categoria/listarCategorias");
}
 
function editar($codigo){
    if (ehPost()){
        $msg = editarCategoria($codigo, $descricao);
       
       redirecionar ("./categoria/listarCategorias");
    } else{
        $dados["categoria"]= pegarCategoriaPorId($codigo);
        exibir ("categoria/formulario", $dados);
        
       
    }   
}
?>