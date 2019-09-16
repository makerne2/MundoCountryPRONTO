

<?php
require_once 'modelo/formapagamentoModelo.php';
//require_once 'servico/validarServico.php';
function adicionar() {
    if (ehPost()) {
        $descricao = strip_tags($_POST["descricao"]);
        
            $msg = adicionarformapagamento($descricao);
           
            redirecionar("formapagamento/listarformapagamento");
        }
     else {
        exibir("formapagamento/formulario");
     }
}
function listarformapagamento() {
    $dados = array();
    $dados["formapagamentos"] = pegartodasformapagamento();
    exibir("formapagamento/listar", $dados);
}
function ver($idformaPagamento) {
    $dados ["formapagamento"] = pegarFormapagamentoPorId($idformaPagamento);
    exibir("formapagamento/visualizar", $dados);
}
function deletar($idformaPagamento) {
    $msg = deletarFormapagamento($idformaPagamento);
    redirecionar("formapagamento/listarformapagamento");
}
function editar($idformaPagamento) {
    if (ehPost()) {
        $descricao = $_POST ["descricao"];
        editarformapagamento($idformaPagamento, $descricao);
        redirecionar("formapagamento/listarformapagamento");
    } else {
        $dados["formapagamento"] = pegarFormapagamentoPorId($idformaPagamento);
        exibir("formapagamento/formulario", $dados);
    }
}
?>

