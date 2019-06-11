<?php 

	require_once '../controladores/conexao.php';
	require_once '../model/clienteDAO.php';


	$dados = $_POST;

	$cliente = new clienteDAO();

	$cliente ->cadastrarCliente($conn, $dados);



 ?>