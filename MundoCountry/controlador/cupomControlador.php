<meta charset="utf-8">

<?php

require_once 'modelo/cupomModelo.php';

function adicionar() {

if (ehPost()) {
       
        $desconto = strip_tags($_POST ["desconto"]);
        $nome_cupom = strip_tags ($_POST["nome_cupom"]);
        $errors = array();
        
        if (strlen(trim($desconto)) == 0) {
            $errors[] = "Você deve inserir um Desconto.";
        }
        
         if (strlen(trim($nome_cupom)) == 0) {
            $errors[] = "Você deve inserir um nome do cupom.";
        }
      
       
        if (count($errors) > 0 ) {
            $dados = array();
            $dados["errors"] = $errors;
            exibir("cupom/formulario", $dados);
        }else {
            $msg = adicionarCupom ($desconto, $nome_cupom);
            redirecionar("cupom/listarCupons");
              }
        
    } else {
        exibir("cupom/formulario");
    }
}

function listarCupons() {
    
    $dados = array();
    $dados["cupom"] = pegarTodosCupons();
    exibir ("cupom/listar", $dados);
   
}

function ver($id) {
    
    $dados["cupom"] = pegarCupomPorId($id);
    exibir("cupom/visualizar", $dados);
   
}

function deletar($id) {
    $msg = deletarCupom($id);
    redirecionar("./cupom/listarCupons");
}
 
function editar($id){
    if (ehPost()){
        $nome_cupom = $_POST["nome_cupom"];
        $desconto = $_POST ["desconto"];
      editarCupom($nome_cupom, $desconto, $id);
       
       redirecionar ("cupom/listarCupons");
    } else{
        $dados["cupom"]= pegarCupomPorId($id);
        exibir ("cupom/formulario", $dados);
        
   
       
    }   
}
    
?>