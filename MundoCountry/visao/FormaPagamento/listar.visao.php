<h2>Listar Forma de Pagamento</h2>
<table class="table" border="1">
	<thead>
		<tr>
			<th>ID</th>
			<th>DESCRICAO</th>
			<th>VER</th>
			<th>DELETAR</th>
			<th>ALTERAR</th>
		</tr>
	</thead>
	<?php foreach ($formapagamentos as $formapagamento): ?>
		<tr>
			<td><?=$formapagamento['idformapagamento']?></td>
			<td><?=$formapagamento['descricao']?></td>
			<td><a href="formapagamento/ver/<?=$formapagamento['idformapagamento']?>">Ver</a></td>
			<td><a href="formapagamento/deletar/<?=$formapagamento['idformapagamento']?>">Deletar</a></td>
			<td><a href="formapagamento/editar/<?=$formapagamento['idformapagamento']?>">Alterar</a></td>
		</tr>
	<?php endforeach; ?>
</table>
<a href="formapagamento/adicionar" class="btn btn-primary"> Nova forma de pagamento</a>