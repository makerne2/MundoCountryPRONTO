
<meta charset="utf-8">
<?php

require_once 'modelo/clienteModelo.php';
require_once   'modelo/EnderecoModelo.php';
function cadastro() {


    if (ehPost()) {
        $nome = $_POST ["nome"];
        $email = $_POST ["email"];
        $senha = $_POST ["senha"];
        $cpf = $_POST ["cpf"];
        $celular = $_POST ["celular"];
        $dataNascimento = $_POST ["dataNascimento"];
        $sexo = $_POST ["sexo"];
        $tipousuario = $_POST ["tipousuario"];
        
        $errors = array();
        
        if (strlen(trim($nome)) == 0) {
            $errors[] = "Você deve inserir um Nome.";
        }
       
        
      if (strlen(trim($email)) == 0) {
            $errors[] = "Você deve inserir um E-mail.";
        }
        else {
            
            if (filter_var($email, FILTER_VALIDATE_EMAIL) == false){
                $errors[]= "Inserir um E-mail válido.";
            }
        }


        if (strlen(trim($senha)) == 0) {
            $errors[] = "Você deve inserir uma Senha.";
        }
       
     
        if (strlen(trim($cpf)) == 0) {
            $errors[] = "Você deve inserir um Cpf.";
        }
        else {
            
           // if (filter_var($cpf, FILTER_VALIDATE_INT) == false){
             //   $errors[]= "Inserir um cpf válido.";
           // }
        }
        
         if (strlen(trim($celular)) == 0) {
            $errors[] = "Você deve inserir um número de celular.";
        }
        else {
            
            if (filter_var($celular, FILTER_VALIDATE_INT) == false){
                $errors[]= "Inserir um número de celular válido.";
            }
        }
        
        if (strlen(trim($dataNascimento)) == 0) {
            $errors[] = "Você deve inserir uma data de nascimento.";
        }
        else {
            
            if (filter_var($dataNascimento, FILTER_VALIDATE_INT) == false){
                $errors[]= "Inserir uma data válida.";
            }
        }
        
         if (strlen(trim($sexo)) == 0) {
            $errors[] = "Você deve inserir um sexo.";
        }
        
         if (strlen(trim($tipousuario)) == 0) {
            $errors[] = "Você deve inserir um tipo de Usuário.";
        } 
        
        
        if (count($errors) > 0 ) {
            $dados = array();
            $dados["errors"] = $errors;
            exibir("cliente/cadastro", $dados);
        }else {
            $msg = adicionarCliente($nome, $email, $senha, $cpf, $celular,$dataNascimento, $sexo, $tipousuario);
            redirecionar("cliente/listarClientes");
              }
       
        
        
    } else {
        exibir("cliente/cadastro");
    }
}

function listarClientes() {
    
    $dados = array();
    $dados["clientes"] = pegarTodosClientes();
    exibir ("cliente/listar", $dados);
   
}

function ver($id) {
    
    $dados["cliente"] = pegarClientePorId($id);
    $dados["enderecos"] = pegarEnderecoPorIdCliente($id);
    exibir("cliente/visualizar", $dados);
   
}

function deletar($id) {
    $msg = deletarCliente($id);
    redirecionar("cliente/listarClientes");
}

function editar($id){
    if (ehPost()){
       $nome= $_POST["nome"];
       $email = $_POST ["email"];
       $senha = $_POST ["senha"];
       $cpf = $_POST ["cpf"];
       $celular = $_POST ["celular"];
       $dataNascimento = $_POST ["dataNascimento"];
       $sexo = $_POST ["sexo"];
       $tipousuario = $_POST ["tipousuario"];
       
       editarCliente($nome, $email, $senha, $cpf, $celular, $dataNascimento, $sexo, $tipousuario, $id);
       redirecionar ("cliente/listarClientes");
    } else{
        $dados["cliente"]= pegarClientePorId($id);
        exibir ("cliente/cadastro", $dados);
        
       
    }   
}

?>

