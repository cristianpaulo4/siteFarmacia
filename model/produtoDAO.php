<?php 

class produtoDAO
{
	
		
	public function salvarProduto($conn, $dados)
	{
	
	$result = $conn->exec("INSERT INTO produto (nome, descricao, preco, qtd, farmacia_idfarmacia) 
	VALUES ('{$dados['nome']}', '{$dados['descricao']}', '{$dados['preco']}', '{$dados['qtd']}', '{$dados['idfarmacia']}')");	


	}






}


 ?>