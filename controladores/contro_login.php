<?php

	$res = $_POST;
	
	require_once 'conexao.php';
	
		
	$cliente = $conn -> query("SELECT * FROM cliente WHERE login='{$res['nome']}' AND senha='{$res['senha']}'");
	$farmacia = $conn -> query("SELECT * FROM farmacia where login = '{$res['nome']}' and senha='{$res['senha']}'");
	
	$row = $cliente->fetch();
	$row2 = $farmacia->fetch();

	if($row){		
		session_start();
		$_SESSION['id'] = $row['idcliente'];
		$_SESSION['nome']= $row['nome'];		
		header("Location:../pagcliente.php?");	
	
	}else if($row2){		
		session_start();
		$_SESSION['id'] = $row2['idfarmacia'];
		$_SESSION['nome']= $row2['nome'];		
		header("Location:../pgfarmacia.php");
	}else{	

         header("Location:../index.php");	
   
	}

	
	

	


	










?>