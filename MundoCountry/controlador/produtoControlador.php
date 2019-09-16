
<meta charset="utf-8">
<?php
require_once 'modelo/produtoModelo.php';
require_once 'modelo/categoriaModelo.php';
function index() {
    redirecionar("produto/listarProdutos");
    
}
function visualizar(){
    $vetor = array();
    $vetor ["nome"] = "Texana Masculina";
    $vetor ["descricao"] = "Texana Goyazes tamanho 36, masculina e couro de jacaré";
    $vetor ["valor"]= "245,00";
    exibir("produto/visualizar", $vetor);
}



function adicionar() {

    if (ehPost()) {
        $nomeproduto = strip_tags( $_POST ["nomeproduto"]);
        $descricao = strip_tags( $_POST ["descricao"]);
        $preco =  strip_tags($_POST ["preco"]);
        $quant_estoque = strip_tags($_POST ["quant_estoque"]);
        $EstoqueMinimo = strip_tags( $_POST ["EstoqueMinimo"]);
        $EstoqueMaximo = strip_tags( $_POST ["EstoqueMaximo"]);
        $categoria = strip_tags ( $_POST ["categoria"]);
        $errors = array();

        if (strlen(trim($nomeproduto)) == 0) {
            $errors[] = "Você deve inserir um Nome do produto.";
        }

        if (strlen(trim($descricao)) == 0) {
            $errors[] = "Você deve inserir uma Descricao.";
        }


        if (strlen(trim($preco)) == 0) {
            $errors[] = "Você deve inserir um Valor.";
        } else {

            if (filter_var($preco, FILTER_VALIDATE_INT) == false) {
                $errors[] = "Inserir um valor válido.";
            }
        }
        
        if (strlen(trim($quant_estoque)) == 0) {
            $errors[] = "Você deve inserir uma quantidade de Estoque.";
        } else {

            if (filter_var($quant_estoque, FILTER_VALIDATE_INT) == false) {
                $errors[] = "Inserir um Estoque válido.";
            }
        }
        
      if (strlen(trim($EstoqueMinimo)) == 0) {
            $errors[] = "Você deve inserir uma quantidade de Estoque.";
        } else {

            if (filter_var($EstoqueMinimo, FILTER_VALIDATE_INT) == false) {
                $errors[] = "Inserir um Estoque válido.";
            }
        }
        
     if (strlen(trim($EstoqueMaximo)) == 0) {
            $errors[] = "Você deve inserir uma quantidade de Estoque.";
        } else {

            if (filter_var($EstoqueMaximo, FILTER_VALIDATE_INT) == false) {
                $errors[] = "Inserir um Estoque válido.";
            }
        }

        if (count($errors) > 0) {
             $dados = array();
             $dados["errors"] = $errors;
             exibir("produto/adicionar", $dados);
           
        } else {
            $msg = adicionarProduto($categoria, $nomeproduto, $preco, $descricao, $quant_estoque, $EstoqueMinimo, $EstoqueMaximo);
            redirecionar("produto/listarProdutos");
        }
        
       
    }else{
       $dados["categorias"]= pegarTodasCategorias();
       
        exibir("produto/formulario", $dados);
    }
}


function listarProdutos() {

    $dados = array();
    $dados["produto"] = pegarTodosProdutos();
    exibir("produto/listar", $dados);
}

function ver($id) {

    $dados["produto"] = pegarProdutoPorId($id);

    exibir("produto/visualizar", $dados);
}

function deletar($codigo) {
    $msg = deletarProduto($codigo);
    redirecionar("produto/listarProdutos");
}

function editar($codigo){
    if (ehPost()){
        $categoria = $_POST["categoria"];
       $nomeproduto = $_POST["nomeproduto"];
       $descricao = $_POST["descricao"];
       $preco = $_POST["preco"];
       $quant_estoque = $_POST["quant_estoque"];
       $EstoqueMinimo = $_POST["EstoqueMinimo"];
       $EstoqueMaximo = $_POST["EstoqueMaximo"];
                       
       editarProduto($categoria, $nomeproduto, $descricao, $preco, $quant_estoque, $EstoqueMinimo, $EstoqueMaximo, $codigo);
       redirecionar ("produto/listarProdutos");
    } else{
        $dados["produto"]= pegarProdutoPorId($codigo);
        $dados["categorias"]= pegarTodasCategorias();
       
       exibir ("produto/formulario", $dados);
        
       
    }   
}

function comprar($codigo){
   
    if(isset($_SESSION["carrinho"])) {
    $produtos = $_SESSION["carrinho"]; 
    } else {
        $produtos = array();
    }

    $produtos[] = $codigo;
    $_SESSION["carrinho"] = $produtos;

   redirecionar("sacola/mostrar"); 
}

?>
  
