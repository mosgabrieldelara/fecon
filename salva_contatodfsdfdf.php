 <?php
	session_start();
	require_once("../models/connection.php");
	if(empty($_POST['nome'])){
		$_SESSION['vazio_nome'] = "Campo nome é obrigatório";
		$url = 'https://karaokelitoral.com.br/views/contato.php';
		echo "
			<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=$url'>
		";
	}else{
		$_SESSION['value_nome'] = $_POST['nome'];
	}
	
	if(empty($_POST['email'])){
		$_SESSION['vazio_email'] = "Campo e-mail é obrigatório";
		$url = 'https://karaokelitoral.com.br/views/contato.php';
		echo "
			<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=$url'>
		";
	}else{
		$_SESSION['value_email'] = $_POST['email'];
	}
	
	if(empty($_POST['assunto'])){
		$_SESSION['vazio_assunto'] = "Campo assunto é obrigatório";
		$url = 'https://karaokelitoral.com.br/views/contato.php';
		echo "
			<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=$url'>
		";
	}else{
		$_SESSION['value_assunto'] = $_POST['assunto'];
	}
	
	if(empty($_POST['mensagem'])){
		$_SESSION['vazio_mensagem'] = "Campo mensagem é obrigatório";
		$url = 'https://karaokelitoral.com.br/views/contato.php';
		echo "
			<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=$url'>
		";
	}else{
		$_SESSION['value_mensagem'] = $_POST['mensagem'];
	}
    

    if(empty($_POST['tipoContato'])){
		$_SESSION['vazio_mensagem'] = "Campo mensagem é obrigatório";
		$url = 'https://karaokelitoral.com.br/views/contato.php';
		echo "
			<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=$url'>
		";
	}else{
		$_SESSION['value_mensagem'] = $_POST['tipoContato'];
	}

    if(empty($_POST['turno'])){
		$_SESSION['vazio_mensagem'] = "Campo mensagem é obrigatório";
		$url = 'https://karaokelitoral.com.br/views/contato.php';
		echo "
			<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=$url'>
		";
	}else{
		$_SESSION['value_mensagem'] = $_POST['turno'];
	}


	$nome = mysqli_real_escape_string($conn, $_POST['nome']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$assunto = mysqli_real_escape_string($conn, $_POST['assunto']);
	$mensagem = mysqli_real_escape_string($conn, $_POST['mensagem']);
    $assunto = mysqli_real_escape_string($conn, $_POST['tipoContato']);
	$mensagem = mysqli_real_escape_string($conn, $_POST['turno']);
	
	
	$result_msg_contato = "INSERT INTO $nomeDaTabela (nome, email, telefone, mensagem, tipoContato, turno, created) VALUES (:nome, :email, :telefone, :mensagem, :tipoContato, :turno, NOW())";
	$resultado_msg_contato= mysqli_query($conn, $result_msg_contato)
?>