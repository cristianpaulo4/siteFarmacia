<?php 

	require_once 'conexao/conexao.php';
	$arq = $_POST;
	

	$result = $conn->exec("INSERT INTO famosos(codigo, nome) VALUES ('{$arq['nome']}')");



if ( isset( $_FILES[ 'arquivo' ][ 'name' ] ) && $_FILES[ 'arquivo' ][ 'error' ] == 0 ) {
	    $arquivo_tmp = $_FILES[ 'arquivo' ][ 'tmp_name' ];
	    $foto = $_FILES[ 'arquivo' ][ 'name' ];
	    $extensao = pathinfo ( $foto, PATHINFO_EXTENSION );
	    $extensao = strtolower ( $extensao );
	    if ( strstr ( '.jpg;.jpeg;.gif;.png', $extensao ) ) {
	        $destino = 'imagens / ' . $foto;
	        if ( @move_uploaded_file ( $arquivo_tmp, $destino ) ) {

	        	$up="UPDATE usuario SET nome='$nome',email='$email',senha='$senha',sexo='$genero',imagem_identificacao='$foto' WHERE idusuario=$idusuario_sessao";
	        		if(mysqli_query($conexao,$up)){
	        		    header("Location:index.php?resposta=Pronto !&situacao=alert alert-success");
	        		}
	        		    
	        		}

	        }
	    


	}




 ?>


	