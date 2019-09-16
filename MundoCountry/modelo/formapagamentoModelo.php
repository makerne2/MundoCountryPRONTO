
<?php
function adicionarformapagamento($descricao){
	$sql ="INSERT INTO formapagamento (descricao) VALUES ('$descricao')";
	$resultado = mysqli_query ($cnx = conn(), $sql);
	if (!$resultado) { die('Erro ao cadastrar a formapagamento' . mysqli_error ($cnx));}
	return 'formapagamento cadastrado com sucesso!';    
}
function pegarTodasformapagamento(){
	$sql = "SELECT * FROM formapagamento";
	$resultado = mysqli_query(conn(), $sql);
	$formapagamento = array();
	while ($linha = mysqli_fetch_assoc($resultado)){
		$formapagamento[] = $linha;
	}
	return $formapagamento;
}
function pegarformapagamentoPorId($idformaPagamento){
	$sql = "select * from formapagamento where idformapagamento= $idformaPagamento";
	$resultado = mysqli_query(conn(), $sql);
	$formapagamento = mysqli_fetch_assoc($resultado);
	return $formapagamento;
}
function deletarformapagamento ($idformaPagamento){
	$sql = "DELETE FROM formapagamento WHERE idformapagamento = $idformaPagamento";
	$resultado = mysqli_query ($cnx = conn(), $sql);
	if(!$resultado){
		die('Erro ao deletar a formapagamento' . mysqli_error($cnx));
	}
	return 'Formapagamento deletada com sucesso!';
}
function editarFormapagamento($idformaPagamento, $descricao){
	$sql ="update formapagamento set  descricao ='$descricao' where idformaPagamento='$idformaPagamento'";
	$resultado = mysqli_query($cnx = conn (), $sql);
	if (!$resultado) {die('Erro ao alterar formapagamento'. mysqli_error($cnx)); }
	return  'Formapagamento alterado com sucesso!';
}
?>
