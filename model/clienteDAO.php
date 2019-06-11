<?php 

	
	
	class clienteDAO
	{
		
		
		public function cadastrarCliente($conn, $dados)
		{
			
			$result = $conn->exec("INSERT INTO cliente (nome, telefone, cpf, estado, cidade, bairro, rua, numero, login, senha) values (
				'{$dados['nome']}', 
				'{$dados['telefone']}',
				'{$dados['cpf']}',
				'{$dados['estado']}',
				'{$dados['cidade']}',
				'{$dados['bairro']}',
				'{$dados['rua']}',
				'{$dados['numero']}',
				'{$dados['login']}',
				'{$dados['senha']}')");	

			}

			





	}


 ?>