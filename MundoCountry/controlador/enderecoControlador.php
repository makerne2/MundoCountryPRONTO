<meta charset="utf-8">
<?php

require_once 'modelo/EnderecoModelo.php';


function adicionar($id) {


    if (ehPost()) {
        
        $logradouro = strip_tags($_POST ["logradouro"]);
        $numero =  strip_tags($_POST ["numero"]);
        $complemento =  strip_tags($_POST ["complemento"]);
        $bairro =  strip_tags($_POST ["bairro"]);
        $cidade =  strip_tags($_POST ["cidade"]);
        $cep =  strip_tags($_POST ["cep"]);
        
        $errors = array();
        
        if (strlen(trim($logradouro)) == 0) {
            $errors[] = "Você deve inserir um Logradouro.";
        }
       
         if (strlen(trim($numero)) == 0) {
            $errors[] = "Você deve inserir um número.";
        }
        else {
            
            if (filter_var($numero, FILTER_VALIDATE_INT) == false){
                $errors[]= "Inserir um número válido.";
            }
        
        
       if (strlen(trim($complemento)) == 0) {
            $errors[] = "Você deve inserir um Complemento.";
        }
        
          if (strlen(trim($bairro)) == 0) {
            $errors[] = "Você deve inserir um Bairro.";
        }
        
        
         if (strlen(trim($cidade)) == 0) {
            $errors[] = "Você deve inserir uma Cidade.";
        }
       
   
         if (strlen(trim($cep)) == 0) {
            $errors[] = "Você deve inserir um CEP.";
        }
        else {
            
            if (filter_var($cep, FILTER_VALIDATE_INT) == false){
                $errors[]= "Inserir um número de CEP válido.";
            }
        }
        
        if (count($errors) > 0 ) {
            $dados = array();
            $dados["errors"] = $errors;
             //exibir("endereco/adicionar", $dados);
        }else {
            $msg = adicionarEndereco ($id, $logradouro, $numero, $complemento, $bairro, $cidade, $cep);
            redirecionar("endereco/listarEnderecos");
              }
       
        
        }   
    } else {
        exibir("endereco/cadastro");
    }
}

function listarEnderecos() {
    
    $dados = array();
    $dados["enderecos"] = pegarTodosEnderecos();
    exibir ("endereco/listar", $dados);
   
}

function ver($idendereco) {
    
    $dados["endereco"] = pegarEnderecoPorId($idendereco);
    
    exibir("endereco/visualizar", $dados);
   
}
function deletar($idendereco){
    $msg = deletarEndereco($idendereco);
    redirecionar("endereco/listarEnderecos");
}

function editar($idendereco) {
    if (ehPost ()){
       
        $logradouro = $_POST ["logradouro"];
        $numero = $_POST ["numero"];
        $complemento = $_POST ["complemento"];
        $bairro = $_POST["bairro"];
        $cidade = $_POST ["cidade"];
        $cep = $_POST ["cep"];
        editarEndereco($idendereco, $logradouro, $numero, $complemento, $bairro, $cidade, $cep);
        redirecionar("endereco/listarEnderecos");
    }else {
        $dados["endereco"] = pegarEnderecoPorId($idendereco);
        exibir("endereco/cadastro", $dados);
    }
    
}


?>